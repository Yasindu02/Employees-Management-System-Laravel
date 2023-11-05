<?php

namespace App\Http\Controllers;

use App\Models\employees;


class HomeController extends Controller
{
    // public function index()
    // {
    //     return view("home");
    // }

    // public function all()
    // {
    //     return view("index");
    // }

    public function indexx()
    {
        // Assuming you retrieve all employees from the database
        $employees = employees::all(); // Retrieve all employees from the database
        return view("index", ['employees' => $employees]);
    }
}
