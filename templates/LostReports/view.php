<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LostReport $lostReport
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lost Report'), ['action' => 'edit', $lostReport->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lost Report'), ['action' => 'delete', $lostReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lostReport->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lost Reports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lost Report'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lostReports view content">
            <h3><?= h($lostReport->item_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item Name') ?></th>
                    <td><?= h($lostReport->item_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($lostReport->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Seen Location') ?></th>
                    <td><?= h($lostReport->last_seen_location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($lostReport->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Contact') ?></th>
                    <td><?= h($lostReport->reporter_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Matrix Id') ?></th>
                    <td><?= h($lostReport->reporter_matrix_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image File') ?></th>
                    <td><?= h($lostReport->image_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($lostReport->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lostReport->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lost Date') ?></th>
                    <td><?= h($lostReport->lost_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lostReport->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lostReport->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lostReport->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>