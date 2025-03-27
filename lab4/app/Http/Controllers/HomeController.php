<?php 
    namespace App\Http\Controllers;

    class HomeController extends Controller{
        public function trangChu(){
            return view('index');
        }

        public function lienHe(){
            return view('lienhe');
        }
    }
?>