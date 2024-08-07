<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function listTrangChu(){

        $listSanPham = SanPham::query()->get();

        return view('clients.trangchu', compact( 'listSanPham'));
    }
}
