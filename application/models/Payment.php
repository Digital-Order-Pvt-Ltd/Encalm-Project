<?php


class Payment extends CI_Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'tbl_post_payment_details';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"merchant_ref",
		"oodo_no",
		"sale_id",
        "customername",
        "payment_mode",
        "amount",
        "status",
	];
    private $db;

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	//protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);


    }
    public function insert_data($data = array())
    {

        $this->db->insert('tbl_post_payment_details',$data);
        return $this->db->insert_id();
    }

    public function update_data($id, $data = array())
    {
        $this->db->update('tbl_post_payment_details', $data, array(
            "oodo_no" => $id,
        ));
        return $this->db->affected_rows();
    }

    public function delete_data($id)
    {
        return $this->db->delete(array(
            "id" => $id,
        ));
    }

    // public function get_all_data()
    // {
    //     $query = $this->db->query('select * from tbl_post_payment_details');
        
    //     return $query->result_array();
    // }
}