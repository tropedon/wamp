<?php
class Keke_witkey_crawl_class{
	public $_db;
	public $_tablename;
	public $_dbop;
	public $_site_name;
	public $_task_id;
	public $_task_name;
	public $_task_catagory;
	public $_task_type;
	public $_task_status;
	public $_task_overview;
	public $_task_detail;
	public $_start_date;
	public $_end_date;
	public $_budget;
	public $_skill;
	public $_qualification;
	public $_acceptance_criteria;
	public $_payment_type;
	public $_attachment;
	public $_upgrade;
	public $_is_public;
	public $_experience_level;
	public $_selection;
	public $_payment;
	public $_evaluation;
	public $_client_name;
	public $_contact_number;
	public $_estimates;
	public $_headcount;
	public $_question;
	public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	public $_replace=0;
	public $_where;
	function  keke_witkey_crawl_class(){
	public function getSite_name(){
		return $this->_Site_name ;
	}
	public function getTask_id(){
	public function getEnd_date(){
		return $this->_end_date ;
	}
	public function getBudget(){
		return $this->_budget ;
	}
	public function getSkill(){
		return $this->_skill ;
	}
	public function getQualification(){
		return $this->_qualification ;
	}
	public function getAcceptance_criteria(){
		return $this->_acceptance_criteria ;
	}
	public function getPayment_type(){
		return $this->_payment_type ;
	}
	public function getAttachment(){
		return $this->_attachment ;
	}
	public function getExperience_level() {
		return $this->_experience_level;
	}
	public function getSelection() {
		return $this->_selection;
	}
	public function getPayment() {
		return $this->_payment;
	}
	public function getEvaluation() {
		return $this->_evaluation;
	}
	public function getClient_name() {
		return $this->_client_name;
	}
	public function getContact_number() {
		return $this->_contact_number;
	}
	public function getEstimates() {
		return $this->_estimates;
	}
	public function getHeadcount() {
		return $this->_headcount;
	}
	public function getQuestion() {
		return $this->_question;
	}
	public function getWhere(){
		return $this->_where ;
	}
		return $this->_cache_config;
	}
	public function setSite_name($value){
		$this->_site_name = $value;
	}
	public function setTask_id($value){
	public function setSkill($value) {
		$this->_skill = $value;
	}
	public function setQualification($value) {
		$this->_qualification = $value;
	}
	public function setAcceptance_criteria($value) {
		$this->_acceptance_criteria = $value;
	}
	public function setPayment_type($value) {
		$this->_payment_type = $value;
	}
	public function setAttachment($value) {
		$this->_attachment = $value;
	}
	public function setUpgrade($value) {
		$this->_upgrade = $value;
	}
	public function setIs_public($value) {
		$this->_is_public = $value;
	}
	public function setExperience_level($value) {
		$this->_experience_level = $value;
	}
	public function setSelection($value) {
		$this->_selection = $value;
	}
	public function setPayment($value) {
		$this->_payment = $value;
	}
	public function setEvaluation($value) {
		$this->_evaluation = $value;
	}
	public function setClient_name($value) {
		$this->_client_name = $value;
	}
	public function setContact_number($value) {
		$this->_contact_number = $value;
	}
	public function setEstimates($value) {
		$this->_estimates = $value;
	}
	public function setHeadcount($value) {
		$this->_headcount = $value;
	}
	public function setQuestion($value) {
		$this->_question = $value;
	}
	public function setWhere($value){
		$this->_where = $value;
	}
	public function setCache_config($_cache_config) {
		$this->_cache_config = $_cache_config;
	}
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
	
		if(!is_null($this->_site_name)){
			$data['site_name']=$this->_site_name;
		}
			$data['end_date']=$this->_end_date;
		}
		if(!is_null($this->_budget)){
			$data['budget']=$this->_budget;
		}
		if(!is_null($this->_skill)){
			$data['skill']=$this->_skill;
		}
		if(!is_null($this->_qualification)){
			$data['qualification']=$this->_qualification;
		}
		if(!is_null($this->_acceptance_criteria)){
			$data['acceptance_criteria']=$this->_acceptance_criteria;
		}
		if(!is_null($this->_payment_type)){
			$data['payment_type']=$this->_payment_type;
		}
		if(!is_null($this->_attachment)){
			$data['attachment']=$this->_attachment;
		}
		if(!is_null($this->_upgrade)){
			$data['upgrade']=$this->_upgrade;
		}
		if(!is_null($this->_is_public)){
			$data['is_public']=$this->_is_public;
		}
		if(!is_null($this->_experience_level)){
			$data['experience_level']=$this->_experience_level;
		}
		if(!is_null($this->_selection)){
			$data['selection']=$this->_selection;
		}
		if(!is_null($this->_payment)){
			$data['payment']=$this->_payment;
		}
		if(!is_null($this->_evaluation)){
			$data['evaluation']=$this->_evaluation;
		}
		if(!is_null($this->_client_name)){
			$data['client_name']=$this->_client_name;
		}
		if(!is_null($this->_contact_number)){
			$data['contact_number']=$this->_contact_number;
		}
		if(!is_null($this->_estimates)){
			$data['estimates']=$this->_estimates;
		}
		if(!is_null($this->_headcount)){
			$data['headcount']=$this->_headcount;
		}
		if(!is_null($this->_question)){
			$data['question']=$this->_question;
		}
						
	
			$data['site_name']=$this->_site_name;
		}
		if(!is_null($this->_task_id)){
			$data['task_id']=$this->_task_id;
		}
		if(!is_null($this->_task_name)){
			$data['task_name']=$this->_task_name;
		}
		if(!is_null($this->_task_catagory)){
			$data['task_catagory']=$this->_task_catagory;
		}
		if(!is_null($this->_task_type)){
			$data['task_type']=$this->_task_type;
		}
		if(!is_null($this->_task_status)){
			$data['task_status']=$this->_task_status;
		}
		if(!is_null($this->_task_overview)){
			$data['task_overview']=$this->_task_overview;
		}
		if(!is_null($this->_task_detail)){
			$data['task_detail']=$this->_task_detail;
		}
		if(!is_null($this->_start_date)){
			$data['start_date']=$this->_start_date;
		}
		if(!is_null($this->_end_date)){
			$data['end_date']=$this->_end_date;
		}
		if(!is_null($this->_budget)){
			$data['budget']=$this->_budget;
		}
		if(!is_null($this->_skill)){
			$data['skill']=$this->_skill;
		}
		if(!is_null($this->_qualification)){
			$data['qualification']=$this->_qualification;
		}
		if(!is_null($this->_acceptance_criteria)){
			$data['acceptance_criteria']=$this->_acceptance_criteria;
		}
		if(!is_null($this->_payment_type)){
			$data['payment_type']=$this->_payment_type;
		}
		if(!is_null($this->_attachment)){
			$data['attachment']=$this->_attachment;
		}
		if(!is_null($this->_upgrade)){
			$data['upgrade']=$this->_upgrade;
		}
		if(!is_null($this->_is_public)){
			$data['is_public']=$this->_is_public;
		}
		if(!is_null($this->_experience_level)){
			$data['experience_level']=$this->_experience_level;
		}
		if(!is_null($this->_selection)){
			$data['selection']=$this->_selection;
		}
		if(!is_null($this->_payment)){
			$data['payment']=$this->_payment;
		}
		if(!is_null($this->_evaluation)){
			$data['evaluation']=$this->_evaluation;
		}
		if(!is_null($this->_client_name)){
			$data['client_name']=$this->_client_name;
		}
		if(!is_null($this->_contact_number)){
			$data['contact_number']=$this->_contact_number;
		}
		if(!is_null($this->_estimates)){
			$data['estimates']=$this->_estimates;
		}
		if(!is_null($this->_headcount)){
			$data['headcount']=$this->_headcount;
		}
		if(!is_null($this->_question)){
			$data['question']=$this->_question;
		}
	
	
	
}
?>