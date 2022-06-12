<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use Mail;
use App\Models\Mahasiswa;
use App\Models\Admin;
use App\Models\Ajuan;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
  public function index()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = Mahasiswa::all();
      
      return view ('admin.index', compact(['admin', 'mahasiswa']));
  }    
  public function suratBP()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = Mahasiswa::all();
      
      return view ('admin.kirimsuratbp', compact(['admin', 'mahasiswa']));
  }    
}
