


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
        $('.slider').slider({
            indicators: false
        });
        $('#prev').on('click',function(){
            $('.slider').slider('prev');
        });
        $('#next').on('click',function(){
            $('.slider').slider('next');
        });
    });
</script>
