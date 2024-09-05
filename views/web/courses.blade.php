
 @extends("web\index")
@section('title','Courses')
@section('content')
 <style>
 img{width:400px;
 height:350px;
}

.link{color:blue;
font-size:21;
}
.link:hover{color:red;
font-size:21;
}
 </style>
<div class="section animated-row" data-section="slide06">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Our Courses</span>
                                <h2>what we was learn?</h2>
                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">

                                  
                                <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{asset("web/images/game.jpg")}}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                            <h4>Games Development for phones and computers<br><p style="font-weight: normal;">'Rawan Mohammed'</p></h4>
                                                <p>I wish to study this course.<br>because i interesting games!</p>
                                                <br><br><a class="link", href="https://rawabet.org/%D9%83%D9%88%D8%B1%D8%B3-%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D8%A7%D9%84%D8%B9%D8%A7%D8%A8-%D8%A8%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85-unity-3d/">Show Course</a>  
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{asset("web/images/Best Construction Logo Design Ideas.jpg")}}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Logo and Branding Design<br><p style="font-weight: normal;">'Fatma Abdullah'</p></h4><p>I was studing this course, but I didn't finished it!<br>I hope this</p>
                                               <br><br><a class="link", href="https://youtu.be/UyoXKGQrmtY?si=ZN4hxjEp_E-W73y6">Show Course</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{asset("web/images/hack.jpg")}}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                            <h4>Ethical hack<br><p style="font-weight: normal;">'Fatma Abdullah'</p></h4><p>This's one of the courses i wanna to study!<br>I think it's important to study</p>
                                               <br><br><a class="link", href="https://www.m3aarf.com/certificate/16387/%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A7%D9%84%D8%B4%D8%B9%D8%A7%D8%B1">Show Course</a>                                            </div>
                                        </div>
                                    </div>
                                         
                                    
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{asset("web/images/web.png")}}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                            <h4>Websites Design and implement<br><p style="font-weight: normal;">'Rawan Mohammed'</p></h4>
                                                <p>This is a course of design and implement of websites using html.<br>css and java script</p>
                                                <br><br><a class="link", href="https://www.edlibre.com/learn-to-design-and-develop-websites-from-a-to-z/">Show Course</a>  
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{asset("web/images/ui.jpg")}}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                            <h4>UI/UX Design<br><p style="font-weight: normal;">'Fatma Abdullah'</p></h4><p>This is a user experience course for begginers <br>it was enjoyable</p>
                                               <br><br><a class="link", href="https://youtube.com/playlist?list=PLRemWV5koZLBR1khj5OlC_xLkdsI8G5DF&si=9SguFaTAz7oHEvTm">Show Course</a>                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
