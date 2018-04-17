<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Struktur Organisasi</h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="<?php echo site_url('web') ?>">Home</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="">Profile</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">Struktur Organisasi</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
          <?php foreach ($dataso as $key ) { ?>
            <div class="row page-row">
                <div class="team-wrapper col-md-8 col-sm-7">
                    <div class="row page-row" >
                        <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                              <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']) ?>" alt="Image"
                            style="height: 185px; width:auto;">

                        </figure>
                        <div class="details col-md-9 col-sm-8 col-xs-6">
                            <h3 class="title"><?php echo $key['name']; ?></h3>
                            <h4 class="title"><?php echo $key['posisi']; ?></h3>
                            <h4>Keterangan</h4>
                            <p><?php echo$key['keterangan'] ?></p>
                        </div>
                    </div>

                </div><!--//team-wrapper-->
            </div><!--//page-row-->
          <?php } ?>
          <ul class="pagination">
              <?php echo $this->pagination->create_links(); ?>
          </ul>
        </div><!--//page-content-->
    </div><!--//page-->
</div><!--//content-->
