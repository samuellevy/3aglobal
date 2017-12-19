<div title="Basic dialog" class="talktous" data-dialog="brasil">
  <?= $this->Html->link('Voltar | X', ['controller'=>'pages','action'=>'home'], ['class'=>'close_back']);?>
  <div class="bg" style="background-image: url(<?php echo $this->Url->image('uploads/'.$affiliate['offices'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$affiliate['offices'][0]['id']]);?>)"></div>
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
              <?php echo $this->Html->image('Site.../images/logo_network.png');?>
            </div>
          </div>
          <div class="text">
            <p><?=$affiliate->description?></p>
          </div>
        </div>
        <div class="split">
          <div class="banner-country">
            <?php //die(debug($affiliate));?>
            <?php foreach($affiliate['offices'] as $office):?>
              <?php echo $this->Html->image('uploads/'.$office['filename'], ['class'=>'form-img', 'data-uid'=>$office['id']]);?>
            <?php endforeach;?>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="split">
          <div class="title">Talk to us</div>
          <div class="form">
            <?= $this->Form->create($contact); ?>
            <form action="">
              <?= $this->Form->control('name', ['placeholder' => 'Name','label'=>'']);?>
              <?= $this->Form->control('email', ['placeholder' => 'E-mail','label'=>'']);?>
              <?= $this->Form->control('message', ['placeholder' => 'Message','label'=>'']);?>
              <button type="submit">Send</button>
            </form>
            <?= $this->Form->end(); ?>
          </div>
        </div>
        <div class="split">
          <div class="title">clients</div>
          <div class="banner-logos">
            <?php foreach($affiliate['clients'] as $client):?>
              <?php foreach($client['files'] as $file):?>
                <?php echo $this->Html->image('uploads/'.$file['filename'], ['class'=>'btn-logo-clients', 'data-id'=>$file['id']]);?>
              <?php endforeach;?>
            <?php endforeach;?>
          </div>

          <?php foreach($affiliate['clients'] as $client):?>
            <div class="text-clients" data-id="<?=$client['id']?>">
              <div class="head">
                <div class="logo-head">
                  <?php echo $this->Html->image('uploads/'.$client['files'][0]['filename']);?>
                </div>
                <div class="close-btn">&times;</div>
              </div>
              <div class="content">
                <p><?=$client['description']?></p>
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
</div>
