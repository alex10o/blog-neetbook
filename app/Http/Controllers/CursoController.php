<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
   public function index(){
    return view('Curso.Index') ;
   }
   public function create(){
    return view('Curso.Create');
   }

   public function show ($curso){
    return view('Curso.Show',['curso'=>$curso]);
   }
}
