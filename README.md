Nama  : YUNI HIDAYANI
NIM   : 311910078
Kelas : 1243B/B311FT-FH

# UTS Pemrograman Web 2
## Eksperimen SQL Injection pada Aplikasi Web (CodeIgniter 4)

## Pendahuluan
Keamanan aplikasi web merupakan aspek penting dalam pengembangan sistem. Salah satu celah keamanan yang sering terjadi adalah **SQL Injection**, yaitu teknik serangan dengan cara menyisipkan perintah SQL ke dalam input pengguna.

Eksperimen ini bertujuan untuk memahami bagaimana SQL Injection bekerja serta dampaknya terhadap sistem login yang tidak memiliki validasi input yang baik.

## Tujuan
1. Memahami konsep SQL Injection  
2. Menguji kerentanan sistem login  
3. Mengetahui bagaimana query dapat dimanipulasi  
4. Menjadi dasar untuk meningkatkan keamanan aplikasi  

##  Teknologi yang Digunakan
- PHP (CodeIgniter 4)
- MySQL / MariaDB
- XAMPP
- Visual Studio Code
- Git & GitHub


## Metode Eksperimen

Eksperimen dilakukan dengan membuat sistem login sederhana tanpa validasi input yang aman.

### Query yang digunakan:
```sql
SELECT * FROM user WHERE useremail='$email'

Simulasi SQL Injection
Input yang digunakan:
' OR '1'='1
Penjelasan:
' OR '1'='1 selalu bernilai TRUE
Query akan mengembalikan data meskipun tanpa password yang valid

_## Hasil Eksperimen_
Setelah input dimasukkan, sistem berhasil login tanpa verifikasi password.
Hal ini membuktikan bahwa sistem rentan terhadap SQL Injection.

