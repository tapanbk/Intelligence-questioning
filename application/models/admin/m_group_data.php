<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     
     class M_group_data extends CI_Model{
           function __construct(){
                parent::__construct();   
           }
           
            /*
  * checks to see whether group exists or not
  * if the group exits it returns the a row of data.
  */
   public function get_group_data($groupSymbol){
            $this->db->from('groupdata');
            $this->db->where('groupName',$groupSymbol);
            $query=$this->db->get();
            return $query->row();       
  }
  
  
  
 /*
   * updates the marks of the certain group
   */
   public function update_group_data($data){
     $this->db->where('groupName',$data['groupName']);
     $res=$this->db->update('groupdata',$data);
     if($res){
                               $message='Group marks is Successfully updated';
                             
              }else{
                             $message='Error in updating the group marks in database';                      
                }
                
                    
                    $data['msg4']=$message;
                    $data['title'] = "Round Details";
                    $this->load->view('admin/header',$data);
                    $this->load->view('admin/left_nav_bar');
                    $this->load->view('admin/change_group_data');
                    $this->load->view('admin/footer.php');
     
 }

 
 /*
   * updates the marks of the certain group
   */
   public function update_group_score($data){
     $this->db->where('groupName',$data['groupName']);
     $res=$this->db->update('groupdata',$data);
     if($res){          
                               $message='Group marks is Successfully updated';           
              }else{
                             $message='Error in updating the group marks in database';                      
                }
                    $data['msg4']=$message;
                    $data['title'] = "Round Details";
                    $this->load->view('admin/header',$data);
                    $this->load->view('admin/left_nav_bar');
                    $this->load->view('admin/change_score');
                    $this->load->view('admin/footer.php'); 
 }

        public function get_all_group($table)
    {   
        $query=$this->db->get('groupdata');
        
         return $query->result_array();
    
     }
 
 
   /*
   * insert into the marks of the certain group
   */
   public function insert_group_data($data){
     $this->db->where('groupName',$data['groupName']);
     $res=$this->db->insert('groupdata',$data);
     if($res){
                           
                                        $message='New Group data inserted successfully';
                                        
                            echo '<span id="change_group_data"></span>';
                            
              }else{
                            
                                        $message='Error in inserting the new group data in database';
                                        
                            echo '<span id="change_group_data"></span>';
                                             
                }
                
                    $data['msg4']=$message;
                    $data['title'] = "Round Details";
                    $this->load->view('admin/header',$data);
                    $this->load->view('admin/left_nav_bar');
                    $this->load->view('admin/change_group_data');
                    $this->load->view('admin/footer.php');
     
    
 }
     }