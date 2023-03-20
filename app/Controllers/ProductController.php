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
    public function add_product()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Thêm sản phẩm']),
            'page_title' => view('partials/page-title', ['title' => 'Thêm sản phẩm ', 'pagetitle' => 'Sản phẩm'])
        ];
        return view('product-add',$data);
    }
    public function add()
    {
        $resp = $this->request->getPost();
        if($resp["hot"]){
            $resp["hot"] = 1;
        }
        if($resp["home"]){
            $resp["home"] = 1;
        }
        $data = "";
        $file = "" ;
        return view('product-add',$data).view('base/modal_upload_image',$file);
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
        $file["file_name"] = "product/" . $product_detail["id"];
        if($this->request->getGet('cid')){
            $product_update[$this->request->getVar("cid")] = $this->request->getVar("name");
            if($product_update["giagiam"])
            {
                $product_update["giagiam"] = (int)$product_update["giagiam"];
            }
            $product_model->update($id_product,$product_update);
        }
        return view('product-edit',$data).view('base/modal_upload_image',$file);
    }
    public function update(){
        $resp = $this->request->getPost();
        if($resp["hot"]){
            $resp["hot"] = 1;
        }
        if($resp["home"]){
            $resp["home"] = 1;
        }
        $product_model = new ProductModel();
        $product_detail = $product_model->get_products_by_id($resp["id_product"]);
        $product_detail["techinfo"] = $resp["pro_tech_info"];
        $product_detail["description"] = $resp["description"];
        $product_detail["content"] = $resp["content"];
        $product_detail["favcolor"] = $resp["favcolor"];
        $product_detail["hot"] = $resp["hot"];
        $product_detail["home"] = $resp["home"];
        if($product_model->update($resp["id_product"],$product_detail))
        {
            return redirect()->to('product/edit/'.$resp["id_product"]);
        }
    }
    public function remove_image()
    {
        if($_SERVER['REQUEST_METHOD'] == "GET")
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