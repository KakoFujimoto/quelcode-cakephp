<?php

use Migrations\AbstractMigration;

class AddReceivingToBidinfo extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('bidinfo');
        $table->addColumn('is_received', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => true,
        ]);
        $table->update();
    }
}
