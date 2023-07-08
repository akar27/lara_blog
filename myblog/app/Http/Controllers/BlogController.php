<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    
    public function index()
    {
        // $blog = DB::table("blogs")->get();
        $blog = DB::table('blogs')->paginate(6);

        return view('blogs', ['blog' => $blog]);
    }

    public function search()
    {
        $search_text = $_GET['search'];
        $blog = Blog::where('title', 'LIKE', '%' . $search_text . '%')->paginate(6);

        return view('search', ['blog' => $blog]);
    }


    public function create()
    {
        //
        return view('addform');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'auth' => 'required',
            'title' => 'required|max:40',
            'description' => 'required',
            'pic' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // $pic_dir = "public/images/blogs";
        // $image = $request->file('image');
        // $image_name = $image->getClientOriginalName();
        // $request->file('image')->storeAs($pic_dir, $image_name);
        

        $post = new Blog();
        $post->auth = $request->auth;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image_path = $this->store_img($request);
        $post->save();

        //     Blog::create([
        //     'auth' => $auth,
        //     'prenom' => $title,
        //     'description' => $description,
        //     'pic' => $pic
        // ]);

        return redirect('/blog');
    }
    // public function show(Blog $blog)
    // {
    //     //
    // }

    public function edit($blog)
    {
        return view('edit', [
            'post' => Blog::where('id', $blog)->first()
        ]);
    }


    public function update(Request $request, $blog)
    {
        $request->validate([
            'auth' => 'required',
            'title' => 'required|max:40',
            'description' => 'required',
        ]);

        Blog::where('id', $blog)->update([
            'auth' => $request->auth,
            'title' => $request->title,
            'description' => $request->description,
            // 'image_path' => $request->image
        ]);

        return redirect('/blog');
    }


    public function destroy($blog)
    {
        Blog::destroy($blog);

        return redirect('/blog')->with('message', 'blog is deleted');
    }

    public function store_img($request)
    {
        $file = $request->image;
        $image_name = time() . '_'. $file->getClientOriginalName();
        $file->move(public_path('upload'), $image_name);
        return $image_name;
    }
}
