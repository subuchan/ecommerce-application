<?php 
class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('admin_model');

    }
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function login_form()
    {
        extract($_POST);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('admin_model');
        $result = $this->admin_model->check_admin($username, $password);
        if ($result) {
            $this->session->set_userdata('Eadmin_user', $result);
            redirect(base_url('admin/dashboard/'));
        } else {
            echo 'invalid username password.. Please check your username and password.';
        }
    }
    public function admin_logout()
    {
        $this->session->unset_userdata('Eadmin_user');
        redirect(base_url('/'));
    }
    public function dashboard() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    
    
    public function upload_mens_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/mens_product');
        $this->load->view('admin/footer');
        }else{
            redirect('/');
        }
    }

    public function men_product_form() {
        extract($_POST);
        extract($_FILES);
        $file_name1 = $_FILES['product_img1']['name'];
        $file_name2 = $_FILES['product_img2']['name'];
        $file_name3 = $_FILES['product_img3']['name'];

        $config = [
            'upload_path' => './upload/men/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_img1') && $this->upload->do_upload('product_img1')) {
        } elseif (!$this->upload->do_upload('product_img2') && $this->upload->do_upload('product_img2')) {
        }
        elseif (!$this->upload->do_upload('product_img3') && $this->upload->do_upload('product_img3')) {
        }
        $data=[
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$file_name1,
            'product_img2'=>$file_name2,
            'product_img3'=>$file_name3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result=$this->admin_model->mens_product($data);
        if($result) {
            redirect(base_url('admin/upload_mens_product'));
        }
        else {
            echo 'error in uploading';
        }
    }





    public function upload_womens_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/womens_product');
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function women_product_form(){
        extract($_POST);
        extract($_FILES);
        $file_name1 = $_FILES['product_img1']['name'];
        $file_name2 = $_FILES['product_img2']['name'];
        $file_name3 = $_FILES['product_img3']['name'];

        $config = [
            'upload_path' => './upload/women/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_img1') && $this->upload->do_upload('product_img1')) {
        } elseif (!$this->upload->do_upload('product_img2') && $this->upload->do_upload('product_img2')) {
        }
        elseif (!$this->upload->do_upload('product_img3') && $this->upload->do_upload('product_img3')) {
        }
        $data=[
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$file_name1,
            'product_img2'=>$file_name2,
            'product_img3'=>$file_name3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result=$this->admin_model->womens_product($data);
        if($result) {
            redirect(base_url('admin/upload_womens_product'));
        }
        else {
            echo 'error in uploading';
        }
    }
    public function upload_kids_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/kids_product');
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function kids_product_form(){
        extract($_POST);
        extract($_FILES);
        $file_name1 = $_FILES['product_img1']['name'];
        $file_name2 = $_FILES['product_img2']['name'];
        $file_name3 = $_FILES['product_img3']['name'];

        $config = [
            'upload_path' => './upload/kids/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_img1') && $this->upload->do_upload('product_img1')) {
        } elseif (!$this->upload->do_upload('product_img2') && $this->upload->do_upload('product_img2')) {
        }
        elseif (!$this->upload->do_upload('product_img3') && $this->upload->do_upload('product_img3')) {
        }
        $data=[
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$file_name1,
            'product_img2'=>$file_name2,
            'product_img3'=>$file_name3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result=$this->admin_model->kids_product($data);
        if($result) {
            redirect(base_url('admin/upload_kids_product'));
        }
        else {
            echo 'error in uploading';
        }
    }
    public function upload_home_kitchen_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/home_kitchen_product');
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function homekitchen_product_form(){
        extract($_POST);
        extract($_FILES);
        $file_name1 = $_FILES['product_img1']['name'];
        $file_name2 = $_FILES['product_img2']['name'];
        $file_name3 = $_FILES['product_img3']['name'];

        $config = [
            'upload_path' => './upload/home_kitchen/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_img1') && $this->upload->do_upload('product_img1')) {
        } elseif (!$this->upload->do_upload('product_img2') && $this->upload->do_upload('product_img2')) {
        }
        elseif (!$this->upload->do_upload('product_img3') && $this->upload->do_upload('product_img3')) {
        }
        $data=[
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$file_name1,
            'product_img2'=>$file_name2,
            'product_img3'=>$file_name3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result=$this->admin_model->home_kitchen_product($data);
        if($result) {
            redirect(base_url('admin/upload_home_kitchen_product'));
        }
        else {
            echo 'error in uploading';
        }
    }



    public function upload_beauty_health_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/beauty_health_product');
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function beautyhealth_product_form(){
        extract($_POST);
        extract($_FILES);
        $file_name1 = $_FILES['product_img1']['name'];
        $file_name2 = $_FILES['product_img2']['name'];
        $file_name3 = $_FILES['product_img3']['name'];

        $config = [
            'upload_path' => './upload/beauty_health/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_img1') && $this->upload->do_upload('product_img1')) {
        } elseif (!$this->upload->do_upload('product_img2') && $this->upload->do_upload('product_img2')) {
        }
        elseif (!$this->upload->do_upload('product_img3') && $this->upload->do_upload('product_img3')) {
        }
        $data=[
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$file_name1,
            'product_img2'=>$file_name2,
            'product_img3'=>$file_name3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result=$this->admin_model->beautyhealth_product($data);
        if($result) {
            redirect(base_url('admin/upload_beauty_health_product'));
        }
        else {
            echo 'error in uploading';
        }
    }

    public function upload_electronics_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->view('admin/upload_product_details/electronics_product');
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function electronics_product_form(){
        extract($_POST);
        extract($_FILES);
        $file_name1 = $_FILES['product_img1']['name'];
        $file_name2 = $_FILES['product_img2']['name'];
        $file_name3 = $_FILES['product_img3']['name'];

        $config = [
            'upload_path' => './upload/electronics/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_img1') && $this->upload->do_upload('product_img1')) {
        } elseif (!$this->upload->do_upload('product_img2') && $this->upload->do_upload('product_img2')) {
        }
        elseif (!$this->upload->do_upload('product_img3') && $this->upload->do_upload('product_img3')) {
        }
        $data=[
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$file_name1,
            'product_img2'=>$file_name2,
            'product_img3'=>$file_name3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result=$this->admin_model->electronics_product($data);
        if($result) {
            redirect(base_url('admin/upload_electronics_product'));
        }
        else {
            echo 'error in uploading';
        }
    }

