<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Comment;
use App\Scholar;
use App\Scholarship;
use App\Profile;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;
// use Auth;
use App\Notifications\NewRequestScholar;
use Notification;

class UserPagesController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $posts = POST::orderBy('updated_at','desc')->limit(5)->get();
        $profile = Profile::all();
        $scholarships = Scholarship::where('slot', '>', 0)->latest()->simplePaginate(5);
        return view('userPages.index',  compact('posts', 'scholarships', 'profile'));
    }
    public function show($id) {
        $comments = Comment::find($id);
        $post = Post::find($id);
        return view('userPages.showPost', compact('post','comments'));
    }
   

    public function edit($id)
    {
        $comments = Comment::find($id);

        return view('userPages.editComment',compact('comments'));
    }
    public function apply($id)
    {
        $scholarship = Scholarship::find($id);
        return view('userPages.apply', compact('scholarship'));
    }
    public function addProfile() {
        $scholarships = Scholarship::all();
        $courses = Course::all();
        return view('userPages.profile', compact('scholarships','courses'));
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
        // return back();
        return redirect('user/index/'.$comments->post_id);
    }

    public function destroy($id)
    {
        $comments = Comment::find($id)->Delete();
        return back()->with('message','Comment Deleted Successfully!');
    }
    public function help()
    {
        return view('userPages.tutorials');
    }

    public function insert()
    {
        $this->validate(request(), [
            'user_id' => 'unique:profiles|exists:profiles,user_id',
            'scholarship_id' =>'required',
            'sy' => 'max:3',
            'sy2' => 'max:3',
            'fname' =>'required|string|max:100',
            'lname' =>'required|string|max:100',
            'mname' =>'required|string|max:100',
            'course' =>'required',
            'yrLevel' =>'required',
            'sex' =>'required',
            'bDate' =>'required',
            'age' =>'required|max:3',
            'bPlace' =>'required|max:100',
            'status' =>'required|string',
            'religion' =>'required|max:100|string',
            'contactNum' =>'required|max:14',
            'citizen' =>'required|string|max:100|string',
            'homeAdd' =>'required|max:200|string',
           
            // 'acad1' =>'required',
            // 'acad2' =>'required',
            // 'acad3' =>'required',
            // 'school1' =>'required',
            // 'school2' =>'required',
            // 'school3' =>'required',
            // 'dy1' =>'required',
            // 'dy2' =>'required',
            // 'dy3' =>'required',
            'highestgrade' =>'required|max:5',
            'lowestgrade' =>'required|max:5',
            'average' =>'required|max:5',
        ]);   
        
        Profile::create([
            //Personal Data
            'user_id' => auth()->id(),
            'scholarship_id' => request('scholarship_id'),
            'sem'=>request('sem'),
            'sy'=>request('sy'),
            'sy2'=>request('sy2'),
            'fname'=>request('fname'),
            'lname'=>request('lname'),
            'mname'=>request('mname'),
            'course'=>request('course'),
            'yrLevel'=>request('yrLevel'),
            'sex'=>request('sex'),
            'bDate'=>request('bDate'),
            'age'=>request('age'),
            'bPlace'=>request('bPlace'),
            'status'=>request('status'),
            'religion'=>request('religion'),
            'contactNum'=>request('contactNum'),
            'citizen'=>request('citizen'),
            'homeAdd'=>request('homeAdd'),
            
            //Academic
            'acad1'=>request('acad1'), 
            'acad2'=>request('acad2'), 
            'acad3'=>request('acad3'), 
            'school1'=>request('school1'), 
            'school2'=>request('school2'), 
            'school3'=>request('school3'), 
            'dy1'=>request('dy1'), 
            'dy2'=>request('dy2'), 
            'dy3'=>request('dy3'), 
            'highestgrade'=>request('highestgrade'), 
            'lowestgrade'=>request('lowestgrade'), 
            'average'=>request('average'),
            
            //Family BG
            'f_liv'=>request('f_liv'),
            'm_liv'=>request('m_liv'),
            'f_dec'=>request('f_dec'),
            'm_dec'=>request('m_dec'),
            'f_name'=>request('f_name'),
            'm_name'=>request('m_name'),
            'f_age'=>request('f_age'),
            'm_age'=>request('m_age'),
            'f_address'=>request('f_address'),
            'm_address'=>request('m_address'),
            'f_birthdate'=>request('f_birthdate'),
            'm_birthdate'=>request('m_birthdate'),
            'f_occupation'=>request('f_occupation'),
            'm_occupation'=>request('m_occupation'),
            'f_office'=>request('f_office'),
            'm_office'=>request('m_office'),
            'f_educational'=>request('f_educational'),
            'm_educational'=>request('m_educational'),
            'f_contact'=>request('f_contact'),
            'm_contact'=>request('m_contact'),
            'f_monthly'=>request('f_monthly'),
            'm_monthly'=>request('m_monthly'),

            //brothers-sisters
            'bs_name1'=>request('bs_name1'),
            'bs_name2'=>request('bs_name2'),
            'bs_name3'=>request('bs_name3'),
            'bs_name4'=>request('bs_name4'),
            'bs_name5'=>request('bs_name5'),
            'bs_name6'=>request('bs_name6'),
            'bs_age1'=>request('bs_age1'),
            'bs_age2'=>request('bs_age2'),
            'bs_age3'=>request('bs_age3'),
            'bs_age4'=>request('bs_age4'),
            'bs_age5'=>request('bs_age5'),
            'bs_age6'=>request('bs_age6'),
             ]);

        $when = now()->addMinutes(5);
        Notification::route('mail', 'osmsservice1@gmail.com')->notify((new NewRequestScholar())->delay($when));
        session()->flash('message', 'You have succesfully applied to a scholarship, please wait for a confirmation email if your application will be approved');
   return redirect('/user/index');
    }
    
    public function updateProfile(Request $request, $id)
    {
        $this->validate($request,[
            'scholarship_id' =>'required',
            'sy' => 'max:3',
            'sy2' => 'max:3',
            'fname' =>'required|string|max:100',
            'lname' =>'required|string|max:100',
            'mname' =>'required|string|max:100',
            'course' =>'required',
            'yrLevel' =>'required',
            'sex' =>'required',
            'bDate' =>'required',
            'age' =>'required|max:3',
            'bPlace' =>'required|max:100',
            'status' =>'required|string',
            'religion' =>'required|max:100|string',
            'contactNum' =>'required|max:14',
            'citizen' =>'required|string|max:100|string',
            'homeAdd' =>'required|max:200|string',
            'highestgrade' =>'required|max:5',
            'lowestgrade' =>'required|max:5',
            'average' =>'required|max:5',
        ]);

        $scholar= Profile::find($id);
        $scholar->scholarship_id=$request->scholarship_id;
        $scholar->sy=$request->sy;
        $scholar->sy2=$request->sy2;
        $scholar->fname=$request->fname;
        $scholar->lname=$request->lname;
        $scholar->mname=$request->mname;
        $scholar->course=$request->course;
        $scholar->yrLevel=$request->yrLevel;
        $scholar->sex=$request->sex;
        $scholar->bDate=$request->bDate;
        $scholar->age=$request->age;
        $scholar->bPlace=$request->bPlace;
        $scholar->status=$request->status;
        $scholar->religion=$request->religion;
        $scholar->contactNum=$request->contactNum;
        $scholar->citizen=$request->citizen;
        $scholar->homeAdd=$request->homeAdd;
        
        $scholar->acad1=$request->acad1;
        $scholar->acad2=$request->acad2;
        $scholar->acad3=$request->acad3;
        $scholar->school1=$request->school1;
        $scholar->school2=$request->school2;
        $scholar->school3=$request->school3;
        $scholar->dy1=$request->dy1;
        $scholar->dy2=$request->dy2;
        $scholar->dy3=$request->dy3;
        $scholar->highestgrade=$request->highestgrade;
        $scholar->lowestgrade=$request->lowestgrade;
        $scholar->average=$request->average;

        $scholar->f_liv=$request->f_liv;
        $scholar->m_liv=$request->m_liv;
        $scholar->f_dec=$request->f_dec;
        $scholar->m_dec=$request->m_dec;
        $scholar->f_name=$request->f_name;
        $scholar->m_name=$request->m_name;
        $scholar->f_age=$request->f_age;
        $scholar->m_age=$request->m_age;
        $scholar->f_address=$request->f_address;
        $scholar->m_address=$request->m_address;
        $scholar->f_birthdate=$request->f_birthdate;
        $scholar->m_birthdate=$request->m_birthdate;
        $scholar->f_occupation=$request->f_occupation;
        $scholar->m_occupation=$request->m_occupation;
        $scholar->f_office=$request->f_office;
        $scholar->m_office=$request->m_office;
        $scholar->f_educational=$request->f_educational;
        $scholar->m_educational=$request->m_educational;
        $scholar->f_contact=$request->f_contact;
        $scholar->m_contact=$request->m_contact;
        $scholar->f_monthly=$request->f_monthly;
        $scholar->m_monthly=$request->m_monthly;

        $scholar->bs_name1=$request->bs_name1;
        $scholar->bs_name2=$request->bs_name2;
        $scholar->bs_name3=$request->bs_name3;
        $scholar->bs_name4=$request->bs_name4;
        $scholar->bs_name5=$request->bs_name5;
        $scholar->bs_name6=$request->bs_name6;
        $scholar->bs_age1=$request->bs_age1;
        $scholar->bs_age2=$request->bs_age2;
        $scholar->bs_age3=$request->bs_age3;
        $scholar->bs_age4=$request->bs_age4;
        $scholar->bs_age5=$request->bs_age5;
        $scholar->bs_age6=$request->bs_age6;
       


        $scholar->save();
        session()->flash('message', 'You have succesfully updated a profile');
        return redirect('/all/scholars');

    }

}
