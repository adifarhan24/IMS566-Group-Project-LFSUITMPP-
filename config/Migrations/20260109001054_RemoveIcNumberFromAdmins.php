<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RemoveIcNumberFromAdmins extends AbstractMigration
{
    /**
     * Up Method - Remove the column
     */
    public function up(): void
    {
        $table = $this->table('admins');
        if ($table->hasColumn('ic_number')) {
            $table->removeColumn('ic_number');
            $table->update();
        }
    }

    /**
     * Down Method - Add the column back (for rollback)
     */
    public function down(): void
    {
        $table = $this->table('admins');
        $table->addColumn('ic_number', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
            'after' => 'full_name',
            'comment' => 'Malaysian IC Number',
        ]);
        $table->update();
    }
}
