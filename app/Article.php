<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
		'title',
		'body',
		'published_at',
		'excerpt'
	];
	protected $dates = ['published_at'];
	public function setPublishedАtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}
	// Область запроса(область видимости), позволяет использовать в Controller конструкцию published();
	public function scopePublished($query)
	{
		$query->where('published_at','<=',Carbon::now());
	}
	public function scopeUnPublished($query)
	{
		$query->where('published_at','>',Carbon::now());
	}
}
