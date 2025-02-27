<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

final class DataBaseFun extends Controller
{
    function categoriesandnews()
    {
        $news = DB::table('adminnews')->get();
        $data = DB::table('categories')->get();

        return  view('layouts.pages.homepage', ['categories' => $data, 'adminnews' => $news]);
    }
    function product($cat_id = null)
    {


        $data = DB::table('product')->where('category_id', $cat_id)->get();

        return  view('layouts.pages.productpage', ['product' => $data]);
    }
}