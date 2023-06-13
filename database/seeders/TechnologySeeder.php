<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $technologies =
            [
                'HTML',
                'CSS',
                'JS',
                'Vue',
                'Vite',
                'PHP',
                'Laravel',
            ];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->slug = Str::slug($technology, '-');
            $newTechnology->save();
        }
    }
}
// public function run()
//     {
//         $types = [
//             "HTML",
//             "CSS",
//             "JS",
//             "Vue",
//             "Vite",
//             "PHP",
//             "Laravel",
//         ];
//         foreach ($types as $type) {
//             $newType = new Type();
//             $newType->name = $type;
//             $newType->slug = Str::slug($type, '-');
//             $newType->save();
//         }
//     }
// }
