<?php $site_name = "3AWorldWide | Gerenciador"; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <title>
        <?=$site_name?> - <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon', 'favicon-32x32.png') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('light-bootstrap-dashboard.css') ?>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <?= $this->Html->css('pe-icon-7-stroke.css') ?>
    <?= $this->Html->css('main.css?build='.uniqid()) ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="blue">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Gerenciador
                </a>
            </div>
            <?php echo $this->element("Gerenciador.navigation_sidebar");?>
    	</div>
    </div>
    <div class="main-panel">
        <?php echo $this->element("Gerenciador.navigation_topbar");?>
        <div class="content">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
        <?php echo $this->element("Gerenciador.footer");?>
    </div>
  </div>
</body>

<?= $this->Html->script('../vendor/jquery-1.10.2.js') ?>
<?= $this->Html->script('../vendor/bootstrap.min.js') ?>
<!--  Checkbox, Radio & Switch Plugins -->
<?= $this->Html->script('../vendor/bootstrap-checkbox-radio-switch.js') ?>
<!--  Charts Plugin -->
<?= $this->Html->script('../vendor/chartist.min.js') ?>
<!--  Notifications Plugin    -->
<?= $this->Html->script('../vendor/bootstrap-notify.js') ?>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<?= $this->Html->script('../vendor/light-bootstrap-dashboard.js') ?>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<?= $this->Html->script('../vendor/demo.js') ?>

<?= $this->Html->script('script.js?build='.uniqid());?>

<?= $this->Html->script('../vendor/ckeditor/ckeditor.js');?>


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
