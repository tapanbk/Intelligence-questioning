<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     
     class M_select_round_database extends CI_Model{
           function __construct(){
                parent::__construct();   
                $this->load->model('frontend/m_frontend');
           }
           public function round_database_update($table)
           {
              if (!$this->db->table_exists($table))
               {
                    $table='question';
               }
               $this->session->set_userdata('table',$table);
                   $this->db->set('flag',1);
                    $res2=$this->db->update($table);
                    if($res2){
                        $this->session->set_userdata('qno',0);
                        $this->session->set_userdata('answer',0);
                        $this->session->set_userdata('startgroup','A');
                        $this->session->set_userdata('currentgroup','A');
                        $this->session->set_userdata('passed',0);
                        $this->session->set_userdata('flagset',1);

                        $message='You selected '.$table.' table for current quiz session!!'; 
                } 
                
     
                    
                    $data['msg1']=$message;
                    $data['title'] = "Round Details";
                    $this->load->view('admin/header',$data);
                    $this->load->view('admin/left_nav_bar');
                    $this->load->view('admin/select_round_database');
                    $this->load->view('admin/footer.php');
           }
     }