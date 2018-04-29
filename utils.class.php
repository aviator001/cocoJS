<?

class utils {
	/**
	 * php extension
	 * @var	string
	 */
	protected $debug;
	protected $result;
	protected $r;
	public $record;
	public $secrets;
	public $logins;
	public $d;
	public $host;
	
	
	/**
	 * Constructs a new instance of UTILS class.
	 */
	
	public function __construct ($ip='') {
		global $_CONSTANTS;
		$a=array("'");
		$b=array("");
		foreach (parse_ini_file("/sites/home/gaysugar/config.ini") as $key=>$value) { 
			${$key} = $value;
			$_CONSTANTS[strtoupper($key)]=str_replace($a,$b,$value);
		}
		foreach($_CONSTANTS as $key => $val)
			define(trim(strtoupper($key)), trim($val));

		$this->host="http://gaysugardaddyfinder.com";
		$this->hostname=HOSTNAME;
	}	
	public function show_errors($obj=FALSE) {
		if ($obj===TRUE) {
			ini_set("error_reporting", 1);
			error_reporting(E_ALL); 
			ini_set("display_errors", 1); 
			ini_set("display_errors", "On"); 
		} else {
			ini_set("error_reporting", 0);
			ini_set("display_errors", 0); 
			ini_set("display_errors", "Off"); 
			
		}
	}

	public function err($obj=0) {
		if ($obj===1) {
			ini_set("error_reporting", 1);
			error_reporting(E_ALL); 
			ini_set("display_errors", 1); 
			ini_set("display_errors", "On"); 
		} else {
			ini_set("error_reporting", 0);
			ini_set("display_errors", 0); 
			ini_set("display_errors", "Off"); 
		}
	}

	public function shell($cn, $fn){
		$stream = ssh2_exec($cn, $fn);
		stream_set_blocking($stream, true);
		return stream_get_contents($stream);		
	}
	
	public function print_blocks($obj,$width="25px") {
		$obj=str_replace(' ','',$obj);
		$a=array('[',']','(',')','.','-');
		$b=array('','','','','','');
		str_replace($aa,$b,$obj);
		for ($i=0;$i<=strlen($obj)-1;$i++) {
			$str .= "<span><img onerror=\"this.src='http://txt.am/assets/img/space.png'\" src=\"https://gaysugardaddyfinder.com/assets/img/" . substr($obj,$i,1) . ".png\" style=\"width:$width\"></span>";
		}
		return $str;
	}		
	
	public function logs($x) {
		global $secrets;
		$d[]=$x;
		$this->logins=$d;
	}
	public function callerID ($mobile) {
		return file_get_contents("https://api.opencnam.com/v3/phone/$mobile?account_sid=eACce038bffa1ac4e3ca4ed5c78c891cc0e&auth_token=AU1044e512e8ba45ec9772cd35b8c94d93");
	}
	
	public function connect($ipx="199.91.65.82",$dbx="gaysugardaddyforme") {
			global $db;
			try {
				global $conn;
				$db = new mysqli("199.91.65.82", "root", "Shadow2015!", "gaysugardaddyforme");
				$this->conn = $db;
				return $this->conn = $db;
			} catch (Exception $e) {
				return "Unable to connect";
				exit;
			}
	}

		public function close() {
		try {
			$this->conn->close();
			return "Closed";
		} catch (Exception $e) {
			return "Unable to Close";
			exit;
		}
	}

