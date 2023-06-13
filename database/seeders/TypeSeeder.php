<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['website', 'e-commerce', 'api', 'database', 'forum', 'social', 'multimedia'];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->slug = Str::slug($type, '-');
            $newType->save();
        }
    }
}
//     public function run()
//     {

//         $technologies = ['website', 'e-commerce', 'api', 'database', 'forum', 'social', 'multimedia'];
//         foreach ($technologies as $technology) {
//             $newTag = new Technology();
//             $newTag->name = $technology;
//             $newTag->slug = Str::slug($technology, '-');
//             $newTag->save();
//         }
//     }
// }
