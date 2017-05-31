<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Profil</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-12">
                      <center>
                        <h2>Input Data Mahasiswa</h2>
                      </center>
                      </div>
                    </div>
                    
                    <br>
                  <form id="demo-form2" action="#" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label col-md-2" for="first-name">NIM 
                        </label>
                        <div class="col-md-10">
                          <input type="text" id="nim" class="form-control col-md-7 col-xs-12" name="nim">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2" for="last-name">Nama 
                        </label>
                        <div class="col-md-10">
                          <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" name="nama">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-2">Angkatan</label>
                        <div class="col-md-10">
                          <input id="angkatan" class="form-control col-md-7 col-xs-12" type="text" name="angkatan">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2">Telepon</label>
                        <div class="col-md-10">
                          <input id="tlp" class="form-control col-md-7 col-xs-12" type="text" name="tlp">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label col-md-2">Email
                        </label>
                        <div class="col-md-10">
                          <input name="email" id="email" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2">Facebook
                        </label>
                        <div class="col-md-10">
                          <input id="fb" name="fb" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2">Password
                        </label>
                        <div class="col-md-10">
                          <input id="pwd" name="pwd" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                    </div> 

                  </div>
                    <div class="ln_solid"></div>                  
                  </form>

                    <div class="form-group">
                      <div class="col-md-12">
                        <center>
                        <button onclick="ajukan()" type="submit" class="btn btn-primary">Simpan</button>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <script type="text/javascript">
        function ajukan() {
          $.ajax({
            url : "<?php echo site_url('admin/Cadmin/simpan_mhs')?>",
            type: "POST",
            data: $('#demo-form2').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               alert('Data berhasil disimpan!');
               $('[name="nim"]').val("");
               $('[name="nama"]').val("");
               $('[name="angkatan"]').val("");
               $('[name="tlp"]').val("");
               $('[name="email"]').val("");
               $('[name="fb"]').val("");
               $('[name="pwd"]').val("");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        }
      </script>