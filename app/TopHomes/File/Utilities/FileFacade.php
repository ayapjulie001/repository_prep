<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\File\Utilities;

use Exception;
use Illuminate\Filesystem\Filesystem;

class FileFacade
{
    protected $file;

    function __construct(Filesystem $file)
    {
        $this->file = $file;
    }

    /**
     * create the directory specified with open permission
     * @param $dir - the directory to be created
     * @return bool
     * @throws \Exception
     */
    public function makeDirectory($dir)
    {

        if (!$this->file->exists($dir)) {
            $success = $this->file->makeDirectory($dir, 0777, true);

            if (!$success) {
                throw new Exception('unable to create specified dir:' . $dir);
            }
        }

        return true;
    }

    /**
     * get the files from the specified directory
     * @param $dir - the directory
     * @return mixed - the files
     */
    public function getFullPathFileNames($dir)
    {
        return $this->file->files($dir);
    }

    /**
     * @param $dir
     * @return array
     */
    public function getFileNames($dir)
    {
        $files = $this->getFullPathFileNames($dir);

        $fileNames = [];
        foreach ($files as $file) {
            $fileNames[] = $this->getFileName($file);
        }

        return $fileNames;
    }

    /**
     * @param $file
     * @return mixed
     */
    public function getFileName($file)
    {
        $temp = explode('/', $file);
        $fileName = $temp[count($temp) - 1];

        return $fileName;
    }

    public function getFullPathFileExtension($file)
    {
        $fileName = $this->getFileName($file);
        $extension = $this->getFileExtension($fileName);

        return $extension;
    }

    /**
     * @param $fileName
     * @return mixed
     */
    public function getFileExtension($fileName)
    {
        $temp = explode('.', $fileName);
        $extension = $temp[count($temp) - 1];

        return $extension;
    }

    public function generateFileName($file, $name)
    {
        $fileName = $this->getFileName($file);
        $fileExtension = $this->getFileExtension($fileName);

        return $name . '.' . $fileExtension;
    }

    public function moveFile($filePath, $target)
    {
        return $this->file->move($filePath, $target);
    }

    public function cleanDirectory($dir)
    {
        return $this->file->cleanDirectory($dir);
    }

    public function getPublicPath($dir)
    {
        return public_path($dir);
    }

    public function deleteFile($dir, $fileName)
    {
        $filePath = $dir . '/' . $fileName;

        $this->file->delete($filePath);
    }
} 