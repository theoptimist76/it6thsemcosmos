<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DemoProducts extends Model
{
    //
    use Notifiable;
    public $table = "demo_products";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'p_name', 'p_price', 'p_expiry', 'p_image', 'p_status'];
}

