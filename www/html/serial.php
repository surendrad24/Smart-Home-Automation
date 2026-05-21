<?php
system("cd /usr/lib/cgi-bin");

/*echo shell_exec('dir');*/
exec('sudo python /var/www/html/relay.py' ,$out);
echo $out[0];

?>