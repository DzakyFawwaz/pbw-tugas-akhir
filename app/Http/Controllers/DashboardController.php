<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SavedBook;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function view(Request $request)
    {

        $selected_book_id = $request->input("selected-book");

        $books_table = DB::table('books');
        $on_reads = $books_table
            ->join('histories', 'books.id', '=', 'histories.book_id')
            ->where('user_id', Auth::user()->id)
            ->limit(2)
            ->get();

        // jika tidak ada request, ambil 1 buku yang sedang dibaca
        if (!isset($selected_book_id) && isset($on_reads) && count($on_reads) > 0) {
            $selected_book_id = head($on_reads)[0]->id;
        }

        $selected_book = Book::query()
            ->firstWhere('id', $selected_book_id);


        // cek buku di simpan
        if ($selected_book) {
            $selected_book->is_saved =
                SavedBook::query()
                ->where('book_id', $selected_book_id)
                ->where('user_id', Auth::user()->id)
                ->exists();
        }


        return view('dashboard', [
            'books' => $books_table->select('id', 'title', 'rating', 'cover_url'),
            'trendings' => Book::query()->where('tags', "Trending")->get(),
            'favorites' => Book::query()->where('tags', "Favorite")->get(),
            'selected_book' => $selected_book,
            'on_reads' => $on_reads
        ]);
    }

    public function save(Request $request)
    {
        $selected_book_id = $request->input("selected-book");
        $user_id = Auth::user()->id;

        $book = SavedBook::query()
            ->where([
                'book_id' => $selected_book_id,
                'user_id' => $user_id
            ])->first();

        // cek buku di table simpan
        if ($book) {
            SavedBook::where([
                'id' => $book->id
            ])->delete();
        } else {
            $saveBook = new SavedBook();
            $saveBook->book_id = $selected_book_id;
            $saveBook->user_id = $user_id;
            $saveBook->save();
        }

        return redirect('dashboard?selected-book=' . $selected_book_id);
    }
}
