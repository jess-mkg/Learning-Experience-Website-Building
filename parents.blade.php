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
                        <div class="myp-b" style=" width: 27.5%; background-color: rgb(192, 192, 192); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Parent Assessment</h2><br>


                        <form method="POST" class="checklist-form" action="/submit/parentform1">
                            @csrf
                            <div class="">
                                <div class="form-section">
                                    <div class="grid-container">
                                        <div data-toggle="tooltip" data-placement="top" title="•	Creativity (ideas, music, images)
•	Inquiry/Curiosity (Scientific)
•	Memory (short-term/long-term)
•	Problem solving & reasoning
•	Words (Literacy/literature)
•	Language/Literacy (reading & writing)
•	Verbal language
•	Numerical (Mathematical)
•	Humour
                                    ">
                                            <h4>Cognitive</h4>
                                        </div>
                                        <div class="grid-labels"><label>Strongly Disagree</label></div>
                                        <div class="grid-labels"><label>Disagree</label></div>
                                        <div class="grid-labels"><label>Neutral</label></div>
                                        <div class="grid-labels"><label>Agree</label></div>
                                        <div class="grid-labels"><label>Strongly Agree</label></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog1" type="form-control">
                                        <div><label for="cog1" class="grid-content-left">Does {{Auth::user()->childname}} show a high level of curiosity?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog1" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog1"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog1"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog1"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog1"></div>
                                    </div>
                                    <div class="grid-container" id="cog2" type="form-control">
                                        <div><label for="cog2" class="grid-content-left">Does {{Auth::user()->childname}} show a high-level of reasoning?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog2" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog2"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog2"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog2"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog2"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog3" type="form-control">
                                        <div><label for="cog3" class="grid-content-left">Does {{Auth::user()->childname}} show a high-level of inquiry?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog3" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog3"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog3"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog3"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog3"></div>
                                    </div>
                                    <div class="grid-container" id="cog4" type="form-control">
                                        <div><label for="cog4" class="grid-content-left">Does {{Auth::user()->childname}} like to invent new things?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog4" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog4"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog4"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog4"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog4"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog5" type="form-control">
                                        <div><label for="cog5" class="grid-content-left">Does {{Auth::user()->childname}} think of original ideas?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog5" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog5"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog5"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog5"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog5"></div>
                                    </div>
                                    <div class="grid-container" id="cog6" type="form-control">
                                        <div><label for="cog6" class="grid-content-left">Does {{Auth::user()->childname}} make and create things?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog6" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog6"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog6"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog6"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog6"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog7" type="form-control">
                                        <div><label for="cog7" class="grid-content-left">Does {{Auth::user()->childname}} remember and recall things easily and accurately?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog7" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog7"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog7"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog7"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog7"></div>
                                    </div>
                                    <div class="grid-container" id="cog8" type="form-control">
                                        <div><label for="cog8" class="grid-content-left">Does {{Auth::user()->childname}} have a vivid imagination?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog8" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog8"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog8"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog8"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog8"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog9" type="form-control">
                                        <div><label for="cog9" class="grid-content-left">Can {{Auth::user()->childname}} solve difficult problems and provide solutions?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog9" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog9"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog9"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog9"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog9"></div>
                                    </div>
                                    <div class="grid-container" id="cog10" type="form-control">
                                        <div><label for="cog10" class="grid-content-left">Can {{Auth::user()->childname}} explain complicated issues?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog10" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog10"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog10"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog10"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog10"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog11" type="form-control">
                                        <div><label for="cog11" class="grid-content-left">Does {{Auth::user()->childname}} use a wide range of words in their conversations?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog11" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog11"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog11"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog11"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog11"></div>
                                    </div>
                                    <div class="grid-container" id="cog12" type="form-control">
                                        <div><label for="cog12" class="grid-content-left">Can {{Auth::user()->childname}} understand complex vocabulary?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog12" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog12"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog12"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog12"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog12"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog13" type="form-control">
                                        <div><label for="cog13" class="grid-content-left">Does {{Auth::user()->childname}} read a lot and enjoy being read to?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog13" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog13"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog13"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog13"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog13"></div>
                                    </div>
                                    <div class="grid-container" id="cog14" type="form-control">
                                        <div><label for="cog14" class="grid-content-left">Does {{Auth::user()->childname}} write and compose complex texts and stories?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog14" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog14"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog14"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog14"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog14"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="cog15" type="form-control">
                                        <div><label for="cog15" class="grid-content-left">Does {{Auth::user()->childname}} show a quirky sense of humour?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog15" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog15"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog15"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog15"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog15"></div>
                                    </div>
                                    <div class="grid-container" id="cog16" type="form-control">
                                        <div><label for="cog16" class="grid-content-left">Does {{Auth::user()->childname}} become fully immersed in their interests?</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="cog16" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="cog16"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="cog16"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="cog16"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="cog16"></div>
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
