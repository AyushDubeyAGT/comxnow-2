<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\DocDetails;
use Illuminate\Http\Request;

class DocDetailController extends Controller
{
    private function storeFile($file) {

        $name = $file->getClientOriginalName();
        //   dd($name);
        $name= pathinfo($name, PATHINFO_FILENAME);

        $name = str_replace(' ', '_', $name);
        //unique name to image
        $newImageName = time().'-'.$name.'.'.$file->extension();

        //  $file = $request->file('image');
        //  dd($request);
        // $file = $this->base64_to_jpeg($request->image_base64, $request->file('image'));

        $filePath = 'matrixpanel/' . $newImageName;

        # store image
        Storage::disk('s3')->put($filePath, file_get_contents($file));

        $bucket_name = env('AWS_BUCKET');
        $region = env('AWS_DEFAULT_REGION');
        # image path
        $url = 'https://'.$bucket_name.'.s3.'.$region.'.amazonaws.com/'.$filePath;

        // $request->image = $url;

        return $url;
}




    public function save_Auction_Register(Request $request) {

        $this->validate($request, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'address' => ['required'],
            // 'city' => ['required'],
            // 'state' => ['required'],
            // 'pin_code' => ['required'],
            // 'mobile_number' => ['required','string','min:8','max:11'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gst_number' => ['required', 'unique:auction_registers'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $allFiles = $request->allFiles();

         dd($allFiles);
        $certificates = [];
        if (isset($allFiles['certificate'])) {
            foreach($allFiles['certificate'] as $key=>$file) {
                $certificates[$key] = $this->storeFile($file);
            }
        }


        if (isset($allFiles['iso_certificate'])) {

           $iso_certificate = $this->storeFile($allFiles['iso_certificate']);
        //    dd($iso_certificate);

        }

        $itr = [];
        if (isset($allFiles['last_three_yrs_itr'])) {
            foreach($allFiles['last_three_yrs_itr'] as $key=>$file) {
                $itr[$key] = $this->storeFile($file);
            }
        }




        $model =new DocDetails();
        $model-> iso = $request->iso;
        $model-> iso_registration = $request->iso_registration;
        $model-> quality_certificate = $request->quality_certificate;
        $model-> iso_certificate = json_encode($request->iso_certificate);
        $model->certificate =json_encode($request->certificate);
        $model-> last_three_yrs_turnover = json_encode($request->last_three_yrs_turnover);
        $model->last_three_yrs_itr = json_encode($request->last_three_yrs_itr);


        $model->save();
        //  $output= $model->save();
        //  dd($output);

        //  return redirect('welcome');

        // if($request->hasFile('iso_certificate'))
        // {
        //     $file = $request->file('iso_certificate');
        //     $extenstion =$file->getClientOriginalExtension();
        //     $filename = time().'.'.$extenstion;
        //     $file->move('uploads/document/',$filename);
        //     $model->iso_certificate = $filename;
        // }

        // if($request->hasFile('certificate'))
        // {
        //     $file = $request->file('certificate');
        //     $extenstion =$file->getClientOriginalExtension();
        //     $filename = time().'.'.$extenstion;
        //     $file->move('uploads/document/',$filename);
        //     $model->certificate = $filename;
        // }




        // $model->save();



}

}
