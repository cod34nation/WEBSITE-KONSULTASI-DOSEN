<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_content">

                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
                      <h1>Daftar Dosen</h1>
                      <hr><br>                      
                    </div>
                    <div class="clearfix"></div>


                    <?php
                      foreach ($dosen as $dsn) {
                        echo '
                          <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDown">
                            <div class="well profile_view">
                              <div class="col-sm-12">
                                <h4 class="brief"><b><i>'.$dsn->nip.'</i></b></h4>
                                <div class="left col-xs-12">
                                  <h2>'.$dsn->nama.'</h2>
                                  <p><strong>Mata Kuliah: </strong> '.$dsn->matkul.' </p>
                                  <ul class="list-unstyled">
                                    <li><i class="fa fa-phone"></i> Telepon: '.$dsn->tlp.'</li>
                                    <br>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-xs-12 bottom text-center">
                                <div class="col-xs-12 col-sm-6 emphasis">
                                  <p class="ratings">
                                    <a>Point: '.$dsn->point.'</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ';
                      }                      
                    ?>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->