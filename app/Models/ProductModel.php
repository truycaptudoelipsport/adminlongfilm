<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    public function get_products(){
        $db = db_connect();
        $fields = $db->getFieldData('product');

        $this->db->select('*');

        $this->db->from('product');
        $query = $this->db->get();
        return $query->result();
    }
}