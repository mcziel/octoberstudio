<?php namespace OctoberStudio\Octoberstudio\Models;

use Model;
use Str;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'octoberstudio_octoberstudio_projects';

    public $attachOne = [
        'thumb_image' => 'System\Models\File',
        'featured_image' => 'System\Models\File',
        'concept_image' => 'System\Models\File',
    ];

    public $attachMany = [
        'development_images' => 'System\Models\File',
    ];

    public function beforeSave()
    {
        $this->slug = Str::slug($this->name);
    }


}
