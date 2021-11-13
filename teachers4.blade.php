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
                        <div class="myp-b" style=" width: 55%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Teacher Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/teacherform4">
                            @csrf
                            <div class="form-section">
                                <div class="grid-container">
                                    <div data-toggle="tooltip" data-placement="top" title="(Note: this aptitude can be particularly heightened for children with disabilities e.g., Autism)
•	Vision
•	Hearing
•	Smell
•	Taste
•	Touch
•	Proprioception/kinesthesia">
                                        <h4>Perceptual</h4>
                                    </div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container chk-b-color" id="per23" type="form-control">
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
                                <div class="grid-container chk-b-color" id="per25" type="form-control">
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
                                <div class="grid-container chk-b-color" id="per27" type="form-control">
                                    <div><label for="per27" class="grid-content-left">Heightened sense of touch.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="per27" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="per27"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="per27"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="per27"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="per27"></div>
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
