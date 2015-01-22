<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:46 PM
 */

namespace TopHomes\Contact\Services;


use Illuminate\Support\ServiceProvider;
use AdminMessage;
use TopHomes\Contact\Repositories\ContactEloquent;
use TopHomes\Contact\Validators\ContactValidator;

class ContactServiceProvider extends ServiceProvider {

    private $root = 'TopHomes\Contact';

    function boot()
    {
        $this->bindContact();
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->bindRepository();
        $this->bindValidator();
        $this->bindService();
    }

    private function bindContact()
    {
        $this->app->make($this->root . '\Bindings\ContactBinding')->bind();
    }

    private function bindRepository()
    {
        $this->app->bind(
            $this->root . '\Repositories\IContactRepository',
            function () {
                return new ContactEloquent(new AdminMessage);
            }
        );
    }

    private function bindService()
    {
        $this->app->bind(
            $this->root . '\Services\IContactService',
            function () {
                $repository = $this->app->make($this->root . '\Repositories\IContactRepository');

                return new ContactService($repository);
            }
        );
    }

    private function bindValidator()
    {
        $this->app->bind(
            $this->root . '\Validators\ContactValidator',
            function () {
                return new ContactValidator($this->app['validator']);
            }
        );
    }
}
