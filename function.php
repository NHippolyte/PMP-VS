<?php


 function dates()
{
    setlocale(LC_TIME, 'french');
    echo 'Nous sommes le '.strftime('%A %d %B %Y', time());
}

?>