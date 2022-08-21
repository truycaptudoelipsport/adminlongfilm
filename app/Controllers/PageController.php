<?php namespace App\Controllers;
use App\Models\ProductModel;

class PageController extends BaseController
{
    public function index(){
        return view('index');
    }
    public function fileUpload(){
        $data = array();
        // Read new token and assign to $data['token']
        $data['token'] = csrf_hash();
        ## Validation
        $validation = \Config\Services::validation();

        $input = $validation->setRules([
            'file' => 'uploaded[file]|max_size[file,2048]|ext_in[file,jpeg,jpg,png,pdf],'
        ]);
        if ($validation->withRequest($this->request)->run() == FALSE){
            $data['success'] = 0;
            $data['error'] = $validation->getError('file');// Error response
        }else{
            if($file = $this->request->getFile('file')) {
                if ($file->isValid() && ! $file->hasMoved()) {
                    // Get file name and extension

                    $name = $file->getName();
                    $ext = $file->getClientExtension();
                    // Get random file name
                    $newName = $file->getRandomName();
                    // Store file in public/uploads/ folder

                    $spilit_name = $this->request->getGetPost("file_name");
                    $name_controller = explode("/", $spilit_name);
                    $name_image = 'uploads'."/".$name_controller[0]."/".$name_controller[1].'/'.$newName;

                    $image = \Config\Services::image()
                        ->withFile($file)
                        ->resize(800, 800, true, 'height','with')
                        ->save(FCPATH . $name_image);
//                    $file->move('uploads'."/".$name_controller[0]."/".$name_controller[1],$newName);
                    // $name_controller[0] = controller;
                    // $name_controller[1] = id;
                    if($name_controller[0] = "product"){
                        $product_model = new ProductModel();
                        $product_detail = $product_model->get_products_by_id($name_controller[1]);
                        if($product_detail["image"] != null) {
                            $product_detail["image"] = unserialize($product_detail["image"]);
                            array_push($product_detail["image"],$name_image);
                            $product_detail["image"] = serialize($product_detail["image"]);
                        }else {
                            $list_image[] = $name_image;
                            $product_detail["image"] = serialize($list_image);
                        }
                        $product_model->update($name_controller[1],$product_detail);
                    }
                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Tải lên thành công';
                }else{
                    $data['message'] = 'Hình ảnh không đúng định dạng';
                }
            }else{
                // Response
                $data['success'] = 2;
                $data['message'] = 'Không có hình ảnh nào để tải lên .';
            }
        }
        return $this->response->setJSON($data);
    }
}