<?php

    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+16508673551"=>"Aragon",
        "+14088886883"=>"Pete",
        "+16503538351"=>"Elika",
        "+16508687936"=>"Nousheen"
    );

    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']])
        $name = "Monkey";

    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Gather numDigits="1" action="hello-monkey-handle-key.php" method="POST">
        <Say>
            Hello <?php echo $name ?> Pete is unavailable right now, is this urgent? 
            If yes, press 1
            If no, press 2 to leave a message
        </Say>
    </Gather>
</Response>