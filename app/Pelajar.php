<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $table = 'pelajar';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','pendidikan','alamat','avatar'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.jpg');
        }

        return asset('images/' .$this->avatar);
    }
}
