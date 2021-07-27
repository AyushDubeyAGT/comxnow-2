<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function form_submit(Request $request)
    {
        $model=new Personal();
        $model->fname=$request->fname;
        $model->lname=$request->lname;
        $model->phone=$request->phone;
        $model->gstno=$request->gstno;
        $model->pancrd=$request->pancrd;
        $model->save();
        // $output= $model->save();
        // dd($output);
        return redirect('company');
    }
}
