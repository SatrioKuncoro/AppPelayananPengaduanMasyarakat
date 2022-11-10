<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintContoller extends Controller
{

    public function index()
    {
        $complaints = Complaint::with(['user', 'role'])->get();

        // dd($complaints);
        return view('complaints.index', ['complaints' => $complaints]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
