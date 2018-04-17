<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Pencarian </h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="index-2.html">Home</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">Pencarian Berita</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-8 col-sm-7">
                  <?php foreach ($databerita as $key ) { ?>
                    <article class="news-item page-row has-divider clearfix row">
                        <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                            <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']) ?>" alt=""
                            style="height: 100px; width:100%;" />
                        </figure>
                        <div class="details col-md-10 col-sm-9 col-xs-8">
                            <h3 class="title"><a href="news-single.html"><?php echo $key['judul_berita'] ?></a></h3>
                            <?php
                            $text = $key['isi_berita'];
                            $berita = strip_tags($text);
                            ?>
                            <p style="text-align: justify;"><?php echo substr( $berita,0,500).".."?></p>
                            <a class="btn btn-theme read-more" href="<?php echo site_url('web/readmore'.'/'.$key['id_berita']) ?>">Read more<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </article><!--//news-item-->
                  <?php } ?>


                </div><!--//news-wrapper-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
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
                </aside>
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page-->
</div><!--//content-->
