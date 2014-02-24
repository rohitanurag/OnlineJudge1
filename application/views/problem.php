<div class="container">
    
  
  
    <section id="tables">
            <div class="well">
              <h3 class="text-center">Problems</h3>
              



              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
        <th>Contest</th>
        <th>Problem</th>
        <th>Total Submissions</th>
         <th>Accepted Submissions</th>
        
      </tr>
    </thead>
    <tbody>
     
     <?php 
     
      foreach($problem as $m){ 
     echo "<tr>"; 

   
        echo "<td>"; echo "esc101 ".$m->contestid.""; 
         echo "<td>" ;echo "<a href='http://rohitanurag.netai.net/ci/index.php/prob/view/".$m->problemid."'>".$m->name."</a>"; 
         echo "<td>"; echo $m->ts; 
         echo "<td>"; echo $m->as; 
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