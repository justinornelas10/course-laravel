<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $post = Post::find(3);
        $category = Category::find(1);
        // dd($post->category->title);
        dd($category->posts[2]->title);


        // return response()->json([
        //     'name' => 'Justin',
        //     'state' => 'Jal'
        // ]);
        
        // --------------CREATE
        // Post::create(
        //     [
        //         'title' => 'test title post 1',
        //         'slug' => 'test slug post 2',
        //         'content' => 'test content',
        //         'category_id' => 1,
        //         'description' => 'test description',
        //         'posted' => 'not',
        //         'image' => 'test image',
        //     ]
        // );

        //----------------READ
        // dd($post);


        //----------------UPDATE
        // $post->update(
        //     [
        //         'title' => 'new Title updated',
        //         'slug' => 'test slug 1 slugged',
        //         'content' => 'test content updated',
        //         'image' => 'test image updated',
        //     ]
        // );

        //----------------DELETE
        // $post->delete($post);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
