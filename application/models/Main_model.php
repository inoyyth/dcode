<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

    public function getParticipant() {
        $query = $this->db->select('*')
        ->from('users')
        ->order_by('created_at', 'desc')
        ->get()->result();
        
        $data=[];
        foreach($query as $k=>$v) {
            $data[]=[
                'id' => $v->id,
                'email' => $v->email,
                'name' => $v->name,
                'phone' => $v->phone,
                'gender' => $v->gender == "P" ? "Pria" : "Wanita",
                'birth_date' => $v->birth_date,
                'created_at' => $v->created_at,
                'point' => $this->getPoint($v->id)
            ];
        }
        return $data;
    }

    public function getPoint($user_id) {
        $query = $this->db->select('count(id) as total')
        ->from('share_counter')
        ->where('users_id', $user_id)
        ->get()->row('total');

        return $query;
    }

    public function checkClaim($user_id) {
        $query = $this->db->select('*')
        ->from('user_claim')
        ->where('users_id', $user_id)
        ->get()->row();

        return $query;
    }

    public function saveClaim($user_id) {
        $data = [
         'users_id' => $user_id,
         'created_at' => date('Y-m-d H:i:s'),
         'updated_at' => date('Y-m-d H:i:s')   
        ];

        $this->db->insert('user_claim', $data);

        return;
    }

    public function getClaimUser() {
        $query = $this->db->select('user_claim.is_already_claimed,user_claim.created_at as create_date,user_claim.updated_at,users.*')
        ->from('user_claim')
        ->join('users', 'user_claim.users_id=users.id')
        ->order_by('user_claim.created_at', 'desc')
        ->get()->result_array();

        return $query;
    }
}