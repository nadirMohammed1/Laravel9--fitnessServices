<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Service::all();
//        var_dump($data);
        return view('service.index', [
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
        $data = Category::all();
        return view('service.create', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $data = new Service();
        $data->category_id = $request->parent_id;
        $data->user_id = 0;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->title = $request->title;
        $data->price = $request->price;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('/admin/service');
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
        $data = Service::find($id);
        return view('service.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Service::find($id);
        $dataList = Category::all();
        return view('service.edit', [
            'data' => $data,
            'dataList' => $dataList
        ]);

//        echo "the id choosenn is :" , $id;
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
        $data = Service::find($id);
        $data->category_id = $request->parent_id;
        $data->user_id = 0;
        $data->description = $request->description;
        $data->title = $request->title;
        $data->price = $request->price;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('/admin/service');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service, $id)
    {
        $data = Service::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('/admin/service');

    }
}
