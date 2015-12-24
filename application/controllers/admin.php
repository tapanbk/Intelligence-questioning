
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     
     class Admin extends CI_Controller{
         public $table;
        function __construct() {
            parent::__construct();
                    $this->load->helper('url');
                    $this->load->database('quiz015');
                    $this->load->library('form_validation');
                    $this->load->library('session');
                     
                    $this->load->model('admin/m_admin');
                    $this->load->model('admin/m_group_data');
                    $this->load->model('admin/m_config_round');
                    $this->load->model('admin/m_group_data');
                    $this->load->model('admin/m_insert_new_question');
                    $this->load->model('admin/m_reset_all');
                    $this->load->model('admin/m_select_round_database');
                    $this->load->model('admin/m_view_answer');
                    
                   
                    
        }
        public function login()
        {
             $data['title'] = "ICT QUIZ | ADMIN LOGIN";
             $this->load->view('admin/login',$data);
        }
        public function index()
        {
            $data['title'] = "ICT QUIZ | ADMIN";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/introduction');
            $this->load->view('admin/footer.php');
            
        }
        public function profile()
        {
             $data['title'] = "Profile";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/profile');
            $this->load->view('admin/footer.php');
     
        }
        
        public function round()
        {
            $data['title'] = "Round Details";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/config_round');
            $this->load->view('admin/footer.php');
        }
        
               public function insert_question()
        {
            $data['title'] = "Insert question";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/insert_new_question');
            $this->load->view('admin/footer.php');
        }
        
          public function select_game()
        {
            $data['title'] = "select game";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/select_round_database');
            $this->load->view('admin/footer.php');
        }
        
              public function view_answer()
        {
            $data['title'] = "View Answer";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/view_answer');
            $this->load->view('admin/footer.php');
        }
        
              public function change_group_data()
        {
             $data['title'] = "Change Group data";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/change_group_data');
            $this->load->view('admin/footer.php');
        }
              public function change_score()
        {
            $data['title'] = "Chang score";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/change_score');
            $this->load->view('admin/footer.php');
        }
                 public function reset_all()
        {
             $data['title'] = "Reset All";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/clearAll');
            $this->load->view('admin/footer.php');
        }
        
            public function insert_new_round()
            {
               if( $this->input->post('submit')) {
                   
                $this->form_validation->set_rules('rname','Round Name', 'required|trim|min_length[5]');
		

                        if ($this->form_validation->run() == FALSE)
                        {
                                $this->round();
                        }
                        else
                        {

                           if(($this->input->post('qstart'))>($this->input->post('qend'))){
                                $udata['qfrom']=$this->input->post('qend');
                                $udata['qto']=$this->input->post('qstart');
                           }  else {
                                    $udata['qfrom']=$this->input->post('qstart');
                                    $udata['qto']=$this->input->post('qend');
                           }

                        $roundName=ucwords(strtolower(trim($this->input->post('rname'))));
                        $this->session->set_userdata('round',$roundName);
                        $this->m_config_round->updateRoundDetails($udata); 

                        }
               }  
                else
                { 
                header('location:'.base_url()."admin".$this->index());    
                }
            }
            
            public function new_question_process()
            {
                if( $this->input->post('submit')) {
                    
                       $this->form_validation->set_rules('question','Question', 'required|trim|min_length[5]');
                       $this->form_validation->set_rules('answer','Answer', 'required|trim|min_length[5]');
		
                        if ($this->form_validation->run() == FALSE)
                        {
                                $this->insert_question();
                        }
                        else
                        {

                            $udata['qno']=$this->input->post('sn');      
                            $udata['question']=$this->input->post('question');
                            $udata['answer']=$this->input->post('answer');
                            $this->m_insert_new_question->new_question($udata);       
                        }
      
                }else{

                    header('location:'.base_url()."admin".$this->index());
                }
            }
            
            /*
      * gets the qno, question and answer when a question no is submitted
      */
     public function get_answer(){
       if( $this->input->post('submit')) {
                $udata=$this->input->post('qno');
               
                $this->m_view_answer->get_answer($udata);
               
        }else{

                header('location:'.base_url()."admin".$this->index());    
         }
         
        }
        
      
        
        public function selectround()
        {
            if( $this->input->post('submit')) {
                                    
                       $this->form_validation->set_rules('round','Round', 'required|trim|min_length[5]');
                       $this->form_validation->set_rules('subround','Game', 'required|trim|min_length[5]');
		
                        if ($this->form_validation->run() == FALSE)
                        {
                                $this->insert_question();
                        }
                        else
                        {
                
                $this->session->set_userdata('game',$this->input->post('round'));
               $table=$this->input->post('round').$this->input->post('subround');
               $this->session->set_userdata('startgroup','A');
               $this->session->set_userdata('currentgroup','A');
               $this->session->set_userdata('flag',1);
               $this->session->set_userdata('passed',1);
               $this->session->set_userdata('table',$table);
               $this->m_select_round_database->round_database_update($table);
             }
            }
            else{
                header('location:'.base_url()."admin/".$this->index());  
            }
        }
      
        /*
         * To change the group marks of the certain school.
         */
        public function update_group_data(){
            if( $this->input->post('submit')) {
                
                $this->form_validation->set_rules('groupSymbol','Group Symbol', 'required|trim|max_length[1]');
		$this->form_validation->set_rules('school', 'school Name', 'required|trim');
               

                if ($this->form_validation->run() == FALSE)
		{
			$this->change_group_data();
		}
		else
		{
                   

                    $udata['groupName']=strtoupper(trim($this->input->post('groupSymbol')));
                    $udata['school']=ucwords(strtolower(trim($this->input->post('school'))));
                    $udata['points']=$this->input->post('points');
                    $res=$this->m_group_data->get_group_data($udata['groupName']);
                        if($res)
                        {
                           $this->m_group_data->update_group_data($udata);
                           
                        } 
                       else
                        {
                           $this->m_group_data->insert_group_data($udata);
                        }
                        
                }
            }else{

                    header('location:'.base_url()."admin/".$this->index());    
          }        
     }   
     
     
 public function correct_score(){
    if( $this->input->post('submit')) {
       
                $this->form_validation->set_rules('groupSymbol','Group Symbol', 'required|trim|max_length[1]');
		
                if ($this->form_validation->run() == FALSE)
		{
			$this->change_score();
		}
		else
                  {
                   $udata['groupName']=strtoupper(trim($this->input->post('groupSymbol')));
                   $udata['points']=$this->input->post('marks');
                   $res=$this->m_group_data->get_group_data($udata['groupName']);
                       if($res)
                       {
                          $this->m_group_data->update_group_score($udata);
                       } 
                      else
                       {
                          $data['msq4']="no such group found!!!!";
                           $data['title'] = "Change Group data";
                            $this->load->view('admin/header',$data);
                            $this->load->view('admin/left_nav_bar');
                            $this->load->view('admin/change_group_data');
                            $this->load->view('admin/footer.php');

                       }
        } 
    }else{
           header('location:'.base_url()."admin".$this->index());    
    }
     } 
     
  public function clearAll()
    {
        if( $this->input->post('rCRQuestion')) {
            
            $message=$this->m_reset_all->removeCurrentRoundGroup();
            $data['msg']=$message;
            $data['title'] = "Clear All";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/clearAll');
            $this->load->view('admin/footer.php');   
        }
        elseif( $this->input->post('clearCGDWP')) {
            $message=$this->m_reset_all->removeCurrentGroupDetailsWithPoints();
            $data['msg']=$message;
            $data['title'] = "Clear All";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/clearAll');
            $this->load->view('admin/footer.php');   
        }
        elseif( $this->input->post('rstROund')) {
            $message=$this->m_reset_all->roundRData();
            
            $data['msg']=$message;
            $data['title'] = "Clear All";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/clearAll');
            $this->load->view('admin/footer.php'); 
        }
       elseif( $this->input->post('clearAllExceptQnaDatabase')) {
            $message=$this->m_reset_all->clearAllExceptQnaDatabase();
             
            $data['msg']=$message;
            $data['title'] = "Clear All";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/clearAll');
            $this->load->view('admin/footer.php'); 
        }
        elseif( $this->input->post('factoryReset')) {
            
            $message=$this->m_reset_all->factoryReset();
            $data['msg']=$message;
            $data['title'] = "Clear All";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/left_nav_bar');
            $this->load->view('admin/clearAll');
            $this->load->view('admin/footer.php'); 
        }
    }   
  
     }



