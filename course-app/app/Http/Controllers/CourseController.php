<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        // list all data
    }

    public function create(){
        // routing to page/view  which will hold the create form

    }

    public function store(Request $request){
        // this would create the entery for the course

    }

    public function edit($id){
        // edit data
    }
    public function update(Request $request, $id){
        //  logic to update the record in the database and do something post that
    }
    public function destroy($id){
        // delete entry
    }

}
