<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Producto> $productos
 */
?>
<div class="productos index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('prodid') ?></th>
                    <th><?= $this->Paginator->sort('prodimg') ?></th>
                    <th><?= $this->Paginator->sort('prodname') ?></th>
                    <th><?= $this->Paginator->sort('proddesc') ?></th>
                    <th><?= $this->Paginator->sort('prodcant') ?></th>
                    <th><?= $this->Paginator->sort('prodprec') ?></th>
                    <th><?= $this->Paginator->sort('prodstock') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->prodid) ?></td>
                    <td><?= h($producto->prodimg) ?></td>
                    <td><?= h($producto->prodname) ?></td>
                    <td><?= h($producto->proddesc) ?></td>
                    <td><?= h($producto->prodcant) ?></td>
                    <td><?= h($producto->prodprec) ?></td>
                    <td><?= h($producto->prodstock) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->prodid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->prodid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->prodid], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->prodid)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
