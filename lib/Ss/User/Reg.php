<?php


namespace Ss\User;


class Reg {

    private $db;

    private $table = "user";

    function __construct(){
        global $db;
        $this->db = $db;
    }

    function GetLastPort(){
        $datas = $this->db->select($this->table,"*",[
            "ORDER" => "uid DESC",
            "LIMIT" => 1
        ]);
        return $datas['0']['port'];
    }

    function Reg($username,$email,$pass,$plan,$transfer,$invite_num,$ref_by){

        $sspass = \Ss\Etc\Comm::get_random_char(8);

        $this->db->insert($this->table,[
           "user_name" => $username,
            "email" => $email,
            "pass" => $pass,
            "passwd" =>  $sspass,
            "t" => '0',
            "u" => '0',
            "d" => '0',
            "plan" => $plan,
            "transfer_enable" => $transfer,
            "port" => $this->GetLastPort()+rand(1,5),
            "invite_num" => $invite_num,
            "money" => '0',
            "#reg_date" =>  'NOW()',
            "ref_by" => $ref_by
        ]);
        $uid = $this->db->select("user","*",[
            "user_name" => $username,
            "LIMIT" => "1"
        ])['0']['uid'];
        $this->db->insert("ac_cert",[
            "user_name" => $username,
            "uid" => $uid
        ]);
        $acpass = \Ss\Etc\Comm::get_random_char(4);
        $s = new \Ss\User\Ss($uid);
        $s->update_ac_cert($username, $acpass, 365);
   }

}
