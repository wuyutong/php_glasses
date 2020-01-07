<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = 'email';

    public $timestamps = false;

    public function insertEmail($email)
    {
        $this->email = $email;
        $res = $this->save();
        if ($res) {
            return 1;
        }else{
            return 0;
        }
    }

    public function getAllEmail()
    {
        $res = $this->all();
        $sp = "";
        foreach ($res as $item) {
            $sp = $sp.($item->email).';
            ';
        }
        return $sp;
    }
}
