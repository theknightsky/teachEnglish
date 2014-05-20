<?php

class Report extends \Eloquent {
	protected $table = 'reports';
	protected $fillable = ['name','overview','vocab','phrases'];
}