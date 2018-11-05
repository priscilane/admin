<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Editar Banner') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>

<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner) ?>
    <fieldset>
        <?php
            echo $this->Form->control('creted_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('title',['class' => 'form-control']);
            echo $this->Form->control('subtitle',['class' => 'form-control']);
            echo $this->Form->control('link',['class' => 'form-control']);
            echo $this->Form->control('photo',['class' => 'form-control']);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
