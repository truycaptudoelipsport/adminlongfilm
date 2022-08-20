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
                    $file->move('uploads', $newName);
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