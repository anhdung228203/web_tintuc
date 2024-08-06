<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('theme/admin/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('theme/admin/assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('theme/admin/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('theme/admin/assets/images/logo-light.png') }}" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                @if (Auth::user()->role==3)
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashboard')}}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCategory">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Danh mục</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCategory">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{asset('admin/tag')}}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('admin/tag/create')}}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCatalogues" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCatalogues">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Bài viết</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCatalogues">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route("admin.post.index")}}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("admin.post.create")}}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                           
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarpd" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarpd">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Phê duyệt bài viết</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarpd">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.pd')}}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUser" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarUser">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Người dùng</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUser">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.user')}}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
                @endif
                {{-- tác giả --}}
                @if (Auth::user()->role==2)
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashboard')}}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
               
                

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCatalogues" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCatalogues">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Bài viết</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCatalogues">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route("admin.post.index")}}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("admin.post.create")}}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.post.choxuly')}}" class="nav-link"
                                   data-key="t-horizontal">chờ xử lý</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("admin.post.refuse")}}" class="nav-link"
                                   data-key="t-horizontal">đã từ chối</a>
                            </li>
                        </ul>
                    </div>
                </li>

               
                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
