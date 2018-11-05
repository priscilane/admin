<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Information $information
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Editar Informações') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>


<div class="informations form large-9 medium-8 columns content">
    <?= $this->Form->create($information) ?>
    <fieldset>
        <?php
            echo $this->Form->control('creted_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('email', ['class' => 'form-control']);
            echo $this->Form->control('phone', ['class' => 'form-control']);
            echo $this->Form->control('adress', ['class' => 'form-control']);
            echo $this->Form->control('twitter', ['class' => 'form-control']);
            echo $this->Form->control('instgram', ['class' => 'form-control']);
            echo $this->Form->control('youtube', ['class' => 'form-control']);
            echo $this->Form->control('facebook', ['class' => 'form-control']);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), array('class' => 'btn btn-success')) ?>
    <?= $this->Form->end() ?>
</div>
