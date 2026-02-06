<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    private $services = [
        ['fk_category_id' => 1, 'name' => 'Root Canal Filling (1 canal)', 'order' => 1],
        ['fk_category_id' => 1, 'name' => 'Root Canal Filling (2 canal)', 'order' => 2],
        ['fk_category_id' => 1, 'name' => 'Root Canal Filling (3 canal)', 'order' => 3],

        ['fk_category_id' => 2, 'name' => 'Removal of hard and soft plaque from teeth', 'order' => 1],
        ['fk_category_id' => 2, 'name' => 'Periodontal complete treatment', 'order' => 2],
        ['fk_category_id' => 2, 'name' => 'Treatment of periodontal pockets per tooth', 'order' => 3],
        ['fk_category_id' => 2, 'name' => 'Gingivectomy', 'order' => 4],

        ['fk_category_id' => 3, 'name' => 'Initial implant consultation', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 3, 'name' => 'Sinus lift', 'order' => 2],
        ['fk_category_id' => 3, 'name' => 'One tooth replacement', 'order' => 3],
        ['fk_category_id' => 3, 'name' => 'More than one tooth replacement', 'order' => 4],
        ['fk_category_id' => 3, 'name' => 'All teeth replacement ', 'order' => 5],
        ['fk_category_id' => 3, 'name' => 'Bone Augmentation', 'order' => 6],
        ['fk_category_id' => 3, 'name' => 'All on 4 ', 'order' => 7],
        ['fk_category_id' => 3, 'name' => 'All on 6', 'order' => 8],

        ['fk_category_id' => 4, 'name' => 'Initial braces consultation', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 4, 'name' => 'Mobile braces', 'order' => 2],
        ['fk_category_id' => 4, 'name' => 'Fixed braces ', 'order' => 3],
        ['fk_category_id' => 4, 'name' => 'Aesthetically fixed jaw apparatus', 'order' => 4],
        ['fk_category_id' => 4, 'name' => 'Splint (Night guard) ', 'order' => 5],

        ['fk_category_id' => 5, 'name' => 'A routine tooth extraction', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 5, 'name' => 'Complicated tooth extraction', 'order' => 2],
        ['fk_category_id' => 5, 'name' => 'Extraction of impacted tooth', 'order' => 3, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 5, 'name' => 'Incision of abscesses', 'order' => 4],
        ['fk_category_id' => 5, 'name' => 'Cystectomy', 'order' => 5],
        ['fk_category_id' => 5, 'name' => 'Removing frenulum', 'order' => 6],
        ['fk_category_id' => 5, 'name' => 'Apicoectomy', 'order' => 7],
        ['fk_category_id' => 5, 'name' => 'Surgical extraction of wisdom tooth', 'order' => 8],

        ['fk_category_id' => 6, 'name' => 'Extraction of milk tooth', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 6, 'name' => 'Filling', 'order' => 2],
        ['fk_category_id' => 6, 'name' => 'Watering firura ', 'order' => 3],
        ['fk_category_id' => 6, 'name' => 'Removal of soft deposits', 'order' => 4],

        ['fk_category_id' => 7, 'name' => 'Initial whitening consultation', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 7, 'name' => 'Home whitening', 'order' => 2],
        ['fk_category_id' => 7, 'name' => '“White Smile” robot whitening', 'order' => 3],
        ['fk_category_id' => 7, 'name' => 'Whitening dental surgery', 'order' => 4],
        ['fk_category_id' => 7, 'name' => 'The treated tooth whitening', 'order' => 5],
        ['fk_category_id' => 7, 'name' => 'Teeth polish/stain removal for adults', 'order' => 6, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 7, 'name' => 'Teeth polish/stain removal for children', 'order' => 7, 'is_able_for_reservation' => 1],


        ['fk_category_id' => 8, 'name' => 'Initial prosthetics consultation', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 8, 'name' => 'Initial prosthesis consultation', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 8, 'name' => 'Metal-ceramic crown', 'order' => 2],
        ['fk_category_id' => 8, 'name' => 'All-ceramic crowns (specially designed)', 'order' => 3],
        ['fk_category_id' => 8, 'name' => 'Veneers', 'order' => 4],
        ['fk_category_id' => 8, 'name' => 'Laminates', 'order' => 5],
        ['fk_category_id' => 8, 'name' => 'Temporary crown', 'order' => 6],
        ['fk_category_id' => 8, 'name' => 'Temporary crowns made in laboratory', 'order' => 7],
        ['fk_category_id' => 8, 'name' => 'Total prosthesis', 'order' => 8],
        ['fk_category_id' => 8, 'name' => 'Total prosthesis (top + bottom)', 'order' => 9],
        ['fk_category_id' => 8, 'name' => 'Repair of dentures', 'order' => 10, 'is_able_for_reservation' => 1],

        ['fk_category_id' => 9, 'name' => 'Examination and basic hygiene', 'order' => 1, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 9, 'name' => 'Adult examination', 'order' => 2, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 9, 'name' => 'Child examination (5 years)', 'order' => 3, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 9, 'name' => 'Child examination (6-12 years)', 'order' => 4, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 9, 'name' => 'CBCT/CT scan (3D) X-ray', 'order' => 5, 'is_able_for_reservation' => 1],
        ['fk_category_id' => 9, 'name' => 'Panoramic/OPG X-ray', 'order' => 6, 'is_able_for_reservation' => 1],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->services as $service) {
            Service::firstOrCreate($service);
        }
    }
}
