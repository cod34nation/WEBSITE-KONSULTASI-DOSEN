<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Konsultasi</title>


  <!-- Bootstrap core CSS -->

  <link href="<?=base_url('assets/gentelella/css/bootstrap.min.css')?>" rel="stylesheet">

  <link href="<?=base_url('assets/gentelella/fonts/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/gentelella/css/animate.min.css')?>" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?=base_url('assets/gentelella/css/custom.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/gentelella/css/icheck/flat/green.css')?>" rel="stylesheet" />

  <script src="<?=base_url('assets/gentelella/js/jquery.min.js')?>"></script>

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action="<?php echo $action; ?>" method="post">
            <h1>Sistem Konsultasi</h1>
            <?php echo $error; ?>
            <div>
              <input type="text" class="form-control" name="username" placeholder="Nomor ID" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password" required="" />
            </div>
            <div>
              <!-- <a class="btn btn-primary"> -->
              <button class="btn btn-primary" type="submit"> Masuk</button>
              <!-- </a> -->
            </div>
            <div class="clearfix"></div>
            <!-- <div class="separator"> -->

              <!-- <p class="change_link">
                <a href="#toregister" class="to_register"> Create Account </a>
              </p> -->
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="register" class="animate form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">
                <a href="#tologin" class="to_register"> Log in </a>
              </p>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
