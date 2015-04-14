<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of candidate
 *
 * @author senabolo
 */
class Candidate extends CI_Model {

    function exists($person_id) {
        
        $this->db->from('candidates');
        $this->db->join('persons', 'persons.id = candidates.person_id');
        $this->db->where('candidates.id', $person_id);
        $query = $this->db->get();

        return ($query->num_rows() == 1);
    }

    function get_all($limit = 10000, $offset = 0) {
        $this->db->from('candidates');
//        $this->db->join('persons', 'persons.id = users.person_id');
//        $this->db->where('persons.actif', 1);
        $this->db->order_by("lastname", "asc");
        $this->db->limit($limit);
        $this->db->offset($offset);
        return $this->db->get();
    }
    
    
    function get_all_by_position($limit = 10000, $offset = 0) {
        $this->db->from('candidates');
//        $this->db->join('persons', 'persons.id = users.person_id');
//        $this->db->where('persons.actif', 1);
        $this->db->order_by("position", "desc");
        $this->db->order_by("lastname", "asc");
        $this->db->limit($limit);
        $this->db->offset($offset);
        return $this->db->get();
    }

    function count_all() {
        $this->db->from('candidates');
        return $this->db->count_all_results();
    }
    
    function count_all_vote() {
//        $data['all_candidates'] = $this->Candidate->get_all();
        $total_all_vote = 0; 
        foreach ($this->get_all()->result() as $cand){
            $total_all_vote += $cand->total_vote;
        }
        return $total_all_vote;
    }
    
//    function count_all()
//	{
//		$this->db->from('customers');
//		$this->db->where('deleted',0);
//		return $this->db->count_all_results();
//	}
    

    function get_info($candidate_id) {
        $this->db->from('candidates');
        $this->db->join('persons', 'persons.id = candidates.person_id');
        $this->db->where('candidates.person_id', $candidate_id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            //Get empty base parent object, as $employee_id is NOT an employee
            $person_obj = parent::get_info(-1);

            //Get all the fields from employee table
            $fields = $this->db->list_fields('candidates');

            //append those fields to base parent object, we we have a complete empty object
            foreach ($fields as $field) {
                $person_obj->$field = '';
            }

            return $person_obj;
        }
    }

}
