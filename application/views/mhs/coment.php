                    

                    <?php 
                    $idPengajuan = $komentar->idPengajuan;
                    ?>
                    
                    <div class="bs-example" data-example-id="simple-jumbotron">
                      <div class="jumbotron">
                        <h1><?php echo $komentar->jdl;?></h1>
                        <hr>
                        <i><p>Kepada Dosen: <?= $komentar->nama;?> || Waktu Pengajuan: <?= $komentar->tgl;?></p></i>
                        <hr>
                        <p><?php echo $komentar->ket;?></p>
                      </div>
                    </div>                   
                    

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
