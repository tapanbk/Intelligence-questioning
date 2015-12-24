<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     
     class M_config_round extends CI_Model{
           function __construct(){
                parent::__construct();   
           }
           
    /*
   * Updates the round data to the database
   */
  
    public function updateRoundDetails($data){
      $res=$this->db->update('tempdb',$data);
        if($res){
                    $this->session->set_userdata('qno',0);
                    $this->session->set_userdata('answer',0);
                    $this->session->set_userdata('startgroup','A');
                    $this->session->set_userdata('currentgroup','A');
                    $this->session->set_userdata('flagset',1);
                    $this->session->set_userdata('passed',0);

                            $data=array(
                                        $message='New round inserted successfully'
                                        );
                           
                             
              }else{
                             
                                        $message='ERROR in updating the group round';
                                   
                          
                                            
                  
              }
            
                      
             
                    $data['msg1']=$message;
                    $data['title'] = "Round Details";
                    $this->load->view('admin/header',$data);
                    $this->load->view('admin/left_nav_bar');
                    $this->load->view('admin/config_round');
                    $this->load->view('admin/footer.php');
                  

    }

     }