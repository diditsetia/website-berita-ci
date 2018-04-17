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
      <?php }else { ?>
        <?php if ($this->session->flashdata('sukses') !='') { ?>
          <div class="alert alert-success" role="alert">
             <p><?php echo $this->session->flashdata('sukses'); ?></p>
          </div>
        <?php } ?>
      <?php } ?>
        <h1 class="page-header text-overflow">Berita</h1>
      </div>
  </div>
  <div id="page-content">
    <div class="row">
      <div class="col-lg-12">
        <div class="tab-base">
          <ul class="nav nav-tabs">
            <li class="<?php echo ($error == "" ? "active" : "")?>">
              <a data-toggle="tab" href="#demo-lft-tab-1">
                <i class="ti-eye"></i>
                <span class="menu-title">Berita</span>
             </a>
            </li>
              <li class="<?php echo ($error == "" ? "" : "active")?>">
                <a data-toggle="tab" href="#demo-lft-tab-2">
                  <i class="ti-plus"></i>
                  <span class="menu-title">Create</span>
                </a>
            </li>
          </ul>

          <div class="tab-content">
            <div id="demo-lft-tab-1" class="tab-pane fade in <?php echo ($error == "" ? "active" : "")?>">
                <?php if ($databerita == null) { ?>
                  <div class="alert alert-danger" role="alert">
                     <p><?php echo 'Berita Belum Ada' ?></p>
                  </div>
                <?php } else { ?>
                  <div class="row">
                      <div class="col-lg-12">
                          <?php foreach ($databerita as $key ) { ?>
                          <div class="row">
                          <div class="col-md-12">
                            <div class="panel">

                               <div class="pad-all">
                                    <div class="media mar-btm">
                                           <div class="media-left">
                                                  <img src="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$key['foto']) ?>" style="object-fit: cover;" class="img-md img-circle" alt="Avatar">
                                            </div>
                                             <div class="media-body">
                                                    <p class="text-lg text-main text-semibold mar-no"><?php echo $key['judul_berita'] ?></p>
                                                    <p><?php echo $key['nama_penulis'] ?></p>
                                                    <?php if ($key['update_at'] !== '0000-00-00') { ?>
                                                      <p><?php echo $key['update_at'] ?></p>
                                                    <?php }else { ?>
                                                        <p><?php echo $key['create_at'] ?></p>
                                                    <?php } ?>

                                            </div>
                                     </div>
                                     <?php
                                     $text = $key['isi_berita'];
                                     $berita = strip_tags($text);
                                     ?>
                                    <p style="text-align: justify;"><?php echo substr( $berita,0,400).".."?></p>
                                    <div class="btn-group">
                                      <div id="myModal<?php echo $key['id_berita'];?>" class="modal fade" role="dialog">
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
                                          <a href="<?php echo  site_url('admin/hapusberita').'/'.$key['id_berita'];?>"><button type="submit" name="submit"  class="btn btn-info" style="width:100%">Hapus</button></a>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $key['id_berita'];?>"><i class="ti-trash"></i></button>
                                      <a href="<?php echo  site_url('admin/editberita').'/'.$key['id_berita'];?>">
                                        <button class="btn btn-warning"><i class="ti-pencil"></i></button>
                                      </a>
                                        <?php if ($key['popular'] == 0) { ?>
                                          <a href="<?php echo  site_url('admin/aksipopular').'/'.$key['id_berita'];?>" title="Klik button ini untuk menjadikan berita popular">
                                            <button class="btn btn-default"><i class="ti-star"  ></i></button>
                                          </a>
                                        <?php } else { ?>
                                          <a href="<?php echo  site_url('admin/hapuspopular').'/'.$key['id_berita'];?>" title="Berita Polular">
                                            <button class="btn btn-info"><i class="ti-star"  ></i></button>
                                          </a>
                                        <?php } ?>

                                    </div>
                               </div>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                  </div>
                <?php } ?>

                <ul class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
            </div>

        <div id="demo-lft-tab-2" class="tab-pane fade in <?php echo ($error == "" ? "" : "active")?>">
            <div class="panel-body">
              <div class="col-sm-12">
                <div class="">
                  <form class="form-horizontal" enctype='multipart/form-data' method="post" action="<?php echo site_url('admin/aksiberita')?>">
                    <div class="form-group">
                      <div class="col-sm-9">
                        <div  class="image-upload" style="height: 200px; width: 100% ; ">
                          <label  for="file-input" >
                            <img alt="Profile Picture" class="img-lg  mar-ver" src="<?php echo base_url('assets/admin/img/profile-photos/pictureimage.png') ?>"
                            style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                            data-holder-rendered="true">
                            <span style=""><label>PICTURE (Ukuran : 847 x 300)Pixel</label></span>
                          </label>
                            <input type='file' name='userfile' required id='file-input' >
                        </div>
                      </div>
                    </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <label class="control-label" >Judul</label><br>
                            <input type="text" class="form-control" name="judul" value="<?php echo ($data == "" ? "" : $data['judul_berita'] ) ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-6">
                            <label class="control-label" >Penulis</label><br>
                            <input type="text" class="form-control" name="penulis" value="<?php echo ($data == "" ? "" : $data['nama_penulis'] ) ?>" required>
                          </div>
                        </div>
                        <?php if ($datamenurow != null) { ?>
                          <div class="form-group">
                            <div class="col-sm-4">
                              <label  class="control-label">Menu</label>
                                <select id="Select" name='menu'  class="form-control">
                                  <option value=''>Umum (general)</option>
                                  <?php foreach ($datamenu as $key ) { ?>
                                    <option value='<?php echo $key['id_menu']?>'><?php echo $key['nama_menu']?></option>
                                  <?php } ?>
                                </select>
                            </div>
                          </div>

                        <?php } else { ?>
                          <div class="form-group">
                            <div class="col-sm-4">
                              <label  class="control-label">Menu</label>
                                <select id="Select" name='menu'  class="form-control">
                                  <option value='menu'>belum ada menu </option>
                                </select>
                            </div>
                          </div>
                        <?php } ?>

                        <div class="form-group">
                          <div class="col-sm-12">
                            <label  class="control-label">Isi Berita</label>
                            <textarea class="form-control mceEditorisiberita" name="berita" >
                              <?php echo ($data == "" ? "" : $data['isi_berita'] ) ?>
                            </textarea>
                          </div>
                        </div>

                       <div class="panel-footer text-right">
                         <button class="btn btn-success" type="submit">submit</button>
                        </div>
               </form>

  					 </div>
  				</div>
        </div>
    </div>
  </div>
</div>
</div>
      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
