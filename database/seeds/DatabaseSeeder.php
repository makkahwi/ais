<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(ClassroomSeeder::class);
    $this->call(DaySeeder::class);
    $this->call(LevelSeeder::class);
    $this->call(RoleSeeder::class);
    $this->call(semSeeder::class);
    $this->call(StatusSeeder::class);
    $this->call(TimeSeeder::class);
    $this->call(UserSeeder::class);
    $this->call(YearSeeder::class);

    // Fake Data Factories

    /*
    factory(App\Models\contacts::class, 100)->create();
    factory(App\Models\attendances::class, 5000)->create();
    factory(App\Models\courses::class, 50)->create();
    factory(App\Models\exams::class, 100)->create();
    factory(App\Models\marks::class, 500)->create();
    factory(App\Models\relatives::class, 50)->create();
    factory(App\Models\staff::class, 100)->create();
    factory(App\Models\student::class, 300)->create();
    factory(App\Models\users::class, 400)->create();

    try {
      factory(App\Models\sches::class, 300)->create();
    } catch(Exception $e) {

      if($this->failures > 5) {
        print_r("Seeder Error. Failure count for current entity: " . $this->failures);
        return;
      }
      
      $this->failures++;
      $this->run(); // retry again until the number of failure is greater than 5
    }
    */
  }
}
