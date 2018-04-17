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
            <h1 class="page-header text-overflow">Contact</h1>
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
                            <span class="menu-title">Contact</span>
                        </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Create</span>
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
                					                <h3 class="panel-title">Contact</h3>
                					            </div>

                					            <!--Hover Rows-->
                					            <!--===================================================-->
                                      <?php if ($datacontact == null) { ?>
                                        <div class="alert alert-danger" role="alert">
                                           <p><?php echo 'Contact Belum Ada' ?></p>
                                        </div>
                                      <?php } else { ?>
                                        <div style="padding-bottom: 0px;" class="panel-body">
                                       <div class="fixed-md-200 pull-sm-left fixed-right-border">

                                            <!-- Profile Details -->
                                            <p><i class="ti-map-alt"></i> <?php echo $datacontact['address']; ?></p>
                                            <hr>
                                            <p><i class="ti-location-pin"></i> <?php echo substr( $datacontact['maps'],0,100).".."?></p>
                                            <hr>
                                            <p><i class="ti-email"></i> <?php echo $datacontact['email'] ?></p>
                                            <hr>
                                            <p><i class="ti-mobile"></i> <?php echo $datacontact['phone']?></p>
                                            <hr>
                                            <p><i class="ti-printer"></i> <?php echo $datacontact['fax']?></p>
                                            <hr>

                                            <?php if ($datacontact == null) { ?>
                                              <span class="box-inline">
                                                <a href="<?php echo  site_url('admin/hapuscontact').'/'.$datacontact['id_contact'];?>">
                                                  <button class="btn btn-default" disabled="disabled"><i class="ti-trash"></i></button>
                                                </a>
                                                <a href="<?php echo  site_url('admin/editcontact').'/'.$datacontact['id_contact'];?>">
                                                  <button class="btn btn-default" disabled="disabled"><i class="ti-pencil"></i></button>
                                                </a>
                                              </span>
                                            <?php }else { ?>
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
                                                    <a href="<?php echo  site_url('admin/hapuscontact').'/'.$datacontact['id_contact'];?>"><button type="submit" name="submit"  class="btn btn-info" style="width:100%">Hapus</button></a>
                                                  </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="ti-trash"></i></button>
                                                <a href="<?php echo  site_url('admin/editcontact').'/'.$datacontact['id_contact'];?>">
                                                  <button class="btn btn-warning"><i class="ti-pencil"></i></button>
                                                </a>
                                              </span>
                                            <?php } ?>

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
                                  <form class="form-horizontal" method="post" action="<?php echo site_url('admin/aksicontact')?>">
                                    <div class="form-group">
                                       <label class="col-md-2 control-label" >Address</label>
                                       <div class="col-sm-8">
                                         <textarea placeholder="Address" rows="8" class="form-control" name="address" required></textarea>
                                       </div>
                                     </div>

                                      <div class="form-group">
                                           <label class="col-md-2 control-label" >Phone</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="phone">
                                           </div>
                                      </div>

                                      <div class="form-group">
                                           <label class="col-md-2 control-label" for="demo-hor-inputemail">Email</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="email" required>
                                           </div>
                                      </div>

                                      <div class="form-group">
                                           <label class="col-md-2 control-label" for="demo-hor-inputemail">Fax</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="fax" required>
                                           </div>
                                      </div>

                                      <div class="form-group">
                                         <label class="col-md-2 control-label" >Maps</label>
                                         <div class="col-sm-8">
                                           <textarea placeholder="" rows="2" class="form-control" name="maps" required></textarea>
                                         </div>
                                       </div>


                                    <div class="panel-footer text-right">
                                      <?php if ($datacontact != null) { ?>
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
