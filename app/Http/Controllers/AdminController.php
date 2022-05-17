<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Middleware\isAdmin;

class AdminController extends Controller
{
    /**
     * Membuat method constructor untuk admin
     * 
     */
    public function _construct(){
        $this->middleware('auth::admin')->except('login','register','registerAsAdmin','loginAsAdmin','logoutAdmin');
    }
    /**
     * Halaman awal untuk admin
     */
    public function index(){
        // user yang sedang login
        $user = Auth::user();
        // mengambil data order
        $orders = Order::all();
        return view('admin.index');
    }

    /**
     * Halaman login untuk admin
     */
    public function login(){
        return view('admin.login');
    }

    /**
     * Halaman Registrasi untuk admin
     */
    public function register(){
        return view('admin.register');
    }

    /**
     * Halaman untuk menampilkan data pesanan
     */
    public function pesanan(){
        return view('admin.pesanan');
    }

    /**
     * Daftar sebagai admin
     * @param  \Illuminate\Http\Request  $request
     */
    public function registerAsAdmin(Request $request){

       // Check if email is duplicate
       $hasil = DB::table('users')->where('email', $request->email)->count();

         if($hasil > 0){
                Alert::error('Email sudah digunakan');
                return redirect('registerAdmin');
         }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

      
        return redirect('pesananAdmin');
    }

    /**
     * login sebagai admin
     * @param  \Illuminate\Http\Request  $request
     */
    public function loginAsAdmin(Request $request){
        // Check Email and Password
        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                return redirect('pesananAdmin');
            }
        }

        Alert::error('Gagal', 'Email atau password salah');
    }

    public function loginToAdmin(){
        return view('admin.login');
    }

    public function registerAdmin(){
        return view('admin.register');
    }

    public function pesananAdmin(){
        return view('admin.pesanan',[
            'pesanan' => Order::all()
        ]);
    }

    public function konfirmasi($id){
        $pesanan = Order::find($id);
        $pesanan->status = true;
        $pesanan->save();

        Alert::success('Pesanan Berhasil', 'Terima Kasih');
        return redirect()->route('pesananAdmin');
    }

 

    public function logoutAdmin(){
        Auth::logout();
        return view('admin.login');
    }
}
