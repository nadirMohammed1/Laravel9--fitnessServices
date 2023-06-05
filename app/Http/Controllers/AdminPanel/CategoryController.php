<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title)
    {
        if ($category->parent_id == 0) {
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentsTree($parent, $title);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('category.index', [
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
        return view('category.create', [
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

        $data = new Category();

        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('/admin/category');
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
        $data = Category::find($id);
        return view('category.show', [
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

        $data = Category::find($id);
        $dataList = Category::all();
        return view('category.edit', [
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
        $data = Category::find($id);
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('/admin/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $data = Category::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('/admin/category');

    }
}
