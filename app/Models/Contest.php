<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;

class Contest extends Model
{
    //protected $table = '';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
        'qty',
        'init_date',
        'end_date',
        'enrollment_date_end',
        'description',
        'remuneration_type_id',
        'working_day_type_id',
        'course_id',
        'category_type_id',
        'category_id',
        'area_id',
        'orientation_id',
        //'departament_id',
    ];

    protected $dispatchesEvents = [
        'creating' => GenerateSlug::class,
    ];


    /**
     * ------------------------------------------
     * RELATIONSHIPS
     * -----------------------------------------
     */
    public function remuneration_type()
    {
        return $this->belongsTo(RemunerationType::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function category_type()
    {
        return $this->belongsTo(CategoryType::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function working_day_type()
    {
        return $this->belongsTo(WorkingDayType::class);
    }

    public function orientation()
    {
        return $this->belongsTo(Orientation::class);
    }

    public function getCourse()
    {
        return Course::find($this->course_id);
    }

    //public function departament()
    //{
    //    return $this->belongsTo(Departament::class);
    //}
}

