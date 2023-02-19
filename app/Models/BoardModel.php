<?php

namespace App\Models;

class BoardModel extends BaseModel
{
    protected $table          = '';
    protected $prefix         = 'bod';
    protected $primaryKey     = 'bod_idx';
    protected $allowedFields  = [
        'bod_idx','bod_username','bod_title','bod_content',
        'bod_password','bod_depth','bod_group',
        'bod_created_id','bod_created_ip','bod_created_at',
        'bod_updated_id','bod_updated_ip','bod_updated_at',
        'bod_deleted_id','bod_deleted_ip','bod_deleted_at'
    ];

    public function __construct($table_name)
    {
        $this->table = 'board_boards_'.$table_name;
        $this->createdField = $this->prefix . '_created_at';
        $this->updatedField = $this->prefix . '_updated_at';
        $this->deletedField = $this->prefix . '_deleted_at';
    }

    public function createTable(){
        $fields = [
            'bod_idx' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'bod_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'bod_username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'bod_content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'bod_password' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'bod_depth' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'bod_group' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'bod_created_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_created_ip' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_created_at' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_updated_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_updated_ip' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_updated_at' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_deleted_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_deleted_ip' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'bod_deleted_at' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],  
        ];
        $forge = \Config\Database::forge();
        $forge->addField($fields)->addPrimaryKey('bod_idx')->createTable($this->table, true);
    }
}
