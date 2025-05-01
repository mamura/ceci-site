<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function show(string $slug = 'home')
    {
        $page = Page::with('sections')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('site.page', compact('page'));
    }
}
