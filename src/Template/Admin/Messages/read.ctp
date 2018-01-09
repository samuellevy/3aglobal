<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title"><strong>Contact</strong></h4>
          <!-- <p class="category"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $message->id], ['confirm' => __('Tem certeza de que deseja excluir permanentemente essa mensagem?')]) ?></p> -->
          <h5><?=$message->created?></h5>
          <p class="category"><strong>From: </strong><?=$message->name?> (<?=$message->email?>)</p>
          <p class="category"><strong>E-mail: </strong><?=$message->email?></p>
          <p class="category"><strong>To: </strong><?=$message->affiliate->name?> (<?=$message->affiliate->country?>)</p>

          <p class="category">
            <!--
            <?= $this->Form->postLink(__('Anterior'), ['action' => 'read', $message->id-1]) ?>
            <?= $this->Form->postLink(__('Próximo'), ['action' => 'read', $message->id+1]) ?>  -->
          </p>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <strong>Message: </strong>
              <p><?=$message->message?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $this->Form->postLink(__('< Voltar'), ['action' => 'return']) ?>
</div>
