@extends('layouts.app')

@section('content')
<link href="/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="checklist-card-size">
            <div class="card">
                <div class="card-header">{{ __('Parents Checklist') }}</div>
                <div class="card-body">
                    <form method="post">
                        <div class="grid-container">
                            <div></div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
