<?php

namespace App\Http\Controllers;
use App\Models\ComDetails;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class ComDetailController extends Controller
{




    public function addData(Request $request)
      {

        $model=new ComDetails();
        //$model->fname=$request->fname;
          $model->  company_name= $request->company_name;
          $model->  gst_number = $request->gst_number;
          $model->  company_address = $request->company_address;
          $model->  company_website = $request->company_website;
          $model->  company_buss_type = json_encode($request->company_buss_type);
          $model->  company_type = $request->company_type;
          $model->  company_email_id= ($request->company_email_id)?$request->company_email:"no company email.";
          $model->  sell_prod = json_encode($request->sell_prod);
          $model->  buy_prod = json_encode( $request->buy_prod);
          $model->  no_employee = json_encode($request->no_employee);
          $model->  company_director = json_encode($request->company_director);
          $model->  have_trademark = json_encode($request->have_trademark);
          $model->  patent_name = json_encode($request->patent_name);


       $model->save();
        // $output= $model->save();
        //  dd($output);

       return redirect('document');

 }
}


