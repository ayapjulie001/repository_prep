<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\File\Validators;

use TopHomes\Common\Validators\AbstractValidator;

class FileValidator extends AbstractValidator
{
    protected $rules = [
        'image' => 'required|image',
        'size' => 'required|max:10000000',
        'mime' => 'required|in:image/jpeg,image/png,image/gif'
    ];
} 