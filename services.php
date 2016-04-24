<?php

// Page variable for header.php
$page = "services";
include_once("includes/header.php");

?>

    <aside id="header-image" style="background-image: url(images/main1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="header-image-wrap">
                        <div class="header-image-intro">
                            <h2>The Bates Report<span></span></h2>
                            <h1>Services</h1>
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
                                <li><i class="tab-menu-icon ti-agenda"></i>Depositions</li>
                                <li><i class="tab-menu-icon ti-notepad"></i>Sworn Statements</li>
                                <li><i class="tab-menu-icon ti-user"></i>Hearings &amp Arbitrations</li>
                                <li><i class="tab-menu-icon ti-pencil"></i>Conference Rooms</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="row">
                                                <h3 class="uppercase-heading-fm text-center">Get In Touch</h3>
                                                <p id="services_depositions_return_message">The average prices for this service are listed to the right, if you have any questions, please complete this form. If you want to
                                                    hire me for any of my services, please refer to the <a href = "scheduleonline.php"> "schedule online"</a> section of this website.</p>
                                                <div class="spacer spacer-xs"></div>
                                                <form method="post" action="scripts/contact_mail.php" id="services-form-depositions">
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
                                                        <textarea class="form-control input-lg text-center" name="messageDepositions" id="messageDepositions" placeholder="Message" rows="3" ></textarea>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                                                </form>
                                            </div></div>
                                        <div class="col-md-6">
                                            <h3>Court Reporting Rates 2015</h3>
                                            <p><b>Court Reporter Appearance Fee (in addition to page rate)(first hour): $40.00</b></p>
                                            <p>Page rate, lay witness $4.15</p>
                                            <p>Page rate, medium/business $4.25</p>
                                            <p>Page rate, doctor/expert/medical $5.00</p>
                                            <p>Page rate, certified copies $2.25</p>
                                            <p>Page rate, rough ASCII $2.50</p>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="row">
                                                <h3 class="uppercase-heading-fm text-center">Get In Touch</h3>
                                                <p id="services_statements_return_message">The average prices for this service are listed to the right, if you have any questions, please complete this form. If you want to
                                                    hire me for any of my services, please refer to the <a href = "scheduleonline.php"> "schedule online"</a> section of this website.</p>
                                                <div class="spacer spacer-xs"></div>
                                                <form method="post" action="scripts/contact_mail.php" id="services-form-statements">
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
                                                        <textarea class="form-control input-lg text-center" name="messageStatements" id="messageStatements" placeholder="Message" rows="3" ></textarea>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Court Reporting Rates 2015</h3>
                                            <p><b>Court Reporter Appearance Fee (in addition to page rate)(first hour): $40.00</b></p>
                                            <p><b>(Each hour thereafter): $15.00</b></p>
                                            <p>Page rate: To be confirmed.</p>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="row">
                                                <h3 class="uppercase-heading-fm text-center">Get In Touch</h3>
                                                <p id="services_hearings_return_message">The average prices for this service are listed to the right, if you have any questions, please complete this form. If you want to
                                                    hire me for any of my services, please refer to the <a href = "scheduleonline.php"> "schedule online"</a> section of this website.</p>
                                                <div class="spacer spacer-xs"></div>
                                                <form method="post" action="scripts/contact_mail.php" id="services-form-hearings">
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
                                                        <textarea class="form-control input-lg text-center" name="messageHearings" id="messageHearings" placeholder="Message" rows="3" ></textarea>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                                                </form>
                                            </div> </div>
                                        <div class="col-md-6">
                                            <h3>Court Reporting Rates 2015</h3>
                                            <p><b>Court Reporter Appearance Fee (in addition to page rate)(first hour): $50.00</b></p>
                                            <p><b>(Each hour thereafter): $20.00</b></p>
                                            <p>Page rate: $8.00 - $10.00.</p>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <h3 class="uppercase-heading-fm text-center">Get In Touch</h3>
                                                <p id="services_conference_return_message">The average prices for this service are listed to the right, if you have any questions, please complete this form. If you want to
                                                    hire me for any of my services, please refer to the <a href = "scheduleonline.php"> "schedule online"</a> section of this website.</p>
                                                <div class="spacer spacer-xs"></div>
                                                <form method="post" action="scripts/contact_mail.php" id="services-form-conference">
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
                                                        <textarea class="form-control input-lg text-center" name="messageConference" id="messageConference" placeholder="Message" rows="3" ></textarea>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Court Reporting Rates 2015</h3>
                                            <p>Provided by Huntington Court Reporters:</p>
                                            <p>"We provide conference rooms at our Natchitoches office. There is a charge of
                                                $25.00 per hour with a two-hour minimum."</p>
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

<?php include_once("includes/footer.php");?>