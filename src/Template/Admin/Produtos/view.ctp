<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produto Captacao'), ['controller' => 'ProdutoCaptacao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto Captacao'), ['controller' => 'ProdutoCaptacao', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($produto->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recorrencia') ?></th>
            <td><?= h($produto->recorrencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($produto->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempo Trabalho') ?></th>
            <td><?= $this->Number->format($produto->tempo_trabalho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($produto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($produto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($produto->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Produto Captacao') ?></h4>
        <?php if (!empty($produto->produto_captacao)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Captacao Id') ?></th>
                <th scope="col"><?= __('Produto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($produto->produto_captacao as $produtoCaptacao): ?>
            <tr>
                <td><?= h($produtoCaptacao->id) ?></td>
                <td><?= h($produtoCaptacao->captacao_id) ?></td>
                <td><?= h($produtoCaptacao->produto_id) ?></td>
                <td><?= h($produtoCaptacao->created) ?></td>
                <td><?= h($produtoCaptacao->modified) ?></td>
                <td><?= h($produtoCaptacao->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProdutoCaptacao', 'action' => 'view', $produtoCaptacao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProdutoCaptacao', 'action' => 'edit', $produtoCaptacao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProdutoCaptacao', 'action' => 'delete', $produtoCaptacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtoCaptacao->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
