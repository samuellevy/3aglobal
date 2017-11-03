<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Novo banner</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($banner, ['type'=>'file']) ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']); ?>
                  <?php echo $this->Form->file('uploadfiles[]', ['multiple'=>true]);?>
                </div>
              </div>
            </div>
            <?= $this->Form->button(__('Enviar'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
            <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>