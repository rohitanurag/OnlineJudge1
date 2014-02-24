<div class="container">

   
         <h3 class="text-center">Contests</h3>
      <ul class="nav nav-tabs">
        <li class="active" ><a href="#A" data-toggle="tab">Past Contests</a></li>
        <li  ><a href="#B" data-toggle="tab">Running Contests</a></li>
        <li ><a href="#C" data-toggle="tab">Future Contests</a></li>
      </ul>
      <div class="tabbable">
        <div class="tab-content">
          <div class="tab-pane  active" id="A">
            <table class="table table-striped">
                    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Start Time</th>
        <th>End Time<th>
        
      </tr>
    </thead>
    <tbody>
     <?php $cnt = 1; ?>
     <?php 
     
      foreach($problem as $m){ 
     echo "<tr>"; 

   
        echo "<td>"; echo $cnt;$cnt++; 
         echo "<td>" ;echo "<a href='http://rohitanurag.netai.net/ci/index.php/prob/viewc/".$m->id."'>".$m->name."</a>"; 
         echo "<td>"; echo $m->start; 
         echo "<td>"; echo $m->end; 
      echo"</tr>";
}
?>
      
      
    </tbody>

    </table>
          </div>
          <div class="tab-pane " id="B">
            <p> no running contest</p><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
          <div class="tab-pane " id="C">
                <p>No future contests</p><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </div>
      </div> 