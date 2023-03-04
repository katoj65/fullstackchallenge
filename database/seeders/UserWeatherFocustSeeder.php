<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserWeatherFocustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

$user[]=['firstname'=>'Joshua','lastname'=>'Kato','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Cyrus','lastname'=>'Kato','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Draken','lastname'=>'Wasswa','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Carol','lastname'=>'Nalubowa','gender'=>'female','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Esther','lastname'=>'Nabbale','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Ivan','lastname'=>'Kintu','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Moses','lastname'=>'Muliika','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Ronald','lastname'=>'Kayinga','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Osman','lastname'=>'Buyondo','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Nicholas','lastname'=>'Sema','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Joseph','lastname'=>'Ssempijja','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Tracy','lastname'=>'Nattabi','gender'=>'female','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Anitah','lastname'=>'Nambirige','gender'=>'female','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'James','lastname'=>'Muwonge','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Esther','lastname'=>'Nampalla','gender'=>'female','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Catherine','lastname'=>'Namwanjje','gender'=>'female','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Janipher','lastname'=>'Nakintu','gender'=>'female','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Frank','lastname'=>'Muhumuza','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Joseph','lastname'=>'Sentongo','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Peter','lastname'=>'Wasswa','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];
$user[]=['firstname'=>'Micheal','lastname'=>'Kato','gender'=>'male','lat'=>'0.347596','long'=>'32.582520'];




/**
 * Insert seed data
 */

foreach($user as $item){
DB::table('users_weather_focust')->insert([
'firstname'=>$item['firstname'],
'lastname'=>$item['lastname'],
'gender'=>$item['gender'],
'lat'=>$item['lat'],
'long'=>$item['long']
]);
}






    }
}
