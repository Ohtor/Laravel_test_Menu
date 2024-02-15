<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $casts = [
            'dishes' => 'array'
        ];
    public function setDishesAttribute($value)
        {
            $dishes = [];
            foreach ($value as $array_item) {
                if (!is_null($array_item)) {
                    $dishes[] = $array_item;
                }
            }
            $this->attributes['dishes'] = json_encode($dishes);
        }
}
