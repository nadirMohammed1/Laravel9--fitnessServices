<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Message;
use Illuminate\Http\Request;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
//    making a loop for the whole parent + sub-category list
    public static function maincategoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    //
    public function index()
    {
        $sliderData = Service::limit(4)->get();
        $packagesData = Service::limit(4)->get();
        $setting = Setting::first();

        return view("front-page.index", [
            'setting' => $setting,
            'sliderData' => $sliderData,
            'packagesData' => $packagesData
        ]);
    }

//about
    public function about()
    {
//        echo 'about';
//        exit();

        $sliderData = Service::limit(4)->get();
        $setting = Setting::first();
        return view("front-page.about", [
            'setting' => $setting,
            'sliderData' => $sliderData

        ]);
    }

    //references
    public function references()
    {
        echo "references";
        exit();
        $setting = Setting::first();
        return view("front-page.references", [
            'setting' => $setting
        ]);
    }

    //contact
    public function contact()
    {
        $setting = Setting::first();
        return view("front-page.contact", [
            'setting' => $setting
        ]);
    }

    //faq
    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view("front-page.faq", [
            'setting' => $setting,
            'datalist' => $datalist
        ]);
    }

    //storemessage
    public function storemessage(Request $request)
    {

//        dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'your message has been sent, Thank you');

    }

    //storecomment
    public function storecomment(Request $request)
    {

//        dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->rate = $request->input('rate');
        $data->review = $request->input('review');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('package', ['id' => $request->input('product_id')])->with('info', 'your message has been sent, Thank you');

    }


//    this is just for one single package

    public function package($id)
    {

        $data = Service::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        $review = Comment::where('product_id', $id)->get();
        return view('front-page.package', [
            'data' => $data,
            'images' => $images,
            'review' => $review

        ]);

    }

    //    this is for navigation sub packages

    public function categoryServices($id)
    {

        $category = Service::find($id);
        $services = DB::table('images')->where('product_id', $id)->get();
        return view('front-page.categoryServices', [
            'category' => $category,
            'services' => $services

        ]);

    }

    public function test()
    {
        return view("Front-page.test");
    }

    // calling the same function with parameters.
    public function Param($p)
    {
        echo "it is " . $p . "yeah";
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }

    // admin login authentication
    public function adminlogincheck(Request $request)
    {
//        dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
