<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index()
    {
        $data = Tin::all();
        return view('danhsach', ['data' => $data]);
    }

    public function chitiet($id)
    {
        $tin = Tin::findOrFail($id);
        return view('chitiet', ['tin' => $tin]);
    }

    public function them()
    {
        return view("themtin");
    }

    public function them_(Request $request)
    {
        $request->validate([
            'tieuDe' => 'required|max:255',
            'tomTat' => 'required',
            'hinhAnh' => 'required|image|max:2048',
            'idLT' => 'required|integer',
        ]);

        if ($request->hasFile('hinhAnh')) {
            $image = $request->file('hinhAnh');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('image'), $imageName);
            
            $urlHinh = $imageName;
        }

        $tin = new Tin();
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->urlHinh = $urlHinh;
        $tin->idLT = $request->idLT;
        $tin->created_at = now();
        $tin->save();
        
        return redirect()->route('tin.danhsach')->with('success', 'Thêm tin thành công!');
    }

    public function xoa($id)
    {
        $tin = Tin::findOrFail($id);
        if ($tin->urlHinh && file_exists(public_path('image/'.$tin->urlHinh))) {
            unlink(public_path('image/'.$tin->urlHinh));
        }

        $tin->delete();   
        return redirect()->route('tin.danhsach')->with('success', 'Xóa tin thành công!');
    }

    public function capnhat($id)
    {
        $t = Tin::find($id);
        if ($t == null) return redirect('/thongbao');
        return view("capnhattin", ['tin' => $t]);
    }

    public function capnhat_(Request $request, $id)
    {
        $tin = Tin::findOrFail($id);
        
        $request->validate([
            'tieuDe' => 'required|max:255',
            'tomTat' => 'required',
            'hinhAnh' => 'nullable|image|max:2048',
            'idLT' => 'required|integer',
        ]);

        if ($request->hasFile('hinhAnh')) {
            if ($tin->urlHinh && file_exists(public_path('image/'.$tin->urlHinh))) {
                unlink(public_path('image/'.$tin->urlHinh));
            }

            $image = $request->file('hinhAnh');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('image'), $imageName);
            
            $tin->urlHinh = $imageName;
        }
    
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->idLT = $request->idLT;
        $tin->save();
        
        return redirect()->route('tin.danhsach')->with('success', 'Cập nhật tin thành công!');
    }
}