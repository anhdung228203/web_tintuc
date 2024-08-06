@extends('client.auth.index')
@php
    use App\Models\Admin\Post;
@endphp
@section('content')
@section('image')
    <section class=hero-section>
        <div class="bg-wrap hero-section_bg">
            <div class=bg data-bg=https://webredox.net/demo/wp/gmag/wp-content/uploads/2022/06/11.jpg></div>
        </div>
        <div class=container>
            <div class=hero-section_title>
                <h2>Tác giả: <span>{{ $author->name }}</span></h2>
            </div>
            <div class=clearfix></div>
            <div class="breadcrumbs-list fl-wrap">
                <div class=clearfix></div>
                <div class="breadcrumbs-list fl-wrap">
                    <a href="{{ route('trangchu') }}">Trang chủ</a> <a href="#">Tác giả</a>
                    <span>{{ $author->name }}</span>
                </div>
            </div>

        </div>
    </section>
@endsection
<section>
    <div class=container>
        <div class=row>
            <div class=col-md-4>
                <div class="left_fix-bar fl-wrap">
                    <div class="profile-card-wrap fl-wrap">
                        <div class="profile-card_media fl-wrap">
                            <img src="{{ $author->avatar }}" width=80 height=80 alt="{{ $author->name }}"
                                class="avatar avatar-80 wp-user-avatar wp-user-avatar-80 alignnone photo">
                            <div class=profile-card_media_content>
                                <h4>{{ $author->name }}</h4>

                                {{-- <h5>8 YEARS OF MEMBERSHIP</h5> --}}
                            </div>
                            <div class=abs_bg></div>
                            <div class=profile-card-stats>
                                <ul>
                                    <li><span>
                                            {{ count($author->posts) }}</span>bài viết</li>
                                    {{-- <li><span>
                                            {{$author->}} </span> Lượt xem</li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class=profile-card_content>
                            <h4>About</h4>
                            <p>In a professional context it often happens that private or corporate
                                clients corder a publication to be made and presented with the actual
                                content still not being ready. Think of a news blog that’s filled with
                                content hourly on the day of going live. Filled with content hourly on
                                the day of going live.</p>
                            <div class=pc_contacts>
                                <ul>
                                    <li>
                                        <span>Email:</span> <a href="#">{{ $author->email }}</a>
                                    </li>
                                    <li>
                                        <span>Số điện thoại:</span> <a href="#">{{ $author->sdt }}</a>
                                    </li>
                                    <li style="text-align: center">
                                        <form action="{{route('chatbox',$author->id)}}" method="get">
                                            @csrf
                                            <button type="submit" style="background: red; border: none;width: 100px;height: 50px; color: white;cursor: pointer;border-radius: 20px" >nhắn tin</button>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="profile-card-footer fl-wrap">
                            <div class=profile-card-footer_title>Follow:</div>
                            <div class=profile-card-social>
                                <ul>
                                    <li><a href=# target=_blank><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href=# target=_blank><i class="fab fa-x-twitter"></i></a>
                                    </li>
                                    <li><a href=# target=_blank><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href=# target=_blank><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    {{-- <li><a href=# target=_blank> <i class="fa fa-message"></i>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-8">
                <div class="main-container fl-wrap fix-container-init">
                    <div class=section-title>
                        <h3>Bài viết</h3>
                    </div>
                    <div class="grid-post-wrap gallery-items" data-load-item=10000000000000>
                        <div class=row>

                            @foreach ($author->posts as $item)
                                @php

                                    $countComment = Post::withCount('comments')->findOrFail($item->id);

                                @endphp

                                {{-- @dd($countComment) --}}
                                <div class="col-md-6 gallery-item gallery-item-2 ">
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                        <div class=grid-post-media>
                                            <a href="{{ route('detail', [$item->id, $item->tieu_de]) }}"
                                                class=gpm_link>
                                                <div class=bg-wrap>
                                                    <div class=bg data-bg="{{ $item->anh_dai_dien }}">
                                                    </div>
                                                </div>
                                            </a>
                                            <span class=post-media_title>{{ $item->tieu_de }}</span>
                                        </div>
                                        <a class="post-category-marker purp-bg" href="#">{{ $item->tag->name }}
                                        </a>
                                        <div class=grid-post-content>
                                            <h3><a
                                                    href="{{ route('detail', [$item->id, $item->tieu_de]) }}">{{ $item->tieu_de }}</a>
                                            </h3>
                                            <span class=post-date><i class="far fa-clock"></i>
                                                {{ date('d-m-Y', strtotime($item->created_at)) }}</span>
                                            <p>{{ $item->mo_ta_ngan }}</p>
                                        </div>
                                        <div class=grid-post-footer>
                                            <div class=author-link><a href=index.html><img src="{{ $author->avatar }}"
                                                        width=36 height=36 alt="{{ $author->name }}"
                                                        class="avatar avatar-36 wp-user-avatar wp-user-avatar-36 alignnone photo">
                                                    <span>{{ $author->name }}</span></a></div>
                                            <ul class=post-opt>
                                                <li><i
                                                        class="far fa-comments-alt"></i>{{ $countComment->comments_count }}
                                                </li>
                                                <li><i class="fal fa-eye"></i> {{ $item->luot_xem }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class=pagination>
                        <a class=prevposts-link href=index.html><i class='fas fa-caret-left'></i></a>
                        <a href=#0 class=current-page>1</a><a href=page/2/index.html>2</a>
                        <a class=nextposts-link href=page/2/index.html><i class='fas fa-caret-right'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="limit-box fl-wrap"></div>
</section>
@endsection
