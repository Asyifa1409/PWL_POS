# JOBSHEET 3 - MIGRATION, SEEDER, DB FAÇADE, QUERY BUILDER, dan ELOQUENT ORM
**Nama: Asyifa Nurfadilah**  
**Kelas: TI 2F**  
**NIM: 2241720257**  

## Pertanyaan
1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?  
    APP_KEY dalam file .env pada framework Laravel adalah kunci enkripsi yang digunakan untuk mengamankan data sensitif dalam aplikasi, seperti sesi pengguna dan informasi otentikasi
2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?
    php artisan key:generate
3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi?
dan untuk apa saja file migrasi tersebut?  
    terdapat 4 file migrasi default, create_users_table, create_password_resets_table, create_failed_jobs_table, create_access_personal_token semuanya diperlukan untuk autentikasi
4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output
dari fungsi tersebut?
    Kode $table->timestamps(); dalam sebuah file migrasi Laravel memiliki tujuan untuk secara otomatis memasukkan dua kolom timestamp ke dalam tabel yang sedang dibuat, yaitu created_at dan updated_atv
5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?
    Fungsi $table->id(); dalam sebuah file migrasi Laravel digunakan untuk membuat kolom kunci utama bertipe BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?
    - Menggunakan $table->id();:
    Dalam pendekatan ini, Laravel akan secara otomatis menggunakan nama kolom default yaitu id. Kolom kunci utama akan disebut id.
    - Menggunakan $table->id('level_id');:
    Dalam pendekatan ini,  kita memberikan nama khusus untuk kolom kunci utama, seperti level_id
7. Pada migration, Fungsi ->unique() digunakan untuk apa?
    Fungsi ->unique() dalam sebuah file migrasi Laravel digunakan untuk menentukan bahwa sebuah kolom tertentu harus memiliki nilai unik di antara semua baris dalam tabel
8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?
    Kolom level_id pada tabel m_user menggunakan ->unsignedBigInteger('level_id'). kolom level_id adalah kunci asing (foreign key) yang merujuk ke tabel m_level, karena itu menggunakan unsignedBigInteger
9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?
    Kelas Hash dalam Laravel digunakan untuk menghasilkan hash dari suatu nilai, seperti password. Tujuan utama dari menggunakan kelas Hash adalah untuk mengamankan data sensitif, seperti kata sandi pengguna, dengan cara mengacak nilainya sehingga sulit bagi pihak yang tidak berwenang untuk membaca atau menebaknya.
   Ketika memanggil metode make pada kelas Hash, Laravel akan menggunakan algoritma hash yang aman untuk mengacak nilai 1234 dan mengembalikan nilai hash yang dihasilkan.
11. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?
    Tanda tanya (?) yang terdapat dalam query builder digunakan untuk menandai parameter dalam sebuah query untuk memasukkan nilai dinamis ke dalam query tanpa perlu khawatir tentang sanitasi data atau serangan SQL injection.
12. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan protected $primaryKey = ‘user_id’; ?
    Penulisan kode protected $table = 'm_user'; dan protected $primaryKey = 'user_id' memiliki tujuan untuk menentukan nama tabel yang terkait dengan model dan kolom kunci utama (primary key) dari tabel tersebut.
13. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan
    eloquent ORM, Eloquent menyediakan metode bawaan untuk operasi CRUD, serta fitur-fitur seperti relasi antar-model, pencarian, validasi data, dan banyak lagi.

