<?php
// Include the "quotation" token to validate requests.
require realpath(__DIR__) .'/../../php/quote.php';
?>

<section class="quotation-form">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-mg-8 col-lg-8 col-mg-offset-2 col-lg-offset-2">
                <h1>Get Your Development Kit Now</h1>
                <p><em>Please fill out this form to request a quotation for a development kit.</em></p>

                <form class="form" name="quotation" action="/php/quote.php" method="post">

                    <!-- First name -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required autofocus>
                    </div>

                    <!-- Last name -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
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
                        <input type="number" min="1" class="form-control" name="num_units" placeholder="# of units required" required>
                    </div>

                    <!-- Phone number -->
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone #" required>
                        <div class="error">
                            Please enter a valid phone number.
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="" placeholder="Email address" required>
                    </div>

                    <!-- Website -->
                    <div class="form-group">
                        <input type="url" class="form-control" name="website" value="" placeholder="Website">
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
