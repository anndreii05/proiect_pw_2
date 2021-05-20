<?php

namespace App\Controllers;

use App\Models\ImageModel;

class MainController extends BaseController{
    public function index()
    {
        return view('welcome_message');
    }
    public function produse(){
        $imageModel = new ImageModel;
        $data['telefoane']=$imageModel->findAll();        
        return view('produse',$data);
    }
    public function despre()
    {
        return view('despre');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login(){
        return view('login');
    }
        public function search(){
        
        $search=$this->request->getVar('search');
        $db= \Config\Database::connect();
        $builder = $db->table('telefoane');
        $builder->like('marca',$search);$builder->orLike('model',$search);
        $query=$builder->get(); 
        $q=$query->getResultArray();
    
    $data['r']=$q;
    return view('search_result',$data);
}
    public function check(){
            $session=session();
            $username=$this->request->getVar('username');
            $password=$this->request->getVar('password');
            if(($username=="admin")&&($password=="admin")){
                $session->set('username',$username);
            //    echo $username;
                  setcookie('username',$username,3600);
              return redirect()->route('welcome');
            }else{
                $data['error']='Logare esuata!';
                return view('login',$data);
            }
	}
	public function logout(){
            $session=session();
            $session->destroy();
            return view('welcome_message'); 
        }
        public function welcome(){
             $imageModel = new ImageModel;
             $data['telefoane']=$imageModel->findAll();
             return view('welcome',$data);
        }
    public function upload()
    {    
        return view('upload');
    } 
      public function save()
        {
          
           $model = new ImageModel();
           
            $url1=$this->do_upload();
            $url=$stipped = substr($url1, 0);
            $title=$this->request->getPost('marca');
            $modell=$this->request->getPost('model');
            $pret=$this->request->getPost('pret');
            $data=[
                'marca'=>$title,
                'model'=>$modell,
                'pret'=>$pret,
                'imagine'=>$url,
            ];
      
            $model->insert($data);
             return redirect()->to( base_url('public/welcome') );     
 }
        private function do_upload()
        {
            $type=explode('.',$_FILES["imagine"]["name"]);
            $type=$type[count($type)-1];
            $url="images/".uniqid(rand()).'.'.$type;
            
            if(in_array($type,array("jpg","jpeg","gif","png")))
                if(is_uploaded_file($_FILES["imagine"]["tmp_name"]))
                    if(move_uploaded_file($_FILES["imagine"]["tmp_name"], $url))
                        return $url;
            return "";
             
        }
        public function view($id=NULL){
        $model = new ImageModel();
        $data['image'] = $model->where('id', $id)->first();
     return view('view', $data);
        }
       public function produs($id=NULL){
        $model = new ImageModel();
        $data['image'] = $model->where('id', $id)->first();
         return view('produs', $data);
        }
     public function edit($id = null)
        {
     $model = new ImageModel();
     $data['image'] = $model->where('id', $id)->first();
     return view('edit_view', $data);
        }
 
    public function update()
        {   
        helper(['form', 'url']);
        $model = new ImageModel();
    
        $url1=$this->do_upload();
       $url=$stipped = substr($url1, 0);        
        $id = $this->request->getVar('id');
     
        $data = [
            'marca' => $this->request->getPost('marca'),
            'model' => $this->request->getPost('model'),
            'pret' => $this->request->getPost('pret'),
            'imagine'  => $url,
            ];
        $save = $model->update($id,$data);
        return redirect()->to( base_url('public/welcome') );
        }
        
    public function delete($id = null)
        {
     $model = new ImageModel();
     $data['imagine'] = $model->where('id', $id)->delete();    
     return redirect()->to( base_url('public/welcome') );
        }
}