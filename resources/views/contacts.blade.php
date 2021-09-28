@extends('layouts.app')

@section('content')
<title>Contacts</title>
<link type="text/css" rel="stylesheet" href="/css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="width: 110%;">
                <div class="card-body" style="padding: 30px;">
                    <div class="contact">
                        <div class="contact-contact">
                            <img class="contact-image" src="/svg/Michelle-Neumann.jpg">
                            <div class="col-md-6 wow animated fadeInRight myclass" data-wow-delay=".2s">
                                <form class="shake" role="form" method="POST" id="contactForm" name="contact-form" data-toggle="validator" action="/form-to-email">
                                @csrf
                                    <!-- Name -->
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="name">Name</label>
                                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="email">Email</label>
                                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Subject -->
                                    <div class="form-group label-floating">
                                        <label class="control-label">Subject</label>
                                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Message -->
                                    <div class="form-group label-floating">
                                        <label for="message" class="control-label">Message</label>
                                        <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Form Submit -->
                                    <div class="form-submit mybutton">
                                        <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                                        <div id="msgSubmit" class="text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h3 class="contact-name">Dr Michelle Neumann</h3>
                        <p class="contact-desc my-text">Dr Michelle Neumann is a Senior Lecturer and Researcher in the field of early
                            childhood education, literacy development, ICT and science education at Griffith
                            University. Prior to joining the School of Educational and Professional Studies,
                            Michelle was a post-doctoral research fellow with the Griffith Institute for Educational
                            Research. Michelle holds professional memberships with the Society for the Scientific
                            Studies of Reading (SSSR), Australian Literacy Educators' Association (ALEA) as well
                            as with the Griffith Institute for Educational Research (GIER), Queensland College of
                            Teachers (QCT) and Education Queensland (EQ). Michelle has had over 10 years’ experience
                            working as a primary and secondary school teacher and is a registered school Teacher with
                            Education Queensland. During her PhD candidature Michelle worked closely with preschool children,
                            parents, and educators in childcare centres across southeast QLD where she conducted her
                            early literacy programs.</p>
                        <div class="contact-details">
                            <h5>Fields of Expertise</h5>
                            <ul>
                                <li>Early Childhood Education</li>
                                <li>Early Literacy Development</li>
                                <li>Assessment of Literacy</li>
                                <li>Tablets, Apps and Social Robots</li>
                                <li>Educational technology</li>
                                <li>Pedagogy, curriculum and assessment</li>
                            </ul>
                        </div>
                        <a href="https://experts.griffith.edu.au/8985-michelle-neumann" target="_blank">Griffith Experts Link: Dr Michelle Neumann</a>
                        <p><a href="mailto:m.neumann@griffith.edu.au">Email</a>: m.neumann@griffith.edu.au</p>
                    </div>
                    <div class="contact">
                        <img class="contact-image" src="/svg/Ronksley-Pavia.jpg">
                        <h3 class="contact-name">Dr Michelle Ronksley-Pavia</h3>
                        <p class="contact-desc my-text">Dr Michelle Ronksley-Pavia is a  Special and Inclusive Education lecturer in the School
                            of Education and Professional Studies, and a researcher with the Griffith Institute for
                            Educational Research (GIER) at Griffith University, lecturing in undergraduate and
                            postgraduate Primary and Secondary preservice teacher education programs. Dr Ronksley-Pavia
                            is an international leading researcher and expert in the field of gifted education and
                            twice exceptionality (gifted students with disability). Dr Ronksley-Pavia's expertise as a
                            leader in the field of twice-exceptional research and advocacy has been recognised by the
                            US Bridges 2e Center for Research and Professional Development. Dr Ronksley-Pavia has worked
                            with gifted and talented students, and worked in special education across P-12 schooling
                            sectors and in the disability sector. Michelle's qualifications include a Master's Degree
                            in Gifted and Talented Education and a PhD in the area of gifted education and twice exceptionality.
                            Dr Ronksley-Pavia is a member of the World Council for Gifted and Talented Children, Australian
                            representative on the WCGTC’s Teacher-Education Committee, co-authoring the Council’s Position
                            Statement on Teacher Education, an Australian Delegate to the WCGTC, and  a founding member of the
                            SPELD Victoria Research Committee. As past President of the Queensland Association for Gifted &
                            Talented Children (QAGTC-GC Branch), Dr Ronksley-Pavia has a wealth of experience supporting and
                            advocating for the needs of gifted and twice exceptional learners and their families.
                        </p>
                        <a href="https://experts.griffith.edu.au/8853-michelle-ronksleypavia" target="_blank">Griffith Experts Link: Dr Michelle Ronksley-Pavia</a><br>
                        <p><a href="mailto:m.ronksley-pavia@griffith.edu.au">Email</a>: m.ronksley-pavia@griffith.edu.au</p>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
