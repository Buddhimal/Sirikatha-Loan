<?php

defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Created by PhpStorm.
 * User: Buddhimal Gunasekara
 * Date: 9/25/2019
 * Time: 10:20 PM
 */
class MModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function query($query)
    {
        return $this->db->query($query);
    }


    public function add_client($post_data)
    {
        $res = $this->db->query("SELECT * FROM sirikatha_client WHERE client_id='" . $post_data['client_id'] . "'");
        if ($res->num_rows() == 0)
            $this->db->insert('sirikatha_client', $post_data);
        return true;
    }

    public function update_client($post_data, $id)
    {
//        $res = $this->db->query("SELECT * FROM sirikatha_client WHERE client_id='" . $post_data['client_id'] . "'");
//        if ($res->num_rows() == 0)
        $this->db->set($post_data);
        $this->db->where('id', $id);
        $this->db->update('sirikatha_client');
        return true;
    }

    public function add_client_group($post_data)
    {
        $res = $this->db->query("SELECT * FROM sirikatha_loan_group WHERE group_id='" . $post_data['group_id'] . "'");
        if ($res->num_rows() == 0) {
            $group_data['group_id'] = $post_data['group_id'];
            $group_data['group_name'] = $post_data['group_name'];

            $this->db->insert('sirikatha_loan_group', $group_data);
            $grp_id = $this->db->insert_id();

            $row = 0;
            foreach ($post_data['client'] as $grp_client) {
                $grp_client_data['sirikatha_loan_group_id'] = $grp_id;
                $grp_client_data['sirikatha_client_id'] = $grp_client;
                $grp_client_data['line_loc'] = ++$row;
                $this->db->insert('sirikatha_loan_group_client', $grp_client_data);
            }
        }

//        var_dump($post_data);
//        die();
//        $res = $this->db->query("SELECT * FROM sirikatha_client WHERE client_id='" . $post_data['client_id'] . "'");
//        if ($res->num_rows() == 0)
//            $this->db->insert('sirikatha_client', $post_data);
        return true;
    }

    public function select_client_details()
    {
        return $this->db->query('CALL sp_getClientDetails(?)', array(''));
    }


    public function generate_client_number()
    {
        $this->db->select("id");
        $this->db->from("sirikatha_client");
        $this->db->limit(1);
        $this->db->order_by('id', "DESC");
        $result = $this->db->get();
        if ($result->num_rows() == 0)
            $rowcount = 0;
        else {
            $rowcount = $result->row()->id;
        }
        $rowcount++;
        if ($rowcount < 10) $client_number = "SIRIKATHA0000" . $rowcount;
        else if ($rowcount < 100) $client_number = "SIRIKATHA000" . $rowcount;
        else if ($rowcount < 1000) $client_number = "SIRIKATHA00" . $rowcount;
        else if ($rowcount < 10000) $client_number = "SIRIKATHA0" . $rowcount;
        else $client_number = "SIRIKATHA" . $client_number;


        return $client_number;
    }

    public function generate_group_number()
    {
        $this->db->select("id");
        $this->db->from("sirikatha_loan_group");
        $this->db->limit(1);
        $this->db->order_by('id', "DESC");
        $result = $this->db->get();
        if ($result->num_rows() == 0)
            $rowcount = 0;
        else {
            $rowcount = $result->row()->id;
        }
        $rowcount++;
        if ($rowcount < 10) $group_number = "GRP0000" . $rowcount;
        else if ($rowcount < 100) $group_number = "GRP000" . $rowcount;
        else if ($rowcount < 1000) $group_number = "GRP00" . $rowcount;
        else if ($rowcount < 10000) $group_number = "GRP0" . $rowcount;
        else $group_number = "GRP" . $group_number;


        return $group_number;
    }

    public function generate_loan_number()
    {
        $this->db->select("id");
        $this->db->from("sirikatha_loan");
        $this->db->limit(1);
        $this->db->order_by('id', "DESC");
        $result = $this->db->get();
        if ($result->num_rows() == 0)
            $rowcount = 0;
        else {
            $rowcount = $result->row()->id;
        }
        $rowcount++;
        if ($rowcount < 10) $group_number = "LOAN0000" . $rowcount;
        else if ($rowcount < 100) $group_number = "LOAN000" . $rowcount;
        else if ($rowcount < 1000) $group_number = "LOAN00" . $rowcount;
        else if ($rowcount < 10000) $group_number = "LOAN0" . $rowcount;
        else $group_number = "LOAN" . $group_number;


        return $group_number;
    }

    public function select_available_group_members()
    {
        return $this->db->query("SELECT
                                    c.id,
                                    c.client_id,
                                    c.client_name 
                                FROM
                                    sirikatha_client AS c 
                                WHERE
                                    NOT EXISTS (
                                    SELECT
                                        sirikatha_client_id 
                                    FROM
                                        sirikatha_loan_group_client lgc
                                        INNER JOIN sirikatha_loan_group AS lg ON lg.id = lgc.sirikatha_loan_group_id 
                                    WHERE
                                        c.id = sirikatha_client_id 
                                        AND lg.active_status = 1 
                                    ) 
                                    AND c.active_status = 1");
    }

    public function select_available_groups()
    {
//        return $this->db->query("SELECT
//                                    lg.id,
//                                    lg.group_id,
//                                    lg.group_name
//                                FROM
//                                    sirikatha_loan_group AS lg
//                                WHERE
//                                    lg.active_status = 1");

        return $this->db->query("SELECT
                                    lg.id, 
                                    lg.group_id, 
                                    lg.group_name
                                FROM
                                    sirikatha_loan_group AS lg
                                    INNER JOIN
                                    sirikatha_loan_group_client
                                    ON 
                                        lg.id = sirikatha_loan_group_client.sirikatha_loan_group_id
                                WHERE
                                    lg.active_status = 1 
                                    AND sirikatha_loan_group_client.sirikatha_client_id NOT IN (SELECT
                                    sirikatha_loan.client_id
                                FROM
                                    sirikatha_loan
                                WHERE
                                    sirikatha_loan.loan_status IN ( '1','4'))");

    }

    public function change_loan_status($loan_id)
    {

        $loan_details = $this->db
            ->select('*')
            ->from('sirikatha_loan')
            ->where('id', $loan_id)
            ->get();

        if ($loan_details->num_rows() > 0) {
            $client_details = $this->db
                ->select('*')
                ->from('sirikatha_client')
                ->where('id', $loan_details->row()->client_id)
                ->get();

            if ($client_details->num_rows() > 0) {

                $this->db->trans_start(); # Starting Transaction
                $this->db->trans_strict(TRUE);

                $client_data['loan_id'] = $loan_id;
                $client_data['loan_sys_id'] = $loan_details->row()->loan_id; //sys gen loan id
                $client_data['client_id'] = $loan_details->row()->client_id;
                $client_data['client_sys_id'] = $client_details->row()->client_id; //sys gen client id
                $client_data['client_name'] = $client_details->row()->client_name;
                $client_data['nic'] = $client_details->row()->nic;
                $client_data['gender'] = $client_details->row()->gender;
                $client_data['election_address'] = $client_details->row()->election_address;
                $client_data['tp'] = $client_details->row()->tp;
                $client_data['job_title'] = $client_details->row()->job_title;
                $client_data['monthly_income'] = $client_details->row()->monthly_income;
                $client_data['business_address'] = $client_details->row()->business_address;
                $client_data['business_tp'] = $client_details->row()->business_tp;
                $client_data['steward_name'] = $client_details->row()->steward_name;
                $client_data['steward_nic'] = $client_details->row()->steward_nic;
                $client_data['steward_address'] = $client_details->row()->steward_address;
                $client_data['steward_tp'] = $client_details->row()->steward_tp;
                $client_data['steward_job'] = $client_details->row()->steward_job;
                $client_data['steward_income'] = $client_details->row()->steward_income;
                $client_data['steward_job_address'] = $client_details->row()->steward_job_address;
                $client_data['steward_job_tp'] = $client_details->row()->steward_job_tp;
                $client_data['number_of_family_members'] = $client_details->row()->number_of_family_members;
                $client_data['loan_amount'] = $client_details->row()->loan_amount;
                $client_data['other_income_01'] = $client_details->row()->other_income_01;
                $client_data['other_income_02'] = $client_details->row()->other_income_02;
                $client_data['other_income_03'] = $client_details->row()->other_income_03;
                $client_data['other_income_monthly'] = $client_details->row()->other_income_monthly;
                $client_data['non_relation_name'] = $client_details->row()->non_relation_name;
                $client_data['non_relation_address'] = $client_details->row()->non_relation_address;
                $client_data['non_relation_tp'] = $client_details->row()->non_relation_tp;
                $client_data['loan_reason'] = $client_details->row()->loan_reason;
                $client_data['business_type'] = $client_details->row()->business_type;
                $client_data['business_monthly_income'] = $client_details->row()->business_monthly_income;
                $client_data['business_monthly_outcome'] = $client_details->row()->business_monthly_outcome;
                $client_data['business_profit'] = $client_details->row()->business_profit;
                $client_data['number_of_loans'] = $client_details->row()->number_of_loans;
                $client_data['active_status'] = $client_details->row()->active_status;
                $client_data['created_date'] = $client_details->row()->created_date;
                $client_data['created_date'] = date("Y-m-d H:i:s");

                $this->db->insert('sirikatha_loan_client', $client_data);
                if ($this->db->affected_rows() > 0) {
                    $loan_client_id = $this->db->insert_id();
                    $this->db
                        ->set('loan_client_id', $loan_client_id)
                        ->set('is_approved', ApproveStatus::APPROVED)
                        ->set('loan_status', LoanStatus::ACTIVE)
                        ->set('approved_by', $this->session->userdata('user_id'))
                        ->set('approved_date', date("Y-m-d H:i:s"))
                        ->where('id', $loan_id)
                        ->update('sirikatha_loan');
                }

                if ($this->db->trans_status() === FALSE) {
                    # Something went wrong.
                    $this->db->trans_rollback();
                    return FALSE;
                } else {
                    # Everything is Perfect.
                    # Committing data to the database.
                    $this->db->trans_commit();
                    return TRUE;
                }
            }
        }

    }

    public function get_client_loan_profile($client_id)
    {
        $loan_details = [];
        $all_finished_loans = [];
        $all_pending_loans = [];
        $all_loans = [];

//        Get all finished loans
        $loans = $this->db
            ->select('l.id,
                        l.loan_id, 
                        l.loan_amount, 
                        l.installment_amount, 
                        l.number_of_installments, 
                        l.first_installment_date, 
                        l.loan_end_date, 
                        l.payable_amount, 
                        l.loan_date, 
                        l.loan_status, 
                        l.total_paid_amount, 
                        l.last_paid_date, 
                        l.is_approved, 
                        l.loan_client_id, 
                        l.approved_by, 
                        l.approved_date, 
                        l.loan_type_id, 
                        lt.loan_name, 
                        l.user_group_id, 
                        lg.group_id, 
                        lg.group_name,
                        (
			FX_NumberofInstallments (
				(
				CASE
						
						WHEN ( SELECT MAX( sirikatha_loan_payment.payment_for_date ) FROM sirikatha_loan_payment WHERE l.id = sirikatha_loan_payment.loan_id AND sirikatha_loan_payment.is_active=1 ) IS NULL THEN
						l.first_installment_date ELSE ( SELECT MAX( sirikatha_loan_payment.payment_for_date ) FROM sirikatha_loan_payment WHERE l.id = sirikatha_loan_payment.loan_id ) 
					END 
					),
				NOW())) AS pending_installments,
                        ')
            ->from('sirikatha_loan as l')
            ->join('sirikatha_loan_type as lt', 'l.loan_type_id = lt.id')
            ->join('sirikatha_loan_group as lg', 'l.user_group_id = lg.id')
            ->where('l.client_id', $client_id)
            ->where('l.is_approved', ApproveStatus::APPROVED)
            ->order_by('l.loan_status', 'ASC')
            ->order_by('l.loan_date', 'DESC')
            ->get();

        if ($loans->num_rows() > 0) {

            foreach ($loans->result() as $loan) {

                $loan_client = $this->db
                    ->select('*')
                    ->from('sirikatha_loan_client')
                    ->where('id', $loan->loan_client_id)
                    ->get();

                $loan_details['loan_details'] = $loan;
                $loan_details['client_details'] = $loan_client->row();

                $all_finished_loans[] = $loan_details;
            }
        }

//get pending loan details if available
        $pending_loan = $this->db
            ->select('l.id,
                        l.loan_id, 
                        l.loan_amount, 
                        l.installment_amount, 
                        l.number_of_installments, 
                        l.first_installment_date, 
                        l.loan_end_date, 
                        l.payable_amount, 
                        l.loan_date, 
                        l.loan_status, 
                        l.total_paid_amount, 
                        l.last_paid_date, 
                        l.is_approved, 
                        l.loan_client_id, 
                        l.approved_by, 
                        l.approved_date, 
                        l.loan_type_id, 
                        lt.loan_name, 
                        l.user_group_id, 
                        lg.group_id, 
                        lg.group_name,
                        (
			FX_NumberofInstallments (
				(
				CASE
						
						WHEN ( SELECT MAX( sirikatha_loan_payment.payment_for_date ) FROM sirikatha_loan_payment WHERE l.id = sirikatha_loan_payment.loan_id AND sirikatha_loan_payment.is_active=1 ) IS NULL THEN
						l.first_installment_date ELSE ( SELECT MAX( sirikatha_loan_payment.payment_for_date ) FROM sirikatha_loan_payment WHERE l.id = sirikatha_loan_payment.loan_id ) 
					END 
					),
				NOW())) AS pending_installments,
                        ')
            ->from('sirikatha_loan as l')
            ->join('sirikatha_loan_type as lt', 'l.loan_type_id = lt.id')
            ->join('sirikatha_loan_group as lg', 'l.user_group_id = lg.id')
            ->where('l.client_id', $client_id)
            ->where('l.is_approved', ApproveStatus::PENDING)
            ->get();

        if ($pending_loan->num_rows() > 0) {

            foreach ($pending_loan->result() as $p_loan) {

                $p_loan_client = $this->db
                    ->select('*')
                    ->from('sirikatha_client')
                    ->where('id', $client_id)
                    ->get();

                $p_loan_details['loan_details'] = $p_loan;
                $p_loan_details['client_details'] = $p_loan_client->row();

                $all_pending_loans[] = $p_loan_details;
            }
        }

        $all_loans['pending_loans'] = $all_pending_loans;
        $all_loans['finished_loans'] = $all_finished_loans;

        return $all_loans;
    }

}