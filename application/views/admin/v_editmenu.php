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

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Menu</h1>


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
                        <a data-toggle="tab" href="#demo-lft-tab-2">
                            <i class="ti-pencil"></i>
                            <span class="menu-title">Edit Menu</span>
                        </a>
                      </li>

                      <li >
                        <a  href="<?php echo site_url('admin/menu') ?>">
                            <i class="ti-eye"></i>
                            <span class="menu-title">Menu</span>
                        </a>
                      </li>
                  </ul>

                  <!--Tabs Content-->
                  <div class="tab-content">
                      <div id="demo-lft-tab-2" class="tab-pane fade active in">
                        <div class="">

                            <div class="panel-body">



                                <div class="col-sm-12">
                                <div class="">
                                    <!--Horizontal Form-->
                                    <!--===================================================-->
                                   <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/updatemenu')?>">
                                     <input type="hidden" name="id" value="<?php echo $editmenu->id_menu ?>">
                                     <div class="form-group">
                                          <label class="col-md-2 control-label" >Nama Menu</label>
                                          <div class="col-sm-8">
                                             <input type="text" class="form-control" name="menu" value="<?php echo $editmenu->nama_menu?>">
                                          </div>
                                     </div>

                                     <div class="form-group">
                                          <label class="col-md-2 control-label" >Url</label>
                                          <div class="col-sm-8">
                                             <input type="text" class="form-control" name="url" value="<?php echo $editmenu->url?>">
                                          </div>
                                     </div>

                                     <div class="form-group ">
                                       <label class="col-md-2 control-label" >Status</label>
                                        <div class="col-sm-8">
                                          <?php if ($editmenu->aktif == '1') { ?>
                                            <div class="radio">
                                                <!-- Inline radio buttons -->
                                                <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="status" value='1' checked="checked" >
                                                <label for="demo-inline-form-radio">Aktif</label>

                                                <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="status" value='0'>
                                                <label for="demo-inline-form-radio-2">Tidak Aktif</label>

                                            </div>
                                          <?php } else { ?>
                                            <div class="radio">
                                                <!-- Inline radio buttons -->
                                                <input id="demo-inline-form-radio" class="magic-radio" type="radio" name="status" value='1' checked="checked" >
                                                <label for="demo-inline-form-radio">Aktif</label>

                                                <input id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="status" value='0' checked="checked">
                                                <label for="demo-inline-form-radio-2">Tidak Aktif</label>

                                            </div>
                                          <?php } ?>
                                        </div>
                                    </div>

                                      <div class="panel-footer text-right">
                                          <button class="btn btn-success" type="submit">update</button>
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
