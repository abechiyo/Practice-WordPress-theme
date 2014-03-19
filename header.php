<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title><?php bloginfo('name'); ?> <?php wp_title(); ?> | レンタルサーバー</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
        </div>

      <?php if (is_user_logged_in()) : ?>
        <div class="navbar-collapse collapse">
          <p class="navbar-form navbar-right text-muted">
            こんにちは！ <?php global $current_user; echo $current_user->display_name ?>さん <br />
            <a href="<?php echo wp_logout_url() ?>&amp;redirect_to=<?php echo esc_attr($_SERVER['REQUEST_URI']) ?>">ログアウトはこちら</a>
          </p>
        </div>  
      <?php else : ?>

        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right"  method="post" role="form" action="<?php echo wp_login_url() ?>?redirect_to=<?php echo esc_attr($_SERVER['REQUEST_URI']) ?>" >
            <div class="form-group">
              <input type="text" name="log" id="login_username" placeholder="User" class="form-control"　value="" />
            </div>
            <div class="form-group">
              <input type="password" name="pwd" id="login_password" placeholder="Password" class="form-control"　value="" />
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
    <?php endif; ?>

      </div><!--/ .navbar -->
    </div>

    <?php /* wp_headアクションをスタートさせる関数 */ ?>
    <?php wp_head(); ?>


