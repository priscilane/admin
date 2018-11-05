<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Information[]|\Cake\Collection\CollectionInterface $informations
 */
?>
    <div class="row">
        <div class="col-11">
            <h3><?= __('Informações') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>


<div class="informations index large-9 medium-8 columns content">
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Criação') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Atualização') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Endereço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Twitter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Instgram') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Youtube') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($informations as $information): ?>
            <tr>
                <td><?= h($information->creted_at) ?></td>
                <td><?= h($information->updated_at) ?></td>
                <td><?= h($information->email) ?></td>
                <td><?= h($information->phone) ?></td>
                <td><?= h($information->adress) ?></td>
                <td><?= h($information->twitter) ?></td>
                <td><?= h($information->instgram) ?></td>
                <td><?= h($information->youtube) ?></td>
                <td><?= h($information->facebook) ?></td>
                <td><?= h($information->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $information->id], ['class' => 'btn btn-primary', 'id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $information->id], ['class' => 'btn btn-warning', 'id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $information->id],['confirm' => __('Tem certeza que deseja remover {0}?', $information->email),'class' => 'btn btn-danger', 'id' => 'btn-link']) ?>
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
