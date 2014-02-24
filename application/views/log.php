



<h1>hi rohitanurag</h1>
members area only !

s<body>
    <table>
      <tr>
        <th>Name</th>
        <th>Surname</th>
      </tr>
      <?php 
      foreach($members as $m){ 
     echo "<tr>"; 

        echo "<td>"; echo $m->username; 
        echo "<td>"; echo $m->email_address; 
      echo"</tr>";
}
      ?>
      
    </table>
</body>
</html>