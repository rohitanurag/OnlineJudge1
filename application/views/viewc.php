<br><br><br>
      <div class="container">


 <section id="tables">
            <div class="well">
              <h3 class="text-center">Problems</h3>
              



              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
        
        <th>Problem</th>
        <th>Total Submissions</th>
         <th>Accepted Submissions</th>
        
      </tr>
    </thead>
    <tbody>
     
     <?php 
     
      foreach($viewc as $m){ 
     echo "<tr>"; 

   
        echo "<td>"; echo $m->name; 
        
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
