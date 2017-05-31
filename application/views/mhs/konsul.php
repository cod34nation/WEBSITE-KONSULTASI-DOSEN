      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Ajukan Konsultasi</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>                    
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kepada
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="nip">                          
                        <option>--Pilih Dosen</option>
                          <?php
                            foreach ($dosen as $dsn) {
                              echo "<option value=".$dsn->nip.">".$dsn->nama." (".$dsn->matkul.")"."</option>";
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Judul
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" name="jdl" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Spesifikasi
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="ket">
                          
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal & Jam
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="single_cal2" name="tgl">
                        </div>
                      </div>
                    </div>
                    <div class="ln_solid"></div>                
                  </form>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button onclick="ajukan()" class="btn btn-primary">Ajukan</button>
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
            url : "<?php echo site_url('mhs/Ckonsul/ajukan')?>",
            type: "POST",
            data: $('#demo-form2').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               alert('Pengajuan telah di simpan. Silahkan tunggu konfirmasi dari dosen terkait!');
               $('[name="nip"]').val("");
               $('[name="jdl"]').val("");
               $('[name="ket"]').val("");
               $('[name="tgl"]').val("");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        }
      </script>