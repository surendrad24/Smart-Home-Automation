<?php

/*echo shell_exec('dir');*/
exec('sudo python /var/www/html/R8on.py' ,$out);
echo $out[0];
echo Hi
?>