<!doctype html>
<html>
    <head>
        <title>Ubah Data User</title>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <form method="post" action="/PWL_POS/public/user/ubah_simpan/{{$data->user_id}}" >
            {{csrf_field() }}
            {{method_field('PUT') }}
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username " value="{{$data->username}}">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama" value="{{$data->nama}}">
            <br>
            <label>password</label>
            <input type="text" name="password" placeholder="Masukkan password" value="{{$data->password}}">
            <br>
            <label>Level ID</label>
            <input type="text" name="level_id" placeholder="Masukkan ID level" value="{{$data->level_id}}">
            <br><br>
            <input type="submit" class="btn btn-success" value="Ubah">
            
        </form>
    </body>

</html>