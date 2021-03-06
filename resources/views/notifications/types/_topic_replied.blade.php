<div class="media">
    <div class="avatar pull-left">
        <a href="{{ route('users.show',$notification->data['user_id']) }}">
            <img class="media-object thumbnail" alt="{{ $notification->data['user_name'] }}" src="{{ $notification->data['user_avatar'] }}" style="width: 48px; height:48px;"/>
        </a>
    </div>
    <div class="infos">
        <div class="media-heading">
            <a href="{{ route('users.show',$notification->data['user_id']) }}">{{ $notification->data['user_name'] }}</a>
            评论了
            <a href="{{ $notification->data['topic_link'] }}">{{ $notification->data['topic_title'] }}</a>

            <span class="meta pull-right">
                <span class="glyphicon glyphicon-clock" title="{{ $notification->created_at }}">
                    {{ $notification->created_at->diffForHumans() }}
                </span>
            </span>
        </div>
        <div class="reply-content">
            {{ $notification->data['reply_content'] }}
        </div>
    </div>
</div>