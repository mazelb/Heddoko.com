<?php
// Include the "quotation" token to validate requests.
require realpath(__DIR__) .'/../../php/quote.php';
?>
    <section class="quotation-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-mg-8 col-lg-8 col-mg-offset-2 col-lg-offset-2">
                    <h1>Request A Quote</h1>
                    <p>Interested in ordering a Development Kit?<br><br> Each Kit ships within 4‐6 weeks and contains a Quick Start Guide, smart compression suit, battery pack, motion‐ tracking sensors, and USB charger and cable. Please fill out the form below to get a quote – our sales team will contact you shortly.</p>
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
                        <!-- Units required -->
                        <div class="form-group">
                            <select name="num_units" class="form-control company-size" placeholder="Company Size" id="company_size" required>
                                <option value=""></option>
                                <option value="myself only">Myself only</option>
                                <option value="2-10">2-10</option>
                                <option value="11-50">11-50</option>
                                <option value="51-200">51-200</option>
                                <option value="201-500">201-500</option>
                                <option value="501-1000">501-1000</option>
                                <option value="1001-5000">1001-5000</option>
                                <option value="5001-10000">5001-10000</option>
                                <option value="10001+">10001+</option>
                            </select>
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
