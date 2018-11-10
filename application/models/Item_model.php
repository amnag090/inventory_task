<?php 


class Item_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        
    }




public function store_items($item){
    return  $this->db->insert('items', $item);

}

public function get_items(){

    $item = $this->db->select('')->from('items')->get()->result();
    return $item;

}


public function get_item($id){
    return $this->db->get_where('items',array('id'=> $id),1)->row();
}

public function edit_item($item,$item_id){
    return  $this->db->set($item)->where('id',$item_id)->update('items');

}


public function delete_item($id){
    return $this->db->delete('items', array('id' => $id));
}


}