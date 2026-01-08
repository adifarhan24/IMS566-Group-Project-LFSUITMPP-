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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $foundReport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $foundReport->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Found Reports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="foundReports form content">
            <?= $this->Form->create($foundReport) ?>
            <fieldset>
                <legend><?= __('Edit Found Report') ?></legend>
                <?php
                    echo $this->Form->control('item_name');
                    echo $this->Form->control('category');
                    echo $this->Form->control('description');
                    echo $this->Form->control('found_location');
                    echo $this->Form->control('found_date', ['empty' => true]);
                    echo $this->Form->control('finder_name');
                    echo $this->Form->control('finder_contact');
                    echo $this->Form->control('image_file');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
