@extends('layouts.app')

@section('content')
<title>Teachers Checklist</title>
<link href="/css/style.css" rel="stylesheet">

<!--@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<div class="container">
    <section>
    <div class="row justify-content-center">
        <div class="checklist-card-size">
        <div class="card" style="justify-content: center; align-items:center; width: 50%; margin: 10px; margin-left:auto; margin-right:auto; padding: 5px;">Progress Bar</div>
            <div class="card">
                <div class="card-header">{{ __('Teachers Checklist') }}</div>
                <div class="card-body">
                    <form method="POST" class="checklist-form" action="/submit/teacherform" multistep kw-cloak>
                    @csrf
                        <div class="kw-multistep-step">
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container kw-multistep-body">
                                <div data-toggle="tooltip" data-placement="top" title="•	General intelligence
•	Fluid, crystallised reasoning
•	Verbal
•	Spatial
•	Numerical
•	Memory: Declarative, procedural, short-term (working), long-term

                                    "><h4>Intellectual</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="int1" type="form-control">
                                    <div><label for="int1" class="grid-content-left">Has a sizeable vocabulary for age and peers.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int1" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int1"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int1"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int1"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int1"></div>
                                </div>
                                <div class="grid-container" id="int2" type="form-control">
                                    <div><label for="int2" class="grid-content-left">Reads and/or listens to texts at a higher level.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int2" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int2"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int2"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int2"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int2"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="int3" type="form-control">
                                    <div><label for="int3" class="grid-content-left">School grade success with limited training/study.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int3" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int3"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int3"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int3"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int3"></div>
                                </div>
                                <div class="grid-container" id="int4" type="form-control">
                                    <div><label for="int4" class="grid-content-left">Outside school high achievement (with limited training/study).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int4" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int4"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int4"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int4"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int4"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="int5" type="form-control">
                                    <div><label for="int5" class="grid-content-left">Asks high level, in-depth questions.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int5" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int5"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int5"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int5"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int5"></div>
                                </div>
                                <div class="grid-container" id="int6" type="form-control">
                                    <div><label for="int6" class="grid-content-left">Easily understands new concepts (or may take a while but once understood is able to teach/explain to others).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int6" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int6"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int6"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int6"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int6"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="int7" type="form-control">
                                    <div><label for="int7" class="grid-content-left">Readily able to recall factual information.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int7" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int7"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int7"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int7"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int7"></div>
                                </div>
                                <div class="grid-container" id="int8" type="form-control">
                                    <div><label for="int8" class="grid-content-left">Able to teach/explain to others.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int8" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int8"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int8"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int8"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int8"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="int9" type="form-control">
                                    <div><label for="int9" class="grid-content-left">Intense sense of humour (use with caution for students with diverse needs e.g., ASD).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int9" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int9"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int9"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int9"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int9"></div>
                                </div>
                                <div class="grid-container" id="int10" type="form-control">
                                    <div><label for="int10" class="grid-content-left">Deep knowledge and range of interests.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int10" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int10"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int10"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int10"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int10"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="int11" type="form-control">
                                    <div><label for="int11" class="grid-content-left">Perfectionism.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="int11" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="int11"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="int11"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="int11"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="int11"></div>
                                </div>
                            </div>
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                <div data-toggle="tooltip" data-placement="top" title="•	Ideas (research)
•	Images (graphics)
•	Words (literature)
•	Music (composing)
•	Movement (choreography)
•	Objects (design, sculpture)


                                    "><h4>Creative</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" id="cre12" type="form-control">
                                    <div><label for="cre12" class="grid-content-left">High degree of curiosity.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cre12" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cre12"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cre12"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cre12"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cre12"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cre13" type="form-control">
                                    <div><label for="cre13" class="grid-content-left">Makes/produces original work/products/ideas.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cre13" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cre13"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cre13"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cre13"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cre13"></div>
                                </div>
                                <div class="grid-container" id="cre14" type="form-control">
                                    <div><label for="cre14" class="grid-content-left">Deep knowledge in area/s of interest/s.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cre14" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cre14"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cre14"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cre14"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cre14"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cre15" type="form-control">
                                    <div><label for="cre15" class="grid-content-left">Wide range of interests.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cre15" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cre15"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cre15"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cre15"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cre15"></div>
                                </div>
                                <div class="grid-container" id="cre16" type="form-control">
                                    <div><label for="cre16" class="grid-content-left">Imaginative.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cre16" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cre16"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cre16"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cre16"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cre16"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cre17" type="form-control">
                                    <div><label for="cre17" class="grid-content-left">Composes (music).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cre17" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cre17"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cre17"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cre17"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cre17"></div>
                                </div>
                                <div class="grid-container" id="cre18" type="form-control">
                                    <div><label for="cre18" class="grid-content-left">Choreographs</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cre18" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cre18"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cre18"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cre18"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cre18"></div>
                                </div>
                            </div>
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                <div data-toggle="tooltip" data-placement="top" title="•	Observing; perceptiveness
•	Interacting; social ease, tact
•	Influencing; persuasion, eloquence, leadership, charisma, parenting
                                    "><h4>Social</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="soc19" type="form-control">
                                    <div><label for="soc19" class="grid-content-left">Strong sense of empathy/understanding (use with caution for students with diverse needs e.g., ASD).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="soc19" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="soc19"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="soc19"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="soc19"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="soc19"></div>
                                </div>
                                <div class="grid-container" id="soc20" type="form-control">
                                    <div><label for="soc20" class="grid-content-left">Appears non-conformist in some ways.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="soc20" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="soc20"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="soc20"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="soc20"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="soc20"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="soc21" type="form-control">
                                    <div><label for="soc21" class="grid-content-left">Takes on leadership role/s.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="soc21" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="soc21"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="soc21"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="soc21"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="soc21"></div>
                                </div>
                                <div class="grid-container" id="soc22" type="form-control">
                                    <div><label for="soc22" class="grid-content-left">Pursues/has friendships with older peers or adults.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="soc22" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="soc22"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="soc22"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="soc22"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="soc22"></div>
                                </div>
                            </div>
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                <div data-toggle="tooltip" data-placement="top" title="(Note: this aptitude can be particularly heightened for children with disabilities e.g., Autism)
•	Vision
•	Hearing
•	Smell
•	Taste
•	Touch
•	Proprioception/kinesthesia
                                    "><h4>Perceptual</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="per23" type="form-control">
                                    <div><label for="per23" class="grid-content-left">Keenly observant.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="per23" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="per23"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="per23"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="per23"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="per23"></div>
                                </div>
                                <div class="grid-container" id="per24" type="form-control">
                                    <div><label for="per24" class="grid-content-left">Highly sensitive auditory system.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="per24" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="per24"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="per24"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="per24"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="per24"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="per25" type="form-control">
                                    <div><label for="per25" class="grid-content-left">Highly sensitive sense of smell.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="per25" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="per25"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="per25"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="per25"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="per25"></div>
                                </div>
                                <div class="grid-container" id="per26" type="form-control">
                                    <div><label for="per26" class="grid-content-left">Visualizes position of body in space.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="per26" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="per26"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="per26"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="per26"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="per26"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="per27" type="form-control">
                                    <div><label for="per27" class="grid-content-left">Heightened sense of touch.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="per27" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="per27"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="per27"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="per27"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="per27"></div>
                                </div>
                            </div>
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                <div data-toggle="tooltip" data-placement="top" title="•	Power
•	Speed
•	Strength
•	Endurance
•	Suppleness

                                    "><h4>Muscular Control</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="muc28" type="form-control">
                                    <div><label for="muc28" class="grid-content-left">Frustrated if motor coordination lags behind intellectual development (e.g., pencil grip).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="muc28" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="muc28"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="muc28"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="muc28"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="muc28"></div>
                                </div>
                                <div class="grid-container" id="muc29" type="form-control">
                                    <div><label for="muc29" class="grid-content-left">Readily takes to skill and control required for handwriting/keyboarding.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="muc29" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="muc29"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="muc29"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="muc29"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="muc29"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="muc30" type="form-control">
                                    <div><label for="muc30" class="grid-content-left">Unusual strength/speed/endurance/suppleness.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="muc30" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="muc30"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="muc30"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="muc30"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="muc30"></div>
                                </div>
                            </div>
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                <div data-toggle="tooltip" data-placement="top" title="•	Speed (reflexes)
•	Agility
•	Coordination
•	Balance

                                    "><h4>Motor Control</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="moc31" type="form-control">
                                    <div><label for="moc31" class="grid-content-left">Speed during physical activities (without training).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="moc31" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="moc31"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="moc31"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="moc31"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="moc31"></div>
                                </div>
                                <div class="grid-container" id="moc32" type="form-control">
                                    <div><label for="moc32" class="grid-content-left">Strong motor control at an early age/stage of development.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="moc32" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="moc32"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="moc32"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="moc32"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="moc32"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="moc33" type="form-control">
                                    <div><label for="moc33" class="grid-content-left">Well-coordinated (doesn’t bump into objects/fall over).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="moc33" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="moc33"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="moc33"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="moc33"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="moc33"></div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="grid-container">
                                <div data-toggle="tooltip" data-placement="top" title="•	Self-awareness
