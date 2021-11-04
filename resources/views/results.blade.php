@extends('layouts.app')

@section('content')
<title>Results</title>
<div class="container">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <!-- results for teachers checklist -->
                    @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name))->first())
                    <h2>Teacher Assessment Results</h2> <br>
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
                    'name' => 'intellectual',
                    'border' => 'intellect-border',
                    'edit' => 'int-color',
                    'desc' => 'use of advanced (for age), comprehension from complex texts, demonstrates in-depth understanding, or thinking ‘outside the box’',
                    ],
                    [
                    'val' => $varB,
                    'name' => 'creative',
                    'border' => 'create-border',
                    'edit' => 'cre-color',
                    'desc' => 'taking things apart to see how they work, ceative and inventive storytelling, composeing music/lyrics, drawing, painting, produce multimedia works, graphic design, sculpting, or building with Legos',
                    ],
                    [
                    'val' => $varC,
                    'name' => 'social',
                    'border' => 'social-border',
                    'edit' => 'soc-color',
                    'desc' => 'questioning of laws and rules, being independent, or having a sense of social justice',
                    ],
                    [
                    'val' => $varD,
                    'name' => 'perceptual',
                    'border' => 'percept-border',
                    'edit' => 'per-color',
                    'desc' => '',
                    ],
                    [
                    'val' => $varE,
                    'name' => 'muscular',
                    'border' => 'musc-border',
                    'edit' => 'musc-color',
                    'desc' => '',
                    ],
                    [
                    'val' => $varF,
                    'name' => 'motor',
                    'border' => 'motor-border',
                    'edit' => 'mot-color',
                    'desc' => 'controlling motor ability, or gaining ability in dexterity, coordination, balance, or agility',
                    ],
                    [
                    'val' => $varG,
                    'name' => 'spiritual',
                    'border' => 'spir-border',
                    'edit' => 'spi-color',
                    'desc' => 'questioning one’s role in the world, using spiritual resources in solving problems, or learning multisensory approaches – e.g., intuition, meditation, visualization, mindfulness',
                    ]
                    ];

                    usort($arrTeacher, function ($item1, $item2) {
                    return $item2['val'] <=> $item1['val'];
                        });


                        @endphp
                        <div class="graph-container">
                            <section class="mysection">
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddIntinfo()}}" class="graph intellect" style="height: {{App\Http\Controllers\ViewTeacherResults::teacherResultsInt()}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">Intellectual</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddCreinfo()}}" class="graph create" style="height: {{App\Http\Controllers\ViewTeacherResults::teacherResultsCre()}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">Creative</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddSocinfo()}}" class="graph social" style="height: {{App\Http\Controllers\ViewTeacherResults::teacherResultsSoc()}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">Social</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddPreinfo()}}" class="graph percept" style="height: {{App\Http\Controllers\ViewTeacherResults::teacherResultsPer()}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">Perceptual</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddMucinfo()}}" class="graph musc" style="height: {{App\Http\Controllers\ViewTeacherResults::teacherResultsMuc()}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">Muscular</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddMocinfo()}}" class="graph motor" style="height: {{App\Http\Controllers\ViewTeacherResults::teacherResultsMoc()}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">Motor</div>
                                </div>
                                <div class="section-box">
                                    <div data-toggle="tooltip" data-placement="top" title="{{App\Http\Controllers\ViewAddInfoContent::teacherAddSptinfo()}}" class="graph spir" style="height: {{App\Http\Controllers\ViewTeacherResults::teacherResultsSp()}}%">
                                        <div class="result"> </div>
                                    </div>
                                    <div class="category">Spiritual</div>
                                </div>
                            </section>
                        </div>
                        <br>
                        <div class="about-table mt-5">
                            <div class="about-table-content">
                                <div class="table-container">
                                    <?php foreach ($arrTeacher as $i) : ?>
                                        <div class="table-item <?= $i['border']; ?>"><?= $i['name']; ?>: <?= round($i['val']); ?>%</div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="ml-sm-3 mr-sm-3">
                                <div class="about-table-title mt-5">
                                    <h2>About Your Results</h2>
                                </div>
                                <div class="section1-about-tree">
                                    <p>This graph represents {{Auth::user()->childname}}s' strengths in each of these gifted and talented aptitudes. It also represents further potential for growth and developement.
                                        The results are divided into 7 different aptitudes, <span class="int-color">intellectual</span>, <span class="cre-color">creative</span>, <span class="soc-color">social</span>, <span class="per-color">perceptual</span>, <span class="musc-color">muscular</span>, <span class="mot-color">motor</span>, and <span class="spi-color">spiritual</span>.
                                    </p>
                                </div>
                                <h2 class="mt-4">Based on Your Results</h2>
                                <p class="section1-about-tree">Your child showed strength in the <span class="{{$arrTeacher[0]['edit']}}">{{$arrTeacher[0]['name']}}</span> domain, support your child in regards to this domain by engaging in activities related to <span>{{$arrTeacher[0]['desc']}}</span>. </p>

                                <p class="section1-about-tree">Your child would benefit from further support in activities, such as, <span>{{$arrTeacher[6]['desc']}}</span>.
                                    Please engage you child in these activities to support your childs <span class="{{$arrTeacher[6]['edit']}}">{{$arrTeacher[6]['name']}}</span> development.</p>

                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="mt-3 ml-sm-3">Resources</h2>
                            <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                        </div>




                        <!-- results for parents checklist -->
                        @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name))->first())
                        <h2 class="pb-3">Parent Assessment Results</h2>
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

                        $arrDesp = array(0 => "language/literacy, verbal language, problem solving, and reasoning",
                        1 => "motor control, muscular control, and perceptual ability. (Power, speed, strength, coordination, vision, hearing, smell, taste, touch)",
                        2 => "communication with others, collaboration, relating to others, and leadership",
                        3 => "connections to nature, affinity with animals, intuition, morals and values");

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
                        <br>
                        <div class="total-per just-bold">{{$total}}%</div>
                        <div class="tree-container pt-3">
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
                        <div class="grid-con-a-t pt-2">
                            <div class="grid-a-t">
                                <div class="grid-item-a-t cog">
                                    <div>Cognitive: {{$var1}} / 25</div>
                                    <!--<div>Cognitive: {{round(100*($var11))}}%</div>-->
                                </div>
                                <div class="grid-item-a-t s-e">
                                    <div>Social-Emotional: {{$var3}} / 25</div>
                                    <!--<div>Social-Emotional: {{round(100*($var33))}}%</div>-->
                                </div>
                            </div>
                            <div class="grid-a-t">
                                <div class="grid-item-a-t phy">
                                    <div>Physical: {{$var2}} / 25</div>
                                    <!--<div>Physical: {{round(100*($var22))}}%</div>-->
                                </div>
                                <div class="grid-item-a-t spirit">
                                    <div>Spiritual: {{$var4}}% / 25%</div>
                                    <!--<div>Spiritual: {{round(100*($var44))}}%</div>-->
                                </div>
                            </div>
                        </div>
                        <div class="grid-con-a-t">
                            <div class="grid-item-a-t total">Total: {{$total}}%</div>
                        </div>
                        <div class="about-tree pt-3">
                            <div class="title-about-tree ml-sm-3 pt-5">
                                <h1>About Your Tree</h1>
                            </div>
                            <div class="content-about-tree pt-1">
                                <div class="section1-about-tree ml-sm-3 mr-sm-3">
                                    <p>The leaves on the tree represent {{Auth::user()->childname}}s' capabilities in a particular developmental domain. Each developmental domains has been assigned a colour;
                                        <span class="spanblue">cognitive</span> is <span class="spanblue">blue</span>,
                                        <span class="spanred">physical</span> is <span class="spanred">red</span>,
                                        <span class="spanyellow">social-emotional</span> is <span class="spanyellow">yellow</span>, and
                                        <span class="spangreen">spiritual</span> is <span class="spangreen">green</span>.
                                    </p>
                                    <p>The darkly shaded leaves represent <span class="just-bold">strong</span> capabilities in a developmental domain whereas the lightly shaded leaves
                                        represents further potential for growth. A total result can be seen at the top of the tree out of a maximum score of 100% (this equates to 100 leaves).
                                        The tree is divided into 4 developmental domains and the results of each of these are presented at the bottom of the tree out of 25%.</p>
                                    <p>By viewing this tree and hovering over the leaves that are lighter and outlined you will be able to gain a deeper undestanding of where {{Auth::user()->childname}}s' strengths are.
                                        !!!!You can hover over each of the four branches to reveal the name of the developmental domain it represents.!!!! </p>

                                    <p>For example if your childs' strengths occur mainly in the <span class="spanred">physical</span> domain they should engage in activities related to {{$arrDesp[1]}}.</p>
                                    <br>
                                    <h2>Based on Your Results</h2>


                                    <p>Your child showed strength in the <span class="{{$maxEdit}}">{{$maxName}}</span> domain, support your child in regards to this domain by engaging in activities related to {{$maxDesp}}. </p>

                                    <p>Your child would benefit from further support in activities, such as, {{$minDesp}}.
                                        Please engage you child in these activities to support your childs <span class="{{$minEdit}}">{{$minName}}</span> development.</p>
                                    <div class="section2-about-tree">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h2 class="ml-sm-3">Resources</h2>
                                <textarea class="form-control mr-sm-3 mr-1" id="traits" name="traits" rows="2"></textarea>
                            </div>



                            <!-- no results to display -->
                            @else
                            <br>
                            <div>
                                <p class="my-text"><span class="just-bold">Results: </span>No data to display</p>
                            </div>
                            <div>
                                <p><a class="button-74" href="/checklist" style="line-height: 30px;">Start Your Assessment</a></p>
                            </div>
                            @endif

                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
