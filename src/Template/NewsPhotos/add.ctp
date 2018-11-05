<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsPhoto $newsPhoto
 */
?>
   <div class="row">
        <div class="col-10">
            <h3><?= __('Adicionar foto') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
    </div>
<div class="newsPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($newsPhoto) ?>
    <fieldset>
        <?php
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('new_id', ['options' => $news,'class' => 'form-control']);
            echo $this->Form->control('photo',['class' => 'form-control']);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
