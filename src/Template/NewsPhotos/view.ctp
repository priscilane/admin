<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsPhoto $newsPhoto
 */
?>
<div class="row">
    <div class="col-10">
        <h3><?= __('DADOS DA FOTO') ?></h3>
    </div>
    <div class="col-2">
        <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
    </div>
</div>
<div class="newsPhotos view large-9 medium-8 columns content">
    <h3><?= h($newsPhoto->id) ?></h3>
    <table class="table table-dark">
        <tr>
            <th scope="row"><?= __('News') ?></th>
            <td><?= $newsPhoto->has('news') ? $this->Html->link($newsPhoto->news->title, ['controller' => 'News', 'action' => 'view', $newsPhoto->news->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($newsPhoto->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newsPhoto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($newsPhoto->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($newsPhoto->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $newsPhoto->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row">Ações</th>
            <td>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $newsPhoto->id],['class'=>'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $newsPhoto->id], ['confirm' => __('Deseja apagar {0}?', $newsPhoto->id), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
    </table>
</div>
