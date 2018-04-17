<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.8/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2017 07:39:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='<?php echo base_url('assets/admin/fonts.googleapis.com/css13b7.css?family=Open+Sans:400,300,600,700') ?>' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets/admin/css/nifty.min.css') ?>" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url('assets/admin/css/demo/nifty-demo-icons.min.css') ?>" rel="stylesheet">



    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url('assets/admin/css/demo/nifty-demo.min.css') ?>" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/magic-check/css/magic-check.min.css') ?>" rel="stylesheet">






    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url('assets/admin/plugins/pace/pace.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/admin/plugins/pace/pace.min.js') ?>"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="<?php echo base_url('assets/admin/js/jquery.min.js') ?>"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php  echo base_url('assets/admin/js/bootstrap.min.js') ?>"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url('assets/admin/js/nifty.min.js') ?>"></script>






    <!--=================================================-->

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/bg-images.js') ?>"></script>


<style media="screen">
 .panel-body {
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0,0,0,.15);
}

.cls-container {
    background-color: #9ac1f3;
    text-align: center;
}

</style>

    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>

<div id="container" class="cls-container">




  <!-- LOGIN FORM -->
  <!--===================================================-->
  <div class="cls-content">

      <div class="cls-content-sm panel">
          <div class="panel-body">
              <div class="mar-ver pad-btm">
                  <h1 class="h3">Account Login</h1>
                  <p>Sign In to your account</p>
              </div>
              <form  enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksilogin') ?>">
                  <div class="form-group">
                      <input type="text" class="form-control" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                  <!-- <div class="checkbox pad-btm text-left">
                      <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
                      <label for="demo-form-checkbox">Remember me</label>
                  </div> -->
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
              </form>


          <div class="pad-all">
              <a href="pages-password-reminder.html" class="btn-link mar-rgt"></a>
              <a href="pages-register.html" class="btn-link mar-lft"></a>

              <div class="media pad-top bord-top">
                  <div class="pull-right">
                      <!-- <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
                      <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
                      <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a> -->
                  </div>
                  <div class="media-body text-left text-bold text-main">
                      <?php echo $this->session->flashdata('sukses'); ?>
                  </div>
              </div>
          </div>
          </div>
      </div>

  </div>
  <!--===================================================-->






</div>
</body>

<!-- Mirrored from www.themeon.net/nifty/v2.8/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2017 07:39:44 GMT -->
</html>
