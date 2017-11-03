<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Clientes</h4>
          <p class="category">Lista de todos os clientes</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('site') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('tipo', ['label'=>'Status']) ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($clientes as $cliente): ?>
              <tr>
                  <td><?= $this->Number->format($cliente->id) ?></td>
                  <td><?= h($cliente->nome) ?></td>
                  <td><?= h($cliente->email) ?></td>
                  <td><?= h($cliente->site) ?></td>
                  <td><?= h($cliente->tipo) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->id]) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?>
                      <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
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
                  <li><a href="<?= $this->Url->build(["controller" => "Clientes", "action" => "add"]);?>">Novo</a></li>
              </ul>
              <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
