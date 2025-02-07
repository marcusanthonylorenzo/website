<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function about()
    {
        return response()->json(['title' => 'About', 'content' => 'This is your about content.']);
    }

    public function resume()
    {
        return response()->json(['title' => 'Resume', 'content' => 'This is your resume content.']);
    }

    public function projects()
    {
        return response()->json(['title' => 'Projects', 'content' => 'This is your projects content.']);
    }

    public function contact()
    {
        return response()->json(['title' => 'Contact', 'content' => 'This is your contact content.']);
    }
}
