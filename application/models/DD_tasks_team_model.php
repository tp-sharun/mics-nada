<?php
/**
* tasks team
*
**/
class dd_tasks_team_model extends CI_Model {
	
    public function __construct()
    {
        parent::__construct();
        //$this->output->enable_profiler(TRUE);
    }

    //get list of users that can be assigned a task
	function get_tasks_team_array()
    {
		$this->db->select('users.id,first_name,last_name,users.email');
        $this->db->join('meta', 'users.id=meta.user_id','inner');
        $this->db->where('users.id in(select user_id from user_roles where role_id!=2)');
        $this->db->where('users.active',1);
        $this->db->order_by('meta.first_name');
        return $this->db->get('users')->result_array();
	}

    function get_tasks_team_list()
    {
        $team=$this->get_tasks_team_array();
        foreach($team as $row)
        {
            $list[$row['id']]=$row['first_name']. ' '.$row['last_name'];
        }
        return $list;
    }
}

