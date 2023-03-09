<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'name' => 'ruzs',
            'age' => 28
        ];
        $data2=[
            ["name"=>"apple",
            "price"=>"50"
            ],
            ["name"=>"banana",
            "price"=>"20"
            ],
            ["name"=>"lemon",
            "price"=>"15"
            ],
            ["name"=>"orange",
            "price"=>"25"
            ],
        ];
        // return view('student.index',['name' => 'ruzs']);
        return view('student.index',['data'=> $data],['data2'=>$data2]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=[
            'name' => 'ruzs',
            'age' => 28
        ];
        $data2=[
            ["name"=>"apple",
            "price"=>"50"
            ],
            ["name"=>"banana",
            "price"=>"20"
            ],
            ["name"=>"lemon",
            "price"=>"15"
            ],
            ["name"=>"orange",
            "price"=>"25"
            ],
        ];
        return view('student.create',['data'=> $data],['data2'=>$data2]);
    }

    public function excel()
    {
        return view('student.excel');
    }
    public function hello()
    {
        return view('student.hello');
    }
    public function store()
    {
        return view('student.store');
    }
    public function childPage()
    {
        return view('child');
    }
    public function AppPage()
    {
        return view('layouts.app');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function stor()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd('OK');
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
