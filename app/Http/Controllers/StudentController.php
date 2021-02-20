<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Address;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        return Student::create($request->all());
    }

    public function get()
    {
        return Student::with('address')->get();
    }

    public function page(Request $request)
    {
        return Student::with('address')->paginate($request->get('limit', 5));
    }

    public function delete(Request $request)
    {
        return Student::where('student_id', $request->get('student_id'))
            ->delete();
    }

    public function search(Request $request)
    {
        return Student::where('full_name', 'like', '%' . $request->get('keyword') . '%')
            ->get();
    }

    public function update(Request $request)
    {
        return Student::where('student_id', $request->get('student_id'))
            ->update($request->all());
    }

    public function createAddress(Request $request)
    {
        return Address::create($request->all());
    }
}
