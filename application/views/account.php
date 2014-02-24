<div class="container">


<?php 
	
 $firstname=$this->session->userdata('firstname');	
  $lastname=$this->session->userdata('lastname');
   $institute=$this->session->userdata('institute');
    $username=$this->session->userdata('username');
     $score=$this->session->userdata('score');
      $totalsubmissions=$this->session->userdata('totalsubmissions');
       $ac=$this->session->userdata('ac');
        $tle=$this->session->userdata('tle');
        $wa=$this->session->userdata('wa');
       
        $rank=$this->session->userdata('rank');

?>
<h2 class="text-center"><?php echo $firstname;?>   <?php echo $lastname; ?> <small>account</small></h2>
<br>
<h5 class="text-center">Curent Rank :<?php echo $rank; ?></h5>
<h5 class="text-center">Score :<?php echo $score; ?></h5>
<h5 class="text-center">Institution:<?php echo $institute; ?></h5>
<br>
<div class="well">
<section id="tables">
  
    
  
  
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
       
        <th>Solutions Submitted</th>
        <th>Solution Accepted</th>
         
          <th>Wrong Answer</th>
           <th>Time Limit Exceeded</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $totalsubmissions; ?></td>
        <td><?php echo $ac; ?></td>
       
        <td><?php echo $wa; ?></td>
        <td><?php echo $tle; ?></td>
        
      </tr>
    
    </tbody>
  </table>
</section>
</div>
</div>
<br><br><br>

