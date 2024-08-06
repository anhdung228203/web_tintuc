<div class=progress-bar-wrap>
    <div class="progress-bar color-bg"></div>
</div>
<header class=main-header>
    <div class="top-bar fl-wrap">
        <div class=container>
            <div class=date-holder data-date-lang='[1,2,3,4,5,6,7,8,9,10,11,12]'>
                <span class=date_num></span>
                <span class=date_mounth></span>
                <span class=date_year></span>
            </div>
            <div class=header_news-ticker-wrap>
                <div class=hnt_title>Bài viết mới :</div>
                <div class="header_news-ticker fl-wrap">
                    {{-- @dd($posts_new) --}}
                    <ul>
                        @foreach ($posts_new as $item)
                            <li
                                class="post-16 post type-post status-publish format-gallery has-post-thumbnail hentry category-technology tag-science tag-technology tag-business tag-lifestyle post_format-post-format-gallery">
                                <a
                                    href=innovations-that-bring-pleasure-to-all-peoples/index.html>{{ $item->tieu_de }}</a>
                            </li>
                        @endforeach
                        {{-- <li
                            class="post-16 post type-post status-publish format-gallery has-post-thumbnail hentry category-technology tag-science tag-technology tag-business tag-lifestyle post_format-post-format-gallery">
                            <a href=innovations-that-bring-pleasure-to-all-peoples/index.html>Innovations that
                                Bring Pleasure to All Peoples</a>
                        </li>
                        <li
                            class="post-43 post type-post status-publish format-gallery has-post-thumbnail hentry category-politics tag-science tag-technology tag-business tag-lifestyle post_format-post-format-gallery">
                            <a href=heres-the-proof-that-momentum-strategies-work/index.html>Here&#8217;s the
                                proof that momentum strategies work</a>
                        </li>
                        <li
                            class="post-61 post type-post status-publish format-gallery has-post-thumbnail hentry category-politics tag-science tag-technology tag-business tag-lifestyle post_format-post-format-gallery">
                            <a href=how-maps-reshape-american-politics-in-world/index.html>How Maps Reshape
                                American Politics In World</a>
                        </li>
                        <li
                            class="post-64 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-lifestyle tag-science tag-technology tag-business post_format-post-format-gallery">
                            <a href=first-prototype-flight-using-kinetic-launch-system/index.html>First
                                prototype flight using kinetic launch system</a>
                        </li> --}}
                    </ul>
                </div>
                <div class=n_contr-wrap>
                    <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                    <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                </div>
            </div>
            <ul class=topbar-social>
                <li><a class=magnetic-item target=_blank rel=noopener href=#><i class="fab fa-facebook-f"></i></a></li>
                <li><a class=magnetic-item target=_blank rel=noopener href=#><i class="fab fa-x-twitter"></i></a></li>
                <li><a class=magnetic-item target=_blank rel=noopener href=#><i class="fab fa-instagram"></i></a></li>
                <li><a target=_blank rel=noopener href=#><i class="fab fa-vk"></i></a></li>
                <li><a target=_blank rel=noopener href=#><i class="fab fa-pinterest-p"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="header-inner fl-wrap">
        <div class=container>
            <a href={{ route('trangchu') }}>
                <img src={{ asset('theme/client/page/wp-content/themes/gmag/includes/images/logo.png') }}
                    class=logo-holder alt>
            </a>
            <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class=header-tooltip>Tìm
                    kiếm</span></div>
            {{-- href="{{route('dang-ky')}}" --}}
            {{-- @if (\Auth::id())
                        
                    @endif --}}


            @if (Auth::id())
                <div class="user srf_btn htact">
                    @if (!empty(Auth::user()->avatar))
                        <img style="width: 50px;height: 50px; border-radius: 50%" src="{{ Auth::user()->avatar }}"
                            alt="">
                    @else
                        <p style="display: flex; align-items: center;justify-content: center; padding: 21px">
                            {{ Auth::user()->name }}</p>
                    @endif
                    {{-- <i class="fal fa-user"></i> --}}

                    <span class=header-tooltip>
                        <a href="{{ route('myacount') }}" style="color: white">
                            Quản lý tài khoản

                        </a>
                    </span>


                </div>
            @else
                <div class="user srf_btn htact">
                    <i class="fal fa-user"></i>
                    <span class=header-tooltip>
                        <a href="{{ route('formlogin') }}" style="color: white">
                            Đăng nhập
                            {{-- class="srf_btn htact show-reg-form" --}}
                        </a>
                    </span>


                </div>
            @endif
            <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i>
                <div class="show-cart_count "><span class=show-cart_count_main>0 items</span></div><span
                    class=header-tooltip>Giỏ hàng</span>
            </div>
            <div class="header-search-wrap novis_sarch">
                <div class=widget-inner>
                    <form action="{{route('find')}} " method="get">
                    <input name="name" id=se type=text class=search placeholder=Search... value>
                   
                    <button class=search-submit id=submit_btn><i class="fa fa-search transition"></i>
                    </button>
                    </form>
                </div>
            </div>
            <div class="header-cart_wrap novis_cart">
                <div class=header-cart_title>Your Cart <span class=show-cart_count_main>0 items</span></div>
                <div class=widget_shopping_cart_content></div>
            </div>
            <div class=nav-button-wrap>
                <div class=nav-button>
                    <span></span><span></span><span></span>
                </div>
            </div>
            <div class="nav-holder main-menu">
                <nav>
                    <ul>
                        <li id=menu-item-55
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children">
                            <a href="{{ route('trangchu') }}" class=menu-home>Trang chủ</a>
                            {{-- <i class="fas fa-caret-down"></i> --}}
                            {{-- <ul class=sub-menu>
                                <li id=menu-item-57
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item">
                                    <a href=index.html class=menu-home>Slider</a>
                                </li>
                                <li id=menu-item-622 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=carousel/index.html class=menu-carousel>Carousel</a></li>
                                <li id=menu-item-621 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=grid/index.html class=menu-grid>Grid</a></li>
                            </ul> --}}
                        </li>
                        @foreach ($menus->toArray() as $item)
                            {{-- @dd($item['posts']) --}}
                            <li id=menu-item-59
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                <a href={{route('tag',$item['id'])}} class=menu-blog>{{ $item['name'] }}<i
                                        class="fas fa-caret-down"></i></a>
                                <ul class=sub-menu>
                                    @foreach ($item['posts'] as $post)
                                        <li id=menu-item-342
                                            class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="{{ route('detail', [$post['id'], $post['tieu_de']]) }}"
                                                class=menu-blog>{{ substr($post['tieu_de'], 0, 40) . '...' }}</a></li>
                                    @endforeach


                                    {{-- <li id=menu-item-345 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-list-style/index.html class=menu-blog-list-style>2
                                        Sidebars</a></li>
                                <li id=menu-item-349 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-list-style-2/index.html class=menu-blog-list-style-2>Grid
                                        Sidebar</a></li>
                                <li id=menu-item-352 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-fullwidth/index.html class=menu-blog-fullwidth>Full Width
                                        Sidebar</a></li>
                                <li id=menu-item-355 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-grid-style/index.html class=menu-blog-grid-style>3 Columns
                                        Grid</a></li>
                                <li id=menu-item-356
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href=# class=menu-single>Single<i class="fas fa-caret-down"></i></a>
                                    <ul class=sub-menu>
                                        <li id=menu-item-359
                                            class="menu-item menu-item-type-post_type menu-item-object-post"><a
                                                href=first-prototype-flight-using-kinetic-launch-system/index.html
                                                class=menu-first-prototype-flight-using-kinetic-launch-system>Style
                                                1</a></li>
                                        <li id=menu-item-358
                                            class="menu-item menu-item-type-post_type menu-item-object-post"><a
                                                href=london-stay-most-popular-city/index.html
                                                class=menu-london-stay-most-popular-city>Style 2</a></li>
                                    </ul>
                                </li> --}}
                                </ul>
                            </li>
                        @endforeach
                        {{-- <li id=menu-item-59
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                            <a href=blog/index.html class=menu-blog>Posts<i class="fas fa-caret-down"></i></a>
                            <ul class=sub-menu>
                                <li id=menu-item-342 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog/index.html class=menu-blog>List</a></li>
                                <li id=menu-item-345 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-list-style/index.html class=menu-blog-list-style>2
                                        Sidebars</a></li>
                                <li id=menu-item-349 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-list-style-2/index.html class=menu-blog-list-style-2>Grid
                                        Sidebar</a></li>
                                <li id=menu-item-352 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-fullwidth/index.html class=menu-blog-fullwidth>Full Width
                                        Sidebar</a></li>
                                <li id=menu-item-355 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=blog-grid-style/index.html class=menu-blog-grid-style>3 Columns
                                        Grid</a></li>
                                <li id=menu-item-356
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href=# class=menu-single>Single<i class="fas fa-caret-down"></i></a>
                                    <ul class=sub-menu>
                                        <li id=menu-item-359
                                            class="menu-item menu-item-type-post_type menu-item-object-post"><a
                                                href=first-prototype-flight-using-kinetic-launch-system/index.html
                                                class=menu-first-prototype-flight-using-kinetic-launch-system>Style
                                                1</a></li>
                                        <li id=menu-item-358
                                            class="menu-item menu-item-type-post_type menu-item-object-post"><a
                                                href=london-stay-most-popular-city/index.html
                                                class=menu-london-stay-most-popular-city>Style 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id=menu-item-629 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                href=business/index.html class=menu-business>Business</a></li>
                        <li id=menu-item-628 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                href=technology/index.html class=menu-technology>Technology</a></li>
                        <li id=menu-item-56
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href=# class=menu-shop>Shop<i class="fas fa-caret-down"></i></a>
                            <ul class=sub-menu>
                                <li id=menu-item-58 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=shop/index.html class=menu-shop>Products</a></li>
                                <li id=menu-item-442
                                    class="menu-item menu-item-type-post_type menu-item-object-product"><a
                                        href=product/awesome-merch-wallet/index.html
                                        class=menu-awesome-merch-wallet>Product Single</a></li>
                            </ul>
                        </li>
                        <li id=menu-item-361
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href=# class=menu-pages>Pages<i class="fas fa-caret-down"></i></a>
                            <ul class=sub-menu>
                                <li id=menu-item-422 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=about/index.html class=menu-about>About</a></li>
                                <li id=menu-item-421 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                        href=contacts/index.html class=menu-contacts>Contacts</a></li>
                                <li id=menu-item-362
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                        href=category/technology/index.html class=menu-privacy-policy>Category</a></li>
                                <li id=menu-item-363 class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href=author/admin/index.html class=menu-author-single>Author Single</a>
                                </li>
                                <li id=menu-item-364 class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href=404.html class=menu-404>404</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
