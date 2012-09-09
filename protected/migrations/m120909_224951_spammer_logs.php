<?php

class m120909_224951_spammer_logs extends CDbMigration
{
	public function up()
	{
            $this->createTable('spammer', array(
            'id' => 'pk',
            'subject' => 'text',
            'body' => 'text',
            'from' => 'string',
            'to' => 'string',
            'amount' => 'integer',
            'date' => 'integer',
            ), 'ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci' );
	}

	public function down()
	{
		$this->dropTable('spammer');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}