<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstBibleController extends Controller
{
    const BOOK_NAME = 'Mark';
    const BIBLE_VERSION = 'King James Version';
    const CHAPTERS = 10;
    public function index()
    {
        return view('index',[
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }

    public function contentPerChapter($chapter_number)
    {
        return view('content-chapter', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }
    
     public function readContent()
    {
        return view('all-chapters', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS,
        ]);
    }
}
