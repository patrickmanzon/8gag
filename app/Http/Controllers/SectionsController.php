<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;


class SectionsController extends Controller
{
    public function index() 
    {
        return response()->json(Section::all(), 200);
    }
}
