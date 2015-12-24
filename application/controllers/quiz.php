<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     
     class Quiz extends CI_Controller{
         /***-------public variables used in the quiz-----------**/
           
            public $roundName;

           
            
     function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->database('quiz015');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->library('form_validation');
            
            $this->load->model('frontend/m_frontend');
            $this->load->model('frontend/m_question_display');
            $this->load->model('frontend/m_groupdata');
            $this->load->model('frontend/m_rounddata');
            $this->load->model('frontend/m_questioncontrol');
            $this->load->model('frontend/m_questions');
           
           
           /*
            * models functions that should be loaded when the quiz application run
            */
           
           $nog=$this->m_frontend->no_of_groups();
           $this->session->set_userdata('nog',$nog);
          
     }
     public function index()
     {
         
            $data['title']='2nd ICT Quiz Contest';
            $this->load->view('frontend/header',$data);
            $data=$this->m_question_display->get_question();
            $this->load->view('frontend/question_display',$data);
            
            /*
           *It loads the available questions for the current round of the quiz 
           */

            
            $this->load->view('frontend/timer');
            
            /*
            * It loads the question corresponding to passed qno number
            * 
            */
            $data1['post2']=$this->m_groupdata->get_group_data();
            $this->load->view('frontend/group_points',$data1);
            
/*
           * get all the groupName and corresponding School and their obtained points 
           * in the quiz
           */    
            /*
             * To get 
             * current round name of the quiz
             * start group of the quiz
             * current group of the quiz
             * no of question passes in the current question round
             */
            $data2=$this->m_rounddata->get_round_data();
            $this->load->view('frontend/round_details',$data2);

            /*
             * loads the available questions in the available questions part
             */
            $this->m_questions->get_qnos(); 
                                        
                /*
                 * Question Controller
                 * Next question to ask to choose the next question
                 * right answer buttom to add marks to the current group and ask the next group to chooose the question 
                 * wrong answer button to pass the question to next group or ask to select next question
                 * 
                 */
            $this->load->view('frontend/quiz_control');
            
            $this->load->view('frontend/footer.php');       
     }
     
     
 public function question_control()
    {
      
        if( $this->input->post('right_answer')) {
            $this->m_questioncontrol->right_answer();   
          
        }
        
        if( $this->input->post('next_question')) {
            $this->m_questioncontrol->next_question();
        }
        
        if( $this->input->post('wrong_answer')) {
            $this->m_questioncontrol->wrong_answer();
        }
       
    }
    
    public function points()
    {
       $this->load->model('frontend/m_points_update');
        
        if( $this->input->post('tenpoints')) {
            $points=10;  
          
        }else if( $this->input->post('fivepoints')) {
            $points=5;  
        }else if( $this->input->post('nfivepoints')) {
            $points=-5;
        }
     
    else {
            header('location:'.base_url()."quiz".$this->index());  
        }
        $this->m_points_update->points_update($points);
        
       
    }
    public function show_answer()
    {
           if( $this->input->post('show_answer')) {
            $this->m_questioncontrol->show_answer();
        }else {
            header('location:'.base_url()."quiz".$this->index());  
        }
    }
    
    
 }