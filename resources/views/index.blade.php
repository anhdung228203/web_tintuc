@extends('layout.master')


@section('content')
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-6d516621 elementor-widget elementor-widget-gmag-post-tab-cat"
            data-id=6d516621 data-element_type=widget data-widget_type=gmag-post-tab-cat.default>
            <div class=elementor-widget-container>
                <div class=clear></div>
                <div class="fl-wrap content-tabs-wrap tabs-act">
                    <div class=section-title>
                        <h2>Bài viết theo danh mục</h2>

                        <div class="ajax-nav2 tabs-menu">
                            <ul>
                                @foreach ($tags as $item)
                                    <li @if ($item->id == 1) class=current @endif><a
                                            href="#tab-{{ $item->id }}">{{ $item->name }}</a></li>
                                @endforeach

                                {{-- <li><a href=#tab-technology>Technology</a></li>
                                <li><a href=#tab-business>Business</a></li>
                                <li><a href=#tab-sports>Sports</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class=tabs-container>
                        
                        {{-- @dd($item->comments())
                        @dd($item->comments) --}}
                        @foreach ($posts as $item)
                       
                            <div class="tab tab-{{ $item->tag->id }}-inner">
                               
                                <div id="tab-{{ $item->tag->id }}"
                                    class="tab-content @if ($item->tag_id === 1) first-tab @endif">
                                    <div class=list-post-wrap>

                                        <div class="list-post fl-wrap">
                                            <div class=list-post-media>
                                                <a href="{{ route('detail', [$item->id, $item->tieu_de]) }}">
                                                    <div class=bg-wrap>
                                                        <div class=bg data-bg={{ $item->anh_dai_dien }}>
                                                        </div>
                                                    </div>
                                                </a>
                                                <span class=post-media_title>{{ $item->tieu_de }}</span>
                                            </div>
                                            <div class=list-post-content>
                                                <a class=post-category-marker
                                                    href="{{ route('detail', [$item->id, $item->tieu_de]) }}">{{ $item->tag->name }}
                                                </a>
                                                <h3><a
                                                        href=heres-the-proof-that-momentum-strategies-work/index.html>{{ $item->tieu_de }}</a>
                                                </h3>
                                                <span class=post-date><i class="far fa-clock"></i>
                                                    {{ date('d-m-Y', strtotime($item->created_at)) }}</span>
                                                <p>{{ $item->mo_ta_ngan }}</p>
                                                <ul class=post-opt>
                                                    <li><i class="far fa-comments-alt"></i> {{count($item->comments)}}
                                                    </li>
                                                    <li><i class="fal fa-eye"></i> {{ $item->luot_xem }} views
                                                    </li>
                                                </ul>
                                                <div class=author-link><a href=author/webredox/index.html><img
                                                            decoding=async src=wp-content/uploads/2022/06/3.jpg width=36
                                                            height=36 alt="{{ $item->user->name }}"
                                                            class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                                        <span>{{ $item->user->name }}</span></a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        @endforeach

                    </div>
                </div>
                {{-- <div class=clear></div> --}}
            </div>
        </div>

        <div class="elementor-element elementor-element-17281ecf elementor-widget elementor-widget-gamg-sec-title"
            data-id=17281ecf data-element_type=widget data-widget_type=gamg-sec-title.default>
            <div class=elementor-widget-container>
                <div class="section-title sect_dec text-left">
                    <h2>Top danh mục nổi bật</h2>
                    <h4>Tin tức mới nhất bạn không thể bỏ qua</h4>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-288d0d72 elementor-widget elementor-widget-gmag-post-grid-one"
            data-id=288d0d72 data-element_type=widget data-widget_type=gmag-post-grid-one.default>
            <div class=elementor-widget-container>
                <div class="grid-post-wrap gallery-items-el row">
                    <div class="more-post-wrap  fl-wrap">
                        <div class="list-post-wrap list-post-wrap_column fl-wrap">
                            <div class="rows fl-wrap">
                                @foreach ($tagslimit as $item)
                                {{-- @dd($item) --}}
                                    <div id=post-180
                                        class="col-md-6 gallery-item-el post-180 post type-post status-publish format-gallery has-post-thumbnail hentry category-science tag-technology tag-business tag-lifestyle tag-science post_format-post-format-gallery">
                                        <div class="list-post fl-wrap">
                                            <a class="post-category-marker purp-bg" href=category/science/index.html>{{$item->name}}
                                            </a>
                                            <div class=list-post-media>
                                                <a href=how-to-start-home-renovation/index.html>
                                                    <div class=bg-wrap>
                                                        <div class=bg
                                                            data-bg={{$item->hinh_anh}}>
                                                        </div>
                                                    </div>
                                                </a>
                                                <span class=post-media_title>{{$item->name}}</span>
                                            </div>
                                            <div class=list-post-content>
                                                <h3><a href=how-to-start-home-renovation/index.html>{{$item->mo_ta}}</a></h3>
                                                <span class=post-date><i class="far fa-clock"></i> {{date('d-m-Y',strtotime($item->created_at))}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{$tagslimit->links()}}
        </div>
        

        {{-- <div class="d-flex">
            <a class=prevposts-link href=index.html><i class='fas fa-caret-left'></i></a>
            <a href=#0 class=current-page>1</a><a href=page/2/index.html>2</a>
            <a class=nextposts-link href=page/2/index.html><i class='fas fa-caret-right'></i></a>
            {{$tagslimit->links()}}
        </div> --}}
        {{-- Page {{ $tagslimit->currentPage() }} of {{ $tagslimit->lastPage() }} --}}
        {{-- <div class="elementor-element elementor-element-3d23380b elementor-widget elementor-widget-gamg-button"
            data-id=3d23380b data-element_type=widget data-widget_type=gamg-button.default>
            <div class=elementor-widget-container>
                <div class=clear></div>
                <a href=blog/index.html target=_self class="dark-btn fl-wrap float-btn-center gm-simple-url"> đ
                </a>
                <div class=clear></div>
            </div>
        </div> --}}
    </div>
@endsection
