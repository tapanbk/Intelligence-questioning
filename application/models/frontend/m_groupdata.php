<?php
class M_groupdata extends CI_Model{

        
        function __construct(){
        parent::__construct();
        $this->load->database('quiz015');
       
        }        

        /*
       * get all the groupName and corresponding School and their obtained points 
       * in the quiz
       */
      public function get_group_data(){
         $this->db->select('groupName,school,points');
        $this->db->from('groupdata');
        $query=$this->db->get();
        return $query->result();
    }  
}