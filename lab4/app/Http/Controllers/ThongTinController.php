<?php 
    namespace App\Http\Controllers;

    use App\Models\ThongTin;
    use Illuminate\Support\Facades\DB;
    use Carbon\Carbon;
    class ThongTinController extends Controller{
        public function thongTin(){
            $thongtins = 
            ThongTin::orderBy('id', 'DESC')->get();
            return view('thongtin', compact('thongtins'));
        }

        public function chiTiet($id){
            $thongtin = DB::table('thong_tins')->where('id', $id)->first();
            $thongtin->created_at = Carbon::parse($thongtin->created_at);
            return view('chitiet', ['thongtin' => $thongtin]);
        }

        public function loaiTin($loai)
        {
        $thongtins = DB::table('thong_tins')->where('category', $loai)->get();

        $danhMuc = [
            1 => "Thời sự",
            2 => "Kinh tế",
            3 => "Thế giới",
        ];
        return view('loaitin', ['thongtins' => $thongtins, 'loai' => $danhMuc[$loai]]);
        // return view('loaitin', ['thongtins' => $thongtins, 'loai' => $loai]);
        }
    }
?>