<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       return view('index');
   }

   public function enkripsi()
   {
       return view('enkripsi');
   }

   public function deskripsi()
   {
       return view('deskripsi');
   }
}
