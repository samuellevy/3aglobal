<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Register new affiliate</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($affiliate) ?>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Name']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('country', ['class'=>'form-control', 'label'=>'Country']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('site', ['class'=>'form-control', 'label'=>'Site']);?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('email', ['class'=>'form-control', 'label'=>'E-mail']);?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('telephone', ['class'=>'form-control', 'label'=>'Phone number']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('address', ['class'=>'form-control', 'label'=>'Address']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label>Foto</label><br/>
                <div class="form-box-image">
                  <?php echo $this->Html->image('uploads/'.$affiliate['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$affiliate['files'][0]['id']]);?>
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file', 'data-uid'=>$affiliate['files'][0]['id']]);?>
                  <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$affiliate['files'][0]['id'];?>">Remover</button>
                  <?php //echo $this->Form->file('files.1.file', ['class'=>'form-file']);?>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?php echo $this->Form->control('description', ['class'=>'form-control ckeditor', 'label'=>'Presentation']); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?= $this->Form->button(__('Send'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>
