<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Scholarship;
use DB;

class SearchController extends Controller
{
    public function search()
    {  
            return view('adminPages.scholarship.search');  
    }
    public function result( Request $request)
    {  
        
            if ($request -> ajax())
            {
                $output = "";
                $profile = Profile::all();
                $scholars=DB::table('profiles')->Where('mname', 'LIKE', '%'.$request->search.'%')
                                                ->orWhere('fname', 'LIKE', '%'.$request->search.'%')
                                                ->orWhere('lname', 'LIKE', '%'.$request->search.'%')
                                                ->orWhere('scholarship_id', 'LIKE', '%'.$request->search.'%')
                                                ->get();
                // it counts the number of rows
                $countNum = count($scholars);
                if ($scholars->count()>= 1)
                {
                    foreach ($scholars as $key => $scholar) 
                    {
                        $output.=   '<tr>'.
                                    '<td>'.$scholar->fname.' '.$scholar->mname.' '.$scholar->lname.'</td>'.
                                    '<td>'.$scholar->scholarship_id.'</td>'.
                                    '<td>'.$scholar->id.'</td>'.
                                    '<td>'.$scholar->course.'</td>'.
                                    '<td>'.$scholar->yrLevel.'</td>'.
                                    '<td>'.'<a href="/user/profile/'.$scholar->id.'" class="btn btn-primary btn-sm btn-round">VIEW PROFILE</a>'.'</td>'.
                                    '</tr>';
                    }
                    return Response($output);

                }
                else {
                    return ('<h1>'.'No record found'.'</h1>');
                }
            } 
    }
}
