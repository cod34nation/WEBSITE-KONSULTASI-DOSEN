      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Histori Konsultasi</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>                    
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" id="tampildata">
                  <ul class="list-unstyled timeline">
                  <?php
                  foreach ($history as $hs) {
                    $tanda;
                    if ($hs->status=="1") {
                      $tanda = '<i class="fa fa-check">';
                    }
                    elseif ($hs->status=="0") {
                      $tanda = '<i class="fa fa-close">';
                    }
                    else{
                      $tanda = '<i class="fa fa-clock-o">';
                    }

                    echo '
                        <li>
                          <div class="block">
                            <div class="tags">
                              <a href="#" onclick="kirimId('.$hs->idPengajuan.')" class="tag">
                                <span>
                                '.$tanda.'
                                </i> Detail</span>
                              </a>
                            </div>
                            <div class="block_content">
                              <h2 class="title">
                                '.$hs->jdl.'
                              </h2>
                              <div class="byline">
                                <span><h4>Kepada: '.$hs->nama.' || Pengajuan Waktu: '.$hs->tgl.'</h4></span>
                              </div>
                              <p class="excerpt">'.$hs->ket.'
                              </p>
                              <span class="byline">Waktu post: '.$hs->waktuPengajuan.'</span>
                            </div>
                          </div>
                        </li>
                    ';
                  }
                  ?>
                  </ul>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- /page content -->

      <script type="text/javascript">
        function kirimId(id){
          $.ajax({
            url : "<?php echo site_url('dsn/Cdsn/coment_mahasiswa')?>",
            type: "POST",
            data: 'id='+id,
            dataType: "html",
            success: function(data)
            {  
               $('#tampildata').html(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        }
      </script>