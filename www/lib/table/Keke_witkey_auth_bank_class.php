<?php
class Keke_witkey_auth_bank_class{
	public $_db;
	public $_tablename;
	public $_dbop;
	public $_bank_a_id;	public $_uid;	public $_username;	public $_bank_account;	public $_bank_name;	public $_bank_id;	public $_deposit_area;	public $_deposit_name;	public $_pay_to_user_cash;	public $_user_get_cash;	public $_pay_time;	public $_cash;	public $_start_time;	public $_end_time;	public $_auth_status;
	public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	public $_replace=0;
	public $_where;
	function  keke_witkey_auth_bank_class(){		$this->_db = new db_factory ( );		$this->_dbop = $this->_db->create(DBTYPE);		$this->_tablename = TABLEPRE."witkey_auth_bank";	}	 
	public function getBank_a_id(){		return $this->_bank_a_id ;	}	public function getUid(){		return $this->_uid ;	}	public function getUsername(){		return $this->_username ;	}	public function getBank_account(){		return $this->_bank_account ;	}	public function getBank_name(){		return $this->_bank_name ;	}	public function getBank_id(){		return $this->_bank_id ;	}	public function getDeposit_area(){		return $this->_deposit_area ;	}	public function getDeposit_name(){		return $this->_deposit_name ;	}	public function getPay_to_user_cash(){		return $this->_pay_to_user_cash ;	}	public function getUser_get_cash(){		return $this->_user_get_cash ;	}	public function getPay_time(){		return $this->_pay_time ;	}	public function getCash(){		return $this->_cash ;	}	public function getStart_time(){		return $this->_start_time ;	}	public function getEnd_time(){		return $this->_end_time ;	}	public function getAuth_status(){		return $this->_auth_status ;	}	public function getWhere(){		return $this->_where ;	}	public function getCache_config() {		return $this->_cache_config;	}
	public function setBank_a_id($value){		$this->_bank_a_id = $value;	}	public function setUid($value){		$this->_uid = $value;	}	public function setUsername($value){		$this->_username = $value;	}	public function setBank_account($value){		$this->_bank_account = $value;	}	public function setBank_name($value){		$this->_bank_name = $value;	}	public function setBank_id($value){		$this->_bank_id = $value;	}	public function setDeposit_area($value){		$this->_deposit_area = $value;	}	public function setDeposit_name($value){		$this->_deposit_name = $value;	}	public function setPay_to_user_cash($value){		$this->_pay_to_user_cash = $value;	}	public function setUser_get_cash($value){		$this->_user_get_cash = $value;	}	public function setPay_time($value){		$this->_pay_time = $value;	}	public function setCash($value){		$this->_cash = $value;	}	public function setStart_time($value){		$this->_start_time = $value;	}	public function setEnd_time($value){		$this->_end_time = $value;	}	public function setAuth_status($value){		$this->_auth_status = $value;	}	public function setWhere($value){		$this->_where = $value;	}	public function setCache_config($_cache_config) {		$this->_cache_config = $_cache_config;	}
	public  function __set($property_name, $value) {
		$this->$property_name = $value;
	}
	public function __get($property_name) {
		if (isset ( $this->$property_name )) {
			return $this->$property_name;
		} else {
			return null;
		}
	}
		function create_keke_witkey_auth_bank(){		$data =  array();		if(!is_null($this->_bank_a_id)){			$data['bank_a_id']=$this->_bank_a_id;		}		if(!is_null($this->_uid)){			$data['uid']=$this->_uid;		}		if(!is_null($this->_username)){			$data['username']=$this->_username;		}		if(!is_null($this->_bank_account)){			$data['bank_account']=$this->_bank_account;		}		if(!is_null($this->_bank_name)){			$data['bank_name']=$this->_bank_name;		}		if(!is_null($this->_bank_id)){			$data['bank_id']=$this->_bank_id;		}		if(!is_null($this->_deposit_area)){			$data['deposit_area']=$this->_deposit_area;		}		if(!is_null($this->_deposit_name)){			$data['deposit_name']=$this->_deposit_name;		}		if(!is_null($this->_pay_to_user_cash)){			$data['pay_to_user_cash']=$this->_pay_to_user_cash;		}		if(!is_null($this->_user_get_cash)){			$data['user_get_cash']=$this->_user_get_cash;		}		if(!is_null($this->_pay_time)){			$data['pay_time']=$this->_pay_time;		}		if(!is_null($this->_cash)){			$data['cash']=$this->_cash;		}		if(!is_null($this->_start_time)){			$data['start_time']=$this->_start_time;		}		if(!is_null($this->_end_time)){			$data['end_time']=$this->_end_time;		}		if(!is_null($this->_auth_status)){			$data['auth_status']=$this->_auth_status;		}		return $this->_bank_a_id = $this->_db->inserttable($this->_tablename,$data,1,$this->_replace);	}
		function edit_keke_witkey_auth_bank(){		$data =  array();		if(!is_null($this->_bank_a_id)){			$data['bank_a_id']=$this->_bank_a_id;		}		if(!is_null($this->_uid)){			$data['uid']=$this->_uid;		}		if(!is_null($this->_username)){			$data['username']=$this->_username;		}		if(!is_null($this->_bank_account)){			$data['bank_account']=$this->_bank_account;		}		if(!is_null($this->_bank_name)){			$data['bank_name']=$this->_bank_name;		}		if(!is_null($this->_bank_id)){			$data['bank_id']=$this->_bank_id;		}		if(!is_null($this->_deposit_area)){			$data['deposit_area']=$this->_deposit_area;		}		if(!is_null($this->_deposit_name)){			$data['deposit_name']=$this->_deposit_name;		}		if(!is_null($this->_pay_to_user_cash)){			$data['pay_to_user_cash']=$this->_pay_to_user_cash;		}		if(!is_null($this->_user_get_cash)){			$data['user_get_cash']=$this->_user_get_cash;		}		if(!is_null($this->_pay_time)){			$data['pay_time']=$this->_pay_time;		}		if(!is_null($this->_cash)){			$data['cash']=$this->_cash;		}		if(!is_null($this->_start_time)){			$data['start_time']=$this->_start_time;		}		if(!is_null($this->_end_time)){			$data['end_time']=$this->_end_time;		}		if(!is_null($this->_auth_status)){			$data['auth_status']=$this->_auth_status;		}		if($this->_where){			return $this->_db->updatetable($this->_tablename,$data,$this->getWhere());		}		else{			$where = array('bank_a_id' => $this->_bank_a_id);			return $this->_db->updatetable($this->_tablename,$data,$where);		}	}
		function query_keke_witkey_auth_bank($is_cache=0, $cache_time=0){		if($this->_where){			$sql = "select * from $this->_tablename where ".$this->_where;		}		else{			$sql = "select * from $this->_tablename";		}		if ($is_cache) {			$this->_cache_config ['is_cache'] = $is_cache;		}		if ($cache_time) {			$this->_cache_config ['time'] = $cache_time;		}		if ($this->_cache_config ['is_cache']) {			if (CACHE_TYPE) {				$keke_cache = new keke_cache_class ( CACHE_TYPE );				$id = $this->_tablename . ($this->_where?"_" .substr(md5 ( $this->_where ),0,6):'');				$data = $keke_cache->get ( $id );				if ($data) {					return $data;				} else {					$res = $this->_dbop->query ( $sql );					$keke_cache->set ( $id, $res,$this->_cache_config['time'] );					$this->_where = "";					return $res;				}			}		}else{			$this->_where = "";			return  $this->_dbop->query ( $sql );		}	}
		function count_keke_witkey_auth_bank(){		if($this->_where){			$sql = "select count(*) as count from $this->_tablename where ".$this->_where;		}		else{			$sql = "select count(*) as count from $this->_tablename";		}		$this->_where = "";		return $this->_dbop->getCount($sql);	}
		function del_keke_witkey_auth_bank(){		if($this->_where){			$sql = "delete from $this->_tablename where ".$this->_where;		}		else{			$sql = "delete from $this->_tablename where bank_a_id = $this->_bank_a_id ";		}		$this->_where = "";		return $this->_dbop->execute($sql);	}
}
?>