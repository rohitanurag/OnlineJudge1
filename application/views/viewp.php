<br><br><br>
      <div class="container">


  <div class="well">
    
      <p class="text-center">
      <?php 
      foreach($viewp as $m){ 
        echo'
         <h3 class="text-center">';  echo $m->name;  echo '</h3>
      <p class="text-center">'; echo $m->statement;  echo '</h3> 
      </p>  ';
   
}
?>
 <?php
    if(!$this->session->userdata('is_logged_in'))
    {
      
     
    
  }
    else
    {
      

      echo form_open_multipart('upload/do_upload');
echo'<input type="file" name="userfile" size="20" />

<br /><br />
<input type="hidden" name="problemname" value="'.$m->name.'">
<input type="submit" value="upload" />

</form>';
    
  }
      ?></p>  
      </div>
    </div>
      
    </div>
