<?php

namespace Database\Seeders\Menu;

use App\Models\Menu\Menu;
use App\Models\RoleAndPermission\Enums\RoleType;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();
        Menu::reguard();

        $menus = [
            [
                'title' => 'Translation Manager',
                'slug' => 'translation-manager',
                'url' => route('dashboard.translation.manager', [], false),
                'icon' => 'fas fa-language fa-fw',
                'type' => 'admin',
                'role' => [RoleType::ADMIN, RoleType::USER],
            ],
            [
                'title' => 'Users',
                'slug' => 'users',
                'url' => route('dashboard.users.index', [], false),
                'icon' => 'fas fa-users fa-fw',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            // [
            //     'title' => 'Articles',
            //     'slug' => 'articles',
            //     'url' => route('dashboard.articles.index', [], false),
            //     'icon' => 'far fa-newspaper fa-fw',
            //     'type' => 'admin',
            //     'role' => [RoleType::ADMIN, RoleType::USER],
            //     /*'sub' =>  [
            //         [
            //             'title' => 'Sub Article',
            //             'slug' => 'sub_articles',
            //             'url' => route('dashboard.articles.index', [], false),
            //             'type' => 'admin',
            //             'role' => [RoleType::ADMIN]
            //         ]
            //     ],*/
            // ],
            [
                'title' => 'Categorie',
                'slug' => 'categorie',
                'url' => route('dashboard.categories.index', [], false),
                'icon' => 'fas fa-tags',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Product',
                'slug' => 'product',
                'url' => route('dashboard.products.index', [], false),
                'icon' => 'fas fa-box-open',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Team',
                'slug' => 'team',
                'url' => route('dashboard.our-teams.index', [], false),
                'icon' => 'fas fa-users-cog',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Blog',
                'slug' => 'blog',
                'url' => route('dashboard.blogs.index', [], false),
                'icon' => 'fas fa-blog',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Gallery',
                'slug' => 'gallery',
                'url' => route('dashboard.galleries.index', [], false),
                'icon' => 'fas fa-photo-video',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Get In Touch',
                'slug' => 'get-in-touch',
                'url' => route('dashboard.get_in_touches.index', [], false),
                'icon' => 'fas fa-address-book',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Banner',
                'slug' => 'banner',
                'url' => route('dashboard.banners.index', [], false),
                'icon' => 'fas fa-ad',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Coming Soon',
                'slug' => 'coming-soon',
                'url' => route('dashboard.coming_soons.index', [], false),
                'icon' => 'fas fa-hourglass-half',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Order',
                'slug' => 'order',
                'url' => route('dashboard.orders.index', [], false),
                'icon' => 'fas fa-shopping-cart',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
            [
                'title' => 'Partners',
                'slug' => 'partners',
                'url' => route('dashboard.partners.index', [], false),
                'icon' => 'fas fa-handshake',
                'type' => 'admin',
                'role' => [RoleType::ADMIN],
            ],
        ];

        foreach ($menus as $key => $menu) {
            if (!isset($menu['sort_order'])) {
                $menu['sort_order'] = $key + 1;
            }

            $createdMenu = Menu::create($menu);

            foreach ($menu['sub'] ?? [] as $subMenu) {
                $subMenu['parent_id'] = $createdMenu->id;
                $createdSubMenu = Menu::create($subMenu);

                $createdSubMenu->assignRole($subMenu['role']);
            }

            $createdMenu->assignRole($menu['role']);
        }
    }
}
