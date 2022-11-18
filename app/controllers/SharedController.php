<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * pengguna_name_value_exist Model Action
     * @return array
     */
	function pengguna_name_value_exist($val){
		$db = $this->GetModel();
		$db->where("name", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * pengguna_email_value_exist Model Action
     * @return array
     */
	function pengguna_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * getcount_role Model Action
     * @return Value
     */
	function getcount_role(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM role";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pengguna Model Action
     * @return Value
     */
	function getcount_pengguna(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM users";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_passwordresets Model Action
     * @return Value
     */
	function getcount_passwordresets(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM password_resets";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_users Model Action
     * @return Value
     */
	function getcount_users(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM users";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_buku Model Action
     * @return Value
     */
	function getcount_buku(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM buku";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
