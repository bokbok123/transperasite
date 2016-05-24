<div id="features-container" class="slide features-container" data-anchor="benefits">
    <div class="row">
        <div class="col m5 offset-m7">
            <div class="benefits-container" id="bills-presentment">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-presentment.png'); }}">
                </div>
                <div class="description-container">
                    <span class="header">Bills Presentment</span>
                    <p class="content">
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="benefits-container" id="bills-payment">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-payment.png'); }}">
                </div>
                <div class="description-container">
                    <span class="header">Bills Payment</span>
                    <p class="content">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="benefits-container" id="money-transfer">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-transfer.png'); }}">
                </div>
                <div class="description-container">
                    <span class="header">Money Transfer</span>
                    <p class="content">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div id="screenshots-container" class="slide features-container" data-anchor="screenshots">
    <div class="screenshots">
        <div class="slider ul-container">
            <a class="waves-effect waves-light carousel-button" id="ss-prev"><img src="{{ Theme::asset()->url('img/icons/ss-left.png') }}"></a>
            <a class="waves-effect waves-light carousel-button" id="ss-next"><img src="{{ Theme::asset()->url('img/icons/ss-right.png') }}"></a>
            <ul class="slides">
                <?php $x = Screenshot::all(); ?>
                @foreach($x as $ss => $key)
                @if($ss == 0 || $ss%4 == 0)<li>@endif
                    <img class="ss-container" src="screencaps/{{ $key->filename }}">
                @if(($ss+1)%4 == 0 || end($x) == $key)</li>@endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div id="apple-watch-container" class="slide features-container" data-anchor="apple-watch">
    <div class="row">
        <div class="col m4" id="advanced-technology">
            <h1>Advance</h1>
            <h1>Technology</h1>
        </div>
        <div class="col m5  offset-m3">
            <div class="benefits-container" id="bills-presentment">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-presentment.png'); }}">
                </div>
                <div class="description-container">
                    <span class="header">Bills Presentment</span>
                    <p class="content">
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="benefits-container" id="bills-payment">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-payment.png'); }}">
                </div>
                <div class="description-container">
                    <span class="header">Bills Payment</span>
                    <p class="content">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="nextPageContainer">
    <a href="#career"><img src="{{ Theme::asset()->url('img/icons/next-page.png'); }}"></a>
</div>
<script>
    $(document).ready(function(){
        $('.ul-container').slider();
        $('.ul-container').slider('pause');
        $('#ss-prev').on('click',function(){
            $('.ul-container').slider('prev');
            $('.ul-container').slider('pause');
        });
        $('#ss-next').on('click',function(){
            $('.ul-container').slider('next');
            $('.ul-container').slider('pause');
        });
    });
</script>