<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Item;
use App\Category;

class PageController extends Controller
{
    public function home()
    {
        $items = Item::all();
        $categories = Category::all();

        return view('homepage', compact('items','categories'));
    }
}
