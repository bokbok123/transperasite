<div id="features-container" class="slide features-container" data-anchor="benefits">
    <div class="row">
        <div class="col m6 offset-m6 hide-on-med-and-down">
            <div class="benefits-container" id="bills-presentment">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-presentment.png'); }}">
                </div>
                <div class="description-container">
                    <span class="header">Bills Presentment and Management</span>
                    <p class="content">
                        Misplacing bills won’t be a problem anymore. With different bills needed to be paid, losing them and forgetting their due dates can be a problem. With the fonebayad app, all your bills can be found in one interface. Users will be reminded every time a new bill comes and when they are about to be due.
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
                    <p class="content">Budgeting money can be an arduous task for anyone, but with the fonebayad app, you can manage your bills and pay them partially before the bill is due. It acts like a personal assistant for your bills. </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="benefits-container" id="money-transfer">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-transfer.png'); }}">
                </div>
                <div class="description-container">
                    <span class="header">Money Transfer</span>
                    <p class="content">With the TransPera feature of the Fonebayad app, you can now send and receive money anytime, anywhere. Transfer money with just a few clicks on your phone! Completely safe and reliable.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="slider col m6 offset-m6" id="feats-carousel">
        <ul class="slides">
            <li>
                <div class="benefits-container" id="bills-presentment">
                    <div class="description-container">
                        <span class="header">Bills Presentment and Management</span>
                        <p class="content">
                            Misplacing bills won’t be a problem anymore. With different bills needed to be paid, losing them and forgetting their due dates can be a problem. With the fonebayad app, all your bills can be found in one interface. Users will be reminded every time a new bill comes and when they are about to be due.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <li>
                <div class="benefits-container" id="bills-payment">
                    <div class="description-container">
                        <span class="header">Bills Payment</span>
                        <p class="content">Budgeting money can be an arduous task for anyone, but with the fonebayad app, you can manage your bills and pay them partially before the bill is due. It acts like a personal assistant for your bills. </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <li>
                <div class="benefits-container" id="money-transfer">
                    <div class="description-container">
                        <span class="header">Money Transfer</span>
                        <p class="content">With the TransPera feature of the Fonebayad app, you can now send and receive money anytime, anywhere. Transfer money with just a few clicks on your phone! Completely safe and reliable.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ul>
    </div>

</div>
<div id="screenshots-container" class="slide features-container" data-anchor="screenshots">
    <div class="screenshots">
        <div class="slider ul-container">
            <a class="carousel-button" id="ss-prev"><img src="{{ Theme::asset()->url('img/icons/ss-left.png') }}"></a>
            <a class="carousel-button" id="ss-next"><img src="{{ Theme::asset()->url('img/icons/ss-right.png') }}"></a>
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
                <div class="description-container" style="max-width: 270px">
                    <span class="header">Bills Presentment</span>
                    <p class="content">
                        Misplacing bills won’t be a problem anymore. With different bills needed to be paid, losing them and forgetting their due dates can be a problem. With the fonebayad app, all your bills can be found in one interface. Users will be reminded every time a new bill comes and when they are about to be due.
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="benefits-container" id="bills-payment">
                <div class="image-container">
                    <img src="{{ Theme::asset()->url('img/icons/icon-payment.png'); }}">
                </div>
                <div class="description-container" style="max-width: 270px">
                    <span class="header">Bills Payment</span>
                    <p class="content">Budgeting money can be an arduous task for anyone, but with the fonebayad app, you can manage your bills and pay them partially before the bill is due. It acts like a personal assistant for your bills. </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.ul-container').slider();
        $('#feats-carousel').slider();
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