<?php
require "helper.php";
$obTime = new \DateTime();

if (
    in_array($_REQUEST["type"],
        [
            "addOffset",
            "subOffset"
        ])
    && $_POST["type"]!== $_REQUEST["type"]){
    return;
}



switch ($_REQUEST["type"]) {

    case "getTime":
        $nOffset = (int)\helper::getOffset();
        if ($nOffset<0) {
            $nOffset = abs($nOffset);
            $obTime->sub(new DateInterval("PT{$nOffset}H"));
        }else{
            $obTime->add(new DateInterval("PT{$nOffset}H"));
        }
        echo $obTime->format("H.i.s");
        break;

    case "incOffset":
        \helper::incOffset();
        break;

    case "decOffset":
        \helper::decOffset();
        break;
}
