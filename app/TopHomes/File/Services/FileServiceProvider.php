<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\File\Services;


use Illuminate\Support\ServiceProvider;
use TopHomes\File\Repositories\PhotoEloquent;
use Photo;

class FileServiceProvider extends ServiceProvider
{
    private $root = 'Modules\File';

    public function boot()
    {
        $this->bindPhoto();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->bindRepository();
        $this->bindService();
    }

    public function bindRepository()
    {
        $this->app->bind(
            $this->root . '\Repositories\PhotoRepositoryInterface',
            function () {
                return new PhotoEloquent(new Photo);
            }
        );
    }

    public function bindService()
    {
        $this->app->bind(
            $this->root . '\Services\PhotoServiceInterface',
            function () {
                $repository = $this->app->make($this->root . '\Repositories\PhotoRepositoryInterface');
                $validator = $this->app->make($this->root . '\Validators\PhotoValidator');
                $uploadedFileFacade = $this->app->make($this->root . '\Utilities\UploadedFileFacade');
                $fileFacade = $this->app->make($this->root . 'Modules\File\Utilities\FileFacade');

                return new FileService($repository, $validator, $uploadedFileFacade, $fileFacade);
            }
        );
    }
}