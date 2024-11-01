<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadBrochure extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name','email','brochure','college_name','college_id','status'
    ];
}
