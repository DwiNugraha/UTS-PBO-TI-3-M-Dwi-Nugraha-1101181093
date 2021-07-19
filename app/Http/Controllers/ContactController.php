<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sysuser;
use App\sysmenu;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $categories = sysmenu::where('sysmenu_id', '=', '0')
            ->with('childrenCategories')
            ->get();
        return view('layout.app', ['data_menu' => $categories]);
    }
    public function contact(Request $request)
    {
        $categories = sysmenu::where('sysmenu_id', '=', '0')
        ->with('childrenCategories')
        ->get();
    return view('layout.contact', ['data_menu' => $categories]);
    }
}