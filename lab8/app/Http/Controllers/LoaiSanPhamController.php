<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Loaisanpham;
use App\Http\Resources\Loaisanpham as LoaisanphamResource;

class LoaisanphamController extends Controller
{
    public function index()
    {
        $loaisanpham = Loaisanpham::all();
        $arr = [
            'status' => true,
            'message' => 'Danh sách loại sản phẩm',
            'data' => LoaisanphamResource::collection($loaisanpham)
        ];
        return response()->json($arr, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'tenloai' => 'required',
        ]);
        $loaisanpham = Loaisanpham::create($input);
        $arr = [
            'status' => true,
            'message' => 'Loại sản phẩm đã lưu thành công',
            'data' => new LoaisanphamResource($loaisanpham)
        ];
        return response()->json($arr, 201);
    }

    public function show($id)
    {
        $loaisanpham = Loaisanpham::find($id);
        if (is_null($loaisanpham)) {
            $arr = [
                'success' => false,
                'message' => 'Không có loại sản phẩm này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết loại sản phẩm',
            'data' => new LoaisanphamResource($loaisanpham)
        ];
        return response()->json($arr, 200);
    }

    public function update(Request $request, Loaisanpham $loaisanpham)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'tenloai' => 'required',
        ]);

        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $loaisanpham->tenLoai = $input['tenloai'];
        $loaisanpham->moTa = $input['mota'] ?? $loaisanpham->moTa;
        $loaisanpham->save();

        $arr = [
            'status' => true,
            'message' => 'Loại sản phẩm cập nhật thành công',
            'data' => new LoaisanphamResource($loaisanpham)
        ];
        return response()->json($arr, 200);
    }

    public function destroy(Loaisanpham $loaisanpham)
    {
        $loaisanpham->delete();
        $arr = [
            'status' => true,
            'message' => 'Loại sản phẩm đã được xóa',
            'data' => []
        ];
        return response()->json($arr, 200);
    }
}