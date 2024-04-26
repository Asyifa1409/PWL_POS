# JOBSHEET 4 - Eloquent ORM
**Nama: Asyifa Nurfadilah**  
**Kelas: TI 2F**  
**NIM: 2241720257**  

## Praktikum 1
1. $fillable = [ 'user_id','level_id', 'username', 'nama', 'password'];
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/cc8d403d-0257-4ed4-bd38-da13106fe103)
2. $fillable = [ 'user_id','level_id', 'username', 'nama'];
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/b3b06198-a2c3-4921-bcc2-40f0171f692c)
3. Apa itu mass asssignment?  
    Mass assignment adalah proses penyimpanan sekaligus banyak data ke dalam basis data menggunakan suatu model Eloquent di Laravel

## Praktikum 2
### Praktikum 2.1
1. find(1)  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/1a0036ce-c8de-4081-ac6d-304eec5c029e)
2. where('level_id', 1)->first()  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/effeb5ed-c66f-48cd-92b7-e1ef07ad8b5b)
3. firstWhere('level_id, 1)  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/a1e57523-b1e2-47a4-8779-8379780d813c)
4. findOr(1, ['username', 'nama'], function(){})  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/765de955-935e-4288-b524-49d2f1332c8a)
5. findOr(20, ['username', 'nama'], function(){})  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/619ac83f-c17b-4909-98bc-17f3fa656b15)
### Praktikum 2.2
1. FindOrFail(1)  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/e24b830c-a450-41c4-be9e-8420fe52346f)
2. where('username', 'manager9')->firstOrFail()  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/c4fcf0ba-e529-41a5-bd82-ae3488110ed4)
### Praktikum 2.3
1. where('level_id', 2)->count()  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/5e789b5f-d6cb-4189-927a-69a0dbc97bd3)
2. menampilkan jumlah pengguna
   - hasil  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/9a9ab917-1610-4cdb-9f0a-dac6af6d6bb8)
   - kode
     ```
      <!doctype html>
        <html>
            <head>
                <title>Data User</title>
            </head>
            <body>
                <h1>Data User</h1>
                <table border="1" cellpadding="2" cellspacing="0">
                    <tr>
                        <th>Jumlah Pengguna</th>
                    </tr>
                    <tr>
                        <td>{{ $data }}</td>
                    </tr>
                </table>
            </body>
        </html>

     ```
## Praktikum 2.4
1. firstOrCreate()  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/f2a06297-fec6-48f2-9bc8-d2f29807f79c)
2. firstOrCreate() 2  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/16d815ae-b680-413a-92f7-9c718cda6ea6)
    ada di database:  
   ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/f1a13919-848c-4266-b47e-4305d23be3bd)  
4. firstOrNew()   
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/778840f1-d819-462d-a2d6-1a22f3036c0e)  
    tidak ada di database datanya
5. firstOrNew, save()  
   ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/c083d36d-4869-4b96-9316-9c55e7ff492f)  
## Praktikum 2.5
1. isDirty()  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/1416effd-19e4-4913-a302-cde757215ede)
2. wasChanged()  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/8c7c237d-e336-4e18-94f3-31921a263040)
## Praktikum 2.6
1. halaman user  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/7aa61ff9-ce1f-4619-92ee-b829f1607394)
2. halaman tambah user  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/d982524a-d9c1-4f65-85fb-5c6afc19fa5b)
   pada halaman awal user:  
   ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/b0d63f84-7951-4139-87d0-3af8e08746ea)
3. halaman edit user
    - ubah nama user dari id manager 56 yang sebelumnya manager 55  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/12173e4f-8cb9-4bdb-ac8a-836729af259b)
    - pada halaman awal user  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/c308d6da-d120-4526-b8a1-e040955f4467)
4. hapus user 
    hapus manager15  
    ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/4d629305-2e96-4acf-9f1a-d2a2e44389f3)
## Praktikum 2.7
1. hasil BelongsTo() memperlihatkan relasinya  
   ![image](https://github.com/Asyifa1409/PWL_POS/assets/128016402/eb12c34c-e7d5-4aef-97e8-7fedeaf63a91)
