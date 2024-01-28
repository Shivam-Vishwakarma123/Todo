<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function ajaxRequest1()
    {
        return 'ho gaya1';
    }
    /**
     * Display a listing of the resource.
     */
    public function ajaxRequest2()
    {
        return 'ho gaya2';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('todo_create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->input('name');
        $res = new Todo();
        $res->name = $request->input('name');
        $res->save();

        $request->session()->flash('msg', 'Data Submitted');
        return redirect('todo_show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
        return view('todo_show')->with('todoArr', Todo::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo, $id)
    {
        //
        return view('todo_edit')->with('todoArr', Todo::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
        $res = Todo::find($request->id);
        $res->name = $request->input('name');
        $res->save();

        $request->session()->flash('msg', 'Data Updated');
        return redirect('todo_show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo, $id)
    {
        //
        Todo::destroy(array('id', $id));
        return redirect('todo_show');
    }
}
