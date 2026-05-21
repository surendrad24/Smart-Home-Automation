<?php

/*echo shell_exec('dir');*/
exec('sudo python mq6on.py' ,$out);
echo $out[0];

?>