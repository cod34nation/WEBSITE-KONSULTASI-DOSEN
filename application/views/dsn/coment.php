                    

                    <?php 
                    $idPengajuan = $komentar->idPengajuan;
                    ?>
                    
                    <div class="bs-example" data-example-id="simple-jumbotron">
                      <div class="jumbotron">
                        <h1><?php echo $komentar->jdl;?></h1>
                        <hr>
                        <i><p>Dari: <?= $komentar->nama;?> || Angkatan: <?= $komentar->angkatan;?> || Waktu Pengajuan: <?= $komentar->tgl;?></p></i>
                        <hr>
                        <p><?php echo $komentar->ket;?></p>
                      </div>
                      <a href="#" class="btn btn-lg btn-success" onclick="terima(<?= $komentar->idPengajuan?>)"><i class="fa fa-check"></i> Terima</a>
                      <a href="#" class="btn btn-lg btn-warning" onclick="tolak(<?= $komentar->idPengajuan?>)"><i class="fa fa-close"></i> Tolak</a>
                    </div>
                    
                    <script type="text/javascript">
                      function terima(id) {
                        $.ajax({
                            url : "<?php echo site_url('dsn/Cdsn/terima')?>",
                            type: "POST",
                            data: 'id='+id+'&nip='+<?= $komentar->nip ?>,
                            dataType: "JSON",
                            success: function(data)
                            {  
                               alert('Pengajuan jadwal konsultasi diterima');
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                alert('error');
                            }
                        });
                      }

                      function tolak(id) {
                        $.ajax({
                            url : "<?php echo site_url('dsn/Cdsn/tolak')?>",
                            type: "POST",
                            data: 'id='+id+'&nip='+<?= $komentar->nip ?>,
                            dataType: "JSON",
                            success: function(data)
                            {  
                               alert('Pengajuan jadwal konsultasi ditolak');
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                alert('error');
                            }
                        });
                      }
                    </script>

        <div class="clearfix"></div>
        <br>
        <hr>
        <hr>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Komentar</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>                    
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <div id="isicoment">
                    <?php
                      require 'isiComent.php';
                    ?>   
                  </div>               
                </div>
              </div>
            </div>
          </div>
