<?php

/*echo shell_exec('dir');*/
exec('sudo python mq.py' ,$out);
echo $out[0];

?>