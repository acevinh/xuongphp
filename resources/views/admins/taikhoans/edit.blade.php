@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection

@section('css')

@endsection

@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản lý thông tin</h4>
            </div>
        </div>

        <div class="row">
            <!-- Striped Rows -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{ $title }}</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admins.taikhoans.update', $taiKhoan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
                            <div class="row">                                                
                                    <div class="col-lg-6">  
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Họ tên</label>
                                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                                            value="{{ $taiKhoan->name }}" placeholder="Họ tên" disabled>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role:</label>
                                            <div class="col-sm-10 mb-3 d-flex gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="role" id="gridRadios1" value="" {{ $taiKhoan->role == true ? 'checked' : '' }} checked>
                                                    <label class="form-check-label text-success" for="gridRadios1">
                                                        Admin
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="" {{ $taiKhoan->role == false ? 'checked' : '' }}>
                                                    <label class="form-check-label text-danger" for="gridRadios2">
                                                        User
                                                    </label>
                                                </div>
                                            </div>
                                        </div>                                
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                            value="{{ $taiKhoan->email }}" placeholder="email" disabled>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Mật khẩu</label>
                                            <input type="text" id="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                                            value="{{ $taiKhoan->password }}" placeholder="password" disabled>
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>                 
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-warning">Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> <!-- container-fluid -->
</div> <!-- content -->
@endsection

@section('js')
    
@endsection