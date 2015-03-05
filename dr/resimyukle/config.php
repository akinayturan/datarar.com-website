<?

// Language //
define('LANG', 'en'); // en - English | es - Español | fa - Farsi | fr - Français | nl - Dutch | cn - ZH-CN (Chinese)

define('APP_NAME', 'Resim Yükle'); // Sitenizin ismi
define('TAG_LINE', 'Resim Upload | EPfarkı'); // Sloganınız (Logonun Yanında Çıkar)

// Folders //
/* Burda değişiklik yaparsanız, ayrıca klasör adını değiştirmeniz gerekir. */
define('DIR_UP','up/');
define('DIR_IM','images/'); // Change this to have something like /X/filename.jpg - where "X/" is the folder name. 
define('DIR_WORKING',DIR_UP.'working/');
define('DIR_TEMP',DIR_UP.'temp/');
define('DIR_TH','thumbs/');

// Min-Max values //
$max_mb = '10.0'; // Max. resim boyutu (Mbytes)
$max_by = $max_mb*1048576; // (bytes)
$max_name = '15'; // Max. isim uzunluğu.

// Thumbs //
$mini_ancho = '150'; // Resim genişliği (pixels)
$mini_alto = '150'; // Resim yüksekliği (pixels)

// Resize //
$lowres = '8'; // Min. resim boyutlandırma değeri (pixels)
$higres = '1366'; // Max. resim boyulandırma değeri (pixels)

// Options //
$lim_act = true; // true: Allows uploading just for your domain - false: Allows upload from anywhere (post from another website)
$debug_mode = false; // false: Debug OFF - true: Debug ON.
$cut_url = true; // true: Short URLs (TinyURL tr.im etc.) - false: normal url (http://mysite.com/images/image.jpg).
$cut_url_service = 'tinyurl'; // tinyurl
$cut_url_user = true; // If $cut_url = true -> true: Allows your users to cut their urls (preference) - false: Users can't choose to cut or not.
$allow_over_resize = false; // true: Allows over resize images - false: Don't allow over resize.


///////////////////////////////////////////////////////////////////
///// DO NOT EDIT BELOW THIS - (do it if the script can't run) ////
///////////////////////////////////////////////////////////////////

// SERVER ///
/* We get this values with $_SERVER. If your server doesn't resolve this values The script will not work.
   If the script doesn't work, you must change this values to be like values in the comments (see the exaple below) */

$DOM_SCRIPT = $_SERVER['SERVER_NAME']; // --> mysite.com
$PATH_SERVER = $_SERVER['DOCUMENT_ROOT']; // --> /public_html (pssst.. NO ENDING SLASH!)

	// example:
	# $DOM_SCRIPT = 'mysite.com';
	# $PATH_SERVER = '/public_html'; 
	/* Btw, you can check this values by uncommenting this: */
	// echo 'DOM: '.$DOM_SCRIPT.' - PATH: '.$PATH_SERVER;

// FTP MODE //
/* Use this if you want to upload the files through ftp php (http://php.net/ftp). This is handly when your server config don't
   allow to upload files without CHMOD 777, like almost all the cPanel. Using this, you can forget the CHMOD ;) */
$use_ftp = false; // true: Uses ftp to upload files - false: Upload without ftp.
$ftp_host = $DOM_SCRIPT; // Burayla oynamayın.
$ftp_user = ''; // FTP İsminiz
$ftp_pass = ''; // FTP Şifreniz
// NOTICE: FTP user must have access to the script folder.


///////////////////////////////
/// DO NOT TOUCH BELOW THIS ///
///////////////////////////////

// PATH //
/* Uhhh.. Can't touch this!. */
$path = dirname($_SERVER['PHP_SELF']);
if (strlen($path)>1) { 
	define('PATH_SCRIPT', $path.'/');
} else {
	define('PATH_SCRIPT', $path);
}

// URL //
/* Uhhh... Uhhh.. Can't touch this!. */
define('URL_SCRIPT', 'http://'.$DOM_SCRIPT.PATH_SCRIPT);

?>