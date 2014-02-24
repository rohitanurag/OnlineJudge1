<div class="container">
    
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
      foreach($rank as $m){ 
     echo "<tr>"; 

      echo "<td>"; echo $cnt;$cnt++; 
        echo "<td>"; echo $m->score; 
         echo "<td>" ;echo "<a href='hdh'>".$m->username."</a>"; 
      echo"</tr>";
}
?>
    </tbody>
               </tbody>
             </table>
           </div>
         </section>
    
   
  

            
            </div>
          </div>