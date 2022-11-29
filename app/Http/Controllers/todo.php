<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
use App\Models\todoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class todo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'task' => 'required',
        ]);
        $todo = new todoModel();
        $todo->task = $request->task;
        $todo->user_id = $request->userid;
        $todo->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(todo $todo, $id)
    {
        $check = todoModel::findOrfail($id);
        if ($check->completed) {
            $check->update(['completed' => false]);
            return redirect()->back();
        } else {
            $check->update(['completed' => true]);
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(todo $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        if ($request->ajax()) {
            todoModel::findOrfail($id)
                ->update([
                    // $request->name => $request->value
                    'task' => $request->todo,
                ]);

            return response()->json(['success' => true]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = todoModel::find($id);
        $data->delete();
        return redirect('/dashboard');
    }
}
