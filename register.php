<?php /* Template Name: Register */ ?>

<?php get_header(); ?>

<?php
$google_form_url = get_field('google_form_url');
$registration_status = get_field('registration_status');
$registration_is_open = $registration_status === 'open';
?>

<main id="register" class="g-max-width-wrapper">
    <h1 class="g-page-title"><?= the_title(); ?></h1>

    <?php if (!$registration_is_open) { ?>
        <div role="alert" class="registration-closed">
            <h2>Registration is currently closed</h2>
            <p>Please contact us if you have any questions!</p>
        </div>
    <?php } ?>

    <p>To register your child, follow these steps:</p>

    <ol class="registration-steps">
        <li>
            <h2>Fill out the Registration Form</h2>
            <div class="g-well">
                <div class="g-well-body">

                    <?php if ($registration_is_open) { ?>
                        <a class="btn g-mb-4" href="<?= $google_form_url; ?>">Registration Form</a>
                    <?php } ?>
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
                    <?php get_template_part('template-parts/payment-options'); ?>
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