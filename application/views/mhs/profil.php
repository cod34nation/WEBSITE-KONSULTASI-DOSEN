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
                  <div class="col-md-12">

                    <div class="profile_title">
                    <div class="x_content">
                      <div class="col-md-12">
                        <h1><i><?=$profil->nama;?></i></h1>
                        <hr>
                        <h3>
                        <div class="row">
                          <div class="col-md-2">
                            NIM
                            <br><br>
                            Angkatan
                            <br><br>
                            Telepon
                            <br><br>
                            Email
                            <br><br>
                            Facebook
                            
                          </div>
                          <div class="col-md-9">
                            <?=$profil->nim;?>
                            <br><br>
                            <?=$profil->angkatan;?>
                            <br><br>
                            <?=$profil->tlp;?>
                            <br><br>
                            <?=$profil->email;?>
                            <br><br>
                            <?=$profil->fb;?>
                          </div>
                        </div>
                        </h3>
                      </div>
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