@extends('layout.master');
{{-- @dd($findpost) --}}
@section('style')
    <style>
        a {
            text-decoration: none !important;
        }

        /* .hnt_title {
               padding-left: 20px !important;
           } */

        .topbar-social li a {
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .fs-slider-button-prev {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .fs-slider-button-next {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .aside-panel li a {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .show-cart {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .srf_btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search_btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection

@section('content')
    <div class="main-container fl-wrap fix-container-init">
        <div class=section-title>
            <h2>{{ $ket_qua }}</h2>
        </div>
        <div class="grid-post-wrap  gallery-items" data-load-item=8 data-button-text="Load More"
            data-button-alignment=lmb_center-align>
            <div class=row>
                @foreach ($findpost as $item)
                    <div id={{ $item->id }}
                        class="col-md-6 gallery-item gallery-item-2 post-16 post type-post status-publish format-gallery has-post-thumbnail hentry category-technology tag-science tag-technology tag-business tag-lifestyle post_format-post-format-gallery">
                        <div class="grid-post-item  bold_gpi  fl-wrap">
                            <div class=grid-post-media>
                                <a href={{ route('detail', [$item->id, $item->tieu_de]) }} class=gpm_link>
                                    <div class=bg-wrap>
                                        <div class=bg data-bg="{{ $item->anh_dai_dien }}">
                                        </div>
                                    </div>
                                </a>
                                <span class=post-media_title>© Image Copyrights Title</span>
                            </div>
                            <a class="post-category-marker purp-bg"
                                href=../category/technology/index.html>{{ $item->tag->name }} </a>
                            <div class=grid-post-content>
                                <h3><a
                                        href=../innovations-that-bring-pleasure-to-all-peoples/index.html>{{ $item->tieu_de }}</a>
                                </h3>
                                <span class=post-date><i
                                        class="far fa-clock"></i>{{ date('d-m-Y', strtotime($item->created_at)) }} </span>
                                <p>{{ $item->mo_ta_ngan }}</p>
                            </div>
                            <div class=grid-post-footer>
                                <div class=author-link><a href=../author/admin/index.html><img src={{ $item->user->avatar }}
                                            width=36 height=36 alt="Jessie Bond"
                                            class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                        <span>{{ $item->user->name }}</span></a></div>
                                <ul class=post-opt>
                                    <li><i class="far fa-comments-alt"></i> 3</li>
                                    <li><i class="fal fa-eye"></i> {{ $item->luot_xem }} views </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
