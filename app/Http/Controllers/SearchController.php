<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchResult()
    {
        // Get param from url
        $keyword = request()->keyword;

        $title = "Result of $keyword - ";

        return view('search-result')->with(['title' => $title, 'keyword' => $keyword]);
    }
}
