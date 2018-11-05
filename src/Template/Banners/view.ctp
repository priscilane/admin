
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('DADOS DO BANNERS') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>

<div class="users view large-9 medium-8 columns content">
<h3><?= h($banner->title) ?></h3>
    <table class="table table-dark">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($banner->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($banner->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($banner->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($banner->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($banner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creted At') ?></th>
            <td><?= h($banner->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($banner->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $banner->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ações') ?></th>
            <td>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banner->id], [ 'class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['confirm' => __('Deseja apagar banner {0}?', $banner->id),  'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
    </table>