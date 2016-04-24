<?php

// Page variable for header.php
$page = "index";
include_once("includes/header.php");

?>

			<aside id="header-image" style="background-image: url(images/main1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="header-image-wrap">
								<div class="header-image-intro">
										<h2>Court Reporting In The State of Louisiana<span></span></h2>
										<h1>The Bates Report</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>

			<div id="main">

				<div id = "feature" style="margin-top: -50px; padding-bottom: 20px">
					<div class="container">
						<div class="col-md-8 col-md-offset-2 text-center lead-wrap">
							<p> The Bates Report is a State Certified court reporting service dedicated to professional, reliable service for all of my customers. <p>
                            <p> The Bates Report cuts out the middleman and gives one-on-one service to clients.  I will respond to you and your staff directly instead of spending time and money on layers of management.
                                I am simply easier to deal with than a national court reporting firm, and I deliver the same product.</p>
						</div>
					</div>
				</div>

                <section>
                    <div class="container">
                        <!-- FEATURE -->
                        <div class="row feature-2">
                            <div class="spacer spacer-md"></div>

                            <h2 class="uppercase-heading-fm text-center">Services</h2>
                            <div class="spacer spacer-xs"></div>

                            <p class = "col-md-8 col-md-offset-2 text-center ">Brief descriptions of the services I offer are listed here. For more information about prices, please click on "read more" to see more details or <a href="downloads.php">download </a> the full document (depositions) with all details included.</P>

                            <div class="spacer spacer-xs"></div>


                            <div class="col-md-4 col-sm-6 feature-item">
                                <span id="feature-icon-1" class="feature-icon circle"><i class="ti-agenda"></i></span>
                                <h3 class="text-center feature-title h4 text-uppercase">Depositions</h3>
                                <p class="text-center"><a id="feature-button-1" data-target="feature-icon-1" href="services.php#tab-feature-vertical1" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            <div class="col-md-4 col-sm-6 feature-item">
                                <span id="feature-icon-2" class="feature-icon circle"><i class="ti-notepad"></i></span>
                                <h3 class="text-center feature-title h4 text-uppercase">Sworn Statements</h3>
                                <p class="text-center"><a id="feature-button-2" data-target="feature-icon-2" href="services.php#tab-feature-vertical2" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>

                            <div class="clearfix visible-sm-block"></div>

                            <div class="col-md-4 col-sm-6 feature-item">
                                <span id="feature-icon-3" class="feature-icon circle"><i class="ti-headphone"></i></span>
                                <h3 class="text-center feature-title h4 text-uppercase">Hearings</h3>
                                <p class="text-center"><a id="feature-button-3" data-target="feature-icon-3" href="services.php#tab-feature-vertical3" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            <div class="col-md-4 col-md-offset-2 col-sm-6 feature-item">
                                <span id="feature-icon-4" class="feature-icon circle"><i class="ti-user"></i></span>
                                <h3 class="text-center feature-title h4 text-uppercase">Arbitrations</h3>
                                <p class="text-center"><a id="feature-button-4" data-target="feature-icon-4" href="services.php#tab-feature-vertical3" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            <div class="col-md-4 col-sm-6 feature-item">
                                <span id="feature-icon-5" class="feature-icon circle"><i class="ti-pencil"></i></span>
                                <h3 class="text-center feature-title h4 text-uppercase">Conference Rooms</h3>
                                <p class="text-center"><a id="feature-button-5" data-target="feature-icon-5" href="services.php#tab-feature-vertical4" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            <div class="spacer spacer-sm"></div>

                        </div>
                    </div>
                </section>

                <section id="feature">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center" >
                                <h2 class="uppercase-heading-fm">Get In Touch</h2>
                                <p id="contact_return_message">To get in contact with me about general enquiries, please complete the form below. If you want to
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

                <section>
                    <div class="spacer spacer-md"></div>
                    <div class="container">
                        <h2 class="uppercase-heading-fm text-center">Coverage</h2>
                        <div class="col-md-8 col-md-offset-2 text-center lead-wrap">
                            <p>The Bates Report serves all of Louisiana.  I am based in Shreveport and will travel to suit. </p>
                        </div>
                    </div>
                </section>

<?php include_once("includes/footer.php");?>