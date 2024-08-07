<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Thông tin tài khoản";

        $listTaiKhoan = User::query()->get();

        return view('admins.taikhoans.index', compact('title', 'listTaiKhoan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Sửa thông tin tai khoản";

        $taiKhoan = User::findOrFail($id);

        return view('admins.taikhoans.index', compact('title', 'taiKhoan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $taiKhoan = User::findOrFail($id);

        $taiKhoan->delete($id);

        return redirect()->route('admins.taikhoans.index')->with('success', 'Xóa tài khoản thành công');
    }
}
