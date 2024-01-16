<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Post;
use App\Scholarship;
use App\Comment;
use App\User;
use App\Pendingscholars;
use App\Profile;
use App\Notifications\newPost;
use Notification;
use DB;

class PostsController extends Controller
{

    //https://stackoverflow.com/questions/43236142/laravel-automatically-delete-blog-post-when-it-pass-its-expiry-date
    //https://laravel.com/docs/5.4/scheduling
    public function index2()
    {
        $comments = Comment::all();
        $posts = POST::orderBy('updated_at','desc')->limit(5)->get();
        $profile = Profile::where('is_confirmed', 1)->get();
        $request = Profile::where('is_confirmed', 0)->get();
        $accountsApproved = User::where('is_confirmed', 1)->get();
        $accountsUnapproved = User::where('is_confirmed', 0)->get();
        $scholarships = Scholarship::where('slot', '>', 0)->latest()->simplePaginate(5);
        return view('template.index',  compact('posts', 'scholarships','profile','comments','request','accountsApproved','accountsUnapproved'));
    }

    public function index()
    {
        
        $posts = POST::latest()->get();

     return view('adminPages.post.index', compact('posts'));
    }
    public function editadmin($id)
    {
        $comment = Comment::find($id);
        return view('adminpages.post.editComment',compact('comment'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('adminPages.post.show', compact('post'));
    }

    public function create()
    {
        return view('adminPages.post.create', compact('posts'));
    }
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $image_path = public_path("images/$posts->filename");
        if (File::exists($image_path)) {
                    File::delete($image_path);
                    // unlink($image_path);
                }
        $posts->delete();
        
        return back()->with('message','Announcement deleted successfully!');

    }
    public function manage()

    {
        $posts = Post::latest()->get()->all();
        return view('adminPages.post.manage', compact('posts'));
    }
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('adminPages.post.edit',compact('posts'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate the Field
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',

        ]);
        $posts = Post::find($id);
        $posts->title=$request->title;
        $posts->body=$request->body;
       
        $posts->save();
        session()->flash('message', 'You have succesfully updated an announcement');
        return redirect('/posts/manage');
    }

    public function store(Request $request)
    {
        $user = User::all();
        $post = Post::latest()->get();
        

        // VALIDATION
        $this->validate(request(), [
            'title' => 'required|min:2',
            'body' => 'required|min:5',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg'

        ]); 
        if($request->hasfile('filename'))
        {

           foreach($request->file('filename') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/images/', $name);  
               $data = $name;  
           }
        }
        else{
            return 'no file';
           }


        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->filename=$data;
        $post->user_id = auth()->id();
        $post->save();
        session()->flash('message', 'You have succesfully created new announcement');
        
        $when = now()->addMinutes(10);
        Notification::route('mail', $user)->notify((new newPost($post))->delay($when));

        return redirect('/posts/index');
    }
}
