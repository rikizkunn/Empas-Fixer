
<?php
/*simple text cut for kang dumper kontol
by Rzyz Gavini
Example : Tukangbakso@mahal.com|roso123:28
Result : Tukangbakso@mahal.com|roso123
*/
echo "[!] EMPASS FIXER [!]\n\n";
sleep(2);
@system("clear");
echo "[?] Input List : ";
$empas = trim(fgets(STDIN));
if (file_exists($empas)){
	
echo "[?] Save As : ";
$save = trim(fgets(STDIN));

$x = file_get_contents($empas);
$meki = explode("\n", $x);

echo "\n[+] Started! [+]\n";
sleep(2);
for($i=0;$i<count($meki);$i++){
	
	$aweu = explode(":", $meki[$i]);
	echo $aweu[0]."\n";
file_put_contents($save, "$aweu[0]\n", FILE_APPEND | LOCK_EX);
	
}

echo "\n[!] Done Komandan! [!]";
} else {
	
	echo "\n[!] Mohon Perhatikan Input Anda[!]\n";

}
?>
