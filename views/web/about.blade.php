
@extends("web\index")
@section('title','About')
@section('content')
<div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-contentbox">
                                            <div class="animate" data-animate="fadeInUp">
                                                <span>About us</span>
                                                <p> <font size="3" > <strong>Names:</strong>{{$name}} & Rawan Muhammed Suwaidan<br><br><strong>Birth Year: </strong> {{$birth}} , 17/2/2002<br><br><strong>Living information: </strong> {{$live}}<br><br><strong>Situation: </strong>{{$sit}}<br><br></font> </p>                                                                                                                                                                                                                                                                                                             
                                            <div class="facts-list owl-carousel">
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-university counter-icon" aria-hidden="true"></i><br><br>Alrayan University
                                                    </div>
                                                </div>
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-code counter-icon" aria-hidden="true"></i><br><br>IT section
                                                    </div>
                                                </div>

                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-graduation-cap counter-icon" aria-hidden="true"></i><br><br>Third Level
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                    <div class="col-md-6">
                                        <figure class="about-img animate" data-animate="fadeInUp"><br><br><img src="{{asset("web/images/86cd404baf6040bcc6f47ba746304925.jpg")}}" class="rounded" alt=""></figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection