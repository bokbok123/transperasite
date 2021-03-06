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
        return $this->theme->of('admin.careers',array('Job'=>Job::where('job_status','=','1')->paginate(5)))->render();
    }

    public function announcements()
    {
        $this->theme = Theme::uses('admin')->layout('default');
        return $this->theme->of('admin.announcements',array('Ann'))->render();
    }

    public function contacts()
    {
        $this->theme = Theme::uses('admin')->layout('default');
        return $this->theme->of('admin.contacts')->render();
    }

    public function create_announcements()
    {
        $attachment = "";
        if (Input::hasFile('attach'))
        {
            $file = Input::file('attach');
            $file->move('uploads', $file->getClientOriginalName());
            $attachment = $file->getClientOriginalName();
        }
        $ann = Input::get('ann_id') ? Announcement::find(Input::get('ann_id')) : new Announcement();
        $ann->ann_title = Input::get('ann_title');
        $ann->ann_body = Input::get('editor1');
        $ann->ann_attachment = $attachment;
        $ann->save();

        return Redirect::to('announcements');
    }

    public function create_job()
    {
        $job = Input::get('job_id') ? Job::find(Input::get('job_id')) : new Job();

        $job->job_title = Input::get('job_title');
        $job->job_desc = Input::get('editor1');
        $job->save();

        return Redirect::to('careers');
    }

    public function create_contacts(){
        $contact = Input::get('id') ? Address::find(Input::get('id')) : new Address();

        $contact->address = Input::get('editor1');
        $contact->contact = Input::get('contactNumber');
        $contact->email = Input::get('emailAddress');
        $contact->save();

        return Redirect::to('contact-us');
    }
}