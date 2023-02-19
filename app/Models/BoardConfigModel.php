<?php

namespace App\Models;

class BoardConfigModel extends BaseModel
{
    protected $table          = 'board_config';
    protected $prefix         = 'boc';
    protected $allowedFields  = [
        'boc_idx','boc_code','boc_name','boc_skin',
        'boc_list_size','boc_file_count','boc_file_size',
        'boc_image_view','boc_new_time','boc_secret',
        'boc_private','boc_category','boc_fixed_title',
        'boc_auth_list','boc_auth_read','boc_auth_write',
        'boc_per_page',
        'boc_auth_reply','boc_auth_comment','boc_manager',
        'boc_created_id','boc_created_ip','boc_created_at',
        'boc_updated_id','boc_updated_ip','boc_updated_at',
        'boc_deleted_id','boc_deleted_ip','boc_deleted_at'
    ];
}
