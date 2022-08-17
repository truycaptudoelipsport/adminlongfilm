<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    public function get_products(){
        $db = db_connect();

        $query = $db->query('SELECT * FROM product');
        
        return $results = $query->getResult();;
    }
}