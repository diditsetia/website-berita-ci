<div class="content container">
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Gallery</h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="<?php echo site_url('web') ?>">Beranda</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">Gallery</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
          <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-around">
          <!-- <div class="grid"> -->
            <?php foreach ($datagallery as $key ) { ?>
                  <div>
              <!-- <div class="grid-item" style="width:20%"> -->
                <a class="prettyphoto" rel="prettyPhoto[gallery]" title="<?php echo $key['judul']?>" href="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']); ?>"><img class="img-responsive img-thumbnail"
                  style="height: 150px; width:auto;" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']);  ?>" alt="" /></a>
              <!-- </div> -->
                </div>
            <?php } ?>
          <!-- </div> -->

        </div>
        </div><!--//page-content-->
    </div><!--//page-->
</div><!--//content-->
