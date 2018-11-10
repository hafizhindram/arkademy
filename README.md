# arkademy
Jawaban Soal Grandbootcamp Arkademy

Saya mengerjakan soal grandbootcamp menggunakan framework laravel
untuk melihat jawaban bisa clone project, lalu install composer kembali dengan perintah "composer install"
jawaban soal nomor satu bisa diakses dengan url sebagai berikut : http://localhost:8000/api/nomorsatu
jawaban soal nomor tiga bisa diakses dengan url sebagai berikut : http://localhost:8000/api/nomortiga
jawaban soal nomer enam sebagai berikut : 
SELECT cat.id, cat.name, COUNT(prod.id) AS jumlah_product 
from product_categories cat, products prod 
WHERE cat.id=prod.category_id GROUP BY prod.category_id;
untuk jawaban soal nomer 7 saya sertakan database yang berada difolder database, dengan nama file arkademy.sql
konfigurasi koneksi berada di file env yang berisi : host berisi localhost, database bernama arkademy, user root, tanpa password


