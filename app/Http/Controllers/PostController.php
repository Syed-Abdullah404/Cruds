<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::where('user_id', auth()->user()->id)->paginate(5);
        // return view('Post.post');
        return view('Post.post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Post.partial.addPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|max:2048',
        ]);

        $input = $request->all();
// dd($input);
        if ($image = $request->file('image')) {
            // dd($image);
            $destinationPath = 'image/posts/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Post::create($input);

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postEdit = post::find($id);
        return view('Post/partial/editPost', compact('postEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = Post::find($id);

        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $input = $request->all();


        if ($request->hasfile('image')) {
            $destinationSavePath = 'image/posts/' . $id->image;
            if (File::exists($destinationSavePath)) {
                File::delete($destinationSavePath);
            }
            //    unlink($destinationSavePath);
            $image = $request->file('image');
            // dd($image);
            $destinationPath = 'image/posts/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $id->update($input);
        return redirect('post')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return response()->json(['status'=>'delete successfully']);
    }
}
