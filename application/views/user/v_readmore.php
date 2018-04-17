<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left"><?php echo $datareadmore['judul_berita'] ?></h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="<?php echo site_url('web')?>">Beranda</a><i class="fa fa-angle-right"></i></li>
                    <li class="current"><?php echo substr( $datareadmore['judul_berita'],0,40).".."?></li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-9 col-sm-8">
                    <article class="news-item">
                        <p class="meta text-muted">By: <a href=""><?php echo $datareadmore['nama_penulis']?>
                        </a> | Posted on:
                        <?php if ($datareadmore['update_at'] !== '0000-00-00') { ?>
                          <?php echo $datareadmore['update_at'] ?>
                        <?php }else { ?>
                          <?php echo $datareadmore['create_at'] ?>
                        <?php } ?>
                      </p>
                        <p class="featured-image"><img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$datareadmore['foto']) ?>" style="height: 300px; width:auto;" alt="" /></p>
                        <p><?php echo $datareadmore['isi_berita'] ?>

                        </p>
                        <hr>


                        <?php
                        $url = current_url();
                        ?><br>
                        <a href="http://twitter.com/share?text=<?php echo $datareadmore['judul_berita']?>&url=<?php echo $url?>"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-twitter"></i>bagikan</button></a>
                        <a href="http://facebook.com/share?text=<?php echo $datareadmore['judul_berita']?>&url=<?php echo $url?>"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-facebook"></i>bagikan</button></a>


                    </article><!--//news-item-->
                </div><!--//news-wrapper-->
                <aside class="page-sidebar  col-md-3 ">
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
