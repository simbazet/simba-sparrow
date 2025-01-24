<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    public function features() {
        return $this->hasMany(PricingItems::class, 'pricing_id');
    }
}
