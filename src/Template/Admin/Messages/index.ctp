<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Mensagens</h4>
          <p class="category">Lista de todas as mensagens</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <!--
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('message') ?></th>
                -->


                <th scope="col"><?= $this->Paginator->sort('name', ['label'=>'from']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('affiliate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($messages as $message): ?>
                <tr>
                  <td style="<?=$message->status == 0?'font-weight: bold;':''?>"><?= $message->name ?></td>
                  <td style="<?=$message->status == 0?'font-weight: bold;':''?>"><?= $message->affiliate->name ?></td>
                  <td style="<?=$message->status == 0?'font-weight: bold;':''?>"><?= $message->affiliate->country ?></td>
                  <td><?= $message->created ?></td>
                  <?php if ($message->status == 0):?>
                    <td>Unread</td>
                  <?php elseif ($message->status == 1):?>
                    <td>Read</td>
                  <?php endif ?>


                  <td class="actions">
                    <?= $this->Form->postLink(__('Ler'), ['action' => 'read', $message->id]) ?>
                    <!-- <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete #{0}?', $message->id)]) ?> -->
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
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
