<?php
// Include the "quotation" token to validate requests.
require realpath(__DIR__) .'/../../php/quote.php';
?>
    <section class="quotation-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-mg-8 col-lg-8 col-mg-offset-2 col-lg-offset-2">
                    <h1 class="page-title">
                        Work with Heddoko
                        <span>Do you have a development project in mind?<br> Would you like to test our product?<br> Let us help you put your ideas in motion.</span>
                    </h1>
                    <p class="readable-column">
                    Please describe your project in the form below – our sales team will contact you shortly.
                    <br><br>
                    Once our sales rep gets in touch with you, we can get you started with a Demo Package. Each Demo Package contains a Quick Start guide, smart compression suit, motion tracking sensors, battery pack, USB charger and cable, and demo software.
                    <br><br>
                    (Note: Due to demand, current lead time for shipping is 4‐6 weeks)
                    </p>
                    <form class="form" name="quotation" action="/php/quote.php" method="post">
                        <!-- First name -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required autofocus>
                        </div>
                        <!-- Last name -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="" placeholder="Email address" required>
                        </div>
                        <!-- Organization -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="organization" placeholder="Organization" required>
                        </div>
                        <!-- Title -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <textarea name="application" id="application" cols="30" rows="10" class="form-control" placeholder="Please share with us what you have in mind for the Heddoko solution."></textarea>
                        </div>
                        <!-- Phone number -->
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone # (optional)">
                            <div class="error">
                                Please enter a valid phone number.
                            </div>
                        </div>
                        <!-- Website -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="website" value="" placeholder="Website (optional)">
                        </div>
                        <!-- Submit button -->
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-default" value="Submit">
                        </div>
                        <input type="hidden" name="token" value="<?= Quote::getToken() ?>">
                    </form>
                    <img src="../images/ajax-loader.gif" class="ajax">
                    <div class="errormessage">
                        We could not process your request. Please try again later.
                    </div>
                    <div class="successmessage">
                        Thank you for your inquiry. A sales representative will get in touch with you very soon.
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
