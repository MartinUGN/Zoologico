<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZoologicoController extends Controller
{
    public function principal(){
        return "Bienvenido al zoologico"
        ."<br>"
        .""
        .'<img src="https://img.freepik.com/vector-gratis/animales-zoologico-fondo-naturaleza-salvaje_1308-44197.jpg">'
        ."<br>"
        .'<a href="http://localhost/laravel/zoologico/public/zoologico/raton">'."Raton".'</a>'
        ."<br>"
        .'<a href="http://localhost/laravel/zoologico/public/zoologico/chivo">'."Chivo".'</a>'
        ."<br>"
        .'<a href="http://localhost/laravel/zoologico/public/zoologico/perro">'."Perro".'</a>';
       
    }

    public function raton(){
        return "Este es un raton".
        "<br>".
        '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/%D0%9C%D1%8B%D1%88%D1%8C_2.jpg/250px-%D0%9C%D1%8B%D1%88%D1%8C_2.jpg">'.
        "<br>".
        '<a href="http://localhost/laravel/zoologico/public/zoologico">'."Pagina principal".'</a>';

    }

    public function chivo(){

        return "Este es un Chivo"
        ."<br>"
        .'<img src="https://us.123rf.com/450wm/michelangeloop/michelangeloop1509/michelangeloop150900057/45056605-una-cabra-nos-mira.jpg?ver=6">'
        ."<br>"
        .'<a href="http://localhost/laravel/zoologico/public/zoologico">'."Pagina principal".'</a>';
    }

    public function perro(){
        
        return "Este es un perro"
        ."<br>"
        .'<img src="https://dam.ngenespanol.com/wp-content/uploads/2019/10/perros-personalidad-2.jpg">'
        ."<br>"
        .'<a href="http://localhost/laravel/zoologico/public/zoologico">'."Pagina principal".'</a>';
        
    }

}


// public function show($curso){
//     return view ('cursos.show', compact('curso'));
   
// }