// 

    public function view_mens_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data1']=$this->admin_model->men_fetch_jean();
        $return['data2']=$this->admin_model->men_fetch_trousers();
        $return['data3']=$this->admin_model->men_fetch_trackphants();
        $return['data4']=$this->admin_model->men_fetch_tshirts();
        $return['data5']=$this->admin_model->men_fetch_shirts();
        $return['data6']=$this->admin_model->men_fetch_kurtas();
        $return['data7']=$this->admin_model->men_fetch_jackets();
        $this->load->view('admin/view_details/mens_product',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    
    // public function view_mens_trousers(){
    //     $this->load->view('admin/header');
    //     $this->load->model('admin_model');
    //     $return['data1']=$this->admin_model->men_fetch_trousers();
    //     $this->load->view('admin/view_details/mens_product',$return);
    //     $this->load->view('admin/footer');
    // }
    // public function view_mens_trackphants(){
    //     $this->load->view('admin/header');
    //     $this->load->model('admin_model');
    //     $return['data1']=$this->admin_model->men_fetch_trackphants();
    //     $this->load->view('admin/view_details/mens_product',$return);
    //     $this->load->view('admin/footer');
    // }
    // public function view_mens_tshirts(){
    //     $this->load->view('admin/header');
    //     $this->load->model('admin_model');
    //     $return['data1']=$this->admin_model->men_fetch_tshirts();
    //     $this->load->view('admin/view_details/mens_product',$return);
    //     $this->load->view('admin/footer');
    // }
    // public function view_mens_shirts(){
    //     $this->load->view('admin/header');
    //     $this->load->model('admin_model');
    //     $return['data1']=$this->admin_model->men_fetch_shirts();
    //     $this->load->view('admin/view_details/mens_product',$return);
    //     $this->load->view('admin/footer');
    // }
    // public function view_mens_kurtas(){
    //     $this->load->view('admin/header');
    //     $this->load->model('admin_model');
    //     $return['data1']=$this->admin_model->men_fetch_kurtas();
    //     $this->load->view('admin/view_details/mens_product',$return);
    //     $this->load->view('admin/footer');
    // }
    // public function view_mens_jackets(){
    //     $this->load->view('admin/header');
    //     $this->load->model('admin_model');
    //     $return['data1']=$this->admin_model->men_fetch_jackets();
    //     $this->load->view('admin/view_details/mens_product',$return);
    //     $this->load->view('admin/footer');
    // }
    public function get_men_edit($id){
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data2']=$this->admin_model->get_edit($id);
        $this->load->view('admin/edit_details/mens_edit',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_men_update(){
        extract($_POST);
        extract($_FILES);
   
        $product_img1=$this->input->post('product_img1');
        $product_img2=$this->input->post('product_img2');
        $product_img3=$this->input->post('product_img3');

        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        $new_image3=$_FILES['new_image3']['name'];

        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/men/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
            
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/men/'.$product_img1)){
                    unlink('./upload/men/'.$product_img1);
                  }
                } 
         }
         else{
            $new_image1  = $product_img1;
         }

         if($new_image2 == TRUE){
            $config = [
                'upload_path' => './upload/men/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
     
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image2')) {
                  if(file_exists('./upload/men/'.$product_img2)){
                    unlink('./upload/men/'.$product_img2);
                  }
                } 
         }
         else{
            $new_image2  = $product_img2;
         }

         if($new_image3 == TRUE){
            $config = [
                'upload_path' => './upload/men/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
              
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image3')) {
                  if(file_exists('./upload/men/'.$product_img3)){
                    unlink('./upload/men/'.$product_img3);
                  }
                } 
         }
         else{
            $new_image3  = $product_img3;
         }

        $edit_id = $id;
        $data = [
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$new_image1,
            'product_img2'=>$new_image2,
            'product_img3'=>$new_image3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result = $this->admin_model->men_update($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/view_mens_product'));
        } else {
            echo 'not successfully';
        }
    }
    public function get_delete($id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->get_delete($id)){
            $data=$this->admin_model->get_delete($id);
            if(file_exists('./upload/men/'.$data->product_img1)){
                unlink('./upload/men/'.$data->product_img1);
              }
              if(file_exists('./upload/men/'.$data->product_img2)){
                unlink('./upload/men/'.$data->product_img2);
              }
              if(file_exists('./upload/men/'.$data->product_img3)){
                unlink('./upload/men/'.$data->product_img3);
              }
              
        $result = $this->admin_model->delete_men_id($id);
        if ($result) {
            redirect(base_url('admin/view_mens_product'));
        } else {
            echo 'error in deleting';
        }
            }

    }

    
 








    public function view_womens_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data1']=$this->admin_model->women_silk_sarees();
        $return['data2']=$this->admin_model->women_cotton_silk();
        $return['data3']=$this->admin_model->women_cotton_sarees();
        $return['data4']=$this->admin_model->women_satin_sarees();
        $return['data5']=$this->admin_model->women_jeans();
        $return['data6']=$this->admin_model->women_leggins();
        $return['data7']=$this->admin_model->women_shorts();
        $return['data8']=$this->admin_model->women_skirts();
        $return['data9']=$this->admin_model->women_kurtis();
        $return['data10']=$this->admin_model->women_kurtas_set();
        $return['data11']=$this->admin_model->women_bra();
        $return['data12']=$this->admin_model->women_briefs();
        $this->load->view('admin/view_details/womens_product',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_women_edit($id){
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data2']=$this->admin_model->get_women_edit($id);
        $this->load->view('admin/edit_details/womens_edit',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_women_update() {
        extract($_POST);
        extract($_FILES);
   
        $product_img1=$this->input->post('product_img1');
        $product_img2=$this->input->post('product_img2');
        $product_img3=$this->input->post('product_img3');

        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        $new_image3=$_FILES['new_image3']['name'];

        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/women/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
            
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/women/'.$product_img1)){
                    unlink('./upload/women/'.$product_img1);
                  }
                } 
         }
         else{
            $new_image1  = $product_img1;
         }

         if($new_image2 == TRUE){
            $config = [
                'upload_path' => './upload/women/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
     
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image2')) {
                  if(file_exists('./upload/women/'.$product_img2)){
                    unlink('./upload/women/'.$product_img2);
                  }
                } 
         }
         else{
            $new_image2  = $product_img2;
         }

         if($new_image3 == TRUE){
            $config = [
                'upload_path' => './upload/women/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
              
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image3')) {
                  if(file_exists('./upload/women/'.$product_img3)){
                    unlink('./upload/women/'.$product_img3);
                  }
                } 
         }
         else{
            $new_image3  = $product_img3;
         }

        $edit_id = $id;
        $data = [
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$new_image1,
            'product_img2'=>$new_image2,
            'product_img3'=>$new_image3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result = $this->admin_model->women_update($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/view_womens_product'));
        } else {
            echo 'not successfully';
        }
    }

    public function get_delete_women($id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->get_delete_women($id)){
            $data=$this->admin_model->get_delete_women($id);
            if(file_exists('./upload/women/'.$data->product_img1)){
                unlink('./upload/women/'.$data->product_img1);
              }
              if(file_exists('./upload/women/'.$data->product_img2)){
                unlink('./upload/women/'.$data->product_img2);
              }
              if(file_exists('./upload/women/'.$data->product_img3)){
                unlink('./upload/women/'.$data->product_img3);
              }
              
        $result = $this->admin_model->delete_women_id($id);
        if ($result) {
            redirect(base_url('admin/view_womens_product'));
        } else {
            echo 'error in deleting';
        }
            }

    }



    public function view_kids_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data1']=$this->admin_model->kids_all_Dresses();
        $return['data2']=$this->admin_model->kids_soft_toys();
        $return['data3']=$this->admin_model->kids_backPacks();
        $return['data4']=$this->admin_model->kids_stationary();
        $return['data5']=$this->admin_model->kids_watches();
        $return['data6']=$this->admin_model->kids_footWears();
        $return['data7']=$this->admin_model->kids_babycare();
        $this->load->view('admin/view_details/kids_product',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_kids_edit($id){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data2']=$this->admin_model->get_kids_edit($id);
        $this->load->view('admin/edit_details/kids_edit',$return);
        $this->load->view('admin/footer');
    }
    public function get_kids_update() {
        extract($_POST);
        extract($_FILES);
   
        $product_img1=$this->input->post('product_img1');
        $product_img2=$this->input->post('product_img2');
        $product_img3=$this->input->post('product_img3');

        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        $new_image3=$_FILES['new_image3']['name'];

        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/kids/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
            
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/kids/'.$product_img1)){
                    unlink('./upload/kids/'.$product_img1);
                  }
                } 
         }
         else{
            $new_image1  = $product_img1;
         }

         if($new_image2 == TRUE){
            $config = [
                'upload_path' => './upload/kids/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
     
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image2')) {
                  if(file_exists('./upload/kids/'.$product_img2)){
                    unlink('./upload/kids/'.$product_img2);
                  }
                } 
         }
         else{
            $new_image2  = $product_img2;
         }

         if($new_image3 == TRUE){
            $config = [
                'upload_path' => './upload/kids/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
              
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image3')) {
                  if(file_exists('./upload/kids/'.$product_img3)){
                    unlink('./upload/kids/'.$product_img3);
                  }
                } 
         }
         else{
            $new_image3  = $product_img3;
         }

        $edit_id = $id;
        $data = [
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$new_image1,
            'product_img2'=>$new_image2,
            'product_img3'=>$new_image3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result = $this->admin_model->kids_update($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/view_kids_product'));
        } else {
            echo 'not successfully';
        }
    }

    public function get_delete_kids($id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->get_delete_kids($id)){
            $data=$this->admin_model->get_delete_kids($id);
            if(file_exists('./upload/kids/'.$data->product_img1)){
                unlink('./upload/kids/'.$data->product_img1);
              }
              if(file_exists('./upload/kids/'.$data->product_img2)){
                unlink('./upload/kids/'.$data->product_img2);
              }
              if(file_exists('./upload/kids/'.$data->product_img3)){
                unlink('./upload/kids/'.$data->product_img3);
              }
              
        $result = $this->admin_model->delete_kids_id($id);
        if ($result) {
            redirect(base_url('admin/view_kids_product'));
        } else {
            echo 'error in deleting';
        }
            }

    }


    public function view_home_kitchen_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data1']=$this->admin_model->hk_bedsheets();
        $return['data2']=$this->admin_model->hk_dorrmats();
        $return['data3']=$this->admin_model->hk_matress();
        $return['data4']=$this->admin_model->hk_cushions();
        $return['data5']=$this->admin_model->hk_decor();
        $return['data6']=$this->admin_model->hk_stickers();
        $return['data7']=$this->admin_model->hk_clock();
        $return['data8']=$this->admin_model->hk_showpiece();
        $return['data9']=$this->admin_model->hk_kitchen_storage();
        $return['data10']=$this->admin_model->hk_cookware_bakebare();
        $this->load->view('admin/view_details/home_kitchen_product',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_homekitchen_edit($id){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data2']=$this->admin_model->get_homekitchen_edit($id);
        $this->load->view('admin/edit_details/homekitchen_edit',$return);
        $this->load->view('admin/footer');
    }
    public function get_homekitchen_update() {
        extract($_POST);
        extract($_FILES);
   
        $product_img1=$this->input->post('product_img1');
        $product_img2=$this->input->post('product_img2');
        $product_img3=$this->input->post('product_img3');

        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        $new_image3=$_FILES['new_image3']['name'];

        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/home_kitchen/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
            
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/home_kitchen/'.$product_img1)){
                    unlink('./upload/home_kitchen/'.$product_img1);
                  }
                } 
         }
         else{
            $new_image1  = $product_img1;
         }

         if($new_image2 == TRUE){
            $config = [
                'upload_path' => './upload/home_kitchen/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
     
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image2')) {
                  if(file_exists('./upload/home_kitchen/'.$product_img2)){
                    unlink('./upload/home_kitchen/'.$product_img2);
                  }
                } 
         }
         else{
            $new_image2  = $product_img2;
         }

         if($new_image3 == TRUE){
            $config = [
                'upload_path' => './upload/home_kitchen/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
              
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image3')) {
                  if(file_exists('./upload/home_kitchen/'.$product_img3)){
                    unlink('./upload/home_kitchen/'.$product_img3);
                  }
                } 
         }
         else{
            $new_image3  = $product_img3;
         }

        $edit_id = $id;
        $data = [
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$new_image1,
            'product_img2'=>$new_image2,
            'product_img3'=>$new_image3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result = $this->admin_model->homekitchen_update($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/view_home_kitchen_product'));
        } else {
            echo 'not successfully';
        }
    }

    public function get_delete_homekitchen($id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->get_delete_homekitchen($id)){
            $data=$this->admin_model->get_delete_homekitchen($id);
            if(file_exists('./upload/home_kitchen/'.$data->product_img1)){
                unlink('./upload/home_kitchen/'.$data->product_img1);
              }
              if(file_exists('./upload/home_kitchen/'.$data->product_img2)){
                unlink('./upload/home_kitchen/'.$data->product_img2);
              }
              if(file_exists('./upload/home_kitchen/'.$data->product_img3)){
                unlink('./upload/home_kitchen/'.$data->product_img3);
              }
              
        $result = $this->admin_model->delete_homekitchen_id($id);
        if ($result) {
            redirect(base_url('admin/view_home_kitchen_product'));
        } else {
            echo 'error in deleting';
        }
            }

    }

