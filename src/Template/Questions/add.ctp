<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Adicionar Pergunta') ?></h3>
        </div>
        <div class="col-2">
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <?php
            echo $this->Form->control('creted_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('question',['class'=>'form-control']);
            echo $this->Form->control('answer',['class'=>'form-control']);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
