<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class ViewTeacherResults extends Controller
{
    public static function teacherResultsInt() {
        $int1 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int1');
        $int2 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int2');
        $int3 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int3');
        $int4 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int4');
        $int5 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int5');
        $int6 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int6');
        $int7 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int7');
        $int8 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int8');
        $int9 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int9');
        $int10 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int10');
        $int11 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('int11');

        //maths section
        $intellectual = ($int1 + $int2 + $int3 + $int4 + $int5 + $int6 + $int7 + $int8 + $int9 + $int10 + $int11)/0.55;

        return $intellectual;
    }

    public static function teacherResultsCre() {
        $cre12 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('cre12');
        $cre13 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('cre13');
        $cre14 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('cre14');
        $cre15 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('cre15');
        $cre16 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('cre16');
        $cre17 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('cre17');
        $cre18 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('cre18');

        //maths section
        $creative = ($cre12 + $cre13 + $cre14 + $cre15 + $cre16 + $cre17 + $cre18)/0.35;

        return $creative;
    }

    public static function teacherResultsSoc() {
        $soc19 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('soc19');
        $soc20 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('soc20');
        $soc21 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('soc21');
        $soc22 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('soc22');

        //maths section
        $social = ($soc19 + $soc20 + $soc21 + $soc22)/0.20;

        return $social;

    }

    public static function teacherResultsPer() {
        $per23 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('per23');
        $per24 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('per24');
        $per25 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('per25');
        $per26 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('per26');
        $per27 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('per27');

        //maths section
        $perceptual = ($per23 + $per24 + $per25 + $per26 + $per27)/0.25;

        return $perceptual;

    }

    public static function teacherResultsMuc() {
        $muc28 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('muc28');
        $muc29 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('muc29');
        $muc30 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('muc30');

        //maths section
        $muscular = ($muc28 + $muc29 + $muc30)/0.15;

        return $muscular;

    }

    public static function teacherResultsMoc() {
        $moc31 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('moc31');
        $moc32 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('moc32');
        $moc33 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('moc33');

        //maths section
        $motor = ($moc31 + $moc32 + $moc33)/0.15;

        return $motor;

    }

    public static function teacherResultsSp() {
        $sp34 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('sp34');
        $sp35 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('sp35');
        $sp36 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('sp36');
        $sp37 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('sp37');
        $sp38 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('sp38');
        $sp39 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('sp39');
        $sp40 = DB::table('checklist_teachers')->where('user_id', Auth::user()->name)->value('sp40');

        //maths section
        $spiritual = ($sp34 + $sp35 + $sp36 + $sp37 + $sp38 + $sp39 + $sp40)/0.35;

        return $spiritual;

    }
}
