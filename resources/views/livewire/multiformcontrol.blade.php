<div>
    <form method="POST" class="checklist-form" action="/submit/parentform">
    @csrf
        @if ($currentStep == 1)
        <div class="step-one">
            <div class="my-progress-bar" style="margin: 20px;">
                <div class="p-container" style="margin: auto; background-color: rgb(192, 192, 192); width: 50%; border-radius: 20px;">
                    <div class="myp-b" style=" width: 27.5%; background-color: rgb(192, 192, 192); color: white; padding: 2%; border-radius: 15px;"> </div>
                </div>
            </div>
            <div class="card form-section">
                <div class="card-header">Cognetive</div>
                <div class="grid-container">
                    <div class=""></div>
                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                    <div class="grid-labels"><label>Disagree</label></div>
                    <div class="grid-labels"><label>Neutral</label></div>
                    <div class="grid-labels"><label>Agree</label></div>
                    <div class="grid-labels"><label>Strongly Agree</label></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog1" type="form-control">
                    <div><label for="cog1" class="grid-content-left">Does your child show a high level of curiosity?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog1" wire:model="cog1" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog1" wire:model="cog1"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog1" wire:model="cog1"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog1" wire:model="cog1"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog1" wire:model="cog1"></div>
                </div>
                <div class="grid-container" id="cog2" type="form-control">
                    <div><label for="cog2" class="grid-content-left">Does your child show a high-level of reasoning?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog2" wire:model="cog2" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog2" wire:model="cog2"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog2" wire:model="cog2"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog2" wire:model="cog2"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog2" wire:model="cog2"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog3" type="form-control">
                    <div><label for="cog3" class="grid-content-left">Does your child show a high-level of inquiry?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog3" wire:model="cog3" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog3" wire:model="cog3"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog3" wire:model="cog3"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog3" wire:model="cog3"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog3" wire:model="cog3"></div>
                </div>
                <div class="grid-container" id="cog4" type="form-control">
                    <div><label for="cog4" class="grid-content-left">Does your child like to invent new things?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog4" wire:model="cog4" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog4" wire:model="cog4"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog4" wire:model="cog4"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog4" wire:model="cog4"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog4" wire:model="cog4"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog5" type="form-control">
                    <div><label for="cog5" class="grid-content-left">Does your child think of original ideas?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog5" wire:model="cog5" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog5" wire:model="cog5"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog5" wire:model="cog5"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog5" wire:model="cog5"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog5" wire:model="cog5"></div>
                </div>
                <div class="grid-container" id="cog6" type="form-control">
                    <div><label for="cog6" class="grid-content-left">Does your child make and create things?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog6" wire:model="cog6" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog6" wire:model="cog6"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog6" wire:model="cog6"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog6" wire:model="cog6"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog6" wire:model="cog6"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog7" type="form-control">
                    <div><label for="cog7" class="grid-content-left">Does your child remember and recall things easily and accurately?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog7" wire:model="cog7" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog7" wire:model="cog7"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog7" wire:model="cog7"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog7" wire:model="cog7"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog7" wire:model="cog7"></div>
                </div>
                <div class="grid-container" id="cog8" type="form-control">
                    <div><label for="cog8" class="grid-content-left">Does your child have a vivid imagination?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog8" wire:model="cog8" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog8" wire:model="cog8"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog8" wire:model="cog8"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog8" wire:model="cog8"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog8" wire:model="cog8"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog9" type="form-control">
                    <div><label for="cog9" class="grid-content-left">Can your child solve difficult problems and provide solutions?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog9" wire:model="cog9" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog9" wire:model="cog9"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog9" wire:model="cog9"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog9" wire:model="cog9"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog9" wire:model="cog9"></div>
                </div>
                <div class="grid-container" id="cog10" type="form-control">
                    <div><label for="cog10" class="grid-content-left">Can your child explain complicated issues?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog10" wire:model="cog10" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog10" wire:model="cog10"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog10" wire:model="cog10"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog10" wire:model="cog10"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog10" wire:model="cog10"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog11" type="form-control">
                    <div><label for="cog11" class="grid-content-left">Does your child use a wide range of words in their conversations?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog11" wire:model="cog11" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog11" wire:model="cog11"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog11" wire:model="cog11"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog11" wire:model="cog11"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog11" wire:model="cog11"></div>
                </div>
                <div class="grid-container" id="cog12" type="form-control">
                    <div><label for="cog12" class="grid-content-left">Can your child understand complex vocabulary?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog12" wire:model="cog12" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog12" wire:model="cog12"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog12" wire:model="cog12"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog12" wire:model="cog12"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog12" wire:model="cog12"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog13" type="form-control">
                    <div><label for="cog13" class="grid-content-left">Does child read a lot and enjoy being read to?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog13" wire:model="cog13" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog13" wire:model="cog13"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog13" wire:model="cog13"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog13" wire:model="cog13"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog13" wire:model="cog13"></div>
                </div>
                <div class="grid-container" id="cog14" type="form-control">
                    <div><label for="cog14" class="grid-content-left">Does your child write and compose complex texts and stories?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog14" wire:model="cog14" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog14" wire:model="cog14"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog14" wire:model="cog14"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog14" wire:model="cog14"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog14" wire:model="cog14"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="cog15" type="form-control">
                    <div><label for="cog15" class="grid-content-left">Does your child show a quirky sense of humour?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog15" wire:model="cog15" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog15" wire:model="cog15"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog15" wire:model="cog15"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog15" wire:model="cog15"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog15" wire:model="cog15"></div>
                </div>
                <div class="grid-container" id="cog16" type="form-control">
                    <div><label for="cog16" class="grid-content-left">Does your child become fully immersed in their interests?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="cog16" wire:model="cog16" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="cog16" wire:model="cog16"></div>
                    <div class="grid-item"><input type="radio" value="3" name="cog16" wire:model="cog16"></div>
                    <div class="grid-item"><input type="radio" value="4" name="cog16" wire:model="cog16"></div>
                    <div class="grid-item"><input type="radio" value="5" name="cog16" wire:model="cog16"></div>
                </div>
            </div>
        </div>
        @endif

        @if ($currentStep == 2)
        <div class="step-two">
            <div class="my-progress-bar" style="margin: 20px;">
                <div class="p-container" style="margin: auto; background-color: rgb(192, 192, 192); width: 50%; border-radius: 20px;">
                    <div class="myp-b" style=" width: 40%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                </div>
            </div>
            <div class="card form-section">
                <div class="card-header">Physical</div>
                <div class="grid-container">
                    <div class=""></div>
                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                    <div class="grid-labels"><label>Disagree</label></div>
                    <div class="grid-labels"><label>Neutral</label></div>
                    <div class="grid-labels"><label>Agree</label></div>
                    <div class="grid-labels"><label>Strongly Agree</label></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="phy17" type="form-control">
                    <div><label for="phy17" class="grid-content-left">Does your child show speed during physical activities (without a lot of training)?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy17" wire:model="phy17" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy17" wire:model="phy17"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy17" wire:model="phy17"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy17" wire:model="phy17"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy17" wire:model="phy17"></div>
                </div>
                <div class="grid-container" id="phy18" type="form-control">
                    <div><label for="phy18" class="grid-content-left">Does your child show strong muscle control?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy18" wire:model="phy18" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy18" wire:model="phy18"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy18" wire:model="phy18"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy18" wire:model="phy18"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy18" wire:model="phy18"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="phy19" type="form-control">
                    <div><label for="phy19" class="grid-content-left">Does your child show sophisticated fine motor control with their fingers?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy19" wire:model="phy19" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy19" wire:model="phy19"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy19" wire:model="phy19"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy19" wire:model="phy19"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy19" wire:model="phy19"></div>
                </div>
                <div class="grid-container" id="phy20" type="form-control">
                    <div><label for="phy20" class="grid-content-left">Is your child well-coordinated and well-balanced when they move around?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy20" wire:model="phy20" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy20" wire:model="phy20"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy20" wire:model="phy20"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy20" wire:model="phy20"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy20" wire:model="phy20"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="phy21" type="form-control">
                    <div><label for="phy21" class="grid-content-left">Does your child attend closely to details others may miss?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy21" wire:model="phy21" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy21" wire:model="phy21"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy21" wire:model="phy21"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy21" wire:model="phy21"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy21" wire:model="phy21"></div>
                </div>
                <div class="grid-container" id="phy22" type="form-control">
                    <div><label for="phy22" class="grid-content-left">Does your child hear clarity and variations in music and sounds?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy22" wire:model="phy22" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy22" wire:model="phy22"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy22" wire:model="phy22"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy22" wire:model="phy22"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy22" wire:model="phy22"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="phy23" type="form-control">
                    <div><label for="phy23" class="grid-content-left">Can your child easily recognise and identify diverse types of smells?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy23" wire:model="phy23" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy23" wire:model="phy23"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy23" wire:model="phy23"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy23" wire:model="phy23"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy23" wire:model="phy23"></div>
                </div>
                <div class="grid-container" id="phy24" type="form-control">
                    <div><label for="phy24" class="grid-content-left">Does your child readily recognise the details of textures and surfaces of things?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy24" wire:model="phy24" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy24" wire:model="phy24"></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy24" wire:model="phy24"></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy24" wire:model="phy24"></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy24" wire:model="phy24"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="phy25" type="form-control">
                    <div><label for="phy25" class="grid-content-left">Does your child have a ‘mature’ palate for new and different tastes?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="phy25" wire:model="phy25" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="phy25" wire:model="phy25" ></div>
                    <div class="grid-item"><input type="radio" value="3" name="phy25" wire:model="phy25" ></div>
                    <div class="grid-item"><input type="radio" value="4" name="phy25" wire:model="phy25" ></div>
                    <div class="grid-item"><input type="radio" value="5" name="phy25" wire:model="phy25" ></div>
                </div>
            </div>
        </div>
        @endif

        @if ($currentStep == 3)
        <div class="step-three">
            <div class="my-progress-bar" style="margin: 20px;">
                <div class="p-container" style="margin: auto; background-color: rgb(192, 192, 192); width: 50%; border-radius: 20px;">
                    <div class="myp-b" style=" width: 62.5%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                </div>
            </div>
            <div class="card form-section">
                <div class="card-header">Social-Emotional</div>
                <div class="grid-container">
                    <div class=""></div>
                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                    <div class="grid-labels"><label>Disagree</label></div>
                    <div class="grid-labels"><label>Neutral</label></div>
                    <div class="grid-labels"><label>Agree</label></div>
                    <div class="grid-labels"><label>Strongly Agree</label></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="se26" type="form-control">
                    <div><label for="se26" class="grid-content-left">Does your child show speed during physical activities (without a lot of training)?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se26" wire:model="se26" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se26" wire:model="se26"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se26" wire:model="se26"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se26" wire:model="se26"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se26" wire:model="se26"></div>
                </div>
                <div class="grid-container" id="se27" type="form-control">
                    <div><label for="se27" class="grid-content-left">Does your child show strong muscle control?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se27" wire:model="se27" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se27" wire:model="se27"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se27" wire:model="se27"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se27" wire:model="se27"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se27" wire:model="se27"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="se28" type="form-control">
                    <div><label for="se28" class="grid-content-left">Does your child show sophisticated fine motor control with their fingers?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se28" wire:model="se28" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se28" wire:model="se28"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se28" wire:model="se28"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se28" wire:model="se28"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se28" wire:model="se28"></div>
                </div>
                <div class="grid-container" id="se29" type="form-control">
                    <div><label for="se29" class="grid-content-left">Is your child well-coordinated and well-balanced when they move around?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se29" wire:model="se29" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se29" wire:model="se29"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se29" wire:model="se29"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se29" wire:model="se29"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se29" wire:model="se29"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="se30" type="form-control">
                    <div><label for="se30" class="grid-content-left">Does your child attend closely to details others may miss?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se30" wire:model="se30" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se30" wire:model="se30"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se30" wire:model="se30"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se30" wire:model="se30"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se30" wire:model="se30"></div>
                </div>
                <div class="grid-container" id="se31" type="form-control">
                    <div><label for="se31" class="grid-content-left">Does your child hear clarity and variations in music and sounds?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se31" wire:model="se31" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se31" wire:model="se31"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se31" wire:model="se31"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se31" wire:model="se31"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se31" wire:model="se31"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="se32" type="form-control">
                    <div><label for="se32" class="grid-content-left">Can your child easily recognise and identify diverse types of smells?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se32" wire:model="se32" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se32" wire:model="se32"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se32" wire:model="se32"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se32" wire:model="se32"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se32" wire:model="se32"></div>
                </div>
                <div class="grid-container" id="se33" type="form-control">
                    <div><label for="se33" class="grid-content-left">Does your child readily recognise the details of textures and surfaces of things?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se33" wire:model="se33" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se33" wire:model="se33"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se33" wire:model="se33"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se33" wire:model="se33"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se33" wire:model="se33"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="se34" type="form-control">
                    <div><label for="se34" class="grid-content-left">Does your child have a ‘mature’ palate for new and different tastes?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="se34" wire:model="se34" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="se34" wire:model="se34"></div>
                    <div class="grid-item"><input type="radio" value="3" name="se34" wire:model="se34"></div>
                    <div class="grid-item"><input type="radio" value="4" name="se34" wire:model="se34"></div>
                    <div class="grid-item"><input type="radio" value="5" name="se34" wire:model="se34"></div>
                </div>
            </div>
        </div>
        @endif

        @if ($currentStep == 4)
        <div class="step-four">
            <div class="my-progress-bar" style="margin: 20px;">
                <div class="p-container" style="margin: auto; background-color: rgb(192, 192, 192); width: 50%; border-radius: 20px;">
                    <div class="myp-b" style=" width: 85%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                </div>
            </div>
            <div class="card form-section">
                <div class="card-header">Spiritual</div>
                <div class="grid-container">
                    <div class=""></div>
                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                    <div class="grid-labels"><label>Disagree</label></div>
                    <div class="grid-labels"><label>Neutral</label></div>
                    <div class="grid-labels"><label>Agree</label></div>
                    <div class="grid-labels"><label>Strongly Agree</label></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="spt35" type="form-control">
                    <div><label for="spt35" class="grid-content-left">Does your child show speed during physical activities (without a lot of training)?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="spt35" wire:model="spt35" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="spt35" wire:model="spt35"></div>
                    <div class="grid-item"><input type="radio" value="3" name="spt35" wire:model="spt35"></div>
                    <div class="grid-item"><input type="radio" value="4" name="spt35" wire:model="spt35"></div>
                    <div class="grid-item"><input type="radio" value="5" name="spt35" wire:model="spt35"></div>
                </div>
                <div class="grid-container" id="spt36" type="form-control">
                    <div><label for="spt36" class="grid-content-left">Does your child show strong muscle control?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="spt36" wire:model="spt36" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="spt36" wire:model="spt36"></div>
                    <div class="grid-item"><input type="radio" value="3" name="spt36" wire:model="spt36"></div>
                    <div class="grid-item"><input type="radio" value="4" name="spt36" wire:model="spt36"></div>
                    <div class="grid-item"><input type="radio" value="5" name="spt36" wire:model="spt36"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="spt37" type="form-control">
                    <div><label for="spt37" class="grid-content-left">Does your child show sophisticated fine motor control with their fingers?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="spt37" wire:model="spt37" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="spt37" wire:model="spt37"></div>
                    <div class="grid-item"><input type="radio" value="3" name="spt37" wire:model="spt37"></div>
                    <div class="grid-item"><input type="radio" value="4" name="spt37" wire:model="spt37"></div>
                    <div class="grid-item"><input type="radio" value="5" name="spt37" wire:model="spt37"></div>
                </div>
                <div class="grid-container" id="spt38" type="form-control">
                    <div><label for="spt38" class="grid-content-left">Is your child well-coordinated and well-balanced when they move around?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="spt38" wire:model="spt38" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="spt38" wire:model="spt38"></div>
                    <div class="grid-item"><input type="radio" value="3" name="spt38" wire:model="spt38"></div>
                    <div class="grid-item"><input type="radio" value="4" name="spt38" wire:model="spt38"></div>
                    <div class="grid-item"><input type="radio" value="5" name="spt38" wire:model="spt38"></div>
                </div>
                <div class="grid-container" style="background-color: AliceBlue;" id="spt39" type="form-control">
                    <div><label for="spt39" class="grid-content-left">Does your child attend closely to details others may miss?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="spt39" wire:model="spt39" required></div>
                    <div class="grid-item"><input type="radio" value="2" name="spt39" wire:model="spt39"></div>
                    <div class="grid-item"><input type="radio" value="3" name="spt39" wire:model="spt39"></div>
                    <div class="grid-item"><input type="radio" value="4" name="spt39" wire:model="spt39"></div>
                    <div class="grid-item"><input type="radio" value="5" name="spt39" wire:model="spt39"></div>
                </div>
                <div class="grid-container" id="spt40" type="form-control">
                    <div><label for="spt40" class="grid-content-left">Does your child hear clarity and variations in music and sounds?</label></div>
                    <div class="grid-item"><input type="radio" value="1" name="spt40" wire:model="spt40"></div>
                    <div class="grid-item"><input type="radio" value="2" name="spt40" wire:model="spt40"></div>
                    <div class="grid-item"><input type="radio" value="3" name="spt40" wire:model="spt40"></div>
                    <div class="grid-item"><input type="radio" value="4" name="spt40" wire:model="spt40"></div>
                    <div class="grid-item"><input type="radio" value="5" name="spt40" wire:model="spt40"></div>
                </div>
            </div>
        </div>
        @endif

        <div class="action-buttons">
            <div class="form-navigation">
                @if ($currentStep == 1)
                <div></div>
                @endif

                @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn previous btn-secondary" wire:click="decreaseStep()">Previous</button>
                @endif

                @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                <button type="button" class="btn next btn-success" wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentStep == 4)
                <button type="submit" class="btn btn-primary">Submit</button>
                @endif
            </div>
        </div>
    </form>
</div>
