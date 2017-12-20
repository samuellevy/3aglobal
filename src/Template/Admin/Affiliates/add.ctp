<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Register new affiliate</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($affiliate, ['type'=>'file']) ?>
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
            <div class="col-md-3">
              <div class="form-group">
                <label>Logo</label><br/>
                <figure class="form-box-img">
                  <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Affiliate']);?>
                  <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Marca']);?>
                </figure>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Background</label><br/>
                <figure class="form-box-img">
                  <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php echo $this->Form->file('files.1.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.1.entity', ['class'=>'form-file', 'value'=>'Affiliate']);?>
                  <?php echo $this->Form->hidden('files.1.obs', ['class'=>'form-file', 'value'=>'Fundo']);?>
                </figure>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Office1</label><br/>
                <figure class="form-box-img">
                  <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php echo $this->Form->file('files.2.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.2.entity', ['class'=>'form-file', 'value'=>'Affiliate']);?>
                  <?php echo $this->Form->hidden('files.2.obs', ['class'=>'form-file', 'value'=>'Marca']);?>
                </figure>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Office2</label><br/>
                <figure class="form-box-img">
                  <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php echo $this->Form->file('files.3.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.3.entity', ['class'=>'form-file', 'value'=>'Affiliate']);?>
                  <?php echo $this->Form->hidden('files.3.obs', ['class'=>'form-file', 'value'=>'Fundo']);?>
                </figure>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Office3</label><br/>
                <figure class="form-box-img">
                  <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php echo $this->Form->file('files.4.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.4.entity', ['class'=>'form-file', 'value'=>'Affiliate']);?>
                  <?php echo $this->Form->hidden('files.4.obs', ['class'=>'form-file', 'value'=>'Fundo']);?>
                </figure>
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
