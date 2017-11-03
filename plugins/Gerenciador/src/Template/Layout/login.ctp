<?php $site_name = "3a World Wide - Gerenciador"; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
        <?=$site_name?> - <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('light-bootstrap-dashboard.css') ?>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <?= $this->Html->css('pe-icon-7-stroke.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <div class="wrapper">

        <div class="content">
          <?= $this->fetch('content') ?>
        </div>

  </div>
</body>

<?= $this->Html->script('jquery-1.10.2.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<!--  Checkbox, Radio & Switch Plugins -->
<?= $this->Html->script('bootstrap-checkbox-radio-switch.js') ?>
<!--  Charts Plugin -->
<?= $this->Html->script('chartist.min.js') ?>
<!--  Notifications Plugin    -->
<?= $this->Html->script('bootstrap-notify.js') ?>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<?= $this->Html->script('light-bootstrap-dashboard.js') ?>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<?= $this->Html->script('demo.js') ?>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        /*$.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

          },{
              type: 'info',
              timer: 4000
          });
          */
    });
</script>
</html>
