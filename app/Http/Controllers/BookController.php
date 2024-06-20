<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Q1 => ye query sari book ka data return kary gi
        // $books = Book::get();
        // return $books;

        // Q2 => ye query sari book ka data return kary gi or inkokin students na 
        // lia how ha un student ka data b return kary ge
        $bookswith = Book::with(['student'=> function($query){
            $query->select('id','name');
        }])->get();
        // return $bookswith;
        $data['bookswith'] = $bookswith;
        // foreach($bookswith as $book){
        //     echo "<div style='border:1px solid black; margin:0 0 10px'>
        //             <h3>Book: $book->book</h3>
        //             <h5>Student:{$book->student->name}</h5>
        //         </div>";
        // }

        //Q3 => ye query os syudent ka recodr laye gi jis na math ki book issue karwai hoi ha
        // $bookWithWhereHas = Book::withWhereHas('student',function($query){
        //     $query->where('name','Zahid')
        //           ->orWhere('name','Ammad');
        // })->get();
        // return $bookWithWhereHas;
        return view('test',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::find(1);
        $student->book()->create([
            'book'=>'Education'
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
