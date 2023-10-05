<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Individual;
use Illuminate\Database\Eloquent\Collection;
//use App\Http\Controllers\Auth;


class IndividualController extends Controller
{
    //
    public function individual_list()
    {
//        $arrIndividuals = DB::table('individual')->select('id', 'name', 'organization', 'designation', 'accreditation_type')->get();
//        $arrIndividuals = Individual::all();
//        return view('Individual.list', ['Individuals' => $arrIndividuals]);

//        API USAGE
        return Individual::all();
    }

    public function individual_approve(Request $request)
    {
        $id = request('id');

//        if($approve) {
//            $arrIndividualUpdate = array('status' => 1, 'UPDATED_AT' => now());
//            Individual::where('individual.id', $id)->update(['status' => 0, 'UPDATED_AT' => now()]);

//        } else {

//            $arrIndividualUpdate = array('status' => 0, 'UPDATED_AT' => now());
//            Individual::where('individual.id', $id)->update(['status' => 1, 'UPDATED_AT' => now()]);

//        }

        $individual = Individual::where('id', $id)->all();


        return view('Individual.profile_review', ['Individual' => $individual, 'id' => $id]);



    }
}
