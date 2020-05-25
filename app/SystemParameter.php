<?php

namespace App;

use App\Traits\ScopeFilterByColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemParameter extends Model
{
    use ScopeFilterByColumn;
    use SoftDeletes;

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'group',
		'subgroup',
		'description',
		'abbreviation',
		'active',
		'updated_at'
	];

    protected $casts = [
		'active' => 'bool'
	];

	public function searchableColumns(): array {
		return  [
			'active' => ['condition' => '=']
		];
	}
}
