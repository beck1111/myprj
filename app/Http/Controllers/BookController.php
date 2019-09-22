<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model;

class BookController extends Controller
{
    //
    public function index()
    {
        // DBよりBookテーブルの値を全て取得
        $books = Model\Book::all();
        //var_export($books);exit;

        // 取得した値をビュー「book/index」に渡す
        return view('book', compact('books'));
    }

    public function detail($id)
    {
        var_export($id);
        sdfddsf

        exit;
        //$request->validate(
        //    ['id' => 'required|interger']
        //    );
        ////var_dump($id);
        //// DBよりBookテーブルの値を全て取得
        //$book = Model\Book::find($request);

        //if (empty($book)) {
        //    //throw new \Exception('not found', 404);
        //    abort(404);
        //    //$book = $this->no_info($id);
        //    //return view('error/404', array('message' => 'not found'));
        //}
        //// 取得した値をビュー「book/index」に渡す
        //return view('book_detail', compact('book'));
    }

    public function api_detail($id)
    {
        //var_dump($id);
        // DBよりBookテーブルの値を全て取得
        $book = Model\Book::find($id);

        if (empty($book)) {
            $book = $this->no_info($id);
        }

        // 取得した値をビュー「book/index」に渡す
        return $book;
        //return response()->json(
        //    $book
        //);
    }
    private function no_info($id) {
        return ['id'=>$id, 'message'=>'not found'];
    }
}
