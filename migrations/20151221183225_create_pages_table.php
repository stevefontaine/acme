<?php

use Phinx\Migration\AbstractMigration;

class CreatePagesTable extends AbstractMigration
{
    public function up()
    {
      $table = $this->table('pages');
      $table->addColumn('browsertitle', 'string')
        ->addColumn('page_content', 'text')
        ->addColumn('created_at', 'datetime', ['null' => true])
        ->addColumn('updated_at', 'datetime', ['null' => true])
        ->save();
    }

    public function down()
    {
      $this->dropTable('pages');
    }
}