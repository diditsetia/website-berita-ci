<header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <?php
        $query = $this->db->get('tabel_header');
        $dataheader = $query->row_array();
         ?>
        <div class="navbar-header">
            <a href="" class="navbar-brand">
                <?php if ($dataheader['logo'] == '') { ?>
                    <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="Nifty Logo" style="height: 25px; width:25px;height: 25px;width:25px;margin-top: 15px;margin-left: 15px;" class="brand-icon">
                <?php }else { ?>
                    <img src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$dataheader['logo']); ?>" alt="Nifty Logo" style="height: 25px; width:25px;height: 25px;width:25px;margin-top: 15px;margin-left: 15px;" class="brand-icon">
                <?php } ?>

                <div class="brand-title">
                    <span class="brand-text">ADMIN</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="demo-pli-view-list"></i>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->



                <!--Notification dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="dropdown">


                    <!--Notification dropdown menu-->

                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End notifications dropdown-->

            </ul>
            <ul class="nav navbar-top-links pull-right">

                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="<?php echo site_url('web')?>" target="_blank"  class="text-right">
                        <div class="username hidden-xs">Website</div>
                    </a>


                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                        <!-- User dropdown menu -->

                        <!-- Dropdown footer -->
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->
                <li>
                    <a href="#" class="aside-toggle navbar-aside-icon">
                        <i class="pci-ver-dots"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
