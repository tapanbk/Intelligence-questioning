<?php
class M_question_display extends CI_Model{

        function __construct(){
        parent::__construct();
        $this->load->model('frontend/m_frontend');
      
        }
        
             
      /*
      * get the questions and answer of the selected questions
      */
     
      public function get_question(){
        if($this->uri->segment(3))
        {
            $qno=$this->uri->segment(3);
            $this->session->set_userdata('qno',$qno);
            $this->session->set_userdata('answer',0);
             $this->session->set_userdata('timer',20);
        }
         if($this->session->userdata('qno'))
            {
                $this->db->set('flag',0);
                $this->db->where('qno',$this->session->userdata('qno'));
                $this->db->update($this->session->userdata('table'));
             
            $this->db->select('qno,question');
            $this->db->from($this->session->userdata('table'));
            $this->db->where('qno',$this->session->userdata('qno'));
            $query=$this->db->get();
            $row=$query->row();
          
            
            return $row;
        }
       else{
            
               
               $data=array(
                    'msg1'=>"Please choose a question from available questions"
                    );
               return $data; 
        
        }
           
    }

       
}
