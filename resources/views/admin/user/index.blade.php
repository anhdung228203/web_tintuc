@extends('admin.layouts.master')
@section('title')
    User
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">User</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Danh sách</h5>
                    <span style="color: red">
                        @if (session('message'))
                            {{session('message')}}
                        @endif
                    </span>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>

                                <th>số điện thoại</th>
                                <th>ảnh </th>
                                <th>email</th>
                                <th>role</th>

                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->sdt }}</td>
                                    <td><img src="{{ $item->avatar }}" style="width: 100px;" alt=""></td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <form>
                                            <select data-id="{{ $item->id }}" name=""
                                                class="form form-select role" id="">
                                                <option value="1" @if ($item->role == 1) selected @endif>
                                                    user
                                                </option>
                                                <option value="2" @if ($item->role == 2) selected @endif>tác
                                                    giả
                                                </option>
                                                <option value="3" @if ($item->role == 3) selected @endif>
                                                    admin
                                                </option>
                                            </select>
                                        </form>


                                    </td>

                                    <td>
                                        <section class="d-flex justify-content-evenly w-50% ">
                                            <a href="{{route('admin.user.destroy',$item->id)}}" onclick="return confirm('bạn chắc chắn muốn xóa')" type="submit"
                                            class="btn btn-danger">xóa</a >
                                        </section>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div>
@endsection
@section('style-libs')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('script-libs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        new DataTable("#example", {
            order: [
                [0, 'desc']
            ]
        });

        let role = document.querySelectorAll(".role");


        role.forEach(function(item) {
            item.addEventListener('change', function() {
                let user_id = item.dataset.id;
                let role=item.value;
                // console.log(role);
                // console.log(user_id);
                $.ajax({
                    type: "GET",
                    url: "user/update",
                    data: 'user_id=' + user_id +'&role='+role,

                })
            })
        })
    </script>
@endsection
