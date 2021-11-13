@extends('layouts.app')

@section('content')
<title>Results</title>
<div class="container">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card borderr round-border">
                <div class="my-card-body">
                    <!-- results for teachers checklist -->
                    @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name)->whereNotNull('sp40'))->first())
                    <h2 class="pt-3 pl-3 just-bold">Teacher Assessment Results</h2> <br>
                    @php
                    $varA = App\Http\Controllers\ViewTeacherResults::teacherResultsInt();
                    $varB = App\Http\Controllers\ViewTeacherResults::teacherResultsCre();
                    $varC = App\Http\Controllers\ViewTeacherResults::teacherResultsSoc();
                    $varD = App\Http\Controllers\ViewTeacherResults::teacherResultsPer();
                    $varE = App\Http\Controllers\ViewTeacherResults::teacherResultsMuc();
                    $varF = App\Http\Controllers\ViewTeacherResults::teacherResultsMoc();
                    $varG = App\Http\Controllers\ViewTeacherResults::teacherResultsSp();

                    $arrTeacher = [
                    [
                    'val' => $varA,
                    'name' => 'Intellectual',
                    'border' => 'intellect-border',
                    'edit' => 'intellect',
                    ],
                    [
                    'val' => $varB,
                    'name' => 'Creative',
                    'border' => 'create-border',
                    'edit' => 'create',
                    ],
                    [
                    'val' => $varC,
                    'name' => 'Social',
                    'border' => 'social-border',
                    'edit' => 'social',
                    ],
                    [
                    'val' => $varD,
                    'name' => 'Perceptual',
                    'border' => 'percept-border',
                    'edit' => 'percept',
                    ],
                    [
                    'val' => $varE,
                    'name' => 'Muscular',
                    'border' => 'musc-border',
                    'edit' => 'musc',
                    ],
                    [
                    'val' => $varF,
                    'name' => 'Motor',
                    'border' => 'motor-border',
                    'edit' => 'motor',
                    ],
                    [
                    'val' => $varG,
                    'name' => 'Spiritual',
                    'border' => 'spir-border',
                    'edit' => 'spir',
                    ]
                    ];

                    $arrItem = array(0 => $varA,
                    1 => $varB,
                    2 => $varC,
                    3 => $varD,
                    4 => $varE,
                    5 => $varF,
                    6 => $varG);

                    $arrTName = array(0 => 'intellectual',
                    1 => 'creative',
                    2 =>'social',
                    3 => 'perceptual',
                    4 => 'muscular',
                    5 => 'muscular',
                    6 => 'spiritual');

                    $arrTColor = array(0 => 'int-color',
                    1 => 'cre-color',
                    2 =>'soc-color',
                    3 => 'per-color',
                    4 => 'musc-color',
                    5 => 'mot-color',
                    6 => 'spi-color');

                    $arrTDesc = array(0 => array(0 => "Provide access to different types of texts, for example, non-fiction (e.g., how things work/science/knowledge/history)",
                    1 => "Encourage lively conversation with others (e.g., debating current topics)"),
                    1 => array(0 => "Provide activities where things can be taken apart to see how they work ",
                    1 => "Encourage children to engage in creative writing and inventive storytelling, composing music/lyrics, drawing, painting, produce multimedia works",
                    2 => "Graphic design, sculpting, or building with Lego and other materials",),
                    2 => array(0 => "Explore and discuss laws of society and global issues.",
                    1 => "Have conversations about social justice and social media",
                    2 => "Develop an awareness on how to help people in the community"),
                    3 => array(0 => "Provide a diverse range of opportunities to listen to sounds in music (e.g., instrumental, beat, time, etc.)",
                    1 => "Provide multisensory experiences to stimulate all the senses (vision, Hearing, Smell, Taste, Touch, Proprioception/kinesthesic) (e.g., visit a science museum)"),
                    4 => array(0 => "Provide a range of materials for haptic manipulation and exploration of their environment (e.g., to investigate how things move based on different types of physical movement with hands and fingers)",
                    1 => "Complete actives that support muscular strength and endurance"),
                    5 => array(0 => "Complete hand eye coordination activities (e.g., to play a musical instrument, keyboard control)",
                    1 => "Play outdoor games and provide opportunities for adventure (e.g., sports and nature activities)"),
                    6 => array(0 => "Practice quiet mindfulness (e.g., breathing, body scan) and prayer based activities",
                    1 => "Explore connection to self, nature, land, country, and culture"));

                    $maxTValue = max($arrItem);
                    $maxTKey = array_search($maxTValue, $arrItem);
                    $maxTName = $arrTName[$maxTKey];
                    $maxTDesp = $arrTDesc[$maxTKey];
                    $maxTEdit = $arrTColor[$maxTKey];

                    $minTValue = min($arrItem);
                    $minTKey = array_search($minTValue, $arrItem);
                    $minTName = $arrTName[$minTKey];
                    $minTDesp = $arrTDesc[$minTKey];
                    $minTEdit = $arrTColor[$minTKey];

                    usort($arrTeacher, function ($item1, $item2) {
                    return $item2['val'] <=> $item1['val'];
                        });


                        @endphp

                        <div class="">
                            <div class="y-axis">Percentage</div>
                            <div class="mysection graph-container">
                                <div class="">
                                    <div class="" style="height: 100%">
                                        <div class="percent-v">100 </div>
                                        <div class="percent-v">90 </div>
                                        <div class="percent-v">80</div>
                                        <div class="percent-v">70</div>
                                        <div class="percent-v">60</div>
                                        <div class="percent-v">50</div>
                                        <div class="percent-v">40</div>
                                        <div class="percent-v">30</div>
                                        <div class="percent-v">20</div>
                                        <div class="percent-v">10</div>
                                    </div>
                                    <div class=""></div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddIntinfo()}}" class="graph {{$arrTeacher[0]['edit']}}" style="height: {{$arrTeacher[0]['val']}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">{{$arrTeacher[0]['name']}}</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddCreinfo()}}" class="graph {{$arrTeacher[1]['edit']}}" style="height: {{$arrTeacher[1]['val']}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">{{$arrTeacher[1]['name']}}</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddSocinfo()}}" class="graph {{$arrTeacher[2]['edit']}}" style="height: {{$arrTeacher[2]['val']}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">{{$arrTeacher[2]['name']}}</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddPreinfo()}}" class="graph {{$arrTeacher[3]['edit']}}" style="height: {{$arrTeacher[3]['val']}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">{{$arrTeacher[3]['name']}}</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddMucinfo()}}" class="graph {{$arrTeacher[4]['edit']}}" style="height: {{$arrTeacher[4]['val']}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">{{$arrTeacher[4]['name']}}</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddMocinfo()}}" class="graph {{$arrTeacher[5]['edit']}}" style="height: {{$arrTeacher[5]['val']}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">{{$arrTeacher[5]['name']}}</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddSptinfo()}}" class="graph {{$arrTeacher[6]['edit']}}" style="height: {{$arrTeacher[6]['val']}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">{{$arrTeacher[6]['name']}}</div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="about-table mt-5">
                            <div class="about-table-content">
                                <div class="table-con">
                                    <?php foreach ($arrTeacher as $i) : ?>
                                        <div class="table-item <?= $i['border']; ?>"><?= $i['name']; ?>: <?= round($i['val']); ?>%</div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="section1-about-tree ml-sm-3 mr-sm-3">
                                <div class="about-table-title mt-5">
                                    <h2>About Your Results</h2>
                                </div>
                                <div class="">
                                    <p>This graph represents {{Auth::user()->childname}}s' strengths in each of these gifted and talented aptitudes. It also represents further potential for growth and development.
                                        The results are divided into 7 different aptitudes, <span class="int-color">intellectual</span>, <span class="cre-color">creative</span>, <span class="soc-color">social</span>, <span class="per-color">perceptual</span>, <span class="musc-color">muscular</span>, <span class="mot-color">motor</span>, and <span class="spi-color">spiritual</span>.
                                    </p>
                                </div>
                                <h2 class="mt-4">Based on Your Results</h2>

                                Your child showed strength in the <span class="{{$maxTEdit}}">{{$maxTName}}</span> domain, support your child by engaging in activities related to:</p>
                                <ul>
                                    <?php foreach ($arrTDesc[$maxTKey] as $i) : ?>
                                        <li>{{$i}}</li>
                                    <?php endforeach; ?>
                                </ul>

                                <p>Please engage you child in activities to support your child's <span class="{{$minTEdit}}">{{$minTName}}</span> development.
                                    Your child would benefit from further support in activities, such as:</p>
                                <ul>
                                    <?php foreach ($arrTDesc[$minTKey] as $i) : ?>
                                        <li>{{$i}}</li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- results for parents checklist -->
                        @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name)->whereNotNull('spt40'))->first())

                        @php
                        $var1 = round((App\Http\Controllers\ViewParentResults::parentsResultsCog())*25);
                        $var2 = round((App\Http\Controllers\ViewParentResults::parentsResultsPhy())*25);
                        $var3 = round((App\Http\Controllers\ViewParentResults::parentsResultsSE())*25);
                        $var4 = round((App\Http\Controllers\ViewParentResults::parentsResultsSpt())*25);
                        $var11 = App\Http\Controllers\ViewParentResults::parentsResultsCog()*100;
                        $var22 = App\Http\Controllers\ViewParentResults::parentsResultsPhy()*100;
                        $var33 = App\Http\Controllers\ViewParentResults::parentsResultsSE()*100;
                        $var44 = App\Http\Controllers\ViewParentResults::parentsResultsSpt()*100;
                        $total = $var1 + $var2 + $var3 + $var4;

                        $arr = array(0 => $var11,
                        1 => $var22,
                        2 => $var33,
                        3 => $var44);

                        $arrName = array(0 => "cognitive",
                        1 => "physical",
                        2 => "social-emotional",
                        3 => "spiritual");

                        $arrDesp = array(0 => array(0 => "Engaging in creative activities (e.g., ideas, music, images, art)",
                        1 => "Encourage inquiry and curiosity (e.g., visit a science museum or zoo)",
                        2 => "Develop short term and long term memory (e.g., recall games)",
                        3 => "Support language, literacy, reading and writing (e.g., reading fiction and non-fiction storybooks and writing for different authentic purposes)",
                        4 => "Support maths counting and problem solving through everyday activities (e.g., grocery shopping and games)"),
                        1 => array(0 => "Provide fine motor activities (e.g., manipulating and building Lego)",
                        1 => "Provide multisensory experiences (vision, hearing, smell, taste, touch, kinesthesic) such as listening to different types of music (e.g., beats, time, rhythm)",
                        2 => "Play outdoor sports and games (e.g., balance, hand and feet ball activities)"),
                        2 => array(0 => "Provide social opportunities for forming friendships with others (e.g., join a play group or library family events)",
                        1 => "Provide opportunities for fostering communication and collaboration with others (e.g., talking about special interest topics)"),
                        3 => array(0 => "Practice quiet mindfulness activities (e.g., breathing, body scan)",
                        1 => "Explore connection to self, nature, land, country, and culture"));

                        $arrColour = array(0 => "spanblue",
                        1 => "spanred",
                        2 => "spanyellow",
                        3 => "spangreen");

                        $maxValue = max($arr);
                        $maxKey = array_search($maxValue, $arr);
                        $maxName = $arrName[$maxKey];
                        $maxDesp = $arrDesp[$maxKey];
                        $maxEdit = $arrColour[$maxKey];

                        $minValue = min($arr);
                        $minKey = array_search($minValue, $arr);
                        $minName = $arrName[$minKey];
                        $minDesp = $arrDesp[$minKey];
                        $minEdit = $arrColour[$minKey];

                        @endphp
                        <h1 class="line-title ml-3 mt-4 mr-4 just-bold">Child Assessment Results</h1>
                        <div class="my-form-inline">

                            <div><img class="possum" src="/svg/POSSUM.png"></div>
                            <div class="move-total align-self-end total-per just-bold">{{$total}}%</div>
                        </div>
                        <div class="tree-grid">
                            <div>
                                <div class="tree-grid-cat">
                                    <div class="grid-item-b cog">
                                        <div>Cognitive</div>
                                        <div>{{$var1}}%</div>
                                    </div>
                                </div>
                                <div class="tree-grid-cat"></div>
                                <div class="tree-grid-cat">
                                    <div class="grid-item-b s-e">
                                        <div>Social-Emotional</div>
                                        <div>{{$var3}}%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tree-container pt-3 tree-grid-item">
                                <figure class="result-tree">
                                    <div class="branches branches-l">
                                        <div data-toggle="tooltip" data-placement="top" title="Cognitive" class="branch cat-branch-l cognitive">
                                            <div class="branch-l-top">
                                                <div class="mini-branch-t" style="margin-left:-50px;">
                                                    <div class="m-b-t">
                                                        @if ($var1 >= 16)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 6)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var1 >= 1)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var1 >= 21)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Creativity"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 11)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-t ml-20">
                                                    <div class="m-b-t">
                                                        @if ($var1 >= 2)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 7)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var1 >= 12)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var1 >= 17)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 22)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Inquiry/Curiosity"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-l-middle">
                                                <div class="mini-branch-m">
                                                    <div class="m-b-t">
                                                        @if ($var1 >= 3)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                        @if ($var1 >= 18)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var1 >= 13)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var1 >= 8)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 23)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Humour"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-l-bottom">
                                                <div class="mini-branch-b ml-20">
                                                    <div class="m-b-t">
                                                        @if ($var1 >= 4)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::parentAddCog()}}"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 24)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Language/Literacy"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var1 >= 14)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var1 >= 9)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 19)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-b" style="margin-left:-50px;">
                                                    <div class="m-b-t">
                                                        @if ($var1 >= 20)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Inquiry/Curiosity"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 15)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var1 >= 10)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var1 >= 5)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var1 >= 25)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Verbal language"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-toggle="tooltip" data-placement="top" title="Social-Emotional" class="branch cat-branch-l social-emo">
                                            <div class="branch-l-top">
                                                <div class="mini-branch-t" style="margin-left:-50px;">
                                                    <div class="m-b-t">
                                                        @if ($var3 >= 25)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 21)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var3 >= 1)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var3 >= 6)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 11)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Leadership"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-t ml-20">
                                                    <div class="m-b-t">
                                                        @if ($var3 >= 22)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 7)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var3 >= 12)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var3 >= 17)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Empathy"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 2)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-l-middle">
                                                <div class="mini-branch-m">
                                                    <div class="m-b-t">
                                                        @if ($var3 >= 3)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 23)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var3 >= 13)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Communication with others"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var3 >= 8)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 18)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-l-bottom">
                                                <div class="mini-branch-b ml-20">
                                                    <div class="m-b-t">
                                                        @if ($var3 >= 4)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 9)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var3 >= 14)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::parentAddSE()}}"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var3 >= 24)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Collaboration"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 19)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-b" style="margin-left:-50px;">
                                                    <div class="m-b-t">
                                                        @if ($var3 >= 20)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Adaptability"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 15)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var3 >= 10)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var3 >= 5)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var3 >= 16)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="branches branches-r">
                                        <div data-toggle="tooltip" data-placement="top" title="Physical" class="branch cat-branch-r physical">
                                            <div class="branch-r-top">
                                                <div class="mini-branch-t" style="margin-left:-20px;">
                                                    <div class="m-b-t">
                                                        @if ($var2 >= 16)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 6)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var2 >= 1)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::parentAddPhy()}}"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var2 >= 21)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Perceptual ability"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 11)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-t">
                                                    <div class="m-b-t">
                                                        @if ($var2 >= 4)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 24)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Muscular Control"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var2 >= 14)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var2 >= 9)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 19)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-r-middle">
                                                <div class="mini-branch-m">
                                                    <div class="m-b-t">
                                                        @if ($var2 >= 2)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 7)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var2 >= 12)
                                                        <div class="leaf "></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var2 >= 17)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 22)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Motor Control"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-r-bottom">
                                                <div class="mini-branch-b" style="margin-left:-20px;">
                                                    <div class="m-b-t">
                                                        @if ($var2 >= 20)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 15)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var2 >= 10)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var2 >= 25)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Strength"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 5)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-b">
                                                    <div class="m-b-t">
                                                        @if ($var2 >= 3)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 18)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var2 >= 13)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Agility"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var2 >= 8)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var2 >= 23)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-toggle="tooltip" data-placement="top" title="Spiritual" class="branch cat-branch-r spiritual">
                                            <div class="branch-r-top">
                                                <div class="mini-branch-t" style="margin-left:-20px;">
                                                    <div class="m-b-t">
                                                        @if ($var4 >= 4)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 9)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var4 >= 14)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var4 >= 24)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Deep existential questioning"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 19)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-t">
                                                    <div class="m-b-t">
                                                        @if ($var4 >= 15)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 20)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Connections to nature"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var4 >= 10)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var4 >= 5)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 16)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-r-middle">
                                                <div class="mini-branch-m">
                                                    <div class="m-b-t">
                                                        @if ($var4 >= 25)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Affinity with animals"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 21)
                                                        <div class="leaf" data-toggle="tooltip" data-placement="top" title="Self-awareness"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var4 >= 1)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::parentAddSpt()}}"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var4 >= 6)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 11)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="branch-r-bottom">
                                                <div class="mini-branch-b" style="margin-left:-20px;">
                                                    <div class="m-b-t">
                                                        @if ($var4 >= 3)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 13)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var4 >= 23)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Intuitive"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var4 >= 8)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 18)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mini-branch-b">
                                                    <div class="m-b-t">
                                                        @if ($var4 >= 22)
                                                        <div class="leaf info" data-toggle="tooltip" data-placement="top" title="Morals and values"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 7)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-m">
                                                        @if ($var4 >= 12)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-b-b">
                                                        @if ($var4 >= 17)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif

                                                        @if ($var4 >= 2)
                                                        <div class="leaf"></div>
                                                        @else
                                                        <div class="remove"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div>
                                <div class="tree-grid-cat">
                                    <div class="grid-item-b phy">
                                        <div>Physical</div>
                                        <div>{{$var2}}%</div>
                                    </div>
                                </div>
                                <div class="tree-grid-cat"></div>
                                <div class="tree-grid-cat">
                                    <div class="grid-item-b spirit">
                                        <div>Spiritual</div>
                                        <div>{{$var4}}%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-tree pt-3">
                            <div class="title-about-tree ml-sm-3 pt-5">
                                <h1>About Your Tree</h1>
                            </div>
                            <div class="content-about-tree pt-1">
                                <div class="section1-about-tree ml-sm-3 mr-sm-3">
                                    <p>The leaves on the tree represent {{Auth::user()->childname}}s' capabilities in a particular developmental domain. Each developmental domain (see leaves) has been assigned a colour;
                                        <span class="spanblue">cognitive</span> is <span class="spanblue">blue</span>,
                                        <span class="spanred">physical</span> is <span class="spanred">red</span>,
                                        <span class="spanyellow">social-emotional</span> is <span class="spanyellow">yellow</span>, and
                                        <span class="spangreen">spiritual</span> is <span class="spangreen">green</span>.
                                    </p>
                                    <p>The darkly shaded leaves represent <span class="just-bold">strong</span> capabilities in a developmental domain whereas the lightly shaded leaves
                                        represents further potential for growth. A total result can be seen at the top of the tree out of a maximum score of 100% (this equates to 100 leaves).
                                        The tree is divided into 4 developmental domains and the results of each of these are presented beside each branch out of 25%.</p>
                                    <p>By viewing this tree and hovering over the leaves that are lighter and outlined you will be able to gain a deeper understanding of where {{Auth::user()->childname}}s' strengths are.
                                        You can hover over each of the four branches to reveal the name of the developmental domain it represents. </p>

                                    <p>For example if your child's strengths occur mainly in the <span class="spanred">physical</span> domain it is suggested they engage in activities related to:</p>
                                    <ul>
                                        <?php foreach ($arrDesp[1] as $i) : ?>
                                            <li>{{$i}}</li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <h2>Based on Your Results</h2>


                                    <p>Your child showed strength in the <span class="{{$maxEdit}}">{{$maxName}}</span> domain, support your child in regards to this domain by engaging in activities related to: </p>
                                    <ul>
                                        <?php foreach ($arrDesp[$maxKey] as $i) : ?>
                                            <li>{{$i}}</li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <p>Please engage your child in activities to support your child's <span class="{{$minEdit}}">{{$minName}}</span> development.
                                        Your child would benefit from further support in activities, such as:</p>
                                    <ul>
                                        <?php foreach ($arrDesp[$minKey] as $i) : ?>
                                            <li>{{$i}}</li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <div class="section2-about-tree">

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="p">
                                <h2 class="ml-sm-3">Resources</h2>
                            </div>-->



                            <!-- no results to display -->
                            @else
                            <br>
                            @if ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name)->whereNotNull('cog16'))->first())
                            <div>
                                <p class="just-bold my-text">Assessment: <a class="button-74" href="/start-assessment" style="line-height: 30px;">Continue Your Assessment</a></p>
                            </div>
                            <div>
                                <p class="just-bold my-text">Results: No data to display</p>
                            </div>
                            @elseif ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name)->whereNotNull('int11'))->first())
                            <div>
                                <p class="just-bold my-text">Assessment: <a class="button-74" href="/start-assessment" style="line-height: 30px;">Continue Your Assessment</a></p>
                            </div>
                            <div>
                                <p class="just-bold my-text">Results: No data to display</p>
                            </div>
                            @else
                            <div>
                                <p class="just-bold my-text">Assessment: <a class="button-74" href="/start-assessment" style="line-height: 30px;">Start Your Assessment</a></p>
                            </div>
                            <div>
                                <p class="just-bold my-text">Results: No data to display</p>
                            </div>
                            @endif

                            @endif

                        </div>
                        <button class="button-12 mb-4" onclick="window.print()">Print this page</button>
                </div>
            </div>
        </div>

    </div>
    @endsection
