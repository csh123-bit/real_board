<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    protected $prefix = '';

    protected $table          = 'board_user';
    protected $primaryKey     = 'usr_idx';
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields  = [];
    protected $useTimestamps      = true;

    public function __construct()
    {
        $this->primaryKey = $this->prefix.'_idx';
        $this->createdField = $this->prefix . '_created_at';
        $this->updatedField = $this->prefix . '_updated_at';
        $this->deletedField = $this->prefix . '_deleted_at';
    }
}
