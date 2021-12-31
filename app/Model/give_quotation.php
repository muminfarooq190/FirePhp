<?php


namespace app\Model;


class give_quotation extends Model
{
    public function  isExist(){
        $this->get("c_q_id",$this->c_q_id);
        return $this->next();
    }
}