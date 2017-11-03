<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Visualização de banner</h4>
        </div>
        <div class="content">
            <h3><?= h($banner->title) ?></h3>
    
            <?php
                foreach($banner->files as $file){
                    echo $this->Html->image('uploads/'.$file->filename, ['class'=>'img-thumbnail']);
                }
            ?>
        </div>
      </div>
    </div>
  </div>
</div>