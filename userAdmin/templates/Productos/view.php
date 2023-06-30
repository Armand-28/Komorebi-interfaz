<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->prodid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->prodid], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->prodid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos view content">
            <h3><?= h($producto->prodid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Prodimg') ?></th>
                    <td><?= h($producto->prodimg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prodname') ?></th>
                    <td><?= h($producto->prodname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proddesc') ?></th>
                    <td><?= h($producto->proddesc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prodcant') ?></th>
                    <td><?= h($producto->prodcant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prodprec') ?></th>
                    <td><?= h($producto->prodprec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prodstock') ?></th>
                    <td><?= h($producto->prodstock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prodid') ?></th>
                    <td><?= $this->Number->format($producto->prodid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
