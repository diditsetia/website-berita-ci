<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
            <div class="footer-col col-md-3 col-sm-4 about">
                <div class="footer-col-inner">
                    <h3>About</h3>
                    <ul>
                        <li><a href="<?php echo site_url('web/sejarah') ?>"><i class="fa fa-caret-right"></i>About us</a></li>
                        <li><a href="<?php echo site_url('web/contact') ?>"><i class="fa fa-caret-right"></i>Contact us</a></li>
                    </ul>
                </div><!--//footer-col-inner-->
            </div><!--//foooter-col-->
            <div class="footer-col col-md-6 col-sm-8 newsletter">
                <div class="footer-col-inner">
                    <h3>Join our mailing list</h3>
                    <p>Subscribe to get our weekly newsletter delivered directly to your inbox</p>
                    <form   method="post" action="<?php echo site_url('admin/aksijoinemail')?>" >
                        <div class="form-group"  >
                            <input type="email" class="form-control" placeholder="Enter your email" name="email" required />
                        </div>
                        <input class="btn btn-theme btn-subscribe" type="submit" >
                    </form>

                </div><!--//footer-col-inner-->
            </div><!--//foooter-col-->
            <div class="footer-col col-md-3 col-sm-12 contact">
                <div class="footer-col-inner">
                    <h3>Contact us</h3>
                    <div class="row">
                      <?php
                        $query = $this->db->get('tabel_contact');
                        $datacontact = $query->row();
                      ?>
                      <?php if ($datacontact) { ?>
                        <p class="adr clearfix col-md-12 col-sm-11">
                          <div class="col-sm-1">
                            <i class="fa fa-map-marker pull-left"></i>
                          </div>
                          <div class="col-sm-10">
                            <span class="adr-group pull-left">
                                <span class="street-address"> <?php echo $datacontact->address ?></span>
                            </span>
                          </div>
                        </p>
                        <p class="tel col-md-12 col-sm-11">
                          <div class="col-sm-1">
                            <i class="fa fa-phone"></i>
                          </div>
                          <div class="col-sm-10">
                            <?php echo $datacontact->phone?>
                          </div>
                        </p>
                        <p class="email col-md-12 col-sm-11">
                          <div class="col-sm-1">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <div class="col-sm-10">
                            <a href="#"><?php echo $datacontact->email ?></a>
                          </div>
                        </p>

                        <p class="email col-md-12 col-sm-11">
                          <div class="col-sm-1">
                            <i class="fa fa-fax"></i>
                          </div>
                          <div class="col-sm-10">
                            <a href="#"><?php echo $datacontact->fax ?></a>
                          </div>
                        </p>
                      <?php } else { ?>
                        <p class="adr clearfix col-md-12 col-sm-4">
                            <i class="fa fa-map-marker pull-left"></i>
                            <span class="adr-group pull-left">
                                <span class="street-address">Alamat</span>
                            </span>
                        </p>
                        <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>phone</p>
                        <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="#">email</a></p>
                      <?php } ?>
                    </div>
                </div><!--//footer-col-inner-->
            </div><!--//foooter-col-->
            </div>
        </div>
    </div><!--//footer-content-->
    <?php
    $query = $this->db->get('tabel_medsos');
    $datamedsos = $query->result_array();
    ?>
    <?php
    $query = $this->db->get('tabel_footer');
    $data = $query->row_array();
    ?>
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @<a href=""><?php echo $data['copyright'] ?></a></small>
                <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                    <?php foreach ($datamedsos as $key ) { ?>
                      <li><a href="<?php echo $key['link'] ?>" target="_blank"><i class="<?php echo $key['icon']?>"></i></a></li>
                    <?php } ?>

                    <!-- <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li> -->
                </ul><!--//social-->
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//bottom-bar-->
</footer><!--//footer-->
