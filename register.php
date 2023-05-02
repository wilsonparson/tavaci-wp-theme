<?php /* Template Name: Register */ ?>

<?php get_header(); ?>
<main id="register" class="g-max-width-wrapper">
    <h1 class="g-page-title"><?= the_title(); ?></h1>
    <p>To register your child, follow these steps:</p>

    <ol class="registration-steps">
        <li>
            <h2>Fill out the Registration Form</h2>
            <div class="g-well">
                <div class="g-well-body">
                    <a class="btn g-mb-4" href="<?= get_field('google_form_url'); ?>">Registration Form</a>
                    <p><strong>Please make sure to fill out the entire form!</strong></p>
                    <p>You'll need to scroll all the way to the bottom and press the Submit button. Once you submit the form, you'll receive a confirmation email that we received your submission.
                    </p>
                </div>
            </div>
        </li>

        <li>
            <h2>Pay the $25 fee</h2>
            <div class="g-well">
                <div class="g-well-body">
                    <p>You have two options for paying the $25 registration fee:</p>
                    <ul class="payment-options">
                        <li>
                            <h3 class="payment-option-title">Venmo</h3>
                            <code class="venmo-username">@Megan-Owen-2</code>
                        </li>
                        <li>
                            <h3 class="payment-option-title">Check</h3>
                            <address>
                                Megan Owen<br>
                                775 W 2250 S<br>
                                Perry, UT 84302
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        <li>
            <h2>Schedule costume fitting</h2>
            <div class="g-well">
                <div class="g-well-body">
                    <p>Please contact Shalisa Elegante at <a href="tel:435-225-2962">435-225-2962</a> to get your child fitted for their concert costume.</p>
                </div>
            </div>
        </li>

        <li>
            <h2>You're done! 💃</h2>
        </li>

    </ol>
</main>
<?php get_footer(); ?>