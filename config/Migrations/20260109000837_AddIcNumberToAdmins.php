<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddIcNumberToAdmins extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('admins');
        $table->addColumn('ic_number', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
            'after' => 'full_name', // Add after full_name column
            'comment' => 'Malaysian IC Number',
        ]);
        $table->update();
    }
}
