<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Nova enquete</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($enquete) ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']); ?>
                </div>
                <div class="form-group">
                  <?php echo $this->Form->control('body', ['class'=>'form-control ckeditor', 'label'=>'Corpo']); ?>
                </div>
                <div class="form-group col-md-4">
                  <?php echo $this->Form->control('final', ['class'=>'form-control', 'label'=>'Data final', 'type'=>'date']); ?>
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


<script>
$(document).ready(function(){
  alert('dsa');
});
</script>