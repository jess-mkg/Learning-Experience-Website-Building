@extends('layouts.app')

@section('content')
<title>Results</title>
<div class="container">
<link type="text/css" rel="stylesheet" href="/css/style.css">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('Results') }}</div>

                <div class="card-body">
                    <!-- results for teachers checklist -->
                    @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name))->first())
                    <h2>Teacher Checklist Results</h2> <br>
                        <section class="mysection">
                            <div class="section-box">
                                <div class="graph" style="height: {{ App\Http\Controllers\ViewTeacherResults::teacherResultsInt() }}%; background: linear-gradient(0deg, rgb(191, 237, 26), rgba(217, 233, 159, 1));">
                                    <div class="result"> </div>
                                </div>
                                <div class="category">Intellectual</div>
                            </div>
                            <div class="section-box">
                                <div class=graph style="height: {{ App\Http\Controllers\ViewTeacherResults::teacherResultsCre() }}%; background: linear-gradient(0deg, rgb(209, 221, 212), rgb(61, 230, 131));">
                                       <div class="result"> </div>
                                </div>
                                <div class="category">Creative</div>
                            </div>
                            <div class="section-box">
                                <div class="graph" style="height: {{ App\Http\Controllers\ViewTeacherResults::teacherResultsSoc() }}%; background: linear-gradient(0deg, rgb(221, 209, 210), rgb(230, 61, 98));">
                                    <div class="result"> </div>
                                </div>
                                <div class="category">Social</div>
                            </div>
                            <div class="section-box">
                                <div class="graph" style="height: {{ App\Http\Controllers\ViewTeacherResults::teacherResultsPer() }}%; background: linear-gradient(0deg, rgb(168, 200, 226), rgb(61, 92, 230));">
                                    <div class="result"> </div>
                                </div>
                                <div class="category">Perceptual</div>
                            </div>
                            <div class="section-box">
                                <div class="graph" style="height: {{ App\Http\Controllers\ViewTeacherResults::teacherResultsMuc() }}%; background: linear-gradient(0deg, rgb(226, 186, 168), rgb(230, 123, 61));">
                                    <div class="result"> </div>
                                </div>
                                <div class="category">Muscular</div>
                            </div>
                            <div class="section-box">
                                <div class="graph" style="height: {{ App\Http\Controllers\ViewTeacherResults::teacherResultsMoc() }}%; background: linear-gradient(0deg, rgb(168, 226, 216), rgb(61, 224, 230));">
                                    <div class="result"> </div>
                                </div>
                                <div class="category">Motor</div>
                            </div>
                            <div class="section-box">
                                <div class="graph" style="height: {{ App\Http\Controllers\ViewTeacherResults::teacherResultsSp() }}%; background: linear-gradient(0deg, rgb(212, 168, 226), rgb(154, 61, 230));">
                                    <div class="result"> </div>
                                </div>
                                <div class="category">Spiritual</div>
                            </div>
                        </section>
                        <br>
                    <!-- results for parents checklist -->
                    @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name))->first())
                    <h2>Parent Checklist Results</h2>
                    <br>
                    <div class="page-content">
                        <div class="page-item" style="margin-right: 150px">
                            <div class=tree-container>
                                <figure class="result-tree">
                                    <div data-toggle="tooltip" data-placement="top" title="Cognitive" class="cat-branch-r" style="width: {{App\Http\Controllers\ViewParentResults::parentsResultsCog()}}px">
                                        <span class="leaf"></span>
                                        <span class="leaf"></span>
                                        <span class="leaf"></span>
                                    </div>
                                    <div data-toggle="tooltip" data-placement="top" title="Physical" class="cat-branch-r" style="width: {{App\Http\Controllers\ViewParentResults::parentsResultsPhy()}}px">
                                        <span class="leaf"></span>
                                        <span class="leaf"></span>
                                    </div>
                                    <div data-toggle="tooltip" data-placement="top" title="Social Emotional" class="cat-branch-r" style="width: {{App\Http\Controllers\ViewParentResults::parentsResultsSE()}}px">
                                        <span class="leaf"></span>
                                    </div>
                                    <div data-toggle="tooltip" data-placement="top" title="Spiritual" class="cat-branch-r" style="width: {{App\Http\Controllers\ViewParentResults::parentsResultsSpt()}}px">
                                        <span class="leaf"></span>
                                        <span class="leaf"></span>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="page-item1">
                            <table>
                                <tr>
                                    <th class="table-content">Cognitive</th>
                                    <th class="table-content"> </th>
                                </tr>
                                <tr>
                                    <th class="table-content">Physical</th>
                                    <th class="table-content"> </th>
                                </tr>
                                <tr>
                                    <th class="table-content">Social Emotional</th>
                                    <th class="table-content"> </th>
                                </tr>
                                <tr>
                                    <th class="table-content">Spiritual</th>
                                    <th class="table-content"> </th>
                                </tr>
                            </table>
                        </div>

                    </div>





                    <!-- no results to display -->
                    @else
                        <br>
                        {{ __('Checklist not complete yet') }}
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
