<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Novo cliente</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($cliente) ?>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('nome', ['class'=>'form-control', 'label'=>'Nome da empresa']);?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('email', ['class'=>'form-control', 'label'=>'E-mail']);?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('site', ['class'=>'form-control', 'label'=>'Site']);?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('telefone', ['class'=>'form-control', 'label'=>'Telefone']);?>
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

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('endereco', ['class'=>'form-control', 'label'=>'Endereço']);?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('bairro', ['class'=>'form-control', 'label'=>'Bairro']);?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('cidade', ['class'=>'form-control', 'label'=>'Cidade']);?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <?php echo $this->Form->control('estado', ['class'=>'form-control', 'label'=>'UF']);?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <?php echo $this->Form->control('tipo', ['class'=>'form-control', 'label'=>'Tipo','options' => $tipos, 'empty' => true]); ?>
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
