<?php

// Page variable for header.php
$page = "downloads";
include_once("includes/header.php");

?>

    <aside id="header-image" style="background-image: url(images/main1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="header-image-wrap">
                        <div class="header-image-intro">
                            <h2>The Bates Report<span></span></h2>
                            <h1>Downloads</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <div id="main">

        <section>
            <div class="container">
                <!-- FEATURE -->
                <div class="row feature-2">
                    <div class="spacer spacer-sm"></div>

                    <h2 class="uppercase-heading-fm text-center">Business Cards</h2>
                    <div class="spacer spacer-xs"></div>

                    <div class="col-md-6 col-sm-6 feature-item">
                        <h3 class="text-center feature-title h4 text-uppercase">Side One</h3>
                        <img src="files/side1.jpg" alt="Image" class="img-responsive text-center">

                        <div class="spacer spacer-lg"></div>

                        <p class="text-center"><a href="files/side1.jpg" class="btn btn-primary btn-sm" download>Download</a></p>

                    </div>

                    <div class="col-md-6 col-sm-6 feature-item">
                        <h3 class="text-center feature-title h4 text-uppercase">Side Two</h3>
                        <img src="files/side2edit.jpg" alt="Image" class="img-responsive">

                        <div class="spacer spacer-sm"></div>

                        <p class="text-center"><a href="files/side2.jpeg" class="btn btn-primary btn-sm" download>Download</a></p>

                    </div>

                    <h2 class="uppercase-heading-fm text-center">Court Reporting Fees</h2>

                    <div class="spacer spacer-sm"></div>

                    <div class="col-md-6 col-sm-6 feature-item">
                        <h3 class="text-center feature-title h4 text-uppercase">The Bates Report Rates</h3>
                        <p class="text-center feature-description">A comprehensive listing of all of my services and the prices I charge. Please note the 10% discount you will recieve from being a customer of The Bates Report for networked services.</p>
                        <p class="text-center"><a href="files/THE%20BATES%20REPORT_RATES.docx" class="btn btn-primary btn-sm" download>Download</a></p>
                    </div>
                    <div class="col-md-6 col-sm-6 feature-item">
                        <h3 class="text-center feature-title h4 text-uppercase">Huntington Deposition Networking Rates</h3>
                        <p class="text-center feature-description">A list of all services offered my Huntington with all coverage areas included towards the bottom of the document. For pricing enquiries about videographers and conference rooms, download this. </p>
                        <p class="text-center"><a href="files/HCR_2015_DEPOSITION_NETWORKING_RATE_SHEET.pdf" class="btn btn-primary btn-sm" download>Download</a></p>
                    </div>

                    <h2 class="uppercase-heading-fm text-center">Scheduling Forms</h2>

                    <div class="spacer spacer-sm"></div>

                    <div class="col-md-6 col-sm-6 feature-item">
                        <h3 class="text-center feature-title h4 text-uppercase">Bates Report Charge Form</h3>
                        <p class="text-center feature-description">If you want to download, fill out a charge form and send it to be, instead of completing the <a href = "scheduleonline.php"> online scheduling form </a> then this is the download for you. </p>
                        <p class="text-center"><a href="files/BatesReportCharge.pdf" class="btn btn-primary btn-sm" download>Download</a></p>
                    </div>

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
                        <form method="post" action="scripts/contact_mail.php" id="contact-form">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" class="form-control input-lg text-center" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email address</label>
                                <input type="email" class="form-control input-lg text-center" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="message" class="sr-only">Message</label>
                                <textarea class="form-control input-lg text-center" name="message" id="message" placeholder="Message" rows="3" ></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include_once("includes/footer.php");?>