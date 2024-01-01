<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use DB;

class ItemController extends Controller
{
    public function show() {
        $items = Item::all();

        return view('items', compact('items'));
    }

    public function item(Item $item)

    {
        //$item=DB::table('items')->find($id);
        return view('item', compact('item'));
    }

    public function browseitems() {

        $items = Item::all();

        return view('browse_items', compact('items'));
    }

    public function store(Request $request) {

        $img_name = time() . '.' . $request->image->getClientOriginalExtension();

        $item = new Item;
        $item->title = request('title');
        $item->price = request('price');
        $item->description = request('description');
        $item->size = request('size');
        $item->color = request('color');
        $item->category_id = request('category_id');
        $item->image = $img_name;

        $item->save();


        $request->image->move(public_path('upload'), $img_name);

        return redirect('dashboard/product');



    }

    public function categorystore(Request $request) {
        $img_name = time() . '.' . $request->image->getClientOriginalExtension();

        $category= new Category;
        $category->title= request('title');
        $category->description= request('description');
        $category->image = $img_name;
        $category->save();

        $request->image->move(public_path('upload'), $img_name);
        return redirect('dashboard/product');


    }

    public function product() {

        $categories= Category::all();
        $items = Item::all();

        return view('admin.dashboard-product', compact('categories','items'));
    }

    public function destroy($id) {


        DB::table('items')->where('id', $id)->delete();

        return redirect('dashboard/product');
    }

    public function destroycat($id) {
        DB::table('categories')->where('id', $id)->delete();

        return redirect()->back();
    }

}
