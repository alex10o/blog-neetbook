<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
   public function index(){
    return "Bienvenidos a la página cursos";
   }
   public function create(){
    return "En esta página podrás crear un curso";
   }

   public function show ($curso){
    return "Bienvenio al curso: $curso";
   }
}