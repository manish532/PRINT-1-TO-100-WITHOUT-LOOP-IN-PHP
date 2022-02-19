<?php

// ************How to print 1 to 100 without Loop************** 
    array_map(function ($value) {
          echo $value."</br>";
          }, range(1, 100));

 ?>
