<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class ViewParentResults extends Controller
{
    public static function parentsResultsCog() {
        $cog1 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog1');
        $cog2 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog2');
        $cog3 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog3');
        $cog4 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog4');
        $cog5 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog5');
        $cog6 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog6');
        $cog7 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog7');
        $cog8 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog8');
        $cog9 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog9');
        $cog10 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog10');
        $cog11 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog11');
        $cog12 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog12');
        $cog13 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog13');
        $cog14 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog14');
        $cog15 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog15');
        $cog16 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('cog16');

        $cognative = ($cog1 + $cog2 + $cog3 + $cog4 + $cog5 + $cog6 + $cog7 + $cog8 + $cog9 + $cog10 + $cog11 + $cog12 + $cog13 + $cog14 + $cog15 + $cog16)/.80;

        return $cognative;
    }

    public static function parentsResultsPhy() {
        $phy17 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy17');
        $phy18 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy18');
        $phy19 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy19');
        $phy20 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy20');
        $phy21 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy21');
        $phy22 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy22');
        $phy23 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy23');
        $phy24 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy24');
        $phy25 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('phy25');

        $physical = ($phy17 + $phy18 + $phy19 + $phy20 + $phy21 + $phy22 + $phy23 + $phy24 + $phy25)/0.45;

        return $physical;
    }

    public static function parentsResultsSE() {
        $se26 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se26');
        $se27 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se27');
        $se28 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se28');
        $se29 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se29');
        $se30 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se30');
        $se31 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se31');
        $se32 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se32');
        $se33 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se33');
        $se34 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('se34');

        $socialemotional = ($se26 + $se27 + $se28 + $se29 + $se30 + $se31 + $se32 + $se33 + $se34)/0.45;

        return $socialemotional;
    }

    public static function parentsResultsSpt() {
        $spt35 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('spt35');
        $spt36 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('spt36');
        $spt37 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('spt37');
        $spt38 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('spt38');
        $spt39 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('spt39');
        $spt40 = DB::table('checklist_parents')->where('user_id', Auth::user()->name)->value('spt40');

        $spiritual = ($spt35 + $spt36 + $spt37 + $spt38 + $spt39 + $spt40)/0.30;

        return $spiritual;
    }
}
