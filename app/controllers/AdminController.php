<?php

class AdminController extends BaseController {
    public function dashboard()
    {
        $this->theme = Theme::uses('admin')->layout('default');
        return $this->theme->of('dashboard')->render();
    }

    public function careers()
    {
        $this->theme = Theme::uses('admin')->layout('default');
        return $this->theme->of('admin.careers',array('Job'=>Job::paginate(5)))->render();
    }

    public function announcements()
    {
        $this->theme = Theme::uses('admin')->layout('default');
        return $this->theme->of('admin.announcements',array('Ann'))->render();
    }

    public function create_announcements()
    {
        $ann = new Announcement();
        $ann->ann_title = Input::get('ann_title');
        $ann->ann_body = Input::get('editor1');
        $ann->save();

        return Redirect::to('announcements');
    }

    public function create_job()
    {
        if(Input::get('job_id')){
            $job = Job::find(Input::get('job_id'));
        }else{
            $job = new Job();
        }

        $job->job_title = Input::get('job_title');
        $job->job_desc = Input::get('editor1');
        $job->save();

        return Redirect::to('careers');
    }
}