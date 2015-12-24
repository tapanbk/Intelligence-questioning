<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
     
     class M_reset_all extends CI_Model{
           function __construct(){
                parent::__construct();   
           }
           
                     
 
 /*
   * 
   */
  public function removeCurrentRoundGroup(){
      
      $this->session->set_userdata('roundName','UNKNOWN');
      $this->db->set('qfrom',0);
      $this->db->set('qto',0);
      $res=$this->db->update('tempdb');  
      if(!$res)
     {
         
         $message='error updating default value in the round database';          
       
     }
     else
     {
         $message="current round is successfully reset !!";
         
     }  
            
     return $message;
  }
  
  public function removeCurrentGroupDetailsWithPoints()
  {    
      $res=$this->db->empty_table('groupdata');
      if(!$res)
     {
         echo "error updating default value in the round database";
     }
   
      $data = array(
                        array('id' => 1,'groupName' => 'A','school' => 'AB','points'=>'0'),
                        array('id' => 2,'groupName' => 'B','school' => 'BC','points'=>'0'),
                        array('id' => 3,'groupName' => 'C','school' => 'CD','points'=>'0'),
                        array('id' => 4,'groupName' => 'D','school' => 'DE','points'=>'0') 
                    );
  
      $res1=$this->db->insert_batch('groupdata',$data);
      if(!$res1)
     {
          $message='error updating default value in the round database';          
         echo '<span id="remain_casual"></span>';
        
     }
     else
     {
         $message='default value in round database is successfully updated';          
         echo '<span id="remain_casual"></span>';
     }
            return $message;
  }
  
  

 /*
  * clear the round date starts here-
  */
 public function roundRData()
 {
     $this->session->set_userdata('startgroup','A');
      $this->session->set_userdata('currentgroup','A');
       $this->session->set_userdata('flag',1);
        $this->session->set_userdata('passed',0);
         $this->session->set_userdata('table','question');
      
         $message='round database is successfully updated';          
        
     return $message;
 }
public function clearAllExceptQnaDatabase()
{
    if($this->m_reset_all->removeCurrentRoundGroup())
    {
        if($this->m_reset_all->removeCurrentGroupDetailsWithPoints())
        {
           if($this->m_reset_all->roundRData()){
               $message='clearAllExceptQnaDatabase operation is successful';  
           }
           else {
               echo "error";
           }
        }
        else
        {
            echo "error";
        }
        
    }else
        {
            echo "error"; 
            
        }
    
}
public function factoryReset()
{
    if($this->m_reset_all->removeCurrentRoundGroup())
    {
        if($this->m_reset_all->removeCurrentGroupDetailsWithPoints())
        {
            if($this->m_reset_all->roundRData())
            {
                if($this->m_reset_all->deleteAllQuestion())
                {
                    $message='factoryReset operation is successful';  
                }
                else {
                echo "error"; 
                }
            }
          else {
              echo "error"; 
            }
          }else{
              echo "error"; 
          }
          
            
        }else
            {
                echo "error"; 
            }
}
public function deleteAllQuestion()
{
    $res=$this->db->empty_table('question');
    if($res)
    {
              $data = array(
                        array('qno' => 1,'question' => 'This is the test question 1?','answer' => 'test 1','flag'=>'0'),
                        array('qno' => 2,'question' => 'This is the test question 2?','answer' => 'test 2','flag'=>'0'),
                        array('qno' => 3,'question' => 'This is the test question 3?','answer' => 'test 3','flag'=>'0'),
                        array('qno' => 4,'question' => 'This is the test question 4?','answer' => 'test 4','flag'=>'0'),
                        array('qno' => 5,'question' => 'This is the test question 5?','answer' => 'test 5','flag'=>'0'),
                    );
  
      $res1=$this->db->insert_batch('question',$data);
      if(!$res1)
      {
          $message='Error updating the default value in the database';          
          
         
    }
    else
    {
        $message='Error in deleting all the question';          
          
       
    }
}
else
{
        $message='Error in deleting all the question';          
            
}

            return $message;
  
 }
     
     
     }