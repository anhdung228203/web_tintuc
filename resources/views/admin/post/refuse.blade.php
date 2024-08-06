@extends('admin.layouts.master')
@section('title')
    Bài viết chờ xử lý
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Bài viết chờ xử lý</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Bài viết</li>
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
                    <h5 class="card-title mb-0">Danh sách bài viết chờ xử lý</h5>
                    <span style="color: red">
                        @if (session()->has('message'))
                            {{ session('message') }}
                        @endif
                    </span>
                </div>
                <div class="card-body">

                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên bài viết</th>

                                <th>ảnh </th>
                                <th>user</th>


                                @if (Auth::user()->role == 3)
                                    <th>Phê duyệt</th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                {{-- @dd($item->id) --}}
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->tieu_de }}</td>
                                    <td><img src="{{ $item->anh_dai_dien }}" style="width: 100px;" alt=""></td>
                                    <td>{{ $item->user->name }}</td>
                                    @if (Auth::user()->role == 3)
                                        <td>
                                            <form>
                                                <select data-id="{{ $item->id }}" name=""
                                                    class="form form-select role" id="">
                                                    <option value="1"
                                                        @if ($item->phe_duyet_id == 1) selected @endif>
                                                        chờ xử lý
                                                    </option>
                                                    <option value="2"
                                                        @if ($item->phe_duyet_id == 2) selected @endif>đã duyệt bài
                                                    </option>
                                                    <option value="3"
                                                        @if ($item->phe_duyet_id == 3) selected @endif>
                                                        từ chối
                                                    </option>
                                                </select>
                                            </form>


                                        </td>
                                    @endif

                                    <td>
                                        <section class="d-flex justify-content-evenly w-50% ">

                                            <form action="{{ route('admin.post.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('bạn chắc chắn muốn xóa')" type="submit"
                                                    class="btn btn-danger">xóa</button>
                                            </form>

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

        // console.log(role);

        role.forEach(function(item) {
            item.addEventListener('change', function() {


                let post_id = item.dataset.id;
                let phe_duyet = item.value;
                // console.log(role);
                // console.log(phe_duyet);
                $.ajax({
                    type: "GET",
                    url: "pd/update",
                    data: 'phe_duyet=' + phe_duyet + '&post_id=' + post_id,


                })
            })
        })
    </script>
@endsection
