{{-- Category table jonno ki aram category migrations file create korobo .. command "php artisan make:model Category -m" --}}

{{-- এই কমান্ডের মাধ্যমে ডাটাবেজে সমস্ত পেন্ডিং Migration ফাইল রান হয় "php artisan migrate" --}}


{{-- এই কমান্ডের মাধ্যমে ডাটাবেজের সব টেবিল ড্রপ বা মুছে ফেলা হয় (Dropping all tables) এবং শুরু থেকে নতুন করে সবগুলো Migration আবার রান করা হয়। "php artisan migrate:fresh" --}}


step 01: The Bootstrap and Vue scaffolding provided by Laravel is located in the laravel/ui Composer package, which may
be installed using Composer: "composer require laravel/ui"


step 02 : you may install the frontend scaffolding using the ui Artisan command: "php artisan ui bootstrap --auth"

step 03: "npm install && npm run dev"
