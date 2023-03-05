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
$user[]=['firstname'=>'Cyrus','lastname'=>'Kato','gender'=>'male','lat'=>'35.6839','long'=>'139.7744'];
$user[]=['firstname'=>'Draken','lastname'=>'Wasswa','gender'=>'male','lat'=>'40.6943','long'=>'-73.9249'];
$user[]=['firstname'=>'Carol','lastname'=>'Nalubowa','gender'=>'female','lat'=>'19.4333','long'=>'-99.1333'];
$user[]=['firstname'=>'Esther','lastname'=>'Nabbale','gender'=>'male','lat'=>'42.6384261','long'=>'12.674297'];
$user[]=['firstname'=>'Ivan','lastname'=>'Kintu','gender'=>'male','lat'=>'-28.8166236','long'=>'24.991639'];
$user[]=['firstname'=>'Moses','lastname'=>'Muliika','gender'=>'male','lat'=>'-1.9646631','long'=>'30.0644358'];
$user[]=['firstname'=>'Ronald','lastname'=>'Kayinga','gender'=>'male','lat'=>'-6.5247123','long'=>'35.7878438'];
$user[]=['firstname'=>'Osman','lastname'=>'Buyondo','gender'=>'male','lat'=>'-24.7761086','long'=>'134.755'];
$user[]=['firstname'=>'Nicholas','lastname'=>'Sema','gender'=>'male','lat'=>'22.3511148','long'=>'78.6677428'];
$user[]=['firstname'=>'Joseph','lastname'=>'Ssempijja','gender'=>'male','lat'=>'35.000074','long'=>'104.999927'];
$user[]=['firstname'=>'Tracy','lastname'=>'Nattabi','gender'=>'female','lat'=>'36.638392','long'=>'127.6961188'];
$user[]=['firstname'=>'Anitah','lastname'=>'Nambirige','gender'=>'female','lat'=>'61.0666922','long'=>'-107.991707'];
$user[]=['firstname'=>'James','lastname'=>'Muwonge','gender'=>'male','lat'=>'59.6749712','long'=>'14.5208584'];
$user[]=['firstname'=>'Esther','lastname'=>'Nampalla','gender'=>'female','lat'=>'55.670249','long'=>'10.3333283'];
$user[]=['firstname'=>'Catherine','lastname'=>'Namwanjje','gender'=>'female','lat'=>'56.8406494','long'=>'24.7537645'];
$user[]=['firstname'=>'Janipher','lastname'=>'Nakintu','gender'=>'female','lat'=>'-10.3333333','long'=>'-53.2'];
$user[]=['firstname'=>'Frank','lastname'=>'Muhumuza','gender'=>'male','lat'=>'50.6402809','long'=>'4.6667145'];
$user[]=['firstname'=>'Joseph','lastname'=>'Sentongo','gender'=>'male','lat'=>'46.603354','long'=>'1.8883335'];
$user[]=['firstname'=>'Peter','lastname'=>'Wasswa','gender'=>'male','lat'=>'25.0742823','long'=>'55.1885387'];
$user[]=['firstname'=>'Micheal','lastname'=>'Kato','gender'=>'male','lat'=>'25.6242618','long'=>'42.3528328'];




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
