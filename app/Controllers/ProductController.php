<?php namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController
{
	public function index()
	{
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Sản phẩm']),
            'page_title' => view('partials/page-title', ['title' => 'Sản phẩm', 'pagetitle' => 'Sản Phẩm'])
        ];
	    $product_model = new ProductModel();
        $data["list_product"] = $product_model->get_products();




	    return view('product',$data);
    }
}