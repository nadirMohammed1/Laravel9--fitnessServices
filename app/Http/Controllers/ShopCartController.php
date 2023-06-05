<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\ShopCart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShopCartController extends Controller
{
    public static function countshopcart()
    {

        return ShopCart::where('user_id', Auth::id())->count();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = ShopCart::where('user_id', Auth::id())->get();
        return view('Front-page.user.subscription', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $id = $request->id;

        $data = ShopCart::where('product_id', $id)->where('user_id', Auth::id())->first();

        if ($data) {
            $data->quantity = $data->quantity + $request->input('quantity');

        } else {

            $data = new ShopCart;

            $data->product_id = $id;

            $data->user_id = Auth::id();

            $data->quantity = $request->input('quantity');

        }

        $data->save();

        return redirect()->back()->with('info', 'Your subscription added Successfully..');

    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        echo 'subcribed';
        exit();

        $data = ShopCart::where('product_id', $id)->where('user_id', Auth::id())->first(); // Check product for user

        if ($data) {

            $data->quantity = $data->quantity + 1;

        } else

            $data = new ShopCart;
        $data->product_id = $id;
        $data->user_id = Auth::id();
        $data->quantity = 1;
        $data->save();


    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = ShopCart::find($id);
        $data->quantity == $request->input('quantity');
        $data->save();
        return redirect()->back()->with('success', 'Your subscription was updated Successfully..');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = ShopCart::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Your subscription deleted Successfully..');
    }
}
