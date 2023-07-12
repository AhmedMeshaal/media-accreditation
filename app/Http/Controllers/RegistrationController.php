<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegistrationController extends Controller
{
    //
    public function store(Request $request)
    {
        $id = request('id');
        $first_name = request('first_name');
        $last_name = request('last_name');
        $country = request('country');
        $designation = request('designation');
        $organization = request('organization');
        $passport_number = request('passport_number');
        $national_id = request('national_id');

        $arrindividual = array(
            'id' => $id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'country' => $country,
            'designation' => $designation,
            'organization' => $organization,
            'passport_number' => $passport_number,
            'national_id' => $national_id
        );

        $photo_path = $request->file('photo_path')->store('photo_path');
        $arrindividual['photo_path'] = $photo_path;

        DB::table("individual")->insert($arrindividual);
        return response()->json(['message'=>'registration completed successfully!']);

//        print_r($arrindividual); exit();
    }

    public function display_request_image()
    {

        $id = request('id');
        $arrIndividualFile = DB::table("individual")->where("ID","=",$id)->get();

        $filename_path = storage_path()."/app/".$arrIndividualFile[0]->photo_path;
        if (exif_imagetype($filename_path)){
            header('Content-Description: File Transfer');
            header('Content-Type: content-type: image/jpeg');
            //header('Content-Disposition: attachment; filename="'.$arrClaimDoc['Name'].".".$ext.'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filename_path));
        }
        readfile($filename_path);
        return NULL;

    }

}
