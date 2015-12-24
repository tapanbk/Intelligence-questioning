<?php
class M_frontend extends CI_Model{
        public  $temp=array();
        public  $flag=array();
        public $question=array();
        
        function __construct(){
        parent::__construct();
        $this->load->database('quiz015');
       
        }
        
 
        
        /*
        * finds number of group 
        * that is currently playing
        */

       public function no_of_groups()
       {
            $this->db->select('groupName');
            $this->db->from('groupdata');
            $query2=$this->db->get();
            return $query2->num_rows();   
       }    
       
     
    /*
     * get the question on the basis of whether a qno is set or not
     */
    
    public function question()
    {
         $this->db->select('question');
            $this->db->from($this->table);
            $this->db->where('qno',$this->qno);
            $query=$this->db->get();
            $row= $query->row();
            if($row)
            {
                $question=$row->question;
                    $data=array(
                    'msg1'=>$question
                    );
               
                 $this->load->view('frontend/question_display',$data);
            } else {
                
                    $data=array(
                    'msg1'=>'Question is not available!!!!'
                    );
                 $this->load->view('frontend/question_display',$data);  
            }
         }
    /*
     * get all the groupName and corresponding School and their obtained points 
     * in the quiz
     */
    public function get_group_data(){
       $this->db->select('groupName,school,points');
      $this->db->from('groupdata');
      $query=$this->db->get();
      return $query->result();
  }   
  
      /*
     *It loads the available questions for the current round of the quiz 
     */
  
    public function get_qnos()
  {
      if ($this->uri->segment(3) === FALSE)
        {
            $qno = 0;
        }
        else
        {
            $qno = $this->uri->segment(3);
        }
             
            if(!(is_null($qno)))
            {      
                $this->db->set('flag',0);
                $this->db->where('qno',$qno);
                $this->db->update($this->table);
                $this->get_question($qno);
                
             }
             
            $this->db->select('qfrom,qto');
            $this->db->from('tempdb');
            $query1=$this->db->get();
            $result1=$query1->row();
           
           
   
            if($query1->num_rows() > 0){
                $qfrom=$result1->qfrom;
                $qto=$result1->qto;
            }
      
    
           
            $this->db->select('qno,question,answer,flag');
            $this->db->from($this->table);
            $this->db->where("qno BETWEEN '$qfrom' AND '$qto'");
   
            $this->db->where('flag',1);
            $query2=$this->db->get();
            $qnos=$query2->num_rows();
            $i=1;
    
        foreach ($query2->result() as $row)
        {
            $temp[$i]=$row->qno;
            $flag[$i]=$row->flag;
            $i++;
        } 
            $no=1;
             for($i=1;$i<=$qnos;$i++)
               {
                    if($flag[$i])
                    {
                        $link='quiz/index/'.$temp[$i];
                        echo anchor($link,$i,$temp[$i]);
                         $no=0;
                     }
                }
                   if($no==1)
                   {
                     $data=array(
                    'msg3'=>"No questions available!!!"
                    );
              
                 $this->load->view('frontend/available_questions',$data);
                   }   
  }
  
 
  /*
   * calls from right_answer
   * to perform various operation when we click the right answer
   */
     public function right_Question_update()
  {
       $data=$this->m_frontend->passed_timeNGroup();
       $currentgroup=$data->currentgroup;
       $passed=$data->passed;
       $gpoint=$this->m_frontend->gpoint_fetch($currentgroup);
      if($passed==0)
            {
              $point=$gpoint+10;
            }
            else 
            {
            $point=$gpoint+5;
            }  
         $this->m_frontend->marks_update($currentgroup,$point);
         $this->m_frontend->next_Question_update();
  }
    
    public function passed_timeNGroup()
  {
        $this->db->select('passed,currentgroup');
        $this->db->from('rounddb');
        $query2=$this->db->get();
      if ($query2->num_rows() > 0)
        {
            $row = $query2->row(); 
            return $row;
        }   
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
  
 public function marks_update($currentgroup,$point){
     $udata['points']=$point;
     $this->db->where('groupName',$currentgroup);
      $this->db->update('groupdata',$udata);
 }
 

   public function next_Question_update()
        {
              $udata=$this->m_frontend->next_question();

              $this->db->update('rounddb', $udata); 
        }
        
 
 public function next_question()
  {
         $data=$this->m_frontend->StartEndGroupNpassedTime();
         $startGroup=$data->startgroup;
         $currentGroup=$data->currentgroup;
         $lastGroup=$this->m_frontend->get_last_group(); 
       
         if($this->flagset==1)
                      {
                      if($startGroup==$lastGroup)
                         {
                             $startGroup=$lastGroup;
                             $this->flagset=0;
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
                             $this->flagset=1;
                            $startGroup='A';
                         }
                         else
                         {
                            $startGroup=chr(ord($startGroup)-1);
                         }
                     }
                     $this->time=20;

                     $currentGroup=$startGroup;
                     $flag=$this->flagset;
                        
                        $udata['startgroup']=$startGroup;
                        $udata['currentgroup']=$currentGroup;
                        $udata['flag']=$flag;
                        $udata['passed']=0;
                        return $udata;
       
  }
  
    
    /*
     * finds start and end group for the question
     * in a round
     */
        public function StartEndGroupNpassedTime()
            {
                $this->db->select('startgroup,currentgroup,passed');
                  $this->db->from('rounddb');
                  $query2=$this->db->get();
                if ($query2->num_rows() > 0)
                  {
                      $row = $query2->row(); 
                      return $row;
                  }   
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

  
  
            /*
           * update
           * due to pressing of wrong answer button
           */
                
          public function wrong_Question_update()
                {
                      $udata=$this->m_frontend->next_question();

                      $this->db->update('rounddb', $udata); 
                }
  
        /*
       * when users clicks wrong answer and
       * question is passed to another group
       */
  
  public function pass_question()
  {
       $data=$this->m_frontend->StartEndGroupNpassedTime();
      
          $startGroup=$data->startgroup;
          $currentGroup=$data->currentgroup;
          $passed=$data->passed;
          $lastGroup=$this->m_frontend->get_last_group();
           if($this->flagset==1)
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
                   if($passed>0)
                   {?>
                      <script>
                        var secs=10;
                    </script>
                    <?php
                   }
                   $this->session->set_userdata('startgroup',$startGroup);
                   $this->session->set_userdata('currentgroup',$currentGroup);
                   $this->session->set_userdata('passes',$passed);
                   
  } 
    
        
}
