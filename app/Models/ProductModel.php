<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $allowedFields = ['tensp', 'giagiam','giasp','image','metakey','metades','metatitle'];
    protected function initialize()
    {

//        $this->allowedFields[] = 'tensp';
//        $this->allowedFields[] = 'giagiam';

    }
    public function get_products(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM product');
        return $results = $query->getResult();;
    }
    public function get_products_by_id($id_product){
        $db = db_connect();
        $sql = "SELECT * FROM product WHERE id = ? ";
        $query = $db->query($sql, [$id_product]);
        return $results = $query->getResultArray()[0];;
    }

}