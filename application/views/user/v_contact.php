<style media="screen">
.home-page section {
  background: #ffffff;
  overflow: hidden;
}
</style>

<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Contact</h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="<?php echo site_url('web')?>">Beranda</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">Contact</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <article class="contact-form col-md-8 col-sm-7  page-row">
                    <form enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksipesan')?>" >
                        <div class="form-group name">
                            <label >Name</label>
                            <input  type="text" class="form-control" placeholder="Enter your name" name="nama" required >
                        </div><!--//form-group-->
                        <div class="form-group email">
                            <label >Email<span class="required">*</span></label>
                            <input  type="email" class="form-control" placeholder="Enter your email" name="email" required >
                        </div><!--//form-group-->
                        <div class="form-group phone">
                            <label >Phone</label>
                            <input  type="text" class="form-control" placeholder="Enter your contact number" name="phone" required >
                        </div><!--//form-group-->
                        <div class="form-group message">
                            <label >Message<span class="required">*</span></label>
                            <textarea  class="form-control" rows="6" name="pesan" placeholder="Enter your message here..." required ></textarea>
                        </div><!--//form-group-->
                        <button type="submit" class="btn btn-theme">Send message</button>
                    </form>
                </article><!--//contact-form-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">

                    <section class="widget has-divider">
                        <h3 class="title" style="padding-left: 30px;">Postal Address</h3>
                        <p class="adr" style="padding-left: 30px;">
                            <span class="adr-group" >
                                <span class="street-address " ><?php echo $datacontact['address'] ?></span><br>
                            </span>
                        </p>
                    </section><!--//widget-->

                    <section class="widget">
                        <h3 class="title" style="padding-left: 30px;">All Enquiries</h3>
                        <div class="col-sm-12">
                          <div class="col-sm-1">
                            <i class="fa fa-phone"></i>
                          </div>
                          <div class="col-sm-10" style="margin-bottom: 5px;">
                          <?php echo $datacontact['phone']?>
                          </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="col-sm-1">
                          <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-sm-10" style="margin-bottom: 5px;">
                        <?php echo $datacontact['email']?>
                        </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="col-sm-1">
                        <i class="fa fa-fax"></i>
                      </div>
                      <div class="col-sm-10">
                      <?php echo $datacontact['fax']?>
                      </div>
                  </div>

                    </section>
                </aside><!--//page-sidebar-->
            </div><!--//page-row-->
            <div class="page-row">
                <article class="map-section">
                    <h3 class="title">How to find us</h3>
                    <div class="gmap-wrapper" id="map">
                        <!--//You need to embed your own google map below-->
                        <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                        <iframe src="<?php echo $datacontact['maps']?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div><!--//gmap-wrapper-->
                </article><!--//map-->
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page-wrapper-->
</div><!--//content-->
