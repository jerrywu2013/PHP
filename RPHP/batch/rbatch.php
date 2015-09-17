    <?php
    //chmod  -R 776 
    echo "<form action='rbatch.php' method='get'>";
    echo "Number values to generate: <input type='text' name='N' />";
    echo "<input type='submit' />";
    echo "</form>";
     
    if(isset($_GET['N']))
    {
      $N = $_GET['N'];
      exec("Rscript rnorm.R $N");
      $nocache = rand();
      echo("<img src='temp.png?$nocache' />");
    }
    ?>