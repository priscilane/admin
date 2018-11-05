<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner[]|\Cake\Collection\CollectionInterface $banners
 */
?>
<div class="news index large-9 medium-8 columns">
    <div class="row">
        <div class="col-11">
            <h3><?= __('Banners') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('creted_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banners as $banner): ?>
            <tr>
                <td><?= h($banner->creted_at) ?></td>
                <td><?= h($banner->updated_at) ?></td>
                <td><?= h($banner->title) ?></td>
                <td><?= h($banner->subtitle) ?></td>
                <td><?= h($banner->link) ?></td>
                <td><?= h($banner->photo) ?></td>
                <td><?= h($banner->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $banner->id], ['class' => 'btn btn-primary', 'id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banner->id], ['class' => 'btn btn-warning', 'id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['confirm' => __('Tem certeza que deseja remover o Banner {0}?', $banner->id), 'class' => 'btn btn-danger', 'id' => 'btn-link']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            &emsp;
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </nav>
</div>
