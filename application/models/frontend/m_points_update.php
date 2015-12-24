<?php
class M_points_update extends CI_Model{

        
        function __construct(){
        parent::__construct();
        }
        
        public function points_update($point){
            $this->db->set('points',"points+$point",FALSE);
            $this->db->where('groupName',$this->session->userdata('currentgroup'));
            $res=$this->db->update('groupdata');

            if($res)
            {
                header('location:'.base_url()."quiz/index"); 
            }
            else
            {
                echo "error"; 
                
            }
            
        }
        
}

