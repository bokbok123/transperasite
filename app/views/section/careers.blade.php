<div class="careers-container">
    <div class="job-title">
        <?php $jobs = Job::all() ?>
        <ul class="tabs">
        @foreach($jobs as $_job)
            <li class="tab"><a href="{{ '#'.$_job->id }}">{{ $_job->job_title }}</a></li>
        @endforeach
        </ul>
    </div>
    <div class="job-description">
        @foreach($jobs as $_job)
            <div id="{{ $_job->id }}" class="job-description-container">{{ $_job->job_desc }}</div>
        @endforeach
        <div class="button-container">
            <a class="waves-effect waves-light btn" id="btnApply">Apply Now!</a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.job-title .tabs').on('click','li',function(){
            $('.job-title .tabs li').removeClass('active');
            $(this).addClass('active');
        });
        $('.job-title .tabs li:first-child').addClass('active');
    });
</script>