<div class="header" id="careers-header">
    <h1>Careers</h1>
</div>
<div class="careers-container hide-on-med-and-down">
    <div class="job-title">
        <?php $jobs = Job::all() ?>
        <ul class="tabs">
        @foreach($jobs as $_job)
            <li class="tab waves-effect waves-light"><a href="{{ '#'.$_job->id }}">{{ $_job->job_title }}</a></li>
        @endforeach
        </ul>
    </div>
    <div class="job-description">
        <div class="parent-container">
        @foreach($jobs as $_job)
            <div id="{{ $_job->id }}" class="job-description-container">{{ $_job->job_desc }}</div>
        @endforeach
        </div>
        <div class="button-container">
            <a class="waves-effect waves-light btn" id="btnApply">Apply Now!</a>
        </div>
    </div>
</div>
<div class="careers-container hide-on-large-only">
    @foreach($jobs as $_job)
    <div class="job-title" id="{{ 'rmh-'.$_job->id }}">{{ $_job->job_title }}</div>
    <div class="job-description">
        <span class="content" id="{{ 'rm-'.$_job->id }}"> {{ $_job->job_desc }} </span>
        <span class="readmore" data-id="{{ $_job->id }}">Read more</span>
    </div>
    @endforeach
</div>

<script>
    $(document).ready(function(){
        $('.job-title .tabs').on('click','li',function(){
            $('.job-title .tabs li').removeClass('active');
            $(this).addClass('active');
        });
        $('.job-title .tabs li:first-child').addClass('active');
        $('.readmore').on('click',function(){
            $('#careers-modal .modal-header').html($('#rmh-'+$(this).data('id')).html());
            $('#careers-modal .modal-content').html($('#rm-'+$(this).data('id')).html());
            $('#careers-modal').openModal();
        });
        $('#careers-modal').on('mouseenter',function(){
            $.fn.fullpage.setMouseWheelScrolling(false);
            $.fn.fullpage.setAllowScrolling(false);
        });
        $('#careers-modal').on('mouseleave',function(){
            $.fn.fullpage.setMouseWheelScrolling(true);
            $.fn.fullpage.setAllowScrolling(true);
        });
    });
</script>