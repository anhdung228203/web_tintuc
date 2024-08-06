<!DOCTYPE html>
<html class=no-js lang=en-US>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('layout.head')
    {{-- <link rel=stylesheet href={{asset("theme/client/page/wp-content/cache/minify/9ba46.css")}} media=all> --}}
    @yield('style')
    @yield('bootstrap')
</head>

<body id=body
    class="home page-template-default page page-id-13 wp-embed-responsive theme-gmag woocommerce-no-js elementor-default elementor-kit-7 elementor-page elementor-page-13">
    <?php
    use App\Models\Admin\Post;
    use App\Models\Admin\Tag;
    
    $posts_new = Post::with('tag')->where('tin_moi', 'like', 'on')->get();
    $menus = Tag::with('posts')->get();
    $tags = Tag::withCount('posts')->get();
    ?>
    <div id=main>
        @include('layout.header')
    @yield('chatbox')

        <div id=wrapper>
            <div class=content>
                @yield('image')
                {{-- <div data-elementor-type=wp-page data-elementor-id=13 class="elementor elementor-13">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-53e17778 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id=53e17778 data-element_type=section>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-654d3083"
                                data-id=654d3083 data-element_type=column>
                                @yield('content')
                            </div>

                           


                        </div>
                    </section>

                </div> --}}
                @yield('content')

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
@yield('script')

</html>
