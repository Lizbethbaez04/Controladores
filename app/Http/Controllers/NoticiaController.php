<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista()
    {
        $noticias = array();
        $noticias[] = array("id" =>1, "titulo" => "Descubren cura del cancer", "fecha" => "10/01/2021");
        $noticias[] = array("id" =>2, "titulo" => "Vuelven clases presenciales", "fecha" => "11/01/2021");

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public function detalles($id)
    {
        //Simulacion de solicitud de detalles de noticia
        $detalles_noticia = array();
        $detalles_noticia["titulo"] = "Noticia #".$id;
        $detalles_noticia["autor"] = "Autor de la noticia #".$id;
        $detalles_noticia["fecha"] = "28/01/2021";
        $detalles_noticia["cuerpo"] = "Este es el texto de la noticia #".$id;
        $detalles_noticia["fotos"] = "https://wipy.tv/wp-content/uploads/2019/01/Muri%C3%B3-el-perrito-m%C3%A1s-famosos-de-internet-2.jpg";

        $argumentos = array();
        $argumentos["noticia"] = $detalles_noticia;

        return view('noticias.detalles', $argumentos);
    }
}
