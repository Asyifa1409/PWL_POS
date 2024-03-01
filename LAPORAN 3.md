# JOBSHEET 3 - MIGRATION, SEEDER, DB FAÇADE, QUERY BUILDER, dan ELOQUENT ORM
**Nama: Asyifa Nurfadilah**
**Kelas: TI 2F**
**NIM: 2241720257**

## Praktikum 1 - Pengaaturan Database
1. Buka aplikasi phpMyAdmin, dan buat database baru dengan nama PWL_POS
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/46885ecc-fa74-417f-b9b7-d6b77be6b9f1)
2. Buka aplikasi VSCode dan buka folder project PWL_POS yang sudah kita buat
3. Copy file .env.example menjadi .env
4. Buka file .env, dan pastikan konfigurasi APP_KEY bernilai. Jika belum bernilai silahkan kalian generate menggunakan php artisan.
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/5dc456ab-add9-4a89-891b-294a61662633)
5. Edit file .env dan sesuaikan dengan database yang telah dibuat
6. Hasil: 
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/f40f06ec-216a-427b-bae1-fec053974b4c)

## Praktikum 2.1 - Pembuatan file migrasi tanpa relasi
1. Buka terminal VSCode kalian, untuk yang di kotak merah adalah default dari laravel
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/07a65566-e759-4daf-994b-454655e39df7)

2. Kita abaikan dulu yang di kotak merah (jangan di hapus)
3. Kita buat file migrasi untuk table m_level dengan perintah
    ```
    php artisan make:migration create_m_level_table --create=m_level
    ```
4. Kita perhatikan bagian yang di kotak merah, bagian tersebut yang akan kita modifikasi sesuai desain database yang sudah ada
    ```
    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('m_level', function (Blueprint $table) {
                $table->id('level_id');
                $table->string('level_kode', 10)->unique();
                $table->string('level_nama', 100);
                $table->timestamps();
            });
        }
    
        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('m_level');
        }
    };

    ```
5. Simpan kode pada tahapan 4 tersebut, kemudian jalankan perintah ini pada terminal VSCode untuk melakukan migrasi
    ```
    php artisan migrate
    ```
6. Kemudian kita cek di phpMyAdmin apakah table sudah ter-generate atau belum
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/8a89fe8c-b9e2-4884-91c9-f1c3c90b4578)

7. Ok, table sudah dibuat di database
8. Buat table database dengan migration untuk table m_kategori yang sama-sama tidak memiliki foreign key
9. Laporkan hasil Praktikum-2.1 ini dan commit perubahan pada git.


