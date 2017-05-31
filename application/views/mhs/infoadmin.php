<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_content">

                  <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Daftar Admin</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>
                          <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title">Nama </th>
                        <th class="column-title">Telepon </th>
                        <th class="column-title">Email </th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Check ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php
                    foreach ($admin as $ad) {
                      echo '
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">'.$ad->nama.'</td>
                          <td class=" ">'.$ad->tlp.' </td>
                          <td class=" ">'.$ad->email.' </td>
                        </tr>
                      ';
                    }                      
                    ?>
                    </tbody>

                  </table>
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