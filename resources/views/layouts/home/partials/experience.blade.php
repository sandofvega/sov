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
                <div class="timeline-dot"><h6>L</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Laravel Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Sahara Software & Technology</small>
                            </h6>
                            <h6>
                                <small>Jan 2018 - Present</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        {{--<p></p>--}}
                    </div>
                </div>
            </div>

            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>W</h6></div>
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
                        {{--<p></p>--}}
                    </div>
                </div>
            </div>
        </div>

        <div id="brands">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="brands-wrap">
                            <!--BRAND LOGO'S-->
                            <ul id="brands-list" class="clearfix">
                                @foreach($brands as $brand)
                                <li>
                                    <a href="{{ $brand->url }}" title="{{ ucfirst($brand->name) }}" target="_blank">
                                        <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>