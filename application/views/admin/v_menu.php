<style >
  #container .table .mi-width {
  width: 80%;

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
            <h1 class="page-header text-overflow">Tambah Menu</h1>

        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
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
                            <span class="menu-title">Menu</span>
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
                        <?php if ( $datamenu == null) { ?>
                          <div class="alert alert-danger" role="alert">
                             <p><?php echo 'Menu Belum Ada' ?></p>
                          </div>
                        <?php } else { ?>
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
                                                      <th class="min-width">Menu</th>
                                                      <th class="min-width">Url</th>
                                                      <th class="mi-width">Status</th>
                                                      <th class="mi-width">Action</th>
                                                  </tr>
                                              </thead>
                                              <?php foreach ($datamenu as $key) { ?>

                                              <tbody>
                                                  <tr>
                                                      <td class="text-center">
                                                        <?php echo $no ?>
                                                      </td>
                                                      <td >
                                                        <p class="text-main text-semibold" >
                                                          <?php echo $key['nama_menu'] ?>
                                                        </p>
                                                      </td>

                                                      <td >
                                                        <p class="text-main text-semibold" >
                                                          <?php echo $key['url'] ?>
                                                        </p>
                                                      </td>

                                                      <td >
                                                        <p class="text-main text-semibold" >
                                                            <?php if ($key['aktif'] == 0 ) { ?>
                                                              <?php echo 'Tidak Aktif' ?>
                                                            <?php } else { ?>
                                                              <?php echo 'Aktif' ?>
                                                            <?php } ?>
                                                        </p>
                                                      </td>

                                                      <td>
                                                        <div id="myModal<?php echo $key['id_menu'];?>" class="modal fade" role="dialog">
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
                                                            <a href="<?php echo  site_url('admin/hapusmenu').'/'.$key['id_menu'];?>"><button type="submit" name="submit"  class="btn btn-info" style="width:100%">Hapus</button></a>
                                                          </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $key['id_menu'];?>"><i class="ti-trash"></i></button>
                                                        <a href="<?php echo  site_url('admin/editmenu').'/'.$key['id_menu'];?>">
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
                      <div id="demo-lft-tab-2" class="tab-pane fade">
                        <div class="">

              					    <div class="panel-body">

                                <div class="col-sm-12">
              					        <div class="">
              					            <!--Horizontal Form-->
              					            <!--===================================================-->
              					            <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksimenu')?>">

                                      <div class="form-group">
                                           <label class="col-md-2 control-label" >Nama Menu</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="menu" required>
                                           </div>
                                      </div>

                                      <div class="form-group">
                                           <label class="col-md-2 control-label" >Url/web/berita/</label>
                                           <div class="col-sm-8">
                                              <input type="text" class="form-control" name="url" required>
                                           </div>
                                      </div>

                                      <div class="form-group ">
                                        <label class="col-md-2 control-label" >Status</label>
            					                    <div class="col-sm-8">
            					                        <div class="radio">
            					                            <!-- Inline radio buttons -->
            					                            <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="status" value='1'  required>
            					                            <label for="demo-inline-form-radio">Aktif</label>

            					                            <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="status" value='0'  required>
            					                            <label for="demo-inline-form-radio-2">Tidak Aktif</label>

            					                        </div>
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
