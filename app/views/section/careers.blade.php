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
            <a class="waves-effect waves-light btn">Apply Now!</a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.job-title .tabs').on('click','li',function(){
            $('.job-title .tabs li').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<style>
    div.careers-container{
        background: transparent none repeat scroll 0 0;
        border: 8px solid #393c3f;
        border-radius: 10px;
        height: 500px;
        margin: 0 auto;
        width: 1180px;
    }
    div.careers-container div.job-title{
        display: table;
        float: left;
        height: 100%;
        width: 30%;
    }
    div.careers-container div.job-title .tabs{
        background: transparent none repeat scroll 0 0;
        color: #535963;
        display: table-cell;
        padding: 15px 50px 15px 15px;
    }
    div.careers-container div.job-title .tabs a{
        color: #535963;
    }
    div.careers-container div.job-title .tabs .tab.active a,
    div.careers-container div.job-title .tabs a:hover{
        color: #fff;
    }
    div.careers-container div.job-title .tabs .tab{
        float: none;
        height: 70px;
        margin: 0 auto;
        padding: 10px;
        text-align: right;
        width: 90%;
    }
    div.careers-container div.job-title .tabs .tab.active,
    div.careers-container div.job-title .tabs .tab:hover{
        background-color: #1b2224;
    }
    div.careers-container div.job-title .tabs .indicator{
        display: none;
    }
    div.careers-container div.job-description{
        color: #fff;
        float: left;
        height: 100%;
        padding: 35px;
        width: 70%;
    }
    div.careers-container div.job-description div.job-description-container{
        height: calc(100% - 45px);
        overflow-y: auto;
    }
    div.careers-container div.job-description div.button-container{
        margin-top: 10px;
    }
</style>