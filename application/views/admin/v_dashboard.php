<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Dashboard</h1>


        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="panel">
					  <div class="panel-body text-center clearfix">
              <div class="col-sm-1 pad-top">
                <span  style="margin-top: 20px;" class="icon-wrap icon-wrap-sm icon-circle bg-success">
                    <i class="ti-comment-alt icon-2x"></i>
                  </span>
               </div>
					    <div class="col-sm-2 pad-top">
					          <div class="text-lg"><p class="text-5x text-thin text-main"><?php echo $datapesan ?></p></div>
					        <p class="text-sm text-bold text-uppercase">Pesan</p>
					     </div>
					    <div class="col-sm-9">
					      <a href="<?php echo site_url('admin/pesan') ?>"><button style="  margin-top: 50px;margin-left: 500px;" class="btn btn-success mar-ver">View Details</button></a>
					   </div>
					</div>
			</div>

      <div class="panel">
            <div class="panel-body text-center clearfix">
              <div class="col-sm-1 pad-top">
                <span  style="margin-top: 20px;" class="icon-wrap icon-wrap-sm icon-circle bg-pink">
                    <i class="ti-user icon-2x"></i>
                  </span>
               </div>
              <div class="col-sm-2 pad-top">
                    <div class="text-lg"><p class="text-5x text-thin text-main"><?php echo $datajoin ?></p></div>
                  <p class="text-sm text-bold text-uppercase">Join Email</p>
               </div>
              <div class="col-sm-9">
                  <a href="<?php echo site_url('admin/joinemail') ?>"><button style="  margin-top: 50px;margin-left: 500px;" class="btn btn-pink mar-ver">View Details</button></a>
             </div>
          </div>
      </div>

      <div class="panel">
            <div class="panel-body text-center clearfix">
              <div class="col-sm-1 pad-top">
                <span  style="margin-top: 20px;" class="icon-wrap icon-wrap-sm icon-circle bg-info">
                    <i class="ti-file icon-2x"></i>
                  </span>
               </div>
              <div class="col-sm-2 pad-top">
                    <div class="text-lg"><p class="text-5x text-thin text-main"><?php echo $databerita ?></p></div>
                  <p class="text-sm text-bold text-uppercase">Berita</p>
               </div>
              <div class="col-sm-9">
                <a href="<?php echo site_url('admin/berita') ?>"><button style="  margin-top: 50px;margin-left: 500px;" class="btn btn-info mar-ver">View Details</button></a>
             </div>
          </div>
      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
