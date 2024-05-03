<?php

class admin_model extends CI_Model {

    public function check_admin($username,$password) {
        $this->load->database();
        $result = $this->db->get_where('admin_table',array('username'=>$username,'password'=>$password));
        return $result->row_array();
    }
    public function mens_product($data) {
        $this->load->database();
       return $this->db->insert('mens_product_table',$data);
    }

    public function womens_product($data) {
        $this->load->database();
       return $this->db->insert('womens_product_table',$data);
    }

    public function kids_product($data) {
        $this->load->database();
       return $this->db->insert('kids_product_table',$data);
    }

    public function home_kitchen_product($data){
        $this->load->database();
       return $this->db->insert('homekitchen_product_table',$data);
    }

    public function beautyhealth_product($data){
        $this->load->database();
        return $this->db->insert('beautyhealth_product_table',$data);
    }
    public function electronics_product($data){
        $this->load->database();
        return $this->db->insert('electronics_product_table',$data);
    }
    // admin table view mens products Details 
    public function men_fetch_jean(){
        $this->load->database();
        $this->db->where('product_category','Jeans');
        return $this->db->get('mens_product_table')->result();
    }
    public function men_fetch_trousers(){
        $this->load->database();
        $this->db->where('product_category','Trousers');
        return $this->db->get('mens_product_table')->result();
    }
    public function men_fetch_trackphants(){
        $this->load->database();
        $this->db->where('product_category','TrackPhants');
        return $this->db->get('mens_product_table')->result();
    }
    public function men_fetch_tshirts(){
        $this->load->database();
        $this->db->where('product_category','T-Shirts');
        return $this->db->get('mens_product_table')->result();
    }
    public function men_fetch_shirts(){
        $this->load->database();
        $this->db->where('product_category','Shirts');
        return $this->db->get('mens_product_table')->result();
    }
    public function men_fetch_kurtas(){
        $this->load->database();
        $this->db->where('product_category','MenKurtas');
        return $this->db->get('mens_product_table')->result();
    }
    public function men_fetch_jackets(){
        $this->load->database();
        $this->db->where('product_category','EthnicsJackets');
        return $this->db->get('mens_product_table')->result();
    }

