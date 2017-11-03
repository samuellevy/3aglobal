<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Prospecções</h4>
          <p class="category">Lista de todas as prospecções</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title', ['label'=>'Título']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('cliente') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('user_id', ['label'=>'Criado por']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created', ['label'=>'Criado em']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($prospeccoes as $prospeccao): ?>
              <tr>
                  <td><?= $this->Number->format($prospeccao->id) ?></td>
                  <td><?= h($prospeccao->title) ?></td>
                  <td><?= h($prospeccao->cliente->nome) ?></td>
                  <td><?= h($prospeccao->user->name) ?></td>
                  <td><?= h($prospeccao->created) ?></td>
                  <td><?= $this->StatusBox->new($prospeccao->status); ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $prospeccao->id]) ?>
                      <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $prospeccao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prospeccao->id)]) ?>
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
                  <li><a href="<?= $this->Url->build(["controller" => "prospeccao", "action" => "add"]);?>">Novo</a></li>
              </ul>
              <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
