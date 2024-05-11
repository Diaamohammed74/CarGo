<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['governrate_id' => 1, 'city_name_ar' => '15 مايو', 'city_name_en' => '15 May'],
            ['governrate_id' => 1, 'city_name_ar' => 'الازبكية', 'city_name_en' => 'Al Azbakeyah'],
            ['governrate_id' => 1, 'city_name_ar' => 'البساتين', 'city_name_en' => 'Al Basatin'],
            ['governrate_id' => 1, 'city_name_ar' => 'التبين', 'city_name_en' => 'Tebin'],
            ['governrate_id' => 1, 'city_name_ar' => 'الجمالية', 'city_name_en' => 'El-Gamaleya'],
            ['governrate_id' => 1, 'city_name_ar' => 'الحلمية', 'city_name_en' => 'Helmeyat Alzaytoun'],
            ['governrate_id' => 1, 'city_name_ar' => 'الخليفة', 'city_name_en' => 'El-Khalifa'],
            ['governrate_id' => 1, 'city_name_ar' => 'الدراسة', 'city_name_en' => 'El darrasa'],
            ['governrate_id' => 1, 'city_name_ar' => 'الدرب الاحمر', 'city_name_en' => 'Aldarb Alahmar'],
            ['governrate_id' => 1, 'city_name_ar' => 'الرحاب', 'city_name_en' => 'Rehab'],
            ['governrate_id' => 1, 'city_name_ar' => 'الزاوية الحمراء', 'city_name_en' => 'Zawya al-Hamra'],
            ['governrate_id' => 1, 'city_name_ar' => 'الزمالك', 'city_name_en' => 'Zamalek'],
            ['governrate_id' => 1, 'city_name_ar' => 'الزيتون', 'city_name_en' => 'El-Zaytoun'],
            ['governrate_id' => 1, 'city_name_ar' => 'الساحل', 'city_name_en' => 'Sahel'],
            ['governrate_id' => 1, 'city_name_ar' => 'السلام', 'city_name_en' => 'El Salam'],
            ['governrate_id' => 1, 'city_name_ar' => 'السيدة زينب', 'city_name_en' => 'Sayeda Zeinab'],
            ['governrate_id' => 1, 'city_name_ar' => 'الشرابية', 'city_name_en' => 'El Sharabeya'],
            ['governrate_id' => 1, 'city_name_ar' => 'الظاهر', 'city_name_en' => 'El Daher'],
            ['governrate_id' => 1, 'city_name_ar' => 'العاشر من رمضان', 'city_name_en' => '10th of Ramadan City'],
            ['governrate_id' => 1, 'city_name_ar' => 'العاصمة الإدارية', 'city_name_en' => 'Capital New'],
            ['governrate_id' => 1, 'city_name_ar' => 'العتبة', 'city_name_en' => 'Ataba'],
            ['governrate_id' => 1, 'city_name_ar' => 'القاهرة الجديدة', 'city_name_en' => 'New Cairo'],
            ['governrate_id' => 1, 'city_name_ar' => 'القطامية', 'city_name_en' => 'Katameya'],
            ['governrate_id' => 1, 'city_name_ar' => 'المرج', 'city_name_en' => 'El Marg'],
            ['governrate_id' => 1, 'city_name_ar' => 'المطرية', 'city_name_en' => 'Matareya'],
            ['governrate_id' => 1, 'city_name_ar' => 'المعادى', 'city_name_en' => 'Maadi'],
            ['governrate_id' => 1, 'city_name_ar' => 'المعصرة', 'city_name_en' => 'Maasara'],
            ['governrate_id' => 1, 'city_name_ar' => 'المقطم', 'city_name_en' => 'Mokattam'],
            ['governrate_id' => 1, 'city_name_ar' => 'المنيل', 'city_name_en' => 'Manyal'],
            ['governrate_id' => 1, 'city_name_ar' => 'الموسكى', 'city_name_en' => 'Mosky'],
            ['governrate_id' => 1, 'city_name_ar' => 'النزهة', 'city_name_en' => 'Nozha'],
            ['governrate_id' => 1, 'city_name_ar' => 'النزهة الجديدة', 'city_name_en' => 'New Nozha'],
            ['governrate_id' => 1, 'city_name_ar' => 'الوايلى', 'city_name_en' => 'Waily'],
            ['governrate_id' => 1, 'city_name_ar' => 'باب الشعرية', 'city_name_en' => 'Bab al-Shereia'],
            ['governrate_id' => 1, 'city_name_ar' => 'بولاق', 'city_name_en' => 'Bolaq'],
            ['governrate_id' => 1, 'city_name_ar' => 'جاردن سيتى', 'city_name_en' => 'Garden City'],
            ['governrate_id' => 1, 'city_name_ar' => 'حدائق القبة', 'city_name_en' => 'Hadayek El-Kobba'],
            ['governrate_id' => 1, 'city_name_ar' => 'حلوان', 'city_name_en' => 'Helwan'],
            ['governrate_id' => 1, 'city_name_ar' => 'دار السلام', 'city_name_en' => 'Dar Al Salam'],
            ['governrate_id' => 1, 'city_name_ar' => 'روض الفرج', 'city_name_en' => 'Rod Alfarag'],
            ['governrate_id' => 1, 'city_name_ar' => 'شبرا', 'city_name_en' => 'Shubra'],
            ['governrate_id' => 1, 'city_name_ar' => 'شيراتون', 'city_name_en' => 'Sheraton'],
            ['governrate_id' => 1, 'city_name_ar' => 'طره', 'city_name_en' => 'Tura'],
            ['governrate_id' => 1, 'city_name_ar' => 'عابدين', 'city_name_en' => 'Abdeen'],
            ['governrate_id' => 1, 'city_name_ar' => 'عباسية', 'city_name_en' => 'Abaseya'],
            ['governrate_id' => 1, 'city_name_ar' => 'عزبة النخل', 'city_name_en' => 'Ezbet el Nakhl'],
            ['governrate_id' => 1, 'city_name_ar' => 'عين شمس', 'city_name_en' => 'Ain Shams'],
            ['governrate_id' => 1, 'city_name_ar' => 'قصر النيل', 'city_name_en' => 'Kasr El Nile'],
            ['governrate_id' => 1, 'city_name_ar' => 'مدينة الشروق', 'city_name_en' => 'Shorouk'],
            ['governrate_id' => 1, 'city_name_ar' => 'مدينة العبور', 'city_name_en' => 'Obour City'],
            ['governrate_id' => 1, 'city_name_ar' => 'مدينة بدر', 'city_name_en' => 'Badr City'],
            ['governrate_id' => 1, 'city_name_ar' => 'مدينة نصر', 'city_name_en' => 'Nasr City'],
            ['governrate_id' => 1, 'city_name_ar' => 'مدينتي', 'city_name_en' => 'Madinty'],
            ['governrate_id' => 1, 'city_name_ar' => 'مصر الجديدة', 'city_name_en' => 'New Heliopolis'],
            ['governrate_id' => 1, 'city_name_ar' => 'مصر القديمة', 'city_name_en' => 'Masr Al Qadima'],
            ['governrate_id' => 1, 'city_name_ar' => 'منشية ناصر', 'city_name_en' => 'Mansheya Nasir'],
            ['governrate_id' => 1, 'city_name_ar' => 'وسط البلد', 'city_name_en' => 'Cairo Downtown'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
