                <?php
                  foreach ($coment as $cm) {
                    $titik;
                    
                    $nama;
                    if ($cm->nmhs!=null) {
                      $nama = $cm->nmhs;
                      $titik='<i class="fa fa-graduation-cap"></i>';
                    }elseif ($cm->ndsn !=null) {
                      $nama = $cm->ndsn;
                      $titik='<i class="fa fa-star"></i>';
                    }

                    echo '
                      <div class="mail_list">
                        <div class="left">
                          '.$titik.'
                        </div>
                        <div class="right">
                          <h3>'.$nama.' <small>'.$cm->waktuKomen.'</small></h3>
                          <p>'.$cm->komentar.'</p>
                        </div>
                      </div>
                      ';
                  }                    
                  ?>

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="input-group">
                          <input type="text" id="komentar" name="komentar" class="form-control">
                          <span class="input-group-btn">
                            <button type="button" onclick="komentari(<?= $idPengajuan?>)" class="btn btn-primary">Komentari</button>
                          </span>
                        </div>
                      </div>
                    </div>

                  </form>
                  <script type="text/javascript">
                    function komentari(id) {
                      $.ajax({
                          url : "<?php echo site_url('dsn/Cdsn/komentari_mahasiswa')?>",
                          type: "POST",
                          data: 'id='+id+'&komentar='+$("#komentar").val(),
                          dataType: "html",
                          success: function(data)
                          {  
                             $('#isicoment').html(data);
                          },
                          error: function (jqXHR, textStatus, errorThrown)
                          {
                              alert('error');
                          }
                      });
                    }
                  </script>