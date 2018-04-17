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
                            <span class="menu-title">Footer</span>
                        </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Create media sosial</span>
                        </a>
                      </li>

                      <li>
                        <a data-toggle="tab" href="#demo-lft-tab-3">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Create Copyright</span>
                        </a>
                      </li>
                  </ul>

                  <!--Tabs Content-->
                  <div class="tab-content">
                      <div id="demo-lft-tab-1" class="tab-pane fade active in">
                          <div class="row">
                					    <div class="col-lg-12">
                					        <div class="">
                					            <div class="panel-heading">
                					                <h3 class="panel-title"></h3>


                					            </div>
                                        <?php if ($datamedsos == null) { ?>
                                          <div class="alert alert-danger" role="alert">
                                             <p><?php echo 'Medsos Belum Ada' ?></p>
                                          </div>
                                        <?php }else { ?>
                                          <div style="padding-bottom: 0px;" class="panel-body">
                                          <div class="fixed-md-200 pull-sm-left fixed-right-border">
                                            <?php foreach ($datamedsos as $key ) { ?>
                                              <h5><i class="<?php echo $key['icon']?>"></i> <?php echo $key['link']?></h5>

                                              <span class="box-inline">
                                                <div id="myModal<?php echo $key['id_medsos'];?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                  <!-- konten modal-->
                                                  <div class="modal-content">
                                                    <!-- heading modal -->
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title"></h4>
                                                    </div>
                                                    <!-- body modal -->
                                                    <div class="modal-body">
                                                      <p> apakah anda yakin inggin menghapus item ini ?</p>
                                                    </div>
                                                    <!-- footer modal -->
                                                    <div class="modal-footer">
                                                    <div class="col-sm-3">
                                                    <a href="<?php echo  site_url('admin/hapusmedsos').'/'.$key['id_medsos'];?>"><button type="submit" name="submit"  class="btn btn-info" style="width:100%">Hapus</button></a>
                                                  </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                                  <button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $key['id_medsos'];?>"><i class="ti-trash"></i></button>
                                                <a href="<?php echo  site_url('admin/editmedsos').'/'.$key['id_medsos'];?>">
                                                  <button class="btn btn-warning"><i class="ti-pencil"></i></button>
                                                </a>
                                              </span>
                                              <hr>
                                            <?php } ?>
                                               <!-- Profile Details -->



                                           </div>
                                         </div>
                                        <?php } ?>

                                        <?php if ($datacopyright == null) { ?>
                                          <div class="alert alert-danger" role="alert">
                                             <p><?php echo 'Copyright Belum Ada' ?></p>
                                          </div>
                                        <?php }else { ?>
                                          <div style="padding-bottom: 0px;" class="panel-body">
                                          <div class="fixed-md-200 pull-sm-left fixed-right-border">
                                              <h4>Copyright : <?php echo $datacopyright['copyright']?></h4>

                                              <?php if ($datacopyright == null) { ?>
                                                <span class="box-inline">
                                                  <a href="<?php echo  site_url('admin/hapuscopyright').'/'.$datacopyright['id_footer'];?>">
                                                    <button class="btn btn-default" disabled="disabled"><i class="ti-trash"></i></button>
                                                  </a>
                                                  <a href="<?php echo  site_url('admin/editcopyright').'/'.$datacopyright['id_footer'];?>">
                                                    <button class="btn btn-default" disabled="disabled"><i class="ti-pencil"></i></button>
                                                  </a>
                                                </span>
                                              <?php } else { ?>
                                                <span class="box-inline">
                                                  <div id="myModal" class="modal fade" role="dialog">
                                                  <div class="modal-dialog">
                                                    <!-- konten modal-->
                                                    <div class="modal-content">
                                                      <!-- heading modal -->
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"></h4>
                                                      </div>
                                                      <!-- body modal -->
                                                      <div class="modal-body">
                                                        <p> apakah anda yakin inggin menghapus item ini ?</p>
                                                      </div>
                                                      <!-- footer modal -->
                                                      <div class="modal-footer">
                                                      <div class="col-sm-3">
                                                      <a href="<?php echo  site_url('admin/hapuscopyright').'/'.$datacopyright['id_footer'];?>"><button type="submit" name="submit"  class="btn btn-info" style="width:100%">Hapus</button></a>
                                                    </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                 <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="ti-trash"></i></button>
                                                  <a href="<?php echo  site_url('admin/editcopyright').'/'.$datacopyright['id_footer'];?>">
                                                    <button class="btn btn-warning"><i class="ti-pencil"></i></button>
                                                  </a>
                                                </span>
                                              <?php } ?>

                                               <!-- Profile Details -->
                                                <hr>


                                           </div>
                                         </div>
                                        <?php } ?>

                					            <!--===================================================-->
                					            <!--End Hover Rows-->

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
                                  <form class="form-horizontal" method="post" action="<?php echo site_url('admin/aksimediasosial')?>">


                                      <div class="form-group">
                                           <label class="col-md-2 control-label" >icon(ex:fa fa-twitter)</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="icon" required>
                                           </div>
                                      </div>


                                      <div class="form-group">
                                         <label class="col-md-2 control-label" >link</label>
                                         <div class="col-sm-8">
                                             <input type="text" class="form-control" name="link" required>
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

                      <div id="demo-lft-tab-3" class="tab-pane fade">
                        <div class="">

                          <div class="panel-body">

                              <div class="col-sm-12">
                              <div class="">
                                  <!--Horizontal Form-->
                                  <!--===================================================-->
                                  <form class="form-horizontal" method="post" action="<?php echo site_url('admin/aksicopyright')?>">



                                      <div class="form-group">
                                         <label class="col-md-2 control-label" >Copyright</label>
                                         <div class="col-sm-8">
                                             <input type="text" class="form-control" name="copyright" required>
                                         </div>
                                       </div>


                                    <div class="panel-footer text-right">
                                      <?php if ($datacopyright != null) { ?>
                                          <button class="btn btn-success" type="submit" disabled="disabled">submit</button>
                                        <?php } else { ?>
                                          <button class="btn btn-success" type="submit">submit</button>
                                        <?php } ?>
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
