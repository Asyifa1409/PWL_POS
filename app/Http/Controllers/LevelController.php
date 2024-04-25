<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel;

class LevelController extends Controller
{
    public function index() 
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Level',
            'list' => ['Home', 'Level']
        ];

        $page = (object) [
            'title' => 'daftar level yang terdaftar dalam sistem'
        ];
        $activeMenu = 'user';
        $level = levelModel::all();
        return view('level.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level'=> $level,'activeMenu' => $activeMenu]);

    }
}
