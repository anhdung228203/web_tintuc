{{-- @dd($tags) --}}

<div class="elementor-widget-wrap elementor-element-populated">
    <div id=search-2 class="widget main-sidebar box-widget fl-wrap widget_search">
        <div class="search-widget fl-wrap">
            <form role=search method=get id=searchform class="searh-inner fl-wrap" action="{{ route('find') }}">
                <input type=text name="name" id="name" class=search placeholder=Search...>
                <button type=submit class=search-submit2><i class="far fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="elementor-element elementor-element-7adad1ee elementor-widget elementor-widget-gmag-post-tab"
        data-id=7adad1ee data-element_type=widget data-widget_type=gmag-post-tab.default>
        <div class=elementor-widget-container>
            <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                <div class="content-tabs fl-wrap">
                    <ul class="tabs-menu fl-wrap no-list-style">
                        <li class=current><a href=#tab-popular>Tin nổi bật</a></li>
                        <li><a href=#tab-resent>Tin mới</a></li>
                    </ul>
                </div>
                <div class=tabs-container>

                    <div class=tab>
                        <div id=tab-popular class="tab-content first-tab">
                            <div class="post-widget-container fl-wrap">
                                @foreach ($post_popular as $item)
                                    <div class="post-widget-item fl-wrap">
                                        <div class=post-widget-item-media>
                                            <a href="{{ route('detail', [$item->id, $item->tieu_de]) }}"><img
                                                    decoding=async src="{{ $item->anh_dai_dien }}"
                                                    alt="{{ $item->anh_dai_dien }}"></a>
                                        </div>
                                        <div class=post-widget-item-content>
                                            <h4><a
                                                    href=heres-the-proof-that-momentum-strategies-work/index.html>{{ $item->tieu_de }}</a>
                                            </h4>
                                            <ul class=pwic_opt>
                                                <li><span><i class="far fa-clock"></i>
                                                        {{ date('d-m-Y', strtotime($item->created_at)) }}</span></li>
                                                <li><span><i class="far fa-comments-alt"></i>
                                                        3</span></li>
                                                <li><span><i class="fal fa-eye"></i>{{ $item->luot_xem }} views </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class=tab>
                        <div id=tab-resent class="tab-content ">
                            <div class="post-widget-container fl-wrap">
                                @foreach ($posts_new as $item)
                                    <div class="post-widget-item fl-wrap">
                                        <div class=post-widget-item-media>
                                            <a href="{{ route('detail', [$item->id, $item->tieu_de]) }}"><img
                                                    decoding=async src="{{ $item->anh_dai_dien }}"
                                                    alt="{{ $item->anh_dai_dien }}"></a>
                                        </div>
                                        <div class=post-widget-item-content>
                                            <h4><a
                                                    href=heres-the-proof-that-momentum-strategies-work/index.html>{{ $item->tieu_de }}</a>
                                            </h4>
                                            <ul class=pwic_opt>
                                                <li><span><i class="far fa-clock"></i>
                                                        {{ date('d-m-Y', strtotime($item->created_at)) }}</span></li>
                                                <li><span><i class="far fa-comments-alt"></i>
                                                        3</span></li>
                                                <li><span><i class="fal fa-eye"></i>{{ $item->luot_xem }} views </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>



    <div class="elementor-element elementor-element-52530fa elementor-widget elementor-widget-wp-widget-tag_cloud"
        data-id=52530fa data-element_type=widget data-widget_type=wp-widget-tag_cloud.default>
        <div class=elementor-widget-container>
            <h5>Danh mục phổ biến</h5>
            <div class=tagcloud>
                @foreach ($tags as $item)
                    <a href="{{route('tag',$item->id)}}" class="tag-cloud-link tag-link-6 tag-link-position-1"
                        style="font-size: 22pt;" aria-label="Business (27 items)">{{ $item->name }}</a>
                @endforeach

            </div>
        </div>
    </div>

    <div class="elementor-element elementor-element-0571498 elementor-widget elementor-widget-wp-widget-gmag-thumb-category"
        data-id=0571498 data-element_type=widget data-widget_type=wp-widget-gmag-thumb-category.default>
        <div class=elementor-widget-container>
            <h5>Danh Mục</h5>
            <div class=box-widget-content>
                <div class=sb-categories_bg>
                    @foreach ($tags as $key => $tag)
                        <a href="{{route('tag',$tag->id)}}" class=sb-categories_bg_item>
                            <div class=bg-wrap>
                                <div class=bg data-bg={{ $tag->hinh_anh }}>
                                </div>
                                <div class=overlay></div>
                            </div>
                            <div class=spb-categories_title><span>{{ $key + 1 }}</span>{{ $tag->name }}
                            </div>
                            <div class=spb-categories_counter>{{ $tag->posts_count }}</div>
                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
