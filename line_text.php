<?php

      $text = "Mussum Ipsum, cacilds vidis litro abertis.</br>
      Copo furadis é disculpa de bebadis,</br>
      arcu quam euismod magna. </br>
      Nec orci ornare consequat. </br>
      Praesent lacinia ultrices consectetur. </br>
      Sed non ipsum felis.</br>
      Manduma pindureta quium dia nois paga.</br>
      Interessantiss quisso pudia ce receita de bolis,</br> 
      mais bolis eu num gostis.</br>
      A ordem dos tratores não altera o pão duris.</br>
      Per aumento de cachacis, eu reclamis.</br>
      Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.</br>
      Mauris nec dolor in eros commodo tempor.</br>
      Aenean aliquam molestie leo, vitae iaculis nisl.";

      $def_line = explode("</br>", $text);
      $count_lines = count($def_line);

      echo "<table border=1px>";
          for($x=0;$x<$count_lines;$x++)
          {
            echo "<tr><td>";
            echo $def_line[$x];
            echo "</td></tr>";
          }
      echo "</table>";
?>
