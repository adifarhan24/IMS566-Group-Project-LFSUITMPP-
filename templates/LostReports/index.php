<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LostReport> $lostReports
 */
?>
<div class="lostReports index content">
    <?= $this->Html->link(__('New Lost Report'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lost Reports') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item_name') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('last_seen_location') ?></th>
                    <th><?= $this->Paginator->sort('lost_date') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_contact') ?></th>
                    <th><?= $this->Paginator->sort('reporter_matrix_id') ?></th>
                    <th><?= $this->Paginator->sort('image_file') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lostReports as $lostReport): ?>
                <tr>
                    <td><?= $this->Number->format($lostReport->id) ?></td>
                    <td><?= h($lostReport->item_name) ?></td>
                    <td><?= h($lostReport->category) ?></td>
                    <td><?= h($lostReport->last_seen_location) ?></td>
                    <td><?= h($lostReport->lost_date) ?></td>
                    <td><?= h($lostReport->reporter_name) ?></td>
                    <td><?= h($lostReport->reporter_contact) ?></td>
                    <td><?= h($lostReport->reporter_matrix_id) ?></td>
                    <td><?= h($lostReport->image_file) ?></td>
                    <td><?= h($lostReport->status) ?></td>
                    <td><?= h($lostReport->created) ?></td>
                    <td><?= h($lostReport->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lostReport->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lostReport->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $lostReport->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $lostReport->id),
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