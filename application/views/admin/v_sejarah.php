<style >
  #container .table .mi-width {
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
          <?php
          $url = current_url();
          $error = $this->session->flashdata('error');
          $data = $this->session->flashdata('data');
           if($this->session->flashdata('error') !='') {
            echo "<script type=\"text/javascript\">
              $('#myTab a[href='$url#demo-lft-tab-2']').tab('show');
            </script>"; ?>
            <div class="alert alert-danger" role="alert">
               <p><?php echo $this->session->flashdata('error'); ?></p>
            </div>
        <?php } else { ?>
          <?php if ($this->session->flashdata('sukses') !='') { ?>
            <div class="alert alert-success" role="alert">
               <p><?php echo $this->session->flashdata('sukses'); ?></p>
            </div>
          <?php } ?>
          <?php } ?>
            <h1 class="page-header text-overflow">Sejarah</h1>
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
                      <li class="<?php echo ($error == "" ? "active" : "")?>">
                        <a data-toggle="tab" href="#demo-lft-tab-1">
                            <i class="ti-eye"></i>
                            <span class="menu-title">Sejarah</span>
                        </a>
                      </li>
                      <li class="<?php echo ($error == "" ? "" : "active")?>">
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-plus"></i>
                            <span class="menu-title">Create</span>
                        </a>
                      </li>
                  </ul>

                  <!--Tabs Content-->
                  <div class="tab-content">
                    <div id="demo-lft-tab-1" class="tab-pane fade  in <?php echo ($error == "" ? "active" : "")?>">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Sejarah</h3>
                                    </div>

                                    <!--Hover Rows-->
                                    <!--===================================================-->
                                    <div style="padding-bottom: 0px;" class="panel-body">

                                      <?php if ($datasejarah == null) { ?>
                                        <div class="alert alert-danger" role="alert">
                                           <p><?php echo 'Sejarah Belum Ada' ?></p>
                                        </div>
                                      <?php } else { ?>
                                        <div class="col-md-12">

                                        <div id="demo-tasklist-3" class="task-success ui-sortable-handle">
                                           <div class="task-img">
                                               <img  class="img-thumbnail" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$datasejarah['foto_sejarah']); ?>" alt="Image"
                                                style="height: 100%; width: auto;margin-bottom: 10px; "
                                               >
                                           </div>
                                           <p class="pad-btm ">SEJARAH:<?php echo $datasejarah['sejarah']?></p>
                                           <hr>
                                              <?php if ($datasejarah == null) { ?>
                                                <span class="box-inline">
                                                  <a href="<?php echo  site_url('admin/hapussejarah').'/'.$datasejarah['id_sejarah'];?>">
                                                    <button class="btn btn-default" disabled="disabled"><i class="ti-trash"></i></button>
                                                  </a>
                                                  <a href="<?php echo  site_url('admin/editsejarah').'/'.$datasejarah['id_sejarah'];?>">
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
                                                      <a href="<?php echo  site_url('admin/hapussejarah').'/'.$datasejarah['id_sejarah'];?>"><button type="submit" name="submit" class="btn btn-info" style="width:100%">Hapus</button></a>
                                                    </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="ti-trash"></i></button>

                                                  <a href="<?php echo  site_url('admin/editsejarah').'/'.$datasejarah['id_sejarah'];?>">
                                                    <button class="btn btn-warning"><i class="ti-pencil"></i></button>
                                                  </a>
                                                </span>
                                              <?php } ?>

                                            </div>
                                          </div>
                                      <?php } ?>

                                    </div>
                                    <!--===================================================-->
                                    <!--End Hover Rows-->
                                    <ul class="pagination">

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                      <div id="demo-lft-tab-2" class="tab-pane fade in <?php echo ($error == "" ? "" : "active")?>">
                        <div class="">

              					    <div class="panel-body">

                                <div class="col-sm-12">
              					        <div class="">
              					            <!--Horizontal Form-->
              					            <!--===================================================-->
              					            <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksisejarah')?>">

                                      <div class="form-group">
                                          <label class="col-md-2 control-label" for="demo-hor-inputemail"></label>
                                          <div class="col-sm-9">
                                            <div  class="image-upload" style="height: 200px; width: 100% ; ">
                                            <label  for="file-input" >
                                              <img alt="Profile Picture" class="img-lg  mar-ver" src="<?php echo base_url('assets/admin/img/profile-photos/pictureimage.png') ?>"
                                              style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                                              data-holder-rendered="true">
                                              <span style=""><label>PICTURE (Ukuran : 1000 x 210)Pixel</label></span>
                                            </label>
                                            <input type='file' name='userfile' required id='file-input' >
                                          </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-sm-12">
                                          <label  class="control-label">Sejarah</label>
                                          <textarea class="form-control mceEditorsejarah" name="sejarah"  >
                                              <?php echo ($data == "" ? "" : $data['sejarah'] )?>
                                          </textarea>
                                        </div>
                                      </div>

            					                <div class="panel-footer text-right">
                                        <?php if ($datasejarah != null) { ?>
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
