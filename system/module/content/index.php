<?php
defined('IN_MZ') or exit('Sorry,Access Deny.');
base::load_sys_class('controller');

class index extends controller {

	public function __construct() {
		$this->db = base::load_model('content_model');
	}

	public function queryObject(){
		$id = intval($_GET['id']);
		$detail = $this->db->get_one(array('id'=>$id));
		echo json_encode($detail); 
	}

    /**
     * 查询用户列表
     */
	public function queryObjectList(){
		$data = $this->db->select('','*','','20');
		echo json_encode($data);
		//     	echo $data;
	}

	public function saveObject(){
		$bb = var_export($_GET,true);
		$uid = $this->db->insert(array('title'=>'测试案例','intro'=>'测试2'));
		$detail = $this->db->get_one(array('id'=>$uid));
		echo json_encode($detail);
	}

	/**
	 * http://localhost/beauty/index.php?m=content&c=index&a=upfile
	 */
	public function upfile(){
		$uptypes = array('image/jpg', 'image/jpeg', 'image/png', 'image/pjpeg', 'image/gif', 'image/bmp', 'image/x-png');

		$max_file_size      = 2000000;      // 上传文件大小限制, 单位BYTE
		$destination_folder = "uploadimg/"; // 上传文件路径
		$watermark          = 1;            // 是否附加水印(1为加水印,其他为不加水印);
		$watertype          = 1;            // 水印类型(1为文字,2为图片)
		$waterposition      = 1;            // 水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
		$waterstring        = "beauty";     // 水印字符串
		$waterimg           = "xplore.gif"; // 水印图片
		$imgpreview         = 1;            // 是否生成预览图(1为生成,其他为不生成);
		$imgpreviewsize     = 1/2;          // 缩略图比例

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$file = $_FILES["upfile"];

			//是否存在文件
			if (!is_uploaded_file($file['tmp_name'])) die("图片不存在!");

			//检查文件大小
			if($max_file_size < $file["size"])	die("文件太大!");

			//检查文件类型
			if(!in_array($file["type"], $uptypes)) die("文件类型不符!".$file["type"]);

			if(!file_exists($destination_folder)) mkdir($destination_folder);

			$filename    = $file["tmp_name"];
			$image_size  = getimagesize($filename);
			$pinfo       = pathinfo($file["name"]);
			$ftype       = $pinfo['extension'];
			$destination = $destination_folder.time().".".$ftype;

			if (file_exists($destination) && $overwrite != true) die("同名文件已经存在了");
			if (!move_uploaded_file ($filename, $destination)) die("移动文件出错");

			$pinfo = pathinfo($destination);
			$fname = $pinfo[basename];

			if($watermark==1)
			{
				$iinfo  = getimagesize($destination,$iinfo);
				$nimage = imagecreatetruecolor($image_size[0],$image_size[1]);
				$white  = imagecolorallocate($nimage,255,255,255);
				$black  = imagecolorallocate($nimage,0,0,0);
				$red    = imagecolorallocate($nimage,255,0,0);
				imagefill($nimage,0,0,$white);
				switch ($iinfo[2])
				{
					case 1:
						$simage =imagecreatefromgif($destination);
						break;
					case 2:
						$simage =imagecreatefromjpeg($destination);
						break;
					case 3:
						$simage =imagecreatefrompng($destination);
						break;
					case 6:
						$simage =imagecreatefromwbmp($destination);
						break;
					default:
						die("不支持的文件类型");
						exit;
				}

				imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
				imagefilledrectangle($nimage,1,$image_size[1]-15,80,$image_size[1],$white);

				switch($watertype)
				{
					case 1:   //加水印字符串
						imagestring($nimage,2,3,$image_size[1]-15,$waterstring,$black);
						break;
					case 2:   //加水印图片
						$simage1 =imagecreatefromgif("xplore.gif");
						imagecopy($nimage,$simage1,0,0,0,0,85,15);
						imagedestroy($simage1);
						break;
				}

				switch ($iinfo[2])
				{
					case 1:
						//imagegif($nimage, $destination);
						imagejpeg($nimage, $destination);
						break;
					case 2:
						imagejpeg($nimage, $destination);
						break;
					case 3:
						imagepng($nimage, $destination);
						break;
					case 6:
						imagewbmp($nimage, $destination);
						//imagejpeg($nimage, $destination);
						break;
				}

				//覆盖原上传文件
				imagedestroy($nimage);
				imagedestroy($simage);
			}
			if($imgpreview==1)
			{
				echo "http://121.40.155.88/beauty/".$destination;
			}
		}
	}

	public  function  bb(){
		echo getShortUrl(get_url());
	}
}
