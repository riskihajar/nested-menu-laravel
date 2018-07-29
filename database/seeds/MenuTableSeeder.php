<?php

use Illuminate\Database\Seeder;

use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'induk' => null,
                'label' => 'Home',
                'link' => '#'
            ],
            [
                'induk' => null,
                'label' => 'About Us',
                'link' => '#'
            ],
            [
                'induk' => 'About Us',
                'label' => 'Visi',
                'link' => '#'
            ],
            [
                'induk' => 'About Us',
                'label' => 'Misi',
                'link' => '#'
            ],
            [
                'induk' => null,
                'label' => 'Galeri',
                'link' => '#'
            ],
            [
                'induk' => 'Galeri',
                'label' => 'Gambar',
                'link' => '#'
            ],
            [
                'induk' => 'Gambar',
                'label' => 'Kegiatan',
                'link' => '#'
            ],
            [
                'induk' => 'Gambar',
                'label' => 'Program Kerja',
                'link' => '#'
            ],
            [
                'induk' => 'Galeri',
                'label' => 'Video',
                'link' => '#'
            ],
            [
                'induk' => null,
                'label' => 'News',
                'link' => '#'
            ],
        ];

        Menu::truncate();

        foreach($data as $item){
            $induk_id = null;

            if(data_get($item, 'induk')){
                $induk_id = Menu::where('label', data_get($item, 'induk'))->value('id');
            }

            Menu::create([
                'induk_id' => $induk_id,
                'label' => data_get($item, 'label'),
                'link' => data_get($item, 'link'),
            ]);
        }
    }
}
