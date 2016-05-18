<?php

class AdminController extends BaseController {
    public function dashboard()
    {
        $this->theme = Theme::uses('admin')->layout('default');
        return $this->theme->of('dashboard')->render();
    }

    public function create_job()
    {
        $job = new Job();
        $job->job_title = Input::get('job_title');
        $job->job_desc = Input::get('editor1');
        $job->save();

        return Redirect::to('dashboard');
    }
}