<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;

class Agenda extends Model
{
    use Sluggable;
    protected $fillable = ['name', 'description', 'date'];
    // protected $dates = ['date'];
    
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
     * Custom date format using Carbon
     * Automatically change the date format from datepicker into DB
     * @param $value
     * @return string
     */    
	public function setDateAttribute($value) 
	{
	    $this->attributes['date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
	}

    /**
     * Custom date format using Carbon
     * Automatically change into localized date format
     * @return string
     */    
    public function getDateAttribute() 
    {
        $date = Carbon::parse($this->attributes['date']);
        setlocale(LC_TIME, 'id'); 

        return $date->formatLocalized('%A, %d %B %Y');
    }
    
    /**
     * Custom word amount
     * Automatically change the amount of name
     * @return string
     */
    public function getShortNameAttribute()
    {
        return Str::words($this->attributes['name'], $words = 6, $end = '...');
    }    

    /**
     * Custom word amount
     * Automatically change the amount of description
     * @return string
     */
    public function getShortDescriptionAttribute()
    {
        return Str::words($this->attributes['description'], $words = 20, $end = '...');
    }
             
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source'    => 'name',
                'maxLength' => 80,
            ]
        ];
    } 
}
