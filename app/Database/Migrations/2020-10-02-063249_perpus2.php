<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perpus2 extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'auto_increment' => true,
			],
			'blog_title'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			],
			'blog_description' => [
					'type'           => 'TEXT',
					'null'           => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('perpus3');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
