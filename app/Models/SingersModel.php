<?php

namespace App\Models;

use CodeIgniter\Model;


class SingersModel extends Model
{
    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */

    protected $table      = 'singers';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'birthday', 'biography', 'photo', 'gender'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected function initialize()
    {
        $this->allowedFields[] = 'middlename';
    }
}