<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Gallery extends Model
{
    /**
     * Custom date format using Carbon
     * Automatically change the date format after a month have passed
     * @return string
     */
	public function getCreatedAtAttribute()
	{
		$date = Carbon::parse($this->attributes['created_at']);
		$month = Carbon::now()->subMonth();

		if ($date >= $month) {
			Carbon::setlocale('id');
		    return $date->diffForHumans();
		}else{
			setlocale(LC_TIME, 'id');
			return $date->formatLocalized('%A, %d %B %Y');		    
		}
	}

    /**
     * Custom Naming for Image
     * Automatically replace ' ' with %20
     * @return string
     */
    public function getImageAttribute()
    {
        return str_replace(' ', '%20', $this->attributes['image']);
    } 		
}
