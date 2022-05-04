<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee as ModelsEmployee;

class EmployeeController extends Controller
{
    public function getEmployees(){
        return response()->json(ModelsEmployee::all());
    }

    public function getEmployeeById($id){
        $employee=ModelsEmployee::find($id);

        if(is_null($employee)){
            return response()->json(['message'=> 'Employee not found !'],404);
        }
        return response()->json(ModelsEmployee::find($id),200);
    }


    public function addEmployee(Request $request)
    {
        $employee=ModelsEmployee::create($request->all());

        return response()->json(['message'=>'Employee added successfully'],201);
    }

    public function updateEmployee(Request $request,$id)
    {
        $employee=ModelsEmployee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=>'Employee not found !'],404);
        }

        $employee->update($request->all());
        return response()->json(['message'=>'updated successfully']);
    }


    public function deleteEmployee(Request $request,$id)
    {
       $employee=ModelsEmployee::find($id);
       if(is_null($employee)){
        return response()->json(['message'=>'Employee not found !'],404);
    }
        $employee->delete();
        return response()->json(['message'=>'deleted successfulyy']);
    }
}