•	Mindfulness
•	Follow intuition
•	Reach states of flow
•	Meditate, use prayer, silence
                                    "><h4>Spiritual</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="sp34" type="form-control">
                                    <div><label for="sp34" class="grid-content-left">Capacity to understand deep existential questions.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp34" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp34"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp34"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp34"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp34"></div>
                                </div>
                                <div class="grid-container" id="sp35" type="form-control">
                                    <div><label for="sp35" class="grid-content-left">Engages in deep existentialist questioning Flexibility, inner freedom, balance and inner peace in times of crisis.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp35" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp35"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp35"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp35"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp35"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="sp36" type="form-control">
                                    <div><label for="sp36" class="grid-content-left">Can analyse the meaning of personal experiences.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp36" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp36"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp36"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp36"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp36"></div>
                                </div>
                                <div class="grid-container" id="sp37" type="form-control">
                                    <div><label for="sp37" class="grid-content-left">High moral/personal values (especially prior to influences of development/training).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp37" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp37"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp37"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp37"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp37"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="sp38" type="form-control">
                                    <div><label for="sp38" class="grid-content-left">Affinity with animals.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp38" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp38"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp38"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp38"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp38"></div>
                                </div>
                                <div class="grid-container" id="sp39" type="form-control">
                                    <div><label for="sp39" class="grid-content-left">Strong connection to nature/land/Country.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp39" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp39"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp39"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp39"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp39"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="sp40" type="form-control">
                                    <div><label for="sp40" class="grid-content-left">Strong connections to culture.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp40" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp40"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp40"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp40"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp40"></div>
                                </div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info float-left">Previous</button>
                                <button type="button" class="next btn btn-info float-right">Next</button>
                                <button type="submit" class="btn btn-sucess float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--
    @section('script')
    <script type="text/javascript">
        $(function() {
        var $sections = $('.form-section');

        function navigateTo(teachers) {
            $sections
                .removeClass('current')
                .eq(teachers)
                    .addClass('current');
            $('.form-navigation .previous').toggle(teachers > 0);
            var atTheEnd = teachers >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=sumbit]').toggle(atTheEnd);
        }

        function curIndex() {
            return $sections.teachers($sections.filter('current'));
        }

        $('.form-navigation .previous').click(function() {
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function() {
            $('.checklist-form').parsley().whenValidate({
                group: 'block-' + curIndex()
            }).done(function() {
                navigateTo(curIndex() + 1);
            });
        });

        $sections.each(function(teachers, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + teachers);
        });
        navigateTo(0);
    });
    </script>
    @endsection -->

</div>

@endsection
