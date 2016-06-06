<div class="announcements-container">
    <div class="header">
        <h1>Announcements</h1>
    </div>
    <div class="slider each-ann">
        <ul class="slides">
            @foreach(Announcement::where('ann_status','=','1')->get() as $ann)
            <li>
                <div class="each">
                    <div class="each-content" id="{{ $ann->id }}">
                        {{ $ann->ann_body }}
                    </div>
                    <div class="clear"></div>
                </div>
                <a class="readMore modal-trigger" href="#readmore" data-id="{{ $ann->id }}">read more</a></p>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="button-container">
        <a class="waves-effect waves-light" id="prev"><img src="{{ Theme::asset()->url('img/icons/left.png') }}"> PREV</a>
        <a class="waves-effect waves-light" id="next">NEXT <img src="{{ Theme::asset()->url('img/icons/next.png') }}"></a>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.each-ann').slider({
            indicators: false
        });
        $('.each-ann').slider('pause');
        $('#prev').on('click',function(){
            $('.each-ann').slider('prev');
            $('.each-ann').slider('pause');
        });
        $('#next').on('click',function(){
            $('.each-ann').slider('next');
            $('.each-ann').slider('pause');
        });
        $('.readMore').on('click',function(){
            var attachment =  $('.each-content#'+$(this).data('id')+' table tr td:first-child').html();
            var content =  $('.each-content#'+$(this).data('id')+' table tr td:last-child').html();
            console.log(content);
            $('#readmore .modal-content').html(content);
        });
    });
</script>
