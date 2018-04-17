<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">PESAN</h1>


        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="panel">
        <?php if ($datapesan == null) { ?>
          <div class="alert alert-danger" role="alert">
             <p><?php echo 'Pesan Belum Ada' ?></p>
          </div>
        <?php }else { ?>
          <?php foreach ($datapesan as $key ) { ?>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-7">

                          <div class="media">
                              <span class="media-left">
                                  <img src="<?php echo base_url('assets/admin/img/profile-photos/1.png') ?> ?>" class="img-circle img-sm " alt="Profile Picture">
                              </span>
                              <div class="media-body">
                                  <div class="text-bold"> From : <?php echo $key['name'] ?></div>
                                  <small class="text">Email   : <?php echo $key[ 'email'] ?></small><br>
                                  <small class="text">Phone   : <?php echo $key[ 'phone'] ?></small><br>
                                  <small class="text">Tanggal : <?php echo $key[ 'create_at'] ?></small><br>
                              </div>
                          </div>


                    </div>
                    <hr class="hr-sm visible-xs">
                </div>
                <div class="row pad-ver">
                    <div class="col-xs-7">
                        <div class="btn-group btn-group">
                            <a href="<?php echo  site_url('admin/hapuspesan').'/'.$key['id_pesan'];?>" ><button class="btn btn-sm btn-default"><i class="demo-pli-recycling"></i> Remove</button></a>
                        </div>
                    </div>
                </div>

                <!--Message-->
                <!--===================================================-->
                <div class="pad-ver bord-ver">
                    <?php echo $key['pesan'] ?>
                </div>

            </div>
          <?php } ?>
        <?php } ?>

      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
