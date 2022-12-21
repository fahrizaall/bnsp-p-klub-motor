<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table            = 'galeri';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id', 'image'];

    public function get_count() {
        $builder = $this->table("users");
        $data = $builder->select('id')->findAll();

        return count($data);
    }

    public function get_galeri($limit, $start) {
        $builder = $this->table("users");
        $data = $builder->findAll($limit, $start);

        return $data;
    }

}
