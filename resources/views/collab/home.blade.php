@extends('collab_layout')
@section('collab_content')
<div class="clearfix"></div>
<section class="slide-banner scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
    <div class="slideshow-container">
        <div class="slideshow-item">
            <div class="bg" data-bg="{{asset('img/banner-3.jpg')}}"></div>
        </div>
        <div class="slideshow-item">
            <div class="bg" data-bg="{{asset('img/banner-6.jpg')}}"></div>
        </div>
        <div class="slideshow-item">
            <div class="bg" data-bg="{{asset('img/banner-5.jpg')}}"></div>
        </div>
        <div class="slideshow-item">
            <div class="bg" data-bg="{{asset('img/banner-2.jpg')}}"></div>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="hero-section-wrap fl-wrap">
        <div class="container">
            <div class="intro-item fl-wrap">
                <div class="caption text-center cl-white">
                    <h2>Discover 7412+ Jobs Here</h2>

                    <p>Expolore top rated tours, hotels and restaurants around the world</p>
                </div>
                <form class="form-horizontal">
                    <div class="col-md-4 no-padd">
                        <div class="input-group"><input type="text" class="form-control br-1" id="joblist"
                                placeholder="Skills, Designations, Companies"></div>
                    </div>
                    <div class="col-md-3 no-padd">
                        <div class="input-group"><input type="text" class="form-control br-1" id="location"
                                placeholder="Search By Location.."></div>
                    </div>
                    <div class="col-md-3 no-padd">
                        <div class="input-group">
                            <select id="choose-city" class="form-control">
                                <option>Choose City</option>
                                <option>Chandigarh</option>
                                <option>London</option>
                                <option>England</option>
                                <option>Pratapcity</option>
                                <option>Ukrain</option>
                                <option>Wilangana</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 no-padd">
                        <div class="input-group">
                            <button type="submit" class="btn btn-success full-width">Search Job</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="first-feature">
    <div class="container">
        <div class="all-features">
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-desktop"></i></div>
                    <div class="feature-caption">
                        <h5>Web Developer</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-mobile"></i></div>
                    <div class="feature-caption">
                        <h5>Mobile Developer</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-lightbulb-o"></i></div>
                    <div class="feature-caption">
                        <h5>Creative Designer</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-file-text"></i></div>
                    <div class="feature-caption">
                        <h5>Content Writer</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-hdd-o"></i></div>
                    <div class="feature-caption">
                        <h5>Manager</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-bullhorn"></i></div>
                    <div class="feature-caption">
                        <h5>Sales & Marketing</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-credit-card"></i></div>
                    <div class="feature-caption">
                        <h5>Accountant</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 small-padding">
                <div class="job-feature">
                    <div class="feature-icon"><i class="fa fa-user"></i></div>
                    <div class="feature-caption">
                        <h5>Management / HR</h5>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="main-heading">
                    <p>Expert Candidate</p>

                    <h2>Hire Premium <span>Employee</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="paid-candidate-container">
                    <div class="paid-candidate-box">
                        <div class="dropdown">
                            <div class="btn-group fl-right">
                                <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu pull-right animated flipInX"><a href="#">Shortlist</a><a
                                        href="#">Send Message</a><a href="#">Dislike</a></div>
                            </div>
                        </div>
                        <div class="paid-candidate-inner--box">
                            <div class="paid-candidate-box-thumb"><img src="{{asset('img/client-1.jpg')}}"
                                    class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="paid-candidate-box-detail">
                                <h4>Daniel Disroyer</h4>
                                <span class="desination">App Designer</span>
                            </div>
                        </div>
                        <div class="paid-candidate-box-extra">
                            <ul>
                                <li>Php</li>
                                <li>Android</li>
                                <li>Html</li>
                                <li class="more-skill bg-primary">+3</li>
                            </ul>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-paid-candidate bt-1">View Detail</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="paid-candidate-container">
                    <div class="paid-candidate-box">
                        <div class="dropdown">
                            <div class="btn-group fl-right">
                                <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu pull-right animated flipInX"><a href="#">Shortlist</a><a
                                        href="#">Send Message</a><a href="#">Dislike</a></div>
                            </div>
                        </div>
                        <div class="paid-candidate-inner--box">
                            <div class="paid-candidate-box-thumb"><img src="{{asset('img/client-2.jpg')}}"
                                    class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="paid-candidate-box-detail">
                                <h4>Agustin L. Smith</h4>
                                <span class="desination">App Designer</span>
                            </div>
                        </div>
                        <div class="paid-candidate-box-extra">
                            <ul>
                                <li>Php</li>
                                <li>Android</li>
                                <li>Html</li>
                                <li class="more-skill bg-primary">+3</li>
                            </ul>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-paid-candidate bt-1">View Detail</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="paid-candidate-container">
                    <div class="paid-candidate-box">
                        <div class="dropdown">
                            <div class="btn-group fl-right">
                                <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu pull-right animated flipInX"><a href="#">Shortlist</a><a
                                        href="#">Send Message</a><a href="#">Dislike</a></div>
                            </div>
                        </div>
                        <div class="paid-candidate-inner--box">
                            <div class="paid-candidate-box-thumb"><img src="{{asset('img/client-3.jpg')}}"
                                    class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="paid-candidate-box-detail">
                                <h4>Delores R. Williams</h4>
                                <span class="desination">Software Developer</span>
                            </div>
                        </div>
                        <div class="paid-candidate-box-extra">
                            <ul>
                                <li>Php</li>
                                <li>Android</li>
                                <li>Html</li>
                                <li class="more-skill bg-primary">+3</li>
                            </ul>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-paid-candidate bt-1">View Detail</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="paid-candidate-container">
                    <div class="paid-candidate-box">
                        <div class="dropdown">
                            <div class="btn-group fl-right">
                                <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu pull-right animated flipInX"><a href="#">Shortlist</a><a
                                        href="#">Send Message</a><a href="#">Dislike</a></div>
                            </div>
                        </div>
                        <div class="paid-candidate-inner--box">
                            <div class="paid-candidate-box-thumb"><img src="{{asset('img/client-4.jpg')}}"
                                    class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="paid-candidate-box-detail">
                                <h4>Nancy D. Walker</h4>
                                <span class="desination">PHP Developer</span>
                            </div>
                        </div>
                        <div class="paid-candidate-box-extra">
                            <ul>
                                <li>Php</li>
                                <li>Android</li>
                                <li>Html</li>
                                <li class="more-skill bg-primary">+3</li>
                            </ul>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-paid-candidate bt-1">View Detail</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="paid-candidate-container">
                    <div class="paid-candidate-box">
                        <div class="dropdown">
                            <div class="btn-group fl-right">
                                <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu pull-right animated flipInX"><a href="#">Shortlist</a><a
                                        href="#">Send Message</a><a href="#">Dislike</a></div>
                            </div>
                        </div>
                        <div class="paid-candidate-inner--box">
                            <div class="paid-candidate-box-thumb"><img src="{{asset('img/client-5.jpg')}}"
                                    class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="paid-candidate-box-detail">
                                <h4>Larry A. Sherrod</h4>
                                <span class="desination">Data Analytics</span>
                            </div>
                        </div>
                        <div class="paid-candidate-box-extra">
                            <ul>
                                <li>Php</li>
                                <li>Android</li>
                                <li>Html</li>
                                <li class="more-skill bg-primary">+3</li>
                            </ul>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-paid-candidate bt-1">View Detail</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="paid-candidate-container">
                    <div class="paid-candidate-box">
                        <div class="dropdown">
                            <div class="btn-group fl-right">
                                <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu pull-right animated flipInX"><a href="#">Shortlist</a><a
                                        href="#">Send Message</a><a href="#">Dislike</a></div>
                            </div>
                        </div>
                        <div class="paid-candidate-inner--box">
                            <div class="paid-candidate-box-thumb"><img src="{{asset('img/client-1.jpg')}}"
                                    class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="paid-candidate-box-detail">
                                <h4>George M. Johnson</h4>
                                <span class="desination">Project Manager</span>
                            </div>
                        </div>
                        <div class="paid-candidate-box-extra">
                            <ul>
                                <li>Php</li>
                                <li>Android</li>
                                <li>Html</li>
                                <li class="more-skill bg-primary">+3</li>
                            </ul>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-paid-candidate bt-1">View Detail</a>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="text-center"><a href="premium-candidate.html" class="btn btn-primary">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wp-process home-three">
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>How We Work</p>

                <h2>Our Work <span>Process</span></h2>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-search"></span></div>
                <div class="work-process-caption">
                    <h4>Search Job</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-mobile"></span></div>
                <div class="work-process-caption">
                    <h4>Find Job</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-profile-male"></span></div>
                <div class="work-process-caption">
                    <h4>Hire Employee</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 hidden-sm"><img src="{{asset('img/wp-iphone.png')}}" class="img-responsive" alt="" /></div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-layers"></span></div>
                <div class="work-process-caption">
                    <h4>Start Work</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-wallet"></span></div>
                <div class="work-process-caption">
                    <h4>Pay Money</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-happy"></span></div>
                <div class="work-process-caption">
                    <h4>Happy</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="call-to-act">
    <div class="container-fluid">
        <div class="col-md-6 col-sm-6 no-padd bl-dark">
            <div class="call-to-act-caption">
                <h2>We Are Expert In Web design and development</h2>

                <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo</h3>
                <a href="#" class="btn bat-call-to-act">Hire Us</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 no-padd gr-dark">
            <div class="call-to-act-caption">
                <h2>We Are Expert In Web design and development</h2>

                <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo</h3>
                <a href="#" class="btn bat-call-to-act">Join Us</a>
            </div>
        </div>
    </div>
