<div class="content container">
    <div id="promo-slider" class="slider flexslider">
        <ul class="slides">
          <?php foreach ($dataslideshow as $key ) { ?>
            <li>
                <img src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['picture']) ?>" style="height: auto; width:100%;" alt="" />
                <p class="flex-caption">
                    <span class="main" ><?php echo $key['judul'] ?></span>
                    <br />
                    <span class="secondary clearfix" ><?php echo $key['keterangan'] ?></span>
                </p>
            </li>
          <?php } ?>
        </ul><!--//slides-->
    </div><!--//flexslider-->

    <section class="news">
        <h1 class="section-heading text-highlight"><span class="line">Berita Terbaru</span></h1>
        <div class="carousel-controls">
            <!-- <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
            <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a> -->
        </div><!--//carousel-controls-->
        <div class="section-content clearfix">

            <div id="news-carousel" class="news-carousel carousel slide">
              <?php if ($databeritaterbaru == null) { ?>
                <?php echo 'Berita terbaru belum ada' ?>
              <?php } else { ?>
                <div class="carousel-inner">

                    <div class="item active">
                  <?php foreach ($databeritaterbaru as $key => $berita ) { ?>
                            <?php if ( $key <= '2') { ?>
                              <div class="col-md-4 ">

                                <?php
                                $text = $berita['isi_berita'];
                                $isiberita = strip_tags($text);
                                ?>

                                  <div class="row">
                                    <div class="col-xs-4">
                                      <img class="thumb" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$berita['foto']) ?>" style="height:auto; width:100%;" alt="" />
                                    </div>
                                    <div class="col-xs-8">
                                      <p class="title"><a href="news-single.html"><?php echo substr( $berita['judul_berita'],0,30).".."?></a></p>
                                      <p style="text-align: justify;"><?php echo substr( $isiberita,0,100).".."?></p>
                                      <a class="read-more" href="<?php echo site_url('web/readmore'.'/'.$berita['slug']) ?>">Read more<i class="fa fa-chevron-right"></i>
                                        <?php if ($berita['popular'] == 1) { ?>
                                          <i class="fa fa-star" title="Berita Polular"></i>
                                        <?php } ?>
                                      </a>
                                    </div>

                                  </div>
                              </div><!--//news-item-->
                            <?php } ?>
                      <?php } ?>
                      </div><!--//item-->


                </div><!--//carousel-inner-->
              <?php } ?>

            </div><!--//news-carousel-->
        </div><!--//section-content-->
    </section><!--//news-->
    <div class="row cols-wrapper">
        <div class="col-md-3">
            <section class="events">
                <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>



            </section><!--//events-->
        </div><!--//col-md-3-->
        <div class="col-md-6">
            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line"> List Berita</span></h1>
                 <?php foreach ($databerita as $key ) { ?>
                   <div class="row-group">
                     <figure class="thumb col-md-3">
                       <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']) ?>" alt="" style="height: auto; width:100%;"/>
                     </figure>
                     <div class="details col-md-9 ">
                       <h4 style="  margin-top: 0px;" class="title"><a href=""><?php echo substr( $key['judul_berita'],0,60).".."?></a></h4>
                       <?php
                       $text = $key['isi_berita'];
                       $berita = strip_tags($text);
                       ?>
                       <p style="text-align: justify;" ><?php echo substr( $berita,0,300).".."?></p>
                       <a style="margin-bottom: 10px;" class="read-more" href="<?php echo site_url('web/readmore'.'/'.$key['slug']) ?>">Read more<i class="fa fa-chevron-right"></i>
                         <?php if ($key['popular'] == 1) { ?>
                           <i class="fa fa-star" title="Berita Polular"></i>
                         <?php } ?>
                       </a>
                     </div>
                   </div>
                 <?php } ?>

                <ul style="margin-left: 15px;" class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
            </section
            ><!--//video-->
        </div>
        <div class="col-md-3">
            <section class="links">
                <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>

            </section><!--//links-->
            <section class="testimonials">
                <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>

                <div class="section-content">
                    <div id="testimonials-carousel" class="testimonials-carousel carousel slide">

                    </div><!--//testimonials-carousel-->
                </div><!--//section-content-->
            </section><!--//testimonials-->
        </div><!--//col-md-3-->
    </div><!--//cols-wrapper-->
    <section class="awards">
        <div id="awards-carousel" class="awards-carousel carousel slide">
            <?php if ($datagalleryterbaru == null) { ?>
              <?php echo 'Picture terbaru belum ada' ?>
            <?php } else { ?>
              <div >
                  <div class="item active" style="overflow-x: auto;display: -webkit-inline-box; flex-direction: row; justify-content: space-around;overflow: auto; white-space: nowrap;">
                    <?php foreach ($datagalleryterbaru as $key => $gallery) { ?>
                      <?php if ( $key <='5') { ?>
                        <ul class="logos">
                          <li >
                            <a class="prettyphoto" rel="prettyPhoto[gallery]"title="<?php echo $gallery['judul']?>" href="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$gallery['foto']); ?>"><img class="img-responsive img-thumbnail"
                              src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$gallery['foto']);  ?>" style="height: 100px; width:auto;"  alt="" /></a>

                          </li>
                        </ul><!--//slides-->
                      <?php } ?>
                    <?php } ?>
                  </div><!--//item-->


              </div><!--//carousel-inner-->
          <?php   } ?>

            <!-- <a class="left carousel-control" href="#awards-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#awards-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a> -->

        </div>
    </section>
</div><!--//content-->
