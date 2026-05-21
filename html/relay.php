<?php
#header("refresh: 1");


function runRelayCommand($command, &$output = []) {
    $relayScript = __DIR__ . '/relay.py';
    $cmd = 'sudo python3 ' . escapeshellarg($relayScript) . ' ' . escapeshellarg($command);
    return exec($cmd, $output);
}



function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
    
    
    
    
    

// Funciones PHP RM1R1

  if (isset($_POST['RM1R11'])) {
   $time_start = microtime_float(); 
   $a = runRelayCommand('RM1R11', $sdata);
   echo $a;
   $time_end = microtime_float();

  }

  if (isset($_POST['RM1R10'])) { 
   $time_start = microtime_float();
   $a = runRelayCommand('RM1R10', $sdata);
   echo $a;
   $time_end = microtime_float();
  }

// End of RM1R1 functions


// Funciones PHP RM1R2

  if (isset($_POST['RM1R21'])) { 
  $time_start = microtime_float();
   $a = runRelayCommand('RM1R21', $sdata);
   echo $a;
   $time_end = microtime_float();
  }

  if (isset($_POST['RM1R20'])) {
   $time_start = microtime_float(); 
   $a = runRelayCommand('RM1R20', $sdata);
   echo $a;
   $time_end = microtime_float();
  }

// End of RM1R2 functions


// Funciones PHP RM1R3

  if (isset($_POST['RM1R31'])) {
   $time_start = microtime_float(); 
   $a = runRelayCommand('RM1R31', $sdata);
   echo $a;
   $time_end = microtime_float();
  }

  if (isset($_POST['RM1R30'])) { 
  $time_start = microtime_float();
   $a = runRelayCommand('RM1R30', $sdata);
   echo $a;
   $time_end = microtime_float();
  }

// End of RM1R3 functions


// Funciones PHP RM1R4

  if (isset($_POST['RM1R41'])) {
   $time_start = microtime_float(); 
   $a = runRelayCommand('RM1R41', $sdata);
   echo $a;
   $time_end = microtime_float();
  }

  if (isset($_POST['RM1R40'])) { 
   $time_start = microtime_float();
   $a = runRelayCommand('RM1R40', $sdata);
   echo $a;
   $time_end = microtime_float();
  }

// End of RM1R4 functions


