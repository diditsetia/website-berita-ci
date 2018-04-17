<style>


 .primary-line {

  font-size: 20px;
  padding: 2px;

}

.primary-lin {

 font-size: 15spx;
 padding: 2px
}



</style>
<header class="header">
    <div class="top-bar">
        <div class="container">
          <?php
          $query = $this->db->get('tabel_medsos');
          $dataicon = $query->result_array();
          ?>
            <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
              <?php foreach ($dataicon as $key ) { ?>
                <li><a href="<?php echo $key['link'] ?>" target="_blank"><i class="<?php echo $key['icon']?>"></i></a></li>
              <?php } ?>
                <!-- <li class="row-end"><a href="#" ><i class=""></i></a></li> -->
            </ul><!--//social-icons-->
            <form class="pull-right search-form" role="search" method="get" action="<?php echo site_url('web/pencarian') ?>">
                <div class="form-group">
                    <input type="text" name="cariberita" class="form-control" placeholder="Search the site...">
                </div>
                <button type="submit" class="btn btn-theme">Go</button>
            </form>

        </div>
    </div><!--//to-bar-->
    <?php
    $query = $this->db->get('tabel_contact');
    $datacontact = $query->row();
    ?>

    <?php
      $query = $this->db->get('tabel_header');
      $dataheader = $query->row();
    ?>
    <?php if ($dataheader || $datacontact) { ?>
      <div class="header-main container">

        <div class="logo col-md-6">

          <div class="col-md-1">
            <a  href=""><img style="width:40px;padding-top: 5px;" id="logo" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$dataheader->logo); ?>"  alt="Logo"</a>
          </div>
          <div class="col-md-11">
            <label class="primary-line" style="margin-bottom: 0px;"><?php echo $dataheader->nama_perusahaan?></label><br>
            <span class="primary-lin"><?php echo $dataheader->tagline ?></span>
          </div>

        </div><!--//logo-->

          <div class="info col-md-6 col-sm-6">
              <ul class="menu-top navbar-right hidden-xs">
                  <li class="divider"><a href="<?php echo site_url('web') ?>">Beranda</a></li>
                  <li class="divider"><a href="<?php echo site_url('web/contact') ?>">Contact</a></li>
                  <li class="divider"><a href="<?php echo site_url('web/contact') ?>">Login</a></li>
                  <li><a href="<?php echo site_url('web/contact') ?>">Register</a></li>

              </ul><!--//menu-top-->
              <br />
              <div class="contact pull-right">
                  <!-- <p class="phone">
                    <i class="fa fa-phone"></i>
                    Call us today </p></br>
                  <p class="email"><i class="fa fa-envelope"></i><a href="#"></a></p><br>
                  <p class="email"><i class="fa fa-fax"></i><a href="#"></a></p> -->
              </div><!--//contact-->
          </div><!--//info-->
      </div><!--//header-main-->
    <?php } else { ?>
      <div class="header-main container">
          <div class="logo col-md-4 col-sm-4">
              <div class="col-md-2">
                <a  href=""><img style="width:40px" id="logo" src="<?php  echo base_url('assets/images/logo1.png');?>"  alt="Logo"</a>
              </div>
                <span class="primary-line">Logo</span><br>
                <span class="primary-lin">Tagline</span>
          </div><!--//logo-->
          <div class="info col-md-8 col-sm-8">
              <ul class="menu-top navbar-right hidden-xs">
                  <li class="divider"><a href="index-2.html">Beranda</a></li>
                  <li class="divider"><a href="faq.html">FAQ</a></li>
                  <li><a href="contact.html">Contact</a></li>
              </ul><!--//menu-top-->
              <br />
              <div class="contact pull-right">
                  <p class="phone"><i class="fa fa-phone"></i>Call us today 0800 123 4567</p>
                  <p class="email"><i class="fa fa-envelope"></i><a href="#">enquires@website.com</a></p>
              </div><!--//contact-->
          </div><!--//info-->
      </div><!--//header-main-->
    <?php } ?>
</header><!--//header-->
