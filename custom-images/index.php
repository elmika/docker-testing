<?php

echo "Hello world of Docker! Este es un autodeploy a Docker hub!";
var_dump($message);
var_dump($inexistent_message);


exec("free -mtl", $output);
print_r("<p>".$output."</p>");

print_r("<p>".memory_get_usage().</p>);


// syntax error
