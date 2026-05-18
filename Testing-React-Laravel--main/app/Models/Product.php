<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Expose _id attribute for MongoDB compatibility in the React frontend.
     */
    public function toArray()
    {
        $array = parent::toArray();
        if (isset($array['id'])) {
            $array['_id'] = $array['id'];
        }
        return $array;
    }
}
