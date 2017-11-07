<?php

    // if the caller pressed anything but 1 send them back
    if($_REQUEST['Digits'] != '1') {
        header("Location: personal_assist_v1.php");
        die;
    }

    // the user pressed 1, connect the call to ??? 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Dial>+16508673551</Dial>
    <Say>Sorry, The call failed or the remote party hung up. Goodbye.</Say>
</Response>