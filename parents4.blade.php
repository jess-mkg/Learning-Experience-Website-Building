@extends('layouts.app')

@section('content')
@livewireStyles
@livewireScripts
<title>Parents Assessment</title>
<div class="container">
    <section>
        <div class="row justify-content-center">
            <div class="checklist-card-size">
            <div class="my-progress-bar" style="margin: 20px;">
                <div class="p-container" style="margin: auto; background-color: rgb(192, 192, 192); width: 50%; border-radius: 20px;">
                    <div class="myp-b" style=" width: 85%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                </div>
            </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Parent Assessment</h2><br>

                        <form method="POST" class="checklist-form" action="/submit/parentform4">
                            @csrf
                            <div class="">
                                <div class="form-section">
                                    <div class="grid-container">
                                        <div data-toggle="tooltip" data-placement="top" title="•	Deep existential questioning
•	Connections to nature
•	Affinity with animals
•	Self-awareness
•	Intuitive
•	Morals and values
                                    ">
                                            <h4>Spiritual</h4>
                                        </div>
                                        <div class="grid-labels"><label>Strongly Disagree</label></div>
                                        <div class="grid-labels"><label>Disagree</label></div>
                                        <div class="grid-labels"><label>Neutral</label></div>
                                        <div class="grid-labels"><label>Agree</label></div>
                                        <div class="grid-labels"><label>Strongly Agree</label></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="spt35" type="form-control">
                                        <div><label for="spt35" class="grid-content-left">Does {{Auth::user()->childname}} ask deep existential questions about life?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="spt35" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="spt35"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="spt35"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="spt35"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="spt35"></div>
                                    </div>
                                    <div class="grid-container" id="spt36" type="form-control">
                                        <div><label for="spt36" class="grid-content-left">Does {{Auth::user()->childname}} ask questions about human and spiritual existence?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="spt36" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="spt36"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="spt36"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="spt36"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="spt36"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="spt37" type="form-control">
                                        <div><label for="spt37" class="grid-content-left">Does {{Auth::user()->childname}} show a strong connection to nature?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="spt37" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="spt37"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="spt37"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="spt37"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="spt37"></div>
                                    </div>
                                    <div class="grid-container" id="spt38" type="form-control">
                                        <div><label for="spt38" class="grid-content-left">Does {{Auth::user()->childname}} show a strong affinity with animals?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="spt38" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="spt38"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="spt38"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="spt38"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="spt38"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="spt39" type="form-control">
                                        <div><label for="spt39" class="grid-content-left">Does {{Auth::user()->childname}} question their role and purpose in the world?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="spt39" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="spt39"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="spt39"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="spt39"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="spt39"></div>
                                    </div>
                                    <div class="grid-container" id="spt40" type="form-control">
                                        <div><label for="spt40" class="grid-content-left">Does {{Auth::user()->childname}} use their intuition to solve problems and understand situations?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="spt40" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="spt40"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="spt40"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="spt40"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="spt40"></div>
                                    </div>
                                </div>

                                <div class="form-navigation center-item">
                                    <button type="submit" class="btn button-74 btn-sucess float-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
