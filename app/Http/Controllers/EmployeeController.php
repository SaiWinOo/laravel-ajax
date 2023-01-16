<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
     return view('welcome');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'card_number' => 'required',
        ]);
        Employee::create($valid);
        return response()->json([
            'success' => true,
        ]);
    }

    public function fetchData()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function destroy($id){
        $em = Employee::findOrFail($id);
        $em->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
