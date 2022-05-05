<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Halaman awal untuk admin
     */
    public function index(){
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
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
            return redirect('pesananAdmin');
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
}
