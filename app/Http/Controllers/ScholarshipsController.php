<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Scholarship;
use App\Scholar;
use App\Profile;

class ScholarshipsController extends Controller
{
    public function add()
    {
        return view('adminPages.scholarship.add');
    } 
    public function show()
    {
        $profile = Profile::all();
        $scholarships = Scholarship::latest()->get();
        
        return view('adminPages.scholarship.show', compact('scholarships', 'profile', 'scolars'));
    } 
    public function generate($id)
    {
        $profiles = Profile::all();
        $scholarship = Scholarship::find($id);
        return view('adminPages.scholarship.generate', compact('profiles','scholarship'))->with('no', 1);
    }
    public function view($id)
    {
        $profiles = Profile::all();
        $scholarship = Scholarship::find($id);
        return view('adminPages.scholarship.view', compact('profiles','scholarship'))->with('no', 1);
    }
    public function apply($id)
    {
        $scholarship = Scholarship::find($id);
        return view('adminPages.scholarship.apply', compact('scholarship'));
    }
    public function store()
    {
         // Validate the Field
         $this->validate(request(),[
            'name' => 'required|min:3|unique:scholarships',
            'sponsor' => 'required|min:2',
            'year' => 'required|max:5',
            'slot' => 'required|max:5',
            'scholarship_type' => 'required',
            'hei_type' => 'required',
            'renewal' => 'required',
            'requirements' => 'required', 
            ]);

            Scholarship::create([
                'name'=>request('name'),
                'sponsor'=>request('sponsor'),
                'year'=>request('year'),
                'slot'=>request('slot'),
                'scholarship_type'=>request('scholarship_type'),
                'hei_type'=>request('hei_type'),
                'renewal'=>request('renewal'),
                'requirements'=>request('requirements'),
                'benefits'=>request('benefits'),
                'notes'=>request('notes'),
                ]);
                return redirect('/scholarship/show') ->with('message','Successfully created new scholarship');
            
    }
    public function manage()

    {
        $profile = Profile::all();
        $scholarships = Scholarship::latest()->get()->all();
        return view('adminPages.scholarship.manage', compact('scholarships','profile'));
    }
    public function destroy($id)
    {
        $scholarships = Scholarship::find($id)->delete();
        return back()->with('message','Successfully deleted scholarship!');
    }
    public function edit($id)
    {
        $scholarships = Scholarship::find($id);
        return view('adminPages.scholarship.edit',compact('scholarships'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate the Field
        $this->validate($request,[
            'name' => 'required|min:3',
            'sponsor' => 'required',
            'slot' => 'required',
            'year' => 'required',
            'scholarship_type' => 'required',
            'hei_type' => 'required',
            'renewal' => 'required',
            'requirements' => 'required',
            'benefits' => 'required',

        ]);
        $scholarships = Scholarship::find($id);
        $scholarships->name=$request->name;
        $scholarships->sponsor=$request->sponsor;
        $scholarships->slot=$request->slot;
        $scholarships->year=$request->year;
        $scholarships->scholarship_type=$request->scholarship_type;
        $scholarships->hei_type=$request->hei_type;
        $scholarships->renewal=$request->renewal;
        $scholarships->requirements=$request->requirements;
        $scholarships->benefits=$request->benefits;
        $scholarships->notes=$request->notes;
       
        $scholarships->save();
        session()->flash('message', 'Succesfully updated '. $scholarships->name .' scholarship');
        return redirect('/scholarship/show');
    }
}
