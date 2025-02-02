<html class="no-js"> <!--<![endif]-->
<head>
  <title>3a Global</title>

  <!-- META -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=4.0, maximum-scale=1.0" />

  <!-- CSS -->
  <?= $this->Html->css('normalize.css') ?>
  <?= $this->Html->css('main.css?string=') ?>
  <?= $this->Html->css('font-awesome.css') ?>

  <!-- SCRIPTS -->
  <?= $this->Html->script('vendor/jquery-1.9.1.min.js') ?>
  <?= $this->Html->script('vendor/modernizr-2.7.1.min.js') ?>

  <?= $this->Html->script('slick.js?string=') ?>
  <?= $this->Html->script('talktous.js?string=') ?>

  <?= $this->Html->css('slick.css') ?>
  <?= $this->Html->css('slick-theme.css') ?>
</head>

<body>
  <?= $this->Flash->render() ?>
  <?= $this->fetch('content') ?>
</body>
</html>
