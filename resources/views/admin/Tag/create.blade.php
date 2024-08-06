@extends('admin.layouts.master')
@section('title')
    Thêm mới danh mục
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Thêm mới Danh mục</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Danh mục</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <form action="{{ route('admin.tag.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thông tin</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{old("name")}}" name="name" id="name">
                                        @error('name')
                                        <div class=" mt-3 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    
                                </div>
                               
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">mô tả</label>
                                        <textarea value="{{old("mo_ta")}}" name="mo_ta" class="form form-control" id="" cols="30" rows="10"></textarea>
                                        @error('mo_ta')
                                        <div class=" mt-3 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">hình ảnh</label>
                                        <input type="file" class="form-control" name="hinh_anh" id="name">
                                        @error('hinh_anh')
                                        <div class=" mt-3 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div><!-- end card header -->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>

    </form>
@endsection
