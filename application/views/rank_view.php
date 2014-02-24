<div class="container">
    
     <section id="tables">
  
    <h3 class="text-center">Overall Rankings</h3> 
 <?php   echo $this->table->set_template(array('table_open' => '<table class="table table-bordered table-striped table-hover">'));
       echo $this->table->generate($records); ?>
     
    
</section>
    
    <?php echo $this->pagination->create_links(); ?>
  

            
            </div>
          </div>