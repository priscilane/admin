<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Editar Tag') ?></h3>
        </div>
        <div class="col-2">
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>
<div class="tags form large-9 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <?php
            echo $this->Form->control('title',['class' => 'form-control']);
            echo $this->Form->control('article', ['options' => $articles,'class' => 'form-control']);
        ?>
        <br/>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
