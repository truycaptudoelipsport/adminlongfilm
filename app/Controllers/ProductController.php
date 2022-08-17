<?php namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController
{
	public function index()
	{
	    $product_model = new ProductModel();
        var_dump($product_model->get_products());exit();



        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Sản phẩm']),
            'page_title' => view('partials/page-title', ['title' => 'Sản phẩm', 'pagetitle' => 'Sản Phẩm'])
        ];

	    return view('product',$data);
    }
}