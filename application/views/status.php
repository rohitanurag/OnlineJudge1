<div class="container">
    
     <section id="tables">
  
    
 <?php   echo $this->table->set_template(array('table_open' => '<table class="table ">'));

       echo $this->table->generate($record); ?>
     
    
</section>
    
    <?php echo $this->pagination->create_links(); ?>
  

            
            </div>
          </div>