<?php

// Page variable for header.php
$page = "schedule";
include_once("includes/header.php");

?>

    <aside id="header-image" style="background-image: url(images/main1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="header-image-wrap">
                        <div class="header-image-intro">
                            <h2>The Bates Report<span></span></h2>
                            <h1>Schedule Online</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <div id="main">

        <div class="spacer spacer-sm"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ">
                    <p>Thank you for considering my services, if you fill out the form below I will endeavour to get back to you shortly. <br> </p>
                </div>
            </div>
        </div>

        <div class="spacer spacer-sm"></div>

        <section>
            <div class="container">

                <div class="row">

                    <div class="col-md-8">

                        <form action="#" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Email</label>
                                    <input placeholder="Name *" id="name" type="text" class="form-control input-lg">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input placeholder="Email *" id="email" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone" class="sr-only">Phone Number</label>
                                    <input placeholder="Phone Number *" id="phone" type="number" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="altPhone" class="sr-only">Alternative Phone Number</label>
                                    <input placeholder="Alternative Phone Number" id="altPhone" type="number" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address" class="sr-only">Address</label>
                                    <input placeholder="Address" id="address" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="city" class="sr-only">City</label>
                                    <input placeholder="City" id="city" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="state" class="sr-only">State</label>
                                    <input placeholder="State" id="state" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service" class="sr-only">Service</label>
                                    <select id="service" class="form-control input-lg">
                                        <option value="0">Select Service</option>
                                        <option value="1">Depositions</option>
                                        <option value="2">Sworn Statements</option>
                                        <option value="3">Hearings &amp Arbitrations</option>
                                        <option value="4">Conference Room</option>
                                        <option value="5">Legal Videography</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="attorneyName" class="sr-only">Attorneys Name</label>
                                    <input placeholder="Attorneys Name" id="attorneyName" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lawFirmName" class="sr-only">Law Firm Name</label>
                                    <input placeholder="Law Firm Name" id="lawFirmName" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="caseName" class="sr-only">Case Name</label>
                                    <input placeholder="Case Name" id="caseName" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-9 col-xs-9">
                                <div class="form-group">
                                    <label for="depOne" class="sr-only">Deponent One</label>
                                    <input placeholder="Deponent One" id="depOne" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-3  col-xs-3">
                                <div class="form-group">
                                    <label for="depOneTime" class="sr-only">Deponent One Time</label>
                                    <input placeholder="Time" id="depOneTime" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-9 col-xs-9">
                                <div class="form-group">
                                    <label for="depTwo" class="sr-only">Deponent Two</label>
                                    <input placeholder="Deponent Two" id="depTwo" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-3  col-xs-3">
                                <div class="form-group">
                                    <label for="depTwoTime" class="sr-only">Deponent Two Time</label>
                                    <input placeholder="Time" id="depTwoTime" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-9 col-xs-9">
                                <div class="form-group">
                                    <label for="depThree" class="sr-only">Deponent Three</label>
                                    <input placeholder="Deponent Three" id="depThree" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-3  col-xs-3">
                                <div class="form-group">
                                    <label for="depThreeTime" class="sr-only">Deponent Three Time</label>
                                    <input placeholder="Time" id="depThreeTime" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-9 col-xs-9">
                                <div class="form-group">
                                    <label for="depFour" class="sr-only">Deponent Four</label>
                                    <input placeholder="Deponent Four" id="depFour" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-3  col-xs-3">
                                <div class="form-group">
                                    <label for="depFourTime" class="sr-only">Deponent Four Time</label>
                                    <input placeholder="Time" id="depFourTime" type="text" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comments" class="sr-only">Further Information</label>
                                    <textarea placeholder="Comments" id="comments" class="form-control input-lg" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="dateOfService" >Date of Service</label>
                                    <input placeholder="Date of Service" id="dateOfService" type="date" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="dateOfTrial">Date of Trial</label>
                                    <input placeholder="Date of Trial" id="dateOfTrial" type="date" class="form-control input-lg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="videographerNeeded">Do you need a Videographer?</label>
                                    <select id="videographerNeeded" class="form-control input-lg">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-lg " value="Send">

                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="col-md-4">
                        <h3>Need Help?</h3>
                        <p>If filling out this form is not possible for any reason at all, or you prefer to send me a direct message, please use the email address provided below.</p>
                        <p>
                            <a href="#">BatesReport@gmail.com</a>
                        </p>
                    </div>

                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p> Please note that the fields marked with a star (*) are mandatory and that the submission of this form does not create an attorney-client relationship. Do not include confidential or sensitive information with your submission.<p>
                        </div>
                    </div>
                </div>

                <div class="spacer spacer-sm"></div>

            </div>
        </section>

<?php include_once("includes/footer.php");?>