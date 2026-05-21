<?php

/*echo shell_exec('dir');*/
exec('sudo python R8off.py' ,$out);
echo $out[0];

?>