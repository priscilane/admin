<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galery[]|\Cake\Collection\CollectionInterface $galeries
 */
?>
<div class="row">
<div class="col-11">
    <h3><?= __('Galeria de fotos') ?></h3>
</div>
<div class="col-1">
    <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
</div>
</div>
<div class="galeries index large-9 medium-8 columns content">
<table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Criação') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Atualização') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galeries as $galery): ?>
            <tr>
                <td><?= h($galery->creted_at) ?></td>
                <td><?= h($galery->updated_at) ?></td>
                <td><?= h($galery->name) ?></td>
                <td><?= h($galery->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $galery->id],['class' => 'btn btn-primary', 'id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $galery->id], ['class' => 'btn btn-warning', 'id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $galery->id], ['confirm' => __('Deseja apagar {0}?', $galery->id),'class'=>'btn btn-danger','id' => 'btn-link']) ?>
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
