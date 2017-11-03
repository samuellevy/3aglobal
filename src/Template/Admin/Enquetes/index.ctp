<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Enquetes</h4>
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
                <?php foreach ($enquetes as $enquete): ?>
                <tr>
                    <td><?= $this->Number->format($enquete->id) ?></td>
                    <td><?= h($enquete->title) ?></td>
                    <td><?= h($enquete->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enquete->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enquete->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquete->id)]) ?>
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
                  <li><a href="<?= $this->Url->build(["controller" => "Enquetes", "action" => "add"]);?>">Novo</a></li>
              </ul>
              <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>