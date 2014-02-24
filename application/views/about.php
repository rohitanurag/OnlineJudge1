
      <br><br><br>
      <div class="container-fluid">
<div class="row-fluid">
<div class="span8">
  <div class="well">
      <p> This concept of a  programming gym for students of ESC101 (a course for Introduction to Programming) was a vision of <b><a href ="http://www.cse.iitk.ac.in/users/aca" target="_blank">ACA, CSE IITK</a></b> term (2011-2012). The Open source ONJ judge was used during the initial phase. Currently, we are using a judge developed as a part of <b><a href="http://www.pclub.in" target="_blank">Programming Club</a></b> IITK Summer project 2012 by:<ul><li><a href="mailto:vijaykes@iitk.ac.in">Vijay Keswani</a></li><li><a href="mailto:sankush@iitk.ac.in">Ankush Sachdeva</a> </li><li><a href="mailto:irfanh@iitk.ac.in">Irfan Hudda</a></li></ul>
</br>
We would like to thank the developers for their time and effort and Programming Club to provide us with the judge. <br>
We would also like to thank, CSE Department of IITK for the servers and other resources and Tejas Gandhi (PhD. Student) for his help in establishing the judge.<br>
And also, the following instructors of ESC101 to push us into making this available for the students as early as possible and opening this to their students.
<ul><li><a href="http://www.cse.iitk.ac.in/users/kritikha">Dr. Krithika Venkataramani</a> (Semester 2, 2011-12)</li>
<li><a href="http://www.cse.iitk.ac.in/users/sganguly">Dr. Sumit Ganguly</a> (Semester 1, 2012-13)</li>
<li><a href="http://www.cse.iitk.ac.in/users/satyadev">Satyadev Nandakumar</a> (Semester 2, 2012-13)</li></ul>
For any queries, send a mail to the following:
<br/>
<ul>
<li><a href="mailto:aca@cse.iitk.ac.in">ACA, CSE IITK</a>&nbsp;&nbsp;&nbsp;&nbsp; (aca@cse.iitk.ac.in)</li>
<li><a href="mailto:pankajj@cse.iitk.ac.in">Pankaj Jindal</a>&nbsp;&nbsp;&nbsp;&nbsp; (pankajj@cse.iitk.ac.in)</li>
<li><a href="mailto:pratikkr@cse.iitk.ac.in">Pankaj Prateek</a>&nbsp;&nbsp;&nbsp;&nbsp; (pratikkr@cse.iitk.ac.in)</li>
</ul>
This Online Judge uses
<ul>
<li><a href="http://jquery.com/">Jquery</a></li>
<li><a href="http://www.styleshout.com/">styleshout:CSS</a></li>
</ul>
      </p>  
      </div>
    </div>
      <div class="span4"> 
      <section id="tables">
  
   <div class="well">
    <h3 class="text-center">Overall Rankings</h3>
  
  
   <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Score</th>
        <th>Username</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
     <?php 
      foreach($about as $m){ 
     echo "<tr>"; 

      echo "<td>"; echo $cnt;$cnt++; 
        echo "<td>"; echo $m->score; 
         echo "<td>" ;echo "<a href='hdh'>".$m->username."</a>"; 
      echo"</tr>";
}
?>
    </tbody>
  </table>
</div>
</section>

    
    </div>
    </div>
</div>
</div>