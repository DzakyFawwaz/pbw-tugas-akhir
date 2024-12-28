<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SavedBook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function view(Request $request)
    {

        $selected_book_id = $request->input("selected-book");

        $books_table = DB::table('books');
        $on_reads_query = $books_table->join('histories', 'books.id', '=', 'histories.book_id');

        if (Auth::check()) {
            $on_reads_query = $on_reads_query->where('user_id', Auth::user()->id);
        }

        $on_reads = $on_reads_query
            ->limit(2)
            ->get();

        // jika tidak ada request, ambil 1 buku yang sedang dibaca
        if (!isset($selected_book_id) && isset($on_reads) && count($on_reads) > 0) {
            $selected_book_id = head($on_reads)[0]->id;
        }

        $selected_book = Book::query()
            ->firstWhere('id', $selected_book_id);

        // cek buku di simpan
        if ($selected_book && Auth::check()) {
            $selected_book->is_saved =
                SavedBook::query()
                ->where('book_id', $selected_book_id)
                ->where('user_id', Auth::user()->id)
                ->exists();
        }


        return view('dashboard', [
            'selected_book' => $selected_book,
            'on_reads' => $on_reads,
            'trendings' => Book::query()
                ->where('tags', "Trending")
                ->get(),
            'favorites' => Book::query()
                ->where('tags', "Favorite")
                ->get(),
            'others' => Book::query()
                ->where('tags', null)
                ->get(),
        ]);
    }

    public function redirect()
    {
        return redirect('dashboard');
    }
}
