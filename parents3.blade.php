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
                    <div class="myp-b" style=" width: 62.5%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                </div>
            </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Parent Assessment</h2><br>

                        <form method="POST" class="checklist-form" action="/submit/parentform3">
                            @csrf
                            <div class="">
                                <div class="form-section">
                                    <div class="grid-container">
                                        <div data-toggle="tooltip" data-placement="top" title="•	Empathy
•	Leadership
•	Communication with others
•	Friendships
•	Collaboration
•	Relating to others
•	Adaptability
                                    ">
                                            <h4>Social-Emotional</h4>
                                        </div>
                                        <div class="grid-labels"><label>Strongly Disagree</label></div>
                                        <div class="grid-labels"><label>Disagree</label></div>
                                        <div class="grid-labels"><label>Neutral</label></div>
                                        <div class="grid-labels"><label>Agree</label></div>
                                        <div class="grid-labels"><label>Strongly Agree</label></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="se26" type="form-control">
                                        <div><label for="se26" class="grid-content-left">Does {{Auth::user()->childname}} have a strong sense of empathy for others?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se26" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se26"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se26"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se26"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se26"></div>
                                    </div>
                                    <div class="grid-container" id="se27" type="form-control">
                                        <div><label for="se27" class="grid-content-left">Does {{Auth::user()->childname}} deeply understand other people’s points of view?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se27" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se27"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se27"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se27"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se27"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="se28" type="form-control">
                                        <div><label for="se28" class="grid-content-left">Is {{Auth::user()->childname}} community, globally, and socially aware?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se28" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se28"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se28"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se28"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se28"></div>
                                    </div>
                                    <div class="grid-container" id="se29" type="form-control">
                                        <div><label for="se29" class="grid-content-left">Does {{Auth::user()->childname}} prefer friendships with adults and/or older peers?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se29" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se29"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se29"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se29"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se29"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="se30" type="form-control">
                                        <div><label for="se30" class="grid-content-left">Does {{Auth::user()->childname}} direct others what to do?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se30" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se30"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se30"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se30"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se30"></div>
                                    </div>
                                    <div class="grid-container" id="se31" type="form-control">
                                        <div><label for="se31" class="grid-content-left">Does {{Auth::user()->childname}} display strong morals and values?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se31" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se31"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se31"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se31"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se31"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="se32" type="form-control">
                                        <div><label for="se32" class="grid-content-left">Can {{Auth::user()->childname}} have a strong sense of social justice?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se32" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se32"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se32"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se32"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se32"></div>
                                    </div>
                                    <div class="grid-container" id="se33" type="form-control">
                                        <div><label for="se33" class="grid-content-left">Does {{Auth::user()->childname}} communicate well with others?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se33" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se33"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se33"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se33"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se33"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="se34" type="form-control">
                                        <div><label for="se34" class="grid-content-left">Does {{Auth::user()->childname}} show adaptability and flexibility in different situations?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="se34" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="se34"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="se34"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="se34"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="se34"></div>
                                    </div>
                                </div>
                                <div class="form-navigation">
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
