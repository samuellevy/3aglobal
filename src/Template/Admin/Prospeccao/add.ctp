<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Nova prospecção</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($prospeccao) ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php echo $this->Form->control('cliente_id', ['class'=>'form-control', 'label'=>'Cliente']); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <?php echo $this->Form->control('description', ['class'=>'form-control ckeditor', 'label'=>'Descrição']); ?>
                </div>
              </div>
            </div>

            <?= $this->Form->button(__('Criar'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
            <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>
