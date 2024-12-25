<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function showPage(Request $request)
    {

        $selected_book = $request->input(("selected-book"));

        if (!isset($selected_book)) {
            $selected_book = Arr::first(config('data.books'), fn($book) => $book['is_reading'] == true)['id'];
        }

        return view('dashboard', [
            'books' => DB::table('books')->select('id', 'title', 'rating', 'cover_url'),
            'trendings' => Book::query()->where('tags', "Trending")->get(),
            'favorites' => Book::query()->where('tags', "Favorite")->get(),
            'selected_book' => Book::query()
                ->firstWhere('id', $selected_book)
            // 'selected_book' => Book::query()
            //     ->firstWhere('id', $selected_book)
            // ->select('title', 'rating',)
        ]);
    }
}
