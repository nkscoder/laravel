<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Libraries\Transformers\StudentTransformer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Response;
use App\Student;

class StudentsController extends Controller
{

    protected $studentTransformer;

    function __construct(StudentTransformer $studentTransformer)
    {
        $this->studentTransformer = $studentTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $student = $this->getStudents($sectionId);
//        return $this->respond(['data' => $this->studentTransformer->transformCollection($student->all())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->studentTransformer->requestAdapter();
        if ($this->studentTransformer->validate()) {
            return $this->respondValidationError('Validation Error');
        }

        Student::create($data);

        return $this->respondCreated('Student Successfully created');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $student = Student::all();
//        $student = DB::table('students')->get();
//   print_r($student); die;
//        return $this->respond(['data' => $this->studentTransformer->transform($student)]);
//         $student='nitesh singh';
//        return $student;
//        return view::make('pages.about')->with('posts', $student);
        return view('pages.home')->with('name',$student) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
