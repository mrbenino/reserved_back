<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Reserveds extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $records = [];

    $records[] = [
      'hall' => 'Серая',
      'date' => '26-01-2022',
      'name' => 'NoBody'
    ];

    $records[] = [
      'hall' => 'Жолтая',
      'date' => '29-11-2021',
      'name' => 'Иван'
    ];

    \DB::table('reserveds')->insert($records);
  }
}
