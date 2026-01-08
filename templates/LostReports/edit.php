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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lostReport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lostReport->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lost Reports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lostReports form content">
            <?= $this->Form->create($lostReport) ?>
            <fieldset>
                <legend><?= __('Edit Lost Report') ?></legend>
                <?php
                    echo $this->Form->control('item_name');
                    echo $this->Form->control('category');
                    echo $this->Form->control('description');
                    echo $this->Form->control('last_seen_location');
                    echo $this->Form->control('lost_date', ['empty' => true]);
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_contact');
                    echo $this->Form->control('reporter_matrix_id');
                    echo $this->Form->control('image_file');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