	protected function _ip() {
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
		if(filter_var($client, FILTER_VALIDATE_IP))
		{
			$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
		{
			$ip = $forward;
		}
		else
		{
			$ip = $remote;
		}
		return $ip;
	}

	public function getPort() {
		setCookie("port", WS_PORT, time()+3600*10, "/");
		return WS_PORT;
	}
	
	public function getIP() {
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
		$result  = "Unknown";
		if(filter_var($client, FILTER_VALIDATE_IP))
		{
			$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
		{
			$ip = $forward;
		}
		else
		{
			$ip = $remote;
		}
		return $ip;
	}

	public function getLatLng() {
		$latLng=file_get_contents("http://199.91.65.85:8080/json/".$this->getIP());
		return array($latLng->lat, $latLng->lng);
	}

	public function getCitySateFromIP($ip='') {
		$result  = "Unknown";
		if ($ip=='') $ip=$this->_ip();
		$ip_data = file_get_contents("http://gaysugardaddyfinder.com/json/$ip");
		$result = array($ip_data->city,$ip_data->state);
		return $result;
	}

	public function getLatLngFromIP($ip='') {
		$result  = "Unknown";
		if ($ip=='') $ip=$this->_ip();
		$ip_data = file_get_contents("http://gaysugardaddyfinder.com/json/$ip");
		$result = array($ip_data->lat,$ip_data->lng);
		return $result;
	}

	public function icrop($filename) {
		list($current_width, $current_height) = getimagesize($filename);
		$left = 0;
		$top = 0;
		$crop_width = 200;
		$crop_height = 200;
		$canvas = imagecreatetruecolor($crop_width, $crop_height);
		$current_image = imagecreatefromjpeg($filename);
		imagecopy($canvas, $im, 0, 0, $left, $top, $current_width, $current_height);
		imagejpeg($canvas, $filename, 100);
	}

	public function singleColor($filename1,$c="yellow"){ 
		$filename="/webroot/gaysugardaddyfinder/public_html/v3.0/sb/" . $filename1;
		require("/webroot/gaysugardaddyfinder/public_html/assets/wi/WideImage.php");

		$im = imagecreatefromjpeg($filename); 
		$height = imagesy($im); 
		$width = imagesx($im); 
		for($x=0; $x<$width; $x++){ 
			for($y=0; $y<$height; $y++){ 
				$rgb = ImageColorAt($im, $x, $y); 
				$r = ($rgb >> 16) & 0xFF; 
				$g = ($rgb >> 8) & 0xFF; 
				$b = $rgb & 0xFF; 
				$c=($r+$g+$b)/3; 
				if ($c=="green") {$r=$c;$g=$c; $b=$c;}//leaves only green 
				if ($c=="blue") {$r=$c;$g=$c; $b=$c;}//only blue 
				if ($c=="red") {$r=$c;$g=$c; $b=$c;}//only red 
				if ($c=="yellow"){$r=$c;$g=$c; $b=$c;}//only yellow 
				imagesetpixel($im, $x, $y,imagecolorallocate($im, $r,$g,$b)); 
			} 
		} 
		return imagejpeg($im); 
		imagedestroy($im);
		$img=WideImage::load($filename);

		//sreturn $im->writeImage("/webroot/gaysugardaddyfinder/public_html/undo/test.jpg");
	}  	

	public function adjustImage($filename1,$mode=0, $annotate="No Text Given!") {
//		require 'Instagraph.php';
//		$instagraph=new Instagraph;
//		$instagraph->setInput("../sb/".$filename1);
//		$instagraph->setOutput("../sb/".$filename1);
		require '../z/src/Image/Filter.php';
		require("/webroot/gaysugardaddyfinder/public_html/assets/wi/WideImage.php");
		$filename="/webroot/gaysugardaddyfinder/public_html/sb/" . $filename1;
		chmod($filename,0755);
		$filename_p="/webroot/gaysugardaddyfinder/public_html/sb1/" . $filename1;
		$filename_o="/webroot/gaysugardaddyfinder/public_html/original/" . $filename1;
		$filename_u="/webroot/gaysugardaddyfinder/public_html/undo/" . $filename1;
		$filename_r="sb/" . $filename1; 
		$im=WideImage::load($filename);
		if ($mode=="UNDO") {
			$im=WideImage::load($filename_u)->saveToFile($filename);
			return $filename;
		} else {
			$im->saveToFile($filename_u);
		}
		if (!getimagesize("/webroot/gaysugardaddyfinder/public_html/original/" . $filename1)) $im->saveToFile($filename_o);
		if (!getimagesize("/webroot/gaysugardaddyfinder/public_html/undo/" . $filename1)) $im->saveToFile($filename_u);
		if ($mode=="SINGLE") {
			$this->singleColor($filename1);
		} else {
			switch ( $mode ) {
				case "OLD":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->old();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "OLD2":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->old2();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "OLD3":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->old3();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "COOL":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->cool();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "LIGHT":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->light();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "FUZZY":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->fuzzy();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "ANTIQUE":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->antique();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "BLACKWHITE":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->blackwhite();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "GRAY":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->gray();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "BLUR":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->blur();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "VINTAGE":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->vintage();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "CONCENTRATE":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->concentrate();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "HERMAJESTY":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->hermajesty();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "FRESHGLOW":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->freshglow();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "EVERBLUE":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->everblue();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "FOREST":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->forest();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "TENDER":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->tender();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "DREAM":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->dream();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "FROZEN":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->frozen();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "RAIN":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->rain();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "ORANGEPEEL":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->orangepeel();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "DARKEN":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->darken();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "SUMMER":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->summer();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "RETRO":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->retro();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "COUNTRY":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->country();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "WASHED":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->washed();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "EMBOSS":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->embossed();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "SHARPEN":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->sharpen();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "BUBBLES":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->bubbles();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "EMBOSS2":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->emboss();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "BOOST":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->boost();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "BOOST2":
					$image = imagecreatefromjpeg($filename);
					$filter = (new Filter($image))->boost2();
					$image=imagejpeg($filter->getImage(),$filename);
					break;
				case "ROTATE1":
					$img=WideImage::load($filename)->rotate(+90)->saveToFile($filename);
					break;
				case "ROTATE2":
					$img=WideImage::load($filename)->rotate(-90)->saveToFile($filename);
					break;
				case "NEGATE":
					$img = new Imagick($filename);
					$img->negateImage(FALSE); 
					break;
				case "SEPIA":
					$img = new Imagick($filename);
					$img->sepiaToneImage(70);
					break;
				case "EDGE":
					$img = new Imagick($filename);
					$img->edgeImage(10);
					break;
				case "OIL":
					$img = new Imagick($filename);
					$img->oilPaintImage( 7 ); 
					break;
				case "SOLARIZE":
					$img = new Imagick($filename);
					$img->solarizeImage( 30000 ); 
					break;
				case "SHADE":
					$img = new Imagick($filename);
					$img->shadeImage(100,10,20); 
					break;
				case "CHARCOAL":
					$img = new Imagick($filename);
					$img->charcoalImage(5,2); 
					break;
				case "ENHANCE":
					$img = new Imagick($filename);
					$img->enhanceImage();
					break;
				case "MODULATE":
					$brightness=150;
					$saturation=100;
					$hue=100;
					$img = new Imagick($filename);
					$img->modulateImage($brightness, $saturation, $hue);
					break;
			case "EQUALIZE":
					$img = new Imagick($filename);
					$img->equalizeImage();
					break;
			case "ANNOTATE":
					$off=getimagesize($filename)[1]-50;
					$img = new Imagick($filename);
					$draw = new ImagickDraw();
					$pixel = new ImagickPixel( 'gray' );
					/* Black text */
					$draw->setFillColor('white');
					/* Font properties */
					$draw->setFont('Bookman-DemiItalic');
					$draw->setFontSize( 32 );
					/* Create text */
					$img->annotateImage($draw, 10, $off, 0, $annotate);
					break;
				case "PIXELATE1":
						$img = new Imagick($filename);
						$imageIterator = $img->getPixelIterator();
					 
						/** @noinspection PhpUnusedLocalVariableInspection */
						foreach ($imageIterator as $row => $pixels) { /* Loop through pixel rows */
							foreach ($pixels as $column => $pixel) { /* Loop through the pixels in the row (columns) */
								/** @var $pixel \ImagickPixel */
								if ($column % 1) {
									$pixel->setColor("rgba(50, 50, 50, 0)"); /* Paint every second pixel black*/
								}
							}
							$imageIterator->syncIterator(); /* Sync the iterator, this is important to do on each iteration */
						}
						break;
				case "PIXELATE2":
						$img = new Imagick($filename);
						$imageIterator = $img->getPixelIterator();
					 
						/** @noinspection PhpUnusedLocalVariableInspection */
						foreach ($imageIterator as $row => $pixels) { /* Loop through pixel rows */
							foreach ($pixels as $column => $pixel) { /* Loop through the pixels in the row (columns) */
								/** @var $pixel \ImagickPixel */
								if ($column % 2) {
									$pixel->setColor("rgba(50, 50, 50, 0)"); /* Paint every second pixel black*/
								}
							}
							$imageIterator->syncIterator(); /* Sync the iterator, this is important to do on each iteration */
						}
						break;
				case "PIXELATE3":
						$img = new Imagick($filename);
						$imageIterator = $img->getPixelIterator();
					 
						/** @noinspection PhpUnusedLocalVariableInspection */
						foreach ($imageIterator as $row => $pixels) { /* Loop through pixel rows */
							foreach ($pixels as $column => $pixel) { /* Loop through the pixels in the row (columns) */
								/** @var $pixel \ImagickPixel */
								if ($column % 3) {
									$pixel->setColor("rgba(50, 50, 50, 0)"); /* Paint every second pixel black*/
								}
							}
							$imageIterator->syncIterator(); /* Sync the iterator, this is important to do on each iteration */
						}
						break;
				case "UNDO":
					$img=WideImage::load($filename_u)->saveToFile($filename);
					break;
				case "RESET":
					$img=WideImage::load($filename_o)->saveToFile($filename);
					break;
					return 'sb/' . explode('/',$filename)[(count(explode('/',$filename))-1)];
					imagedestroy($im);
			}
		}
	}
	
	function isValidMobile($mob) {
		$num = trim($mob);
		$arr_a = array("-","."," ","(",")");
		$arr_b = array("","","","","");
		$num = str_replace($arr_a, $arr_b, $num);

		if ((strlen($num) < 10) || (strlen($num) > 11) || (substr($num,0,1)=='0') || (substr($num,1,1)=='0') || ((strlen($num)==10)&&(substr($num,0,1)=='1'))||((strlen($num)==11)&&(substr($num,0,1)!='1'))) return false;
		$num = (strlen($num) == 11) ? $num : ('1' . $num);	
		
		if ((strlen($num) == 11) && (substr($num, 0, 1) == "1")) {
			return $num;
		} else {
			return false;
		}
	}
	function formatMobile($mob, $format=false) {
		$num = trim($mob);
		$arr_a = array("-","."," ","(",")");
		$arr_b = array("","","","","");
		$num = str_replace($arr_a, $arr_b, $num);

		if ((strlen($num) < 10) || (strlen($num) > 11) || (substr($num,0,1)=='0') || (substr($num,1,1)=='0') || (substr($num,1,1)=='1')) return false;
		$num = (strlen($num) == 11) ? $num : ('1' . $num);	
		
		if ((strlen($num) == 11) && (substr($num, 0, 1) == "1")) {
			if($format) {
				$num = "(" . substr($num,1,3) . ") " . substr($num,4,3) . "-" . substr($num,7,4); 
			}
			return $num;
		} else {
			return false;
		}
	}	

		
	public function distance($point1, $point2) { 
		$radius      = 3958;
		$deg_per_rad = 57.29578;
		$distance = ($radius * pi() * sqrt( 
					($point1['lat'] - $point2['lat']) 
					* ($point1['lat'] - $point2['lat']) 
					+ cos($point1['lat'] / $deg_per_rad)
					* cos($point2['lat'] / $deg_per_rad)
					* ($point1['lng'] - $point2['lng']) 
					* ($point1['lng'] - $point2['lng']) 
			) / 180); 
		return round($distance,1);
	} 
	public function getLoc($ip) {
		$gi = geoip_open("GeoLiteCity.dat", GEOIP_STANDARD);
		$record = geoip_record_by_addr($gi, $ip);
		$x_city =  $record->city;
		$x_state = $record->region;
		$x_zip = $record->postal_code;
		$x_lat = $record->latitude;
		$x_lng = $record->longitude;
		geoip_close($gi);
		return "$x_city, $x_state";
	}
	public function eSMS($to,$from="",$msg) {
		require '../voice/vendor/autoload.php';
		//use Plivo\RestAPI;
		$auth_id = "MAOWUYZMM5MDM4MWRHMW";
		$auth_token = "NGIzN2VlY2Y1NzY5Y2Y5Mzg4ZjBlYzlkYTUwNjQx";
		$p = new RestAPI($auth_id, $auth_token);
		$msg = $_GET['message'];
		if (isset($from)) $src=$from;
			else $src="19256669699";
		// Set message parameters
			$params = array(
			'src' => $src, // Sender's phone number with country code
			'dst' => $to, // Receiver's phone number with country code
			'text' => $msg, // Your SMS text message
			// To send Unicode text
			//'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
			//'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
			'url' => 'http://gaysugardaddyfinder.com/voice/report/', // The URL to which with the status of the message is sent
			'method' => 'POST' // The method used to call the url
		);
		// Send message
		$response = $p->send_message($params);

		// Print the response
		return $response['response'];
	}
	
	public function setSession($mobile,$data) {
		error_reporting('E_NONE');
		$this->_insert("insert into sms_sessions values('NULL','$mobile','$data')");
		return "insert into sms_sessions values('NULL','$mobile','$data')";
	}
	
	public function getLocationNew($ip="") {
		if ($ip=="") $ip=$this->getIP();
		return file_get_contents("http://199.91.65.85:8080/json/" . $ip);
	}
	public function getSession ($mobile) {
		return $this->query("select data from sms_sessions where mobile='$mobile'")[0]['data'];
	}

	public function send_mail($to, $from_login, $type, $subject='', $urgent='', $from='', $msg='', $attachments='',$header='', $footer='', $from_name='') {
		$str="http://gaysugardaddyfinder.com/email/send_mail.php?to_mid=$to&type=$type&from_login=$from_login&subject=$subject&msg=$msg&header=$header&footer=$footer&from=$from&from_name=$from_name&attachments=$attachments&x=" . rand(11111111,99999999);
		return file_get_contents($str);   
	}
	
	public function alt_mail($to, $from, $message, $alt="no", $subject="") {
		$headers = 	'From: cs@gaysugardaddyfinder.com' . "\r\n" .
					'Reply-To: cs@gaysugardaddyfinder.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		$subject="Message from $from";
		mail($to, $subject, $message, $headers);
	}
	
	public function email($to, $from, $message, $alt="no", $subject="") {
		$headers = 	'From: cs@gaysugardaddyfinder.com' . "\r\n" .
					'Reply-To: cs@gaysugardaddyfinder.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		$subject="Message from $from";
		mail($to, $subject, $message, $headers);
	}
	
	public function sms_mail($to, $from, $message, $alt="no", $subject="") {
		$m=$this->query("select mobile from dt_members where email='$to'");
		$mobile=	$m[0]['mobile'];
		$long_code=	$m[0]['long_code'];
		$headers = 	"From: $long_code@gaysugardaddyfinder.com" . "\r\n" .
					"Reply-To: cs@gaysugardaddyfinder.com" . "\r\n" .
					"X-Mailer: PHP/" . phpversion();
		$arrP=array('@vtext.com','@tmomail.net','@messaging.sprintpcs.com','@txt.att.net');
		for ($i=0;$i<count($arrP);$i++) {
			mail($mobile.$arrP[$i], '', $message, $headers);
		}
	}
	
	public function sendSMS($to, $from, $message,$type='SMS',$bal='') {
		file_get_contents("https://gaysugardaddyfinder.com/inc/x_send_api.php?to=$to&from=$from&message=$message&type=$type&bal=$bal");
	}
	
	public function getCredits($user) {
		return $this->query("select credits from dt_anon_sms where credits where mobile='$from' or long_code='$from'")[0]['credits'];		
	}

	public function sql($sql) {
		return $this->_sql($sql);
	}

	public function insert($sql) {
		return $this->_insert($sql);
	}

	public function query($sql) {
		return $this->_sql_arr($sql);
	}

	public function show($obj) {
		echo "<pre>";
			print_r($obj);
		echo "</pre>";
	}
	
	public function user_info($id) {
		$arr=$this->_sql_arr('select * from dt_members where id='.$id);
		return $arr;
	}

	public function user_long_code($long_code) {
		$arr=$this->_sql_arr('select id, login, filename_1, email, mobile, pswd from dt_members where long_code='.$long_code);
		return $arr[0];
	}

	public function user_mobile($mobile) {
		$arr=$this->_sql_arr('select id, login, filename_1, email, mobile, pswd from dt_members where mobile='.$mobile);
		return $arr[0];
	}

	public function user_login($id) {
		$arr=$this->_sql_arr('select login, filename_1, email, mobile, pswd from dt_members where id='.$id);
		return $arr[0];
	}

	public function login_info($mid) {
		$arr=$this->query("select email, login, pswd from dt_members where id='".$mid."'");
		$str = "\r\n\r\nPASS: " . $arr[0][pswd] . "\r\nLOGIN: " . $arr[0][login] . "\r\nEMAIL: " . $arr[0][email];
		return $str;
	}

	public function user_photo($id) {
		$arr=$this->_sql_arr('select filename_1 from dt_photos where member_id=$id');
		return array( "<img src='photos/" . $arr[filename_1] , $arr[filename_1] );
	}


	public function user_thumb($id, $size=30) {
		$arr=$this->_sql_arr('select filename_1 from dt_members where id='.$id.' limit 1');
		$f=$arr[0][filename_1];
		$f=explode('.',$f);
		$f1=$f[0];
		$f2=$f[1];
		$x=$size . "px";
	return array("<img onError='this.src=no_photo' style='width:$x; height:$x' src='photos/" . $f1 . "." . $f2 . "'>",$f1.".".$f2);
	}
	
	public function user_thumb_search($f='axx.png', $size=30) {
		if (empty($f)) $f='axx.png';
		$f=explode('.',$f);
		$f1=$f[0];
		$f2=$f[1];
		$x=$size . "px";
		$x_src='"photos/a29.png"';
		return array("<img onError='this.src=$x_src' class='' style='border:2px solid skyblue;width:$x; max-height:$x; height:$x; border-radius: 150px; --moz-corner-radius: 150px; margin:0px;' src='photos/" . $f1 . "." . $f2 . "'>",$f1.".".$f2);
	}
	
	protected function _sql($sql) {
		global $result;
		try {	
				$db=$this->conn;
				if($this->result = $db->query($sql)){
					return $this->result;
				} else {
					return null;
				}
			} catch (Exception $e) {
			return null;
		}
	}

	protected function _insert($sql) {
		global $result;
		try {	
				$db=$this->conn;
				if($db->query($sql)){
					return $db->insert_id;
				} else {
					return null;
				}
			} catch (Exception $e) {
			return null;
		}
	}

	protected function _update($sql) {
		global $result;
		try {	
				$db=$this->conn;
				if($db->query($sql)){
					return $db->insert_id;
				} else {
					return null;
				}
			} catch (Exception $e) {
			return null;
		}
	}

	protected function _sql_arr($sql) {
		global $dbs;
		global $row;
		global $rowset;
		try {
				$db=$this->conn;
			try {
					if($r = $db->query($sql)){
						while ($row =  $r->fetch_assoc()) {
							$arr[] = $row;
						}
						$this->rowset = $arr;
						$r->free();
						return $this->rowset;
					} else {
							return null;
					}
				} catch (Exception $e) {
					return null;
				}
			return $res;
		} catch (Exception $e) {
			return "Unable to connect";
			exit;
		}
	}

	public function add_date($date, $days, $unit="Days"){
		$date = strtotime("+".$days." ".$unit, strtotime($date));
		return  date("Y-m-d H:i:s", $date);
	}

	public function query2HTML($query, $c) {
		echo '<style>';
		echo'.table_custom{font:Open Sans Condensed;color:#333; background:#f0f0f0; text-shadow:1px 1px 1px #fff} .table_header{color:#fff;background:#000;text-shadow:none} .table_row{color:#333; text-shadow:2px 2px 0px #fff} .table_row_alt{color:#000;background:lightblue}';
		echo '</style>';
		$x=0; $first_row = true;
		$header = "<table class='table_custom' cellpadding=10 cellspacing=0><tr id='th'>";	
		$f = $this->strAB('select','from', $query);
		$f = explode(',', $f);
		$f = $this->_sql_arr($query);
		$table  = $header;
		$rows = count($f);
			for($c=0; $c <= $rows; $c++){
				$class = ($x==0) ? 'table_row' : 'table_row_alt';
				$x = ($x == 1) ? 0 : 1;
				 if ($c == 0) $table .= "<tr class='$class' id='th'>";
					else $table .= "<tr class='$class' id='r$x'>";
					foreach($f[$c] as $_key => $_value)
						{
							if ($_key=='id') $id=$_value;
							if ($c == 0) $table .= "<td class='table_header'>" . strtoupper($_key) . "</td>";
								else $table .= "<td class='$class'><div contentEditable id=\"$_key|$id\">" . ($_value) . "</div></td>";
						}
			}
		$table .= "</table>";
		echo $table;
	}

	public function queryEDIT($query, $c) {
		error_reporting(E_NONE);
		echo '<style>';
		echo'.table_custom{font:Open Sans Condensed;color:#333; background:#f0f0f0; text-shadow:1px 1px 1px #fff} .table_header{color:#fff;background:#000;text-shadow:none} .table_row{color:#333; text-shadow:2px 2px 0px #fff} .table_row_alt{color:#000;background:lightblue}';
		echo '</style>';
		$x=0; $first_row = true;
		$header = "<table class='table_custom' cellpadding=10 cellspacing=0><tr id='th'>";	
		$t = $this->strAB('from','where', $query);
		$t=trim($t);
		$t='"' . $t . '"';
		$f = $this->strAB('select','from', $query);
		$f = explode(',', $f);
		$f = $this->_sql_arr($query);
		$table  = $header;
		$rows = count($f);
			for($c=0; $c <= $rows; $c++){
				$class = ($x==0) ? 'table_row' : 'table_row_alt';
				$x = ($x == 1) ? 0 : 1;
				 if ($c == 0) $table .= "<tr class='$class' id='th'>";
					else $table .= "<tr class='$class' id='r$x'>";
					foreach($f[$c] as $_key => $_value)
						{
							if ($_key=='id') $id=$_value;
							if ($c == 0) $table .= "<td class='table_header'>" . strtoupper($_key) . "</td>";
								else $table .= "<td class='$class'><div contentEditable id='$_key|$id' onblur='update_f(this,$id,$t)'>" . ($_value) . "</div></td>";
						}
			}
		$table .= "</table>";
		echo $table;
	}
	
	
	public function fixMobile($mob) {
		$num = trim($mob);
		$arr_a = array("-","."," ","(",")");
		$arr_b = array("","","","","");
		$num = str_replace($arr_a, $arr_b, $num);

		if ((strlen($num) < 10) || (strlen($num) > 11) || (substr($num,0,1)=='0') || (substr($num,1,1)=='0') || (substr($num,1,1)=='1')) return false;
		$num = (strlen($num) == 11) ? $num : ("1$num");	
		
		if ((strlen($num) == 11) && (substr($num, 0, 1) == "1")) {
			return $num;
		} else {
			return false;
		}
	}

	function checkMobile($mob, $format=false) {
		$num = trim($mob);
		$arr_a = array("-","."," ","(",",");
		$arr_b = array("","","","","","");
		$num = str_replace($arr_a, $arr_b, $num);
		if ((strlen($num) < 10) || (strlen($num) > 11)) {
			return false;
		} else {
			if (strlen($num) == 10) {
				if (!ctype_digit($num)) {
					return false;
				}
				if ((substr($num,0,1)=='0') || (substr($num,1,1)=='0') || (substr($num,0,1)=='1') || (substr($num,3,1)*1 < 2) || (substr($num,4,2)=="11")) {
					return "false";
				} else {
					if($format) {
						$num = "(" . substr($num,0,3) . ") " . substr($num,3,3) . "-" . substr($num,6,4); 
					} else {
						$num = (strlen($num) == 11) ? $num : ("1$num");
					}
					return $num;
				}
			} else {
				if (!ctype_digit($num)) {
					return false;
				}
				if ((substr($num,0,1) != '1') || (substr($num,1,1)=='0') || (substr($num,1,1)=='1') || (substr($num,4,1)*1 < 2) || (substr($num,5,2)=="11")) {
					return "false";
				} else {
					if($format) {
						$num = "(" . substr($num,1,3) . ") " . substr($num,4,3) . "-" . substr($num,7,4); 
					} else {
						$num = (strlen($num) == 11) ? $num : ("1$num");
					}
					return $num;
				}
			}
		}
	}

	public function cpu_load() {
		$output = `vmstat`;
		$s = strpos(trim($output),'wa st');
			return str_replace(" ","",trim(substr($output, $s+7, 5)));
	}

	public function latlng($ip) {
		$latLng=file_get_contents("http://199.91.65.85:8080/json/".$this->getIP());
		return $latLng->lat ."|" . $latLng->lng;
			return "$lat|$lng";
	}
	
	public function get_lat_lng_zip($zip) {
		$arr=$this->_sql_arr('select latn, longw from dt_zips where zipcode='.$zip.' limit 1');
			return array($arr[0][latn], $arr[0][longw]);
	}
	
	public function getLatLngFromCityState($city, $state) {
		$r = json_decode(file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=$city+$state"));
			return array($r->results[0]->geometry->location->lat,$r->results[0]->geometry->location->lng);
	}

	public function getZip($city_state) {
		$r = json_decode(file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=$city_state"));
			return $r->results[0]->postal_code;
	}
	public function street($lat,$lng) {
		$r = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=true"));
			return $r->results[0]->formatted_address;
	}
	
	public function cityState($lat,$lng) {
		error_reporting(1);
		$r = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=true"));
		$r=$r->results[0]->address_components;
		$r=json_decode((json_encode($r)));
		for ($i = 0; $i < count($r); $i++) {
			$addr = $r[$i];
			$types=$addr->types[0];
			if ($types == 'street_number') $street = $addr->short_name;
			if ($types == 'route') $street .= " " . $addr->short_name;
			if ($types == 'postal_code') $zip = $addr->short_name;
			if ($types == 'administrative_area_level_1') $state = $addr->short_name;
			if ($types == 'locality') $city = $addr->long_name;
		}		
		return ($city . ", " . $state);
	}

	public function getUserLocation() {
		$ip=$this->_ip();
		$latLng = json_decode(file_get_contents("http://199.91.65.85:8080/json/$ip"));
		$lat=$latLng->latitude;
		$lng=$latLng->longitude;
		$r = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=true"));
		$r=$r->results[0]->address_components;
		$r=json_decode((json_encode($r)));
		for ($i = 0; $i < count($r); $i++) {
			$addr = $r[$i];
			$types=$addr->types[0];
			if ($types == 'street_number') $street = $addr->short_name;
			if ($types == 'route') $street .= " " . $addr->short_name;
			if ($types == 'postal_code') $zip = $addr->short_name;
			if ($types == 'administrative_area_level_1') $state = $addr->short_name;
			if ($types == 'locality') $city = $addr->long_name;
		}		
		return json_encode(array($lat,$lng,$street,$city,$state,$zip));
	}
	public function getLocation($ip='') {
		if ($ip=='') $ip=$this->_ip();
		$latLng = json_decode(file_get_contents("http://199.91.65.85:8080/json/$ip"));
		$lat=$latLng->latitude;
		$lng=$latLng->longitude;
		$r = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=true"));
		$r=$r->results[0]->address_components;
		$r=json_decode((json_encode($r)));
		for ($i = 0; $i < count($r); $i++) {
			$addr = $r[$i];
			$types=$addr->types[0];
			if ($types == 'street_number') $street = $addr->short_name;
			if ($types == 'route') $street .= " " . $addr->short_name;
			if ($types == 'postal_code') $zip = $addr->short_name;
			if ($types == 'administrative_area_level_1') $state = $addr->short_name;
			if ($types == 'locality') $city = $addr->long_name;
		}		
		return json_encode(array("lat"=>$lat,"lng"=>$lng));
	}

	public function location() {
		$ip=$this->_ip();
		return file_get_contents("http://199.91.65.85:8080/json/$ip");
	}

  
	public function cityStateToLatLng($city, $state) {
		$sql="select * from geo_city where city='$city' and state='$state' limit 1";      
		$result=$this->_sql_arr($sql);
		if ($result) {
			$lat=$result[0]['lat'];
			$lng=$result[0]['lng'];
		}
		return array($lat,$lng);
	}

	public function zipToLatLng($zip) {
		$sql="select * from geo_city where zip='$zip' limit 1";      
		$result=$this->_sql_arr($sql);
		if ($result) {
			$lat=$result[0]['lat'];
			$lng=$result[0]['lng'];
		}
		return array($lat,$lng);
	}

	public function latLngtoLocation($lat,$lng) {
		$sql="select zipcode from dt_zips where ((abs(round(latn, 4)-round(".$lat." ,4)) < 0.001)  and  (abs(round(longw, 4) - round(".$lng.", 4)) < 0.001))";
		$result=$this->_sql_arr($sql);
		if ($result) {
			$zip=$result[0][zipcode];
			$factor="0.001";
		} else {
			$sql="select zipcode, abs(round(latn, 4)-round(".$lat." ,4)) as lat, abs(round(longw, 4) - round(".$lng.", 4)) as lng from dt_zips where ((abs(round(latn, 4)-round(".$lat." ,4)) < 0.1)  and  (abs(round(longw, 4) - round(".$lng.", 4)) < 0.1)) order by lat asc";
			$result=$this->_sql_arr($sql);
				if ($result) {
					$zip=$result[0][zipcode];
					$factor="0.1";
				} else {
					$sql="select zipcode, abs(round(latn, 4)-round(".$lat." ,4)) as lat, abs(round(longw, 4) - round(".$lng.", 4)) as lng from dt_zips where ((abs(round(latn, 4)-round(".$lat." ,4)) < 1)  and  (abs(round(longw, 4) - round(".$lng.", 4)) < 1)) order by lat asc";
					$result=$this->_sql_arr($sql);
					if ($result) {
						$zip=$result[0][zipcode];
						$factor="1";
					}				
				}
		}
		$sql="select * from geo_city where zip='$zip' limit 1";
		$result=$this->_sql_arr($sql);
			if ($result) {
				$zip=$result[0][zip];
				$city=$result[0][city];
				$state=$result[0][state];
				$areacode=$result[0][areacode];
			}
		return json_encode(array("city"=>$city,"state"=>$state,"zip"=>$zip,"areacode"=>$areacode,"lat"=>$lat,"lng"=>$lng));
	}

		static public function set($name, $value)
		{
			$GLOBALS[$name] = $value;
		}

		static public function get($name)
		{
			return $GLOBALS[$name];
		}

       /** 256 Bit AES Encryption
        *   @returns Encrypted Text
        **/
		public function encrypt($string, $pass, $depth=256)	{	
			return AesCtr::encrypt($string, $pass, $depth);
		}
 
       /** 256 Bit AES Decryption
        *   @returns Decrypted Text
        **/
		public function decrypt($enc_string, $enc_pass, $depth=256)	{	
			return AesCtr::decrypt($enc_string, $enc_pass, $depth);
		}
 
       /** Coverts ASCII to Binary
        *   @returns void
        **/
		public function strToBin($string)	{	
			$bin='';
			for ($i=0; $i < strlen($string); $i++)
			{
				$string[$i] = str_replace("a","@",$string[$i]);
				$string[$i] = str_replace("b","!",$string[$i]);
				$string[$i] = str_replace("c","|",$string[$i]);
				$string[$i] = str_replace("d","$",$string[$i]);
				$string[$i] = str_replace("e","#",$string[$i]);
				$string[$i] = str_replace("f","O",$string[$i]);
				if (!($string[$i] == "|") && !($string[$i]=="@") && !($string[$i]=="#") && !($string[$i]=="$") && !($string[$i]=="O") && !($string[$i]=="!")){
					$bx4 .= (strlen(decbin($string[$i])) == 4) ? decbin($string[$i]) : ((strlen(decbin($string[$i])) == 3) ? "0".decbin($string[$i]) : ((strlen(decbin($string[$i])) == 2) ? "00".decbin($string[$i]) : "000".decbin($string[$i])));
				}
				else
				{
					$bx4 .= $string[$i];
				}
			}
			return $bx4;
		}
 
 
        /** Coverts Binary to ASCII
        *   @returns void
        **/
		public function BinToHex($string) {
			$string = str_replace("O","f",$string);
			$hex='';
			for ($i=0; $i < strlen($string); $i++)
			{
				if (in_array($string[$i], array("a","b","c","d","e","f"))) {
					$hex .= $string[$i];
				}
				else
				{
					$hex .= bindec(substr($string, $i, 4));
					$i = $i + 3;
				}
			}
			return $hex;
		}


		
	
 function getUrlContents($url, $maximumRedirections = null, $currentRedirection = 0)
 {
     $result = false;
     
     $contents = @file_get_contents($url);
     
     // Check if we need to go somewhere else
     
     if (isset($contents) && is_string($contents))
     {
         preg_match_all('/<[\s]*meta[\s]*http-equiv="?REFRESH"?' . '[\s]*content="?[0-9]*;[\s]*URL[\s]*=[\s]*([^>"]*)"?' . '[\s]*[\/]?[\s]*>/si', $contents, $match);
         
         if (isset($match) && is_array($match) && count($match) == 2 && count($match[1]) == 1)
         {
             if (!isset($maximumRedirections) || $currentRedirection < $maximumRedirections)
             {
                 return getUrlContents($match[1][0], $maximumRedirections, ++$currentRedirection);
             }
             
             $result = false;
         }
         else
         {
             $result = $contents;
         }
     }
     
     return $contents;
 }
	
	public function make_string($str_length,$str="",$fill)
	{
		$str="";
		for ($i=1; $i<=($str_length-strlen($str)*1); $i++) 
		{
			$str .= $fill;
		}
		return $str;
	}
	
	function IP2Loc($ip="") {
		require_once("geoipcity.inc");
		require_once("geoipregionvars.php");

		if (empty($ip)) {
			$ip=$this->_ip();
		}
		
		$gi	= geoip_open("GeoLiteCity.dat", GEOIP_STANDARD);	
		$latLng=geoip_record_by_addr($gi, $ip);
		$lat=$latLng->latitude;
		$lng=$latLng->longitude;

		$sql="select zipcode from dt_zips where ((abs(round(latn, 4)-round(".$lat." ,4)) < 0.001)  and  (abs(round(longw, 4) - round(".$lng.", 4)) < 0.001))";
		$result=$this->_sql_arr($sql);
		if ($result) {
			$zip=$result[0][zipcode];
			$factor="0.001";
		} else {
			$sql="select zipcode, abs(round(latn, 4)-round(".$lat." ,4)) as lat, abs(round(longw, 4) - round(".$lng.", 4)) as lng from dt_zips where ((abs(round(latn, 4)-round(".$lat." ,4)) < 0.1)  and  (abs(round(longw, 4) - round(".$lng.", 4)) < 0.1)) order by lat asc";
			$result=$this->_sql_arr($sql);
			if ($result) {
				$zip=$result[0][zipcode];
				$factor="0.1";
			} else {
				$sql="select zipcode, abs(round(latn, 4)-round(".$lat." ,4)) as lat, abs(round(longw, 4) - round(".$lng.", 4)) as lng from dt_zips where ((abs(round(latn, 4)-round(".$lat." ,4)) < 1)  and  (abs(round(longw, 4) - round(".$lng.", 4)) < 1)) order by lat asc";
				$result=$this->_sql_arr($sql);
				if ($result) {
					$zip=$result[0][zipcode];
					$factor="1";
				}				
			}
		}
		$sql="select * from geo_city where zip='$zip' limit 1";
		$result=$this->_sql_arr($sql);
			if ($result) {
				$zip=$result[0][zip];
				$city=$result[0][city];
				$state=$result[0][state];
				$areacode=$result[0][areacode];
			}
		return json_encode(array("city"=>$city,"state"=>$state,"zip"=>$zip,"areacode"=>$areacode,"lat"=>$lat,"lng"=>$lng));
	}
	
	public function zip($lat,$lng) {
		$r = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=true"));
			return $r->results[1]->address_components[0]->long_name;
	}
	
	public function city($lat,$lng) {
		$r = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=true"));
			return $r->results[1]->address_components[1]->long_name;
	}

	protected function strAB($a, $b, $str)	{
		return substr($str, (strPos($str, $a) + strlen($a)), (strPos($str, $b) - (strPos($str, $a) + strlen($a))));
	}
	
	public function strGetAB($a, $b, $str)	{
		return substr($str, (strPos($str, $a) + strlen($a)), (strPos($str, $b) - (strPos($str, $a) + strlen($a))));
	}

	//Get all Characters between 2 strings or tags in a URL
	public function urlGetAB($a, $b, $url) {
		$str = file_get_contents($url);
		return substr($str, (strPos($str, $a) + strlen($a)), (strPos($str, $b) - (strPos($str, $a) + strlen($a))));
	}

	public function clean($objHTMLText){
		$event_desc = preg_replace("/(\\t|\\r|\\n)/","",trim($objHTMLText));  //recursively remove new lines \\n, tabs and \\r
	}

	public function strDate($strDate, $format = "D jS \of M \[h A\]") {
		return date_format(date_create($strDate), $format);
	}
	public function dateadd($objstr,$unit,$interval,$op='+') {
		$date=date_create($objstr);
		date_add($date,date_interval_create_from_date_string("$op$unit $interval"));
		return $date;
	}

	public function date_add($hours) {
		$ts1 = strtotime(date("Y")."-".date("m")."-".date("d"));
		return $ts1+$hours*60;
	}
	 function date_to_words($strDate) {
		$ts1 = strtotime(date("Y")."-".date("m")."-".date("d"));
		$ts2 = strtotime($strDate);
		$dateDiff    = $ts1 - $ts2;
		$units="Day";
		$fd    = floor($dateDiff/(60*60*24));
		$plurl = ($fd==1)?"":"s";
		
		if ($fd == 0) $rt = "Today!";
			
		if ($fd > 0) {
			$rt = "$fd $units{$plurl} Ago";
		}
			
		if ($fd < 0) $rt = "In ".$fd*(-1)." ".$units{$plurl};

		if ($fd==7){
			$datap = "1";
			$prefx = "";
			$units = "Week";
			$plurl = "";
			$tense = "Ago";
			$rt="$prefx $datap $units{$plural} $tense";

		} elseif (($fd>7)&&($fd<31)) {
			$datap = round($fd/7,0);
			$prefx = "Approx";
			$units = "Week";
			$plurl = ($datap*1 < 2)?"":"s";
			$tense = "Ago";
			$rt="$prefx $datap $units{$plurl} $tense";

		} elseif (($fd>31)&&($fd<=365)) {
			$datap = round($fd/30.5,0);
			$prefx = "Approx";
			$units = "Month";
			$plurl = ($datap*1 < 2)?"":"s";
			$tense = "Ago";
			if ($datap*1 >= 12) {
				$e_months = $datap-12;
				$datap=1;
				$units='year';
				$plurl = ($datap*1 < 2)?"":"s";
				if ($e_months > 0) {
					$extra=' and ';
					$rt="$prefx $datap $units{$plurl} $extra $e_months{$e_plurl} $tense";		
				} else {
					$rt="$prefx $datap $units{$plurl} $tense";
				}
			} else {
				$rt="$prefx $datap $units{$plurl} $tense";
			}
		} elseif ($fd>=365) {
			$bal_days = $fd%365;
			$datap = round($fd/365,0);
			$prefx = "Approx";
			$units = "Year";
			$plurl = ($datap*1 < 2)?"":"s";
			$tense = "Ago";

			if ($bal_days > 15) {
				$extra = "and";
				$e_month="1";
				$e_unit="Month";
				$e_plurl=($e_month>1)?"s":"";
			}

			if ($bal_days > 29) {
				$extra = "and";
				$e_month=round($bal_days/30.5,0);
				$e_unit="Month";
				$e_plurl=($e_month*1 > 1) ? "s" : "";
				if ($e_month>11) {
					$e_month='';
					$e_unit='';
					$e_plurl='';
					$extra='';
					$datap++;
				}
			}
			$rt="$prefx $datap $units{$plurl} $extra $e_month $e_unit{$e_plurl} $tense";
		}
			return $rt;
	}

	public function is_mobile() {
		$useragent=$_SERVER['HTTP_USER_AGENT'];
		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
			return "mobile";
		} else {
			return FALSE;
		}
	}

	
    public function background($Command, $Priority = 0){
  //     if($Priority)
//           $PID = shell_exec("nohup nice -n $Priority $Command > /dev/null & echo $!");
  //     else
 //          $PID = shell_exec("nohup $Command > /dev/null & echo $!");
  $PID = shell_exec("nohup $Command > /dev/null & echo $!");
  return($PID);
   }
   /**
    * Check if the Application running !
    *
    * @param     unknown_type $PID
    * @return     boolean
    */
   public function is_running($PID){
       exec("ps $PID", $ProcessState);
       return(count($ProcessState) >= 2);
   }
   /**
    * Kill Application PID
    *
    * @param  unknown_type $PID
    * @return boolean
    */
   public function kill($PID){
       if(exec::is_running($PID)){
           exec("kill -KILL $PID");
           return true;
       }else return false;
   }
   
   public function getStateCode($state) {
		$state = str_replace("Outside United States","Non US",$state);
		$arr['California']="CA";
		$arr['Georgia']="GA";
		$arr['New Jersey']="NJ";
		$arr['New York']="NY";
		$arr['Arizona']="AZ";
		$arr['Texas']="TX";
		$arr['Oregon']="OR";
		$arr['Florida']="FL";
		$arr['Wyoming']="WY";
		$arr['Nevada']="NV";
		$arr['Pennsylvania']="PA";
		$arr['Illinois']="IA";
		$arr['Indiana']="IN";
		$arr['Nebraska']="NB";
		$arr['Wisconsin']="WI";
		$arr['Michigan']="MI";
		$arr['New Hampshire']="NH";
		$arr['North Carolina']="NC";
		$arr['South Carolina']="SC";
		$arr['Connecticut']="CN";
		$arr['Washington']="WA";
		$arr['North Dakota']="ND";
		$arr['South Dakota']="SD";
		$arr['Colorado']="CO";
		$arr['Oklahoma']="OK";
		$arr['Tennessee']="TN";
		$arr['Mississippi']="MS";
		$arr['Arkansas']="AK";
		$arr['New Mexico']="NM";
		$arr['Maryland']="MD";
		$arr['Delaware']="DA";
		$arr['Virginia']="VA";
		$arr['Massachusetts']="MA";
		$arr['Louisiana']="LA";
		$arr['Missouri']="MO"; 
		$arr['Montana']="MT"; 
		$arr['Utah']="UT";
		$arr['Kentucky']="KY";
		$arr['Alabama']="AL";
		$arr['Hawaii']="HI";
		$arr['West Virginia']="WV";
		$arr['Minnesota']="MN";
		$arr['Ohio']="OH";
		return(empty($arr[$state]))?$state:$arr[$state];
	}

	function getUserData($mid) {
		$q = $this->query("select * from dt_members where id=$mid");
		return $q[0];
	}
	
	function getUserName($mid) {
		$q = $this->query("select login from dt_members where id=$mid");
		return $q[0][login];
	}
	
	function getUserEmail($mid) {
		$q = $this->query("select email from dt_members where id=$mid");
		return $q[0][email];
	}
	
	function getUserMobile($input,$medium) {
		$q = $this->query("select mobile from dt_members where $medium='$input' limit 1");
		return $this->isValidMobile($q[0]['mobile']);
	}

 
	public function CheckForCellPhone($m) {
		$USER_ID = 'guatam@strikeiron.com';
		$PASSWORD = 'Strike1';
		$phoneNumber = $m;
		$WSDL = 'http://ws.strikeiron.com/MobileID2?WSDL';
		$client = new SoapClient($WSDL, array('trace' => 1, 'exceptions' => 1));
		$registered_user = array("RegisteredUser" => array("UserID" => $USER_ID,"Password" => $PASSWORD));
		$header = new SoapHeader("http://ws.strikeiron.com", "LicenseInfo", $registered_user);
		$client->__setSoapHeaders($header);
		$params = array("PhoneNumber" => $phoneNumber);
		$result = $client->__soapCall("CheckForCellPhone", array($params), null, null, $output_header);
		return $name = $result->CheckForCellPhoneResult;
	}
  
	public function getCallerID($m) {
		$USER_ID = 'guatam@strikeiron.com';
		$PASSWORD = 'Strike1';
		$phoneNumber = $m;
		$WSDL = 'http://ws.strikeiron.com/PhoneandAddressAdvanced?WSDL';
		$client = new SoapClient($WSDL, array('trace' => 1, 'exceptions' => 1));
		$registered_user = array("RegisteredUser" => array("UserID" => $USER_ID,"Password" => $PASSWORD));
		$header = new SoapHeader("http://ws.strikeiron.com", "LicenseInfo", $registered_user);
		$client->__setSoapHeaders($header);
		$params = array("PhoneNumber" => $phoneNumber);
		$result = $client->__soapCall("ReverseLookupByPhoneNumber", array($params), null, null, $output_header);
		return $name = $result->ReverseLookupByPhoneNumberResult->ServiceResult;
	}
 	
	function get_user_data($mid) {
		$sql="select login, ip, age,  lat, lng, cc_zip as zip, id as member_id, filename_1, cc_city as city, cc_state as state, general_info from dt_members where id='$mid'";
		$q = $this->query($sql);
			foreach($q as $r){
				$login = $r['login']; 
				$id = $r['member_id'];
				$pic = $r['filename_1'];
				$lat = $r['lat'];
				$lng = $r['lng'];
				$age = $r['age'];
				$gen = $r['gender'];
				$city = $r['city'];
				$state = str_replace("Outside United States","Non US",$r['state']);
				$ip = $r['ip'];
				$loc = "$city, $state";
				$p2['lat']=$lat;
				$p2['lng']=$lng;
				$dist=$this->distance($p1,$p2);
				try {
					$s=getimagesize("../v3.0/sb/".$pic);
					if ($s[0]!=$s[1]) {
						$filename="/webroot/sites/gaysugar/public_html/sb/".$pic;
					}
					$x_img=$this->user_thumb_search($id, 65)[0];
				} Catch (Exception $e) {}
			}
			$x_d="$dist Miles";
			if ($dist*1 > 7000) $x_d = "Far, far away";
		
			$arr=array('mask1','mask2','mask3','mask4','mask5','mask6','mask7','mask8','mask9','mask10','mask11','mask12');
			$mask = $arr[rand(0,12)];
			
			$x_d="$dist Mls";
			$x_login = '"'.$login.'"';
			$str[$ctr] = " 
				<div class = 'www_box2 row' style='width:420px;border-bottom:1px solid lightblue;font-family:Open Sans Condensed;font-size:18px;padding:10px;background:url(assets/images/$mask.png) center center;margin-top:-5px;margin-bottom:5px;padding-bottom:2px;padding-top:2px'>
					<div class='col-sm-2'>
						<a href='page.php?page=view_profile&member_id=$id'>$x_img</a>
					</div>
					<div class='col-sm-4' style='position:absolute;left:100px;margin-left:0;margin-right:0;margin-left:0;margin-right:0;padding:0;top:10px'> 
						<div>
							".substr($login,0,14).", $agex 
						</div>
						<div>
							<span>
								
							</span>
							<span>
								$x_d
							</span>
							<span>
								<a href='page.php?page=3dmap&track=$id'>
									<i class='fa fa-location-arrow' style='cursor:hand; cursor:pointer;color:#0093D9'></i>
								</a>
							</span>
						</div>
					</div>
					<div style='position:absolute;top:10px;right:0;margin-right:10px;padding:0;padding-right:15px;color:gold;'>
						<span>
							$loc
						</span>
					</div>
					<div style='position:absolute;top:50%;right:0;margin-right:10px;padding:0;padding-right:15px'>

						<span>
							<a onclick='initMsg($id,$x_login)' href='#'><img src='assets/images/i27g.png' style='height:30px; opacity:0.8'></a>
						</span>
						<span>
							<img src='assets/images/i31g.png' style='height:30px; opacity:0.8'>
						</span>
						<span>
							<img src='assets/images/i32g.png' style='height:30px; opacity:0.8'>
						</span>
						<span>
							<img src='assets/images/i04g.png' style='height:30px; opacity:0.8'>
						</span>
						<span>
							<img src='assets/images/i10g.png' style='height:30px; opacity:0.8'>
						</span>
					</div>						
				</div>";	
			return $str[$ctr];
	}

	public function track_user() {
		/* 1. Get Affiliate */
		if (($_COOKIE['aff'] !='') && (!empty($_COOKIE['aff']))){
			$aff=$_COOKIE['aff'];
		} else {
			if (!isset($_REQUEST[aff])) {
				$aff=$_SESSION['aff'];	
			} else {
				$aff = $_REQUEST[aff];
			}
		}
		
		/* 1. Get User Agent */
		$ua=$_SERVER['HTTP_USER_AGENT'];
		
		/* 1. Get IP Address */
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
	
		/* 1. Get keyword used to search */
		$url=$_SERVER['REQUEST_URI'];
		$ref = $this->get_keywords($url);
		
		$host=$_SERVER['HTTP_REFERER']; 
		$keyword=$ref['keyword']; 

		if (empty($keyword)) $keyword=$_GET['q'];
		if (empty($keyword)) $keyword=$_GET['P'];
		if (empty($keyword)) $keyword=$_GET['wd'];
		if (empty($keyword)) $keyword=$_GET['query'];
		if (empty($keyword)) $keyword=$_GET['encquery'];
		
		if (!empty($aff)) setCookie("aff",$aff,time+3600*24,"/");
		if (!empty($host)) setCookie("HTTP_REFERER",$host,time+3600*24,"/");
		if (!empty($keyword)) setCookie("X_SOURCE",$keyword,time+3600*24,"/");
		if (!empty($ua)) setCookie("HTTP_USER_AGENT",$ua,time+3600*24,"/");
		if (!empty($ip)) setCookie("REMOTE_ADDR",$ip,time+3600*24,"/");
		
		return "$host|$keyword|$ua|$ip|$aff";
	}
	
	public function get_keywords($url = '') {
		// Get the referrer
		$referrer = (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';
		$referrer = (!empty($url)) ? $url : $referrer;
		if (empty($referrer))
			return false;
	 
		// Parse the referrer URL
		$parsed_url = parse_url($referrer);
		if (empty($parsed_url['host']))
			return false;
		$host = $parsed_url['host'];
		$query_str = (!empty($parsed_url['query'])) ? $parsed_url['query'] : '';
		$query_str = (empty($query_str) && !empty($parsed_url['fragment'])) ? $parsed_url['fragment'] : $query_str;
		if (empty($query_str))
			return false;
	 
		// Parse the query string into a query array
		parse_str($query_str, $query);
	 
		// Check some major search engines to get the correct query var
		$search_engines = array(
			'q' => 'alltheweb|aol|ask|ask|bing|google',
			'p' => 'yahoo',
			'wd' => 'baidu'
		);
		foreach ($search_engines as $query_var => $se)
		{
			$se = trim($se);
			preg_match('/(' . $se . ')\./', $host, $matches);
			if (!empty($matches[1]) && !empty($query[$query_var]))
				return $query[$query_var];
		}
		return false;
	}

	public function strip_tags_content($text, $tags = '', $invert = FALSE) { 

	  preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
	  $tags = array_unique($tags[1]); 
		
	  if(is_array($tags) AND count($tags) > 0) { 
		if($invert == FALSE) { 
		  return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text); 
		} 
		else { 
		  return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text); 
		} 
	  } 
	  elseif($invert == FALSE) { 
		return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text); 
	  } 
	  return $text; 
	} 

	public function random_string($str_length=32) {
		$s=65;
		$r=97;
		$p=38;
		$length=128;
		if (1==1) {
			for ($i=48;$i<=57;$i++){
				$numbers[]=$i;
			}
		}

		if (1==1) {
			for ($i=$s;$i<$s+26;$i++){
				$upper[]=$i;
			}
		}
		if (1==1) {
			for ($i=$r;$i<$r+26;$i++){
				$lower[]=$i;
			}
		}
		if (1==1) {
			for ($i=176;$i<=179;$i++){
				$fractions[]=$i;
			}
		}
		if (1==1) {
			for ($i=188;$i<=190;$i++){
				$power[]=$i;
			}
			$power[]=137;
		}
		$symbols=array(58,59,60,61,62,63,64,153,169,174,156,167,176);
		$greek=array(140,166,167,164,133,134,135,181,182);
		$curr=array(128,131,142,154,158,159,161,162,163,165,169);

		$con=$numbers;
		$con=array_merge($con,$upper);
		$con=array_merge($con,$lower);
		//$con=array_merge($con,$fractions);
		//$con=array_merge($con,$power);
		//$con=array_merge($con,$symbols);
		//$con=array_merge($con,$greek);
		//$con=array_merge($con,$curr);
		for ($i=0;$i<=count($con)-1;$i++) {
			$arr[]=chr($con[$i]);
		}
		for ($i=0;$i<=$str_length;$i++){
			if (($i==3)||($i==9)) $str .= "-";
			$str .= $arr[rand(0,count($arr)-1)];
		}
		return $str;
	}
}