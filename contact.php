<!DOCTYPE html><!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html><![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html><![endif]-->
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <?php include('inc/header.php'); ?>
</head>
<body class="cssAnimate ct-headroom--scrollUpMenu">

<?php include ('inc/site_header.php'); ?>



<header id="home" data-stellar-background-ratio="0.3" data-height="230" data-type="parallax" data-background="images/top-main.jpg" data-background-mobile="images/top-main.jpg" class="ct-mediaSection">
    <div class="ct-breadcrumbs">
        <ul class="list-inline list-unstyled text-uppercase">
            <li><a href=""><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i>About us</li>
        </ul>
    </div>
</header>

<section class="ct-u-paddingTop80 ct-u-paddingBottom90">
    <div class="container">

            <div class="row">
            <div class="col-md-4">
                <div class="ct-textBox--small ct-u-backgroundGrey">
                    <ul class="list-unstyled ct-list--circleWithIcons ct-list--circleWithIcons-bordered">
                        <li><span class="ct-list-iconContainer"><i class="fa fa-map-marker"></i></span>
                            <h6 class="ct-u-marginBottom10">Address</h6>
                            <p>
                                No. 47, 2/3, Bankshall Street,
                                Colombo - 11, Sri Lanka.
                            </p>
                        </li>
                        <li><span class="ct-list-iconContainer"><i class="fa fa-phone"></i></span>
                            <h6 class="ct-u-marginBottom10">Phone</h6>
                            <p>+94 11 244 88 11 / +94 11 244 88 10</p>
                        </li>
                        <li><span class="ct-list-iconContainer"><i class="fa fa-print"></i></span>
                            <h6 class="ct-u-marginBottom10">Fax</h6>
                            <p>+94 11 244 60 49</p>
                        </li>

                        <li><span class="ct-list-iconContainer"><i class="fa fa-envelope"></i></span>
                            <h6 class="ct-u-marginBottom10">Email</h6><a href="#">info@hanaglobal.lk</a>
                        </li>

                    </ul>
                </div>
            </div>
                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.599239319035!2d79.84878031389584!3d6.938406594987009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2592031044659%3A0xa7b0eec4c8fee865!2s47+Bankshall+St%2C+Colombo+01100!5e0!3m2!1sen!2slk!4v1515131723713" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            <div class="col-md-4">
                <h4 class="ct-u-marginBottom30">Send Us a Message</h4>
                <div role="alert" class="successMessage alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">�</span></button><strong>Success!</strong>Congratulation, mission success
                </div>
                <div role="alert" class="errorMessage alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">�</span></button><strong>Danger!</strong>You did something wrong
                </div>
                <form action="" method="" class="validateIt ct-u-marginBottom30 ct-form ct-form-grey">
                    <div class="row">
                        <div class="col-md-12">
                            <input id="contact_name" data-error-message="Name" placeholder="Name" type="text" required="" name="field[]" class="form-control input--withBorder ct-u-marginBottom10 input-focusMotive" autocomplete="off">
                            <label for="contact_name" class="sr-only"></label>
                        </div>
                        <div class="col-md-12">
                            <input id="contact_email" data-error-message="Email" placeholder="Email" type="email" required="" name="field[]" class="form-control input--withBorder ct-u-marginBottom10 input-focusMotive">
                            <label for="contact_email" class="sr-only"></label>
                        </div>
                        <div class="col-md-12">
                            <input id="contact_email" data-error-message="Email" placeholder="Subject" type="email" required="" name="field[]" class="form-control input--withBorder ct-u-marginBottom10 input-focusMotive">
                            <label for="contact_email" class="sr-only"></label>
                        </div>
                        <div class="col-md-12">
                            <input id="contact_email" data-error-message="Email" placeholder="Phone" type="email" required="" name="field[]" class="form-control input--withBorder ct-u-marginBottom10 input-focusMotive">
                            <label for="contact_email" class="sr-only"></label>
                        </div>
                        <div class="col-md-12">
                            <textarea id="contact_message" data-error-message="Message is required" placeholder="Message" rows="8" required="" name="field[]" title="Message" class="form-control input--withBorder ct-u-marginBottom20 input-focusMotive ct-u-marginBottom20"></textarea>

                        </div>


                    </div>
                      <button class="btn btn-primary btn-lg text-uppercase">send message</button>
                </form>
            </div>
        </div>
    </div>
</section>





<?php include ('inc/site_footer.php') ?>
</div>
<?php include ('inc/footer_js.php') ?>


<!-- end switcher -->
</body>
</html>