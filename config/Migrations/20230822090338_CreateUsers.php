<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users', ['id' => true]);

        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->addColumn('phone', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ]);

        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->addColumn('password', 'text', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        
        $table->addColumn('modified', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addIndex('phone', [
            'unique' => true,
        ]);

        $table->addIndex('email', [
            'unique' => true,
        ]);


        $table->create();
    }
}