<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Join Email</h1>


        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="row">

					    <div class="col-md-12 col-lg-12">
					        <div class="panel">
                      <?php if ($datajoinemail == null) { ?>
                        <div class="alert alert-danger" role="alert">
                           <p><?php echo ' Belum Ada Yang Join Email' ?></p>
                        </div>
                      <?php } else { ?>
                        <div class="panel-body">

                           <!--List Group with Badges-->
                           <!--===================================================-->
                           <ul class="list-group">
                              <?php foreach ($datajoinemail as $key ) { ?>
                                <li class="list-group-item"><span class="badge badge-primary"><?php echo $key['create_at'] ?></span>
                                  <a href="<?php echo site_url('admin/hapusjoinemail').'/'.$key['id_joinemail']?>"><i class="ti-trash"style="margin-right: 20px;"></i></a><?php echo $key['email_join'] ?></li>
                              <?php } ?>
                           </ul>
                           <!--===================================================-->

                       </div>
                      <?php }?>
					        </div>
					    </div>
					</div>
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
