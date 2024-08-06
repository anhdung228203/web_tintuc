@extends('client.auth.index')
@section('content')
    <div class="main-register-container " style="margin-bottom: 700px">
        <div class="reg-overlay close-reg-form"></div>
        <div class=main-register-holder>
            <div class="main-register-wrap fl-wrap vis_mr">
                <div class=main-register_bg>
                    <div class=bg-wrap>
                        <div class="bg par-elem " data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/1.jpg>
                        </div>
                        <div class=overlay></div>
                    </div>
                    <div class=mg_logo><img src=wp-content/themes/gmag/includes/images/logo2.png alt></div>
                </div>
                <div class="main-register tabs-act fl-wrap">
                    <ul class=tabs-menu>
                        <li class=current style="width: 100%;"><a href="#"><i class="fal fa-sign-in-alt"></i> Đăng Kí</a></li>
                        {{-- <li><a href=#tab-register><i class="fal fa-user-plus"></i> Đăng ký</a></li> --}}
                    </ul>

                    {{-- <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div> --}}
                    <div id=tabs-container>
                        <div class=tab>
                            <span style="color:green">@if (session('message'))
                             {{session('message')}}
                         @endif</span>
                         
                            
                                <div>
                                    <div class=custom-form>

                                        <form action="{{ route('dang-ky') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label>UserName <span>*</span> </label>
                                                <input type=text value="{{ old('name') }}" name=name id=reg_username
                                                    autocomplete=username>

                                                @error('name')
                                                    <span style="color: red">
                                                        {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label>Số điện thoại
                                                    <span>*</span>
                                                </label>
                                                <input type=text name=sdt>
                                                @error('sdt')
                                                    <span style="color: red">
                                                        {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label>Email <span>*</span></label>

                                                <input type=text name=email id=reg_email autocomplete=email value>
                                                @error('email')
                                                    <span style="color: red">
                                                        {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label>Mật khẩu <span>*</span> </label>
                                                <input name=password type=password autocomplete=new-password>
                                                @error('password')
                                                    <span style="color: red">
                                                        {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <label>Avatar</label>
                                            <input name=avatar type=file>

                                            <button class="log-submit-btn color-bg btn-sign-up"><span>Đăng
                                                    ký</span></button>
                                        </form>
                                       
                                   <p style="text-align: center; font-size: 13px">Bạn đã có tài khoản?<a href="{{route('formlogin')}}">đăng nhập</a></p>

                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
