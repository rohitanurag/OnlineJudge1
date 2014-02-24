members area only !

<html>
<body>
    <table>
      <tr>
        <th>Name</th>
        <th>Surname</th>
      </tr>
      <?php 
      foreach($members as $m){ 
     echo "<tr>"; 

        echo "<td>";  echo "<a href='".$page['link']."'>".$m->username;."</a>"; 
        echo "<td>"; echo $m->email_address; 
      echo"</tr>";
}
      ?>
      
    </table>
</body>
</html>