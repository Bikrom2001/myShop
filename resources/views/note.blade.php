{{-- Category table jonno ki aram category migrations file create korobo .. command "php artisan make:model Category -m" --}}

{{-- এই কমান্ডের মাধ্যমে ডাটাবেজে সমস্ত পেন্ডিং Migration ফাইল রান হয় "php artisan migrate" --}}


{{-- এই কমান্ডের মাধ্যমে ডাটাবেজের সব টেবিল ড্রপ বা মুছে ফেলা হয় (Dropping all tables) এবং শুরু থেকে নতুন করে সবগুলো Migration আবার রান করা হয়। "php artisan migrate:fresh" --}}


step 01: The Bootstrap and Vue scaffolding provided by Laravel is located in the laravel/ui Composer package, which may
be installed using Composer: "composer require laravel/ui"


step 02 : you may install the frontend scaffolding using the ui Artisan command: "php artisan ui bootstrap --auth"

step 03: "npm install && npm run dev"


{{-- আপনার তৈরি করা AdminSeeder টি ডাটাবেজে রান করার জন্য টার্মিনালে নিচের কমান্ডটি দিন : php artisan make:seeder AdminSeeder --}}

{{-- আপনার তৈরি করা UserSeeder টি ডাটাবেজে রান করার জন্য টার্মিনালে নিচের কমান্ডটি দিন : php artisan make:seeder UserSeeder  --}}

{{-- database fresh migration run korchhen : php artisan migrate:fresh --}}

{{-- run hoye data database-e insert hoyeche.:  --}}


{{-- এই কমান্ডটির মাধ্যমে আপনি আপনার লারাভেল প্রজেক্টে Admin ফোল্ডারের ভেতরে AdminDashboardController.php নামের কন্ট্রোলারটি সফলভাবে তৈরি করেছেন। php artisan make:controller Admin/AdminDashboardController --}}


{{-- Class 33  is start this files --}}

{{-- SubCategory মডেল এবং এর সাথে একটি মাইগ্রেশন ফাইল (create_sub_categories_table) সফলভাবে তৈরি করেছেন। " php artisan make:model SubCategory -m " --}}


{{-- এই কমান্ডটির মাধ্যমে আপনি আপনার লারাভেল প্রজেক্টে Brand মডেল এবং এর সাথে একটি মাইগ্রেশন ফাইল সফলভাবে তৈরি করেছেন। "php artisan make:model Brand -m" --}}

{{-- এই কমান্ডটির মাধ্যমে আপনি আপনার লারাভেল প্রজেক্টে Product মডেল এবং এর সাথে একটি মাইগ্রেশন ফাইল (create_products_table) সফলভাবে তৈরি করেছেন। "php artisan make:model Product -m" --}}


{{-- এই কমান্ডটির মাধ্যমে আপনি আপনার লারাভেল প্রজেক্টে ProductImage মডেল এবং এর সাথে একটি মাইগ্রেশন ফাইল (create_product_images_table) সফলভাবে তৈরি করেছেন। "php artisan make:model ProductImage -m" --}}


{{-- এই কমান্ডটির মাধ্যমে আপনি আপনার লারাভেল প্রজেক্টে Order মডেল এবং এর সাথে একটি মাইগ্রেশন ফাইল (create_orders_table) সফলভাবে তৈরি করেছেন। "php artisan make:model Order -m" --}}