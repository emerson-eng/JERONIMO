<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificate
 *
 * @property $id
 * @property $name
 * @property $surname_paternal
 * @property $surname_maternal
 * @property $module
 * @property $average
 * @property $cycle
 * @property $hours_module
 * @property $resolution
 * @property $date_resolution
 * @property $start_date_module
 * @property $end_date_module
 * @property $capacity
 * @property $practice_center
 * @property $hours_practice
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Certificate extends Model
{

    static $rules = [
		'name_cetpro' => 'required',
		'name' => 'required',
		'surname_paternal' => 'required',
		'surname_maternal' => 'required',
		'module' => 'required',
		'average' => 'required',
		'cycle' => 'required',
		'hours_module' => 'required',
		'resolution' => 'required',
		'date_resolution' => 'required',
		'start_date_module' => 'required',
		'end_date_module' => 'required',
		'practice_center' => 'required',
		'hours_practice' => 'required',
        // 'logo' => 'required|mimes:jpeg,png,jpg,gif'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_cetpro','name','surname_paternal','surname_maternal','module','average','cycle','hours_module','resolution','date_resolution','start_date_module','end_date_module','capacity1','capacity2','capacity3','capacity4','capacity5','capacity6','capacity7','capacity8','practice_center','hours_practice'];



}