// Funciones PHP RM1R5

  if (isset($_POST['RM1R51'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R51', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM1R50'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R50', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM1R5 functions


// Funciones PHP RM1R6

  if (isset($_POST['RM1R61'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R61', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM1R60'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R60', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM1R6 functions


// Funciones PHP RM1R7

  if (isset($_POST['RM1R71'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R71', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM1R70'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R70', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM1R7 functions


// Funciones PHP RM1R8

  if (isset($_POST['RM1R81'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R81', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM1R80'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM1R80', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM1R8 functions


// Funciones PHP RM2R1

  if (isset($_POST['RM2R11'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R11', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R10'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R10', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R1 functions


// Funciones PHP RM2R2

  if (isset($_POST['RM2R21'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R21', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R20'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R20', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R2 functions


// Funciones PHP RM2R3

  if (isset($_POST['RM2R31'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R31', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R30'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R30', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R3 functions


// Funciones PHP RM2R4

  if (isset($_POST['RM2R41'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R41', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R40'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R40', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R4 functions


// Funciones PHP RM2R5

  if (isset($_POST['RM2R51'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R51', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R50'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R50', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R5 functions


// Funciones PHP RM2R6

  if (isset($_POST['RM2R61'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R61', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R60'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R60', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R6 functions


// Funciones PHP RM2R7

  if (isset($_POST['RM2R71'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R71', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R70'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R70', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R7 functions


// Funciones PHP RM2R8

  if (isset($_POST['RM2R81'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R81', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM2R80'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM2R80', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM2R8 functions


// Funciones PHP RM3R1

  if (isset($_POST['RM3R11'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R11', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R10'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R10', $sdata);
    echo $a;
    $time_end = microtime_float();
   }

   if (isset($_POST['RM3R1'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R1', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R1 functions


// Funciones PHP RM3R2

  if (isset($_POST['RM3R21'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R21', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R20'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R20', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
   if (isset($_POST['RM3R2'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R2', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R2 functions


// Funciones PHP RM3R3

  if (isset($_POST['RM3R31'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R31', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R30'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R30', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R3 functions


// Funciones PHP RM3R4

  if (isset($_POST['RM3R41'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R41', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R40'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R40', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R4 functions


// Funciones PHP RM3R5

  if (isset($_POST['RM3R51'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R51', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R50'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R50', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R5 functions


// Funciones PHP RM3R6

  if (isset($_POST['RM3R61'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R61', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R60'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R60', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R6 functions


// Funciones PHP RM3R7

  if (isset($_POST['RM3R71'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R71', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R70'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R70', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R7 functions


// Funciones PHP RM3R8

  if (isset($_POST['RM3R81'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R81', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM3R80'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM3R80', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM3R8 functions


// Funciones PHP RM4R1

  if (isset($_POST['RM4R11'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM4R11', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM4R10'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM4R10', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM4R1 functions


// Funciones PHP RM4R2

  if (isset($_POST['RM4R21'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM4R21', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
   if (isset($_POST['RM4R20'])) { 
    $time_start = microtime_float();
    $a = runRelayCommand('RM4R20', $sdata);
    echo $a;
    $time_end = microtime_float();
   }
 
 // End of RM4R2 functions
 $time = $time_end - $time_start;
?>

<html>
<head>
<!--index.php--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
  text-align: center;
}
.rowhf:after {
  content: "";
  display: table;
  clear: both;
}
.colhf {
  float: left;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}
.left, .middle {
  width: 25%;
}

.right {
  width: 50%;
}



/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}
.colbox {
  flex: 50%;
  padding: 5px;
  height: 200px; /* Should be removed. Only for demonstration */
}
</style>
<script>
    $(document).ready(function(){  
        setInterval(function(){   
            $("h3").load("reload.php");
        }, 1000);
    });
    </script>
 </head>
 <body>
 <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Relay Module 1</h2>
    <!--RM1R1--> 
    <form action="" method="post">
    Aqua Light&nbsp;<input type="submit" name="RM1R11" value="On">
    <input type="submit" name="RM1R10" value="Off">

  <br></br>

    <!--RM1R2--> 
    <form action="" method="post">
    HangOn Filter&nbsp;<input type="submit" name="RM1R21" value="On">
    <input type="submit" name="RM1R20" value="Off">

  <br></br>

    <!--RM1R3--> 
    <form action="" method="post">
    External Filter&nbsp;<input type="submit" name="RM1R31" value="On">
    <input type="submit" name="RM1R30" value="Off">

  <br></br>

    <!--RM1R4--> 
    <form action="" method="post">
    Power Head&nbsp;<input type="submit" name="RM1R41" value="On">
    <input type="submit" name="RM1R40" value="Off">

  <br></br>

    <!--RM1R5--> 
    <form action="" method="post">
    Wave Maker&nbsp;<input type="submit" name="RM1R51" value="On">
    <input type="submit" name="RM1R50" value="Off">

  <br></br>

    <!--RM1R6--> 
    <form action="" method="post">
    Ac AirPump&nbsp;<input type="submit" name="RM1R61" value="On">
    <input type="submit" name="RM1R60" value="Off">

  <br></br>

    <!--RM1R7--> 
    <form action="" method="post">
    Heater&nbsp;<input type="submit" name="RM1R71" value="On">
    <input type="submit" name="RM1R70" value="Off">

  <br></br>

    <!--RM1R8--> 
    <form action="" method="post">
    Kill Switch(220V)&nbsp;<input type="submit" name="RM1R81" value="On">
    <input type="submit" name="RM1R80" value="Off">

  <br></br>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Relay Module 2</h2>
    <!--RM2R1--> 
    <form action="" method="post">
    Left Light Power&nbsp;<input type="submit" name="RM2R11" value="OFF">
    <input type="submit" name="RM2R10" value="ON">

  <br></br>

    <!--RM2R2--> 
    <form action="" method="post">
    Left Light&nbsp;<input type="submit" name="RM2R21" value="On">
    <input type="submit" name="RM2R20" value="Off">

  <br></br>

    <!--RM2R3--> 
    <form action="" method="post">
    Bed Light&nbsp;<input type="submit" name="RM2R31" value="On">
    <input type="submit" name="RM2R30" value="Off">

  <br></br>

    <!--RM2R4--> 
    <form action="" method="post">
    Fan&nbsp;<input type="submit" name="RM2R41" value="On">
    <input type="submit" name="RM2R40" value="Off">

  <br></br>

    <!--RM2R5--> 
    <form action="" method="post">
    USD Hub&nbsp;<input type="submit" name="RM2R51" value="On">
    <input type="submit" name="RM2R50" value="Off">

  <br></br>

    <!--RM2R6--> 
    <form action="" method="post">
    UV Light&nbsp;<input type="submit" name="RM2R61" value="On">
    <input type="submit" name="RM2R60" value="Off">

  <br></br>

    <!--RM2R7--> 
    <form action="" method="post">
    Mist Maker&nbsp;<input type="submit" name="RM2R71" value="On">
    <input type="submit" name="RM2R70" value="Off">

  <br></br>

    <!--RM2R8--> 
    <form action="" method="post">
    _Nil_&nbsp;<input type="submit" name="RM2R81" value="On">
    <input type="submit" name="RM2R80" value="Off">

  <br></br>
  </div>
 <div class="column" style="background-color:#aaa;">
    <h2>Relay Module 3</h2>
    <!--RM3R1--> 
    <form action="" method="post">
    Room Lock&nbsp;<input type="submit" name="RM3R11" value="On">
    <input type="submit" name="RM3R10" value="Off">
    <input type="submit" name="RM3R1" value="push">

  <br></br>

    <!--RM3R2--> 
    <form action="" method="post">
    Main Door Lock&nbsp;<input type="submit" name="RM3R21" value="On" disabled>
    <input type="submit" name="RM3R20" value="Off" disabled>
    <input type="submit" name="RM3R2" value="push">

  <br></br>

    <!--RM3R3--> 
    <form action="" method="post">
    Bot Power&nbsp;<input type="submit" name="RM3R31" value="On">
    <input type="submit" name="RM3R30" value="Off">

  <br></br>

    <!--RM3R4--> 
    <form action="" method="post">
    DC AirPump&nbsp;<input type="submit" name="RM3R41" value="On">
    <input type="submit" name="RM3R40" value="Off">

  <br></br>

    <!--RM3R5--> 
    <form action="" method="post">
    FS Light&nbsp;<input type="submit" name="RM3R51" value="On">
    <input type="submit" name="RM3R50" value="Off">

  <br></br>

    <!--RM3R6--> 
    <form action="" method="post">
    Thermostat&nbsp;<input type="submit" name="RM3R61" value="On">
    <input type="submit" name="RM3R60" value="Off">

  <br></br>

    <!--RM3R7--> 
    <form action="" method="post">
    12v Fan&nbsp;<input type="submit" name="RM3R71" value="On">
    <input type="submit" name="RM3R70" value="Off">

  <br></br>

    <!--RM3R8--> 
    <form action="" method="post">
    Kill Switch (12V)&nbsp;<input type="submit" name="RM3R81" value="On">
    <input type="submit" name="RM3R80" value="Off">

  <br></br>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Relay Module 4</h2>
    <!--RM4R1--> 
    <form action="" method="post">
    RM4 R1&nbsp;<input type="submit" name="RM4R11" value="On">
    <input type="submit" name="RM4R10" value="Off">

  <br></br>

    <!--RM4R2--> 
    <form action="" method="post">
    RM4 R2&nbsp;<input type="submit" name="RM4R21" value="On">
    <input type="submit" name="RM4R20" value="Off"> 
   
   <br></br>
   <div class="colbox" style="background-color:#aaa;">
   <center>
     <h3></h3>
   </center>
   <h2>Serial Data</h2>
   
   <?php
   include 'includes.php';
   $strdata = $sdata;
   $delay = (round($time_end - $time_start,2) . " Sec");
   $log = "Event:" . $strdata . "($delay)";
   logger($log);
   echo $strdata . " ($delay)";
   ?>
   
  </div>
  </div>
  </div>

  <div class="rowhf" style="text-align: center;">
  <div class="colhf left" style="background-color:#aaa;">
    <h2>Module 1</h2>
    

  </div>
  <div class="colhf middle" style="background-color:#bbb;">
    <h2>Module 2</h2>
    
  </div>
 <div class="colhf right" style="background-color:#aaa;">
    <h2>Log</h2>
    <div class="colbox" style="background-color:#aaa;">
    <div id="list">
    <p><iframe src="log.txt" frameborder="0" height="250"
      width="100%"></iframe></p>
    </div>
   
   
   
  </div>
  </div>
  </div>





  


 </body>
</html>
