<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Section;

class SectionController extends Controller
{
    public function index()
    {

        $sections = Section::orderBy("created_at", "Desc")->paginate(6);

        return view('Customer.section.index', compact('sections'));
    }

    public function details($id)
    {
        $section = Section::where('id', '=', $id)->first();
        return view('Customer.section.details', compact('section'));
    }
}
