<?php

namespace App\Models;

class UserModel extends BaseModel
{
    protected $table          = 'board_user';
    protected $prefix         = 'usr';
    protected $allowedFields  = [
        'usr_idx','usr_password','usr_email','usr_address',
        'usr_id','usr_phonenumber','usr_level','usr_name',
        'usr_created_id','usr_created_ip','usr_created_at',
        'usr_updated_id','usr_updated_ip','usr_updated_at',
        'usr_deleted_id','usr_deleted_ip','usr_deleted_at'
    ];
}
