<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function showPage(Request $request)
    {

        $selected_book = $request->input(("selected-book"));


        $books = DB::table('books')->select('id', 'title', 'rating', 'cover_url');
        $on_reads = DB::table('books')
            ->join('histories', 'books.id', '=', 'histories.book_id')
            ->where('user_id', Auth::user()->id)
            ->get();


        if (!isset($selected_book) && isset($on_reads) && count($on_reads) > 0) {
            $selected_book = head($on_reads)[0]->id;
        }


        return view('dashboard', [
            'books' => $books,
            'trendings' => Book::query()->where('tags', "Trending")->get(),
            'favorites' => Book::query()->where('tags', "Favorite")->get(),
            'selected_book' => Book::query()
                ->firstWhere('id', $selected_book),
            'on_reads' => $on_reads
        ]);
    }
}
