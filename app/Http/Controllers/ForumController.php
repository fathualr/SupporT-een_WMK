<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    
    public function forum()
    {
        return view('pasien/forum_diskusi', [
            "title" => "Forum Diskusi Online"
        ]);
    }
    
}
