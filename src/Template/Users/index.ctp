<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="large-9 medium-8 columns">
    
    <div class="row">
        <div class="col-11">
            <h3><?= __('Usuários') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>


    
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criação') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Atualização') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id], ['class' => 'btn btn-primary', 'id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning', 'id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja remover {0}?', $user->email),'class' => 'btn btn-danger', 'id' => 'btn-link']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <?php 
        $paginator = $this->Paginator->setTemplates([
            'number'=>'<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'current'=>'<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'first'=>'<li class="page-item"><a class="page-link" href="{{url}}">&laquo;</a></li>',
            'last'=>'<li class="page-item"><a class="page-link" href="{{url}}">&raquo</a></li>',
            'prevActive'=>'<li class="page-item"><a class="page-link" href="{{url}}">&lt</a></li>',
            'nextActive'=>'<li class="page-item"><a class="page-link" href="{{url}}">&gt</a></li>',

        ]);
    ?>

    <nav class="pagination">
        <ul class="pagination justify-content-center">
            <?php 
                echo $paginator->first();
                if($paginator->hasPrev()){
                    echo $paginator->prev();
                }
                
                echo $paginator->last();
                if($paginator->hasNext()){
                    echo $paginator->next();
                }
                echo $paginator->last();
            ?>
        </ul>
    </nav>
    <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, Mostrando {{current}} usuário(s) de um total de {{count}}')]) ?></p>


</div>
