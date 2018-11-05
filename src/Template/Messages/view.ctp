<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('DADOS DA MENSAGEM') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>
<div class="messages view large-9 medium-8 columns content">
    <table class="vertical-table table table-dark">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($message->sender_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($message->sender_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($message->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($message->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criação') ?></th>
            <td><?= h($message->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atualização') ?></th>
            <td><?= h($message->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $message->active ? __('Sim') : __('Não'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ações') ?></th>
            <td>
                <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $message->id], ['confirm' => __('Tem certeza que deseja remover {0}?', $message->subject), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
    </div>
        <p><?= $this->Text->autoParagraph(h($message->content)); ?></p>
</div>
