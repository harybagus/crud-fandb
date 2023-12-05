# Website CRUD Food and Beverage

<img src="https://github.com/harybagus/crud-fandb/assets/126042692/e820c438-ef1d-4b62-bf70-af60ef58dc4a" width="300">

## F&Bagus
F&Bagus adalah sebuah website yang menampilkan berbagai macam makanan dan minuman beserta deskripsi dan harganya.
Anda bisa menambahkan makanan dan minuman favorit agar menu tersebut ada di website ini, Anda juga bisa mengubah, atau menghapusnya.

## Teknologi yang digunakan
Berikut teknologi yang saya gunakan untuk membuat website ini:
* HTML
* TailwindCSS
* JavaScript
* PHP
* MySQL

## Instalasi
1. Clone repository ini ke dalam folder htdocs/pemrograman/latihan.
   > Jika Anda ingin meng-clone repository ini di folder htdocs, maka ada hal yang harus diubah, yaitu:
     >> Pergi ke file config.php di folder app/config, ubah `define('BASEURL', "http://localhost/pemrograman/latihan/crud-fandb/public");` pada baris ke 4, menjadi `define('BASEURL', "http://localhost/crud-fandb/public");`
2. Buka XAMPP lalu jalankan Apache dan MySQL.
3. Import database crud_fandb.sql ke MySQL
4. Buka browser favorit Anda lalu ketikkan `localhost/pemrograman/latihan/crud-fandb/public`
   > Jika Anda meng-clone repository ini di htdocs maka ketikkan `localhost/crud-fandb/public`
