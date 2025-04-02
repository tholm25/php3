<?php 
    namespace App\Http\Controllers;
    use App\Models\Tin;

    class HomeController extends Controller{
        public function trangchu()
        {
            $tinMoiNhat = Tin::latest()
                            ->take(3)
                            ->get();
            
            return view('index', ['tinMoiNhat' => $tinMoiNhat]);
        }   

        public function lienHe(){
            return view('lienhe');
        }
    }
?>