    public function get_edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('mens_product_table')->result();
    }
    public function men_update($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('mens_product_table',$data);
    }
    public function get_delete($id){
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('mens_product_table')->row();
    }
    public function delete_men_id($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('mens_product_table');
    }

    // admin table view womens products Details 
    public function women_silk_sarees(){
        $this->load->database();
        $this->db->where('product_category','Silk-Sarees');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_cotton_silk(){
        $this->load->database();
        $this->db->where('product_category','Cotton-Silk');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_cotton_sarees(){
        $this->load->database();
        $this->db->where('product_category','Cotton-Sarees');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_satin_sarees(){
        $this->load->database();
        $this->db->where('product_category','Satin-Sarees');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_jeans(){
        $this->load->database();
        $this->db->where('product_category','Jeans');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_leggins(){
        $this->load->database();
        $this->db->where('product_category','Leggins');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_shorts(){
        $this->load->database();
        $this->db->where('product_category','Shorts');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_skirts(){
        $this->load->database();
        $this->db->where('product_category','Skirts');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_kurtis(){
        $this->load->database();
        $this->db->where('product_category','Kurtis');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_kurtas_set(){
        $this->load->database();
        $this->db->where('product_category','Kurtas-set');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_bra(){
        $this->load->database();
        $this->db->where('product_category','Bra');
        return $this->db->get('womens_product_table')->result();
    }
    public function women_briefs(){
        $this->load->database();
        $this->db->where('product_category','Briefs');
        return $this->db->get('womens_product_table')->result();
    }

    public function get_women_edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('womens_product_table')->result();
    }
    public function women_update($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('womens_product_table',$data);
    }
    public function get_delete_women($id){
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('womens_product_table')->row();
    }
    public function delete_women_id($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('womens_product_table');
    }

    // admin table view kids products Details 
    public function kids_all_Dresses(){
        $this->load->database();
        $this->db->where('product_category','All-Dresses');
        return $this->db->get('kids_product_table')->result();
    }
    public function kids_soft_toys(){
        $this->load->database();
        $this->db->where('product_category','Soft-Toys');
        return $this->db->get('kids_product_table')->result();
    }
    public function kids_backPacks(){
        $this->load->database();
        $this->db->where('product_category','BackPacks');
        return $this->db->get('kids_product_table')->result();
    }
    public function kids_stationary(){
        $this->load->database();
        $this->db->where('product_category','Stationary');
        return $this->db->get('kids_product_table')->result();
    }
    public function kids_watches(){
        $this->load->database();
        $this->db->where('product_category','Watches');
        return $this->db->get('kids_product_table')->result();
    }
    public function kids_footWears(){
        $this->load->database();
        $this->db->where('product_category','FootWears');
        return $this->db->get('kids_product_table')->result();
    }
    public function kids_babycare(){
        $this->load->database();
        $this->db->where('product_category','Babycare');
        return $this->db->get('kids_product_table')->result();
    }

    public function get_kids_edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('kids_product_table')->result();
    }
    public function kids_update($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('kids_product_table',$data);
    }
    public function get_delete_kids($id){
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('kids_product_table')->row();
    }
    public function delete_kids_id($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('kids_product_table');
    }

     // admin table view home kitchen products Details 
     public function hk_bedsheets(){
        $this->load->database();
        $this->db->where('product_category','bedsheets');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_dorrmats(){
        $this->load->database();
        $this->db->where('product_category','dorrmats');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_matress(){
        $this->load->database();
        $this->db->where('product_category','matress');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_cushions(){
        $this->load->database();
        $this->db->where('product_category','cushions');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_decor(){
        $this->load->database();
        $this->db->where('product_category','decor');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_stickers(){
        $this->load->database();
        $this->db->where('product_category','stickers');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_clock(){
        $this->load->database();
        $this->db->where('product_category','clock');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_showpiece(){
        $this->load->database();
        $this->db->where('product_category','showpiece');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_kitchen_storage(){
        $this->load->database();
        $this->db->where('product_category','kitchen-storage');
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function hk_cookware_bakebare(){
        $this->load->database();
        $this->db->where('product_category','cookware-bakebare');
        return $this->db->get('homekitchen_product_table')->result();
    }

    public function get_homekitchen_edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('homekitchen_product_table')->result();
    }
    public function homekitchen_update($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('homekitchen_product_table',$data);
    }
    public function get_delete_homekitchen($id){
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('homekitchen_product_table')->row();
    }
    public function delete_homekitchen_id($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('homekitchen_product_table');
    }

     // admin table view beauty & health products Details 
     public function bh_eyeliner(){
        $this->load->database();
        $this->db->where('product_category','eye-liner');
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function bh_nailpolish(){
        $this->load->database();
        $this->db->where('product_category','nail-polish');
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function bh_makeupkits(){
        $this->load->database();
        $this->db->where('product_category','makeup-kits');
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function bh_lipsticks(){
        $this->load->database();
        $this->db->where('product_category','lipsticks');
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function bh_sanitizers(){
        $this->load->database();
        $this->db->where('product_category','sanitizers');
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function bh_oralcare(){
        $this->load->database();
        $this->db->where('product_category','oral-care');
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function bh_femininehygiene(){
        $this->load->database();
        $this->db->where('product_category','feminine-hygiene');
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function bh_detorants(){
        $this->load->database();
        $this->db->where('product_category','detorants');
        return $this->db->get('beautyhealth_product_table')->result();
    }

    public function get_beautyhealth_edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('beautyhealth_product_table')->result();
    }
    public function beautyhealth_update($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('beautyhealth_product_table',$data);
    }
    public function get_delete_beautyhealth($id){
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('beautyhealth_product_table')->row();
    }
    public function delete_beautyhealth_id($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('beautyhealth_product_table');
    }

     // admin table electronics products Details 
     public function ele_mobileaccessories(){
        $this->load->database();
        $this->db->where('product_category','mobile-accessories');
        return $this->db->get('electronics_product_table')->result();
    }
    public function ele_watches(){
        $this->load->database();
        $this->db->where('product_category','watches');
        return $this->db->get('electronics_product_table')->result();
    }
    public function ele_mobileholder(){
        $this->load->database();
        $this->db->where('product_category','mobile-holders');
        return $this->db->get('electronics_product_table')->result();
    }
    public function ele_mobilebc(){
        $this->load->database();
        $this->db->where('product_category','mobile-backcovers');
        return $this->db->get('electronics_product_table')->result();
    }
    public function ele_allappliences(){
        $this->load->database();
        $this->db->where('product_category','all-applainces');
        return $this->db->get('electronics_product_table')->result();
    }
    public function ele_homeappliences(){
        $this->load->database();
        $this->db->where('product_category','home-applainces');
        return $this->db->get('electronics_product_table')->result();
    }

    public function get_electronics_edit($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('electronics_product_table')->result();
    }
    public function electronics_update($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('electronics_product_table',$data);
    }
    public function get_delete_electronics($id){
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('electronics_product_table')->row();
    }
    public function delete_electronics_id($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('electronics_product_table');
    }

}

?>