</section>
<section class="brows-job-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>We found 477 matches jobs, you are watching 7 to 27</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('img/com-1.jpg')}}" class="img-responsive" alt="" /></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="job-detail.html">
                                        <h3>Digital Marketing Manager</h3>
                                    </a>

                                    <p><span>Autodesk</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>$750 - 800</span><span
                                            class="job-type cl-success bg-trans-success">Full Time</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="job-detail.html" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('img/com-2.jpg')}}" class="img-responsive" alt="" /></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="job-detail.html">
                                        <h3>Compensation Analyst</h3>
                                    </a>

                                    <p><span>Google</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>$810 - 900</span><span
                                            class="job-type bg-trans-warning cl-warning">Part Time</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="job-detail.html" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('img/com-3.jpg')}}" class="img-responsive" alt="" /></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="job-detail.html">
                                        <h3>Investment Banker</h3>
                                    </a>

                                    <p><span>Honda</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$800
                                            - 910</span><span
                                            class="job-type bg-trans-primary cl-primary">Freelancer</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="job-detail.html" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('img/com-4.jpg')}}" class="img-responsive" alt="" /></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="job-detail.html">
                                        <h3>Financial Analyst</h3>
                                    </a>

                                    <p><span>Microsoft</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>$580 - 600</span><span
                                            class="job-type bg-trans-success cl-success">Full Time</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="job-detail.html" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('img/com-5.jpg')}}" class="img-responsive" alt="" /></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="job-detail.html">
                                        <h3>Service Representative</h3>
                                    </a>

                                    <p><span>Autodesk</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>$800 - 900</span><span
                                            class="job-type bg-trans-denger cl-danger">Enternship</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="job-detail.html" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('img/com-6.jpg')}}" class="img-responsive" alt="" /></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="job-detail.html">
                                        <h3>Chief Executive Officer</h3>
                                    </a>

                                    <p><span>Google</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>$510 - 700</span><span
                                            class="job-type bg-trans-success cl-success">Full Time</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="job-detail.html" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('img/com-7.jpg')}}" class="img-responsive" alt="" /></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="job-detail.html">
                                        <h3>Administrative Manager</h3>
                                    </a>

                                    <p><span>Honda</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$700
                                            - 800</span><span class="job-type bg-trans-warning cl-warning">Part
                                            Time</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="job-detail.html" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="download-app" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="container">
        <div class="col-md-5 col-sm-5 hidden-xs"><img src="{{asset('img/iphone.png')}}" alt="iphone"
                class="img-responsive" />
        </div>
        <div class="col-md-7 col-sm-7">
            <div class="app-content">
                <h2>Download Our Best Apps</h2>
                <h4>Best oppertunity in your hand</h4>

                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                    posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui
                    non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>
                <a href="#" class="btn call-btn"><i class="fa fa-apple"></i>Download</a><a href="#"
                    class="btn call-btn"><i class="fa fa-android"></i>Download</a>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
@endsection