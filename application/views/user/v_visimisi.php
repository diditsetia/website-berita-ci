<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Visi Misi</h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="<?php echo site_url('web')?>">Beranda</a><i class="fa fa-angle-right"></i></li>
                      <li><a href="">Profile</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">Visi Misi</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <article class="welcome col-md-9 col-sm-8">
                    <p><img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$datavisimisi['foto_visimisi']); ?>" alt="" /></p>
                    <center><h2 class="title">Visi</h2></center>

                      <p><?php  echo $datavisimisi['visi']?></p>


                    <center><h2 class="title">Misi</h2></center>

                      <p><?php echo $datavisimisi['misi'] ?></p>

                </article><!--//page-content-->
                <div style="margin-top: 35px;" class="col-md-3">
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
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page-->
</div><!--//content-->
