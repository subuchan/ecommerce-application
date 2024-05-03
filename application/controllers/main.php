<?php
class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->helper('url');
		$this->load->model('main_model');
		$this->load->helper(array('form', 'url'));
	}
	public function login() {
		
		$this->load->view('header');
		$this->load->view('login');
	}
	public function login_user() {
        extract($_POST);
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->load->model('main_model');
        $result = $this->main_model->check_user($user, $pass);
        if ($result) {
            $this->session->set_userdata('eco_user', $result);
            redirect(base_url('main/index'));
        } else {
            echo 'invalid username password.. Please check your username and password.';
        }
	}
	public function user_logout() {
		$this->session->unset_userdata('eco_user');
		$this->cart->destroy();
        redirect('/');
		// redirect(base_url('main/index/'));
	}

    public function index() {
		if($this->session->userdata('eco_user')){
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
		}
		else {
			$this->load->view('header');
		    $this->load->view('index');
		    $this->load->view('footer');
		}
	}
	public function men_jeans() {
		if($users=$this->session->userdata('eco_user')){
			$user_id=$users['id'];
			$this->load->model('main_model');
			$result1['data1']=$this->main_model->fetchdata_count($user_id);
			$this->load->view('header',$result1);
			$return['data1']=$this->main_model->fetch_men_jean();
			$this->load->view('men/jeans/men-jeans',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jean();
			$this->load->view('men/jeans/men-jeans',$return);
			$this->load->view('footer');
		}
		
	}
	public function jean_description($id) {
		if($users=$this->session->userdata('eco_user')){
			$user_id=$users['id'];
			$this->load->model('main_model');
			$result1['data1']=$this->main_model->fetchdata_count($user_id);
			$this->load->view('header',$result1);
			$return['data1']=$this->main_model->click_men_jean($id);
			$this->load->view('men/jeans/jean-desc',$return);
			$this->load->view('footer');
		}else{
			redirect('/');
		}
		
	}

	// 
	public function men_trousers() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trousers();
			$this->load->view('men/trousers/men-trousers',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trousers();
			$this->load->view('men/trousers/men-trousers',$return);
			$this->load->view('footer');
		}
		
	}
	public function trousers_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_trousers($id);
		$this->load->view('men/trousers/trousers-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function men_trackphant() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trackphant();
			$this->load->view('men/trackphant/men-trackphant',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_trackphant();
			$this->load->view('men/trackphant/men-trackphant',$return);
			$this->load->view('footer');
		}
		
	}
	public function trackphant_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_trackphant($id);
		$this->load->view('men/trackphant/trackphant-desc',$return);
		$this->load->view('footer');
	}
	// 

	public function men_tshirts() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_tshirts();
			$this->load->view('men/tshirts/men-tshirts',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jean();
			$this->load->view('men/tshirts/men-tshirts',$return);
			$this->load->view('footer');
		}
		
	}
	public function tshirts_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_tshirts($id);
		$this->load->view('men/tshirts/tshirts-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function men_shirts() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_shirts();
			$this->load->view('men/shirts/men-shirts',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_shirts();
			$this->load->view('men/shirts/men-shirts',$return);
			$this->load->view('footer');
		}
		
	}
	public function shirts_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_shirts($id);
		$this->load->view('men/shirts/shirts-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function men_kurtas() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_kurtas();
			$this->load->view('men/kurtas/men-kurtas',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_kurtas();
			$this->load->view('men/kurtas/men-kurtas',$return);
			$this->load->view('footer');
		}
		
	}
	public function kurtas_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_kurtas($id);
		$this->load->view('men/kurtas/kurtas-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function men_jackets() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jackets();
			$this->load->view('men/jackets/men-jackets',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_men_jackets();
			$this->load->view('men/jackets/men-jackets',$return);
			$this->load->view('footer');
		}
		
	}
	public function jackets_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_men_jackets($id);
		$this->load->view('men/jackets/jackets-desc',$return);
		$this->load->view('footer');
	}

	// women sections

	public function silk_sarees() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Silk_Sarees();
			$this->load->view('womens/silk-sarees/silk-sarees',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Silk_Sarees();
			$this->load->view('womens/silk-sarees/silk-sarees',$return);
			$this->load->view('footer');
		}
		
	}
	public function silksarees_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_Silk_Sarees($id);
		$this->load->view('womens/silk-sarees/silk-sarees-desc',$return);
		$this->load->view('footer');
	}
    // 
	public function cottonsilk_sarees() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Cotton_Silk();
			$this->load->view('womens/cotton-silk-sarees/cottonsilk-sarees',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Cotton_Silk();
			$this->load->view('womens/cotton-silk-sarees/cottonsilk-sarees',$return);
			$this->load->view('footer');
		}
		
	}
	public function cottonsilk_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_Cotton_Silk($id);
		$this->load->view('womens/cotton-silk-sarees/cottonsilk-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function cotton_sarees() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Cotton_Sarees();
			$this->load->view('womens/cotton-sarees/cotton-sarees',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Cotton_Sarees();
			$this->load->view('womens/cotton-sarees/cotton-sarees',$return);
			$this->load->view('footer');
		}
		
	}
	public function cottonsarees_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_Cotton_Sarees($id);
		$this->load->view('womens/cotton-sarees/cottonsarees-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function satin_sarees() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Satin_Sarees();
			$this->load->view('womens/satin-sarees/satin-sarees',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_Satin_Sarees();
			$this->load->view('womens/satin-sarees/satin-sarees',$return);
			$this->load->view('footer');
		}
		
	}
	public function satinsarees_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_Satin_Sarees($id);
		$this->load->view('womens/satin-sarees/satinsarees-desc',$return);
		$this->load->view('footer');
	}
	// 

	public function women_kurtis() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Kurtis();
			$this->load->view('womens/kurtis/women-kurtis',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Kurtis();
			$this->load->view('womens/kurtis/women-kurtis',$return);
			$this->load->view('footer');
		}
		
	}
	public function womenkurtis_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_Kurtis($id);
		$this->load->view('womens/kurtis/kurtis-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function women_kurtas() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Kurta();
			$this->load->view('womens/kurta/women-kurta',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Kurta();
			$this->load->view('womens/kurta/women-kurta',$return);
			$this->load->view('footer');
		}
		
	}
	public function women_kurtas_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_Kurta($id);
		$this->load->view('womens/kurta/womenkurta-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function women_jeans() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_jean();
			$this->load->view('womens/jeans/women-jeans',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_jean();
			$this->load->view('womens/jeans/women-jeans',$return);
			$this->load->view('footer');
		}
		
	}
	public function women_jeans_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_jean($id);
		$this->load->view('womens/jeans/jeans-desc',$return);
		$this->load->view('footer');
	}
	// 
	public function women_leggins() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Leggins();
			$this->load->view('womens/leggins/leggins',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Leggins();
			$this->load->view('womens/leggins/leggins',$return);
			$this->load->view('footer');
		}
		
	}
	public function leggins_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_Leggins($id);
		$this->load->view('womens/leggins/leggins-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function women_shorts() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Shorts();
			$this->load->view('womens/shorts/shorts',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Shorts();
			$this->load->view('womens/shorts/shorts',$return);
			$this->load->view('footer');
		}
		
	}
	public function women_shorts_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_Shorts($id);
		$this->load->view('womens/shorts/shorts-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function women_skirts() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Skirts();
			$this->load->view('womens/skirts/skirts',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Skirts();
			$this->load->view('womens/skirts/skirts',$return);
			$this->load->view('footer');
		}
		
	}
	public function skirts_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_Skirts($id);
		$this->load->view('womens/skirts/skirts-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function women_bra() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Bra();
			$this->load->view('womens/bra/women-bra',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Bra();
			$this->load->view('womens/bra/women-bra',$return);
			$this->load->view('footer');
		}
		
	}
	public function bra_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_Bra($id);
		$this->load->view('womens/bra/womenbra-desc',$return);
		$this->load->view('footer');
	}

	// 
	public function women_briefs() {
		if($this->session->userdata('user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Briefs();
			$this->load->view('womens/briefs/briefs',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_women_Briefs();
			$this->load->view('womens/briefs/briefs',$return);
			$this->load->view('footer');
		}
		
	}
	public function briefs_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_women_Briefs($id);
		$this->load->view('womens/briefs/briefs-desc',$return);
		$this->load->view('footer');
	}

	// 
    


	// kids section 
    public function kids_dresses() {
		if($this->session->userdata('eco_user')){
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_kids_dresses();
			$this->load->view('kids/all-dresses/dress',$return);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->model('main_model');
			$return['data1']=$this->main_model->fetch_kids_dresses();
			$this->load->view('kids/all-dresses/dress',$return);
			$this->load->view('footer');
		}
		
	}
	public function kidsdresses_description($id) {
		$this->load->view('header');
		$this->load->model('main_model');
		$return['data1']=$this->main_model->click_kids_dresses($id);
		$this->load->view('kids/all-dresses/dress-desc',$return);
		$this->load->view('footer');
	}
	// 


	public function shopping_cart() {
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');
	}

	public function add_cart($id){
		if($user_id=$this->session->userdata('eco_user')){ 
			$user=$user_id['id'];
		$this->load->library('cart');
		$this->load->model('main_model');
		extract($_POST);
		    $size=$this->input->post('size');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('size', 'size', 'required'); // Validating select option field.
			if($this->form_validation->run() == false){	
				$this->session->set_flashdata('error','<div class="alert alert-danger">Please select a size.</div>');
						  redirect(base_url('main/jean_description/') . $id);				
			}else{
		$products=$this->main_model->fetch_product($id);
		$data_cart1  = array(
			'pro_id'=> $products['id'], 
			'qty'     => 1, 
			'price'   =>$products['product_price'],
			'name'=> $products['product_name'],
			'discount'=>$products['product_offer'],
			'discount_price'=>$products['product_offer_price'],
			'delivery'=>$products['product_delivery_charge'],
			'image'=>$products['product_img1'],
			// 'rowid' => $row_id,
			'user_id' =>$user,
			'size' => $size,
			'subtotal' => $products['product_price'],
		  );	      
		  $datass['cartItems']=$this->main_model->user_addtocart($data_cart1);
		 $this->session->set_flashdata('success','<div class="alert alert-success">Product is added to cart successfully.</div>');
         redirect(base_url('main/jean_description/') . $id);
		
	}
}
	}
	
public function checkout_page($user1){
	if($users=$this->session->userdata('eco_user')){
		$user_id=$users['id'];
		$this->load->model('main_model');
		$result1['data1']=$this->main_model->fetchdata_count($user_id);
		$this->load->view('header',$result1);
		$result['address']=$this->main_model->address_fetch($user_id);
		$result['cartItems']=$this->main_model->fetchdata_user_id($user1);
		$cart_data=$this->load->view('address_form',$result);
		$this->load->view('footer');
}else{
	redirect('/');
}
}

public function add_new_address($userid){
	if($users=$this->session->userdata('eco_user')){
		$user_id=$users['id'];
		$this->load->model('main_model');
		$result1['data1']=$this->main_model->fetchdata_count($user_id);
		$this->load->view('header',$result1);
		$result['address']=$this->main_model->address_fetch($user_id);
		$result['cartItems']=$this->main_model->fetchdata_user_id_add($user_id);
		$cart_data=$this->load->view('add_new_address',$result);
		$this->load->view('footer');
}else{
	redirect('/');
}
}

public function user_address($userid){
	if($this->session->userdata('eco_user')){
		extract($_POST);
		
		$data = [
			'user_name' => $name,
			'user_number'=>$number,
			'user_address'=>$address,
			'user_pincode'=>$pincode,
			'user_city'=>$city,
			'user_state'=>$state,
			'user_nearby'=>$nearby,
			'user_id'=>$userid,
		];
		$this->load->model('main_model');
		$this->main_model->user_address($data);
        redirect('main/checkout_page/' . $userid);
	}else{
		redirect('/');
	}
}
public function address_edit($id){
	if($users=$this->session->userdata('eco_user')){
		$user_id=$users['id'];
		$this->load->model('main_model');
		$result1['data1']=$this->main_model->fetchdata_count($user_id);
		$this->load->view('header',$result1);
		$result['address']=$this->main_model->address_fetch($user_id);
		$result['cartItems']=$this->main_model->fetchdata_user_id_add($user_id);
		$result['address_edit']=$this->main_model->address_get($id);
		$cart_data=$this->load->view('address_edit',$result);
		$this->load->view('footer');
	}
}



public function user_address_update($id){
	if($users=$this->session->userdata('eco_user')){
		$userid=$users['id'];
		extract($_POST);
		$data = [
			'user_name' => $name,
			'user_number'=>$number,
			'user_address'=>$address,
			'user_pincode'=>$pincode,
			'user_city'=>$city,
			'user_state'=>$state,
			'user_nearby'=>$nearby,
			'user_id'=>$userid,
		];
		
		$this->load->model('main_model');
		$this->main_model->address_update($id,$data);
		redirect('main/checkout_page/' . $userid);
	}
}

public function payment($userid){
	if($users=$this->session->userdata('eco_user')){
		$user_id=$users['id'];
		$this->load->model('main_model');
		$result1['data1']=$this->main_model->fetchdata_count($user_id);
		$this->load->view('header',$result1);
		$result['address']=$this->main_model->address_fetch($user_id);
		$result['cartItems']=$this->main_model->fetchdata_user_id_add($user_id);
		$cart_data=$this->load->view('payment_option',$result);
		$this->load->view('footer');
}else{
	redirect('/');
}	
}

	 public function cart_view_id($user1){
		if($users=$this->session->userdata('eco_user')){
			$user_id=$users['id'];
			$this->load->model('main_model');
			$result1['data1']=$this->main_model->fetchdata_count($user_id);
			$this->load->view('header',$result1);
			$result['cartItems']=$this->main_model->fetchdata_user_id($user1);
			$cart_data=$this->load->view('cart_add',$result);
           $this->load->view('footer');
			
			}else{
				redirect('/');
			}
	 }

	 
public function cart_view_empty(){
	// $this->load->view('header');
	$this->load->view('empty_cart');
	// $this->load->view('footer');
}
	 public function cart_price(){
		if($user_edit=$this->session->userdata('eco_user')){
			extract($user_edit);
		extract($_POST);
		$rowid = $_POST['rowid'];
		$price = $_POST['price'];
		$amount = $price * $_POST['qty'];
		$qty = $_POST['qty'];
		$edid=$id;
	
		$data = array(
			'rowid' => $rowid,
			'price' => $price,
			'subtotal' => $amount,
			'qty' => $qty
			);
			$this->load->model('main_model');
			// $update=$this->main_model->update_qty_del($data,$edid);
			$update=$this->main_model->update_qty($data,$edid);
			$update1 = $this->cart->update($update);
			redirect('main/cart_view_id/'.$user_edit['id']);
		}else{
			redirect('/');
		}
	}
	

	public function cart_delete($id){	
		$this->load->model('main_model');
		$result=$this->main_model->delete_qty($id);
		if($user_delete=$this->session->userdata('eco_user')){
			extract($user_delete);
			$this->session->set_flashdata('remove','<div class="alert alert-success">Product is remove to cart successfully.</div>');	
		redirect('main/cart_view_id/' . $user_delete['id']);
		}else{
			redirect('/');
		}
	}

	
} 
?>
