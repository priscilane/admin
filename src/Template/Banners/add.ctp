<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<div class="row">
    <div class="col-10">
        <h3><?= __('Criar Banner') ?></h3>
    </div>
    <div class="col-1">
        <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
    </div>
</div>

<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner) ?>
    <fieldset>
        <?php
            echo $this->Form->control('creted_at', array('class' => 'form-control'));
            echo $this->Form->control('updated_at', array('class' => 'form-control'));
            echo $this->Form->control('title', array('class' => 'form-control'));
            echo $this->Form->control('subtitle', array('class' => 'form-control'));
            echo $this->Form->control('link', array('class' => 'form-control'));
            echo $this->Form->control('photo', array('class' => 'form-control'));
            echo $this->Form->control('active', array('type' => 'checkbox'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Criar'), [ 'class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
