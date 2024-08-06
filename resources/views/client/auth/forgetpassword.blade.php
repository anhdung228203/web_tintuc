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
                        <li class=current style="width: 100%;"><a href="#"><i class="fal fa-sign-in-alt"></i> Quên mật
                                khẩu</a></li>
                        {{-- <li><a href=#tab-register><i class="fal fa-user-plus"></i> Đăng ký</a></li> --}}
                    </ul>

                    {{-- <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div> --}}
                    <div id=tabs-container>
                        <div class=tab>
                            <div id=tab-login class="tab-content first-tab">
                                <div class=custom-form>
                                    <form method="post" action="{{ route('sendEmail') }}">
                                        @csrf

                                        <label>Nhập email của bạn <span>*</span> </label>
                                        <input name=email id=email type=text>


                                        <div>
                                            <span style="color: red">
                                                @if (session('message'))
                                                    {{ session('message') }}
                                                @endif
                                            </span>
                                        </div>
                                        <button type=submit class="log-submit-btn color-bg"><span>Gửi</span></button>
                                    </form>
                                    <p style="text-align: center; font-size: 13px">Bạn chưa có tài khoản?<a
                                            href="{{ route('form-dang-ky') }}">đăng kí</a></p>
                                    <p style="text-align: center; font-size: 13px"><a href="{{ route('formlogin') }}">đăng
                                            nhập</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
