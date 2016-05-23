


<div class="announcements-container">
    <div class="header">
        <h1>Announcements</h1>
    </div>
    <div class="slider each-ann">
        <ul class="slides">
            @foreach(Announcement::all() as $ann)
            <li>
                <div class="each-img">
                    {{ $ann->ann_body }}
                </div>
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
    });
</script>
