<?php
class M_questioncontrol extends CI_Model{

        
        function __construct(){
        parent::__construct();
        }
  
        public function show_answer()
        {
           $answer=$this->m_questioncontrol->get_answer();
           $this->session->set_userdata('answer', $answer);
           $this->session->set_userdata('passed',0);
           header('location:'.base_url('quiz'));
           
        }
        public function right_answer()
                {
                    $this->m_questioncontrol->right_Question_update();
                    $this->session->set_userdata('timer',20);
                    $answer=$this->m_questioncontrol->get_answer();
                    $this->session->set_userdata('answer', $answer);
                    $this->session->set_userdata('passed',0);
                    header('location:'.base_url('quiz'));
                   
                }
                
       public function  get_answer()
       {
           $this->db->select('answer');
           $this->db->where('qno',$this->session->userdata('qno'));
           $query=$this->db->get($this->session->userdata('table'));
           if ($query->num_rows() > 0)
                {
                    $row = $query->row(); 
                    return $row->answer;
                }
               else{
                   return 0;
               } 
       } 
  /* 
  * when a user clicks the neuxt answer
  */
 public function next_question()
 {
        $this->m_questioncontrol->next_Question1();
        $this->session->set_userdata('qno',0);
        $this->session->set_userdata('answer',0);
        $this->session->set_userdata('timer',20);
        header('location:'.base_url('quiz'));  
 }
        
 
   /*
  * when a wrong answer button is pressed
  * it invokes the following funtion
  * 
  */
 public function wrong_answer()
 {
     
     if($this->session->userdata('passed')==($this->session->userdata('nog')))
        {
            $answer=$this->m_questioncontrol->get_answer();
            $this->session->set_userdata('answer', $answer);
            $this->session->set_userdata('timer',20);
            $this->m_questioncontrol->next_question1();
           
  
        }else{
        
           $this->session->set_userdata('timer',10);
            $this->m_questioncontrol->pass_question();
        }
         header('location:'.base_url('quiz'));  
 }
        

 
         /*
   * calls from right_answer
   * to perform various operation when we click the right answer
   */
     public function right_Question_update()
  {
       
       $currentgroup=$this->session->userdata('currentgroup');
       $passed=$this->session->userdata('passed');
       $gpoint=$this->m_questioncontrol->gpoint_fetch($currentgroup);
      if($passed==0)
            {
                $point=$gpoint+10;
            }
            else 
            {
                $point=$gpoint+5;
            }  
         $this->m_questioncontrol->marks_update($point);
         $this->m_questioncontrol->next_Question1();
        
  }
   
  /*
  * fetch the current group marks
  */
 public function gpoint_fetch($currentgroup)
 {
     $this->db->select('points');
     $this->db->from('groupdata');
     $this->db->where('groupName',$currentgroup);
     $query=$this->db->get();
       if ($query->num_rows() > 0)
        {
            $row = $query->row(); 
            return $row->points;
            
        }
}


  /*
   * marks update when the right answer button is clicked
   */
  
 public function marks_update($point){
     $udata['points']=$point;
     $this->db->where('groupName',$this->session->userdata('currentgroup'));
      $this->db->update('groupdata',$udata);
 }
 
 

        
        
 
 public function next_question1()
  {
         $startGroup=$this->session->userdata('startgroup');
         $currentGroup=$this->session->userdata('currentgroup');
         $lastGroup=$this->m_questioncontrol->get_last_group(); 
       
         if($this->session->userdata('flagset')==1)
                      {
                      if($startGroup==$lastGroup)
                         {
                             $startGroup=$lastGroup;
                             $this->session->set_userdata('flagset',0);
                             
                         }
                         else
                         {
                            $startGroup=chr(ord($startGroup)+1);
                         }    
                  }
                   else
                     {
                         if($startGroup=='A')
                         {
                            $this->session->set_userdata('flagset',1);
                            $startGroup='A';
                         }
                         else
                         {
                            $startGroup=chr(ord($startGroup)-1);
                         }
                     }
                        $this->session->set_userdata('startgroup',$startGroup);
                      
                        $this->session->set_userdata('currentgroup',$startGroup);
                        $this->session->set_userdata('passed',0);                  
  }
        
                
       /*
       * when users clicks wrong answer and
       * question is passed to another group
       */
  
  public function pass_question()
  {
            $startGroup=$this->session->userdata('startgroup');
            $currentGroup=$this->session->userdata('currentgroup');
            $lastGroup=$this->m_questioncontrol->get_last_group(); 
            $passed=$this->session->userdata('passed');
           if($this->session->userdata('flagset')==1)
                 {
                     if($currentGroup==$lastGroup)
                     {
                                $currentGroup='A';
                     }
                     else
                     {
                        $currentGroup=chr(ord($currentGroup)+1);
                     }
                 }
                 else
                 {
                     if($currentGroup=='A')
                     {
                         $currentGroup=$lastGroup;
                     }
                     else
                     {
                        $currentGroup=chr(ord($currentGroup)-1);
                     }
                 } 
                   $passed++;

                   $this->session->set_userdata('startgroup',$startGroup);
                   $this->session->set_userdata('currentgroup',$currentGroup);
                   $this->session->set_userdata('passed',$passed);
                  
  } 
  
  
          /*
         * get the last group of the cuurent players group
         */
  
          public function get_last_group()
                {
                    $this->db->select('groupName');
                    $this->db->from('groupdata');
                    $this->db->group_by('groupName','ASC');
                    $query=$this->db->get();
                    $lastGroup= $query->last_row('array');
                    return $lastGroup['groupName']; 
                }
  
}