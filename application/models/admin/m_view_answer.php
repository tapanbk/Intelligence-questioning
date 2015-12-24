<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     class M_view_answer extends CI_Model{
           function __construct(){
                parent::__construct();   
           
                
           }
           
        public function get_answer($data){
           
            $this->db->select('qno,question,answer');
            $this->db->from($this->session->userdata('table'));
            $this->db->where('qno',$data);
            $query=$this->db->get();
            
            $row=$query->row_array(); 
            
            if($row)
            {
                          
                $data=array(
                    'qno'=>$row['qno'],
                    'question'=>$row['question'],
                    'answer'=>$row['answer']
                    );
                                     
            }else
            {
                $data=array(
                    'no_answer'=>'No question is available for that question number...'
                );
            }

            $data['title'] = "View answer";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/view_answer');
            $this->load->view('admin/footer.php');   
             
           
           
  }
  
  
    /*
     * Get answer when a user submits a question number
     */
      public function get_multipleanswer($data){
            
            $this->db->select('qno,question,answer');
            $this->db->from($this->table);
            $this->db->where('qno',$data);
            $query=$this->db->get();
            $row=$query->row(); 
            if($row)
            {
                $data=array(
                            'qno'=>$row->qno,
                            'question'=>$row->question,
                            'answer'=>$row->answer
                            );
            }
             echo '<span id="qno"></span>';
             echo '<span id="question"></span>';
             echo '<span id="answer"></span>';
             
            $this->load->view('admin/view_answer',$data);
            /*
             * $this->db->where("$accommodation BETWEEN '$minvalue' AND '$maxvalue'");
             */
  }
  
     }

