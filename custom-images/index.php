<?php

echo "Hello world of Docker! Este es un autodeploy a Docker hub!";
var_dump($message);
var_dump($inexistent_message);


exec("free -mtl", $output);
print_r($output);


// syntax error
