<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
<div class="row">
    <div class="col-11">
        <h3><?= __('FAQ') ?></h3>
    </div>
    <div class="col-1">
        <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
<div class="questions index large-9 medium-8 columns content">
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Criação') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Atualização') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pergunta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Resposta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= h($question->creted_at) ?></td>
                <td><?= h($question->updated_at) ?></td>
                <td><?= h($question->question) ?></td>
                <td><?= h($question->answer) ?></td>
                <td><?= h($question->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $question->id],['class' => 'btn btn-primary','id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $question->id],['class' => 'btn btn-warning','id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $question->id], ['confirm' => __('Deseja apagar {0}?', $question->id),'class'=>'btn btn-danger','id' => 'btn-link']) ?>
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
