<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    //
    public function store(Request $request)
    {

        $id = request('id');
        $email = request('email');
        $first_name = request('first_name');
        $last_name = request('last_name');
        $password = request('password');
        $country = request('country');
        $designation = request('designation');
        $organization = request('organization');
        $accreditation_type = request('accreditation_type');
        $passport_number = request('passport_number');
        $national_id = request('national_id');

        $arrIndividual = array(
            'id' => $id, 'email' => $email, 'first_name' => $first_name, 'last_name' => $last_name, 'password' => Hash::make($password), 'country' => $country, 'designation' => $designation,
            'organization' => $organization, 'accreditation_type' => $accreditation_type, 'passport_number' => $passport_number, 'national_id' => $national_id, 'date_created' => now() );

        $photo_path = $request->file('photo_path')->store('photo_path');
        $arrIndividual['photo_path'] = $photo_path;

        $arrAuthentication = array('id' => $id, 'name' => $last_name, 'email' => $email, 'password' => Hash::make($password), 'created_at' => now());

        DB::table("individual")->insert($arrIndividual);
        DB::table("users")->insert($arrAuthentication);

        return redirect('/auth');

//        print_r($arrIndividual); exit();
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
