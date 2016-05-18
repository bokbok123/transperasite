<div class="careers-container">
    <div class="job-title">
        @foreach(Job::all() as $_job)
        <ul class="tabs">
            <li class="tab"><a href="{{ $_job->job_title }}">{{ $_job->job_title }}</a></li>
        </ul>
        @endforeach
    </div>
    <div class="job-description"></div>
</div>

<style>
    div.careers-container{
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
    div.careers-container div.job-title ul{
        color: #535963;
        display: table-cell;
        vertical-align: middle;
    }
    div.careers-container div.job-description{
        float: left;
        width: 70%;
        height: 100%;
    }
</style>