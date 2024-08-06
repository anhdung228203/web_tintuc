@extends('client.auth.index')
@section('bootstrap')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection
@section('style')
    <style>
        a {
            text-decoration: none !important;
        }

        .hnt_title {
            padding-left: 20px !important;
        }

        .topbar-social li a {
            text-align: center !important;
        }

        p {
            font-size: 17px !important;
        }
    </style>
@endsection
@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="{{ $user->avatar }}" alt="avatar" class="rounded-circle img-fluid"
                                    style="width: 150px;">
                                <h5 class="my-3">{{ $user->name }}</h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>
                                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                <div class="text-center  ">
                                    <a href="{{ route('logout') }}" class="btn btn-primary myacconut ">Đăng xuất</a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="tab-myaccount">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Quản lý tài khoản</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tên của bạn</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->name }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Số điện thoại</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->sdt }}</p>
                                        </div>
                                    </div>
                                    <hr>



                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">

                    <div class="col-md-4">
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fas fa-globe fa-lg text-warning"></i>
                                        <p class="mb-0">https://mdbootstrap.com</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-github fa-lg text-body"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                        <p class="mb-0">@mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div id="tab-changepassword">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Thay đổi mật khẩu</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <form action="{{ route('changpassword') }}" method="post">
                                        @csrf;
                                        <div class="row d-flex ">
                                            <div class="col-md-4"><label for="">Tên </label></div>
                                            <div class="col-md-8"><input class="form form-control" type="text"
                                                    name="name" value="{{ $user->name }}" id=""></div>
                                            <span style="color: red">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="row d-flex mt-3">
                                            <div class="col-md-4"><label for="">email </label></div>
                                            <div class="col-md-8"><input class="form form-control" type="text"
                                                    value="{{ $user->email }}" disabled id=""></div>
                                        </div>
                                        <div class="row d-flex mt-3">
                                            <div class="col-md-4"><label for="">số điện thoại </label></div>
                                            <div class="col-md-8"><input class="form form-control" type="text"
                                                    name="sdt" value="{{ $user->sdt }}" id=""></div>
                                            <span style="color: red">
                                                @error('sdt')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="row d-flex mt-3">
                                            <div class="col-md-4"><label for="">Mật khẩu </label></div>
                                            <div class="col-md-8"><input class="form form-control" type="text"
                                                    name="" disabled value="{{ $user->password }}"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="row d-flex mt-3">
                                            <div class="col-md-4"><label for="">Thay đổi mật khẩu </label></div>
                                            <div class="col-md-8"><input class="form form-control" type="text"
                                                    name="changepassword" id=""></div>
                                            <span style="color: red">
                                                @error('changepassword')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <div>
                                                <span style="color: green">
                                                    @if (session('message'))
                                                        {{ session('message') }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 ">
                                            <button type="submit" class="btn btn-warning ">Cập nhật</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
