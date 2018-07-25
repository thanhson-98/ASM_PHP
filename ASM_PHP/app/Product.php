<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 7/25/2018
 * Time: 2:06 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;
}