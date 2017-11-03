<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Novo produto</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($produto) ?>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <?php echo $this->Form->control('nome', ['class'=>'form-control', 'label'=>'Título']);?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <?php echo $this->Form->control('valor', ['class'=>'form-control', 'label'=>'Valor']);?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <?php echo $this->Form->control('tipo', ['class'=>'form-control', 'label'=>'Tipo','options' => $tipos, 'value'=>array_search($produto->tipo, $tipos)]); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <?php echo $this->Form->control('recorrencia', ['class'=>'form-control', 'label'=>'Recorrência', 'options' => $options_recorrencia, 'value'=>array_search($produto->recorrencia, $options_recorrencia)]); ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <?php echo $this->Form->control('tempo_trabalho', ['class'=>'form-control', 'label'=>'Tempo de trabalho', 'type'=>'text']); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <?php echo $this->Form->control('description', ['class'=>'form-control', 'label'=>'Descrição']); ?>
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
