<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    <div class="col-10">
        <h3><?= __('DADOS DA QUESTÃO') ?></h3>
    </div>
    <div class="col-2">
        <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
    </div>
</div>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="table table-dark">
        <tr>
            <th scope="row"><?= __('Pergunta') ?></th>
            <td><?= h($question->question) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resposta') ?></th>
            <td><?= h($question->answer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criação') ?></th>
            <td><?= h($question->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atualização') ?></th>
            <td><?= h($question->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $question->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ações') ?></th>
            <td>
                <?= $this->Html->link(__('Editar'), ['controller' => 'Questions', 'action' => 'edit', $question->id,],[ 'class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Questions', 'action' => 'delete', $question->id], ['confirm' => __('Você deseja apagar {0}?', $question->id), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
    </table>
</div>
