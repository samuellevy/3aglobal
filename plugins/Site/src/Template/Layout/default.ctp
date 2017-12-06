<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>3a Worldwide - Global website</title>

  <!-- META -->
  <?= $this->Html->charset() ?><?= $this->Html->meta('favicon.png','/favicon.png',['type' => 'icon']);?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- CSS -->
  <?= $this->Html->css('Site.normalize.css') ?>
  <?= $this->Html->css('Site.main.css') ?>
  <?= $this->Html->css('Site.font-awesome.css') ?>

  <!-- SCRIPTS -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <?= $this->Html->script('Site.vendor/modernizr-2.7.1.min.js') ?>
  <?= $this->Html->script('Site.jquery.onepage-scroll.js') ?>
  <?= $this->Html->script('Site.main.js') ?>

  <script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>

  <?= $this->Html->css('Site.onepage-scroll.css') ?>

  <?= $this->Html->script('Site.slick.js') ?>
  <?= $this->Html->css('Site.slick.css') ?>
  <?= $this->Html->css('Site.slick-theme.css') ?>
</head>

<body>
  <div id="nav" class="sidenav">
    <div class="btnMenu"><span class="close">&times;</span></div>
    <div class="items">
      <a href="#" page_id="2">About us</a>
      <a href="#" page_id="3">Services</a>
      <a href="#" page_id="4">Clients</a>
      <a href="#" page_id="5">Headquarters</a>
      <a href="#" page_id="6">Network</a>
    </div>
  </div>
  <div class="btnMenuBox">
    <div class="btnMenu">
      <span class="open">&#9776;</span>
    </div>
  </div>
  <div class="main">
    <?= $this->fetch('content') ?>
  </div>
  <?= $this->Html->script('Site.trigger.js') ?>
</body>
</html>
