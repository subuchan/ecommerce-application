<?php
class main_model extends CI_Model
{

    public function check_user($user, $pass)
    {
        $this->load->database();
        $result = $this->db->get_where('users_table', array('username' => $user, 'password' => $pass));
        return $result->row_array();
    }
    //new start
    // public function checkbox_size($id = 0){
    //     $this->load->database();
    //     $this->db->where('id',$id);
    //    return $this->db->get('mens_product_table')->result();
    // }
    public function user_addtocart($data_cart1){
        $this->load->database();
        return $this->db->insert('user_addtocart',$data_cart1);            
                }
     public function fetchdata_user_id($user1){
    $this->load->database();
    $this->db->where('user_id', $user1);
    return $this->db->get('user_addtocart')->result();
                }  
                public function fetchdata_user_id_add($user_id){
                    $this->load->database();
    $this->db->where('user_id', $user_id);
    return $this->db->get('user_addtocart')->result();
                }
                public function address_get($id){
                    $this->load->database();
                     $this->db->where('id', $id);
                    return  $this->db->get('user_details')->result();
                }
                public function address_update($id,$data){
                    $this->load->database();
                    $this->db->where('id',$id);
                    return $this->db->update('user_details',$data);
                }
                public function update_qty($data,$edit){
                    $this->load->database();
                    $this->db->where('id',$edit);
                    return $this->db->update('user_addtocart',$data);
                }  
                public function delete_qty($id){
                    $this->load->database();
                    $this->db->where('id',$id);
                    // $this->db->where('rowid',$rowid);
                    // $this->db->where('username',$username);
                    return $this->db->delete('user_addtocart');
                }   
                public function fetchdata_count($user_id){
                    $this->load->database();
                    $this->db->where('user_id',$user_id);
                    $q = $this->db->get('user_addtocart');
                    $count=$q->result();
                    return count($count);
                // return	$this->db->count_all("user_cart");
                }
                public function user_address($data){
                    $this->load->database();
                   return $this->db->insert('user_details',$data);
                }
                public function address_fetch($user_id){
                    $this->load->database();
                    $this->db->where('user_id',$user_id);
                  return $this->db->get('user_details')->result();
                    
                }
                // public function delete_fetch_id($id,$userid){
                //     $this->load->database();
                //     $this->db->where('id',$id);
                //     $this->db->where('user_id',$userid);
                //     return $this->db->get('user_addtocart')->result();
                // }z
    // end
    public function fetch_men_jean()
    {
        $this->load->database();
        $this->db->where('product_category', 'Jeans');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_jean($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }

    // 
    public function fetch_men_trousers()
    {
        $this->load->database();
        $this->db->where('product_category', 'Trousers');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_trousers($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }

    // 
    public function fetch_men_trackphant()
    {
        $this->load->database();
        $this->db->where('product_category', 'TrackPhants');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_trackphant($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_tshirts()
    {
        $this->load->database();
        $this->db->where('product_category', 'T-Shirts');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_tshirts($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_shirts()
    {
        $this->load->database();
        $this->db->where('product_category', 'Shirts');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_shirts($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_kurtas()
    {
        $this->load->database();
        $this->db->where('product_category', 'MenKurtas');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_kurtas($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }
    // 
    public function fetch_men_jackets()
    {
        $this->load->database();
        $this->db->where('product_category', 'EthnicsJackets');
        return $this->db->get('mens_product_table')->result();
    }
    public function click_men_jackets($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->result();
    }

    // wommens database 

    public function fetch_Silk_Sarees()
    {
        $this->load->database();
        $this->db->where('product_category', 'Silk-Sarees');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_Silk_Sarees($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    // 

    public function fetch_Cotton_Silk()
    {
        $this->load->database();
        $this->db->where('product_category', 'Cotton-Silk');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_Cotton_Silk($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    // 
    public function fetch_Cotton_Sarees()
    {
        $this->load->database();
        $this->db->where('product_category', 'Cotton-Sarees');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_Cotton_Sarees($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    //
    public function fetch_Satin_Sarees()
    {
        $this->load->database();
        $this->db->where('product_category', 'Satin-Sarees');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_Satin_Sarees($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    // 
    public function fetch_women_Kurtis()
    {
        $this->load->database();
        $this->db->where('product_category', 'Kurtis');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_Kurtis($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    // 
    public function fetch_women_Kurta()
    {
        $this->load->database();
        $this->db->where('product_category', 'Kurtas-set');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_Kurta($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    // 
    public function fetch_women_jean()
    {
        $this->load->database();
        $this->db->where('product_category', 'Jeans');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_jean($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    //  
    public function fetch_women_Leggins()
    {
        $this->load->database();
        $this->db->where('product_category', 'Leggins');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_Leggins($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    //  
    public function fetch_women_Skirts()
    {
        $this->load->database();
        $this->db->where('product_category', 'Skirts');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_Skirts($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    //  
    public function fetch_women_Shorts()
    {
        $this->load->database();
        $this->db->where('product_category', 'Shorts');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_Shorts($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    //  
    public function fetch_women_Bra()
    {
        $this->load->database();
        $this->db->where('product_category', 'Bra');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_Bra($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    //  
    public function fetch_women_Briefs()
    {
        $this->load->database();
        $this->db->where('product_category', 'Briefs');
        return $this->db->get('womens_product_table')->result();
    }
    public function click_women_Briefs($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('womens_product_table')->result();
    }
    //  


    // kids database

    public function fetch_kids_dresses()
    {
        $this->load->database();
        $this->db->where('product_category', 'All-Dresses');
        return $this->db->get('kids_product_table')->result();
    }
    public function click_kids_dresses($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('kids_product_table')->result();
    }







    // 
    public function fetch_product($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('mens_product_table')->row_array();
    }

    // public function order_list_details($data)
//     {
//         $this->db->insert('checkout_form', $data);
//         $id = $this->db->insert_id();
//         return (isset($id)) ? $id : FALSE;
//     }
// public function insert_order($order)
//     {
//         $this->db->insert('customer_order', $order);
//         $id = $this->db->insert_id();
//         return (isset($id)) ? $id : FALSE;
//     }
// 	public function insert_order_detail($order)
//     {
//         $this->db->insert('order_details', $order);
//         $id = $this->db->insert_id();
//         return (isset($id)) ? $id : FALSE;
//     }
// public function order_list($data){
// 	$this->load->database();
// 	return $this->db->insert('order_list',$data);
// }
// public function update_qty($data){
// 	$this->load->database();
// 	return $this->db->update('order_list',$data);
// }

    // public function fetchdata_customer(){
// 	$this->load->database();
// 	return $this->db->get('checkout_form')->result();
// }

    // public function pay_check($registrationData1){
// 	$this->load->database();
// 	return $this->db->insert('payment_02',$registrationData1);
// }

    // public function verification($data){
// 	$this->load->database();
// 	return $this->db->insert('firebase',$data);
// }
// public function name_field($datass){
// 	$this->load->database();
// 	return $this->db->insert('payment_01',$datass);
// }





}
?>