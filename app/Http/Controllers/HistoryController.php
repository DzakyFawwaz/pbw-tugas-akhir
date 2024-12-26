<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function view()
    {

        $histories = History::all();

        return view('history', ['title' => "History", 'histories' => $histories]);
    }
}
