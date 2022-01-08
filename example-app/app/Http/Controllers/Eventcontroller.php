<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Eventcontroller extends Controller
{
   public function index() {

    $nome = "fabio";
    $idade = 22;
 
    $arr = [10,20,30,40,50];
 
    $nomes = ["matheus", "maria", "joao", "saulo"];
 
     return view('welcome',
         [ 
             'nome' => $nome,
             'idade' => $idade, 
             'profissao' => "programador",
             'arr' => $arr,
             'nomes' => $nomes
         ]);
   }

   public function create (){
       return view('events.create');
   }
}
