<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Banners</h4>
          <p class="category">Listar todos</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title', ['label'=>'Título']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created', ['label'=>'Criado em']) ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($banners as $banner): ?>
                <tr>
                    <td><?= $this->Number->format($banner->id) ?></td>
                    <td><?= h($banner->title) ?></td>
                    <td><?= h($banner->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $banner->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banner->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
          </table>

          <div class="paginator">
              <ul class="pagination">
                  <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
                  <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                  <?= $this->Paginator->numbers() ?>
                  <?= $this->Paginator->next(__('próximo') . ' >') ?>
                  <?= $this->Paginator->last(__('último') . ' >>') ?>
                  <li><a href="<?= $this->Url->build(["controller" => "Banners", "action" => "add"]);?>">Novo</a></li>
              </ul>
              <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>