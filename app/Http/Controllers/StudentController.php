<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Contact;
use App\Models\Book;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Query No1
        $student = Student::with('contact')->get();
        return $student;

        // Query No2
        // Query No 2 mein jo where function ha wo only student table mein search kary ga
        // agar ham contact k table mn search karein gein to error aye ga
        // $student1 = Student::with('contact')->where('age',28)->get();
        // return $student1;

        // Query No3
        // is query mn ham contact table sa search kar k  recod la rahy hain
        // $student3 = Student::withWhereHas('contact',function($query){
        //     $query->where('city','Multan');
        // })->get();
        // return $student3;

        //Query No 4
        // is query mn ham 2nu table sa record fetch kar k a rahy hain
        // $student4 = Student::where('gender','F')
        //     ->withWhereHas('contact',function($query){
        //         $query->where('city','Multan');
        // })->get();
        // return $student4;

        //Query No 5
        // is query mn ye search tu 2nu table mn kary ga lekin show main table karecord karyga
        // $student5 = Student::where('gender','F')
        //     ->whereHas('contact',function($query){
        //         $query->where('city','Multan');
        // })->get();
        // return $student5;

        //Query No1 book
        // $bookStudent1 = Student::with('book')->get();
        // return $bookStudent1;

        // mujy wo record chahiye ji na koi book nahi li
        // $doesntHaveBookStudent = Student::doesntHave('book')->get();
        // return $doesntHaveBookStudent;

        //mujy un students ka record dekhna ha jinho na koi aik book b li ho
        // $bookStudentHas = Student::has('book')->get();
        // return $bookStudentHas;

        //mujy un students ka record dekhna ha jinho na koi aik book b li ho or wo konci book li ha
        // $bookStudentHasWith = Student::has('book')->with('book')->get();
        // return $bookStudentHasWith;

        //mujy wo student chahiye jino na 3 ya 3 sazada books issue karwai hain
        // $bookStudentHasWith = Student::has('book','>=',3)->with('book')->get();
        // return $bookStudentHasWith;

        //ab mujy books ka count b chahiye k ketni book issue hoi hain
        // $bookStudentWithCount = Student::withCount('book')->get();
        // return $bookStudentWithCount;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::create([
            'name'=>'junaid',
            'age'=>32,
            'gender'=>'M'
        ]);

        $student->contact()->create([
            'email'=>'JUNAID@GMAIL.COM',
            "phone"=> "87758365836586",
            "addres"=> "Pakistan",
            "city"=> "Lahore"
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
