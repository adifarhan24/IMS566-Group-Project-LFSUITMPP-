<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Admin> $admins
 */
?>
<style>
    :root {
        --primary-color: #4f46e5; /* Indigo 600 */
        --primary-hover: #4338ca; /* Indigo 700 */
        --bg-color: #f9fafb; /* Gray 50 */
        --card-bg: #ffffff;
        --text-main: #111827; /* Gray 900 */
        --text-muted: #6b7280; /* Gray 500 */
        --border-color: #e5e7eb; /* Gray 200 */
        --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .admin-index-wrapper {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        color: var(--text-main);
        padding: 2rem 0;
    }

    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .header-section h3 {
        font-size: 1.75rem;
        font-weight: 700;
        margin: 0;
        color: var(--text-main);
        letter-spacing: -0.025em;
    }

    .btn-create {
        background-color: var(--primary-color);
        color: white;
        padding: 0.6rem 1.25rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.2s ease;
        border: none;
        font-size: 0.875rem;
        display: inline-flex;
        align-items: center;
        box-shadow: var(--shadow-sm);
    }

    .btn-create:hover {
        background-color: var(--primary-hover);
        transform: translateY(-1px);
        box-shadow: var(--shadow-md);
        text-decoration: none;
        color: white;
    }

    .table-card {
        background: var(--card-bg);
        border-radius: 0.75rem;
        box-shadow: var(--shadow-md);
        border: 1px solid var(--border-color);
        overflow: hidden;
    }

    /* Override Milligram/Default table styles if needed */
    .table-card table {
        margin: 0;
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .table-card th {
        background-color: #f8fafc;
        padding: 1rem 1.5rem;
        text-align: left;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        color: var(--text-muted);
        letter-spacing: 0.05em;
        border-bottom: 1px solid var(--border-color);
    }
    
    .table-card th a {
        color: inherit;
        text-decoration: none;
        display: block;
    }

    .table-card td {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid var(--border-color);
        font-size: 0.875rem;
        color: var(--text-main);
        vertical-align: middle;
    }

    .table-card tr:last-child td {
        border-bottom: none;
    }

    .table-card tr:hover td {
        background-color: #f9fafb;
    }

    .actions-cell {
        white-space: nowrap;
        text-align: right !important; /* Force right align */
    }

    .action-btn {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        border-radius: 0.375rem;
        font-size: 0.75rem;
        font-weight: 600;
        margin-left: 0.5rem;
        text-decoration: none;
        transition: background-color 0.2s;
        border: 1px solid transparent;
    }

    .btn-view { color: #0284c7; background: #e0f2fe; }
    .btn-view:hover { background: #bae6fd; color: #0ea5e9; }

    .btn-edit { color: #d97706; background: #fef3c7; }
    .btn-edit:hover { background: #fde68a; color: #b45309; }

    .btn-delete { color: #ef4444; background: #fee2e2; }
    .btn-delete:hover { background: #fecaca; color: #dc2626; }

    /* Pagination */
    .pagination-wrapper {
        margin-top: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }
    
    .pagination-list {
        list-style: none;
        display: flex;
        padding: 0;
        margin: 0;
        gap: 0.25rem;
        justify-content: center;
    }

    .pagination-list li a, .pagination-list li span {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 2rem;
        height: 2rem;
        padding: 0 0.5rem;
        border-radius: 0.375rem;
        border: 1px solid var(--border-color);
        background: white;
        color: var(--text-main);
        text-decoration: none;
        font-size: 0.875rem;
        transition: all 0.2s;
    }

    .pagination-list li.active a, .pagination-list li.active span {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }

    .pagination-list li a:hover:not(.active) {
        background-color: #f3f4f6;
    }
    
    .pagination-list li.disabled a, .pagination-list li.disabled span {
        color: #9ca3af;
        pointer-events: none;
        border-color: #f3f4f6;
    }

    .page-info {
        color: var(--text-muted);
        font-size: 0.875rem;
    }
    
    /* Responsive Table override */
    @media (max-width: 768px) {
        .table-card {
            border: none;
            box-shadow: none;
            background: transparent;
        }
        .table-card table, .table-card thead, .table-card tbody, .table-card th, .table-card td, .table-card tr {
            display: block;
        }
        .table-card thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
        .table-card tr {
            background: white;
            border-radius: 0.75rem;
            box-shadow: var(--shadow-sm);
            margin-bottom: 1rem;
            border: 1px solid var(--border-color);
            padding: 1rem;
        }
        .table-card td {
            border: none;
            position: relative;
            padding: 0.5rem 0 0.5rem 50%;
            text-align: right;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .table-card td:before {
            position: absolute;
            left: 0;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            text-align: left;
            font-weight: 600;
            color: var(--text-muted);
            content: attr(data-label);
        }
        .actions-cell {
            text-align: right;
            padding-top: 1rem;
            margin-top: 0.5rem;
            border-top: 1px solid var(--border-color);
            justify-content: flex-end;
            padding-left: 0 !important;
        }
        .actions-cell:before {
            display: none;
        }
    }
</style>

<div class="admin-index-wrapper">
    <div class="header-section">
        <h3><?= __('Administrators') ?></h3>
        <?= $this->Html->link(__('New Admin'), ['action' => 'add'], ['class' => 'btn-create']) ?>
    </div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('full_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions-cell"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $admin): ?>
                <tr>
                    <td data-label="ID">#<?= $this->Number->format($admin->id) ?></td>
                    <td data-label="Username"><strong><?= h($admin->username) ?></strong></td>
                    <td data-label="Full Name"><?= h($admin->full_name) ?></td>
                    <td data-label="Created"><?= h($admin->created) ?></td>
                    <td data-label="Modified"><?= h($admin->modified) ?></td>
                    <td class="actions-cell">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $admin->id], ['class' => 'action-btn btn-view']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->id], ['class' => 'action-btn btn-edit']) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $admin->id],
                            [
                                'confirm' => __('Are you sure you want to delete # {0}?', $admin->id),
                                'class' => 'action-btn btn-delete'
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="pagination-wrapper">
        <ul class="pagination-list">
            <?= $this->Paginator->first('«') ?>
            <?= $this->Paginator->prev('‹') ?>
            <?= $this->Paginator->numbers(['modulus' => 4, 'first' => 1, 'last' => 1]) ?>
            <?= $this->Paginator->next('›') ?>
            <?= $this->Paginator->last('»') ?>
        </ul>
        <p class="page-info"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>