@extends('layouts.app')

@section('content')
<title>Teachers Assessment</title>
<link href="/css/style.css" rel="stylesheet">
<div class="container">
    <section>
        <div class="row justify-content-center">
            <div class="checklist-card-size">
                <div class="my-progress-bar" style="margin: 20px;">
                    <div class="p-container" style="margin: auto; background-color: rgb(192, 192, 192); width: 50%; border-radius: 20px;">
                        <div class="myp-b" style=" width: 45%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Teacher Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/teacherform3" multistep kw-cloak>
                            @csrf
                            <div class="form-section">
                                <div class="grid-container">
                                    <div data-toggle="tooltip" data-placement="top" title="•	Observing; perceptiveness
•	Interacting; social ease, tact
•	Influencing; persuasion, eloquence, leadership, charisma, parenting">
                                        <h4>Social</h4>
                                    </div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container chk-b-color" id="soc19" type="form-control">
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
                                <div class="grid-container chk-b-color" id="soc21" type="form-control">
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
                            <div class="form-navigation center-item">
                                <button type="submit" class="btn button-74 btn-sucess float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
