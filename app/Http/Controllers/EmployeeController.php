<?php

namespace App\Http\Controllers;

use App\Models\employees; // Model name should be singular and capitalized
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function add()
    {
        return view("addemployee");
    }

    public function addPost(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'mobilenumber' => 'required',
        //     'date' => 'required',
        //     'position' => 'required',
        //     'department' => 'required',
        // ]);

        $employee = new employees(); // Correct model name
       
        
        $employee->name = $request->name;
        $employee->mobilenumber = $request->mobilenumber; // Use 'mobilenumber' as defined in the migration
        $employee->date = $request->date;
        $employee->position = $request->position;
        $employee->department = $request->department;

        $employee->save();

        return back()->with("success", "Added Employee Successfully");
    }



//     public function edit()
//     {
//       return view("editemployee");
//     }

//     public function editpost(Request $request)
//     {
//         $employee = employees::find($request->eid);

//         // Update the employee details 
//         if ($employee) 
//         {
//             $employee->name = $request->name;
//             $employee->mobilenumber = $request->mobilenumber;
//             $employee->date = $request->date;
//             $employee->position = $request->position;
//             $employee->department = $request->department;

//             $employee->save();

//             return back()->with("success", "Updated Employee Successfully");
//         } 
//         else {
//             return back()->with("error", "Employee Not Found");
//         }
//     }


//     public function delete(Request $request)
//     {
//         $employeeId = $request->input('eid');

//         $employee = employees::find($employeeId);

//         if ($employee) {
//             $employee->delete();
//             return back()->with('success', 'Employee deleted successfully');
//         }
//          else {
//             return back()->with('error', 'Employee not found');
//         }
//     }
// }


public function edit($id)
{
    $employee = employees::find($id);
    return view('editemployee', ['employee' => $employee]);
}

public function editPost(Request $request, $id)
{
    $employee = employees::find($id);

    if ($employee) {
        $employee->name = $request->input('name');
        // Update other fields accordingly
        $employee->save();

        return back()->with("success", "Updated Employee Successfully");
    } else {
        return back()->with("error", "Employee Not Found");
    }
}

}




