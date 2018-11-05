<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="row">
    <div class="col-11">
        <h3><?= __('Tags') ?></h3>
    </div>
    <div class="col-1">
        <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
<div class="tags index large-9 medium-8 columns content">
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criação') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Atualização') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tags as $tag): ?>
            <tr>
                <td><?= h($tag->title) ?></td>
                <td><?= h($tag->created) ?></td>
                <td><?= h($tag->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Vizualizar'), ['action' => 'view', $tag->id], ['class' => 'btn btn-primary', 'id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tag->id], ['class' => 'btn btn-warning','id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $tag->id], ['confirm' => __('Deseja apagar {0}?', $tag->id),'class'=>'btn btn-danger','id' => 'btn-link']) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, Mostrando {{current}} usuário(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
