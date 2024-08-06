@extends('layout.master')
@section('banner')
    <div class="breadcrumbs-header fl-wrap">
        <div class=container>
            <div class=breadcrumbs-header_url>
                <a href=../index.html>Home</a><a href=../blog/index.html>Blog</a><span>Here&#8217;s the
                    proof that&hellip;</span>
            </div>
            <div class=scroll-down-wrap>
                <div class=mousey>
                    <div class=scroller></div>
                </div>
                <span>Scroll Down To Discover</span>
            </div>
        </div>
        <div class=pwh_bg></div>
    </div>
@endsection
@section('content')
    <div class="main-container fl-wrap fix-container-init">
        <div class="single-post-header fl-wrap">
            <a class=post-category-marker href=../category/politics/index.html>{{ $postdetail->tag->name }} </a>
            <div class=clearfix></div>
            <h1>{{ $postdetail->tieu_de }}</h1>
            <div class=clearfix></div>
            <div class=author-link><a href=../author/webredox/index.html><img src="{{ $postdetail->user->avatar }}" width=36
                        height=36 alt="{{ $postdetail->user->name }}"
                        class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                    <span>{{ $postdetail->user->name }}</span></a></div>
            <span class=post-date><i class="far fa-clock"></i>
                {{ date('d-m-Y', strtotime($postdetail->user->created_at)) }}</span>
            <ul class=post-opt>
                <li><i class="far fa-comments-alt"></i> {{ $countcomment->comments_count }}</li>
                <li><i class="fal fa-eye"></i> {{ $postdetail->luot_xem }} </li>
            </ul>
        </div>
        <div class="single-post-media fl-wrap">
            <div class="single-slider-wrap fl-wrap">
                <div class="single-slider fl-wrap">
                    <div class=swiper-container>
                        <div class="swiper-wrapper lightgallery">
                            <div class="swiper-slide hov_zoom">
                                <img src="{{ $postdetail->anh_dai_dien }}" alt>
                                <a href="https://www.youtube.com/watch?v=K-6tPkm6cZA"
                                    class="box-media-zoom   popup-image"><i class="fas fa-play"></i></a>
                                <span class="post-media_title pmd_vis">© Image Copyrights
                                    Title</span>
                            </div>
                            {{-- <div class="swiper-slide hov_zoom">
                            <img src=theme/client/page/wp-content/uploads/2022/06/13-857x572.jpg alt>
                            <a href=theme/client/page/wp-content/uploads/2022/06/13-857x572.jpg
                                class="box-media-zoom   popup-image"><i
                                    class="fas fa-search"></i></a>
                            <span class="post-media_title pmd_vis">© Image Copyrights
                                Title</span>
                        </div>
                        <div class="swiper-slide hov_zoom">
                            <img src=theme/client/page/wp-content/uploads/2022/06/15-857x572.jpg alt>
                            <a href=theme/client/page/wp-content/uploads/2022/06/15-857x572.jpg
                                class="box-media-zoom   popup-image"><i
                                    class="fas fa-search"></i></a>
                            <span class="post-media_title pmd_vis">© Image Copyrights
                                Title</span>
                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class=ss-slider-controls2>
                    <div class="ss-slider-pagination pag-style"></div>
                </div>
                {{-- <div class="ss-slider-cont ss-slider-cont-prev"><i
                    class="fas fa-caret-left"></i></div>
            <div class="ss-slider-cont ss-slider-cont-next"><i
                    class="fas fa-caret-right"></i></div> --}}
            </div>
        </div>
        <div class="single-post-content spc_column fl-wrap">

            <div class="fs-wrap smpar fl-wrap">
                <div class=fontSize><span class=fs_title>Font size: </span><input type=text class=rage-slider data-step=1
                        data-min=12 data-max=15 value=12>
                </div>
                <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                <div class=show-more-snopt-tooltip>
                    <a href=#respond class=custom-scroll-link> <i class="fas fa-comment-alt"></i> Write a Comment</a>
                </div>
                <a class=print-btn href=javascript:window.print() data-microtip-position=bottom><span>Print</span><i
                        class="fal fa-print"></i></a>
            </div>
            <div class=clearfix></div>
            <div class=single-post-content_text id=font_chage>
                {!! $postdetail->mo_ta !!}
            </div>
            <div class="single-post-footer fl-wrap">
                <div class=post-single-tags>
                    <span class=tags-title><i class="fas fa-tag"></i> Danh mục : </span>
                    <div class=tags-widget>
                        @foreach ($tags as $item)
                            <a href="#" rel={{ $item->id }}>{{ $item->name }}</a>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        <div class="limit-box2 fl-wrap"></div>
        <div class="post-author fl-wrap">
            <div class=author-img>
                <img src="{{ $postdetail->user->avatar }}" width=80 height=80 alt="{{ $postdetail->user->name }}"
                    class="avatar avatar-80 wp-user-avatar wp-user-avatar-80 alignnone photo">
            </div>
            <div class="author-content fl-wrap">
                <h5>Tác giả <a href="{{ route('profile', $postdetail->user->id) }}">{{ $postdetail->user->name }}</a></h5>
                {{-- <p>In a professional context it often happens that private or corporate
                    clients corder a publication to be made and presented with the actual
                    content still not being ready. Think of a news blog that’s filled with
                    content hourly on the day of going live. Filled with content hourly on
                    the day of going live.</p> --}}
            </div>
            <div class="profile-card-footer fl-wrap">
                <a href="{{ route('profile', $postdetail->user->id) }}" class=post-author_link>Trang cá nhân <i
                        class="fas fa-caret-right"></i></a>
                <div class=profile-card-footer_soc>
                    <div class=profile-card-footer_title>Theo dõi:</div>
                    <div class=profile-card-social>
                        <ul>
                            <li><a href=# target=_blank><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=# target=_blank><i class="fab fa-x-twitter"></i></a>
                            </li>
                            <li><a href=# target=_blank><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href=# target=_blank><i class="fab fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-post-wrap  fl-wrap">
            <div class="pr-subtitle prs_big">Các bài viết liên quan</div>
            <div class="list-post-wrap list-post-wrap_column fl-wrap">
                <div class=row>
                    @foreach ($postdefaut as $item)
                        <div class=col-md-6>
                            <div class="list-post fl-wrap">
                                <a class=post-category-marker
                                    href={{ route('detail', [$item->id, $item->tieu_de]) }}>{{ $item->tag->name }} </a>
                                <div class=list-post-media>
                                    <a href={{ route('detail', [$item->id, $item->tieu_de]) }}>
                                        <div class=bg-wrap>
                                            <div class=bg data-bg="{{ $item->anh_dai_dien }}">
                                            </div>
                                        </div>
                                    </a>
                                    <span class=post-media_title>{{ $item->tieu_de }}</span>
                                </div>
                                <div class=list-post-content>
                                    <h3><a
                                            href={{ route('detail', [$item->id, $item->tieu_de]) }}>{{ $item->tag->name }}>{{ $item->tieu_de }}</a>
                                    </h3>
                                    <span class=post-date><i class="far fa-clock"></i>
                                        {{ date('d-m-Y', strtotime($item->created_at)) }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class=col-md-6>
                    <div class="list-post fl-wrap">
                        <a class=post-category-marker
                            href=../category/politics/index.html>Politics </a>
                        <div class=list-post-media>
                            <a
                                href=../how-maps-reshape-american-politics-in-world/index.html>
                                <div class=bg-wrap>
                                    <div class=bg
                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/56.jpg>
                                    </div>
                                </div>
                            </a>
                            <span class=post-media_title>© Image Copyrights Title</span>
                        </div>
                        <div class=list-post-content>
                            <h3><a
                                    href=../how-maps-reshape-american-politics-in-world/index.html>How
                                    Maps Reshape American Politics In World</a></h3>
                            <span class=post-date><i class="far fa-clock"></i> June 9,
                                2022</span>
                        </div>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class="list-post fl-wrap">
                        <a class=post-category-marker
                            href=../category/politics/index.html>Politics </a>
                        <div class=list-post-media>
                            <a
                                href=../what-the-federal-infrastructure-package-means-for-minnesota/index.html>
                                <div class=bg-wrap>
                                    <div class=bg
                                        data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/7-2.jpg>
                                    </div>
                                </div>
                            </a>
                            <span class=post-media_title>© Image Copyrights Title</span>
                        </div>
                        <div class=list-post-content>
                            <h3><a
                                    href=../what-the-federal-infrastructure-package-means-for-minnesota/index.html>What
                                    the federal infrastructure package means for
                                    Minnesota</a></h3>
                            <span class=post-date><i class="far fa-clock"></i> June 12,
                                2022</span>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
        <div id=comments class="single-post-comm fl-wrap">
            <div class="pr-subtitle prs_big">
                Bình luận: <span>{{ $countcomment->comments_count }}</span></div>
            <ul class="commentlist clearafix">
                @foreach ($comments as $item)
                    <li class="comment even thread-even depth-1 parent">
                        <div class=comment-author>
                            <img src="{{ $item->user->avatar }}" width=50 height=50 alt=Avatar
                                class="avatar avatar-50wp-user-avatar wp-user-avatar-50 alignnone photo tt-comment-avatar avatar-default">
                        </div>
                        <div id="div-comment-{{ $item->id }}" class="comment-body smpar">
                            <h4>{{ $item->user->name }}</h4>
                            <div class=clearfix></div>
                            <div class="clearfix comment-text">
                                <p>{{ $item->mo_ta }}</p>
                            </div>
                            <a rel=nofollow class=comment-reply-link href='?reply={{ $item->id }}#respond'>Trả lời</a>
                            <div class=comment-meta><i class="far fa-clock"></i>
                                {{ date('d-m-Y', strtotime($item->created_at)) }}</div>
                            <div class=comment-body_dec></div>
                        </div>
                        @foreach ($item->replies as $reply)
                            <ul class=children>
                                <li class="comment odd alt depth-2">
                                    <div class=comment-author>
                                        <img src="{{ $reply->user->avatar }}" width=50 height=50
                                            alt="{{ $reply->user->name }}"
                                            class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo tt-comment-avatar">
                                    </div>
                                    <div id=div-comment-6 class="comment-body smpar">
                                        <h4>{{ $reply->user->name }}</h4>
                                        <div class=clearfix></div>
                                        <div class="clearfix comment-text">
                                            <p>{{ $reply->mo_ta }}</p>
                                        </div>
                                        <a rel=nofollow class=comment-reply-link
                                            href="?reply={{ $reply->id }}#respond">Trả lời</a>
                                        <div class=comment-meta><i class="far fa-clock"></i>
                                            {{ date('d-m-Y', strtotime($reply->created_at)) }}</div>
                                        <div class=comment-body_dec></div>
                                    </div>
                            @include('client.reply.reply', ['reply' => $reply->replies])

                                </li>
                               

                            </ul>
                        @endforeach



                    </li>
                @endforeach

                {{-- <li class="comment even thread-odd thread-alt depth-1">
                    <div class=comment-author>
                        <img src=../wp-content/uploads/2022/06/4.jpg width=50 height=50 alt="Liza Rose"
                            class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo tt-comment-avatar">
                    </div>
                    <div id=div-comment-7 class="comment-body smpar">
                        <h4>Liza Rose</h4>
                        <div class=clearfix></div>
                        <div class="clearfix comment-text">
                            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem. Nulla consequat massa quis enim. Donec pede
                                justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                Nullam dictum felis eu pede mollis pretium.</p>
                        </div>
                        <a rel=nofollow class=comment-reply-link href='index41b7.html?replytocom=7#respond' data-commentid=7
                            data-postid=43 data-belowelement=div-comment-7 data-respondelement=respond
                            data-replyto="Reply to Liza Rose" aria-label='Reply to Liza Rose'>Reply</a>
                        <div class=comment-meta><i class="far fa-clock"></i> June 16, 2022
                        </div>
                        <div class=comment-body_dec></div>
                    </div>
                </li> --}}
            </ul>
            <div class=clear></div>
            <div class=clearfix></div>
            <div id=addcom class=clearafix>
                <div id=respond class=comment-respond>
                    <h3 id="reply-title" class="comment-reply-title">
                        <div class="pr-subtitle "><span
                                class="comment-title-area crunchify-text tt-post-comment-form-heading">
                                <span>Để lại bình luận: </span> </span></div> <small><a rel=nofollow
                                id=cancel-comment-reply-link href=index.html#respond style=display:none;>
                                Cancel
                                reply</a></small>
                    </h3>

                    <form action="{{ route('comment') }}" method=post id=commentform class="add-comment custom-form">
                        <input type="hidden" name="post_id" value="{{ $postdetail->id }}">
                        <?php if (isset($_GET['reply'])) { ?>
                        <input type="hidden" name="reply" value="{{ $_GET['reply'] }}" id="">
                        <?php } ?>
                        @csrf


                        <fieldset>
                            @if (!Auth::user())
                                <div class=row>
                                    <div class=col-md-6><input id=author placeholder="Tên của bạn*" name='name' type=text
                                            value size=40>
                                        <span style="color: red">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class=col-md-6><input id=email placeholder="Email*" name=email type=text value
                                            size=40>
                                        <span style="color: red">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            @endif
                            <p style="color: red;font-size: 12px">
                                @if (session('message'))
                                    {{ session('message') }}
                                @endif
                            </p>
                            <textarea id=comment name="mo_ta" cols=40 rows=8 placeholder="Bình luận*" aria-required=true></textarea>
                            <span style="color: red">
                                @error('mo_ta')
                                    {{ $message }}
                                @enderror
                            </span>
                        </fieldset>
                        <button class="btn float-btn color-btn">Thêm bình luận <i class="fas fa-caret-right"></i></button>
                        <p class=form-submit><input name=submit type=submit id=submit class=submit value="Post Comment">
                            <input type=hidden name=comment_post_ID value=43 id=comment_post_ID>
                            <input type=hidden name=comment_parent id=comment_parent value=0>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
