<?php

namespace App\Providers;

use App\Contracts\Article\IArticleRepository;
use App\Contracts\Banner\IBannerRepository;
use App\Contracts\Blog\IBlogRepository;
use App\Contracts\Coming_soon\IComing_soonRepository;
use App\Contracts\File\IFileRepository;
use App\Contracts\Gallery\IGalleryRepository;
use App\Contracts\Get_in_touch\IGet_in_touchRepository;
use App\Contracts\OurTeam\IOurTeamRepository;
use App\Contracts\Role\IRoleRepository;
use App\Contracts\User\IUserRepository;
use App\Repositories\Article\ArticleRepository;
use App\Repositories\Banner\BannerRepository;
use App\Repositories\Blog\BlogRepository;
use App\Repositories\Coming_soon\Coming_soonRepository;
use App\Repositories\File\FileRepository;
use App\Repositories\Gallery\GalleryRepository;
use App\Repositories\Get_in_touch\Get_in_touchRepository;
use App\Repositories\OurTeam\OurTeamRepository;
use App\Repositories\Role\RoleRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Categorie\CategorieRepository;
use App\Repositories\Product\ProductRepository;
use App\Contracts\Product\IProductRepository;
use App\Contracts\Categorie\ICategorieRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var array|string[]
     */
    public array $singletons = [
        IUserRepository::class => UserRepository::class,
        IRoleRepository::class => RoleRepository::class,
        IFileRepository::class => FileRepository::class,
        IArticleRepository::class => ArticleRepository::class,
        ICategorieRepository::class => CategorieRepository::class,
        IProductRepository::class => ProductRepository::class,
        IOurTeamRepository::class => OurTeamRepository::class,
        IBlogRepository::class => BlogRepository::class,
        IComing_soonRepository::class => Coming_soonRepository::class,
        IBannerRepository::class => BannerRepository::class,
        IGet_in_touchRepository::class => Get_in_touchRepository::class,
        IGalleryRepository::class => GalleryRepository::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
