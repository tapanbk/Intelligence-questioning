<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     
     class M_insert_new_question extends CI_Model{
           function __construct(){
                parent::__construct();   
           }
           
  
 /*
     * Inserts new questions in the database
     * If existing question is available, update to the question is done
     * PROBLEM each insert and update takes a unique id, so qno not equal to id 
     */
    public function new_question($data){
       $this->db->select('qno');
       $this->db->from($this->session->userdata('table'));
       $this->db->where('qno',$data['qno']);
       $query=$this->db->get();
        if($query->result())
        {
            $this->db->where('qno',$data['qno']);
            $res=$this->db->update($this->session->userdata('table'),$data);

            
            if($res){
                          
                                $message='The existing question is updated';
                                        
                            echo '<span id="new_question"></span>';
              }else{
                             
                                  $message='ERROR in Updating new Question';       
                            echo '<span id="new_question"></span>';                
                }
        }
         else
         {
            $res=$this->db->insert($this->session->userdata('table'),$data);
                        if($res){
                            
                            $message='New Question insertion successful';              
              }else{ 
                             $message='ERROR in New Question insertion';                                
                }
           }
                 
            $data['msg2']=$message;
            $data['title'] = "ADD question";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/insert_new_question');
            $this->load->view('admin/footer.php');   
    }   
    
    
    
    
           
     }