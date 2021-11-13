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
                    <div class="myp-b" style=" width: 40%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                </div>
            </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Parent Assessment</h2><br>

                        <form method="POST" class="checklist-form" action="/submit/parentform2">
                            @csrf
                            <div class="">
                                <div class="form-section">
                                    <div class="grid-container">
                                        <div data-toggle="tooltip" data-placement="top" title="•	Motor Control (Speed, agility, coordination, balance)
•	Muscular Control (Power, speed, strength, endurance)
•	Perceptual ability (Vision, hearing, smell, taste, touch)

                                    ">
                                            <h4>Physical</h4>
                                        </div>
                                        <div class="grid-labels"><label>Strongly Disagree</label></div>
                                        <div class="grid-labels"><label>Disagree</label></div>
                                        <div class="grid-labels"><label>Neutral</label></div>
                                        <div class="grid-labels"><label>Agree</label></div>
                                        <div class="grid-labels"><label>Strongly Agree</label></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="phy17" type="form-control">
                                        <div><label for="phy17" class="grid-content-left">Does {{Auth::user()->childname}} show speed during physical activities (without a lot of training)?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy17" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy17"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy17"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy17"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy17"></div>
                                    </div>
                                    <div class="grid-container" id="phy18" type="form-control">
                                        <div><label for="phy18" class="grid-content-left">Does {{Auth::user()->childname}} show strong muscle control?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy18" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy18"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy18"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy18"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy18"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="phy19" type="form-control">
                                        <div><label for="phy19" class="grid-content-left">Does {{Auth::user()->childname}} show sophisticated fine motor control with their fingers?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy19" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy19"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy19"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy19"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy19"></div>
                                    </div>
                                    <div class="grid-container" id="phy20" type="form-control">
                                        <div><label for="phy20" class="grid-content-left">Is {{Auth::user()->childname}} well-coordinated and well-balanced when they move around?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy20" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy20"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy20"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy20"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy20"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="phy21" type="form-control">
                                        <div><label for="phy21" class="grid-content-left">Does {{Auth::user()->childname}} attend closely to details others may miss?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy21" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy21"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy21"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy21"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy21"></div>
                                    </div>
                                    <div class="grid-container" id="phy22" type="form-control">
                                        <div><label for="phy22" class="grid-content-left">Does {{Auth::user()->childname}} hear clarity and variations in music and sounds?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy22" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy22"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy22"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy22"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy22"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="phy23" type="form-control">
                                        <div><label for="phy23" class="grid-content-left">Can {{Auth::user()->childname}} easily recognise and identify diverse types of smells?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy23" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy23"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy23"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy23"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy23"></div>
                                    </div>
                                    <div class="grid-container" id="phy24" type="form-control">
                                        <div><label for="phy24" class="grid-content-left">Does {{Auth::user()->childname}} readily recognise the details of textures and surfaces of things?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy24" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy24"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy24"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy24"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy24"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="phy25" type="form-control">
                                        <div><label for="phy25" class="grid-content-left">Does {{Auth::user()->childname}} have a ‘mature’ palate for new and different tastes?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="phy25" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="phy25"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="phy25"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="phy25"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="phy25"></div>
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
