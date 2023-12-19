<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EntityFileRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Not a valid file, don't go further
        if ($value instanceof UploadedFile && !$value->isValid()) {
            return false;
        }

        // Block any hacking shenanigans
        if ($this->shouldBlockPhpUpload($value, [])) {
            return false;
        }

        if (empty($value->getPath())) {
            return false;
        }

        $validExtensions = explode(',', 'jpeg,png,jpg,gif,webp,pdf,xls,xlsx,mp3');
        if (in_array($value->guessExtension(), $validExtensions)) {
            return true;
        }

        // It wasn't an image, maybe it's an audio file
        if (empty($value->getClientOriginalExtension())) {
            return false;
        }

        return !(!in_array($value->getClientOriginalExtension(), ['mp3', 'ogg', 'json']))



        ;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.mimes', ['values' => 'jpg, jpeg, png, gif, webp, pdf, xls(x), mp3, ogg, json']);
    }

    protected function shouldBlockPhpUpload($value, $parameters)
    {
        if (in_array('php', $parameters)) {
            return false;
        }

        $phpExtensions = [
            'php', 'php3', 'php4', 'php5', 'phtml',
        ];

        return ($value instanceof UploadedFile)
            ? in_array(trim(mb_strtolower($value->getClientOriginalExtension())), $phpExtensions)
            : in_array(trim(mb_strtolower($value->getExtension())), $phpExtensions);
    }
}
