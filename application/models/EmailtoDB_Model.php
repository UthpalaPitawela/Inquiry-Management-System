<?php

class EmailtoDB_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

function insertofferletter($tp,$from,$subject,$to,$content){
					$data = array(
						'tpnumber'=>$tp,
						'to'=>$to,
						'from'=>$from,
						'Subject'=>$subject,
			'mailcontent'=>$content,);		

	$this->db->insert('offerletters',$data);
}

}