<?php
	/**
	 * 
	 */
	class RTO_Controller
	{
		
		function __construct()
		{
			$this->view = new Tampil();
			$this->db = new Database();
			$this->input = new Input();
		}

		public function dataAplikasi()
		{
			$qry = "SELECT * FROM setting";
			return $this->db->get_single_result($qry);
		}
		function upload_files($files, $type, $tbl){
			// d($files);
		    $ff = [];
		    $no = 0;
			foreach($files as $key => $value) {
		        $n = count($value['name']);
		        if ($n > 0 and $value['name'][0] != '') {
		            for ($i = 0; $i < $n; $i++) {
		                $a = str_replace(" ", "", $value['name'][$i]);
		                $b = explode('.', $a);
		                if ($b[1] != 'php' and $b[1] != 'txt') {
		                    $no++;
		                    $name = date('dmYhis').'_'.$no.'_'.$a;
		                    $target_dir = "views/assets/".$tbl."/";
		                    $target_file = $target_dir.basename($name);
		                    $uploadOk = 1;
		                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		                    move_uploaded_file($value["tmp_name"][$i], $target_file);
		                    if ($type == $key) {
		                    	$ff[] = $name;
		                    }
		                }
		            }
		        }
		    }
		    if (count($ff) > 0) {
		        return implode(", ", $ff);
		    }else{
		    	return false;
		    }
		}
		public function getdatauser()
		{
			$qry = "SELECT * FROM users WHERE id_user = '{$_SESSION['id_user']}' ";
			return $this->db->get_single_result($qry);
		}
	}
?>