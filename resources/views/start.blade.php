@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('Checklist Start Page') }}</div>

                <div class="card-body">
                    <div>
                        <h4>Parent Assessments for Gifted and Talented Students</h4>
                            <p>This parent assessment of young children’s (2 to 6 years old) will
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
                            <p>This teacher assessment for primary school children (6 to 12 years old)
                                is a checklist that can be used to help teachers identify their student’s
                                potential areas of giftedness (Intellectual, Creative, Social, Perceptual,
                                Physical domains) and indicators that may assist in further specific identification
                                measures are needed (e.g., Weschler Intelligence Scale for Children – WISC-V).
                            </p>
                    </div>
                </div>

            </div>
            <form style="text-align: center; margin: 15px; font-size: 130%">
                <a href="/checklist"><input type="button" value="Start Your Checklist"/></a>
            </form>
        </div>
    </div>
</div>
@endsection
