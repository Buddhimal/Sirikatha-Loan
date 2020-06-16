<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->ci =& get_instance();
$this->ci->load->database();


if ( ! function_exists('checkLogin'))
{
//    protected $CI;

    function is_login(){
        $a =& get_instance();

        $a->load->library('session');

        // This only returns the id does not set it.
        return $a->session->userdata('user_id');
    }

    function last_query(){
        $ab =& get_instance();

        var_dump($ab->db->last_query());
    }

}



/* SYSTEM MODULES */
$query = $this->ci->db->get('sys_module');

foreach ($query->result() as $row)
{
    define($row->module_const,$row->module_id);
}

/* STATUSES */
$query = $this->ci->db->get('status');

foreach ($query->result() as $row)
{
    define($row->status_const,$row->status_id);
}


$query = $this->ci->db->get('sirikatha_loan_type');

foreach ($query->result() as $row)
{
    define($row->const,$row->id);
}


/* SYSTEM DEFAULTS */
/* COMPANY DEFAULTS ?????*/
//$query = $this->ci->db->get('sys_default');
//
//foreach ($query->result() as $row)
//{
//    define($row->sys_default_const,$row->sys_default_value);
//}

/* SYS_USER_GROUP */
// $query = $this->ci->db->query('SELECT * FROM sys_user_group WHERE  NOT isnull(const)');

// foreach ($query->result() as $row)
// {
//    define($row->const,$row->user_group_id);
// }



/* SYSTEM USER GROUPS */
define("SYS_ROOT_GROUP",1);
define("SYS_ADMIN_GROUP",2);
define("ADMIN_USER_GROUP",3);
		