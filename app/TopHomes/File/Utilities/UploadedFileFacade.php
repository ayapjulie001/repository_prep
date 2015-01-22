<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\File\Utilities;


class UploadedFileFacade
{
    public function get($file)
    {
        return $file;
    }

    public function save($file, $location, $name = null)
    {
        return $file->move($location, $name);
    }

    public function getRealPath($file)
    {
        return $file->getRealPath();
    }

    public function getName($file)
    {
        return $file->getClientOriginalName();
    }

    public function getExtension($file)
    {
        return $file->getClientOriginalExtension();
    }

    public function getSize($file)
    {
        return $file->getSize();
    }
} 