<?php

use App\Models\Page;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected array $frontPages = [
        ['name' => 'Home', 'route' => 'home', 'order' => 1],
        ['name' => 'About us', 'route' => 'about', 'order' => 2],
        ['name' => 'Our team', 'route' => 'our-team', 'order' => 3],
        ['name' => 'Dental tourism', 'route' => 'tourism', 'order' => 4],
        ['name' => 'Services', 'route' => 'services', 'order' => 5, 'has_submenu' => 1],
        ['name' => 'Endodontics', 'route' => 'endodontics', 'order' => 1, 'fk_parent_page_id' => '5'],
        ['name' => 'Periodontology', 'route' => 'periodontology', 'order' => 2, 'fk_parent_page_id' => '5'],
        ['name' => 'Implantology', 'route' => 'implantology', 'order' => 3, 'fk_parent_page_id' => '5'],
        ['name' => 'Orthodontics', 'route' => 'orthodontics', 'order' => 4, 'fk_parent_page_id' => '5'],
        ['name' => 'Oral surgery', 'route' => 'oral-surgery', 'order' => 5, 'fk_parent_page_id' => '5'],
        ['name' => 'Pediatric dentistry', 'route' => 'pediatric-dentistry', 'order' => 6, 'fk_parent_page_id' => '5'],
        ['name' => 'Teeth whitening', 'route' => 'teeth-whitening', 'order' => 7, 'fk_parent_page_id' => '5'],
        ['name' => 'Contact us', 'route' => 'contact', 'order' => 6],
        ['name' => 'Appointment', 'route' => 'appointment', 'order' => 7, 'is_in_main_menu' => 0]
    ];

    protected array $backPages = [
        ['name' => 'Reservations', 'route' => 'reservations', 'order' => 1],
        ['name' => 'Dentist scheduals', 'route' => 'dentist-scheduals', 'order' => 2],
        ['name' => 'Dentists', 'route' => 'dentists', 'order' => 3],
        ['name' => 'Patients', 'route' => 'patients', 'order' => 4],
        ['name' => 'Services', 'route' => 'services', 'order' => 5],
        ['name' => 'Categories', 'route' => 'categories', 'order' => 6],
        ['name' => 'Users', 'route' => 'users', 'order' => 7],
        ['name' => 'Business hours', 'route' => 'business-hours', 'order' => 8],
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id('page_id');
            $table->foreignId('fk_parent_page_id')->nullable()->references('page_id')->on('pages');
            $table->string('name');
            $table->string('route');
            $table->integer('order')->default(0);
            $table->boolean('is_backend_page')->default(0);
            $table->boolean('is_in_main_menu')->default(1);
            $table->boolean('has_submenu')->default(0);
            $table->boolean('is_active')->default(1);
            $table->softDeletes();
        });

        // ** Default Records Start ** //
        foreach($this->frontPages as $page) {
            Page::firstOrCreate($page);
        }

        foreach($this->backPages as $page) {
            $page['is_backend_page'] = 1;
            Page::firstOrCreate($page);
        }
        // ** Default Records End ** //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
