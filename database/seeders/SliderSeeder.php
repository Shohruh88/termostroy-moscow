<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        Slider::create(['title' => 'Центральный телеграф', 'description' => '', 'image_class' => 'bg-moscow', 'link' => route('contact')]);
        Slider::create(['title' => 'Moscow', 'description' => '', 'image_class' => 'bg-moscow_night', 'link' => null]);
        Slider::create(['title' => 'ЖК Capital Towers', 'description' => '', 'image_class' => 'bg-moscow__second', 'link' => null]);
         Slider::create(['title' => 'Arcos', 'description' => '', 'image_class' => 'bg_arcus', 'link' => null]);
        // Qo'shimcha slidlar qo'shishingiz mumkin
    }
}