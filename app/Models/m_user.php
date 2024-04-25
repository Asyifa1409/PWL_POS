<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserModel extends Model
{
    protected $table = 'm_user'; //mendefinisikan nama tabel yang digunakan oleh model ini
    public $timestamps = false;
    protected $primaryKey = 'user_id'; //mendefinisikan primary key dari tabel yang digunakan

    
    protected $fillable = [
        'user_id',
        'level_id', 
        'username', 
        'nama', 
        'password'
    ];
}    