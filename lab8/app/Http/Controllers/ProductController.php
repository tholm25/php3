<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $arr = [
            'status' => true,
            'message' => 'Danh sách sản phẩm',
            'data' => ProductResource::collection($products)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $product = Product::create($input);
        $arr = [
            'status' => true,
            'message' => 'Sản phẩm đã lưu thành công',
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            $arr = [
                'success' => false,
                'message' => 'Không có sản phẩm này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết sản phẩm',
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'tenSP' => 'required',
            'gia' => 'required'
        ]);

        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $product->tenSP = $input['tenSP'];
        $product->gia = $input['gia'];
        $product->antien = $input['antien'] ?? $product->antien;
        $product->save();

        $arr = [
            'status' => true,
            'message' => 'Sản phẩm cập nhật thành công',
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $arr = [
            'status' => true,
            'message' => 'Sản phẩm đã được xóa',
            'data' => []
        ];
        return response()->json($arr, 200);
    }
}