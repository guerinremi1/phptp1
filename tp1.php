<?php
/*exo 2
    echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
    echo 'C\'est pas mal non ? <br/>';
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';
    echo "$var1 + $var2";
    echo $var1 + $var2;
    //echo $var1 + $var3;//
*/
// exo 3
function start_page($title)
{
    echo ' <!DOCTYPE html> <lang="fr">
 <head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};
start_page('titre');
function end_page()
{
    echo '</body>
                  </html>';
}
echo '<hr/><br/><strong>Test</strong><br/><hr/>';
end_page();
// exo 4
echo date('l F d, Y')."<br>";
$jour = date('l F d, Y');
$jour = date('d/m/Y', strtotime('2020-04-01'));
echo $jour;
?>