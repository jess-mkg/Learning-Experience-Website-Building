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
                        <div class="myp-b" style=" width: 27.5%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Teacher Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/teacherform2">
                            @csrf
                            <div class="form-section ">
                                <div class="grid-container">
                                    <div data-toggle="tooltip" data-placement="top" title="•	Ideas (research)
•	Images (graphics)
•	Words (literature)
•	Music (composing)
•	Movement (choreography)
•	Objects (design, sculpture)">
                                        <h4>Creative</h4>
                                    </div>
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
                                <div class="grid-container chk-b-color" id="cre13" type="form-control">
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
                                <div class="grid-container chk-b-color" id="cre15" type="form-control">
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
                                <div class="grid-container chk-b-color" id="cre17" type="form-control">
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
