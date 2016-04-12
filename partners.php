<?php

// Page variable for header.php
$page = "partners";
include_once("includes/header.php");

?>

    <aside id="header-image" style="background-image: url(images/main1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="header-image-wrap">
                        <div class="header-image-intro">
                            <h2>The Bates Report<span></span></h2>
                            <h1>Partners</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <div id="main">

        <section>
            <div class="container">
                <div class="row">
                    <hr class="spacer spacer-xs">

                    <div class="col-md-12">
                        <div id="tab-feature-vertical" class="tab">
                            <ul class="resp-tabs-list hor_1">
                                <li><i class="tab-menu-icon ti-agenda"></i>Huntington Court Reporters</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <a href="http://www.huntingtoncr.com/"><img src="images/huntington_logo.jpg" alt="Image" class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Huntington Court Reporters & Transcription, Inc.offers web-based transcription services
                                                for Criminal Justice and Law Enforcement agencies throughout the United States. Huntington
                                                understands the commitment of law enforcement departments to individuals' confidentiality,
                                                and we pride ourselves on our three secured facilities and onsite transcription staffs for
                                                those agencies that request a secured facility. Most of our transcriptionists are Certified
                                                Shorthand Reporters and steno-transcriptionists, and all have undergone background checks
                                                and been fingerprinted.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer spacer-md"></div>
                    <!-- END Tabs -->

                </div>
            </div>
        </section>

        <section id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                        <h2 class="uppercase-heading-fm">Get In Touch</h2>
                        <p>To get in contact with me about general enquiries, please complete the form below. If you want to
                            hire me for any of my services, please refer to the <a href = "scheduleonline.php"> "schedule online"</a> section of this website.</p>
                        <div class="spacer spacer-xs"></div>
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" class="form-control input-lg text-center" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email address</label>
                                <input type="email" class="form-control input-lg text-center" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="message" class="sr-only">Message</label>
                                <textarea class="form-control input-lg text-center" id="message" placeholder="Message" rows="3" ></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include_once("includes/footer.php");?>