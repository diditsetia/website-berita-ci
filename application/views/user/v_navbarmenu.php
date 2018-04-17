<nav class="main-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!--//nav-toggle-->
        </div><!--//navbar-header-->
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <?php
                $query = $this->db->get_where('tabel_menu', array('aktif'=>1));
                $datamenu = $query->result_array();
              ?>
                <?php if ($this->uri->segment(2) == '') { ?>
                  <li class="active nav-item"><a href="<?php echo site_url('web') ?>">Beranda</a></li>
                  <li class="nav-item dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Profile <i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('web/visimisi') ?>">Visi Misi</a></li>
                          <li><a href="<?php echo site_url('web/sejarah')?>">Sejarah</a></li>
                          <li><a href="<?php echo site_url('web/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                          <li><a href="<?php echo site_url('web/layanan') ?>">Layanan</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a href="<?php echo site_url('web/gallery') ?>">Gallery</a></li>
                  <li class="nav-item"><a href="<?php echo site_url('web/contact') ?>">Contact</a></li>

                  <?php foreach ($datamenu as $key ) { ?>
                    <li class="nav-item"><a href="<?php echo  site_url('web/berita').'/'.$key['url'] ?>"><?php echo $key['nama_menu']?></a></li>
                  <?php } ?>

                <?php } elseif ($this->uri->segment(2) == 'visimisi' || $this->uri->segment(2) == 'sejarah' || $this->uri->segment(2) == 'strukturorganisasi' || $this->uri->segment(2) == 'layanan' ) { ?>
                  <li class="nav-item"><a href="<?php echo site_url('web') ?>">Beranda</a></li>
                  <li class="active nav-item dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Profile <i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('web/visimisi') ?>">Visi Misi</a></li>
                          <li><a href="<?php echo site_url('web/sejarah')?>">Sejarah</a></li>
                          <li><a href="<?php echo site_url('web/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                          <li><a href="<?php echo site_url('web/layanan') ?>">Layanan</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a href="<?php echo site_url('web/gallery') ?>">Gallery</a></li>
                  <li class="nav-item"><a href="<?php echo site_url('web/contact') ?>">Contact</a></li>
                  <?php foreach ($datamenu as $key ) { ?>
                    <li class="nav-item"><a href="<?php echo  site_url('web/berita').'/'.$key['url'] ?>"><?php echo $key['nama_menu']?></a></li>
                  <?php } ?>

                <?php }elseif ($this->uri->segment(2) == 'gallery') { ?>
                  <li class="nav-item"><a href="<?php echo site_url('web') ?>">Beranda</a></li>
                  <li class="nav-item dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Profile <i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('web/visimisi') ?>">Visi Misi</a></li>
                          <li><a href="<?php echo site_url('web/sejarah')?>">Sejarah</a></li>
                          <li><a href="<?php echo site_url('web/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                          <li><a href="<?php echo site_url('web/layanan') ?>">Layanan</a></li>
                      </ul>
                  </li>
                  <li class="active nav-item"><a href="<?php echo site_url('web/gallery') ?>">Gallery</a></li>
                  <li class="nav-item"><a href="<?php echo site_url('web/contact') ?>">Contact</a></li>
                  <?php foreach ($datamenu as $key ) { ?>
                    <li class="nav-item"><a href="<?php echo  site_url('web/berita').'/'.$key['url'] ?>"><?php echo $key['nama_menu']?></a></li>
                  <?php } ?>

                <?php }elseif ($this->uri->segment(2) == 'contact') { ?>
                  <li class="nav-item"><a href="<?php echo site_url('web') ?>">Beranda</a></li>
                  <li class="nav-item dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Profile <i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('web/visimisi') ?>">Visi Misi</a></li>
                          <li><a href="<?php echo site_url('web/sejarah')?>">Sejarah</a></li>
                          <li><a href="<?php echo site_url('web/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                          <li><a href="<?php echo site_url('web/layanan') ?>">Layanan</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a href="<?php echo site_url('web/gallery') ?>">Gallery</a></li>
                  <li class="active nav-item"><a href="<?php echo site_url('web/contact') ?>">Contact</a></li>
                  <?php foreach ($datamenu as $key ) { ?>
                    <li class="nav-item"><a href="<?php echo  site_url('web/berita').'/'.$key['url'] ?>"><?php echo $key['nama_menu']?></a></li>
                  <?php } ?>

                <?php  } else { ?>
                  <li class="nav-item"><a href="<?php echo site_url('web') ?>">Beranda</a></li>
                  <li class="nav-item dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Profile <i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('web/visimisi') ?>">Visi Misi</a></li>
                          <li><a href="<?php echo site_url('web/sejarah')?>">Sejarah</a></li>
                          <li><a href="<?php echo site_url('web/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                          <li><a href="<?php echo site_url('web/layanan') ?>">Layanan</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a href="<?php echo site_url('web/gallery') ?>">Gallery</a></li>
                  <li class="nav-item"><a href="<?php echo site_url('web/contact') ?>">Contact</a></li>

                  <?php foreach ($datamenu as $key ) { ?>
                    <li class="<?php echo $this->uri->segment(3) == $key['url'] ? 'active nav-item' : 'nav-item'  ?>">
                    <a href="<?php echo  site_url('web/berita').'/'.$key['url'] ?>"><?php echo $key['nama_menu']?></a></li>
                  <?php } ?>
                <?php } ?>
            </ul><!--//nav-->
        </div><!--//navabr-collapse-->
    </div><!--//container-->
</nav><!--//main-nav-->
