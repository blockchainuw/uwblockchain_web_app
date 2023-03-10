<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blog_posts = DB::select(
            'SELECT
                desanitize_string(title) as title,
                isFeatured,
                desanitize_string(image) as image,
                desanitize_string(tags) as tags,
                desanitize_string(content) as content
            FROM laravel.blog_posts
            WHERE id <> (SELECT MAX(id) FROM laravel.blog_posts WHERE isFeatured=FALSE)
            ORDER BY id
        ');
        
        return View::make('Blog')
            ->with('blog_posts', $blog_posts);
    }
}
