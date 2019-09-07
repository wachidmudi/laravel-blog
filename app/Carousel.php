<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Carousel extends Model
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
     * Change link to a right format
     * Automatically change the link attribute to have 'http://' at first string
     * @return string
     */	
	public function getLinkAttribute()
	{
		$address = $this->attributes['link'];

		if (substr($address, 0, 4) !== 'http') {
		    return 'http://' . $address;
		}else {
            return $address;
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
