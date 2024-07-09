<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
   public function index()
   {
       // Exemple de traitement pour obtenir des données à afficher
       $data = [
           'title' => 'Welcome to the Home Page',
           'content' => 'This is some content for the home page.',
       ];

       // Renvoyer une vue avec des données
       return view('home.index', $data);
   }
}
