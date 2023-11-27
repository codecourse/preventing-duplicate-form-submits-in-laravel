<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SafeSubmit\SafeSubmit;
use App\Http\Middleware\HandleSafeSubmit;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(HandleSafeSubmit::class)->only('store');
    }
    
    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        return view('posts.show');
    }

    public function store(Request $request, SafeSubmit $safeSubmit)
    {
        sleep(1);

        \Log::info('created');

        return $safeSubmit->intended(route('posts.show', 1));
    }
}
