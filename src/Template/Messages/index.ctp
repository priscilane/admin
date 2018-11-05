<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message[]|\Cake\Collection\CollectionInterface $messages
 */
?>
    <div class="row">
        <div class="col-9">
            <h3><?= __('Mensagens') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Botão para teste (Criar)'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<div class="messages index large-9 medium-8 columns content">
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Criação') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Atualização') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message): ?>
            <tr>
                <td><?= h($message->creted_at) ?></td>
                <td><?= h($message->updated_at) ?></td>
                <td><?= h($message->sender_name) ?></td>
                <td><?= h($message->sender_email) ?></td>
                <td><?= h($message->subject) ?></td>
                <td><?= h($message->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $message->id], ['class' => 'btn btn-primary', 'id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $message->id], ['confirm' => __('Deseja apagar {0}?', $message->id),'class'=>'btn btn-danger','id' => 'btn-link']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            &emsp;
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
