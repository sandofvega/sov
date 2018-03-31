@extends('layouts.home.master')

@section('title', 'Web Developer')

@section('meta-keywords', 'web developer')

@section('content')
    <!--==========================================
                HEADER
    ===========================================-->
    <header id="home">
        <nav id="theMenu" class="menu">

            <!--MENU-->
            <div id="menu-options" class="menu-wrap">

                <!--PERSONAL LOGO-->
                <div class="logo-flat">
                    <img alt="personal-logo" class="img-responsive" src="{{ url('public/img/sand.jpg') }}">
                </div>
                <br>

                <!--OPTIONS-->
                <a href="#home"><i class="title-icon icon-user"></i>Home</a>
                <a href="#about"><i class="title-icon icon-dashboard"></i>About</a>
                <a href="#skills"><i class="title-icon icon-sliders"></i>Skills</a>
                <a href="#experience"><i class="title-icon icon-suitcase"></i>Experience</a>
                <a href="#interest"><i class="title-icon icon-heart"></i>Interest</a>
                <a href="#contact"><i class="title-icon icon-envelope"></i>Contact</a>
            </div>

            <!-- MENU BUTTON -->
            <div id="menuToggle">
                <div class="toggle-normal">
                    <i class="icon-menu"></i>
                </div>
            </div>
        </nav>

        <div class="header-background section">
            <div id="v-card-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <!-- V-CARD -->
                            <div id="v-card" class="card">

                                <!-- PROFILE PICTURE -->
                                <div id="profile" class="right">
                                    <img alt="profile-image" class="img-responsive"
                                         src="{{ url('public/img/profile.jpg') }}">
                                    <div class="slant"></div>
                                </div>

                                <div class="card-content">

                                    <!-- NAME & STATUS -->
                                    <div class="info-headings">
                                        <h4 class="text-uppercase left">Yasin Arafat</h4>
                                        <h6 class="text-capitalize left">Web Developer</h6>
                                    </div>

                                    <!-- CONTACT INFO -->
                                    <div class="infos">
                                        <ul class="profile-list">
                                            <li class="clearfix">
                                                <span class="title"><i class="icon-email"></i></span>
                                                <span class="content">yasin@sandofvega.com</span>
                                            </li>
                                            <li class="clearfix">
                                                <span class="title"><i class="icon-skype"></i></span>
                                                <span class="content">sandofvega</span>
                                            </li>
                                            <li class="clearfix">
                                                <span class="title"><i class="icon-place"></i></span>
                                                <span class="content">Dhaka, Bangladesh</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!--LINKS-->
                                    <div class="links">
                                        <!-- FACEBOOK-->
                                        <a href="https://www.facebook.com/sandofvega" target="_blank" id="first_one"
                                           class="social btn-floating indigo">
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <!-- GITHUB-->
                                        <a href="https://github.com/sandofvega" target="_blank"
                                           class="social btn-floating black">
                                            <i class="icon-github"></i>
                                        </a>
                                        <!-- TWITTER-->
                                        <a href="https://twitter.com/sandofvega" target="_blank"
                                           class="social btn-floating blue">
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <!-- Google Plus-->
                                        <a href="https://plus.google.com/+SandOfVega" target="_blank"
                                           class="social btn-floating blue darken-3">
                                            <i class="icon-google-plus red"></i>
                                        </a>
                                        <!-- LINKEDIN-->
                                        <a href="https://www.linkedin.com/in/sandofvega/" target="_blank"
                                           class="social btn-floating blue darken-3">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                        <!-- Pintarest-->
                                        <a href="https://www.pinterest.com/sandofvega/" target="_blank"
                                           class="social btn-floating red">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!--==========================================
                       ABOUT
    ===========================================-->
    <div id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- DETAILS -->
                    <div id="about-card" class="card">
                        <div class="card-content">
                            <!-- ABOUT PARAGRAPH -->
                            <p>
                                Hello! I’m Yasin. Web Developer with over 1 year of experience
                                specializing in back end development. Experienced with all stages of the
                                development cycle for dynamic web projects. Having knowledge
                                including HTML5, CSS, CSS3, SASS, LESS, JSON, XML, JavaScript,
                                JQuery, Angular JS. Strong background in management and leadership.
                            </p>
                        </div>

                        <!-- BUTTONS -->
                        <div id="about-btn" class="card-action">
                            <div class="about-btn">
                                <!-- DOWNLOAD CV BUTTON -->
                                <a href="{{ url('public/storage/home/YasinCV.pdf') }}" target="_blank" class="btn waves-effect">Download CV</a>
                                <!-- CONTACT BUTTON -->
                                <a href="#contact" class="btn waves-effect">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==========================================
                       SKILLS
    ===========================================-->
    <section id="skills" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><i class="title-icon fa fa-sliders"></i>Skills</h4>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="skills-card" class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <!-- FIRST SKILL SECTION -->
                                    <div class="skills-title">
                                        <h6 class="text-center">Professional</h6>
                                    </div>
                                    <!-- FIRST SKILL BAR -->
                                    <div class="skillbar" data-percent="90%">
                                        <div class="skillbar-title"><span>HTML5</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">90%</div>
                                    </div>
                                    <!-- SECOND SKILL BAR  -->
                                    <div class="skillbar" data-percent="90%">
                                        <div class="skillbar-title"><span>CSS3</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">90%</div>
                                    </div>
                                    <!-- THIRD SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>jQuery</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                    <!-- FOURTH SKILL BAR  -->
                                    <div class="skillbar" data-percent="68%">
                                        <div class="skillbar-title"><span>PHP</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">68%</div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <!-- SECOND SKILL SECTION -->
                                    <div class="skills-title">
                                        <h6 class="text-center">Personal</h6>
                                    </div>
                                    <!-- FIRST SKILL BAR -->
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title"><span>Communication</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                    <!-- SECOND SKILL BAR  -->
                                    <div class="skillbar" data-percent="60%">
                                        <div class="skillbar-title"><span>Teamwork</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">60%</div>
                                    </div>
                                    <!-- THIRD SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>Creativity</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                    <!-- FOURTH SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>Dedication</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <!-- THIRD SKILL SECTION -->
                                    <div class="skills-title">
                                        <h6 class="text-center">Software</h6>
                                    </div>
                                    <!-- FIRST SKILL BAR -->
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title"><span>Adobe Illustrator</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                    <!-- SECOND SKILL BAR  -->
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-title"><span>Adobe InDesign</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                    <!-- THIRD SKILL BAR  -->
                                    <div class="skillbar" data-percent="60%">
                                        <div class="skillbar-title"><span>PHP Storm</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">60%</div>
                                    </div>
                                    <!-- FOURTH SKILL BAR  -->
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title"><span>Dev Console</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==========================================
                       EXPERIENCE
    ===========================================-->
    <section id="experience" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><i class="title-icon icon-suitcase"></i>Experience</h4>
            </div>

            <div id="timeline-experience">
                <!-- FIRST TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot"><h6>D</h6></div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">Laravel Developer</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>Sahara Soft</small>
                                </h6>
                                <h6>
                                    <small>Jan 2018 - Present</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                                I started my designing carrier here, spent tow years learning and working
                                in various designing aspects..
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SECOND TIMELINE -->
                <div class="timeline-block">
                    <!-- DOT -->
                    <div class="timeline-dot"><h6>F</h6></div>
                    <!-- TIMELINE CONTENT -->
                    <div class="card timeline-content">
                        <div class="card-content">
                            <!-- TIMELINE TITLE -->
                            <h6 class="timeline-title">Web Researcher</h6>
                            <!-- TIMELINE TITLE INFO -->
                            <div class="timeline-info">
                                <h6>
                                    <small>GIT Desk</small>
                                </h6>
                                <h6>
                                    <small>Jan 2016 - June 2016</small>
                                </h6>
                            </div>
                            <!-- TIMELINE PARAGRAPH -->
                            <p>
                                I started my frontend carrier here, spent tow years learning and working
                                in various frontend aspects. I worked on about 40+ projects local and online.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==========================================
                       INTEREST
    ===========================================-->
    <section id="interest" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><i class="title-icon icon-heart"></i>Interest</h4>
            </div>

            <div id="interest-card" class="card">
                <!--INTEREST TEXT-->
                <div class="card-content">
                    <p>
                        First of all I love music, country music is my favorite. Love watching
                        football, movies and playing games with my buddies. I spend quite a lot of time
                        in traveling and photography, these keeps me fresh for working environment.
                        I also spend time volunteering at the Red Cross in London, UK each month.
                    </p>
                </div>

                <!--INTEREST ICONS-->
                <div class="row no-gutters">

                    <!--INTEREST ICON ONE-->
                    <div class="col-md-2 col-sm-4 col-xs-6  box text-center">
                        <div class="interest-icon">
                            <i class="icon-music"></i>
                            <span>Music</span>
                        </div>
                    </div>
                    <!--INTEREST ICON TWO-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon-even">
                            <i class="icon-gamepad"></i>
                            <span>Gaming</span>
                        </div>
                    </div>
                    <!--INTEREST ICON THREE-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon">
                            <i class="icon-camera"></i>
                            <span>Photography</span>
                        </div>
                    </div>
                    <!--INTEREST ICON FOUR-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon-even">
                            <i class="icon-football"></i>
                            <span>Football</span>
                        </div>
                    </div>
                    <!--INTEREST ICON FIVE-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon">
                            <i class="icon-plane"></i>
                            <span>Traveling</span>
                        </div>
                    </div>
                    <!--INTEREST ICON SIX-->
                    <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                        <div class="interest-icon-even">
                            <i class="icon-film"></i>
                            <span>Movies</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--==========================================
                      CONTACT
    ===========================================-->
    <section id="contact" class="section">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="section-title">
                <h4 class="text-uppercase text-center"><i class="title-icon icon-envelope"></i>Contact</h4>
            </div>
            <div class="row">
                <div id="contact-card" class="col-md-12 col-sm-12 col-xs-12">
                    <!-- CONTACT FORM -->
                    <div class="card">
                        <div class="card-content">
                            <form id="contact-form" name="c-form">
                            {{ csrf_field() }}
                            <!-- NAME -->
                                <div class="input-field">
                                    <input id="name" type="text" class="validate" name="name" required>
                                    <label for="name">Name</label>
                                </div>
                                <!--SUBJECT-->
                                <div class="input-field">
                                    <input id="subject" type="text" class="validate" name="subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                                <!--EMAIL-->
                                <div class="input-field">
                                    <input id="email" type="email" class="validate" name="email" required>
                                    <label for="email">Email</label>
                                </div>
                                <!--MESSAGE-->
                                <div class="input-field">
                                <textarea id="message" class="materialize-textarea" name="message"
                                          required></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <!-- SEND BUTTON -->
                                <div class="contact-send">
                                    <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                            class="btn waves-effect">Send
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!--FORM LOADER-->
                        <div id="form-loader" class="progress is-hidden">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection