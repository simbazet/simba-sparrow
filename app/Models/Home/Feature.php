<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function items() {
        return $this->hasMany(FeatureItems::class, "feature_id");
    }
}
