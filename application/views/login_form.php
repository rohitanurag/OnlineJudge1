

<div class="container">

  <div id="myCarousel" class="carousel slide  "  >
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>



    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="/ci/img/a.jpg"  >
        <div class="carousel-caption">

          <p>This website had been made by the students of IIT Kanpur for the purpose of holding online programming contests.</p>
        </div>
      </div>
      <div class="item">
        <img src="/ci/img/b.jpg"  >
        <div class="carousel-caption">

          <p>Our passion is to code and code and code only.</p>
        </div>
      </div>


      <div class="item">
       <img src="/ci/img/c.jpg"  >
       <div class="carousel-caption">

        <p>There are many online competition being held and the most important thing in all this competition is if ur code runs then u are lucky otherwise u will be in danger</p>
      </div>
    </div>
    <div class="item">
      <img src="/ci/img/d.jpg"  >
      <div class="carousel-caption">

        <p>who is hacking our servers??? any anonymous ?? heheheh </p>
      </div>
    </div>


  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>




</div>

<hr>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span4">
      <div class="well">
        <h3>Recent blog posts</h3>
        <p>
          No recent blog posts now</p>
        </div>
      </div>
      <div class="span4">
        <div class="well">
          <h3>Ongoing Competitions</h3>
          <p>
            There is no competition going on now presently</p>
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
      foreach($main_content as $m){ 
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
   </div>
   
