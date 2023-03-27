<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'SERGIY CHIRICK',
            'title'=>'HAIR STYLE STUDIO',
            'address'=>'м. Луцьк, пр.Волі, 42, ТРЦ "Гранд Волинь"',
            'phone'=>'+380 50 529 9331',
            'social'=>'',
            'lat'=>'50.74519465965592',
            'lng'=>'25.339350696845923',
        ];
    }
}
