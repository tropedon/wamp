<?php
class Keke_witkey_member_ext_class{
	public $_db;
	public $_tablename;
	public $_dbop;
	public $_ext_id;
	public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	public $_replace=0;
	public $_where;
	function  keke_witkey_member_ext_class(){
	public function getExt_id(){
	public function setExt_id($value){
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
	
	
	
	
	
}
?>