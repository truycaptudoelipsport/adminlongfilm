<?php namespace App\Controllers;


class UserController extends BaseController
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
    public function login()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Đăng nhập']),
            'page_title' => view('partials/page-title', ['title' => 'Đăng nhập ', 'pagetitle' => 'Tài khoản'])
        ];
        var_dump($this->request->getPost());exit();
        return view('index', $data);
    }
    public function register()
    {
        if($this->request->getMethod() == "get")
        {
            $product_id = $this->request->getGet("product_id");
            $id_image = $this->request->getGet("id_image");
            $product_model = new ProductModel();
            $product_detail = $product_model->get_products_by_id($product_id);
            $product_detail["image"] = unserialize($product_detail["image"]);
            unset($product_detail["image"][$id_image]);
            $product_detail["image"] = serialize($product_detail["image"]);
            $product_model->update($product_id,$product_detail);
            if($product_model->update($product_id,$product_detail))
            {
                return redirect()->to('product/edit/'.$product_id);
            }
        }

    }
}