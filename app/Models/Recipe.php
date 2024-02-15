<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $casts = [
            'components' => 'array'
        ];
    public function setComponentsAttribute($value)
        {
            $components = [];
            foreach ($value as $array_item) {
                if (!is_null($array_item['key'])) {
                    $components[] = $array_item;
                }
            }
            $this->attributes['components'] = json_encode($components);
        }
}
