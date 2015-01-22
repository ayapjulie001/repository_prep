<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\File\Services;


use TopHomes\Common\Validators\IValidator;
use TopHomes\File\Repositories\IPhotoRepository;
use TopHomes\File\Utilities\FileFacade;
use TopHomes\File\Utilities\UploadedFileFacade;

class FileService implements IFileService
{
    protected $repository;
    protected $validator;
    protected $file;
    protected $uploaded_file;

    public function __construct(
        IPhotoRepository $repository,
        IValidator $validator,
        UploadedFileFacade $uploaded_file,
        FileFacade $file)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->uploaded_file = $uploaded_file;
        $this->file = $file;
    }

    public function saveUploadedPhoto(Photo $photo)
    {
        $this->validator->validate($photo);

        $this->uploaded_file->save(
            $photo->file,
            $photo->url,
            $photo->file_name
        );

        $this->repository->save($photo);
    }
} 