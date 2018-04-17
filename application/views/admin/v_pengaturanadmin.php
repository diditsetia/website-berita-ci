<style >
  #container .table .mi-width {
  width: 20%;

}

.mapss {
  width: 20px;
}

#container .table .mix-width {
width: 10%;

}

.pane {
    border-radius: 3px;
    border: 0;
    box-shadow: 0 1px 2px 1px rgba(113, 113, 113, 0.2);
    margin-bottom: 20px;
}
</style>
<div id="content-container">
    <div id="page-head">
        <div id="page-title">
          <?php if ($this->session->flashdata('sukses') !='') { ?>
            <div class="alert alert-success" role="alert">
               <p><?php echo $this->session->flashdata('sukses'); ?></p>
            </div>
          <?php } ?>
            <h1 class="page-header text-overflow">Footer</h1>
        </div>

        </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="row">
          <div class="col-lg-12">

              <!--Default Tabs (Left Aligned)-->
              <!--===================================================-->
              <div class="tab-base">

                  <!--Nav Tabs-->
                  <ul class="nav nav-tabs">
                      <li class="active">
                        <a data-toggle="tab" href="#demo-lft-tab-1">
                            <i class="ti-eye"></i>
                            <span class="menu-title">Pengaturan Admin</span>
                        </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Ubah Password</span>
                        </a>
                      </li>

                  </ul>

                  <!--Tabs Content-->
                  <div class="tab-content">
                      <div id="demo-lft-tab-1" class="tab-pane fade active in">
                          <div class="row">
                					    <div class="col-lg-12">



                                <div class="col-sm-6 col-md-5">


                     <!-- Contact Widget -->
                     <!---------------------------------->
                     <div class="panel pos-rel">

                         <div class="pad-all">
                             <div class="media pad-btm">
                                 <div class="media-left">
                                    <?php if ($dataadmin['foto'] == '') { ?>
                                       <a href="" class="box-inline"><img alt="Profile Picture" class="img-md img-circle" style="object-fit: cover;" src="<?php echo base_url('assets/admin/img/profile-photos/4.png') ?>"></a>
                                    <?php }else { ?>
                                       <a href="" class="box-inline"><img alt="Profile Picture" class="img-md img-circle" style="object-fit: cover;" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$dataadmin['foto']); ?>"></a>
                                    <?php } ?>

                                 </div>
                                 <div class="media-body pad-top">
                                     <a href="" class="box-inline">
                                         <span class="text-lg text-semibold text-main"><?php echo $dataadmin['nama'] ?></span>
                                         <p class="text-sm"><?php echo  $dataadmin['email']?></p>
                                     </a>
                                 </div>
                             </div>

                             <div class="text-left pad-to">
                                 <div class="btn-group">
                                     <a href="<?php echo site_url('admin/editadmin').'/'.$dataadmin['id_admin']; ?>" class="btn btn-sm btn-warning"><i class="ti-pencil"></i> Edit</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!---------------------------------->
                 </div>

                	</div>

                  </div>


                      </div>
                      <div id="demo-lft-tab-2" class="tab-pane fade">
                        <div class="">

                          <div class="panel-body">

                            <div class="col-sm-12">
                            <div class="">
                                <!--Horizontal Form-->
                                <!--===================================================-->
                               <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksigantipassword')?>">

                                  <div class="form-group">
                                      <label class="col-md-2 control-label" >Password lama</label>
                                      <div class="col-sm-8">
                                         <input type="password" class="form-control" name="passwordlama" required>
                                      </div>
                                  </div>
                                    <div class="form-group">
                                         <label class="col-md-2 control-label" >Password Baru</label>
                                         <div class="col-sm-8">
                                            <input type="password" class="form-control" name="password" required>
                                         </div>
                                     </div>


                                  <div class="panel-footer text-right">
                                      <button class="btn btn-success" type="submit">submit</button>
                                  </div>
                              </form>
                              <!--===================================================-->
                              <!--End Horizontal Form-->

                            </div>
                         </div>


              					    </div>
              					</div>
                      </div>


                  </div>
              </div>
              <!--===================================================-->
              <!--End Default Tabs (Left Aligned)-->

          </div>
      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
