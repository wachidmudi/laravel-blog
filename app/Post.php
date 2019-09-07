<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    // Table Name
    public $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = ['title', 'body', 'user_id', 'cover_image', 'slug'];    

    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * Custom date format using Carbon
     * Automatically change the date format after a month have passed
     * @return string
     */
	public function getCreatedAtAttribute()
	{
		// $date = Carbon::parse($this->attributes['created_at']);
		// $month = Carbon::now()->subMonth();

		// if ($date >= $month) {
		// 	Carbon::setlocale('id');
		//     return $date->diffForHumans();
		// }else{
		// 	setlocale(LC_TIME, 'id');
		// 	return $date->formatLocalized('%A, %d %B %Y');		    
		// }

        /**
         * For some reason carbon can't implement localization if the server doesn't have specific language installed
         * So in here i try to implement custom function for Indonesian date only 'dateID()'
         */

        return dateID($this->attributes['created_at'], true);
	}	  

    /**
     * Custom Naming for Image
     * Automatically replace ' ' with %20
     * @return string
     */
    public function getImageAttribute()
    {
        return str_replace(' ', '%20', $this->attributes['cover_image']);
    }   

    /**
     * Custom word amount
     * Automatically change the amount of title
     * @return string
     */
    public function getShortTitleAttribute()
    {
        return Str::words($this->attributes['title'], $words = 10, $end = '...');
    }    

    /**
     * Custom word amount
     * Automatically change the amount of body
     * @return string
     */
    public function getShortBodyAttribute()
    {
        return Str::words(strip_tags(html_entity_decode($this->attributes['body'], ENT_COMPAT, "UTF-8")), $words = 10, $end = '...');
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
                'source'    => 'title',
                'maxLength' => 80,
            ]
        ];
    }    
}
