<?php 
    namespace App\Http\Controllers;

    class TinController extends Controller{
        public function trangChu(){
            return view('index');
        }

        public function lienHe(){
            return view('lienhe');
        }

        public function chiTiet($id){
            return '<h1>Đây là trang hiện chi tiết của tin có id là: '. $id .'</h1>';
        }
    }
?>