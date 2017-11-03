<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Captacao'), ['controller' => 'Captacao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Captacao'), ['controller' => 'Captacao', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cliente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= h($cliente->site) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($cliente->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($cliente->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($cliente->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($cliente->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cliente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cliente->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Captacao') ?></h4>
        <?php if (!empty($cliente->captacao)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->captacao as $captacao): ?>
            <tr>
                <td><?= h($captacao->id) ?></td>
                <td><?= h($captacao->cliente_id) ?></td>
                <td><?= h($captacao->created) ?></td>
                <td><?= h($captacao->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Captacao', 'action' => 'view', $captacao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Captacao', 'action' => 'edit', $captacao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Captacao', 'action' => 'delete', $captacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $captacao->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
