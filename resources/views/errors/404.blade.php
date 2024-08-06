@extends('client.auth.index')
@section('content')
<section class="hero-section error-section">
    <div class="bg-wrap hero-section_bg">
        <div class=bg
            data-bg=https://webredox.net/demo/wp/gmag/wp-content/themes/gmag/includes/images/bg/6.jpg></div>
    </div>
    <div class=container>
        <div class=error-wrap>
            <h2>404</h2>
            <p>
                Rất tiếc chúng tôi không tìm thấy trang bạn mong muốn</p>
            <div class=clearfix></div>
            <form action="{{route('find')}}" class=custom-form>
                <input name="name" id=se type=text class=search placeholder=Search..>
                <button class="search-submit color-bg" id=submit_btn2><i class="fa fa-search"></i> </button>
            </form>
            <div class=clearfix></div>
            <p>Or</p>
            <a href="{{route('trangchu')}}" class="btn color-btn flat-btn"> <span>Trang chủ</span> <i class="fas fa-caret-right"></i></a>
        </div>
    </div>
</section>
@endsection