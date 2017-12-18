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
  <?= $this->Html->css('main.css?string='.uniqid()) ?>
  <?= $this->Html->css('font-awesome.css') ?>

  <!-- SCRIPTS -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <?= $this->Html->script('vendor/modernizr-2.7.1.min.js') ?>

  <?= $this->Html->script('slick.js?string='.uniqid()) ?>
  <?= $this->Html->script('talktous.js?string='.uniqid()) ?>

  <?= $this->Html->css('slick.css') ?>
  <?= $this->Html->css('slick-theme.css') ?>
</head>

<body>

  <div title="Basic dialog" class="talktous" data-dialog="brasil">
    <a href="/" style="color: #ffffff; z-index: 100; position: absolute; right: 2%; top: 2%; border: 1px solid #ffffff; padding: 5px 10px; text-transform: lowercase; cursor: pointer;">Voltar | X</a>
    <div class="bg" style="background-image: url(images/countries/morocco/bg-morocco.jpg)"></div>
    <div class="bg_2"></div>
    <div class="box-table">
      <div class="element-title">
        <div class="big_title"><?=$affiliate->country?></div>
      </div>
      <div class="content">

        <div class="box">
          <div class="split">
            <div class="logo">
              <div class="logo_img">
                <img src="images/logo_network.png" alt="3AWW">
              </div>
            </div>
            <div class="text">
              <p><?=$affiliate->description?></p>
              </div>
            </div>
            <div class="split">
              <div class="banner-country">
                <img src="images/countries/morocco/casablanca.jpg" alt="Casablanca">
                <img src="images/countries/morocco/team.jpg" alt="Team">
                <img src="images/countries/morocco/morocco.jpg" alt="Agency">
              </div>
            </div>
          </div>

          <div class="box">
            <div class="split">
              <div class="title">Talk to us</div>
              <div class="form">
                <form action="">
                  <input type="text" placeholder="Name"/>
                  <input type="text" placeholder="E-mail"/>
                  <textarea placeholder="Message"></textarea>
                  <button>Send</button>
                </form>
              </div>
            </div>
            <div class="split">
              <div class="title">clients</div>
              <div class="banner-logos">
                <div class="btn-logo-clients" data-id="1">
                  <img src="images/countries/morocco/sony.png">
                </div>
                <div class="btn-logo-clients" data-id="2">
                  <img src="images/countries/morocco/LG.png">
                </div>
                <div class="btn-logo-clients" data-id="3">
                  <img src="images/countries/morocco/BASF.png">
                </div>
              </div>
              <div class="banner-logos">
                <div class="btn-logo-clients" data-id="4">
                  <img src="images/countries/morocco/schindler.png">
                </div>
                <div class="btn-logo-clients" data-id="5">
                  <img src="images/countries/morocco/vichy.png">
                </div>
                <div class="btn-logo-clients" data-id="6">
                  <img src="images/countries/morocco/jansport.png">
                </div>
              </div>

              <div class="text-clients" data-id="1">
                <div class="head">
                  <div class="logo-head">
                    <img src="images/countries/morocco/sony.png">
                  </div>
                  <div class="close-btn">&times;</div>
                </div>
                <div class="content">
                  <p>Curabitur non erat et elit placerat pulvinar vitae ac nunc. Vivamus malesuada nunc vitae auctor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>

              <div class="text-clients" data-id="2">
                <div class="head">
                  <div class="logo-head">
                    <img src="images/countries/morocco/LG.png">
                  </div>
                  <div class="close-btn">&times;</div>
                </div>
                <div class="content">
                  <p>Curabitur non erat et elit placerat pulvinar vitae ac nunc. Vivamus malesuada nunc vitae auctor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>

              <div class="text-clients" data-id="3">
                <div class="head">
                  <div class="logo-head">
                    <img src="images/countries/morocco/BASF.png">
                  </div>
                  <div class="close-btn">&times;</div>
                </div>
                <div class="content">
                  <p>Curabitur non erat et elit placerat pulvinar vitae ac nunc. Vivamus malesuada nunc vitae auctor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>

              <div class="text-clients" data-id="4">
                <div class="head">
                  <div class="logo-head">
                    <img src="images/countries/morocco/schindler.png">
                  </div>
                  <div class="close-btn">&times;</div>
                </div>
                <div class="content">
                  <p>Curabitur non erat et elit placerat pulvinar vitae ac nunc. Vivamus malesuada nunc vitae auctor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>

              <div class="text-clients" data-id="5">
                <div class="head">
                  <div class="logo-head">
                    <img src="images/countries/morocco/vichy.png">
                  </div>
                  <div class="close-btn">&times;</div>
                </div>
                <div class="content">
                  <p>Curabitur non erat et elit placerat pulvinar vitae ac nunc. Vivamus malesuada nunc vitae auctor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
              </div>

              <div class="text-clients" data-id="6">
                <div class="head">
                  <div class="logo-head">
                    <img src="images/countries/morocco/jansport.png">
                  </div>
                  <div class="close-btn">&times;</div>
                </div>
                <div class="content">
                  <p>Curabitur non erat et elit placerat pulvinar vitae ac nunc. Vivamus malesuada nunc vitae auctor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <script src="js/trigger.js"></script>
  </body>
  </html>
