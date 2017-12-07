<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Register new page</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($page) ?>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Name']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Title']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('slug', ['class'=>'form-control', 'label'=>'Slug']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?php echo $this->Form->control('content', ['class'=>'form-control ckeditor', 'label'=>'Content']); ?>
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
