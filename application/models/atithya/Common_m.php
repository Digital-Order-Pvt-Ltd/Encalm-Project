<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_m extends CI_Model {

    /* insert data in table first table and second array of data */
	
	function insertData($tableName,$dataArr){
		if(!empty($tableName) && !empty($dataArr)){
			$this->db->insert($tableName,$dataArr);
			return $this->db->insert_id();
		}
	}
	/* end insert function */
	
	
	/* Update data in table */
	
	function updateData($tableName,$dataArr,$conditionArr){		
		
		if(!empty($conditionArr)){
			foreach($conditionArr as $key=>$val){
			$this->db->where($key,$val);
			}
			$this->db->update($tableName,$dataArr);
		}
	}
	/* end of update */
	
	/* delete data in table */
	
	function deleteData($tableName,$conditionArr){		
		
		if(!empty($conditionArr)){
			foreach($conditionArr as $key=>$val){
			$this->db->where($key,$val);
			}
			$this->db->delete($tableName);
		}
	}
	
	/* end of delete */
	
	/* select all data in table */
	
	function selectData($tableName,$conditionArr=NULL,$or_where=null,$orderBy=null){		

		    $this->db->select("*");
			$this->db->from($tableName);
			
			if(!empty($conditionArr)){	
				foreach($conditionArr as $key=>$val){
				$this->db->where($key,$val);
				}
			}

			if(!empty($or_where)){
				foreach($or_where as $okey=>$oval){
					$this->db->or_where($okey,$oval);	
				}
			}	
			
			if(!empty($orderBy)){
				foreach($orderBy as $dkey=>$dval){
					$this->db->order_by($dkey,$dval);	
				}
			}	
			
			return $this->db->get()->result();
		
	}
	
	/* end of select */
	
	
	/* select all data in table */
	
	function selectSingleData($tableName,$conditionArr=NULL){		
		    $this->db->select("*");
			$this->db->from($tableName);
			if(!empty($conditionArr)){	
				foreach($conditionArr as $key=>$val){
				$this->db->where($key,$val);
				}
			}
			return $this->db->get()->row();
	}
	
	
	function selectSingleDataByColumnName($tableName,$fieldName,$conditionArr=NULL){		
		    $this->db->select($fieldName);
			$this->db->from($tableName);
			if(!empty($conditionArr)){	
				foreach($conditionArr as $key=>$val){
				$this->db->where($key,$val);
				}
			}
			$rowdata = $this->db->get()->row();
			return !empty($rowdata)?$rowdata->$fieldName:0;
	}
	
	
	/* end of select */
	
	
	/* custom data from tables */
	
	function customData($qry){			
		if(!empty($qry)){
			$qrst=$this->db->query("$qry");
			return $qrst->result();
		}
	}
	
	/* end of custom */
	
	// execute multi query /
	public function GetResults($SqlCommand) {
		$k = 0;
		$arr_results_sets = array();
		
		if (mysqli_multi_query($this->db->conn_id, $SqlCommand)) 
		{
			do 
			{
				$result = mysqli_store_result($this->db->conn_id);
				if ($result) {$l = 0;
				while ($row = $result->fetch_assoc()) 
				{
					$arr_results_sets[$k][$l] = $row;$l++;
				}
				}$k++;
			 }while (mysqli_next_result($this->db->conn_id));
		return $arr_results_sets;
		}
	}
	
	public function getMultipleQuery($proc) {
                $k = 0;
                $arr_results_sets = array();
			 	$con= mysqli_connect('localhost','gisuser_emailuse','emailuser@123','gisuser_email');
                if (mysqli_multi_query($con, $proc)) {
                    do {
                        $result = mysqli_store_result($con);
                        if ($result) {
                            $l = 0;
                            while ($row = $result->fetch_assoc()) {
                                $arr_results_sets[$k][$l] = $row;
                                $l++;
                            }
                        }
                        $k++;
                    } while (mysqli_next_result($con));
                }
			return $arr_results_sets;
               
    }
	
	function getRows($table,$params = array()){ 
			$this->db->select('*'); 
			$this->db->from($table); 
			 
			if(array_key_exists("where", $params)){ 
				foreach($params['where'] as $key => $val){ 
					$this->db->where($key, $val); 
				} 
			}  
			if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
				$result = $this->db->count_all_results(); 
			}else{ 
				if(array_key_exists("id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
					if(!empty($params['id'])){ 
						$this->db->where('id', $params['id']); 
					} 
					$query = $this->db->get(); 
					$result = $query->row(); 
				}else{ 
					$this->db->order_by('id', 'desc'); 
					if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
						$this->db->limit($params['limit'],$params['start']); 
					}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
						$this->db->limit($params['limit']); 
					} 
					 
					$query = $this->db->get(); 
					$result = ($query->num_rows() > 0)?$query->result():FALSE; 
				} 
			} 
			 
			// Return fetched data 
			return $result; 
		}
	

	function getPagingResultSet($table,$params = array(),$where=NULL,$orderBy=null,$or_where=null,$like_where=null,$not_like_where=null,$query='*'){ 
			$this->db->select("$query"); 
			$this->db->from($table); 
        	if(!empty($where)){	
				foreach($where as $key=>$val){
				$this->db->where($key,$val);
				}
			}
			if(!empty($orderBy)){
				foreach($orderBy as $dkey=>$dval){
					$this->db->order_by($dkey,$dval);	
				}
			}
			if(!empty($or_where)){
				foreach($or_where as $okey=>$oval){
					$this->db->or_where($okey,$oval);	
				}
			}	
			if(!empty($like_where)){
				foreach($like_where as $okey=>$oval){
					$this->db->like($okey,$oval);	
				}
			}
			if(!empty($not_like_where)){
				foreach($not_like_where as $okey=>$oval){
					$this->db->like($okey,$oval);	
				}
			}
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
			if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit'],$params['start']); 
			}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit']); 
			} 
			 
			$query = $this->db->get(); 
			$result = ($query->num_rows() > 0)?$query->result():FALSE; 
        } 
         
        // Return fetched data 
        return $result; 
    }
	
	  
	
}
