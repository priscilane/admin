<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsPhoto[]|\Cake\Collection\CollectionInterface $newsPhotos
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
<div class="newsPhotos index large-9 medium-8 columns content">
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('new_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newsPhotos as $newsPhoto): ?>
            <tr>
                <td><?= h($newsPhoto->created_at) ?></td>
                <td><?= h($newsPhoto->updated_at) ?></td>
                <td><?= $newsPhoto->has('news') ? $this->Html->link($newsPhoto->news->title, ['controller' => 'News', 'action' => 'view', $newsPhoto->news->id]) : '' ?></td>
                <td><?= h($newsPhoto->photo) ?></td>
                <td><?= h($newsPhoto->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $newsPhoto->id],['class' => 'btn btn-primary', 'id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $newsPhoto->id], ['class' => 'btn btn-warning', 'id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $newsPhoto->id], ['confirm' => __('Deseja apagar {0}?', $newsPhoto->id),'class'=>'btn btn-danger','id' => 'btn-link']) ?>
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
