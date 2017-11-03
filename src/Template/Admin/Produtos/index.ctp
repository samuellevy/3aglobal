<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Produtos</h4>
          <p class="category">Lista de todos os produtos</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('recorrencia', ['label'=>'Recorrência']) ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($produtos as $produto): ?>
              <tr>
                  <td><?= $this->Number->format($produto->id) ?></td>
                  <td><?= h($produto->nome) ?></td>
                  <td><?= h($produto->tipo) ?></td>
                  <td><?= h($produto->valor) ?></td>
                  <td><?= h($produto->recorrencia) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $produto->id]) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $produto->id]) ?>
                      <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
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
                  <li><a href="<?= $this->Url->build(["controller" => "produtos", "action" => "add"]);?>">Novo</a></li>
              </ul>
              <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
