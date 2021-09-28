@extends('layouts.app')

@section('content')
<link href="/css/style.css" rel="stylesheet">
<title>Parents Checklist</title>
<div class="container">
    <section>
    <div class="row justify-content-center">
        <div class="checklist-card-size">
        <div class="card" style="justify-content: center; align-items:center; width: 50%; margin: 10px; margin-left:auto; margin-right:auto; padding: 5px;">Progress Bar</div>
            <div class="card">
                <div class="card-header">{{ __('Parents Checklist') }}</div>
                <div class="card-body">
                    <form method="POST" class="checklist-form" action="/submit/parentform" multistep kw-cloak>
                    @csrf
                        <div class="kw-multistep-step">
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container kw-multistep-body">
                                    <div><h4>Cognitive</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog1" type="form-control">
                                    <div><label for="cog1" class="grid-content-left">Does your child show a high level of curiosity?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog1"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog1"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog1"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog1"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog1"></div>
                                </div>
                                <div class="grid-container" id="cog2" type="form-control">
                                    <div><label for="cog2" class="grid-content-left">Does your child show a high-level of reasoning?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog2"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog2"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog2"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog2"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog2"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog3" type="form-control">
                                    <div><label for="cog3" class="grid-content-left">Does your child show a high-level of inquiry?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog3"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog3"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog3"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog3"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog3"></div>
                                </div>
                                <div class="grid-container" id="cog4" type="form-control">
                                    <div><label for="cog4" class="grid-content-left">Does your child like to invent new things?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog4"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog4"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog4"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog4"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog4"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog5" type="form-control">
                                    <div><label for="cog5" class="grid-content-left">Does your child think of original ideas?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog5"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog5"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog5"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog5"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog5"></div>
                                </div>
                                <div class="grid-container" id="cog6" type="form-control">
                                    <div><label for="cog6" class="grid-content-left">Does your child make and create things?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog6"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog6"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog6"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog6"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog6"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog7" type="form-control">
                                    <div><label for="cog7" class="grid-content-left">Does your child remember and recall things easily and accurately?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog7"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog7"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog7"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog7"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog7"></div>
                                </div>
                                <div class="grid-container" id="cog8" type="form-control">
                                    <div><label for="cog8" class="grid-content-left">Does your child have a vivid imagination?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog8"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog8"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog8"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog8"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog8"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog9" type="form-control">
                                    <div><label for="cog9" class="grid-content-left">Can your child solve difficult problems and provide solutions?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog9"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog9"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog9"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog9"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog9"></div>
                                </div>
                                <div class="grid-container" id="cog10" type="form-control">
                                    <div><label for="cog10" class="grid-content-left">Can your child explain complicated issues?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog10"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog10"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog10"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog10"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog10"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog11" type="form-control">
                                    <div><label for="cog11" class="grid-content-left">Does your child use a wide range of words in their conversations?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog11"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog11"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog11"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog11"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog11"></div>
                                </div>
                                <div class="grid-container" id="cog12" type="form-control">
                                    <div><label for="cog12" class="grid-content-left">Can your child understand complex vocabulary?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog12"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog12"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog12"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog12"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog12"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog13" type="form-control">
                                    <div><label for="cog13" class="grid-content-left">Does child read a lot and enjoy being read to?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog13"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog13"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog13"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog13"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog13"></div>
                                </div>
                                <div class="grid-container" id="cog14" type="form-control">
                                    <div><label for="cog14" class="grid-content-left">Does your child write and compose complex texts and stories?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog14"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog14"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog14"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog14"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog14"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="cog15" type="form-control">
                                    <div><label for="cog15" class="grid-content-left">Does your child show a quirky sense of humour?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog15"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog15"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog15"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog15"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog15"></div>
                                </div>
                                <div class="grid-container" id="cog16" type="form-control">
                                    <div><label for="cog16" class="grid-content-left">Does your child become fully immersed in their interests?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="cog16"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="cog16"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="cog16"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="cog16"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="cog16"></div>
                                </div>
                            </div>

                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                    <div><h4>Physical</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="phy17" type="form-control">
                                    <div><label for="phy17" class="grid-content-left">Does your child show speed during physical activities (without a lot of training)?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy17"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy17"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy17"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy17"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy17"></div>
                                </div>
                                <div class="grid-container" id="phy18" type="form-control">
                                    <div><label for="phy18" class="grid-content-left">Does your child show strong muscle control?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy18"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy18"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy18"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy18"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy18"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="phy19" type="form-control">
                                    <div><label for="phy19" class="grid-content-left">Does your child show sophisticated fine motor control with their fingers?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy19"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy19"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy19"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy19"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy19"></div>
                                </div>
                                <div class="grid-container" id="phy20" type="form-control">
                                    <div><label for="phy20" class="grid-content-left">Is your child well-coordinated and well-balanced when they move around?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy20"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy20"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy20"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy20"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy20"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="phy21" type="form-control">
                                    <div><label for="phy21" class="grid-content-left">Does your child attend closely to details others may miss?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy21"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy21"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy21"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy21"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy21"></div>
                                </div>
                                <div class="grid-container" id="phy22" type="form-control">
                                    <div><label for="phy22" class="grid-content-left">Does your child hear clarity and variations in music and sounds?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy22"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy22"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy22"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy22"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy22"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="phy23" type="form-control">
                                    <div><label for="phy23" class="grid-content-left">Can your child easily recognise and identify diverse types of smells?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy23"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy23"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy23"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy23"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy23"></div>
                                </div>
                                <div class="grid-container" id="phy24" type="form-control">
                                    <div><label for="phy24" class="grid-content-left">Does your child readily recognise the details of textures and surfaces of things?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy24"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy24"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy24"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy24"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy24"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="phy25" type="form-control">
                                    <div><label for="phy25" class="grid-content-left">Does your child have a ‘mature’ palate for new and different tastes?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="phy25"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="phy25"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="phy25"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="phy25"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="phy25"></div>
                                </div>
                            </div>

                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                    <div><h4>Social-Emotional</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="se26" type="form-control">
                                    <div><label for="se26" class="grid-content-left">Does your child show speed during physical activities (without a lot of training)?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se26"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se26"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se26"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se26"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se26"></div>
                                </div>
                                <div class="grid-container" id="se27" type="form-control">
                                    <div><label for="se27" class="grid-content-left">Does your child show strong muscle control?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se27"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se27"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se27"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se27"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se27"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="se28" type="form-control">
                                    <div><label for="se28" class="grid-content-left">Does your child show sophisticated fine motor control with their fingers?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se28"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se28"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se28"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se28"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se28"></div>
                                </div>
                                <div class="grid-container" id="se29" type="form-control">
                                    <div><label for="se29" class="grid-content-left">Is your child well-coordinated and well-balanced when they move around?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se29"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se29"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se29"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se29"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se29"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="se30" type="form-control">
                                    <div><label for="se30" class="grid-content-left">Does your child attend closely to details others may miss?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se30"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se30"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se30"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se30"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se30"></div>
                                </div>
                                <div class="grid-container" id="se31" type="form-control">
                                    <div><label for="se31" class="grid-content-left">Does your child hear clarity and variations in music and sounds?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se31"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se31"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se31"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se31"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se31"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="se32" type="form-control">
                                    <div><label for="se32" class="grid-content-left">Can your child easily recognise and identify diverse types of smells?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se32"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se32"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se32"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se32"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se32"></div>
                                </div>
                                <div class="grid-container" id="se33" type="form-control">
                                    <div><label for="se33" class="grid-content-left">Does your child readily recognise the details of textures and surfaces of things?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se33"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se33"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se33"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se33"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se33"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="se34" type="form-control">
                                    <div><label for="se34" class="grid-content-left">Does your child have a ‘mature’ palate for new and different tastes?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="se34"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="se34"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="se34"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="se34"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="se34"></div>
                                </div>
                            </div>

                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                    <div><h4>Spiritual</h4></div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="spt35" type="form-control">
                                    <div><label for="spt35" class="grid-content-left">Does your child show speed during physical activities (without a lot of training)?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="spt35"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="spt35"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="spt35"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="spt35"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="spt35"></div>
                                </div>
                                <div class="grid-container" id="spt36" type="form-control">
                                    <div><label for="spt36" class="grid-content-left">Does your child show strong muscle control?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="spt36"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="spt36"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="spt36"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="spt36"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="spt36"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="spt37" type="form-control">
                                    <div><label for="spt37" class="grid-content-left">Does your child show sophisticated fine motor control with their fingers?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="spt37"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="spt37"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="spt37"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="spt37"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="spt37"></div>
                                </div>
                                <div class="grid-container" id="spt38" type="form-control">
                                    <div><label for="spt38" class="grid-content-left">Is your child well-coordinated and well-balanced when they move around?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="spt38"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="spt38"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="spt38"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="spt38"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="spt38"></div>
                                </div>
                                <div class="grid-container" style="background-color: AliceBlue;" id="spt39" type="form-control">
                                    <div><label for="spt39" class="grid-content-left">Does your child attend closely to details others may miss?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="spt39"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="spt39"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="spt39"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="spt39"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="spt39"></div>
                                </div>
                                <div class="grid-container" id="spt40" type="form-control">
                                    <div><label for="spt40" class="grid-content-left">Does your child hear clarity and variations in music and sounds?</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="spt40"></div>
                                    <div class="grid-item"><input type="radio" value="2" name="spt40"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="spt40"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="spt40"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="spt40"></div>
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
    @section('script')
    <script type="text/javascript">
        $(function() {
        var $sections = $('.form-section');

        function navigateTo(parents) {
            $sections
                .removeClass('current')
                .eq(parents)
                    .addClass('current');
            $('.form-navigation .previous').toggle(parents > 0);
            var atTheEnd = parents >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=sumbit]').toggle(atTheEnd);
        }

        function curIndex() {
            return $sections.parents($sections.filter('current'));
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

        $sections.each(function(parents, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + parents);
        });
        navigateTo(0);
    });
    </script>
    @endsection

</div>



@endsection
