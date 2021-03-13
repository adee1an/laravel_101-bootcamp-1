# Larvel 101 - Bootcamp
> ลิงค์ดาวโหลด:  https://laravel.com/docs/7.x/installation
## Note
- `composer global require laravel/installer`  // ติดตั้งแค่ครั้งเดียว
- `composer create-project --prefer-dist laravel/laravel:^7.0 blog` // blog เป็นชื่อโปรเจค
- `php artisan make:migration create_posts_table` //สร้างตารางฐานข้อมูล
- `php artisan migrate`


### คำสั่งในการจำลองข้อมูล
- `php artisan make:model Post` // Post ชื่อ model
    > [/app/Post.php](/app/Post.php)
- `php artisan make:factory PostFactory --model=Post` // PostFactory ชื่อ factory // Post ชื่อ model 
    > [/database/factories/PostFactory.php](/database/factories/PostFactory.php)
- `php artisan make:seeder PostsTableSeeder` //Posts ชื่อ seeder
    > [/database/seeds/PostsTableSeeder.php](/database/seeds/PostsTableSeeder.php)
    > [/database/seeds/DatabaseSeeder.php](/database/seeds/DatabaseSeeder.php)
- `composer dump-autoload`
- `php artisan db:seed`
