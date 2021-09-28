@extends('layouts.app')

@section('content')
<title>Begin Checklist</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('Checklist') }}</div>

                <div class="card-body">
                    <div>
                        <h4>Parent Assessments for Gifted and Talented Students</h4>
                            <p class="my-text">This parent assessment of young children’s (2 to 6 years old) will
                                provide an overarching picture of children’s physical, cognitive and
                                social-emotional gifts and strengths. It will give some key indicators
                                of whether your child displays characteristics of giftedness such as
                                memory, creativity, humour, vocabulary and imagination. This short
                                observational assessment will enable parents to further understand
                                their child’s areas of interest and empower them to help their child
                                to excel in the future.
                            </p>
                    </div>
                    <div>
                        <h4>Teachers Assessments for Gifted and Talented Students</h4>
                            <p class="my-text">This teacher assessment for primary school children (6 to 12 years old)
                                is a checklist that can be used to help teachers identify their student’s
                                potential areas of giftedness (Intellectual, Creative, Social, Perceptual,
                                Physical domains) and indicators that may assist in further specific identification
                                measures are needed (e.g., Weschler Intelligence Scale for Children – WISC-V).
                            </p>
                    </div>
                </div>
            </div>

            <!--parent role who has completed the checklist-->
            @if ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name))->first())
                <form style="text-align: center; margin: 15px; font-size: 130%">
                    <div> Checklist Already Completed</div>
                    <a href="/results"><input type="button" value="View Results"/></a>
                </form>
            <!--teacher role who has completed the checklist-->
            @elseif ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name))->first())
                <form style="text-align: center; margin: 15px; font-size: 130%">
                    <div> Checklist Already Completed</div>
                    <a href="/results"><input type="button" value="View Results"/></a>
                </form>
            <!--parent or teacher role who has NOT completed the checklist-->
            @else
                <!--parent role-->
                @if(Auth::user()->role == 'Parent')
                    <form style="text-align: center; margin: 15px; font-size: 130%">
                        <a href="/checklist-parents"><input type="button" value="Begin"/></a>
                    </form>
                <!--teacher role-->
                @elseif(Auth::user()->role == 'Teacher')
                <form style="text-align: center; margin: 15px; font-size: 130%">
                        <a href="/checklist-teachers"><input type="button" value="Begin"/></a>
                </form>
                <!--error no access to checklist - no role-->
                @else
                    <form style="text-align: center; margin: 15px; font-size: 130%">
                            <a href="/checklist"><input type="button" value="Begin"/></a>
                    </form>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
