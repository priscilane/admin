<div class="row">
    <div class="col-11">
        <h3><?= __('Paginas') ?></h3>
    </div>
    <div class="col-1">
        <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
<div class="questions index large-9 medium-8 columns content">
    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('creted_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

</div>
