<?php
use Migrations\AbstractMigration;

class CreatedModifiedAllowNull extends AbstractMigration
{

    public function up()
    {

        $this->table('accounts')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->update();

        $this->table('contacts')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->update();

        $this->table('organizations')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->update();

        $this->table('users')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('accounts')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('contacts')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('organizations')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('users')
            ->changeColumn('created', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->changeColumn('modified', 'datetime', [
                'default' => null,
                'length' => null,
                'null' => false,
            ])
            ->update();
    }
}

