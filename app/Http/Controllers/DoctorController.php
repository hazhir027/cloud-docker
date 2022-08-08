<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{

    public function filterDoctors(Request $request)
    {
        $filter_list = array();
        $flag = false;
        if ($request->has('name')){
            $flag = true;
            $doctors = Doctor::query()->where('name' , 'LIKE' , '%'.$request->name.'%' )->get();
            foreach ($doctors as $doctor){
                array_push($filter_list , array(
                    'name' => $doctor->name ,
                    'city' => $doctor->city ,
                    'Specialty' => $doctor->Specialty ,
                    'degree' => $doctor->degree ,
                ));
            }
        }

        if ($request->has('city')){
            $flag = true;
            $doctors = Doctor::query()->where('city' , 'LIKE' , '%'.$request->city.'%' )->get();
            foreach ($doctors as $doctor){
                array_push($filter_list , array(
                    'name' => $doctor->name ,
                    'city' => $doctor->city ,
                    'Specialty' => $doctor->Specialty ,
                    'degree' => $doctor->degree ,
                ));
            }
        }

        if ($request->has('specialty')){
            $flag = true;
            $doctors = Doctor::query()->where('specialty' , 'LIKE' , '%'.$request->specialty.'%' )->get();
            foreach ($doctors as $doctor){
                array_push($filter_list , array(
                    'name' => $doctor->name ,
                    'city' => $doctor->city ,
                    'Specialty' => $doctor->Specialty ,
                    'degree' => $doctor->degree ,
                ));
            }
        }

        if ($request->has('degree')){
            $flag = true;
            $doctors = Doctor::query()->where('degree' , 'LIKE' , '%'.$request->degree.'%' )->get();
            foreach ($doctors as $doctor){
                array_push($filter_list , array(
                    'name' => $doctor->name ,
                    'city' => $doctor->city ,
                    'Specialty' => $doctor->Specialty ,
                    'degree' => $doctor->degree ,
                ));
            }
        }

        if ($flag){
            return response()->json(['infos' => $filter_list]);
        }else{
            return response()->json(['message' => 'no param is defined']);
        }
    }

}
