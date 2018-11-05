<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Information $information
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Visualizar Informação') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>

<div class="informations view large-9 medium-8 columns content">
    <h3><?= h($information->id) ?></h3>
    <table class="vertical-table table table-dark">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($information->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($information->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress') ?></th>
            <td><?= h($information->adress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter') ?></th>
            <td><?= h($information->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instgram') ?></th>
            <td><?= h($information->instgram) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Youtube') ?></th>
            <td><?= h($information->youtube) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($information->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($information->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creted At') ?></th>
            <td><?= h($information->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($information->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $information->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ações') ?></th>
            <td>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $information->id],['class'=>'btn btn-primary']) ?>    
                <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $information->id], ['confirm' => __('Tem certeza que deseja remover {0}?', $information->email), 'class' => 'btn btn-danger']) ?>     
            </td>
        </tr>
    </table>
</div>
