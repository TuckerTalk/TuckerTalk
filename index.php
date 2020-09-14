<?php

namespace tt;

class home
{
    public function detect()
    {
        if(isset($_SESSION['username']))
        {
            header("/client");
            die();
        }
    }
}

home::detect();

?>
<!doctype html>
<html>
<head><title>Welcome to TuckerTalk!</title></head>
<body>
<h1>Welcome to TuckerTalk</h1>
<a href="/auth">Log in with GitHub</a>
</body>