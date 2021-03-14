# Larvel 101 - Bootcamp
> ลิงค์ดาวโหลด:  https://laravel.com/docs/7.x/installation
## Note
- `composer global require laravel/installer`  // ติดตั้งแค่ครั้งเดียว
- `composer create-project --prefer-dist laravel/laravel:^7.0 blog` // blog เป็นชื่อโปรเจค
- `php artisan make:migration create_posts_table` //สร้างตารางฐานข้อมูล
- `php artisan migrate`

### Clone โปรเจค
> https://github.com/taveevut/laravel_101-bootcamp<br/>
> copy: https://github.com/taveevut/laravel_101-bootcamp.git


- `git clone https://github.com/taveevut/laravel_101-bootcamp.git && cd laravel_101-bootcamp/`
- code.
- composer install
- duplicate `.evn.example` and replace to `.env`
- change connection: `DB_DATABASE`
- `php artisan key:generate`
- `php artisan serve`

### คำสั่งในการจำลองข้อมูล
- `php artisan make:model Post` // Post ชื่อ model
    > [/app/Post.php](/app/Post.php)
- `php artisan make:factory PostFactory --model=Post` // PostFactory ชื่อ factory // Post ชื่อ model 
    > [/database/factories/PostFactory.php](/database/factories/PostFactory.php)
- `php artisan make:seeder PostsTableSeeder` //Posts ชื่อ seeder
    > [/database/seeds/PostsTableSeeder.php](/database/seeds/PostsTableSeeder.php) <br/>
    > [/database/seeds/DatabaseSeeder.php](/database/seeds/DatabaseSeeder.php)
- `composer dump-autoload`
- `php artisan db:seed`

### ติดตั้ง Laravel Module
> อ้างอิง: https://nwidart.com/laravel-modules/v6/installation-and-setup
- `composer require nwidart/laravel-modules`
- `php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"`
- เปิดไฟล์ `composer.json` แล้วหา `psr-4`
    ```json
    {
        "autoload": {
            "psr-4": {
                "App\\": "app/",
                "Modules\\": "Modules/"
            }
        }
    }
    ```
- รันคำสั่ง `composer dump-autoload`
