<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class AuthController extends Controller
{
    public function index(){
        //ambil data user dan disimpan di $user
        $user = Auth::user();

        if($user){
            //jika user level admin
            if($user->level_id == '1'){
                return redirect()->intended('admin');
            }
            //jika user level manager
            else if($user->level == '2'){
                return redirect()->intended('manager');

            }
            
        }
        return view('login');

        
    }
    public function proses_login(Request $request){
        //validasi ketika tombol login diklik
        //username dan password wajib diisi
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //ambil data request username & password
        $credential = $request->only('username', 'password');
        //apakah sesuai data
        if (Auth::attempt($credential)){
            //jika berhasil data disimpan dalam $user
            $user = Auth::user();

            //mengecek penyesuaian level untuk menuju ke halaman sesuai levelnya
            if($user->level_id == '1'){
                //dd($user->level_id);
                return redirect()->intended('admin');
            }else if($user->level_id == '2'){
                return redirect()->intended('manager');
            }
            //jika belum punya role
            return redirect()->intended('/');

        }
        //kembali ke hal. login
        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'pastikan kembali username dan password yang dimasukkan sudah benar']);

        
    }

    public function register(){
        return view('register');
    }

    public function proses_register(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
                
        }

        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        UserModel::create($request->all());
        return redirect()->route('login');
    }

    public function logout(Request $request){
        $request->session->flush();
        Auth::logout();
        return redirect('login');
    }
}
