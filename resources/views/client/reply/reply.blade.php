@foreach ($reply as $item)
    

<ul class=children>
    <li class="comment odd alt depth-2">
        <div class=comment-author>
            <img src="{{ $item->user->avatar }}" width=50 height=50
                alt="{{ $item->user->name }}"
                class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo tt-comment-avatar">
        </div>
        <div id=div-comment-6 class="comment-body smpar">
            <h4>{{ $item->user->name }}</h4>
            <div class=clearfix></div>
            <div class="clearfix comment-text">
                <p>{{ $item->mo_ta }}</p>
            </div>
            <a rel=nofollow class=comment-reply-link href="?reply={{$item->id}}#respond"
                >Trả lời</a>
            <div class=comment-meta><i class="far fa-clock"></i>
                {{ date('d-m-Y', strtotime($item->created_at)) }}</div>
            <div class=comment-body_dec></div>
        </div>
    </li>
</ul>
@endforeach