<!doctype html>
<html>
    <head>
        <title>Tambah User</title>
    </head>
    <body>
        <h1>Form Tambah User</h1>
        <form method="post" action="/PWL_POS/public/user/tambah_simpan" >
            {{csrf_field() }}
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama">
            <br>
            <label>password</label>
            <input type="text" name="password" placeholder="Masukkan password">
            <br>
            <label>Level ID</label>
            <input type="text" name="level_id" placeholder="Masukkan ID level">
            <br><br>
            <input type="submit" class="btn btn-success" value="Simpan">
            
        </form>
    </body>

</html>