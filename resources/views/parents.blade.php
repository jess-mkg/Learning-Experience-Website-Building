@extends('layouts.app')

@section('content')

<title>Parents Assessment</title>
<div class="container">
    <section>
        <div class="row justify-content-center">
            <div class="checklist-card-size">
                <div class="card">
                    <div class="card-body">
                        <h2>Parent Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/parentform">
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

                                <div class="form-navigation">
                                 <!--   <button type="button" class="previous btn btn-info float-left">Previous</button>
                                    <button type="button" class="next btn btn-info float-right">Next</button> -->
                                    <button type="submit" class="btn button-74 btn-sucess float-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <script type="text/javascript">
        $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=sumbit]').toggle(atTheEnd);
            }

            function curIndex() {
                return $sections.index($sections.filter('.current'));
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

            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });
            navigateTo(0);
        });
    </script>
</div>

@endsection
