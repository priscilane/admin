<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Info. NOTÍCIAS') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], [ 'class' => 'btn btn-danger']) ?>
        </div>
</div>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->title) ?></h3>
    <table class="vertical-table table table-dark">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($news->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($news->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($news->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($news->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($news->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $news->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row">Ações</th>
            <td>
                <?=$this->Html->link(__('Editar'), ['action' => 'edit', $news->id], [ 'class' => 'btn btn-info']) ?>
                <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $news->id], ['confirm' => __('Tem certeza que deseja remover {0}?', $news->title), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($news->text)); ?>
    </div>
</div>
