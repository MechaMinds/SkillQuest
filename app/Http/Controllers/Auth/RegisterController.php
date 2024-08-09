<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function daftar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Pendaftaran user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Generate dan kirim email verifikasi
        $verificationToken = Str::random(60);
        $user->remember_token = $verificationToken;
        $user->save();

        $this->sendVerificationEmail($user);

        return redirect()->route('login')->with('success', 'Pendaftaran Berhasil! Silakan cek email Anda untuk verifikasi.');
    }

    protected function sendVerificationEmail($user)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Ubah ke PHPMailer::ENCRYPTION_SMTPS jika menggunakan SSL
            $mail->Port = env('MAIL_PORT');

            //Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($user->email, $user->name);

            // Content
            $mail->isHTML(true); // Ganti menjadi true untuk HTML
            $mail->Subject = 'Verifikasi Email';
            $mail->Body    = 'Klik link berikut untuk verifikasi akun Anda: <a href="'.route('verify.email', ['token' => $user->remember_token]).'">Verifikasi Email</a>';

            $mail->send();
            \Log::info('Verification email sent to:', ['email' => $user->email]);
        } catch (Exception $e) {
            \Log::error('Verification email could not be sent. Mailer Error:', ['error' => $e->getMessage()]);
        }
    }

    public function verifyEmail($token)
    {
        $user = User::where('remember_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Token verifikasi tidak valid.');
        }

        $user->email_verified_at = Carbon::now();
        $user->remember_token = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Email Anda telah diverifikasi.');
    }
}
