@extends('layouts.app')

@section('content')
<title>Start Page</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h1>Gifted & Talented Checklist</h1>
                    <div>
                        <p class="my-text">Dr Michelle Ronksley-Pavia is a world-leading researcher in the field gifted and talented and twice
                            exceptional education. Dr Ronksley is also an Australian Delegate to the World Council for Gifted
                            and Talented Children (WCGTC). </p>
                        <p class="my-text">Dr Michelle Neumann has expertise in early childhood education and
                            digital technologies. Our research lab has been awarded several grants to explore the role of online
                            digital technologies to support gifted and talented children at school and home. </p>
                        <p class="my-text">These research projects have revealed the vital role that teachers play in providing positive and
                            productive online experiences for school children, however expert leadership, resources and training are essential for successful online learning
                            and experiences that will re(engage) gifted students. Selected research publications from our research lab and
                            related projects can be seen below.</p>
                    </div>
                    <hr style="width:85%;">
                    <div>
                        <h3 class="otherspan">Parent Assessments for Gifted and Talented Students</h3>
                        <p class="my-text">This parent assessment of young children’s (2 to 6 years old) will
                            provide an overarching picture of children’s physical, cognitive and
                            social-emotional gifts and strengths. It will give some key indicators
                            of whether your child displays characteristics of giftedness such as
                            memory, creativity, humour, vocabulary and imagination. This short
                            observational assessment will enable parents to further understand
                            their child’s areas of interest and empower them to help their child
                            to excel in the future.
                        </p>
                    </div>
                    <hr style="width:85%;">
                    <div>
                        <h3 class="myspan">Teachers Assessments for Gifted and Talented Students</h3>
                        <p class="my-text">This teacher assessment for primary school children (6 to 12 years old)
                            is a checklist that can be used to help teachers identify their student’s
                            potential areas of giftedness (Intellectual, Creative, Social, Perceptual,
                            Physical domains) and indicators that may assist in further specific identification
                            measures are needed (e.g., Weschler Intelligence Scale for Children – WISC-V).
                        </p>
                    </div>
                </div>


                <form style="text-align: center; margin-bottom: 30px; font-size: 130%">
                    <a href="/checklist" class="button-74">Start Your Checklist</a>
                </form>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
