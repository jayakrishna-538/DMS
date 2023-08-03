<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage(): string
    {
        return ($this->image) ? '/storage/'.$this->image :'/images/demo/profile.png';
    }

    public  function education()
    {
        return $this->hasMany(education::class);
    }

    public  function experience()
    {
        return $this->hasMany(experience::class);
    }

    public  function publications()
    {
        return $this->hasMany(publications::class);
    }

    public  function awards()
    {
        return $this->hasMany(awards::class);
    }

    public  function additionalInfo()
    {
        return $this->hasMany(additional_info::class);
    }

}
