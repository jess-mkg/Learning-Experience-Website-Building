<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class TChecklistController extends Controller
{
        public function submitteacherform(Request $request) {
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
                $data1=array('user_id'=>$user_id, 'int1'=>$int1, 'int2'=>$int2, 'int3'=>$int3, 'int4'=>$int4, 'int5'=>$int5, 'int6'=>$int6, 'int7'=>$int7, 'int8'=>$int8, 'int9'=>$int9, 'int10'=>$int10, 'int11'=>$int11, 'cre12'=>$cre12, 'cre13'=>$cre13, 'cre14'=>$cre14, 'cre15'=>$cre15, 'cre16'=>$cre16, 'cre17'=>$cre17,  'cre18'=>$cre18, 'soc19'=>$soc19, 'soc20'=>$soc20, 'soc21'=>$soc21, 'soc22'=>$soc22, 'per23'=>$per23, 'per24'=>$per24, 'per25'=>$per25, 'per26'=>$per26, 'per27'=>$per27, 'muc28'=>$muc28, 'muc29'=>$muc29, 'muc30'=>$muc30, 'moc31'=>$moc31, 'moc32'=>$moc32, 'moc33'=>$moc33, 'sp34'=>$sp34, 'sp35'=>$sp35, 'sp36'=>$sp36, 'sp37'=>$sp37, 'sp38'=>$sp38, 'sp39'=>$sp39, 'sp40'=>$sp40);
                DB::table('checklist_teachers')->insert($data1);
                return redirect()->route('profile');
        }

    public function submitparentform(Request $request)
    {
        print_r($request->input());
        $this->validate($request, [
            "cog1"=>"required",
            "cog2"=>"required",
            "cog3"=>"required",
            "cog4"=>"required",
            "cog5"=>"required",
            "cog6"=>"required",
            "cog7"=>"required",
            "cog8"=>"required",
            "cog9"=>"required",
            "cog10"=>"required",
            "cog11"=>"required",
            "cog12"=>"required",
            "cog13"=>"required",
            "cog14"=>"required",
            "cog15"=>"required",
            "cog16"=>"required",
            "phy17"=>"required",
            "phy18"=>"required",
            "phy19"=>"required",
            "phy20"=>"required",
            "phy21"=>"required",
            "phy22"=>"required",
            "phy23"=>"required",
            "phy24"=>"required",
            "phy25"=>"required",
            "se26"=>"required",
            "se27"=>"required",
            "se28"=>"required",
            "se29"=>"required",
            "se30"=>"required",
            "se31"=>"required",
            "se32"=>"required",
            "se33"=>"required",
            "se34"=>"required",
            "spt35"=>"required",
            "spt36"=>"required",
            "spt37"=>"required",
            "spt38"=>"required",
            "spt39"=>"required",
            "spt40"=>"required",
            ]);

            //insert into database
            $user_id = Auth::user()->name;
            $cog1 = $request->input('cog1');
            $cog2 = $request->input('cog2');
            $cog3 = $request->input('cog3');
            $cog4 = $request->input('cog4');
            $cog5 = $request->input('cog5');
            $cog6 = $request->input('cog6');
            $cog7 = $request->input('cog7');
            $cog8 = $request->input('cog8');
            $cog9 = $request->input('cog9');
            $cog10 = $request->input('cog10');
            $cog11 = $request->input('cog11');
            $cog12 = $request->input('cog12');
            $cog13 = $request->input('cog13');
            $cog14 = $request->input('cog14');
            $cog15 = $request->input('cog15');
            $cog16 = $request->input('cog16');
            $phy17 = $request->input('phy17');
            $phy18 = $request->input('phy18');
            $phy19 = $request->input('phy19');
            $phy20 = $request->input('phy20');
            $phy21 = $request->input('phy21');
            $phy22 = $request->input('phy22');
            $phy23 = $request->input('phy23');
            $phy24 = $request->input('phy24');
            $phy25 = $request->input('phy25');
            $se26 = $request->input('se26');
            $se27 = $request->input('se27');
            $se28 = $request->input('se28');
            $se29 = $request->input('se29');
            $se30 = $request->input('se30');
            $se31 = $request->input('se31');
            $se32 = $request->input('se32');
            $se33 = $request->input('se33');
            $se34 = $request->input('se34');
            $spt35 = $request->input('spt35');
            $spt36 = $request->input('spt36');
            $spt37 = $request->input('spt37');
            $spt38 = $request->input('spt38');
            $spt39 = $request->input('spt39');
            $spt40 = $request->input('spt40');
            $data=array('user_id'=>$user_id, 'cog1'=>$cog1, 'cog2'=>$cog2, 'cog3'=>$cog3, 'cog4'=>$cog4, 'cog5'=>$cog5, 'cog6'=>$cog6, 'cog7'=>$cog7, 'cog8'=>$cog8, 'cog9'=>$cog9, 'cog10'=>$cog10, 'cog11'=>$cog11, 'cog12'=>$cog12, 'cog13'=>$cog13, 'cog14'=>$cog14, 'cog15'=>$cog15, 'cog16'=>$cog16, 'phy17'=>$phy17,  'phy18'=>$phy18, 'phy19'=>$phy19, 'phy20'=>$phy20, 'phy21'=>$phy21, 'phy22'=>$phy22, 'phy23'=>$phy23, 'phy24'=>$phy24, 'phy25'=>$phy25, 'se26'=>$se26, 'se27'=>$se27, 'se28'=>$se28, 'se29'=>$se29, 'se30'=>$se30, 'se31'=>$se31, 'se32'=>$se32, 'se33'=>$se33, 'se34'=>$se34, 'spt35'=>$spt35, 'spt36'=>$spt36, 'spt37'=>$spt37, 'spt38'=>$spt38, 'spt39'=>$spt39, 'spt40'=>$spt40);
            DB::table('checklist_parents')->insert($data);
            return redirect()->route('profile');
        }
}
