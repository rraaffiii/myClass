<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseListController extends Controller
{
    public function index(Request $req)
    {
        $userType = $req->session()->get('type');
    	$courses = DB::table('courses')->get();
    	
        if ($userType == "student") {
            $studentId = $req->session()->get('id');
            $enrolled = DB::table('courses')->whereIn('id', function($query) use($studentId)
                                            {
                                                $query->select('courseId')
                                                ->from('choose_course')
                                                ->where('studentId', $studentId);
                                            })  ->get();

            return view('course-list', ['courses'=>$courses, 'userType'=>$userType, 'enrolled'=>$enrolled]);
        }
        

    	return view('course-list', ['courses'=>$courses, 'userType'=>$userType]);
    }

    public function open($id)
    {
    	$open = DB::table('courses') -> where('id', $id) 
    								 -> update(['status' => 1]);

		return redirect()->route('courseList.index');
    }

    public function close($id)
    {
    	$close = DB::table('courses') -> where('id', $id) 
    								  -> update(['status' => 0]);

		return redirect()->route('courseList.index');
    }

    public function delete($id)
    {
    	$delete = DB::table('courses') -> where('id', $id) 
    								   -> delete();

		return redirect()->route('courseList.index');
    }
}
