<!DOCTYPE html>
<html class=no-js lang=en-US>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    @include('layout.head')
    @yield('style')
</head>
<?php
use App\Models\Admin\Post;
use App\Models\Admin\Tag;

$posts_new = Post::with('tag')
    ->where([['tin_moi', 'like', 'on'], ['phe_duyet_id', 2]])
    ->get();
$banners = Post::with('tag', 'user')
    ->where([['tin_moi', 'like', 'on'], ['phe_duyet_id', 2]])
    ->limit(4)
    ->get();
$menus = Tag::with('posts')->get();
$post_popular = Post::with('tag')
    ->where([['tin_noi_bat', 'like', 'on'], ['phe_duyet_id', 2]])
    ->limit(4)
    ->orderByDesc('id')
    ->get();
$tags = Tag::withCount('posts')->get();

// var_dump($tags);
// die;

?>

<body id=body
    class="home page-template-default page page-id-13 wp-embed-responsive theme-gmag woocommerce-no-js elementor-default elementor-kit-7 elementor-page elementor-page-13">
    <div id=main>
        @include('layout.header')
        <div id=wrapper>
            <div class=content>
                @section('banner')
                    @include('layout.banner')
                @show
                <div data-elementor-type=wp-page data-elementor-id=13 class="elementor elementor-13">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-53e17778 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id=53e17778 data-element_type=section>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-654d3083"
                                data-id=654d3083 data-element_type=column>
                                @yield('content')
                            </div>

                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-16479b42"
                                data-id=16479b42 data-element_type=column>

                                @include('layout.navbar')


                            </div>


                        </div>
                    </section>

                </div>
            </div>
            @include('layout.footer')
            <div class=aside-panel>
                <ul>
                    <li> <a href=category/politics/index.html><i class="far fa-podium"></i><span>Politics</span></a>
                    </li>
                    <li> <a href=category/technology/index.html><i class="far fa-atom"></i><span>Technology</span></a>
                    </li>
                    <li> <a href=category/business/index.html><i class="far fa-user-chart"></i><span>Business</span></a>
                    </li>
                    <li> <a href=category/sports/index.html><i class="far fa-tennis-ball"></i><span>Sports</span></a>
                    </li>
                    <li> <a href=category/science/index.html><i class="far fa-flask"></i><span>Science</span></a></li>
                </ul>
            </div>
            {{-- <div class=woocommerce-notices-wrapper></div> --}}

        </div>
        @include('layout.script')
</body>


</html>
