def karakter_terbanyak(teks):
    # Menghitung frekuensi setiap karakter dalam teks
    frekuensi = {}
    for char in teks:
        if char != ' ':  # Mengabaikan spasi
            if char in frekuensi:
                frekuensi[char] += 1
            else:
                frekuensi[char] = 1

    # Menemukan karakter dengan frekuensi tertinggi
    karakter_terbanyak = None
    jumlah_terbanyak = 0
    
    for char in teks:
        if char in frekuensi and frekuensi[char] > jumlah_terbanyak:
            karakter_terbanyak = char
            jumlah_terbanyak = frekuensi[char]
    
    return karakter_terbanyak

# Contoh penggunaan
teks = "belajar bahasa python"
hasil = karakter_terbanyak(teks)
print(hasil)
