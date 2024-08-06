<div class="hero-slider-wrap fl-wrap">
    <div class="hero-slider-container multi-slider fl-wrap full-height">
        <div class=swiper-container>
            <div class=swiper-wrapper>
                @foreach ($banners as $item)
                <div class=swiper-slide>
                    <div class=bg-wrap>
                        <div class=bg
                            data-bg={{$item->anh_dai_dien}}
                            data-swiper-parallax=40%></div>
                        <div class=overlay></div>
                    </div>
                    <div class="hero-item fl-wrap">
                        <div class=container>
                            <a class=post-category-marker href=category/technology/index.html>{{$item->tag->name}}
                            </a>
                            <div class=clearfix></div>
                            <h2><a href=innovations-that-bring-pleasure-to-all-peoples/index.html>{{$item->tieu_de}}</a></h2>
                            <p>{{$item->mo_ta_ngan}}</p>
                            <div class=clearfix></div>
                            <div class=author-link><a href=author/admin/index.html><img
                                        src=wp-content/uploads/2022/06/4.jpg width=36 height=36
                                        alt="Jessie Bond"
                                        class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                    <span>{{$item->user->name}}</span></a></div>
                            <span class=post-date><i class="far fa-clock"></i> {{date('d-m-Y',strtotime($item->created_at))}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="fs-slider_btn color-bg fs-slider-button-prev"><i class="fas fa-caret-left"></i>
        </div>
        <div class="fs-slider_btn color-bg fs-slider-button-next"><i class="fas fa-caret-right"></i>
        </div>
    </div>
    <div class=hero-slider_controls-wrap>
        <div class=container>
            <div class="hero-slider_controls-list multi-slider_control">
                <div class=swiper-container>
                    <div class=swiper-wrapper>
                        @foreach ($banners as $item)
                        <div class=swiper-slide>
                            <div class="hsc-list_item fl-wrap">
                                <div class=hsc-list_item-media>
                                    <div class=bg-wrap>
                                        <div class=bg
                                            data-bg="{{$item->anh_dai_dien}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="hsc-list_item-content fl-wrap">
                                    <h4>{{$item->tieu_de}}</h4>
                                    <span class=post-date><i class="far fa-clock"></i> {{date('d-m-Y',strtotime($item->created_at))}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                       
                    </div>
                </div>
            </div>
            <div class=multi-pag></div>
        </div>
    </div>
    <div class="slider-progress-bar act-slider">
        <span>
            <svg class=circ width=30 height=30>
                <circle class=circ2 cx=15 cy=15 r=13 stroke=rgba(255,255,255,0.4) stroke-width=1
                    fill=none />
                <circle class=circ1 cx=15 cy=15 r=13 stroke=#e93314 stroke-width=2 fill=none />
            </svg>
        </span>
    </div>
</div>
<div class=clearfix></div>