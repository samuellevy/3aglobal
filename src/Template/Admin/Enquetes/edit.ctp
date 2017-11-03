<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Editar banner</h4>
        </div>
        <div class="content">
        <?php foreach($banner->files as $file){ ?>
            <div class="card" style="width: 20rem;">
                <?php echo $this->Html->image('uploads/'.$file->filename, ['class'=>'card-img-top', 'style'=>'width: 100%;']);?>

                <?= $this->Form->postLink(
                    '<button type="button" aria-hidden="true" class="close">×</button>',
                    ['action' => 'remove', $file->id, $banner->id],
                    ['escape'=>false, 'confirm' => __('Você tem certeza que deseja remover o arquivo do banner # {0}?',$banner->id)]) ?>
            </div>
        <?php }?>  
        
          <?= $this->Form->create($banner, ['type'=>'file']) ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']); ?>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->file('uploadfiles[]', ['multiple'=>true]);?>
                  <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
                </div>
            </div>
            
            <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>