<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\FoundReport> $foundReports
 */
?>
<div class="foundReports index content">
    <?= $this->Html->link(__('New Found Report'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Found Reports') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item_name') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('found_location') ?></th>
                    <th><?= $this->Paginator->sort('found_date') ?></th>
                    <th><?= $this->Paginator->sort('finder_name') ?></th>
                    <th><?= $this->Paginator->sort('finder_contact') ?></th>
                    <th><?= $this->Paginator->sort('image_file') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($foundReports as $foundReport): ?>
                <tr>
                    <td><?= $this->Number->format($foundReport->id) ?></td>
                    <td><?= h($foundReport->item_name) ?></td>
                    <td><?= h($foundReport->category) ?></td>
                    <td><?= h($foundReport->found_location) ?></td>
                    <td><?= h($foundReport->found_date) ?></td>
                    <td><?= h($foundReport->finder_name) ?></td>
                    <td><?= h($foundReport->finder_contact) ?></td>
                    <td><?= h($foundReport->image_file) ?></td>
                    <td><?= h($foundReport->status) ?></td>
                    <td><?= h($foundReport->created) ?></td>
                    <td><?= h($foundReport->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $foundReport->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $foundReport->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $foundReport->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $foundReport->id),
                            ]
                        ) ?>
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