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
    public function edit($id_product)
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Sửa Sản phẩm']),
            'page_title' => view('partials/page-title', ['title' => 'Sửa sản phẩm '.$id_product, 'pagetitle' => 'Sản phẩm'])
        ];
        $product_model = new ProductModel();
        $product_detail = $product_model->get_products_by_id($id_product);
        $data["product_detail"] = $product_detail;
        if($this->request->getMethod() == "post"){
            $product_update[$this->request->getVar("cid")] = $this->request->getVar("name");
            if($product_update["giagiam"])
            {
                $product_update["giagiam"] = (int)$product_update["giagiam"];
            }

            $product_model->update($id_product,$product_update);

        }
        return view('product-edit',$data);
    }
}