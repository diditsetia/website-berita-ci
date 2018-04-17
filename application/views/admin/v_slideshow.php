<style >
  #container .table .mi-width {
  width: 40%;

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
            <h1 class="page-header text-overflow">Slide Show</h1>
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
                            <span class="menu-title">Slideshow</span>
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
                      <div id="demo-lft-tab-1" class="tab-pane fade in <?php echo ($error == "" ? "active" : "")?>">
                        <?php if ($dataslideshow == null) { ?>
                          <div class="alert alert-danger" role="alert">
                             <p><?php echo 'Slideshow Belum Ada' ?></p>
                          </div>
                        <?php }else { ?>
                          <div class="row">
                              <div class="col-lg-12">
                                <?php $no=$this->uri->segment('3') + 1; ?>
                                  <div class="panel">

                                      <!--Hover Rows-->
                                      <!--===================================================-->
                                      <div style="padding-bottom: 0px;" class="panel-body">
                                          <table class="table table-hover table-vcenter">
                                              <thead>
                                                  <tr>
                                                      <th class="min-width">No</th>
                                                      <th class="min-width">Picture</th>
                                                      <th class="mi-width">Judul</th>
                                                      <th class="mi-width">Keterangan</th>
                                                      <th class="mi-width">Action</th>
                                                  </tr>
                                              </thead>
                                          <?php foreach ($dataslideshow as $key) { ?>
                                              <tbody>
                                                  <tr>
                                                    <td >
                                                      <p class="text-main text-semibold" >
                                                        <?php echo $no ?>
                                                      </p>
                                                    </td>

                                                      <td class="text-center">
                                                        <img class="img-responsive" src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['picture']) ?>" alt="Image">
                                                      </td>
                                                      <td >
                                                        <p class="text-main text-semibold" >
                                                          <?php echo $key['judul']  ?>
                                                        </p>
                                                      </td>

                                                      <td >
                                                        <p class="text-main text-semibold" >
                                                          <?php echo $key['keterangan'] ?>
                                                        </p>
                                                      </td>

                                                      <td>
                                                        <div id="myModal<?php echo $key['id_slideshow'];?>" class="modal fade" role="dialog">
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
                                                              <p> apakah anda yakin inggin menghapus Item ini ?</p>
                                                            </div>
                                                            <!-- footer modal -->
                                                            <div class="modal-footer">
                                                            <div class="col-sm-3">
                                                            <a href="<?php echo  site_url('admin/hapusslideshow').'/'.$key['id_slideshow'];?>"><button type="submit" name="submit"  class="btn btn-info" style="width:100%">Hapus</button></a>
                                                          </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $key['id_slideshow'];?>"><i class="ti-trash"></i></button>
                                                        <a href="<?php echo  site_url('admin/editslideshow').'/'.$key['id_slideshow'];?>">
                                                          <button class="btn btn-warning"><i class="ti-pencil"></i></button>
                                                        </a>

                                                      </td>
                                                  </tr>
                                              </tbody>
                                              <?php $no++; ?>
                                            <?php } ?>
                                          </table>
                                      </div>
                                      <!--===================================================-->
                                      <!--End Hover Rows-->
                                      <ul class="pagination">
                                          <?php echo $this->pagination->create_links(); ?>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                        <?php } ?>


                      </div>
                      <div id="demo-lft-tab-2" class="tab-pane fade in <?php echo ($error == "" ? "" : "active")?>">
                        <div class="">

              					    <div class="panel-body">

                                <div class="col-sm-12">
              					        <div class="">
              					            <!--Horizontal Form-->
              					            <!--===================================================-->
              					            <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksislideshow')?>">

                                      <div class="form-group">
                                          <label class="col-md-2 control-label" for="demo-hor-inputemail"></label>
                                          <div class="col-sm-9">
                                            <div  class="image-upload" style="height: 200px; width: 100% ; ">
                                            <label  for="file-input" >
                                              <img alt="Profile Picture" class="img-lg  mar-ver" src="<?php echo base_url('assets/admin/img/profile-photos/pictureimage.png') ?>"
                                              style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                                              data-holder-rendered="true">
                                              <span style=""><label>PICTURE (Ukuran : 1140 x 350)Pixel</label></span>
                                            </label>
                                            <input type='file' name='userfile' required id='file-input' >
                                          </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                           <label class="col-md-2 control-label" >Judul</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="judul" value="<?php echo ($data == "" ? "" : $data['judul'] ) ?>" required>
                                           </div>
                                      </div>

                                      <div class="form-group">
                                           <label class="col-md-2 control-label" >Keterangan</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="keterangan" value="<?php echo ($data == "" ? "" : $data['keterangan'] ) ?>" required>
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
