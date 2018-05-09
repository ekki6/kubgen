<?php

require("cxhead.php");

$berb = htmlspecialchars($_POST["berb"]);
if (!$berb) {
    $berb = 'type something here';
}

print ("<div align=center>");
print ("<form action=\"index.php\" method=post>");

print ("<br> &nbsp; &nbsp; <input type=text name=\"berb\" size=30 value=\"$berb\">");
print ("&nbsp;&nbsp;<input type=submit value=los!><br><br>");




print("<table border=0>");

$str="1234567821436587341278564321876556781234658721437856341287654321";
//$hsh="7ef0742612e4db668ea2a7b5779f69cf13762b48d36812fd72eda69207460a71bd2e2c901b8f46991249bd566e98b9e2b31e897029c54c20f57a31e8e23f452f";

$sometext = 'hi there what is up peeps?';
//$sometext = '';
$hsh = hash('sha512',$berb);
//print("<hr>$hsh<hr>");



$achar = str_split($hsh);

$i = 0;

foreach ($achar as $ch) {
    $i = $i + 2;
    $nch = hexdec($ch);
    $bch = ($nch % 4);
    $tch = ($nch - $bch ) / 4;

    print("<td class=\"a$tch\">&nbsp;</td>\n");
    print("<td class=\"a$bch\">&nbsp;</td>\n");
    if (!($i%16) && ($i<(2*strlen($hsh)))) {
        print("</tr><tr>");
    }
}


print("</tr></table>");

print("</div>");

//require("cmid.php");
require("cfoot.php");



?>
