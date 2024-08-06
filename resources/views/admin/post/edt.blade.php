@extends('admin.layouts.master')
@section('title')
    Chỉnh sửa bài viết
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Chỉnh sửa bài viết</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bài viết</a></li>
                        <li class="breadcrumb-item active">chỉnh sửa</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                                        <label for="name" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" value="{{ $post->tieu_de }}"
                                            name="tieu_de" id="name">
                                        @error('name')
                                            <div class=" mt-3 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Ảnh đại diện</label>
                                        <input type="file" class="form-control" name="anh_dai_dien" id="name">
                                       <img src="{{$post->anh_dai_dien}}" style="width: 100px;" alt="">
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Danh mục</label>
                                        <select name="tag_id" class="form form-select" id="">
                                            @foreach ($danhmuc as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($item->id === $post->tag_id) checkecd @endif>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div>
                                        <label for="name" class="form-label">mô tả ngắn</label>
                                        <textarea name="mo_ta_ngan" class="form form-control" id="" cols="30" rows="10">{{ $post->mo_ta_ngan }}</textarea>
                                        @error('mo_ta_ngan')
                                            <div class=" mt-3 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <div class="form-check form-switch form-switch-warning">
                                        <input class="form-check-input" type="checkbox" name="is_show_home" role="switch"
                                            id="SwitchCheck2" @if ($post->is_show_home === 'on') checked @endif>
                                        <label class="form-check-label" for="SwitchCheck2">Show home</label>
                                    </div>
                                    <div class="form-check form-switch form-switch-success">
                                        <input class="form-check-input" type="checkbox" name="tin_moi" role="switch"
                                            id="SwitchCheck2" @if ($post->tin_moi === 'on') checked @endif>
                                        <label class="form-check-label" for="SwitchCheck2">Tin mới</label>
                                    </div>
                                    <div class="form-check form-switch form-switch-info">
                                        <input class="form-check-input" type="checkbox" name="tin_noi_bat" role="switch"
                                            id="SwitchCheck2" @if ($post->tin_noi_bat === 'on') checked @endif>
                                        <label class="form-check-label" for="SwitchCheck2">Tin nổi bật</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label for="">Mô tả</label>
                                    <textarea class="form-control" id="content" name="mo_ta">{{ $post->mo_ta }}</textarea>
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
@section('script-libs')
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
