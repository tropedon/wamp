<?php
  class Keke_witkey_task_bid_class{
        public $_db;
        public $_tablename;
	    public $_dbop;
	    	 public $_bid_id;  		 public $_task_id; 		 public $_uid; 		 public $_username; 		 public $_quote; 		 public $_cycle; 		 public $_area; 		 public $_message; 		 public $_bid_status; 		 public $_bid_time; 		 public $_hidden_status; 		 public $_ext_status; 		 public $_comment_num; 		 public $_is_view; 		 public $_hasdel; 		 public $_workhide; 
	    public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	    public $_replace=0;  
	    public $_where;      
	     function  keke_witkey_task_bid_class(){ 			 $this->_db = new db_factory ( );			 $this->_dbop = $this->_db->create(DBTYPE);			 $this->_tablename = TABLEPRE."witkey_task_bid";		 }	    
	    		public function getBid_id(){			 return $this->_bid_id ;		}		public function getTask_id(){			 return $this->_task_id ;		}		public function getUid(){			 return $this->_uid ;		}		public function getUsername(){			 return $this->_username ;		}		public function getQuote(){			 return $this->_quote ;		}		public function getCycle(){			 return $this->_cycle ;		}		public function getArea(){			 return $this->_area ;		}		public function getMessage(){			 return $this->_message ;		}		public function getBid_status(){			 return $this->_bid_status ;		}		public function getBid_time(){			 return $this->_bid_time ;		}		public function getHidden_status(){			 return $this->_hidden_status ;		}		public function getExt_status(){			 return $this->_ext_status ;		}		public function getComment_num(){			 return $this->_comment_num ;		}		public function getIs_view(){			 return $this->_is_view ;		}		public function getHasdel(){			 return $this->_hasdel ;		}		public function getWorkhide(){			 return $this->_workhide ;		}		public function getWhere(){			 return $this->_where ;		}		public function getCache_config() {			return $this->_cache_config;		}
	    		public function setBid_id($value){ 			 $this->_bid_id = $value;		}		public function setTask_id($value){ 			 $this->_task_id = $value;		}		public function setUid($value){ 			 $this->_uid = $value;		}		public function setUsername($value){ 			 $this->_username = $value;		}		public function setQuote($value){ 			 $this->_quote = $value;		}		public function setCycle($value){ 			 $this->_cycle = $value;		}		public function setArea($value){ 			 $this->_area = $value;		}		public function setMessage($value){ 			 $this->_message = $value;		}		public function setBid_status($value){ 			 $this->_bid_status = $value;		}		public function setBid_time($value){ 			 $this->_bid_time = $value;		}		public function setHidden_status($value){ 			 $this->_hidden_status = $value;		}		public function setExt_status($value){ 			 $this->_ext_status = $value;		}		public function setComment_num($value){ 			 $this->_comment_num = $value;		}		public function setIs_view($value){ 			 $this->_is_view = $value;		}		public function setHasdel($value){ 			 $this->_hasdel = $value;		}		public function setWorkhide($value){ 			 $this->_workhide = $value;		}		public function setWhere($value){ 			 $this->_where = $value;		}		public function setCache_config($_cache_config) {			 $this->_cache_config = $_cache_config; 		}
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
	    		function create_keke_witkey_task_bid(){		 		 $data =  array(); 					if(!is_null($this->_bid_id)){ 				 $data['bid_id']=$this->_bid_id;			}			if(!is_null($this->_task_id)){ 				 $data['task_id']=$this->_task_id;			}			if(!is_null($this->_uid)){ 				 $data['uid']=$this->_uid;			}			if(!is_null($this->_username)){ 				 $data['username']=$this->_username;			}			if(!is_null($this->_quote)){ 				 $data['quote']=$this->_quote;			}			if(!is_null($this->_cycle)){ 				 $data['cycle']=$this->_cycle;			}			if(!is_null($this->_area)){ 				 $data['area']=$this->_area;			}			if(!is_null($this->_message)){ 				 $data['message']=$this->_message;			}			if(!is_null($this->_bid_status)){ 				 $data['bid_status']=$this->_bid_status;			}			if(!is_null($this->_bid_time)){ 				 $data['bid_time']=$this->_bid_time;			}			if(!is_null($this->_hidden_status)){ 				 $data['hidden_status']=$this->_hidden_status;			}			if(!is_null($this->_ext_status)){ 				 $data['ext_status']=$this->_ext_status;			}			if(!is_null($this->_comment_num)){ 				 $data['comment_num']=$this->_comment_num;			}			if(!is_null($this->_is_view)){ 				 $data['is_view']=$this->_is_view;			}			if(!is_null($this->_hasdel)){ 				 $data['hasdel']=$this->_hasdel;			}			if(!is_null($this->_workhide)){ 				 $data['workhide']=$this->_workhide;			}			 return $this->_bid_id = $this->_db->inserttable($this->_tablename,$data,1,$this->_replace); 		 } 
	    		function edit_keke_witkey_task_bid(){ 		 		 $data =  array();  					if(!is_null($this->_bid_id)){ 				 $data['bid_id']=$this->_bid_id;			}			if(!is_null($this->_task_id)){ 				 $data['task_id']=$this->_task_id;			}			if(!is_null($this->_uid)){ 				 $data['uid']=$this->_uid;			}			if(!is_null($this->_username)){ 				 $data['username']=$this->_username;			}			if(!is_null($this->_quote)){ 				 $data['quote']=$this->_quote;			}			if(!is_null($this->_cycle)){ 				 $data['cycle']=$this->_cycle;			}			if(!is_null($this->_area)){ 				 $data['area']=$this->_area;			}			if(!is_null($this->_message)){ 				 $data['message']=$this->_message;			}			if(!is_null($this->_bid_status)){ 				 $data['bid_status']=$this->_bid_status;			}			if(!is_null($this->_bid_time)){ 				 $data['bid_time']=$this->_bid_time;			}			if(!is_null($this->_hidden_status)){ 				 $data['hidden_status']=$this->_hidden_status;			}			if(!is_null($this->_ext_status)){ 				 $data['ext_status']=$this->_ext_status;			}			if(!is_null($this->_comment_num)){ 				 $data['comment_num']=$this->_comment_num;			}			if(!is_null($this->_is_view)){ 				 $data['is_view']=$this->_is_view;			}			if(!is_null($this->_hasdel)){ 				 $data['hasdel']=$this->_hasdel;			}			if(!is_null($this->_workhide)){ 				 $data['workhide']=$this->_workhide;			}			if($this->_where){ 				 return $this->_db->updatetable($this->_tablename,$data,$this->getWhere()); 			 } 			 else{ 				 $where = array('bid_id' => $this->_bid_id); 				 return $this->_db->updatetable($this->_tablename,$data,$where); 			} 		 } 
	    		function query_keke_witkey_task_bid($is_cache=0, $cache_time=0){ 			 if($this->_where){ 				 $sql = "select * from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "select * from $this->_tablename"; 			 } 			if ($is_cache) {			 $this->_cache_config ['is_cache'] = $is_cache;			}			if ($cache_time) {			 $this->_cache_config ['time'] = $cache_time;			 }			 if ($this->_cache_config ['is_cache']) {			     if (CACHE_TYPE) {					 $keke_cache = new keke_cache_class ( CACHE_TYPE );					 $id = $this->_tablename . ($this->_where?"_" .substr(md5 ( $this->_where ),0,6):'');						$data = $keke_cache->get ( $id );							if ($data) {								return $data; 							} else { 								$res = $this->_dbop->query ( $sql ); 								$keke_cache->set ( $id, $res,$this->_cache_config['time'] ); 					 			$this->_where = ""; 								return $res; 							} 						} 			 }else{			 	$this->_where = ""; 				return  $this->_dbop->query ( $sql ); 			 }		 } 
	    		function count_keke_witkey_task_bid(){ 			 if($this->_where){ 				 $sql = "select count(*) as count from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "select count(*) as count from $this->_tablename"; 			 } 			 $this->_where = ""; 			 return $this->_dbop->getCount($sql); 		 } 
	    		function del_keke_witkey_task_bid(){ 			 if($this->_where){ 				 $sql = "delete from $this->_tablename where ".$this->_where; 			 } 			 else{ 				 $sql = "delete from $this->_tablename where bid_id = $this->_bid_id "; 			 } 			 $this->_where = ""; 			 return $this->_dbop->execute($sql); 		 } 
   }
 ?>