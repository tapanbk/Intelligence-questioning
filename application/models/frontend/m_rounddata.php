<?php
class M_rounddata extends CI_Model{        
        function __construct(){
        parent::__construct();
        
       
        }
        
        /*
      * function to get details about
      * current quiz round Name
      * group Name of current group to whom question is passed
      * start groupname of the current question
      */
      public function get_round_data(){

        $startGroupName=$this->m_rounddata->GroupName($this->session->userdata('startgroup'));
       
        $currentGroupName=$this->m_rounddata->GroupName($this->session->userdata('currentgroup'));
       
        $data1 = array(
               'startGroupName' => $startGroupName,
               'currentGroupName' => $currentGroupName,

          );
        return $data1;
        
     }
     
     /*
      * returns the name of 
      * current school corresponding to currentGroup symbol
      * start school corresponding to startGroup symbol
      */
      public function GroupName($Group){
      $this->db->select('school');
      $this->db->from('groupdata');
      $this->db->where('groupName',$Group);
      $query2=$this->db->get();
      if ($query2->num_rows() > 0)
        {
            $row = $query2->row(); 
            return $row->school;
        }
  }
          
}