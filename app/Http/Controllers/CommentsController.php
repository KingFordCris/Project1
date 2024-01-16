<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use App\Notifications\NewComment;
use Notification;
class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $user = User::all();
        $this->validate(request(),['body'=>'required|min:3']);

        // =======>LONG WAY<=========
        Comment::create ([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ]);

        $when = now()->addMinutes(10);
        Notification::route('mail', $user)->notify((new NewComment($user))->delay($when));
        Notification::route('mail', 'osmsservice1@gmail.com')->notify(new NewComment());

        session()->flash('message', 'Succesfully commented on a post');
        // =======>SHORT WAY<=========
        // $post->addComment(request('body'));
        return back();
    }
    public function edit($id)
    {
        $comments = Comment::find($id);
        return view('adminPages.post.editComment',compact('comments'));
    }
    public function userEdit($id)
    {
        $comments = Comment::find($id);
        return view('userPages.editComment',compact('comments'));
    }
    public function update(Request $request, $id)
    {
        // Validate the Field
        $this->validate($request,[
           'body' => 'required',

        ]);
        $comments = Comment::find($id);
        $comments->body=$request->body;
       
        $comments->save();
        session()->flash('message', 'You have succesfully updated your comment');
        return redirect('/posts/'.$comments->post_id);
    }

    public function destroy($id)
    {
        $comments = Comment::find($id)->Delete();
        return back()->with('message','Comment Deleted Successfully!');
    }
}
