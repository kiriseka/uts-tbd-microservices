Repository untuk mengumpulkan Ujian Tengah Semester Teknologi Basis Data

Kelompok 5: Penyewaan Alat Pesta
Nama Anggota:
1. Dilla Saldia Fadillah (1177050029)
2. Andin Aprila Sari (1197050015)
3. Maulana Hamdani (1197050066)
4. Nurhadi Qomaruddin (1197050100)

# Tentang Aplikasi
Aplikasi yang akan dibuat merupakan aplikasi penyewaan alat pesta yang diberi nama Pesta.inc. Aplikasi ini dibuat dengan beberapa microservice yang berbeda lalu disatukan ke dalam sebuah website utama (website penghubung). Ada 3 buah microservice, yaitu microservice untuk menghandle order, item, dan juga employee. Microservice untuk menghandle order dibuat dengan menggunakan bahasa pemrograman PHP dengan bantuan framework Laravel dan menggunakan PostgreSql sebagai dbms. 


# Dokumentasi Proses Analisis/Perancangan
![Analisis Perancangan](https://user-images.githubusercontent.com/92593820/198835379-780c1cd8-c160-4b1a-8b93-72505cea4272.png)




# Dokumentasi Arsitektur Microservices
![Microservices drawio](https://user-images.githubusercontent.com/92593820/198835277-f0925a40-ca2d-4a2e-9f8a-532c232d1241.png)


# Pembagian Tugas
Dalam pembuatan aplikasi ini, setiap orang memiliki tugasnya masing-masing. Pembagian tugas tersebut adalah sebagai berikut: 

1. Maulana Hamdani (1197050066): 
- Menerapkan front end dari website utama (website penghubung) menjadi sebuah aplikasi dengan framework Laravel
- Menghubungkan aplikasi website utama dengan api yang disediakan microservices lain 
- Membuat microservices yang menghandle fitur order

2. Nurhadi Qomaruddin (1197050100):
- Membuat microservices yang menghandle fitur item
- Membuat microservices yang menghandle fitur employee

3. Dilla Saldia Fadillah (1177050029)
- Membuat Frontend Menggunakan HTML & CSS
