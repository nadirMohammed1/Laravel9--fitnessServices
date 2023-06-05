<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('AdminPanel.index');
    }


    public function setting()
    {
        $data = Setting::first();
        if ($data == null)// if setting table is empty add one record
        {
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data = Setting::first();
        }
        return view('AdminPanel.setting', [
            'data' => $data
        ]);
    }

    public function settingUpdate(Request $request)
    {
        $id = $request->input('id');

        $data = Setting::find($id);

        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->company = $request->company;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->fax = $request->fax;
        $data->email = $request->email;
        $data->smtpserver = $request->smtpserver;
        $data->smtpmail = $request->smtpmail;
        $data->smtppassowrd = $request->smtppassowrd;
        $data->smtpport = $request->smtpport;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->youtube = $request->youtube;
        $data->aboutus = $request->aboutus;
        $data->contact = $request->contact;
        $data->references = $request->references;
        $data->status = $request->status;
        if ($request->file('icon')) {
            $data->image = $request->file('icon')->store('image');
        }
        $data->save();
        return redirect('/admin/setting');
    }

}