// 
    public function view_beauty_health_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data1']=$this->admin_model->bh_eyeliner();
        $return['data2']=$this->admin_model->bh_nailpolish();
        $return['data3']=$this->admin_model->bh_makeupkits();
        $return['data4']=$this->admin_model->bh_lipsticks();
        $return['data5']=$this->admin_model->bh_sanitizers();
        $return['data6']=$this->admin_model->bh_oralcare();
        $return['data7']=$this->admin_model->bh_femininehygiene();
        $return['data8']=$this->admin_model->bh_detorants();
        $this->load->view('admin/view_details/beauty_health_product',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_beautyhealth_edit($id){
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data2']=$this->admin_model->get_beautyhealth_edit($id);
        $this->load->view('admin/edit_details/beautyhealth_edit',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_beautyhealth_update() {
        extract($_POST);
        extract($_FILES);
   
        $product_img1=$this->input->post('product_img1');
        $product_img2=$this->input->post('product_img2');
        $product_img3=$this->input->post('product_img3');

        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        $new_image3=$_FILES['new_image3']['name'];

        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/beauty_health/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
            
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/beauty_health/'.$product_img1)){
                    unlink('./upload/beauty_health/'.$product_img1);
                  }
                } 
         }
         else{
            $new_image1  = $product_img1;
         }

         if($new_image2 == TRUE){
            $config = [
                'upload_path' => './upload/beauty_health/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
     
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image2')) {
                  if(file_exists('./upload/beauty_health/'.$product_img2)){
                    unlink('./upload/beauty_health/'.$product_img2);
                  }
                } 
         }
         else{
            $new_image2  = $product_img2;
         }

         if($new_image3 == TRUE){
            $config = [
                'upload_path' => './upload/beauty_health/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
              
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image3')) {
                  if(file_exists('./upload/beauty_health/'.$product_img3)){
                    unlink('./upload/beauty_health/'.$product_img3);
                  }
                } 
         }
         else{
            $new_image3  = $product_img3;
         }

        $edit_id = $id;
        $data = [
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$new_image1,
            'product_img2'=>$new_image2,
            'product_img3'=>$new_image3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result = $this->admin_model->beautyhealth_update($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/view_beauty_health_product'));
        } else {
            echo 'not successfully';
        }
    }

    public function get_delete_beautyhealth($id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->get_delete_beautyhealth($id)){
            $data=$this->admin_model->get_delete_beautyhealth($id);
            if(file_exists('./upload/beauty_health/'.$data->product_img1)){
                unlink('./upload/beauty_health/'.$data->product_img1);
              }
              if(file_exists('./upload/beauty_health/'.$data->product_img2)){
                unlink('./upload/beauty_health/'.$data->product_img2);
              }
              if(file_exists('./upload/beauty_health/'.$data->product_img3)){
                unlink('./upload/beauty_health/'.$data->product_img3);
              }
              
        $result = $this->admin_model->delete_beautyhealth_id($id);
        if ($result) {
            redirect(base_url('admin/view_beauty_health_product'));
        } else {
            echo 'error in deleting';
        }
            }

    }

    // 
    public function view_electronics_product() {
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data1']=$this->admin_model->ele_mobileaccessories();
        $return['data2']=$this->admin_model->ele_watches();
        $return['data3']=$this->admin_model->ele_mobileholder();
        $return['data4']=$this->admin_model->ele_mobilebc();
        $return['data5']=$this->admin_model->ele_allappliences();
        $return['data6']=$this->admin_model->ele_homeappliences();
        $this->load->view('admin/view_details/electronics_product',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_electronics_edit($id){
        if(  $this->session->userdata('Eadmin_user')){
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $return['data2']=$this->admin_model->get_electronics_edit($id);
        $this->load->view('admin/edit_details/electronics_edit',$return);
        $this->load->view('admin/footer');
    }else{
        redirect('/');
    }
    }
    public function get_electronics_update() {
        extract($_POST);
        extract($_FILES);
   
        $product_img1=$this->input->post('product_img1');
        $product_img2=$this->input->post('product_img2');
        $product_img3=$this->input->post('product_img3');

        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        $new_image3=$_FILES['new_image3']['name'];

        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/electronics/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
            
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/electronics/'.$product_img1)){
                    unlink('./upload/electronics/'.$product_img1);
                  }
                } 
         }
         else{
            $new_image1  = $product_img1;
         }

         if($new_image2 == TRUE){
            $config = [
                'upload_path' => './upload/electronics/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
     
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image2')) {
                  if(file_exists('./upload/electronics/'.$product_img2)){
                    unlink('./upload/electronics/'.$product_img2);
                  }
                } 
         }
         else{
            $new_image2  = $product_img2;
         }

         if($new_image3 == TRUE){
            $config = [
                'upload_path' => './upload/electronics/',
                'allowed_types' => 'png|jpg|jpeg|avif|webp',
              
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image3')) {
                  if(file_exists('./upload/electronics/'.$product_img3)){
                    unlink('./upload/electronics/'.$product_img3);
                  }
                } 
         }
         else{
            $new_image3  = $product_img3;
         }

        $edit_id = $id;
        $data = [
            'product_category'=>$product_category,
            'product_brand'=>$product_brand,
            'product_name'=>$product_name,
            'product_size1'=>$product_size1,
            'product_count1'=>$product_count1,
            'product_size2'=>$product_size2,
            'product_count2'=>$product_count2,
            'product_size3'=>$product_size3,
            'product_count3'=>$product_count3,  
            'product_size4'=>$product_size4,
            'product_count4'=>$product_count4,
            'product_size5'=>$product_size5,
            'product_count5'=>$product_count5,
            'product_size6'=>$product_size6,
            'product_count6'=>$product_count6,
            'product_size7'=>$product_size7,
            'product_count7'=>$product_count7,
            'product_img1'=>$new_image1,
            'product_img2'=>$new_image2,
            'product_img3'=>$new_image3,
            'product_price'=>$product_price,
            'product_offer'=>$product_offer,
            'product_details'=>$product_details,
            'product_description'=>$product_description,
        ];
        $this->load->model('admin_model');
        $result = $this->admin_model->electronics_update($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/view_electronics_product'));
        } else {
            echo 'not successfully';
        }
    }

    public function get_delete_electronics($id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->get_delete_electronics($id)){
            $data=$this->admin_model->get_delete_electronics($id);
            if(file_exists('./upload/electronics/'.$data->product_img1)){
                unlink('./upload/electronics/'.$data->product_img1);
              }
              if(file_exists('./upload/electronics/'.$data->product_img2)){
                unlink('./upload/electronics/'.$data->product_img2);
              }
              if(file_exists('./upload/electronics/'.$data->product_img3)){
                unlink('./upload/electronics/'.$data->product_img3);
              }
              
        $result = $this->admin_model->delete_electronics_id($id);
        if ($result) {
            redirect(base_url('admin/view_electronics_product'));
        } else {
            echo 'error in deleting';
        }
            }
    }
}
?>