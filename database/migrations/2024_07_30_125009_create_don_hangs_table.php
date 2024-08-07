<?php

use App\Models\DonHang;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang')->unique();
            
            // Lưu trữ thông tin tài khoản đã đặt hàng
            $table->foreignIdFor(User::class)->constrained();

            //Lưu trữ thông tin của người nhận
            $table->string('ten_nguoi_nhan');
            $table->string('email');
            $table->string('so_dien_thoai', 10);
            $table->string('dia_chi');
            $table->string('ghi_chu')->nullable();

            // Lưu trữ thông tin để quan lý đơn hàng
            $table->string('trang_thai_don_hang')->default(DonHang::CHO_XAC_NHAN);
            $table->string('trang_thai_thanh_toan')->default(DonHang::CHUA_THANH_TOAN);

            $table->double('tien_hang');
            $table->double('tien_ship');
            $table->double('tong_tien');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};