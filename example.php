<style>
p
{
	color:#999
}
</style>
<p style="color:#999"> Preg Function to Adding Color To a Seperated word between % symbol.</p>
<?php
$string = "a %sample% word go %here%<br>";
echo $string;
echo preg_replace('~%(.*?)%~', '<span style="color:red">$1</span>', $string);
?>
<hr>

<p style="color:#999">Get The First Letter Of A String.</p>
<?php
$str = 'KAVIN';
echo $str."<br>";
echo strtolower($str[0]);
?>
<hr>
<p style="color:#999">Prints array values,data type, and length. var_dump($array).</p>
<?php
$a=array(1,"kavin");
var_dump($a);
?>
<hr>

<p style="color:#999">Use Of list() and explde() Functions.</p>
<?php
$name =  'my-name-is-kavin';
echo $name."<br>";
list($a,$b) = explode('-',$name);
echo $a."<br>"; echo $b;
?>
<hr>

<p style="color:#999">Get directry name,image name,extension. pathinfo().</p>
<?php
$filename = 'C:\xampp\htdocs\tiff.TIF';

$inf = pathinfo($filename);
$n = $inf['dirname'] 
        . DIRECTORY_SEPARATOR 
        . $inf['filename'] 
        . '.' 
        . 'jpg';

print_r($n);
?>
<hr>

<p style="color:#999">Encrypt And Decrypt a String</p>
<?php
$input = "Kavin";

$encrypted = encryptIt( $input );
$decrypted = decryptIt( $encrypted );

echo $encrypted . '<br />' . $decrypted;

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( 				$cryptKey ) ) ), "\0");
    return( $qDecoded );
}
?>
<hr>

<p style="color:#999">Use Of http_build_query to build a link.</p>
<?php
$data = array('foo', 'bar', 'baz', 'boom', 'cow' => 'milk', 'php' =>'hypertext processor');
echo http_build_query($data) . "\n";
echo http_build_query($data, 'myvar_');
?>
<hr />

<p style="color:#999">Adding One Day To a Date.</p>
<?php
$date = '2015-02-28';
echo $date."<br>";
$date = date('Y-m-d', strtotime($date . ' + 1 day'));
echo 'date after adding 1 day: ' . $date;
?>
<hr />

<p style="color:#999"> Conversion Of a String into MD5 Encrypted Format.</p>
<?php
echo md5(('l!n2013'));
?>

<hr />

<p style="color:#999">Get Text File Lines.</p>
<?Php
$text = file('text.txt');
print_r($text);
foreach($text as $name)
{
	?>
	<img src="/files/<?php echo $name ?>.png" ></img>
<?php	
}

?>
<hr />
<p style="color:#999">Convert First Letter of each word to UPPER CASE.</p>
<?php
echo ucwords("hello world");
?>  
<hr />
<p>Splitting numbers and letters in a string</p>
<?php 

$str = '24lkg';
echo "String : 24lkg<br>";
$numbers = preg_replace('/[^0-9]/', '', $str);
$letters = preg_replace('/[^a-zA-Z]/', '', $str);                                                                                                                                                             
echo $numbers."<br>";
echo $letters
?>
<hr />
<p style="color:#999">PHP Objects</p>
<?php



class sms
{ 
public $data;

function __construct()
{
  
}

function get($val)
{
$this->data = $val;	
}

function view()
{
	echo $this->data;
}

}
//$mc = new sms('sms');
$mc = new sms();
$mc->data='kavin kumar';
$mc->view();	

?>
<hr />

<?php
$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2) !== false) { echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
?>
<hr />
<?php

var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123);

?>
<hr /><p>Interview</p>
<?php

$x = "y";
$y = "x";
$z = "a";
$$x = "z";
$$$x = "b";
echo "$x $y $z";
?>
<hr /> 
