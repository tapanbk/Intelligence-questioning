<?php
class M_questions extends CI_Model{
        public  $temp=array();
        public  $flag=array();
        public $question=array();
        
        function __construct(){
        parent::__construct();
        
       
        }
        
      
    /*
     *It loads the available questions for the current round of the quiz 
     */
  
    public function get_qnos()
  {       
            $this->db->select('qfrom,qto');
            $this->db->from('tempdb');
            $query1=$this->db->get();
            $result1=$query1->row();
           
           
   
            if($query1->num_rows() > 0){
                $qfrom=$result1->qfrom;
                $qto=$result1->qto;
            }
            
            /* only for temporary*/
            
          
            $this->db->select('qno,question,answer,flag');
            $this->db->where("qno BETWEEN '$qfrom' AND '$qto'");
            $this->db->from($this->session->userdata('table'));
            $query2=$this->db->get();
            $result['data']=$query2->result_array();
            $this->load->view('frontend/available_questions',$result);
               
  }  
}