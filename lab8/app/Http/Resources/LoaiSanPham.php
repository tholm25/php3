<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoaiSanPham extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tenloai' => $this->tenloai,
            'mota' => $this->mota,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}