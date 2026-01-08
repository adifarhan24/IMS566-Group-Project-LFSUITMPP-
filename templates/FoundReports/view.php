<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoundReport $foundReport
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Found Report'), ['action' => 'edit', $foundReport->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Found Report'), ['action' => 'delete', $foundReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foundReport->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Found Reports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Found Report'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="foundReports view content">
            <h3><?= h($foundReport->item_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item Name') ?></th>
                    <td><?= h($foundReport->item_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($foundReport->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Found Location') ?></th>
                    <td><?= h($foundReport->found_location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finder Name') ?></th>
                    <td><?= h($foundReport->finder_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finder Contact') ?></th>
                    <td><?= h($foundReport->finder_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image File') ?></th>
                    <td><?= h($foundReport->image_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($foundReport->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($foundReport->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Found Date') ?></th>
                    <td><?= h($foundReport->found_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($foundReport->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($foundReport->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($foundReport->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>