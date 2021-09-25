<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class PChecklistController extends Controller
{
    public function teachers()
    {
        return view("teachers");
    }

    public function submitteacherform(Request $request)
    {
        print_r($request->input());
        $this->validate($request, [
            "int1"=>"required",
            "int2"=>"required",
            "int3"=>"required",
            "int4"=>"required",
            "int5"=>"required",
            "int6"=>"required",
            "int7"=>"required",
            "int8"=>"required",
            "int9"=>"required",
            "int10"=>"required",
            "int11"=>"required",
            "cre12"=>"required",
            "cre13"=>"required",
            "cre14"=>"required",
            "cre15"=>"required",
            "cre16"=>"required",
            "cre17"=>"required",
            "cre18"=>"required",
            "soc19"=>"required",
            "soc20"=>"required",
            "soc21"=>"required",
            "soc22"=>"required",
            "per23"=>"required",
            "per24"=>"required",
            "per25"=>"required",
            "per26"=>"required",
            "per27"=>"required",
            "muc28"=>"required",
            "muc29"=>"required",
            "muc30"=>"required",
            "moc31"=>"required",
            "moc32"=>"required",
            "moc33"=>"required",
            "sp34"=>"required",
            "sp35"=>"required",
            "sp36"=>"required",
            "sp37"=>"required",
            "sp38"=>"required",
            "sp39"=>"required",
            "sp40"=>"required",
            ],[
                "int1.required"=>"All questions must be filled in",
                "int2.required"=>"All questions must be filled in",
                "int3.required"=>"All questions must be filled in",
                "int4.required"=>"All questions must be filled in",
                "int5.required"=>"All questions must be filled in",
                "int6.required"=>"All questions must be filled in",
                "int7.required"=>"All questions must be filled in",
                "int8.required"=>"All questions must be filled in",
                "int9.required"=>"All questions must be filled in",
                "int10.required"=>"All questions must be filled in",
                "int11.required"=>"All questions must be filled in",
                "cre12.required"=>"All questions must be filled in",
                "cre13.required"=>"All questions must be filled in",
                "cre14.required"=>"All questions must be filled in",
                "cre15.required"=>"All questions must be filled in",
                "cre16.required"=>"All questions must be filled in",
                "cre17.required"=>"All questions must be filled in",
                "cre18.required"=>"All questions must be filled in",
                "soc19.required"=>"All questions must be filled in",
                "soc20.required"=>"All questions must be filled in",
                "soc21.required"=>"All questions must be filled in",
                "soc22.required"=>"All questions must be filled in",
                "per23.required"=>"All questions must be filled in",
                "per24.required"=>"All questions must be filled in",
                "per25.required"=>"All questions must be filled in",
                "per26.required"=>"All questions must be filled in",
                "per27.required"=>"All questions must be filled in",
                "muc28.required"=>"All questions must be filled in",
                "muc29.required"=>"All questions must be filled in",
                "muc30.required"=>"All questions must be filled in",
                "moc31.required"=>"All questions must be filled in",
                "moc32.required"=>"All questions must be filled in",
                "moc33.required"=>"All questions must be filled in",
                "sp34.required"=>"All questions must be filled in",
                "sp35.required"=>"All questions must be filled in",
                "sp36.required"=>"All questions must be filled in",
                "sp37.required"=>"All questions must be filled in",
                "sp38.required"=>"All questions must be filled in",
                "sp39.required"=>"All questions must be filled in",
                "sp40.required"=>"All questions must be filled in",
            ]);

            //insert into database
            $user_id = Auth::user()->name;
            $int1 = $request->input('int1');
            $int2 = $request->input('int2');
            $int3 = $request->input('int3');
            $int4 = $request->input('int4');
            $int5 = $request->input('int5');
            $int6 = $request->input('int6');
            $int7 = $request->input('int7');
            $int8 = $request->input('int8');
            $int9 = $request->input('int9');
            $int10 = $request->input('int10');
            $int11 = $request->input('int11');
            $cre12 = $request->input('cre12');
            $cre13 = $request->input('cre13');
            $cre14 = $request->input('cre14');
            $cre15 = $request->input('cre15');
            $cre16 = $request->input('cre16');
            $cre17 = $request->input('cre17');
            $cre18 = $request->input('cre18');
            $soc19 = $request->input('soc19');
            $soc20 = $request->input('soc20');
            $soc21 = $request->input('soc21');
            $soc22 = $request->input('soc22');
            $per23 = $request->input('per23');
            $per24 = $request->input('per24');
            $per25 = $request->input('per25');
            $per26 = $request->input('per26');
            $per27 = $request->input('per27');
            $muc28 = $request->input('muc28');
            $muc29 = $request->input('muc29');
            $muc30 = $request->input('muc30');
            $moc31 = $request->input('moc31');
            $moc32 = $request->input('moc32');
            $moc33 = $request->input('moc33');
            $sp34 = $request->input('sp34');
            $sp35 = $request->input('sp35');
            $sp36 = $request->input('sp36');
            $sp37 = $request->input('sp37');
            $sp38 = $request->input('sp38');
            $sp39 = $request->input('sp39');
            $sp40 = $request->input('sp40');
            $data=array('user_id'=>$user_id, 'int1'=>$int1, 'int2'=>$int2, 'int3'=>$int3, 'int4'=>$int4, 'int5'=>$int5, 'int6'=>$int6, 'int7'=>$int7, 'int8'=>$int8, 'int9'=>$int9, 'int10'=>$int10, 'int11'=>$int11, 'cre12'=>$cre12, 'cre13'=>$cre13, 'cre14'=>$cre14, 'cre15'=>$cre15, 'cre16'=>$cre16, 'cre17'=>$cre17,  'cre18'=>$cre18, 'soc19'=>$soc19, 'soc20'=>$soc20, 'soc21'=>$soc21, 'soc22'=>$soc22, 'per23'=>$per23, 'per24'=>$per24, 'per25'=>$per25, 'per26'=>$per26, 'per27'=>$per27, 'muc28'=>$muc28, 'muc29'=>$muc29, 'muc30'=>$muc30, 'moc31'=>$moc31, 'moc32'=>$moc32, 'moc33'=>$moc33, 'sp34'=>$sp34, 'sp35'=>$sp35, 'sp36'=>$sp36, 'sp37'=>$sp37, 'sp38'=>$sp38, 'sp39'=>$sp39, 'sp40'=>$sp40);
            DB::table('checklist_teacher')->insert($data);
            echo "Record inserted successfully.<br/>";

            die("Form Submitted");
        }
}
