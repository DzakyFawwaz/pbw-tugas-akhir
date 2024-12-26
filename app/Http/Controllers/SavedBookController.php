<?php

namespace App\Http\Controllers;

use App\Models\SavedBook;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SavedBookController extends Controller
{
    public function view(Request $request)
    {

        $selected_book_id = $request->input(("selected-book"));
        $books = DB::table('saved_books');

        $saved_books = $books
            ->join('books', 'books.id', '=', 'saved_books.book_id')
            ->where('user_id', '=', Auth::user()->id)
            ->get();

        // jika tidak ada request, ambil 1 buku yang disimpan
        if (!isset($selected_book_id) && isset($on_reads) && count($on_reads) > 0) {
            $selected_book_id = head($saved_books)[0]->id;
        }

        $selected_book = Arr::first($saved_books, fn($book) => $book->book_id == $selected_book_id);

        // cek buku di simpan
        if ($selected_book) {
            $selected_book->is_saved =
                SavedBook::query()
                ->where('book_id', $selected_book_id)
                ->where('user_id', Auth::user()->id)
                ->exists();
        }

        return view('savedbooks', [
            'title' => "Buku Disimpan",
            'saved_books' => $saved_books,
            'selected_book' => $selected_book,
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

        return redirect('saved?selected-book=' . $selected_book_id);
    }
}
