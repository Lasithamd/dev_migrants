<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        City::create( [
            'id'=>1,
            'name_en'=>'Akkaraipattu',
            'name_si'=>'අක්කරපත්තුව',
            'district_id'=>1,
            'postcode'=>'32400',
            'latitude'=>7.2167,
            'longitude'=>81.85
            ] );
                        
            City::create( [
            'id'=>2,
            'name_en'=>'Ambagahawatta',
            'name_si'=>'අඹගහවත්ත',
            'district_id'=>1,
            'postcode'=>'90326',
            'latitude'=>7.4,
            'longitude'=>81.3
            ] );
                        
            City::create( [
            'id'=>3,
            'name_en'=>'Ampara',
            'name_si'=>'අම්පාර',
            'district_id'=>1,
            'postcode'=>'32000',
            'latitude'=>7.2833,
            'longitude'=>81.6667
            ] );
                        
            City::create( [
            'id'=>4,
            'name_en'=>'Bakmitiyawa',
            'name_si'=>'බක්මිටියාව',
            'district_id'=>1,
            'postcode'=>'32024',
            'latitude'=>7.026268,
            'longitude'=>81.633832
            ] );
                        
            City::create( [
            'id'=>5,
            'name_en'=>'Deegawapiya',
            'name_si'=>'දීඝවාපිය',
            'district_id'=>1,
            'postcode'=>'32006',
            'latitude'=>7.2833,
            'longitude'=>81.6667
            ] );
                        
            City::create( [
            'id'=>6,
            'name_en'=>'Devalahinda',
            'name_si'=>'දෙවලහිඳ',
            'district_id'=>1,
            'postcode'=>'32038',
            'latitude'=>7.1889,
            'longitude'=>81.5778
            ] );
                        
            City::create( [
            'id'=>7,
            'name_en'=>'Digamadulla Weeragoda',
            'name_si'=>'දිගාමඩුල්ල වීරගොඩ',
            'district_id'=>1,
            'postcode'=>'32008',
            'latitude'=>7.2833,
            'longitude'=>81.6667
            ] );
                        
            City::create( [
            'id'=>8,
            'name_en'=>'Dorakumbura',
            'name_si'=>'දොරකුඹුර',
            'district_id'=>1,
            'postcode'=>'32104',
            'latitude'=>7.358849,
            'longitude'=>81.280133
            ] );
                        
            City::create( [
            'id'=>9,
            'name_en'=>'Gonagolla',
            'name_si'=>'ගොනගොල්ල',
            'district_id'=>1,
            'postcode'=>'32064',
            'latitude'=>7.449853,
            'longitude'=>81.618014
            ] );
                        
            City::create( [
            'id'=>10,
            'name_en'=>'Hulannuge',
            'name_si'=>'හුලංනුගේ',
            'district_id'=>1,
            'postcode'=>'32514',
            'latitude'=>7.4,
            'longitude'=>81.3
            ] );
                        
            City::create( [
            'id'=>11,
            'name_en'=>'Kalmunai',
            'name_si'=>'කල්මුණේ',
            'district_id'=>1,
            'postcode'=>'32300',
            'latitude'=>7.413897,
            'longitude'=>81.826718
            ] );
                        
            City::create( [
            'id'=>12,
            'name_en'=>'Kannakipuram',
            'name_si'=>'කන්නකිපුරම්',
            'district_id'=>1,
            'postcode'=>'32405',
            'latitude'=>7.2167,
            'longitude'=>81.85
            ] );
                        
            City::create( [
            'id'=>13,
            'name_en'=>'Karativu',
            'name_si'=>'කරතිව්',
            'district_id'=>1,
            'postcode'=>'32250',
            'latitude'=>7.3833,
            'longitude'=>81.8333
            ] );
                        
            City::create( [
            'id'=>14,
            'name_en'=>'Kekirihena',
            'name_si'=>'කැකිරිහේන',
            'district_id'=>1,
            'postcode'=>'32074',
            'latitude'=>7.490724,
            'longitude'=>81.310836
            ] );
                        
            City::create( [
            'id'=>15,
            'name_en'=>'Koknahara',
            'name_si'=>'කොක්නහර',
            'district_id'=>1,
            'postcode'=>'32035',
            'latitude'=>7.184832,
            'longitude'=>81.555806
            ] );
                        
            City::create( [
            'id'=>16,
            'name_en'=>'Kolamanthalawa',
            'name_si'=>'කෝලමන්තලාව',
            'district_id'=>1,
            'postcode'=>'32102',
            'latitude'=>7.351733,
            'longitude'=>81.249913
            ] );
                        
            City::create( [
            'id'=>17,
            'name_en'=>'Komari',
            'name_si'=>'කෝමාරි',
            'district_id'=>1,
            'postcode'=>'32418',
            'latitude'=>6.976958,
            'longitude'=>81.78883
            ] );
                        
            City::create( [
            'id'=>18,
            'name_en'=>'Lahugala',
            'name_si'=>'ලාහුගල',
            'district_id'=>1,
            'postcode'=>'32512',
            'latitude'=>7.415566,
            'longitude'=>81.33954
            ] );
                        
            City::create( [
            'id'=>19,
            'name_en'=>'lmkkamam',
            'name_si'=>'ල්ම්ක්කමම්',
            'district_id'=>1,
            'postcode'=>'32450',
            'latitude'=>7.1125,
            'longitude'=>81.8542
            ] );
                        
            City::create( [
            'id'=>20,
            'name_en'=>'Mahaoya',
            'name_si'=>'මහඔය',
            'district_id'=>1,
            'postcode'=>'32070',
            'latitude'=>7.535248,
            'longitude'=>81.351145
            ] );
                        
            City::create( [
            'id'=>21,
            'name_en'=>'Marathamune',
            'name_si'=>'මාරත්මුනේ',
            'district_id'=>1,
            'postcode'=>'32314',
            'latitude'=>7.45,
            'longitude'=>81.8167
            ] );
                        
            City::create( [
            'id'=>22,
            'name_en'=>'Namaloya',
            'name_si'=>'නාමල්ඔය',
            'district_id'=>1,
            'postcode'=>'32037',
            'latitude'=>7.1889,
            'longitude'=>81.5778
            ] );
                        
            City::create( [
            'id'=>23,
            'name_en'=>'Navithanveli',
            'name_si'=>'නාවිදන්වෙලි',
            'district_id'=>1,
            'postcode'=>'32308',
            'latitude'=>7.4333,
            'longitude'=>81.7833
            ] );
                        
            City::create( [
            'id'=>24,
            'name_en'=>'Nintavur',
            'name_si'=>'නින්දවූර්',
            'district_id'=>1,
            'postcode'=>'32340',
            'latitude'=>7.35,
            'longitude'=>81.85
            ] );
                        
            City::create( [
            'id'=>25,
            'name_en'=>'Oluvil',
            'name_si'=>'ඔළුවිල',
            'district_id'=>1,
            'postcode'=>'32360',
            'latitude'=>7.2833,
            'longitude'=>81.85
            ] );
                        
            City::create( [
            'id'=>26,
            'name_en'=>'Padiyatalawa',
            'name_si'=>'පදියතලාව',
            'district_id'=>1,
            'postcode'=>'32100',
            'latitude'=>7.4,
            'longitude'=>81.2333
            ] );
                        
            City::create( [
            'id'=>27,
            'name_en'=>'Pahalalanda',
            'name_si'=>'පහලලන්ද',
            'district_id'=>1,
            'postcode'=>'32034',
            'latitude'=>7.21752,
            'longitude'=>81.578714
            ] );
                        
            City::create( [
            'id'=>28,
            'name_en'=>'Panama',
            'name_si'=>'පානම',
            'district_id'=>1,
            'postcode'=>'32508',
            'latitude'=>6.812201,
            'longitude'=>81.712237
            ] );
                        
            City::create( [
            'id'=>29,
            'name_en'=>'Pannalagama',
            'name_si'=>'පන්නලගම',
            'district_id'=>1,
            'postcode'=>'32022',
            'latitude'=>7.0667,
            'longitude'=>81.6167
            ] );
                        
            City::create( [
            'id'=>30,
            'name_en'=>'Paragahakele',
            'name_si'=>'පරගහකැලේ',
            'district_id'=>1,
            'postcode'=>'32031',
            'latitude'=>7.25669,
            'longitude'=>81.609526
            ] );
                        
            City::create( [
            'id'=>31,
            'name_en'=>'Periyaneelavanai',
            'name_si'=>'පෙරියනීලවන්නි',
            'district_id'=>1,
            'postcode'=>'32316',
            'latitude'=>7.434002,
            'longitude'=>81.814169
            ] );
                        
            City::create( [
            'id'=>32,
            'name_en'=>'Polwaga Janapadaya',
            'name_si'=>'පොල්වග ජනපදය',
            'district_id'=>1,
            'postcode'=>'32032',
            'latitude'=>7.1889,
            'longitude'=>81.5778
            ] );
                        
            City::create( [
            'id'=>33,
            'name_en'=>'Pottuvil',
            'name_si'=>'පොතුවිල්',
            'district_id'=>1,
            'postcode'=>'32500',
            'latitude'=>6.8667,
            'longitude'=>81.8333
            ] );
                        
            City::create( [
            'id'=>34,
            'name_en'=>'Sainthamaruthu',
            'name_si'=>'සායින්දමරුදු',
            'district_id'=>1,
            'postcode'=>'32280',
            'latitude'=>7.3833,
            'longitude'=>81.8333
            ] );
                        
            City::create( [
            'id'=>35,
            'name_en'=>'Samanthurai',
            'name_si'=>'සමන්තුරේ',
            'district_id'=>1,
            'postcode'=>'32200',
            'latitude'=>7.3833,
            'longitude'=>81.8333
            ] );
                        
            City::create( [
            'id'=>36,
            'name_en'=>'Serankada',
            'name_si'=>'සේරන්කද',
            'district_id'=>1,
            'postcode'=>'32101',
            'latitude'=>7.464517,
            'longitude'=>81.263599
            ] );
                        
            City::create( [
            'id'=>37,
            'name_en'=>'Tempitiya',
            'name_si'=>'ටැම්පිටිය',
            'district_id'=>1,
            'postcode'=>'32072',
            'latitude'=>7.610374,
            'longitude'=>81.429907
            ] );
                        
            City::create( [
            'id'=>38,
            'name_en'=>'Thambiluvil',
            'name_si'=>'ල්තැඹිළුවි',
            'district_id'=>1,
            'postcode'=>'32415',
            'latitude'=>7.132227,
            'longitude'=>81.819074
            ] );
                        
            City::create( [
            'id'=>39,
            'name_en'=>'Tirukovil',
            'name_si'=>'තිරුකෝවිල',
            'district_id'=>1,
            'postcode'=>'32420',
            'latitude'=>7.1167,
            'longitude'=>81.85
            ] );
                        
            City::create( [
            'id'=>40,
            'name_en'=>'Uhana',
            'name_si'=>'උහන',
            'district_id'=>1,
            'postcode'=>'32060',
            'latitude'=>7.363281,
            'longitude'=>81.637746
            ] );
                        
            City::create( [
            'id'=>41,
            'name_en'=>'Wadinagala',
            'name_si'=>'වඩිනාගල',
            'district_id'=>1,
            'postcode'=>'32039',
            'latitude'=>7.127849,
            'longitude'=>81.56922
            ] );
                        
            City::create( [
            'id'=>42,
            'name_en'=>'Wanagamuwa',
            'name_si'=>'වනගමුව',
            'district_id'=>1,
            'postcode'=>'32454',
            'latitude'=>7.1125,
            'longitude'=>81.8542
            ] );
                        
            City::create( [
            'id'=>43,
            'name_en'=>'Angamuwa',
            'name_si'=>'අංගමුව',
            'district_id'=>2,
            'postcode'=>'50248',
            'latitude'=>8.177645,
            'longitude'=>80.205048
            ] );
                        
            City::create( [
            'id'=>44,
            'name_en'=>'Anuradhapura',
            'name_si'=>'අනුරාධපුරය',
            'district_id'=>2,
            'postcode'=>'50000',
            'latitude'=>8.35,
            'longitude'=>80.3833
            ] );
                        
            City::create( [
            'id'=>45,
            'name_en'=>'Awukana',
            'name_si'=>'අව්කන',
            'district_id'=>2,
            'postcode'=>'50169',
            'latitude'=>7.9753,
            'longitude'=>80.5266
            ] );
                        
            City::create( [
            'id'=>46,
            'name_en'=>'Bogahawewa',
            'name_si'=>'බෝගහවැව',
            'district_id'=>2,
            'postcode'=>'50566',
            'latitude'=>8.328993,
            'longitude'=>80.251702
            ] );
                        
            City::create( [
            'id'=>47,
            'name_en'=>'Dematawewa',
            'name_si'=>'දෙමටවැව',
            'district_id'=>2,
            'postcode'=>'50356',
            'latitude'=>8.357373,
            'longitude'=>80.870087
            ] );
                        
            City::create( [
            'id'=>48,
            'name_en'=>'Dimbulagala',
            'name_si'=>'දිඹුලාගල',
            'district_id'=>2,
            'postcode'=>'51031',
            'latitude'=>7.9167,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>49,
            'name_en'=>'Dutuwewa',
            'name_si'=>'දුටුවැව',
            'district_id'=>2,
            'postcode'=>'50393',
            'latitude'=>8.65,
            'longitude'=>80.5167
            ] );
                        
            City::create( [
            'id'=>50,
            'name_en'=>'Elayapattuwa',
            'name_si'=>'ඇලයාපත්තුව',
            'district_id'=>2,
            'postcode'=>'50014',
            'latitude'=>8.413522,
            'longitude'=>80.318148
            ] );
                        
            City::create( [
            'id'=>51,
            'name_en'=>'Ellewewa',
            'name_si'=>'ඇල්ලේවැව',
            'district_id'=>2,
            'postcode'=>'51034',
            'latitude'=>7.9167,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>52,
            'name_en'=>'Eppawala',
            'name_si'=>'එප්පාවල',
            'district_id'=>2,
            'postcode'=>'50260',
            'latitude'=>8.1167,
            'longitude'=>80.7333
            ] );
                        
            City::create( [
            'id'=>53,
            'name_en'=>'Etawatunuwewa',
            'name_si'=>'ඇතාවැටුනවැව',
            'district_id'=>2,
            'postcode'=>'50584',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>54,
            'name_en'=>'Etaweeragollewa',
            'name_si'=>'ඇතාවීරගොලෑව',
            'district_id'=>2,
            'postcode'=>'50518',
            'latitude'=>8.613962,
            'longitude'=>80.539713
            ] );
                        
            City::create( [
            'id'=>55,
            'name_en'=>'Galapitagala',
            'name_si'=>'ගලපිටගල',
            'district_id'=>2,
            'postcode'=>'32066',
            'latitude'=>8.089843,
            'longitude'=>80.685528
            ] );
                        
            City::create( [
            'id'=>56,
            'name_en'=>'Galenbindunuwewa',
            'name_si'=>'ගලෙන්බිඳුනුවැව',
            'district_id'=>2,
            'postcode'=>'50390',
            'latitude'=>8.5833,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>57,
            'name_en'=>'Galkadawala',
            'name_si'=>'ගල්කඩවල',
            'district_id'=>2,
            'postcode'=>'50006',
            'latitude'=>8.412861,
            'longitude'=>80.378175
            ] );
                        
            City::create( [
            'id'=>58,
            'name_en'=>'Galkiriyagama',
            'name_si'=>'ගල්කිරියාගම',
            'district_id'=>2,
            'postcode'=>'50120',
            'latitude'=>7.9414,
            'longitude'=>80.565
            ] );
                        
            City::create( [
            'id'=>59,
            'name_en'=>'Galkulama',
            'name_si'=>'ගල්කුලම',
            'district_id'=>2,
            'postcode'=>'50064',
            'latitude'=>8.270414,
            'longitude'=>80.506526
            ] );
                        
            City::create( [
            'id'=>60,
            'name_en'=>'Galnewa',
            'name_si'=>'ගල්නෑව',
            'district_id'=>2,
            'postcode'=>'50170',
            'latitude'=>8.2,
            'longitude'=>80.3667
            ] );
                        
            City::create( [
            'id'=>61,
            'name_en'=>'Gambirigaswewa',
            'name_si'=>'ගම්බිරිගස්වැව',
            'district_id'=>2,
            'postcode'=>'50057',
            'latitude'=>8.4667,
            'longitude'=>80.3667
            ] );
                        
            City::create( [
            'id'=>62,
            'name_en'=>'Ganewalpola',
            'name_si'=>'ගනේවල්පොල',
            'district_id'=>2,
            'postcode'=>'50142',
            'latitude'=>8.090528,
            'longitude'=>80.628195
            ] );
                        
            City::create( [
            'id'=>63,
            'name_en'=>'Gemunupura',
            'name_si'=>'ගැමුණුපුර',
            'district_id'=>2,
            'postcode'=>'50224',
            'latitude'=>8.0667,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>64,
            'name_en'=>'Getalawa',
            'name_si'=>'ගෙතලාව',
            'district_id'=>2,
            'postcode'=>'50392',
            'latitude'=>8.6167,
            'longitude'=>80.5333
            ] );
                        
            City::create( [
            'id'=>65,
            'name_en'=>'Gnanikulama',
            'name_si'=>'ඝාණිකුළම',
            'district_id'=>2,
            'postcode'=>'50036',
            'latitude'=>8.297336,
            'longitude'=>80.431753
            ] );
                        
            City::create( [
            'id'=>66,
            'name_en'=>'Gonahaddenawa',
            'name_si'=>'ගෝනහද්දෙනෑව',
            'district_id'=>2,
            'postcode'=>'50554',
            'latitude'=>8.5333,
            'longitude'=>80.5083
            ] );
                        
            City::create( [
            'id'=>67,
            'name_en'=>'Habarana',
            'name_si'=>'හබරන',
            'district_id'=>2,
            'postcode'=>'50150',
            'latitude'=>8.047531,
            'longitude'=>80.748664
            ] );
                        
            City::create( [
            'id'=>68,
            'name_en'=>'Halmillawa Dambulla',
            'name_si'=>'හල්මිලෑව දඹුල්ල',
            'district_id'=>2,
            'postcode'=>'50124',
            'latitude'=>7.9474,
            'longitude'=>80.594
            ] );
                        
            City::create( [
            'id'=>69,
            'name_en'=>'Halmillawetiya',
            'name_si'=>'හල්මිල්ලවැටිය',
            'district_id'=>2,
            'postcode'=>'50552',
            'latitude'=>8.35,
            'longitude'=>80.2667
            ] );
                        
            City::create( [
            'id'=>70,
            'name_en'=>'Hidogama',
            'name_si'=>'හිද්දෝගම',
            'district_id'=>2,
            'postcode'=>'50044',
            'latitude'=>8.250421,
            'longitude'=>80.418663
            ] );
                        
            City::create( [
            'id'=>71,
            'name_en'=>'Horawpatana',
            'name_si'=>'හොරොව්පතාන',
            'district_id'=>2,
            'postcode'=>'50350',
            'latitude'=>8.4333,
            'longitude'=>80.8667
            ] );
                        
            City::create( [
            'id'=>72,
            'name_en'=>'Horiwila',
            'name_si'=>'හොරිවිල',
            'district_id'=>2,
            'postcode'=>'50222',
            'latitude'=>8.0667,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>73,
            'name_en'=>'Hurigaswewa',
            'name_si'=>'හුරිගස්වැව',
            'district_id'=>2,
            'postcode'=>'50176',
            'latitude'=>8.1333,
            'longitude'=>80.3667
            ] );
                        
            City::create( [
            'id'=>74,
            'name_en'=>'Hurulunikawewa',
            'name_si'=>'හුරුලුනිකවැව',
            'district_id'=>2,
            'postcode'=>'50394',
            'latitude'=>8.6167,
            'longitude'=>80.5333
            ] );
                        
            City::create( [
            'id'=>75,
            'name_en'=>'Ihala Puliyankulama',
            'name_si'=>'ඉහල පුලියන්කුලම',
            'district_id'=>2,
            'postcode'=>'61316',
            'latitude'=>8.153213,
            'longitude'=>80.559989
            ] );
                        
            City::create( [
            'id'=>76,
            'name_en'=>'Kagama',
            'name_si'=>'කගම',
            'district_id'=>2,
            'postcode'=>'50282',
            'latitude'=>8.061465,
            'longitude'=>80.478039
            ] );
                        
            City::create( [
            'id'=>77,
            'name_en'=>'Kahatagasdigiliya',
            'name_si'=>'කහටගස්දිගිලිය',
            'district_id'=>2,
            'postcode'=>'50320',
            'latitude'=>8.4167,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>78,
            'name_en'=>'Kahatagollewa',
            'name_si'=>'කහටගොල්ලෑව',
            'district_id'=>2,
            'postcode'=>'50562',
            'latitude'=>8.45,
            'longitude'=>80.65
            ] );
                        
            City::create( [
            'id'=>79,
            'name_en'=>'Kalakarambewa',
            'name_si'=>'කලකරඹෑව',
            'district_id'=>2,
            'postcode'=>'50288',
            'latitude'=>8.0833,
            'longitude'=>80.4667
            ] );
                        
            City::create( [
            'id'=>80,
            'name_en'=>'Kalaoya',
            'name_si'=>'කලාඔය',
            'district_id'=>2,
            'postcode'=>'50226',
            'latitude'=>8.0667,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>81,
            'name_en'=>'Kalawedi Ulpotha',
            'name_si'=>'කලාවැදි උල්පොත',
            'district_id'=>2,
            'postcode'=>'50556',
            'latitude'=>8.5333,
            'longitude'=>80.5083
            ] );
                        
            City::create( [
            'id'=>82,
            'name_en'=>'Kallanchiya',
            'name_si'=>'කලංචිය',
            'district_id'=>2,
            'postcode'=>'50454',
            'latitude'=>8.45,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>83,
            'name_en'=>'Kalpitiya',
            'name_si'=>'කල්පිටිය',
            'district_id'=>2,
            'postcode'=>'61360',
            'latitude'=>8.2333,
            'longitude'=>79.7667
            ] );
                        
            City::create( [
            'id'=>84,
            'name_en'=>'Kalukele Badanagala',
            'name_si'=>'කළුකැලේ බදනාගල',
            'district_id'=>2,
            'postcode'=>'51037',
            'latitude'=>7.9167,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>85,
            'name_en'=>'Kapugallawa',
            'name_si'=>'කපුගල්ලව',
            'district_id'=>2,
            'postcode'=>'50370',
            'latitude'=>8.4233,
            'longitude'=>80.6783
            ] );
                        
            City::create( [
            'id'=>86,
            'name_en'=>'Karagahawewa',
            'name_si'=>'කරගහවැව',
            'district_id'=>2,
            'postcode'=>'50232',
            'latitude'=>8.23416,
            'longitude'=>80.322772
            ] );
                        
            City::create( [
            'id'=>87,
            'name_en'=>'Kashyapapura',
            'name_si'=>'කාශ්‍යපපුර',
            'district_id'=>2,
            'postcode'=>'51032',
            'latitude'=>7.9167,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>88,
            'name_en'=>'Kebithigollewa',
            'name_si'=>'කැබිතිගොල්ලෑව',
            'district_id'=>2,
            'postcode'=>'50500',
            'latitude'=>8.5333,
            'longitude'=>80.4833
            ] );
                        
            City::create( [
            'id'=>89,
            'name_en'=>'Kekirawa',
            'name_si'=>'කැකිරාව',
            'district_id'=>2,
            'postcode'=>'50100',
            'latitude'=>8.037462,
            'longitude'=>80.59801
            ] );
                        
            City::create( [
            'id'=>90,
            'name_en'=>'Kendewa',
            'name_si'=>'කේන්දෑව',
            'district_id'=>2,
            'postcode'=>'50452',
            'latitude'=>8.4833,
            'longitude'=>80.6
            ] );
                        
            City::create( [
            'id'=>91,
            'name_en'=>'Kiralogama',
            'name_si'=>'කිරළෝගම',
            'district_id'=>2,
            'postcode'=>'50259',
            'latitude'=>8.19407,
            'longitude'=>80.37012
            ] );
                        
            City::create( [
            'id'=>92,
            'name_en'=>'Kirigalwewa',
            'name_si'=>'කිරිගල්වැව',
            'district_id'=>2,
            'postcode'=>'50511',
            'latitude'=>8.537767,
            'longitude'=>80.556651
            ] );
                        
            City::create( [
            'id'=>93,
            'name_en'=>'Kirimundalama',
            'name_si'=>'කිරිමුන්ඩලම',
            'district_id'=>2,
            'postcode'=>'61362',
            'latitude'=>8.2333,
            'longitude'=>79.7667
            ] );
                        
            City::create( [
            'id'=>94,
            'name_en'=>'Kitulhitiyawa',
            'name_si'=>'කිතුල්හිටියාව',
            'district_id'=>2,
            'postcode'=>'50132',
            'latitude'=>7.916592,
            'longitude'=>80.63811
            ] );
                        
            City::create( [
            'id'=>95,
            'name_en'=>'Kurundankulama',
            'name_si'=>'කුරුන්දන්කුලම',
            'district_id'=>2,
            'postcode'=>'50062',
            'latitude'=>8.2,
            'longitude'=>80.45
            ] );
                        
            City::create( [
            'id'=>96,
            'name_en'=>'Labunoruwa',
            'name_si'=>'ලබුනෝරුව',
            'district_id'=>2,
            'postcode'=>'50088',
            'latitude'=>8.168026,
            'longitude'=>80.617001
            ] );
                        
            City::create( [
            'id'=>97,
            'name_en'=>'Ihalagama',
            'name_si'=>'ඉහලගම',
            'district_id'=>2,
            'postcode'=>'50304',
            'latitude'=>8.35,
            'longitude'=>80.5
            ] );
                        
            City::create( [
            'id'=>98,
            'name_en'=>'Ipologama',
            'name_si'=>'ඉපොලොගම',
            'district_id'=>2,
            'postcode'=>'50280',
            'latitude'=>8.0833,
            'longitude'=>80.4667
            ] );
                        
            City::create( [
            'id'=>99,
            'name_en'=>'Madatugama',
            'name_si'=>'මාදතුගම',
            'district_id'=>2,
            'postcode'=>'50130',
            'latitude'=>7.940041,
            'longitude'=>80.638217
            ] );
                        
            City::create( [
            'id'=>100,
            'name_en'=>'Maha Elagamuwa',
            'name_si'=>'මහ ඇලගමුව',
            'district_id'=>2,
            'postcode'=>'50126',
            'latitude'=>7.991935,
            'longitude'=>80.61824
            ] );
                        
            City::create( [
            'id'=>101,
            'name_en'=>'Mahabulankulama',
            'name_si'=>'මහබුලංකුලම',
            'district_id'=>2,
            'postcode'=>'50196',
            'latitude'=>7.9753,
            'longitude'=>80.5266
            ] );
                        
            City::create( [
            'id'=>102,
            'name_en'=>'Mahailluppallama',
            'name_si'=>'මහඉලුප්පල්ලම',
            'district_id'=>2,
            'postcode'=>'50270',
            'latitude'=>8.106,
            'longitude'=>80.3619
            ] );
                        
            City::create( [
            'id'=>103,
            'name_en'=>'Mahakanadarawa',
            'name_si'=>'මහකනදරාව',
            'district_id'=>2,
            'postcode'=>'50306',
            'latitude'=>8.35,
            'longitude'=>80.5
            ] );
                        
            City::create( [
            'id'=>104,
            'name_en'=>'Mahapothana',
            'name_si'=>'මහපොතාන',
            'district_id'=>2,
            'postcode'=>'50327',
            'latitude'=>8.4167,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>105,
            'name_en'=>'Mahasenpura',
            'name_si'=>'මහසෙන්පුර',
            'district_id'=>2,
            'postcode'=>'50574',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>106,
            'name_en'=>'Mahawilachchiya',
            'name_si'=>'මහවිලච්චිය',
            'district_id'=>2,
            'postcode'=>'50022',
            'latitude'=>8.2814,
            'longitude'=>80.4588
            ] );
                        
            City::create( [
            'id'=>107,
            'name_en'=>'Mailagaswewa',
            'name_si'=>'මයිලගස්වැව',
            'district_id'=>2,
            'postcode'=>'50384',
            'latitude'=>8.4,
            'longitude'=>80.6333
            ] );
                        
            City::create( [
            'id'=>108,
            'name_en'=>'Malwanagama',
            'name_si'=>'මල්වනගම',
            'district_id'=>2,
            'postcode'=>'50236',
            'latitude'=>8.225,
            'longitude'=>80.3333
            ] );
                        
            City::create( [
            'id'=>109,
            'name_en'=>'Maneruwa',
            'name_si'=>'මනේරුව',
            'district_id'=>2,
            'postcode'=>'50182',
            'latitude'=>7.895997,
            'longitude'=>80.475966
            ] );
                        
            City::create( [
            'id'=>110,
            'name_en'=>'Maradankadawala',
            'name_si'=>'මරදන්කඩවල',
            'district_id'=>2,
            'postcode'=>'50080',
            'latitude'=>8.1333,
            'longitude'=>80.4833
            ] );
                        
            City::create( [
            'id'=>111,
            'name_en'=>'Maradankalla',
            'name_si'=>'මරදන්කල්ල',
            'district_id'=>2,
            'postcode'=>'50308',
            'latitude'=>8.317498,
            'longitude'=>80.537899
            ] );
                        
            City::create( [
            'id'=>112,
            'name_en'=>'Medawachchiya',
            'name_si'=>'මැදවච්චිය',
            'district_id'=>2,
            'postcode'=>'50500',
            'latitude'=>8.540822,
            'longitude'=>80.495957
            ] );
                        
            City::create( [
            'id'=>113,
            'name_en'=>'Megodawewa',
            'name_si'=>'මීගොඩවැව',
            'district_id'=>2,
            'postcode'=>'50334',
            'latitude'=>8.2333,
            'longitude'=>80.7333
            ] );
                        
            City::create( [
            'id'=>114,
            'name_en'=>'Mihintale',
            'name_si'=>'මිහින්තලේ',
            'district_id'=>2,
            'postcode'=>'50300',
            'latitude'=>8.35,
            'longitude'=>80.5
            ] );
                        
            City::create( [
            'id'=>115,
            'name_en'=>'Morakewa',
            'name_si'=>'මොරකෑව',
            'district_id'=>2,
            'postcode'=>'50349',
            'latitude'=>8.513051,
            'longitude'=>80.778223
            ] );
                        
            City::create( [
            'id'=>116,
            'name_en'=>'Mulkiriyawa',
            'name_si'=>'මුල්කිරියාව',
            'district_id'=>2,
            'postcode'=>'50324',
            'latitude'=>8.4167,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>117,
            'name_en'=>'Muriyakadawala',
            'name_si'=>'මුරියකඩවල',
            'district_id'=>2,
            'postcode'=>'50344',
            'latitude'=>8.236464,
            'longitude'=>80.654663
            ] );
                        
            City::create( [
            'id'=>118,
            'name_en'=>'Colombo 15',
            'name_si'=>'කොළඹ 15',
            'district_id'=>5,
           'postcode' =>'01500',
            'latitude'=>6.959444,
            'longitude'=>79.875278
            ] );
                        
            City::create( [
            'id'=>119,
            'name_en'=>'Nachchaduwa',
            'name_si'=>'නච්චදූව',
            'district_id'=>2,
            'postcode'=>'50046',
            'latitude'=>8.2667,
            'longitude'=>80.4667
            ] );
                        
            City::create( [
            'id'=>120,
            'name_en'=>'Namalpura',
            'name_si'=>'නාමල්පුර',
            'district_id'=>2,
            'postcode'=>'50339',
            'latitude'=>8.2333,
            'longitude'=>80.7333
            ] );
                        
            City::create( [
            'id'=>121,
            'name_en'=>'Negampaha',
            'name_si'=>'නෑගම්පහ',
            'district_id'=>2,
            'postcode'=>'50180',
            'latitude'=>7.9872,
            'longitude'=>80.4597
            ] );
                        
            City::create( [
            'id'=>122,
            'name_en'=>'Nochchiyagama',
            'name_si'=>'නොච්චියාගම',
            'district_id'=>2,
            'postcode'=>'50200',
            'latitude'=>8.266802,
            'longitude'=>80.20823
            ] );
                        
            City::create( [
            'id'=>123,
            'name_en'=>'Nuwaragala',
            'name_si'=>'නුවරගල',
            'district_id'=>2,
            'postcode'=>'51039',
            'latitude'=>7.9167,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>124,
            'name_en'=>'Padavi Maithripura',
            'name_si'=>'පදවි මෛත්‍රීපුර',
            'district_id'=>2,
            'postcode'=>'50572',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>125,
            'name_en'=>'Padavi Parakramapura',
            'name_si'=>'පදවි පරාක්‍රමපුර',
            'district_id'=>2,
            'postcode'=>'50582',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>126,
            'name_en'=>'Padavi Sripura',
            'name_si'=>'පදවි ශ්‍රීපුර',
            'district_id'=>2,
            'postcode'=>'50587',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>127,
            'name_en'=>'Padavi Sritissapura',
            'name_si'=>'පදවි ශ්‍රීතිස්සපුර',
            'district_id'=>2,
            'postcode'=>'50588',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>128,
            'name_en'=>'Padaviya',
            'name_si'=>'පදවිය',
            'district_id'=>2,
            'postcode'=>'50570',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>129,
            'name_en'=>'Padikaramaduwa',
            'name_si'=>'පඩිකරමඩුව',
            'district_id'=>2,
            'postcode'=>'50338',
            'latitude'=>8.2333,
            'longitude'=>80.7333
            ] );
                        
            City::create( [
            'id'=>130,
            'name_en'=>'Pahala Halmillewa',
            'name_si'=>'පහල හල්මිල්ලෑව',
            'district_id'=>2,
            'postcode'=>'50206',
            'latitude'=>8.21672,
            'longitude'=>80.19116
            ] );
                        
            City::create( [
            'id'=>131,
            'name_en'=>'Pahala Maragahawe',
            'name_si'=>'පහල මරගහවෙ',
            'district_id'=>2,
            'postcode'=>'50220',
            'latitude'=>8.0667,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>132,
            'name_en'=>'Pahalagama',
            'name_si'=>'පහලගම',
            'district_id'=>2,
            'postcode'=>'50244',
            'latitude'=>8.186896,
            'longitude'=>80.283767
            ] );
                        
            City::create( [
            'id'=>133,
            'name_en'=>'Palugaswewa',
            'name_si'=>'පලුගස්වැව',
            'district_id'=>2,
            'postcode'=>'50144',
            'latitude'=>8.053538,
            'longitude'=>80.71918
            ] );
                        
            City::create( [
            'id'=>134,
            'name_en'=>'Pandukabayapura',
            'name_si'=>'පන්ඩුකාබයපුර',
            'district_id'=>2,
            'postcode'=>'50448',
            'latitude'=>8.4467,
            'longitude'=>80.46731
            ] );
                        
            City::create( [
            'id'=>135,
            'name_en'=>'Pandulagama',
            'name_si'=>'පන්ඩුලගම',
            'district_id'=>2,
            'postcode'=>'50029',
            'latitude'=>8.2814,
            'longitude'=>80.4588
            ] );
                        
            City::create( [
            'id'=>136,
            'name_en'=>'Parakumpura',
            'name_si'=>'පරාක්‍රමපුර',
            'district_id'=>2,
            'postcode'=>'50326',
            'latitude'=>8.4167,
            'longitude'=>80.6833
            ] );
                        
            City::create( [
            'id'=>137,
            'name_en'=>'Parangiyawadiya',
            'name_si'=>'පරංගියාවාඩිය',
            'district_id'=>2,
            'postcode'=>'50354',
            'latitude'=>8.491831,
            'longitude'=>80.910014
            ] );
                        
            City::create( [
            'id'=>138,
            'name_en'=>'Parasangahawewa',
            'name_si'=>'පරසන්ගහවැව',
            'district_id'=>2,
            'postcode'=>'50055',
            'latitude'=>8.4333,
            'longitude'=>80.4333
            ] );
                        
            City::create( [
            'id'=>139,
            'name_en'=>'Pelatiyawa',
            'name_si'=>'පැලටියාව',
            'district_id'=>2,
            'postcode'=>'51033',
            'latitude'=>7.9167,
            'longitude'=>80.55
            ] );
                        
            City::create( [
            'id'=>140,
            'name_en'=>'Pemaduwa',
            'name_si'=>'පෙමදූව',
            'district_id'=>2,
            'postcode'=>'50020',
            'latitude'=>8.2814,
            'longitude'=>80.4588
            ] );
                        
            City::create( [
            'id'=>141,
            'name_en'=>'Perimiyankulama',
            'name_si'=>'පෙරිමියන්කුලම',
            'district_id'=>2,
            'postcode'=>'50004',
            'latitude'=>8.270584,
            'longitude'=>80.535827
            ] );
                        
            City::create( [
            'id'=>142,
            'name_en'=>'Pihimbiyagolewa',
            'name_si'=>'පිහිඹියගොල්ලෑව',
            'district_id'=>2,
            'postcode'=>'50512',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>143,
            'name_en'=>'Pubbogama',
            'name_si'=>'පුබ්බෝගම',
            'district_id'=>2,
            'postcode'=>'50122',
            'latitude'=>7.9167,
            'longitude'=>80.6
            ] );
                        
            City::create( [
            'id'=>144,
            'name_en'=>'Punewa',
            'name_si'=>'පූනෑව',
            'district_id'=>2,
            'postcode'=>'50506',
            'latitude'=>8.6167,
            'longitude'=>80.4667
            ] );
                        
            City::create( [
            'id'=>145,
            'name_en'=>'Rajanganaya',
            'name_si'=>'රාජාංගනය',
            'district_id'=>2,
            'postcode'=>'50246',
            'latitude'=>8.1708,
            'longitude'=>80.2833
            ] );
                        
            City::create( [
            'id'=>146,
            'name_en'=>'Rambewa',
            'name_si'=>'රම්බෑව්',
            'district_id'=>2,
            'postcode'=>'50450',
            'latitude'=>8.4333,
            'longitude'=>80.5
            ] );
                        
            City::create( [
            'id'=>147,
            'name_en'=>'Rampathwila',
            'name_si'=>'රම්පත්විල',
            'district_id'=>2,
            'postcode'=>'50386',
            'latitude'=>8.4,
            'longitude'=>80.6333
            ] );
                        
            City::create( [
            'id'=>148,
            'name_en'=>'Rathmalgahawewa',
            'name_si'=>'රත්මල්ගහවැව',
            'district_id'=>2,
            'postcode'=>'50514',
            'latitude'=>8.5595,
            'longitude'=>80.5476
            ] );
                        
            City::create( [
            'id'=>149,
            'name_en'=>'Saliyapura',
            'name_si'=>'සාලියපුර',
            'district_id'=>2,
            'postcode'=>'50008',
            'latitude'=>8.3389,
            'longitude'=>80.4333
            ] );
                        
            City::create( [
            'id'=>150,
            'name_en'=>'Seeppukulama',
            'name_si'=>'සීප්පුකුලම',
            'district_id'=>2,
            'postcode'=>'50380',
            'latitude'=>8.4,
            'longitude'=>80.6333
            ] );
                        
            City::create( [
            'id'=>151,
            'name_en'=>'Senapura',
            'name_si'=>'සේනාපුර',
            'district_id'=>2,
            'postcode'=>'50284',
            'latitude'=>8.0833,
            'longitude'=>80.4667
            ] );
                        
            City::create( [
            'id'=>152,
            'name_en'=>'Sivalakulama',
            'name_si'=>'සිවලකුලම',
            'district_id'=>2,
            'postcode'=>'50068',
            'latitude'=>8.25237,
            'longitude'=>80.641743
            ] );
                        
            City::create( [
            'id'=>153,
            'name_en'=>'Siyambalewa',
            'name_si'=>'සියඹලෑව',
            'district_id'=>2,
            'postcode'=>'50184',
            'latitude'=>7.95,
            'longitude'=>80.5167
            ] );
                        
            City::create( [
            'id'=>154,
            'name_en'=>'Sravasthipura',
            'name_si'=>'ස්‍රාවස්තිපුර',
            'district_id'=>2,
            'postcode'=>'50042',
            'latitude'=>8.2667,
            'longitude'=>80.4333
            ] );
                        
            City::create( [
            'id'=>155,
            'name_en'=>'Talawa',
            'name_si'=>'තලාව',
            'district_id'=>2,
            'postcode'=>'50230',
            'latitude'=>8.2167,
            'longitude'=>80.35
            ] );
                        
            City::create( [
            'id'=>156,
            'name_en'=>'Tambuttegama',
            'name_si'=>'තඹුත්තේගම',
            'district_id'=>2,
            'postcode'=>'50240',
            'latitude'=>8.15,
            'longitude'=>80.3
            ] );
                        
            City::create( [
            'id'=>157,
            'name_en'=>'Tammennawa',
            'name_si'=>'තම්මැන්නාව',
            'district_id'=>2,
            'postcode'=>'50104',
            'latitude'=>8.0333,
            'longitude'=>80.6
            ] );
                        
            City::create( [
            'id'=>158,
            'name_en'=>'Tantirimale',
            'name_si'=>'තන්තිරිමලේ',
            'district_id'=>2,
            'postcode'=>'50016',
            'latitude'=>8.4,
            'longitude'=>80.3
            ] );
                        
            City::create( [
            'id'=>159,
            'name_en'=>'Telhiriyawa',
            'name_si'=>'තෙල්හිරියාව',
            'district_id'=>2,
            'postcode'=>'50242',
            'latitude'=>8.15,
            'longitude'=>80.3333
            ] );
                        
            City::create( [
            'id'=>160,
            'name_en'=>'Tirappane',
            'name_si'=>'තිරප්පනේ',
            'district_id'=>2,
            'postcode'=>'50072',
            'latitude'=>8.2167,
            'longitude'=>80.3833
            ] );
                        
            City::create( [
            'id'=>161,
            'name_en'=>'Tittagonewa',
            'name_si'=>'තිත්තගෝනෑව',
            'district_id'=>2,
            'postcode'=>'50558',
            'latitude'=>8.7167,
            'longitude'=>80.75
            ] );
                        
            City::create( [
            'id'=>162,
            'name_en'=>'Udunuwara Colony',
            'name_si'=>'උඩුනුවර කොළණිය',
            'district_id'=>2,
            'postcode'=>'50207',
            'latitude'=>8.2417,
            'longitude'=>80.1917
            ] );
                        
            City::create( [
            'id'=>163,
            'name_en'=>'Upuldeniya',
            'name_si'=>'උපුල්දෙනිය',
            'district_id'=>2,
            'postcode'=>'50382',
            'latitude'=>8.4,
            'longitude'=>80.6333
            ] );
                        
            City::create( [
            'id'=>164,
            'name_en'=>'Uttimaduwa',
            'name_si'=>'උට්ටිමඩුව',
            'district_id'=>2,
            'postcode'=>'50067',
            'latitude'=>8.254989,
            'longitude'=>80.55487
            ] );
                        
            City::create( [
            'id'=>165,
            'name_en'=>'Vellamanal',
            'name_si'=>'වෙල්ලමනල්',
            'district_id'=>2,
            'postcode'=>'31053',
            'latitude'=>8.5167,
            'longitude'=>81.1833
            ] );
                        
            City::create( [
            'id'=>166,
            'name_en'=>'Viharapalugama',
            'name_si'=>'විහාරපාළුගම',
            'district_id'=>2,
            'postcode'=>'50012',
            'latitude'=>8.4,
            'longitude'=>80.3
            ] );
                        
            City::create( [
            'id'=>167,
            'name_en'=>'Wahalkada',
            'name_si'=>'වාහල්කඩ',
            'district_id'=>2,
            'postcode'=>'50564',
            'latitude'=>8.5667,
            'longitude'=>80.6222
            ] );
                        
            City::create( [
            'id'=>168,
            'name_en'=>'Wahamalgollewa',
            'name_si'=>'වහමල්ගොල්ලෑව',
            'district_id'=>2,
            'postcode'=>'50492',
            'latitude'=>8.479838,
            'longitude'=>80.497451
            ] );
                        
            City::create( [
            'id'=>169,
            'name_en'=>'Walagambahuwa',
            'name_si'=>'වලගම්බාහුව',
            'district_id'=>2,
            'postcode'=>'50086',
            'latitude'=>8.153134,
            'longitude'=>80.499049
            ] );
            City::create( [
                'id'=>170,
                'name_en'=>'Walahaviddawewa',
                'name_si'=>'වලහාවිද්දෑව',
                'district_id'=>2,
                'postcode'=>'50516',
                'latitude'=>8.5595,
                'longitude'=>80.5476
                ] );
                
                
                            
                City::create( [
                'id'=>171,
                'name_en'=>'Welimuwapotana',
                'name_si'=>'වැලිමුවපතාන',
                'district_id'=>2,
                'postcode'=>'50358',
                'latitude'=>8.4333,
                'longitude'=>80.8667
                ] );
                
                
                            
                City::create( [
                'id'=>172,
                'name_en'=>'Welioya Project',
                'name_si'=>'වැලිඔය ව්‍යාපෘතිය',
                'district_id'=>2,
                'postcode'=>'50586',
                'latitude'=>8.5595,
                'longitude'=>80.5476
                ] );
                
                
                            
                City::create( [
                'id'=>173,
                'name_en'=>'Akkarasiyaya',
                'name_si'=>'අක්කරසියය',
                'district_id'=>3,
                'postcode'=>'90166',
                'latitude'=>6.7792,
                'longitude'=>80.9208
                ] );
                
                
                            
                City::create( [
                'id'=>174,
                'name_en'=>'Aluketiyawa',
                'name_si'=>'අලුකෙටියාව',
                'district_id'=>3,
                'postcode'=>'90736',
                'latitude'=>7.317155,
                'longitude'=>81.127134
                ] );
                
                
                            
                City::create( [
                'id'=>175,
                'name_en'=>'Aluttaramma',
                'name_si'=>'අළුත්තරම',
                'district_id'=>3,
                'postcode'=>'90722',
                'latitude'=>7.2167,
                'longitude'=>81.0667
                ] );
                
                
                            
                City::create( [
                'id'=>176,
                'name_en'=>'Ambadandegama',
                'name_si'=>'අඹදන්ඩෙගම',
                'district_id'=>3,
                'postcode'=>'90108',
                'latitude'=>6.81591,
                'longitude'=>81.056492
                ] );
                
                
                            
                City::create( [
                'id'=>177,
                'name_en'=>'Ambagasdowa',
                'name_si'=>'අඹගස්දූව',
                'district_id'=>3,
                'postcode'=>'90300',
                'latitude'=>6.928519,
                'longitude'=>80.892126
                ] );
                
                
                            
                City::create( [
                'id'=>178,
                'name_en'=>'Arawa',
                'name_si'=>'අරාව',
                'district_id'=>3,
                'postcode'=>'90017',
                'latitude'=>7.162769,
                'longitude'=>81.07755
                ] );
                
                
                            
                City::create( [
                'id'=>179,
                'name_en'=>'Arawakumbura',
                'name_si'=>'අරාවකුඹුර',
                'district_id'=>3,
                'postcode'=>'90532',
                'latitude'=>7.084925,
                'longitude'=>81.198802
                ] );
                
                
                            
                City::create( [
                'id'=>180,
                'name_en'=>'Arawatta',
                'name_si'=>'අරාවත්ත',
                'district_id'=>3,
                'postcode'=>'90712',
                'latitude'=>7.328715,
                'longitude'=>81.036976
                ] );
                
                
                            
                City::create( [
                'id'=>181,
                'name_en'=>'Atakiriya',
                'name_si'=>'අටකිරියාව',
                'district_id'=>3,
                'postcode'=>'90542',
                'latitude'=>7.0667,
                'longitude'=>81.1056
                ] );
                
                
                            
                City::create( [
                'id'=>182,
                'name_en'=>'Badulla',
                'name_si'=>'බදුල්ල',
                'district_id'=>3,
                'postcode'=>'90000',
                'latitude'=>6.995365,
                'longitude'=>81.048438
                ] );
                
                
                            
                City::create( [
                'id'=>183,
                'name_en'=>'Baduluoya',
                'name_si'=>'බදුලුඔය',
                'district_id'=>3,
                'postcode'=>'90019',
                'latitude'=>7.151852,
                'longitude'=>81.023867
                ] );
                
                
                            
                City::create( [
                'id'=>184,
                'name_en'=>'Ballaketuwa',
                'name_si'=>'බල්ලකැටුව',
                'district_id'=>3,
                'postcode'=>'90092',
                'latitude'=>6.862905,
                'longitude'=>81.097249
                ] );
                
                
                            
                City::create( [
                'id'=>185,
                'name_en'=>'Bambarapana',
                'name_si'=>'බඹරපාන',
                'district_id'=>3,
                'postcode'=>'90322',
                'latitude'=>7.1167,
                'longitude'=>81.0375
                ] );
                
                
                            
                City::create( [
                'id'=>186,
                'name_en'=>'Bandarawela',
                'name_si'=>'බණ්ඩාරවෙල',
                'district_id'=>3,
                'postcode'=>'90100',
                'latitude'=>6.828867,
                'longitude'=>80.990898
                ] );
                
                
                            
                City::create( [
                'id'=>187,
                'name_en'=>'Beramada',
                'name_si'=>'බෙරමඩ',
                'district_id'=>3,
                'postcode'=>'90066',
                'latitude'=>7.055713,
                'longitude'=>80.987238
                ] );
                
                
                            
                City::create( [
                'id'=>188,
                'name_en'=>'Bibilegama',
                'name_si'=>'බිබිලේගම',
                'district_id'=>3,
                'postcode'=>'90502',
                'latitude'=>6.887473,
                'longitude'=>81.141268
                ] );
                
                
                            
                City::create( [
                'id'=>189,
                'name_en'=>'Boragas',
                'name_si'=>'බොරගස්',
                'district_id'=>3,
                'postcode'=>'90362',
                'latitude'=>6.901625,
                'longitude'=>80.840162
                ] );
                
                
                            
                City::create( [
                'id'=>190,
                'name_en'=>'Boralanda',
                'name_si'=>'බොරලන්ද',
                'district_id'=>3,
                'postcode'=>'90170',
                'latitude'=>6.828637,
                'longitude'=>80.881603
                ] );
                
                
                            
                City::create( [
                'id'=>191,
                'name_en'=>'Bowela',
                'name_si'=>'බෝවෙල',
                'district_id'=>3,
                'postcode'=>'90302',
                'latitude'=>6.95,
                'longitude'=>80.9333
                ] );
                
                
                            
                City::create( [
                'id'=>192,
                'name_en'=>'Central Camp',
                'name_si'=>'මධ්‍යම කඳවුර',
                'district_id'=>3,
                'postcode'=>'32050',
                'latitude'=>7.3589,
                'longitude'=>81.1759
                ] );
                
                
                            
                City::create( [
                'id'=>193,
                'name_en'=>'Damanewela',
                'name_si'=>'දමනෙවෙල',
                'district_id'=>3,
                'postcode'=>'32126',
                'latitude'=>7.2125,
                'longitude'=>81.0583
                ] );
                
                
                            
                City::create( [
                'id'=>194,
                'name_en'=>'Dambana',
                'name_si'=>'දඹාන',
                'district_id'=>3,
                'postcode'=>'90714',
                'latitude'=>7.3583,
                'longitude'=>81.1083
                ] );
                
                
                            
                City::create( [
                'id'=>195,
                'name_en'=>'Dehiattakandiya',
                'name_si'=>'දෙහිඅත්තකන්ඩිය',
                'district_id'=>3,
                'postcode'=>'32150',
                'latitude'=>7.2125,
                'longitude'=>81.0583
                ] );
                
                
                            
                City::create( [
                'id'=>196,
                'name_en'=>'Demodara',
                'name_si'=>'දෙමෝදර',
                'district_id'=>3,
                'postcode'=>'90080',
                'latitude'=>6.899055,
                'longitude'=>81.053273
                ] );
                
                
                            
                City::create( [
                'id'=>197,
                'name_en'=>'Diganatenna',
                'name_si'=>'දිගනතැන්න',
                'district_id'=>3,
                'postcode'=>'90132',
                'latitude'=>6.8667,
                'longitude'=>80.9667
                ] );
                
                
                            
                City::create( [
                'id'=>198,
                'name_en'=>'Dikkapitiya',
                'name_si'=>'දික්කපිටිය',
                'district_id'=>3,
                'postcode'=>'90214',
                'latitude'=>6.7381,
                'longitude'=>80.9669
                ] );
                
                
                            
                City::create( [
                'id'=>199,
                'name_en'=>'Dimbulana',
                'name_si'=>'දිඹුලාන',
                'district_id'=>3,
                'postcode'=>'90324',
                'latitude'=>7.006897,
                'longitude'=>80.948431
                ] );
                
                
                            
                City::create( [
                'id'=>200,
                'name_en'=>'Divulapelessa',
                'name_si'=>'දිවුලපැලැස්ස',
                'district_id'=>3,
                'postcode'=>'90726',
                'latitude'=>7.2167,
                'longitude'=>81.0667
                ] );
                
                
                            
                City::create( [
                'id'=>201,
                'name_en'=>'Diyatalawa',
                'name_si'=>'දියතලාව',
                'district_id'=>3,
                'postcode'=>'90150',
                'latitude'=>6.8,
                'longitude'=>80.9667
                ] );
                
                
                            
                City::create( [
                'id'=>202,
                'name_en'=>'Dulgolla',
                'name_si'=>'දුල්ගොල්ල',
                'district_id'=>3,
                'postcode'=>'90104',
                'latitude'=>6.819618,
                'longitude'=>81.012115
                ] );
                
                
                            
                City::create( [
                'id'=>203,
                'name_en'=>'Ekiriyankumbura',
                'name_si'=>'ඇකිරියන්කුඹුර',
                'district_id'=>3,
                'postcode'=>'91502',
                'latitude'=>7.269736,
                'longitude'=>81.226709
                ] );
                
                
                            
                City::create( [
                'id'=>204,
                'name_en'=>'Ella',
                'name_si'=>'ඇල්ල',
                'district_id'=>3,
                'postcode'=>'90090',
                'latitude'=>6.874485,
                'longitude'=>81.050937
                ] );
                
                
                            
                City::create( [
                'id'=>205,
                'name_en'=>'Ettampitiya',
                'name_si'=>'ඇට්ටම්පිටිය',
                'district_id'=>3,
                'postcode'=>'90140',
                'latitude'=>6.9342,
                'longitude'=>80.9853
                ] );
                
                
                            
                City::create( [
                'id'=>206,
                'name_en'=>'Galauda',
                'name_si'=>'ගලඋඩ',
                'district_id'=>3,
                'postcode'=>'90065',
                'latitude'=>7.037347,
                'longitude'=>80.981759
                ] );
                
                
                            
                City::create( [
                'id'=>207,
                'name_en'=>'Galporuyaya',
                'name_si'=>'ගල්පොරුයාය',
                'district_id'=>3,
                'postcode'=>'90752',
                'latitude'=>7.4,
                'longitude'=>81.05
                ] );
                
                
                            
                City::create( [
                'id'=>208,
                'name_en'=>'Gawarawela',
                'name_si'=>'ගවරවෙල',
                'district_id'=>3,
                'postcode'=>'90082',
                'latitude'=>6.897394,
                'longitude'=>81.069668
                ] );
                
                
                            
                City::create( [
                'id'=>209,
                'name_en'=>'Girandurukotte',
                'name_si'=>'ගිරාඳුරුකෝට්ටෙ',
                'district_id'=>3,
                'postcode'=>'90750',
                'latitude'=>7.4,
                'longitude'=>81.05
                ] );
                
                
                            
                City::create( [
                'id'=>210,
                'name_en'=>'Godunna',
                'name_si'=>'ගොඩුන්න',
                'district_id'=>3,
                'postcode'=>'90067',
                'latitude'=>7.071959,
                'longitude'=>80.975003
                ] );
                
                
                            
                City::create( [
                'id'=>211,
                'name_en'=>'Gurutalawa',
                'name_si'=>'ගුරුතලාව',
                'district_id'=>3,
                'postcode'=>'90208',
                'latitude'=>6.8431,
                'longitude'=>80.9228
                ] );
                
                
                            
                City::create( [
                'id'=>212,
                'name_en'=>'Haldummulla',
                'name_si'=>'හල්දුම්මුල්ල',
                'district_id'=>3,
                'postcode'=>'90180',
                'latitude'=>6.77061,
                'longitude'=>80.884385
                ] );
                
                
                            
                City::create( [
                'id'=>213,
                'name_en'=>'Hali Ela',
                'name_si'=>'හාලි ඇල',
                'district_id'=>3,
                'postcode'=>'90060',
                'latitude'=>6.95,
                'longitude'=>81.0333
                ] );
                
                
                            
                City::create( [
                'id'=>214,
                'name_en'=>'Hangunnawa',
                'name_si'=>'හඟුන්නෑව',
                'district_id'=>3,
                'postcode'=>'90224',
                'latitude'=>6.948019,
                'longitude'=>80.871427
                ] );
                
                
                            
                City::create( [
                'id'=>215,
                'name_en'=>'Haputale',
                'name_si'=>'හපුතලේ',
                'district_id'=>3,
                'postcode'=>'90160',
                'latitude'=>6.7667,
                'longitude'=>80.9667
                ] );
                
                
                            
                City::create( [
                'id'=>216,
                'name_en'=>'Hebarawa',
                'name_si'=>'හබරාව',
                'district_id'=>3,
                'postcode'=>'90724',
                'latitude'=>7.2167,
                'longitude'=>81.0667
                ] );
                
                
                            
                City::create( [
                'id'=>217,
                'name_en'=>'Heeloya',
                'name_si'=>'හීලොය',
                'district_id'=>3,
                'postcode'=>'90112',
                'latitude'=>6.8212,
                'longitude'=>80.9407
                ] );
                
                
                            
                City::create( [
                'id'=>218,
                'name_en'=>'Helahalpe',
                'name_si'=>'හෙලහල්පේ',
                'district_id'=>3,
                'postcode'=>'90122',
                'latitude'=>6.8212,
                'longitude'=>80.9407
                ] );
                
                
                            
                City::create( [
                'id'=>219,
                'name_en'=>'Helapupula',
                'name_si'=>'හෙලපුපුළ',
                'district_id'=>3,
                'postcode'=>'90094',
                'latitude'=>6.8556,
                'longitude'=>81.0722
                ] );
                
                
                            
                City::create( [
                'id'=>220,
                'name_en'=>'Hopton',
                'name_si'=>'හෝප්ටන්',
                'district_id'=>3,
                'postcode'=>'90524',
                'latitude'=>6.9594,
                'longitude'=>81.1552
                ] );
                
                
                            
                City::create( [
                'id'=>221,
                'name_en'=>'Idalgashinna',
                'name_si'=>'ඉදල්ගස්ඉන්න',
                'district_id'=>3,
                'postcode'=>'96167',
                'latitude'=>6.7833,
                'longitude'=>80.9
                ] );
                
                
                            
                City::create( [
                'id'=>222,
                'name_en'=>'Kahataruppa',
                'name_si'=>'කහටරුප්ප',
                'district_id'=>3,
                'postcode'=>'90052',
                'latitude'=>7.023705,
                'longitude'=>81.105188
                ] );
                
                
                            
                City::create( [
                'id'=>223,
                'name_en'=>'Kalugahakandura',
                'name_si'=>'කළුගහකණ්ඳුර',
                'district_id'=>3,
                'postcode'=>'90546',
                'latitude'=>7.123675,
                'longitude'=>81.094178
                ] );
                
                
                            
                City::create( [
                'id'=>224,
                'name_en'=>'Kalupahana',
                'name_si'=>'කළුපහණ',
                'district_id'=>3,
                'postcode'=>'90186',
                'latitude'=>6.770298,
                'longitude'=>80.854521
                ] );
                
                
                            
                City::create( [
                'id'=>225,
                'name_en'=>'Kebillawela',
                'name_si'=>'කොබිල්ලවෙල',
                'district_id'=>3,
                'postcode'=>'90102',
                'latitude'=>6.816937,
                'longitude'=>80.993072
                ] );
                
                
                            
                City::create( [
                'id'=>226,
                'name_en'=>'Kendagolla',
                'name_si'=>'කන්දෙගොල්ල',
                'district_id'=>3,
                'postcode'=>'90048',
                'latitude'=>6.990765,
                'longitude'=>81.110073
                ] );
                
                
                            
                City::create( [
                'id'=>227,
                'name_en'=>'Keselpotha',
                'name_si'=>'කෙසෙල්පොත',
                'district_id'=>3,
                'postcode'=>'90738',
                'latitude'=>7.32819,
                'longitude'=>81.083285
                ] );
                
                
                            
                City::create( [
                'id'=>228,
                'name_en'=>'Ketawatta',
                'name_si'=>'කේතවත්ත',
                'district_id'=>3,
                'postcode'=>'90016',
                'latitude'=>7.103503,
                'longitude'=>81.080813
                ] );
                
                
                            
                City::create( [
                'id'=>229,
                'name_en'=>'Kiriwanagama',
                'name_si'=>'කිරිවනගම',
                'district_id'=>3,
                'postcode'=>'90184',
                'latitude'=>6.971183,
                'longitude'=>80.91551
                ] );
                
                
                            
                City::create( [
                'id'=>230,
                'name_en'=>'Koslanda',
                'name_si'=>'කොස්ලන්ද',
                'district_id'=>3,
                'postcode'=>'90190',
                'latitude'=>6.759935,
                'longitude'=>81.027417
                ] );
                
                
                            
                City::create( [
                'id'=>231,
                'name_en'=>'Kuruwitenna',
                'name_si'=>3,
                'district_id'=>'90728',
                'postcode'=>7.2167,
                'latitude'=>81.0667,
                'longitude'=>81.027417                
                ] );
                
                
                            
                City::create( [
                'id'=>232,
                'name_en'=>'Kuttiyagolla',
                'name_si'=>3,
                'district_id'=>'90046',
                'postcode'=>7.0167,
                'latitude'=>81.0833,
                'longitude'=>81.027417                

                ] );
                
                
                            
                City::create( [
                'id'=>233,
                'name_en'=>'Landewela',
                'name_si'=>3,
                'district_id'=>'90068',
                'postcode'=>7.002113,
                'latitude'=>81.000496,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>234,
                'name_en'=>'Liyangahawela',
                'name_si'=>3,
                'district_id'=>'90106',
                'postcode'=>6.817452,
                'latitude'=>81.032456,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>235,
                'name_en'=>'Lunugala',
                'name_si'=>3,
                'district_id'=>'90530',
                'postcode'=>7.041299,
                'latitude'=>81.199335,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>236,
                'name_en'=>'Lunuwatta',
                'name_si'=>3,
                'district_id'=>'90310',
                'postcode'=>6.953933,
                'latitude'=>80.917059,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>237,
                'name_en'=>'Madulsima',
                'name_si'=>3,
                'district_id'=>'90535',
                'postcode'=>7.045064,
                'latitude'=>81.133375,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>238,
                'name_en'=>'Mahiyanganaya',
                'name_si'=>3,
                'district_id'=>'90700',
                'postcode'=>7.2444,
                'latitude'=>81.1167,
                'longitude'=>81.027417 
                
                ] );
                
                
                            
                City::create( [
                'id'=>239,
                'name_en'=>'Makulella',
                'name_si'=>3,
                'district_id'=>'90114',
                'postcode'=>6.8212,
                'latitude'=>80.9407,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>240,
                'name_en'=>'Malgoda',
                'name_si'=>3,
                'district_id'=>'90754',
                'postcode'=>7.4,
                'latitude'=>81.05,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>241,
                'name_en'=>'Mapakadawewa',
                'name_si'=>3,
                'district_id'=>'90730',
                'postcode'=>7.3,
                'latitude'=>81.1167,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>242,
                'name_en'=>'Maspanna',
                'name_si'=>3,
                'district_id'=>'90328',
                'postcode'=>7.024427,
                'latitude'=>80.942159,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>243,
                'name_en'=>'Maussagolla',
                'name_si'=>3,
                'district_id'=>'90582',
                'postcode'=>6.898433,
                'latitude'=>81.147817,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>244,
                'name_en'=>'Mawanagama',
                'name_si'=>3,
                'district_id'=>'32158',
                'postcode'=>7.2125,
                'latitude'=>81.0583,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>245,
                'name_en'=>'Medawela Udukinda',
                'name_si'=>3,
                'district_id'=>'90218',
                'postcode'=>6.846,
                'latitude'=>80.9279,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>246,
                'name_en'=>'Meegahakiula',
                'name_si'=>3,
                'district_id'=>'90015',
                'postcode'=>7.0833,
                'latitude'=>80.9833,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>247,
                'name_en'=>'Metigahatenna',
                'name_si'=>3,
                'district_id'=>'90540',
                'postcode'=>6.9667,
                'latitude'=>81.0833,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>248,
                'name_en'=>'Mirahawatta',
                'name_si'=>3,
                'district_id'=>'90134',
                'postcode'=>6.8817,
                'latitude'=>80.9347,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>249,
                'name_en'=>'Miriyabedda',
                'name_si'=>3,
                'district_id'=>'90504',
                'postcode'=>6.9167,
                'latitude'=>81.15,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>250,
                'name_en'=>'Nawamedagama',
                'name_si'=>3,
                'district_id'=>'32120',
                'postcode'=>7.2125,
                'latitude'=>81.0583,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>251,
                'name_en'=>'Nelumgama',
                'name_si'=>3,
                'district_id'=>'90042',
                'postcode'=>7,
                'latitude'=>81.0917,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>252,
                'name_en'=>'Nikapotha',
                'name_si'=>3,
                'district_id'=>'90165',
                'postcode'=>6.740622,
                'latitude'=>80.97083,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>253,
                'name_en'=>'Nugatalawa',
                'name_si'=>3,
                'district_id'=>'90216',
                'postcode'=>6.9,
                'latitude'=>80.8833,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>254,
                'name_en'=>'Ohiya',
                'name_si'=>3,
                'district_id'=>'90168',
                'postcode'=>6.821352,
                'latitude'=>80.841789,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>255,
                'name_en'=>'Pahalarathkinda',
                'name_si'=>3,
                'district_id'=>'90756',
                'postcode'=>7.4,
                'latitude'=>81.05,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>256,
                'name_en'=>'Pallekiruwa',
                'name_si'=>3,
                'district_id'=>'90534',
                'postcode'=>7.007551,
                'latitude'=>81.227033,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>257,
                'name_en'=>'Passara',
                'name_si'=>3,
                'district_id'=>'90500',
                'postcode'=>6.935017,
                'latitude'=>81.151166,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>258,
                'name_en'=>'Pattiyagedara',
                'name_si'=>3,
                'district_id'=>'90138',
                'postcode'=>6.8742,
                'latitude'=>80.9507,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>259,
                'name_en'=>'Pelagahatenna',
                'name_si'=>3,
                'district_id'=>'90522',
                'postcode'=>6.9594,
                'latitude'=>81.1552,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>260,
                'name_en'=>'Perawella',
                'name_si'=>3,
                'district_id'=>'90222',
                'postcode'=>6.943148,
                'latitude'=>80.84264,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>261,
                'name_en'=>'Pitamaruwa',
                'name_si'=>3,
                'district_id'=>'90544',
                'postcode'=>7.106546,
                'latitude'=>81.135882,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>262,
                'name_en'=>'Pitapola',
                'name_si'=>3,
                'district_id'=>'90171',
                'postcode'=>6.803692,
                'latitude'=>80.884474,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>263,
                'name_en'=>'Puhulpola',
                'name_si'=>3,
                'district_id'=>'90212',
                'postcode'=>6.907145,
                'latitude'=>80.931109,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>264,
                'name_en'=>'Rajagalatenna',
                'name_si'=>3,
                'district_id'=>'32068',
                'postcode'=>7.5458,
                'latitude'=>81.125,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>265,
                'name_en'=>'Ratkarawwa',
                'name_si'=>3,
                'district_id'=>'90164',
                'postcode'=>6.8,
                'latitude'=>80.9167,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>266,
                'name_en'=>'Ridimaliyadda',
                'name_si'=>3,
                'district_id'=>'90704',
                'postcode'=>7.2333,
                'latitude'=>81.1,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>267,
                'name_en'=>'Silmiyapura',
                'name_si'=>3,
                'district_id'=>'90364',
                'postcode'=>6.912388,
                'latitude'=>80.843988,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>268,
                'name_en'=>'Sirimalgoda',
                'name_si'=>3,
                'district_id'=>'90044',
                'postcode'=>7.003857,
                'latitude'=>81.073671,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>269,
                'name_en'=>'Siripura',
                'name_si'=>3,
                'district_id'=>'32155',
                'postcode'=>7.2125,
                'latitude'=>81.0583,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>270,
                'name_en'=>'Sorabora Colony',
                'name_si'=>3,
                'district_id'=>'90718',
                'postcode'=>7.3583,
                'latitude'=>81.1083,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>271,
                'name_en'=>'Soragune',
                'name_si'=>3,
                'district_id'=>'90183',
                'postcode'=>6.8333,
                'latitude'=>80.8778,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>272,
                'name_en'=>'Soranatota',
                'name_si'=>3,
                'district_id'=>'90008',
                'postcode'=>7.0167,
                'latitude'=>81.05,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>273,
                'name_en'=>'Taldena',
                'name_si'=>3,
                'district_id'=>'90014',
                'postcode'=>7.0833,
                'latitude'=>81.05,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>274,
                'name_en'=>'Timbirigaspitiya',
                'name_si'=>3,
                'district_id'=>'90012',
                'postcode'=>7.0333,
                'latitude'=>81.05,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>275,
                'name_en'=>'Uduhawara',
                'name_si'=>3,
                'district_id'=>'90226',
                'postcode'=>6.94706,
                'latitude'=>80.85877,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>276,
                'name_en'=>'Uraniya',
                'name_si'=>3,
                'district_id'=>'90702',
                'postcode'=>7.237143,
                'latitude'=>81.102818,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>277,
                'name_en'=>'Uva Karandagolla',
                'name_si'=>3,
                'district_id'=>'90091',
                'postcode'=>6.8333,
                'latitude'=>81.0667,
                'longitude'=>81.027417
                ] );
                
                
                            
                City::create( [
                'id'=>278,
                'name_en'=>'Uva Mawelagama',
                'name_si'=>3,
                'district_id'=>'90192',
                'postcode'=>6.7333,
                'latitude'=>81.0167,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>279,
                'name_en'=>'Uva Tenna',
                'name_si'=>3,
                'district_id'=>'90188',
                'postcode'=>6.8333,
                'latitude'=>80.8778,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>280,
                'name_en'=>'Uva Tissapura',
                'name_si'=>3,
                'district_id'=>'90734',
                'postcode'=>7.3,
                'latitude'=>81.1167,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>281,
                'name_en'=>'Welimada',
                'name_si'=>3,
                'district_id'=>'90200',
                'postcode'=>6.906059,
                'latitude'=>80.913222,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>282,
                'name_en'=>'Werunketagoda',
                'name_si'=>3,
                'district_id'=>'32062',
                'postcode'=>7.5458,
                'latitude'=>81.125,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>283,
                'name_en'=>'Wewatta',
                'name_si'=>3,
                'district_id'=>'90716',
                'postcode'=>7.337729,
                'latitude'=>81.201255,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>284,
                'name_en'=>'Wineethagama',
                'name_si'=>3,
                'district_id'=>'90034',
                'postcode'=>7.029,
                'latitude'=>80.937,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>285,
                'name_en'=>'Yalagamuwa',
                'name_si'=>3,
                'district_id'=>'90329',
                'postcode'=>7.047834,
                'latitude'=>80.950541,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>286,
                'name_en'=>'Yalwela',
                'name_si'=>3,
                'district_id'=>'90706',
                'postcode'=>7.2667,
                'latitude'=>81.15,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>287,
                'name_en'=>'Addalaichenai',
                'name_si'=>4,
                'district_id'=>'32350',
                'postcode'=>7.4833,
                'latitude'=>81.75,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>288,
                'name_en'=>'Ampilanthurai',
                'name_si'=>'අම්පිලන්තුරෙයි',
                'district_id'=>4,
                'postcode'=>'30162',
                'latitude'=>7.8597,
                'longitude'=>81.4411,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>289,
                'name_en'=>'Araipattai',
                'name_si'=>4,
                'district_id'=>'30150',
                'postcode'=>7.667705,
                'latitude'=>81.725335,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>290,
                'name_en'=>'Ayithiyamalai',
                'name_si'=>4,
                'district_id'=>'30362',
                'postcode'=>7.670934,
                'latitude'=>81.574798,
                'longitude'=>81.027417 
                ] );
                
                
                            
                City::create( [
                'id'=>291,
                'name_en'=>'Bakiella',
                'name_si'=>4,
                'district_id'=>'30206',
                'postcode'=>7.5083,
                'latitude'=>81.7583,
                'longitude'=>81.7
                ] );
                
                
                            
                City::create( [
                'id'=>292,
                'name_en'=>'Batticaloa',
                'name_si'=>'මඩකලපුව',
                'district_id'=>4,
                'postcode'=>'30000',
                'latitude'=>7.7167,
                'longitude'=>81.7
                ] );
                
                
                            
                City::create( [
                'id'=>293,
                'name_en'=>'Cheddipalayam',
                'name_si'=>'චෙඩ්ඩිපලයම්',
                'district_id'=>4,
                'postcode'=>'30194',
                'latitude'=>7.575161,
                'longitude'=>81.783189
                ] );
                
                
                            
                City::create( [
                'id'=>294,
                'name_en'=>'Chenkaladi',
                'name_si'=>'චෙන්කලඩි',
                'district_id'=>4,
                'postcode'=>'30350',
                'latitude'=>7.7833,
                'longitude'=>81.6
                ] );
                
                
                            
                City::create( [
                'id'=>295,
                'name_en'=>'Eravur',
                'name_si'=>'එරාවූර්',
                'district_id'=>4,
                'postcode'=>'30300',
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>296,
                'name_en'=>'Kaluwanchikudi',
                'name_si'=>4,
                'district_id'=>'30200',
                'postcode'=>7.5167,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>297,
                'name_en'=>'Kaluwankemy',
                'name_si'=>4,
                'district_id'=>'30372',
                'postcode'=>7.8,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>298,
                'name_en'=>'Kannankudah',
                'name_si'=>4,
                'district_id'=>'30016',
                'postcode'=>7.675505,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>299,
                'name_en'=>'Karadiyanaru',
                'name_si'=>4,
                'district_id'=>'30354',
                'postcode'=>7.689478,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>300,
                'name_en'=>'Kathiraveli',
                'name_si'=>4,
                'district_id'=>'30456',
                'postcode'=>8.243933,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>301,
                'name_en'=>'Kattankudi',
                'name_si'=>4,
                'district_id'=>'30100',
                'postcode'=>7.675,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>302,
                'name_en'=>'Kiran',
                'name_si'=>4,
                'district_id'=>'30394',
                'postcode'=>7.866841,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>303,
                'name_en'=>'Kirankulam',
                'name_si'=>4,
                'district_id'=>'30159',
                'postcode'=>7.615628,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>304,
                'name_en'=>'Koddaikallar',
                'name_si'=>4,
                'district_id'=>'30249',
                'postcode'=>7.6389,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>305,
                'name_en'=>'Kokkaddichcholai',
                'name_si'=>4,
                'district_id'=>'30160',
                'postcode'=>7.8597,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>306,
                'name_en'=>'Kurukkalmadam',
                'name_si'=>4,
                'district_id'=>'30192',
                'postcode'=>7.594069,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>307,
                'name_en'=>'Mandur',
                'name_si'=>4,
                'district_id'=>'30220',
                'postcode'=>7.482114,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>308,
                'name_en'=>'Miravodai',
                'name_si'=>4,
                'district_id'=>'30426',
                'postcode'=>7.9,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>309,
                'name_en'=>'Murakottanchanai',
                'name_si'=>4,
                'district_id'=>'30392',
                'postcode'=>7.8667,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>310,
                'name_en'=>'Navagirinagar',
                'name_si'=>4,
                'district_id'=>'30238',
                'postcode'=>7.525,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>311,
                'name_en'=>'Navatkadu',
                'name_si'=>4,
                'district_id'=>'30018',
                'postcode'=>7.5833,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>312,
                'name_en'=>'Oddamavadi',
                'name_si'=>4,
                'district_id'=>'30420',
                'postcode'=>7.9167,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>313,
                'name_en'=>'Palamunai',
                'name_si'=>4,
                'district_id'=>'32354',
                'postcode'=>7.4833,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>314,
                'name_en'=>'Pankudavely',
                'name_si'=>4,
                'district_id'=>'30352',
                'postcode'=>7.75,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>315,
                'name_en'=>'Periyaporativu',
                'name_si'=>4,
                'district_id'=>'30230',
                'postcode'=>7.536243,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>316,
                'name_en'=>'Periyapullumalai',
                'name_si'=>4,
                'district_id'=>'30358',
                'postcode'=>7.561255,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>317,
                'name_en'=>'Pillaiyaradi',
                'name_si'=>4,
                'district_id'=>'30022',
                'postcode'=>7.75,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>318,
                'name_en'=>'Punanai',
                'name_si'=>4,
                'district_id'=>'30428',
                'postcode'=>7.9667,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>319,
                'name_en'=>'Thannamunai',
                'name_si'=>4,
                'district_id'=>'30024',
                'postcode'=>7.76355,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>320,
                'name_en'=>'Thettativu',
                'name_si'=>4,
                'district_id'=>'30196',
                'postcode'=>7.5833,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>321,
                'name_en'=>'Thikkodai',
                'name_si'=>4,
                'district_id'=>'30236',
                'postcode'=>7.525269,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>322,
                'name_en'=>'Thirupalugamam',
                'name_si'=>4,
                'district_id'=>'30234',
                'postcode'=>7.525,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>323,
                'name_en'=>'Unnichchai',
                'name_si'=>4,
                'district_id'=>'30364',
                'postcode'=>7.6167,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>324,
                'name_en'=>'Vakaneri',
                'name_si'=>4,
                'district_id'=>'30424',
                'postcode'=>7.9167,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>325,
                'name_en'=>'Vakarai',
                'name_si'=>4,
                'district_id'=>'30450',
                'postcode'=>8.165968,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>326,
                'name_en'=>'Valaichenai',
                'name_si'=>4,
                'district_id'=>'30400',
                'postcode'=>7.7,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>327,
                'name_en'=>'Vantharumoolai',
                'name_si'=>4,
                'district_id'=>'30376',
                'postcode'=>7.807445,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>328,
                'name_en'=>'Vellavely',
                'name_si'=>4,
                'district_id'=>'30204',
                'postcode'=>7.5,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>329,
                'name_en'=>'Akarawita',
                'name_si'=>'අකරවිට',
                'district_id'=>5,
                'postcode'=>'10732',
                'latitude'=>6.95,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>330,
                'name_en'=>'Ambalangoda',
                'name_si'=>'අම්බලන්ගොඩ',
                'district_id'=>5,
                'postcode'=>'80300',
                'latitude'=>6.77533,
                'longitude'=>79.96413
                ] );
                
                
                            
                City::create( [
                'id'=>331,
                'name_en'=>'Athurugiriya',
                'name_si'=>'අතුරුගිරිය',
                'district_id'=>5,
                'postcode'=>'10150',
                'latitude'=>6.873072,
                'longitude'=>79.997214
                ] );
                
                
                            
                City::create( [
                'id'=>332,
                'name_en'=>'Avissawella',
                'name_si'=>'අවිස්සාවේල්ල',
                'district_id'=>5,
                'postcode'=>'10700',
                'latitude'=>6.955003,
                'longitude'=>80.211692
                ] );
                
                
                            
                City::create( [
                'id'=>333,
                'name_en'=>'Batawala',
                'name_si'=>'බටවැල',
                'district_id'=>5,
                'postcode'=>'10513',
                'latitude'=>6.877924,
                'longitude'=>80.051592
                ] );
                
                
                            
                City::create( [
                'id'=>334,
                'name_en'=>'Battaramulla',
                'name_si'=>'බත්තරමුල්ල',
                'district_id'=>5,
                'postcode'=>'10120',
                'latitude'=>6.900299,
                'longitude'=>79.922136
                ] );
                
                
                            
                City::create( [
                'id'=>335,
                'name_en'=>'Biyagama',
                'name_si'=>'බියගම',
                'district_id'=>5,
                'postcode'=>'11650',
                'latitude'=>6.9408,
                'longitude'=>79.9889
                ] );
                
                
                            
                City::create( [
                'id'=>336,
                'name_en'=>'Bope',
                'name_si'=>'බෝපෙ',
                'district_id'=>5,
                'postcode'=>'10522',
                'latitude'=>6.8333,
                'longitude'=>80.1167
                ] );
                
                
                            
                City::create( [
                'id'=>337,
                'name_en'=>'Boralesgamuwa',
                'name_si'=>'බොරලැස්ගමුව',
                'district_id'=>5,
                'postcode'=>'10290',
                'latitude'=>6.8425,
                'longitude'=>79.9006
                ] );
                
                
                            
                City::create( [
                'id'=>338,
                'name_en'=>'Colombo 8',
                'name_si'=>'කොළඹ 8',
                'district_id'=>5,
                'postcode'=>'00800',
                'latitude'=>6.914722,
                'longitude'=>79.877778
                ] );
                
                
                            
                City::create( [
                'id'=>339,
                'name_en'=>'Dedigamuwa',
                'name_si'=>'දැඩිගමුව',
                'district_id'=>5,
                'postcode'=>'10656',
                'latitude'=>6.9115,
                'longitude'=>80.0622
                ] );
                
                
                            
                City::create( [
                'id'=>340,
                'name_en'=>'Dehiwala',
                'name_si'=>'දෙහිවල',
                'district_id'=>5,
                'postcode'=>'10350',
                'latitude'=>6.856387,
                'longitude'=>79.865156
                ] );
                
                
                            
                City::create( [
                'id'=>341,
                'name_en'=>'Deltara',
                'name_si'=>'දෙල්තර',
                'district_id'=>5,
                'postcode'=>'10302',
                'latitude'=>6.7833,
                'longitude'=>79.9167
                ] );
                
                
                            
                City::create( [
                'id'=>342,
                'name_en'=>'Habarakada',
                'name_si'=>'හබරකඩ',
                'district_id'=>5,
                'postcode'=>'10204',
                'latitude'=>6.882518,
                'longitude'=>80.017704
                ] );
                
                
                            
                City::create( [
                'id'=>343,
                'name_en'=>'Hanwella',
                'name_si'=>5,
                'district_id'=>'10650',
                'postcode'=>6.905988,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>344,
                'name_en'=>'Hiripitya',
                'name_si'=>5,
                'district_id'=>'10232',
                'postcode'=>6.85,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>345,
                'name_en'=>'Hokandara',
                'name_si'=>5,
                'district_id'=>'10118',
                'postcode'=>6.890237,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>346,
                'name_en'=>'Homagama',
                'name_si'=>5,
                'district_id'=>'10200',
                'postcode'=>6.85685,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>347,
                'name_en'=>'Horagala',
                'name_si'=>5,
                'district_id'=>'10502',
                'postcode'=>6.807635,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>348,
                'name_en'=>'Kaduwela',
                'name_si'=>5,
                'district_id'=>'10640',
                'postcode'=>6.930497,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>349,
                'name_en'=>'Kaluaggala',
                'name_si'=>5,
                'district_id'=>'11224',
                'postcode'=>6.9167,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>350,
                'name_en'=>'Kapugoda',
                'name_si'=>5,
                'district_id'=>'10662',
                'postcode'=>6.9486,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>351,
                'name_en'=>'Kehelwatta',
                'name_si'=>5,
                'district_id'=>'12550',
                'postcode'=>6.75,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>352,
                'name_en'=>'Kiriwattuduwa',
                'name_si'=>5,
                'district_id'=>'10208',
                'postcode'=>6.804157,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>353,
                'name_en'=>'Kolonnawa',
                'name_si'=>5,
                'district_id'=>'10600',
                'postcode'=>6.933035,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>354,
                'name_en'=>'Kosgama',
                'name_si'=>5,
                'district_id'=>'10730',
                'postcode'=>6.9333,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>355,
                'name_en'=>'Madapatha',
                'name_si'=>5,
                'district_id'=>'10306',
                'postcode'=>6.766824,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>356,
                'name_en'=>'Maharagama',
                'name_si'=>5,
                'district_id'=>'10280',
                'postcode'=>6.843401,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>357,
                'name_en'=>'Malabe',
                'name_si'=>5,
                'district_id'=>'10115',
                'postcode'=>6.901241,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>358,
                'name_en'=>'Moratuwa',
                'name_si'=>5,
                'district_id'=>'10400',
                'postcode'=>6.7733,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>359,
                'name_en'=>'Mount Lavinia',
                'name_si'=>5,
                'district_id'=>'10370',
                'postcode'=>6.838864,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>360,
                'name_en'=>'Mullegama',
                'name_si'=>5,
                'district_id'=>'10202',
                'postcode'=>6.887403,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>361,
                'name_en'=>'Napawela',
                'name_si'=>5,
                'district_id'=>'10704',
                'postcode'=>6.9531,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>362,
                'name_en'=>'Nugegoda',
                'name_si'=>5,
                'district_id'=>'10250',
                'postcode'=>6.877563,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>363,
                'name_en'=>'Padukka',
                'name_si'=>5,
                'district_id'=>'10500',
                'postcode'=>6.837834,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>364,
                'name_en'=>'Pannipitiya',
                'name_si'=>5,
                'district_id'=>'10230',
                'postcode'=>6.843999,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>365,
                'name_en'=>'Piliyandala',
                'name_si'=>5,
                'district_id'=>'10300',
                'postcode'=>6.7981,
                'latitude'=>79.9264,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>366,
                'name_en'=>'Pitipana Homagama',
                'name_si'=>5,
                'district_id'=>'10206',
                'postcode'=>6.8477,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>367,
                'name_en'=>'Polgasowita',
                'name_si'=>5,
                'district_id'=>'10320',
                'postcode'=>6.7842,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>368,
                'name_en'=>'Pugoda',
                'name_si'=>5,
                'district_id'=>'10660',
                'postcode'=>6.9703,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>369,
                'name_en'=>'Ranala',
                'name_si'=>5,
                'district_id'=>'10654',
                'postcode'=>6.915253,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>370,
                'name_en'=>'Siddamulla',
                'name_si'=>5,
                'district_id'=>'10304',
                'postcode'=>6.815785,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>371,
                'name_en'=>'Siyambalagoda',
                'name_si'=>5,
                'district_id'=>'81462',
                'postcode'=>6.800041,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>372,
                'name_en'=>'Sri Jayawardenepu',
                'name_si'=>5,
                'district_id'=>'10100',
                'postcode'=>6.8897,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>373,
                'name_en'=>'Talawatugoda',
                'name_si'=>5,
                'district_id'=>'10116',
                'postcode'=>6.8692,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>374,
                'name_en'=>'Tummodara',
                'name_si'=>5,
                'district_id'=>'10682',
                'postcode'=>6.9061,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>375,
                'name_en'=>'Waga',
                'name_si'=>5,
                'district_id'=>'10680',
                'postcode'=>6.9061,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>376,
                'name_en'=>'Colombo 6',
                'name_si'=>'කොළඹ 6',
                'district_id'=>5,
                'postcode'=>'00600',
                'latitude'=>6.874657,
                'latitude'=>7.768518,
                'longitude'=>81.619817
                ] );
                
                
                            
                City::create( [
                'id'=>377,
                'name_en'=>'Agaliya',
                'name_si'=>'අගලිය',
                'district_id'=>6,
                'postcode'=>'80212',
                'latitude'=>6.1833,
                'longitude'=>80.2
                ] );
                
                
                            
                City::create( [
                'id'=>378,
                'name_en'=>'Ahangama',
                'name_si'=>'අහංගම',
                'district_id'=>6,
                'postcode'=>'80650',
                'latitude'=>5.970765,
                'longitude'=>80.370204
                ] );
                
                
                            
                City::create( [
                'id'=>379,
                'name_en'=>'Ahungalla',
                'name_si'=>'අහුන්ගල්ල',
                'district_id'=>6,
                'postcode'=>'80562',
                'latitude'=>6.315216,
                'longitude'=>80.03029
                ] );
                
                
                            
                City::create( [
                'id'=>380,
                'name_en'=>'Akmeemana',
                'name_si'=>'අක්මීමාන',
                'district_id'=>6,
                'postcode'=>'80090',
                'latitude'=>6.1845,
                'longitude'=>80.3032
                ] );
                
                
                            
                City::create( [
                'id'=>381,
                'name_en'=>'Alawatugoda',
                'name_si'=>'අලවතුගොඩ',
                'district_id'=>6,
                'postcode'=>'20140',
                'latitude'=>6.4167,
                'longitude'=>80
                ] );
                
                
                            
                City::create( [
                'id'=>382,
                'name_en'=>'Aluthwala',
                'name_si'=>'අළුත්වල',
                'district_id'=>6,
                'postcode'=>'80332',
                'latitude'=>6.180801,
                'longitude'=>80.136538
                ] );
                
                
                            
                City::create( [
                'id'=>383,
                'name_en'=>'Ampegama',
                'name_si'=>'අම්පෙගම',
                'district_id'=>6,
                'postcode'=>'80204',
                'latitude'=>6.193907,
                'longitude'=>80.14453
                ] );
                
                
                            
                City::create( [
                'id'=>384,
                'name_en'=>'Amugoda',
                'name_si'=>'අමුගොඩ',
                'district_id'=>6,
                'postcode'=>'80422',
                'latitude'=>6.314635,
                'longitude'=>80.22104
                ] );
                
                
                            
                City::create( [
                'id'=>385,
                'name_en'=>'Anangoda',
                'name_si'=>'අනන්ගොඩ',
                'district_id'=>6,
                'postcode'=>'80044',
                'latitude'=>6.0722,
                'longitude'=>80.2389
                ] );
                
                
                            
                City::create( [
                'id'=>386,
                'name_en'=>'Angulugaha',
                'name_si'=>'අඟුලුගහ',
                'district_id'=>6,
                'postcode'=>'80122',
                'latitude'=>6.036963,
                'longitude'=>80.322148
                ] );
                
                
                            
                City::create( [
                'id'=>387,
                'name_en'=>'Ankokkawala',
                'name_si'=>'අංකොක්කාවල',
                'district_id'=>6,
                'postcode'=>'80048',
                'latitude'=>6.05329,
                'longitude'=>80.274014
                ] );
                
                
                            
                City::create( [
                'id'=>388,
                'name_en'=>'Aselapura',
                'name_si'=>'ඇසලපුර',
                'district_id'=>6,
                'postcode'=>'51072',
                'latitude'=>6.3167,
                'longitude'=>80.0333
                ] );
                
                
                            
                City::create( [
                'id'=>389,
                'name_en'=>'Baddegama',
                'name_si'=>'බද්දේගම',
                'district_id'=>6,
                'postcode'=>'80200',
                'latitude'=>6.165975,
                'longitude'=>80.201841
                ] );
                
                
                            
                City::create( [
                'id'=>390,
                'name_en'=>'Balapitiya',
                'name_si'=>'බලපිටිය',
                'district_id'=>6,
                'postcode'=>'80550',
                'latitude'=>6.269254,
                'longitude'=>80.036054
                ] );
                
                
                            
                City::create( [
                'id'=>391,
                'name_en'=>'Banagala',
                'name_si'=>'බනගල',
                'district_id'=>6,
                'postcode'=>'80143',
                'latitude'=>6.2706,
                'longitude'=>80.42
                ] );
                
                
                            
                City::create( [
                'id'=>392,
                'name_en'=>'Batapola',
                'name_si'=>'බටපොල',
                'district_id'=>6,
                'postcode'=>'80320',
                'latitude'=>6.235697,
                'longitude'=>80.120034
                ] );
                
                
                            
                City::create( [
                'id'=>393,
                'name_en'=>'Bentota',
                'name_si'=>'බෙන්තොට',
                'district_id'=>6,
                'postcode'=>'80500',
                'latitude'=>6.4211,
                'longitude'=>79.9989
                ] );
                
                
                            
                City::create( [
                'id'=>394,
                'name_en'=>'Boossa',
                'name_si'=>'බූස්ස',
                'district_id'=>6,
                'postcode'=>'80270',
                'latitude'=>6.2233,
                'longitude'=>80.2
                ] );
                
                
                            
                City::create( [
                'id'=>395,
                'name_en'=>'Dellawa',
                'name_si'=>'දෙල්ලව',
                'district_id'=>6,
                'postcode'=>'81477',
                'latitude'=>6.335012,
                'longitude'=>80.452741
                ] );
                
                
                            
                City::create( [
                'id'=>396,
                'name_en'=>'Dikkumbura',
                'name_si'=>'දික්කුඹුර',
                'district_id'=>6,
                'postcode'=>'80654',
                'latitude'=>6.012945,
                'longitude'=>80.376153
                ] );
                
                
                            
                City::create( [
                'id'=>397,
                'name_en'=>'Dodanduwa',
                'name_si'=>'දොඩන්දූව',
                'district_id'=>6,
                'postcode'=>'80250',
                'latitude'=>6.0967,
                'longitude'=>80.1456
                ] );
                
                
                            
                City::create( [
                'id'=>398,
                'name_en'=>'Ella Tanabaddegama',
                'name_si'=>'ඇල්ල තනබද්දේගම',
                'district_id'=>6,
                'postcode'=>'80402',
                'latitude'=>6.2922,
                'longitude'=>80.1988
                ] );
                
                
                            
                City::create( [
                'id'=>399,
                'name_en'=>'Elpitiya',
                'name_si'=>'ඇල්පිටිය',
                'district_id'=>6,
                'postcode'=>'80400',
                'latitude'=>6.300214,
                'longitude'=>80.171923
                ] );
                City::create( [
                    'id'=>400,
                    'name_en'=>'Galle',
                    'name_si'=>'ගාල්ල',
                    'district_id'=>6,
                    'postcode'=>'80000',
                    'latitude'=>6.0536,
                    'longitude'=>80.2117
                    ] );
                                
                    City::create( [
                    'id'=>401,
                    'name_en'=>'Ginimellagaha',
                    'name_si'=>'ගිනිමෙල්ලගහ',
                    'district_id'=>6,
                    'postcode'=>'80220',
                    'latitude'=>6.2233,
                    'longitude'=>80.2
                    ] );
                                
                    City::create( [
                    'id'=>402,
                    'name_en'=>'Gintota',
                    'name_si'=>'ගින්තොට',
                    'district_id'=>6,
                    'postcode'=>'80280',
                    'latitude'=>6.0564,
                    'longitude'=>80.1839
                    ] );
                                
                    City::create( [
                    'id'=>403,
                    'name_en'=>'Godahena',
                    'name_si'=>'ගොඩහේන',
                    'district_id'=>6,
                    'postcode'=>'80302',
                    'latitude'=>6.2333,
                    'longitude'=>80.0667
                    ] );
                                
                    City::create( [
                    'id'=>404,
                    'name_en'=>'Gonamulla Junction',
                    'name_si'=>'ගෝනමුල්ල හංදිය',
                    'district_id'=>6,
                    'postcode'=>'80054',
                    'latitude'=>6.0667,
                    'longitude'=>80.3
                    ] );
                                
                    City::create( [
                    'id'=>405,
                    'name_en'=>'Gonapinuwala',
                    'name_si'=>'ගොනාපිනූවල',
                    'district_id'=>6,
                    'postcode'=>'80230',
                    'latitude'=>6.2233,
                    'longitude'=>80.2
                    ] );
                                
                    City::create( [
                    'id'=>406,
                    'name_en'=>'Habaraduwa',
                    'name_si'=>'හබරාදූව',
                    'district_id'=>6,
                    'postcode'=>'80630',
                    'latitude'=>6.0043,
                    'longitude'=>80.326
                    ] );
                                
                    City::create( [
                    'id'=>407,
                    'name_en'=>'Haburugala',
                    'name_si'=>'හබුරුගල',
                    'district_id'=>6,
                    'postcode'=>'80506',
                    'latitude'=>6.4052,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>408,
                    'name_en'=>'Hikkaduwa',
                    'name_si'=>6,
                    'district_id'=>'80240',
                    'postcode'=>6.139535,
                    'latitude'=>80.113201,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>409,
                    'name_en'=>'Hiniduma',
                    'name_si'=>6,
                    'district_id'=>'80080',
                    'postcode'=>6.316028,
                    'latitude'=>80.328888,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>410,
                    'name_en'=>'Hiyare',
                    'name_si'=>6,
                    'district_id'=>'80056',
                    'postcode'=>6.079898,
                    'latitude'=>80.317871,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>411,
                    'name_en'=>'Kahaduwa',
                    'name_si'=>6,
                    'district_id'=>'80460',
                    'postcode'=>6.2244,
                    'latitude'=>80.21,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>412,
                    'name_en'=>'Kahawa',
                    'name_si'=>6,
                    'district_id'=>'80312',
                    'postcode'=>6.185429,
                    'latitude'=>80.07601,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>413,
                    'name_en'=>'Karagoda',
                    'name_si'=>6,
                    'district_id'=>'80151',
                    'postcode'=>6.084182,
                    'latitude'=>80.395041,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>414,
                    'name_en'=>'Karandeniya',
                    'name_si'=>6,
                    'district_id'=>'80360',
                    'postcode'=>6.260467,
                    'latitude'=>80.072462,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>415,
                    'name_en'=>'Kosgoda',
                    'name_si'=>6,
                    'district_id'=>'80570',
                    'postcode'=>6.332288,
                    'latitude'=>80.028315,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>416,
                    'name_en'=>'Kottawagama',
                    'name_si'=>6,
                    'district_id'=>'80062',
                    'postcode'=>6.1375,
                    'latitude'=>80.3419,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>417,
                    'name_en'=>'Kottegoda',
                    'name_si'=>6,
                    'district_id'=>'81180',
                    'postcode'=>6.1667,
                    'latitude'=>80.1,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>418,
                    'name_en'=>'Kuleegoda',
                    'name_si'=>6,
                    'district_id'=>'80328',
                    'postcode'=>6.2167,
                    'latitude'=>80.1167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>419,
                    'name_en'=>'Magedara',
                    'name_si'=>6,
                    'district_id'=>'80152',
                    'postcode'=>6.108129,
                    'latitude'=>80.393927,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>420,
                    'name_en'=>'Mahawela Sinhapura',
                    'name_si'=>6,
                    'district_id'=>'51076',
                    'postcode'=>6.3167,
                    'latitude'=>80.0333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>421,
                    'name_en'=>'Mapalagama',
                    'name_si'=>6,
                    'district_id'=>'80112',
                    'postcode'=>6.234713,
                    'latitude'=>80.27784,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>422,
                    'name_en'=>'Mapalagama Central',
                    'name_si'=>6,
                    'district_id'=>'80116',
                    'postcode'=>6.2167,
                    'latitude'=>80.3,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>423,
                    'name_en'=>'Mattaka',
                    'name_si'=>6,
                    'district_id'=>'80424',
                    'postcode'=>6.302366,
                    'latitude'=>80.254218,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>424,
                    'name_en'=>'Meda-Keembiya',
                    'name_si'=>6,
                    'district_id'=>'80092',
                    'postcode'=>6.1845,
                    'latitude'=>80.3032,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>425,
                    'name_en'=>'Meetiyagoda',
                    'name_si'=>6,
                    'district_id'=>'80330',
                    'postcode'=>6.189135,
                    'latitude'=>80.093504,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>426,
                    'name_en'=>'Nagoda',
                    'name_si'=>6,
                    'district_id'=>'80110',
                    'postcode'=>6.201296,
                    'latitude'=>80.277829,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>427,
                    'name_en'=>'Nakiyadeniya',
                    'name_si'=>6,
                    'district_id'=>'80064',
                    'postcode'=>6.143029,
                    'latitude'=>80.338164,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>428,
                    'name_en'=>'Nawadagala',
                    'name_si'=>6,
                    'district_id'=>'80416',
                    'postcode'=>6.304655,
                    'latitude'=>80.134175,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>429,
                    'name_en'=>'Neluwa',
                    'name_si'=>6,
                    'district_id'=>'80082',
                    'postcode'=>6.37393,
                    'latitude'=>80.363267,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>430,
                    'name_en'=>'Nindana',
                    'name_si'=>6,
                    'district_id'=>'80318',
                    'postcode'=>6.207731,
                    'latitude'=>80.107663,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>431,
                    'name_en'=>'Pahala Millawa',
                    'name_si'=>6,
                    'district_id'=>'81472',
                    'postcode'=>6.293995,
                    'latitude'=>80.475431,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>432,
                    'name_en'=>'Panangala',
                    'name_si'=>6,
                    'district_id'=>'80075',
                    'postcode'=>6.274182,
                    'latitude'=>80.334525,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>433,
                    'name_en'=>'Pannimulla Panagoda',
                    'name_si'=>6,
                    'district_id'=>'80086',
                    'postcode'=>6.36,
                    'latitude'=>80.3653,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>434,
                    'name_en'=>'Parana ThanaYamgoda',
                    'name_si'=>6,
                    'district_id'=>'80114',
                    'postcode'=>6.2167,
                    'latitude'=>80.3,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>435,
                    'name_en'=>'Patana',
                    'name_si'=>6,
                    'district_id'=>'22012',
                    'postcode'=>6.1333,
                    'latitude'=>80.1167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>436,
                    'name_en'=>'Pitigala',
                    'name_si'=>6,
                    'district_id'=>'80420',
                    'postcode'=>6.348894,
                    'latitude'=>80.217851,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>437,
                    'name_en'=>'Poddala',
                    'name_si'=>6,
                    'district_id'=>'80170',
                    'postcode'=>6.1167,
                    'latitude'=>80.2167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>438,
                    'name_en'=>'Polgampola',
                    'name_si'=>6,
                    'district_id'=>'12136',
                    'postcode'=>6.3244,
                    'latitude'=>80.4383,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>439,
                    'name_en'=>'Porawagama',
                    'name_si'=>6,
                    'district_id'=>'80408',
                    'postcode'=>6.279568,
                    'latitude'=>80.231811,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>440,
                    'name_en'=>'Rantotuwila',
                    'name_si'=>6,
                    'district_id'=>'80354',
                    'postcode'=>6.3833,
                    'latitude'=>80.0833,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>441,
                    'name_en'=>'Talagampola',
                    'name_si'=>6,
                    'district_id'=>'80058',
                    'postcode'=>6.0667,
                    'latitude'=>80.3,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>442,
                    'name_en'=>'Talgaspe',
                    'name_si'=>6,
                    'district_id'=>'80406',
                    'postcode'=>6.3,
                    'latitude'=>80.2,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>443,
                    'name_en'=>'Talpe',
                    'name_si'=>6,
                    'district_id'=>'80615',
                    'postcode'=>6.0061,
                    'latitude'=>80.2961,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>444,
                    'name_en'=>'Tawalama',
                    'name_si'=>6,
                    'district_id'=>'80148',
                    'postcode'=>6.3333,
                    'latitude'=>80.3333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>445,
                    'name_en'=>'Tiranagama',
                    'name_si'=>6,
                    'district_id'=>'80244',
                    'postcode'=>6.1333,
                    'latitude'=>80.1167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>446,
                    'name_en'=>'Udalamatta',
                    'name_si'=>6,
                    'district_id'=>'80108',
                    'postcode'=>6.18924,
                    'latitude'=>80.306106,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>447,
                    'name_en'=>'Udugama',
                    'name_si'=>6,
                    'district_id'=>'80070',
                    'postcode'=>6.188469,
                    'latitude'=>80.338951,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>448,
                    'name_en'=>'Uluvitike',
                    'name_si'=>6,
                    'district_id'=>'80168',
                    'postcode'=>6.3056,
                    'latitude'=>80.309,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>449,
                    'name_en'=>'Unawatuna',
                    'name_si'=>6,
                    'district_id'=>'80600',
                    'postcode'=>6.0169,
                    'latitude'=>80.249901,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>450,
                    'name_en'=>'Unenwitiya',
                    'name_si'=>6,
                    'district_id'=>'80214',
                    'postcode'=>6.2417,
                    'latitude'=>80.225,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>451,
                    'name_en'=>'Uragaha',
                    'name_si'=>6,
                    'district_id'=>'80352',
                    'postcode'=>6.35,
                    'latitude'=>80.1167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>452,
                    'name_en'=>'Uragasmanhandiya',
                    'name_si'=>6,
                    'district_id'=>'80350',
                    'postcode'=>6.358461,
                    'latitude'=>80.082277,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>453,
                    'name_en'=>'Wakwella',
                    'name_si'=>6,
                    'district_id'=>'80042',
                    'postcode'=>6.1,
                    'latitude'=>80.1833,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>454,
                    'name_en'=>'Walahanduwa',
                    'name_si'=>6,
                    'district_id'=>'80046',
                    'postcode'=>6.05443,
                    'latitude'=>80.251763,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>455,
                    'name_en'=>'Wanchawela',
                    'name_si'=>6,
                    'district_id'=>'80120',
                    'postcode'=>6.0333,
                    'latitude'=>80.3167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>456,
                    'name_en'=>'Wanduramba',
                    'name_si'=>6,
                    'district_id'=>'80100',
                    'postcode'=>6.136388,
                    'latitude'=>80.252794,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>457,
                    'name_en'=>'Warukandeniya',
                    'name_si'=>6,
                    'district_id'=>'80084',
                    'postcode'=>6.381574,
                    'latitude'=>80.43131,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>458,
                    'name_en'=>'Watugedara',
                    'name_si'=>6,
                    'district_id'=>'80340',
                    'postcode'=>6.25,
                    'latitude'=>80.05,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>459,
                    'name_en'=>'Weihena',
                    'name_si'=>6,
                    'district_id'=>'80216',
                    'postcode'=>6.310127,
                    'latitude'=>80.23392,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>460,
                    'name_en'=>'Welikanda',
                    'name_si'=>6,
                    'district_id'=>'51070',
                    'postcode'=>6.3167,
                    'latitude'=>80.0333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>461,
                    'name_en'=>'Wilanagama',
                    'name_si'=>6,
                    'district_id'=>'20142',
                    'postcode'=>6.4167,
                    'latitude'=>80,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>462,
                    'name_en'=>'Yakkalamulla',
                    'name_si'=>6,
                    'district_id'=>'80150',
                    'postcode'=>6.109027,
                    'latitude'=>80.349195,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>463,
                    'name_en'=>'Yatalamatta',
                    'name_si'=>6,
                    'district_id'=>'80107',
                    'postcode'=>6.172247,
                    'latitude'=>80.293052,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>464,
                    'name_en'=>'Akaragama',
                    'name_si'=>'අකරගම',
                    'district_id'=>7,
                    'postcode'=>'11536',
                    'latitude'=>7.262603,
                    'longitude'=>79.958057
                    ] );
                                
                    City::create( [
                    'id'=>465,
                    'name_en'=>'Ambagaspitiya',
                    'name_si'=>'අඹගස්පිටිය',
                    'district_id'=>7,
                    'postcode'=>'11052',
                    'latitude'=>7.0833,
                    'longitude'=>80.0667
                    ] );
                                
                    City::create( [
                    'id'=>466,
                    'name_en'=>'Ambepussa',
                    'name_si'=>'අඹේපුස්ස',
                    'district_id'=>7,
                    'postcode'=>'11212',
                    'latitude'=>7.25,
                    'longitude'=>80.1667
                    ] );
                                
                    City::create( [
                    'id'=>467,
                    'name_en'=>'Andiambalama',
                    'name_si'=>'ආඬිඅම්බලම',
                    'district_id'=>7,
                    'postcode'=>'11558',
                    'latitude'=>7.188346,
                    'longitude'=>79.902344
                    ] );
                                
                    City::create( [
                    'id'=>468,
                    'name_en'=>'Attanagalla',
                    'name_si'=>'අත්තනගල්ල',
                    'district_id'=>7,
                    'postcode'=>'11120',
                    'latitude'=>7.1119,
                    'longitude'=>80.1328
                    ] );
                                
                    City::create( [
                    'id'=>469,
                    'name_en'=>'Badalgama',
                    'name_si'=>'බඩල්ගම',
                    'district_id'=>7,
                    'postcode'=>'11538',
                    'latitude'=>7.291218,
                    'longitude'=>79.978003
                    ] );
                                
                    City::create( [
                    'id'=>470,
                    'name_en'=>'Banduragoda',
                    'name_si'=>'බඳුරගොඩ',
                    'district_id'=>7,
                    'postcode'=>'11244',
                    'latitude'=>7.2319,
                    'longitude'=>80.0678
                    ] );
                                
                    City::create( [
                    'id'=>471,
                    'name_en'=>'Batuwatta',
                    'name_si'=>'බටුවත්ත',
                    'district_id'=>7,
                    'postcode'=>'11011',
                    'latitude'=>7.058399,
                    'longitude'=>79.932048
                    ] );
                                
                    City::create( [
                    'id'=>472,
                    'name_en'=>'Bemmulla',
                    'name_si'=>'බෙම්මුල්ල',
                    'district_id'=>7,
                    'postcode'=>'11040',
                    'latitude'=>7.120933,
                    'longitude'=>80.028191
                    ] );
                                
                    City::create( [
                    'id'=>473,
                    'name_en'=>'Biyagama IPZ',
                    'name_si'=>'බියගම IPZ',
                    'district_id'=>7,
                    'postcode'=>'11672',
                    'latitude'=>6.9492,
                    'longitude'=>80.0153
                    ] );
                                
                    City::create( [
                    'id'=>474,
                    'name_en'=>'Bokalagama',
                    'name_si'=>'බොකලගම',
                    'district_id'=>7,
                    'postcode'=>'11216',
                    'latitude'=>7.2333,
                    'longitude'=>80.15
                    ] );
                                
                    City::create( [
                    'id'=>475,
                    'name_en'=>'Bollete (WP)',
                    'name_si'=>'බොල්ලතේ',
                    'district_id'=>7,
                    'postcode'=>'11024',
                    'latitude'=>7.0667,
                    'longitude'=>79.95
                    ] );
                                
                    City::create( [
                    'id'=>476,
                    'name_en'=>'Bopagama',
                    'name_si'=>'බෝපගම',
                    'district_id'=>7,
                    'postcode'=>'11134',
                    'latitude'=>7.079641,
                    'longitude'=>80.15868
                    ] );
                                
                    City::create( [
                    'id'=>477,
                    'name_en'=>'Buthpitiya',
                    'name_si'=>'බුත්පිටිය',
                    'district_id'=>7,
                    'postcode'=>'11720',
                    'latitude'=>7.042846,
                    'longitude'=>80.051854
                    ] );
                                
                    City::create( [
                    'id'=>478,
                    'name_en'=>'Dagonna',
                    'name_si'=>'දාගොන්න',
                    'district_id'=>7,
                    'postcode'=>'11524',
                    'latitude'=>7.221568,
                    'longitude'=>79.927455
                    ] );
                                
                    City::create( [
                    'id'=>479,
                    'name_en'=>'Danowita',
                    'name_si'=>'දංඕවිට',
                    'district_id'=>7,
                    'postcode'=>'11896',
                    'latitude'=>7.2028,
                    'longitude'=>80.1758
                    ] );
                                
                    City::create( [
                    'id'=>480,
                    'name_en'=>'Debahera',
                    'name_si'=>'දෙබහැර',
                    'district_id'=>7,
                    'postcode'=>'11889',
                    'latitude'=>7.1389,
                    'longitude'=>80.0981
                    ] );
                                
                    City::create( [
                    'id'=>481,
                    'name_en'=>'Dekatana',
                    'name_si'=>'දෙකටන',
                    'district_id'=>7,
                    'postcode'=>'11690',
                    'latitude'=>6.968317,
                    'longitude'=>80.035385
                    ] );
                                
                    City::create( [
                    'id'=>482,
                    'name_en'=>'Delgoda',
                    'name_si'=>'දෙල්ගොඩ',
                    'district_id'=>7,
                    'postcode'=>'11700',
                    'latitude'=>6.986583,
                    'longitude'=>80.01576
                    ] );
                                
                    City::create( [
                    'id'=>483,
                    'name_en'=>'Delwagura',
                    'name_si'=>'දෙල්වගුර',
                    'district_id'=>7,
                    'postcode'=>'11228',
                    'latitude'=>7.265367,
                    'longitude'=>80.003272
                    ] );
                                
                    City::create( [
                    'id'=>484,
                    'name_en'=>'Demalagama',
                    'name_si'=>'දෙමළගම',
                    'district_id'=>7,
                    'postcode'=>'11692',
                    'latitude'=>6.988934,
                    'longitude'=>80.046886
                    ] );
                                
                    City::create( [
                    'id'=>485,
                    'name_en'=>'Demanhandiya',
                    'name_si'=>'දෙමන්හන්දිය',
                    'district_id'=>7,
                    'postcode'=>'11270',
                    'latitude'=>7.2333,
                    'longitude'=>79.9
                    ] );
                                
                    City::create( [
                    'id'=>486,
                    'name_en'=>'Dewalapola',
                    'name_si'=>'දේවාලපොල',
                    'district_id'=>7,
                    'postcode'=>'11102',
                    'latitude'=>7.162553,
                    'longitude'=>79.997446
                    ] );
                                
                    City::create( [
                    'id'=>487,
                    'name_en'=>'Divulapitiya',
                    'name_si'=>'දිවුලපිටිය',
                    'district_id'=>7,
                    'postcode'=>'11250',
                    'latitude'=>7.2167,
                    'longitude'=>80.0156
                    ] );
                                
                    City::create( [
                    'id'=>488,
                    'name_en'=>'Divuldeniya',
                    'name_si'=>'දිවුල්දෙණිය',
                    'district_id'=>7,
                    'postcode'=>'11208',
                    'latitude'=>7.3,
                    'longitude'=>80.1
                    ] );
                                
                    City::create( [
                    'id'=>489,
                    'name_en'=>'Dompe',
                    'name_si'=>'දොම්පෙ',
                    'district_id'=>7,
                    'postcode'=>'11680',
                    'latitude'=>6.949806,
                    'longitude'=>80.055083
                    ] );
                                
                    City::create( [
                    'id'=>490,
                    'name_en'=>'Dunagaha',
                    'name_si'=>'දුනගහ',
                    'district_id'=>7,
                    'postcode'=>'11264',
                    'latitude'=>7.2342,
                    'longitude'=>79.9756
                    ] );
                                
                    City::create( [
                    'id'=>491,
                    'name_en'=>'Ekala',
                    'name_si'=>'ඒකල',
                    'district_id'=>7,
                    'postcode'=>'11380',
                    'latitude'=>7.105558,
                    'longitude'=>79.91532
                    ] );
                                
                    City::create( [
                    'id'=>492,
                    'name_en'=>'Ellakkala',
                    'name_si'=>'ඇල්ලක්කල',
                    'district_id'=>7,
                    'postcode'=>'11116',
                    'latitude'=>7.135968,
                    'longitude'=>80.132524
                    ] );
                                
                    City::create( [
                    'id'=>493,
                    'name_en'=>'Essella',
                    'name_si'=>7,
                    'district_id'=>'11108',
                    'postcode'=>7.178736,
                    'latitude'=>80.021603,
                    'longitude'=>80.132524
                    ] );
                                
                    City::create( [
                    'id'=>494,
                    'name_en'=>'Galedanda',
                    'name_si'=>'ගලේදණ්ඩ',
                    'district_id'=>7,
                    'postcode'=>'90206',
                    'latitude'=>6.964202,
                    'longitude'=>79.930611
                    ] );
                                
                    City::create( [
                    'id'=>495,
                    'name_en'=>'Gampaha',
                    'name_si'=>'ගම්පහ',
                    'district_id'=>7,
                    'postcode'=>'11000',
                    'latitude'=>7.0917,
                    'longitude'=>79.9942
                    ] );
                                
                    City::create( [
                    'id'=>496,
                    'name_en'=>'Ganemulla',
                    'name_si'=>'ගණේමුල්ල',
                    'district_id'=>7,
                    'postcode'=>'11020',
                    'latitude'=>7.064183,
                    'longitude'=>79.963294
                    ] );
                                
                    City::create( [
                    'id'=>497,
                    'name_en'=>'Giriulla',
                    'name_si'=>'ගිරිවුල්ල',
                    'district_id'=>7,
                    'postcode'=>'60140',
                    'latitude'=>7.3275,
                    'longitude'=>80.1267
                    ] );
                                
                    City::create( [
                    'id'=>498,
                    'name_en'=>'Gonawala',
                    'name_si'=>'ගෝනවල',
                    'district_id'=>7,
                    'postcode'=>'11630',
                    'latitude'=>6.9612,
                    'longitude'=>79.9992
                    ] );
                                
                    City::create( [
                    'id'=>499,
                    'name_en'=>'Halpe',
                    'name_si'=>'හල්පෙ',
                    'district_id'=>7,
                    'postcode'=>'70145',
                    'latitude'=>7.261935,
                    'longitude'=>80.10821
                    ] );
                                
                    City::create( [
                    'id'=>500,
                    'name_en'=>'Hapugastenna',
                    'name_si'=>7,
                    'district_id'=>'70164',
                    'postcode'=>7.1,
                    'latitude'=>80.1667,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>501,
                    'name_en'=>'Heiyanthuduwa',
                    'name_si'=>7,
                    'district_id'=>'11618',
                    'postcode'=>6.96283,
                    'latitude'=>79.963309,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>502,
                    'name_en'=>'Hinatiyana Madawala',
                    'name_si'=>7,
                    'district_id'=>'11568',
                    'postcode'=>7.1667,
                    'latitude'=>79.95,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>503,
                    'name_en'=>'Hiswella',
                    'name_si'=>7,
                    'district_id'=>'11734',
                    'postcode'=>7.021559,
                    'latitude'=>80.160869,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>504,
                    'name_en'=>'Horampella',
                    'name_si'=>7,
                    'district_id'=>'11564',
                    'postcode'=>7.185188,
                    'latitude'=>79.976771,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>505,
                    'name_en'=>'Hunumulla',
                    'name_si'=>7,
                    'district_id'=>'11262',
                    'postcode'=>7.244925,
                    'latitude'=>79.996921,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>506,
                    'name_en'=>'Hunupola',
                    'name_si'=>7,
                    'district_id'=>'60582',
                    'postcode'=>7.111463,
                    'latitude'=>80.130625,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>507,
                    'name_en'=>'Ihala Madampella',
                    'name_si'=>7,
                    'district_id'=>'11265',
                    'postcode'=>7.250345,
                    'latitude'=>79.960941,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>508,
                    'name_en'=>'Imbulgoda',
                    'name_si'=>7,
                    'district_id'=>'11856',
                    'postcode'=>7.035,
                    'latitude'=>79.9931,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>509,
                    'name_en'=>'Ja-Ela',
                    'name_si'=>7,
                    'district_id'=>'11350',
                    'postcode'=>7.076147,
                    'latitude'=>79.894932,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>510,
                    'name_en'=>'Kadawatha',
                    'name_si'=>7,
                    'district_id'=>'11850',
                    'postcode'=>7.0258,
                    'latitude'=>79.9882,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>511,
                    'name_en'=>'Kahatowita',
                    'name_si'=>7,
                    'district_id'=>'11144',
                    'postcode'=>7.0667,
                    'latitude'=>80.1167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>512,
                    'name_en'=>'Kalagedihena',
                    'name_si'=>7,
                    'district_id'=>'11875',
                    'postcode'=>7.118004,
                    'latitude'=>80.058001,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>513,
                    'name_en'=>'Kaleliya',
                    'name_si'=>7,
                    'district_id'=>'11160',
                    'postcode'=>7.195,
                    'latitude'=>80.1136,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>514,
                    'name_en'=>'Kandana',
                    'name_si'=>7,
                    'district_id'=>'11320',
                    'postcode'=>7.05056,
                    'latitude'=>79.895123,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>515,
                    'name_en'=>'Katana',
                    'name_si'=>7,
                    'district_id'=>'11534',
                    'postcode'=>7.2517,
                    'latitude'=>79.9078,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>516,
                    'name_en'=>'Katudeniya',
                    'name_si'=>7,
                    'district_id'=>'21016',
                    'postcode'=>7.3,
                    'latitude'=>80.0833,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>517,
                    'name_en'=>'Katunayake',
                    'name_si'=>7,
                    'district_id'=>'11450',
                    'postcode'=>7.1647,
                    'latitude'=>79.8731,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>518,
                    'name_en'=>'Katunayake Air Force Camp',
                    'name_si'=>7,
                    'district_id'=>'11440',
                    'postcode'=>7.1407,
                    'latitude'=>79.8782,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>519,
                    'name_en'=>'Katunayake(FTZ)',
                    'name_si'=>7,
                    'district_id'=>'11420',
                    'postcode'=>7.1407,
                    'latitude'=>79.8782,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>520,
                    'name_en'=>'Katuwellegama',
                    'name_si'=>7,
                    'district_id'=>'11526',
                    'postcode'=>7.208557,
                    'latitude'=>79.94572,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>521,
                    'name_en'=>'Kelaniya',
                    'name_si'=>7,
                    'district_id'=>'11600',
                    'postcode'=>6.956357,
                    'latitude'=>79.921431,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>522,
                    'name_en'=>'Kimbulapitiya',
                    'name_si'=>7,
                    'district_id'=>'11522',
                    'postcode'=>7.202265,
                    'latitude'=>79.908937,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>523,
                    'name_en'=>'Kirindiwela',
                    'name_si'=>7,
                    'district_id'=>'11730',
                    'postcode'=>7.044223,
                    'latitude'=>80.126707,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>524,
                    'name_en'=>'Kitalawalana',
                    'name_si'=>7,
                    'district_id'=>'11206',
                    'postcode'=>7.3,
                    'latitude'=>80.1,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>525,
                    'name_en'=>'Kochchikade',
                    'name_si'=>7,
                    'district_id'=>'11540',
                    'postcode'=>7.2581,
                    'latitude'=>79.8542,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>526,
                    'name_en'=>'Kotadeniyawa',
                    'name_si'=>7,
                    'district_id'=>'11232',
                    'postcode'=>7.279861,
                    'latitude'=>80.05581,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>527,
                    'name_en'=>'Kotugoda',
                    'name_si'=>7,
                    'district_id'=>'11390',
                    'postcode'=>7.1217,
                    'latitude'=>79.9297,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>528,
                    'name_en'=>'Kumbaloluwa',
                    'name_si'=>7,
                    'district_id'=>'11105',
                    'postcode'=>7.179375,
                    'latitude'=>80.082233,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>529,
                    'name_en'=>'Loluwagoda',
                    'name_si'=>7,
                    'district_id'=>'11204',
                    'postcode'=>7.294586,
                    'latitude'=>80.126624,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>530,
                    'name_en'=>'Mabodale',
                    'name_si'=>7,
                    'district_id'=>'11114',
                    'postcode'=>7.2,
                    'latitude'=>80.0167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>531,
                    'name_en'=>'Madelgamuwa',
                    'name_si'=>7,
                    'district_id'=>'11033',
                    'postcode'=>7.110062,
                    'latitude'=>79.948175,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>532,
                    'name_en'=>'Makewita',
                    'name_si'=>7,
                    'district_id'=>'11358',
                    'postcode'=>7.1,
                    'latitude'=>79.9333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>533,
                    'name_en'=>'Makola',
                    'name_si'=>7,
                    'district_id'=>'11640',
                    'postcode'=>6.983178,
                    'latitude'=>79.9525,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>534,
                    'name_en'=>'Malwana',
                    'name_si'=>7,
                    'district_id'=>'11670',
                    'postcode'=>6.951988,
                    'latitude'=>80.012561,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>535,
                    'name_en'=>'Mandawala',
                    'name_si'=>7,
                    'district_id'=>'11061',
                    'postcode'=>7.003066,
                    'latitude'=>80.097082,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>536,
                    'name_en'=>'Marandagahamula',
                    'name_si'=>7,
                    'district_id'=>'11260',
                    'postcode'=>7.2447,
                    'latitude'=>79.9696,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>537,
                    'name_en'=>'Mellawagedara',
                    'name_si'=>7,
                    'district_id'=>'11234',
                    'postcode'=>7.285808,
                    'latitude'=>80.023977,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>538,
                    'name_en'=>'Minuwangoda',
                    'name_si'=>7,
                    'district_id'=>'11550',
                    'postcode'=>7.176455,
                    'latitude'=>79.954904,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>539,
                    'name_en'=>'Mirigama',
                    'name_si'=>7,
                    'district_id'=>'11200',
                    'postcode'=>7.2414,
                    'latitude'=>80.1325,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>540,
                    'name_en'=>'Miriswatta',
                    'name_si'=>7,
                    'district_id'=>'80508',
                    'postcode'=>7.0711,
                    'latitude'=>80.0183,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>541,
                    'name_en'=>'Mithirigala',
                    'name_si'=>7,
                    'district_id'=>'11742',
                    'postcode'=>6.9648,
                    'latitude'=>80.0648,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>542,
                    'name_en'=>'Muddaragama',
                    'name_si'=>7,
                    'district_id'=>'11112',
                    'postcode'=>7.2167,
                    'latitude'=>80.05,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>543,
                    'name_en'=>'Mudungoda',
                    'name_si'=>7,
                    'district_id'=>'11056',
                    'postcode'=>7.064698,
                    'latitude'=>79.999092,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>544,
                    'name_en'=>'Mulleriyawa New Town',
                    'name_si'=>7,
                    'district_id'=>'10620',
                    'postcode'=>6.9301,
                    'latitude'=>80.0549,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>545,
                    'name_en'=>'Naranwala',
                    'name_si'=>7,
                    'district_id'=>'11063',
                    'postcode'=>7.001631,
                    'latitude'=>80.027404,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>546,
                    'name_en'=>'Nawana',
                    'name_si'=>7,
                    'district_id'=>'11222',
                    'postcode'=>7.270062,
                    'latitude'=>80.092618,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>547,
                    'name_en'=>'Nedungamuwa',
                    'name_si'=>7,
                    'district_id'=>'11066',
                    'postcode'=>7.05,
                    'latitude'=>80.0333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>548,
                    'name_en'=>'Negombo',
                    'name_si'=>7,
                    'district_id'=>'11500',
                    'postcode'=>7.2086,
                    'latitude'=>79.8358,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>549,
                    'name_en'=>'Nikadalupotha',
                    'name_si'=>7,
                    'district_id'=>'60580',
                    'postcode'=>7.1167,
                    'latitude'=>80.1333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>550,
                    'name_en'=>'Nikahetikanda',
                    'name_si'=>7,
                    'district_id'=>'11128',
                    'postcode'=>7.099089,
                    'latitude'=>80.179551,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>551,
                    'name_en'=>'Nittambuwa',
                    'name_si'=>7,
                    'district_id'=>'11880',
                    'postcode'=>7.144243,
                    'latitude'=>80.096178,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>552,
                    'name_en'=>'Niwandama',
                    'name_si'=>7,
                    'district_id'=>'11354',
                    'postcode'=>7.078762,
                    'latitude'=>79.928331,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>553,
                    'name_en'=>'Opatha',
                    'name_si'=>7,
                    'district_id'=>'80142',
                    'postcode'=>7.132037,
                    'latitude'=>79.921419,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>554,
                    'name_en'=>'Pamunugama',
                    'name_si'=>7,
                    'district_id'=>'11370',
                    'postcode'=>7.094359,
                    'latitude'=>79.844569,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>555,
                    'name_en'=>'Pamunuwatta',
                    'name_si'=>7,
                    'district_id'=>'11214',
                    'postcode'=>7.214678,
                    'latitude'=>80.139696,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>556,
                    'name_en'=>'Panawala',
                    'name_si'=>7,
                    'district_id'=>'70612',
                    'postcode'=>6.9833,
                    'latitude'=>80.0333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>557,
                    'name_en'=>'Pasyala',
                    'name_si'=>7,
                    'district_id'=>'11890',
                    'postcode'=>7.172926,
                    'latitude'=>80.115911,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>558,
                    'name_en'=>'Peliyagoda',
                    'name_si'=>7,
                    'district_id'=>'11830',
                    'postcode'=>6.960977,
                    'latitude'=>79.878852,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>559,
                    'name_en'=>'Pepiliyawala',
                    'name_si'=>7,
                    'district_id'=>'11741',
                    'postcode'=>7.002342,
                    'latitude'=>80.128886,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>560,
                    'name_en'=>'Pethiyagoda',
                    'name_si'=>7,
                    'district_id'=>'11043',
                    'postcode'=>7.1167,
                    'latitude'=>80.0167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>561,
                    'name_en'=>'Polpithimukulana',
                    'name_si'=>7,
                    'district_id'=>'11324',
                    'postcode'=>7.0444,
                    'latitude'=>79.8782,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>562,
                    'name_en'=>'Puwakpitiya',
                    'name_si'=>7,
                    'district_id'=>'10712',
                    'postcode'=>7.040498,
                    'latitude'=>80.064451,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>563,
                    'name_en'=>'Radawadunna',
                    'name_si'=>7,
                    'district_id'=>'11892',
                    'postcode'=>7.177279,
                    'latitude'=>80.141344,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>564,
                    'name_en'=>'Radawana',
                    'name_si'=>7,
                    'district_id'=>'11725',
                    'postcode'=>7.029871,
                    'latitude'=>80.100915,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>565,
                    'name_en'=>'Raddolugama',
                    'name_si'=>7,
                    'district_id'=>'11400',
                    'postcode'=>7.140656,
                    'latitude'=>79.898198,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>566,
                    'name_en'=>'Ragama',
                    'name_si'=>7,
                    'district_id'=>'11010',
                    'postcode'=>7.025281,
                    'latitude'=>79.917386,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>567,
                    'name_en'=>'Ruggahawila',
                    'name_si'=>7,
                    'district_id'=>'11142',
                    'postcode'=>7.0667,
                    'latitude'=>80.1167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>568,
                    'name_en'=>'Seeduwa',
                    'name_si'=>7,
                    'district_id'=>'11410',
                    'postcode'=>7.132059,
                    'latitude'=>79.885024,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>569,
                    'name_en'=>'Siyambalape',
                    'name_si'=>7,
                    'district_id'=>'11607',
                    'postcode'=>6.964545,
                    'latitude'=>79.986406,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>570,
                    'name_en'=>'Talahena',
                    'name_si'=>7,
                    'district_id'=>'11504',
                    'postcode'=>7.1667,
                    'latitude'=>79.8167,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>571,
                    'name_en'=>'Thambagalla',
                    'name_si'=>7,
                    'district_id'=>'60584',
                    'postcode'=>7.1167,
                    'latitude'=>80.1333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>572,
                    'name_en'=>'Thimbirigaskatuwa',
                    'name_si'=>7,
                    'district_id'=>'11532',
                    'postcode'=>7.2669,
                    'latitude'=>79.9495,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>573,
                    'name_en'=>'Tittapattara',
                    'name_si'=>7,
                    'district_id'=>'10664',
                    'postcode'=>6.9297,
                    'latitude'=>80.0889,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>574,
                    'name_en'=>'Udathuthiripitiya',
                    'name_si'=>7,
                    'district_id'=>'11054',
                    'postcode'=>7.075,
                    'latitude'=>80.0333,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>575,
                    'name_en'=>'Udugampola',
                    'name_si'=>7,
                    'district_id'=>'11030',
                    'postcode'=>7.1167,
                    'latitude'=>79.9833,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>576,
                    'name_en'=>'Uggalboda',
                    'name_si'=>7,
                    'district_id'=>'11034',
                    'postcode'=>7.135549,
                    'latitude'=>79.948259,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>577,
                    'name_en'=>'Urapola',
                    'name_si'=>7,
                    'district_id'=>'11126',
                    'postcode'=>7.104792,
                    'latitude'=>80.136935,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>578,
                    'name_en'=>'Uswetakeiyawa',
                    'name_si'=>7,
                    'district_id'=>'11328',
                    'postcode'=>7.031046,
                    'latitude'=>79.860339,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>579,
                    'name_en'=>'Veyangoda',
                    'name_si'=>7,
                    'district_id'=>'11100',
                    'postcode'=>7.156981,
                    'latitude'=>80.095842,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>580,
                    'name_en'=>'Walgammulla',
                    'name_si'=>7,
                    'district_id'=>'11146',
                    'postcode'=>7.071902,
                    'latitude'=>80.116511,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>581,
                    'name_en'=>'Walpita',
                    'name_si'=>7,
                    'district_id'=>'11226',
                    'postcode'=>7.258131,
                    'latitude'=>80.034704,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>582,
                    'name_en'=>'Walpola (WP)',
                    'name_si'=>7,
                    'district_id'=>'11012',
                    'postcode'=>7.0418,
                    'latitude'=>79.9257,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>583,
                    'name_en'=>'Wathurugama',
                    'name_si'=>7,
                    'district_id'=>'11724',
                    'postcode'=>7.0421,
                    'latitude'=>80.0701,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>584,
                    'name_en'=>'Watinapaha',
                    'name_si'=>7,
                    'district_id'=>'11104',
                    'postcode'=>7.2,
                    'latitude'=>79.9833,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>585,
                    'name_en'=>'Wattala',
                    'name_si'=>7,
                    'district_id'=>'11104',
                    'postcode'=>6.990037,
                    'latitude'=>79.892207,
                    'longitude'=>80.038306
                    ] );
                                
                   
                                
                    City::create( [
                    'id'=>587,
                    'name_en'=>'Wegowwa',
                    'name_si'=>7,
                    'district_id'=>'11562',
                    'postcode'=>7.178443,
                    'latitude'=>79.962063,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>588,
                    'name_en'=>'Weweldeniya',
                    'name_si'=>7,
                    'district_id'=>'11894',
                    'postcode'=>7.1834,
                    'latitude'=>80.1446,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>589,
                    'name_en'=>'Yakkala',
                    'name_si'=>7,
                    'district_id'=>'11870',
                    'postcode'=>7.1167,
                    'latitude'=>80.05,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>590,
                    'name_en'=>'Yatiyana',
                    'name_si'=>7,
                    'district_id'=>'11566',
                    'postcode'=>7.184998,
                    'latitude'=>79.931858,
                    'longitude'=>80.038306
                    ] );
                                
                    City::create( [
                    'id'=>591,
                    'name_en'=>'Ambalantota',
                    'name_si'=>'අම්බලන්තොට',
                    'district_id'=>8,
                    'postcode'=>'82100',
                    'latitude'=>6.114494,
                    'longitude'=>81.025983
                    ] );
                                
                    City::create( [
                    'id'=>592,
                    'name_en'=>'Angunakolapelessa',
                    'name_si'=>'අඟුණකොළපැලැස්ස',
                    'district_id'=>8,
                    'postcode'=>'82220',
                    'latitude'=>6.162261,
                    'longitude'=>80.899471
                    ] );
                                
                    City::create( [
                    'id'=>593,
                    'name_en'=>'Angunakolawewa',
                    'name_si'=>'අඟුණකොලවැව',
                    'district_id'=>8,
                    'postcode'=>'91302',
                    'latitude'=>6.389127,
                    'longitude'=>81.093226
                    ] );
                                
                    City::create( [
                    'id'=>594,
                    'name_en'=>'Bandagiriya Colony',
                    'name_si'=>'බන්ඩගිරිය කොලොනි',
                    'district_id'=>8,
                    'postcode'=>'82005',
                    'latitude'=>6.1833,
                    'longitude'=>81.1389
                    ] );
                                
                    City::create( [
                    'id'=>595,
                    'name_en'=>'Barawakumbuka',
                    'name_si'=>'බරවකුඹුර',
                    'district_id'=>8,
                    'postcode'=>'82110',
                    'latitude'=>6.1667,
                    'longitude'=>80.8167
                    ] );
                                
                    City::create( [
                    'id'=>596,
                    'name_en'=>'Beliatta',
                    'name_si'=>'බෙලිඅත්ත',
                    'district_id'=>8,
                    'postcode'=>'82400',
                    'latitude'=>6.048637,
                    'longitude'=>80.734343
                    ] );
                                
                    City::create( [
                    'id'=>597,
                    'name_en'=>'Beragama',
                    'name_si'=>'බෙරගම',
                    'district_id'=>8,
                    'postcode'=>'82102',
                    'latitude'=>6.15,
                    'longitude'=>81.0667
                    ] );
                                
                    City::create( [
                    'id'=>598,
                    'name_en'=>'Beralihela',
                    'name_si'=>'බෙරලිහෙල',
                    'district_id'=>8,
                    'postcode'=>'82618',
                    'latitude'=>6.2556,
                    'longitude'=>81.2944
                    ] );
                                
                    City::create( [
                    'id'=>599,
                    'name_en'=>'Bundala',
                    'name_si'=>'බූන්දල',
                    'district_id'=>8,
                    'postcode'=>'82002',
                    'latitude'=>6.195164,
                    'longitude'=>81.250493
                    ] );
                                
                    City::create( [
                    'id'=>600,
                    'name_en'=>'Ellagala',
                    'name_si'=>'ඇල්ලගල',
                    'district_id'=>8,
                    'postcode'=>'82619',
                    'latitude'=>6.26867,
                    'longitude'=>81.359512
                    ] );
                                
                    City::create( [
                    'id'=>601,
                    'name_en'=>'Gangulandeniya',
                    'name_si'=>'ගඟුලදෙණිය',
                    'district_id'=>8,
                    'postcode'=>'82586',
                    'latitude'=>6.2833,
                    'longitude'=>80.7167
                    ] );
                                
                    City::create( [
                    'id'=>602,
                    'name_en'=>'Getamanna',
                    'name_si'=>'ගැටමාන්න',
                    'district_id'=>8,
                    'postcode'=>'82420',
                    'latitude'=>6.036244,
                    'longitude'=>80.669146
                    ] );
                                
                    City::create( [
                    'id'=>603,
                    'name_en'=>'Goda Koggalla',
                    'name_si'=>'ගොඩ කොග්ගල්ල',
                    'district_id'=>8,
                    'postcode'=>'82401',
                    'latitude'=>6.0333,
                    'longitude'=>80.75
                    ] );
                                
                    City::create( [
                    'id'=>604,
                    'name_en'=>'Gonagamuwa Uduwila',
                    'name_si'=>'ගොනාගමුව උඩුවිල',
                    'district_id'=>8,
                    'postcode'=>'82602',
                    'latitude'=>6.25,
                    'longitude'=>81.2917
                    ] );
                                
                    City::create( [
                    'id'=>605,
                    'name_en'=>'Gonnoruwa',
                    'name_si'=>'ගොන්නොරුව',
                    'district_id'=>8,
                    'postcode'=>'82006',
                    'latitude'=>6.230443,
                    'longitude'=>81.112465
                    ] );
                                
                    City::create( [
                    'id'=>606,
                    'name_en'=>'Hakuruwela',
                    'name_si'=>'හකුරුවෙල',
                    'district_id'=>8,
                    'postcode'=>'82248',
                    'latitude'=>6.146456,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>607,
                    'name_en'=>'Hambantota',
                    'name_si'=>'හම්බන්තොට',
                    'district_id'=>8,
                    'postcode'=>'82000',
                    'latitude'=>6.127563,
                    'longitude'=>81.111287
                    ] );
                                
                    City::create( [
                    'id'=>608,
                    'name_en'=>'Handugala',
                    'name_si'=>'හඳගුල',
                    'district_id'=>8,
                    'postcode'=>'81326',
                    'latitude'=>6.188877,
                    'longitude'=>80.62414
                    ] );
                                
                    City::create( [
                    'id'=>609,
                    'name_en'=>'Hungama',
                    'name_si'=>8,
                    'district_id'=>'82120',
                    'postcode'=>6.108006,
                    'latitude'=>80.927144,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>610,
                    'name_en'=>'Ihala Beligalla',
                    'name_si'=>8,
                    'district_id'=>'82412',
                    'postcode'=>6.092378,
                    'latitude'=>80.747311,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>611,
                    'name_en'=>'Ittademaliya',
                    'name_si'=>8,
                    'district_id'=>'82462',
                    'postcode'=>6.167432,
                    'latitude'=>80.735179,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>612,
                    'name_en'=>'Julampitiya',
                    'name_si'=>8,
                    'district_id'=>'82252',
                    'postcode'=>6.2261,
                    'latitude'=>80.7403,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>613,
                    'name_en'=>'Kahandamodara',
                    'name_si'=>8,
                    'district_id'=>'82126',
                    'postcode'=>6.078654,
                    'latitude'=>80.902917,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>614,
                    'name_en'=>'Kariyamaditta',
                    'name_si'=>8,
                    'district_id'=>'82274',
                    'postcode'=>6.257359,
                    'latitude'=>80.809448,
                    'longitude'=>80.83047,
                    ] );
                                
                    City::create( [
                    'id'=>615,
                    'name_en'=>'Katuwana',
                    'name_si'=>8,
                    'district_id'=>'82500',
                    'postcode'=>6.2667,
                    'latitude'=>80.6972,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>616,
                    'name_en'=>'Kawantissapura',
                    'name_si'=>8,
                    'district_id'=>'82622',
                    'postcode'=>6.2786,
                    'latitude'=>81.2524,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>617,
                    'name_en'=>'Kirama',
                    'name_si'=>8,
                    'district_id'=>'82550',
                    'postcode'=>6.2117,
                    'latitude'=>80.6653,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>618,
                    'name_en'=>'Kirinda',
                    'name_si'=>8,
                    'district_id'=>'82614',
                    'postcode'=>6.268985,
                    'latitude'=>81.290653,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>619,
                    'name_en'=>'Lunama',
                    'name_si'=>8,
                    'district_id'=>'82108',
                    'postcode'=>6.098517,
                    'latitude'=>80.971511,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>620,
                    'name_en'=>'Lunugamwehera',
                    'name_si'=>8,
                    'district_id'=>'82634',
                    'postcode'=>6.3417,
                    'latitude'=>81.15,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>621,
                    'name_en'=>'Magama',
                    'name_si'=>8,
                    'district_id'=>'82608',
                    'postcode'=>6.280108,
                    'latitude'=>81.270354,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>622,
                    'name_en'=>'Mahagalwewa',
                    'name_si'=>8,
                    'district_id'=>'82016',
                    'postcode'=>6.1833,
                    'latitude'=>81.1389,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>623,
                    'name_en'=>'Mamadala',
                    'name_si'=>8,
                    'district_id'=>'82109',
                    'postcode'=>6.158126,
                    'latitude'=>80.96681,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>624,
                    'name_en'=>'Medamulana',
                    'name_si'=>8,
                    'district_id'=>'82254',
                    'postcode'=>6.175878,
                    'latitude'=>80.770016,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>625,
                    'name_en'=>'Middeniya',
                    'name_si'=>8,
                    'district_id'=>'82270',
                    'postcode'=>6.2494,
                    'latitude'=>80.7672,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>626,
                    'name_en'=>'Migahajandur',
                    'name_si'=>8,
                    'district_id'=>'82014',
                    'postcode'=>6.1833,
                    'latitude'=>81.1389,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>627,
                    'name_en'=>'Modarawana',
                    'name_si'=>8,
                    'district_id'=>'82416',
                    'postcode'=>6.117576,
                    'latitude'=>80.720781,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>628,
                    'name_en'=>'Mulkirigala',
                    'name_si'=>8,
                    'district_id'=>'82242',
                    'postcode'=>6.12,
                    'latitude'=>80.7397,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>629,
                    'name_en'=>'Nakulugamuwa',
                    'name_si'=>8,
                    'district_id'=>'82300',
                    'postcode'=>6.1842,
                    'latitude'=>80.9063,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>630,
                    'name_en'=>'Netolpitiya',
                    'name_si'=>8,
                    'district_id'=>'82135',
                    'postcode'=>6.066848,
                    'latitude'=>80.850703,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>631,
                    'name_en'=>'Nihiluwa',
                    'name_si'=>8,
                    'district_id'=>'82414',
                    'postcode'=>6.077147,
                    'latitude'=>80.696499,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>632,
                    'name_en'=>'Padawkema',
                    'name_si'=>8,
                    'district_id'=>'82636',
                    'postcode'=>6.35,
                    'latitude'=>81.1667,
                    'longitude'=>80.83047,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>633,
                    'name_en'=>'Pahala Andarawewa',
                    'name_si'=>8,
                    'district_id'=>'82008',
                    'postcode'=>6.1833,
                    'latitude'=>81.1389,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>634,
                    'name_en'=>'Rammalawarapitiya',
                    'name_si'=>8,
                    'district_id'=>'82554',
                    'postcode'=>6.2117,
                    'latitude'=>80.6653,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>635,
                    'name_en'=>'Ranakeliya',
                    'name_si'=>8,
                    'district_id'=>'82612',
                    'postcode'=>6.2167,
                    'latitude'=>81.3,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>636,
                    'name_en'=>'Ranmuduwewa',
                    'name_si'=>8,
                    'district_id'=>'82018',
                    'postcode'=>6.1833,
                    'latitude'=>81.1389,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>637,
                    'name_en'=>'Ranna',
                    'name_si'=>8,
                    'district_id'=>'82125',
                    'postcode'=>6.103377,
                    'latitude'=>80.890168,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>638,
                    'name_en'=>'Ratmalwala',
                    'name_si'=>8,
                    'district_id'=>'82276',
                    'postcode'=>6.2667,
                    'latitude'=>80.85,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>639,
                    'name_en'=>'RU/Ridiyagama',
                    'name_si'=>8,
                    'district_id'=>'82106',
                    'postcode'=>6.1375,
                    'latitude'=>81.0042,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>640,
                    'name_en'=>'Sooriyawewa Town',
                    'name_si'=>8,
                    'district_id'=>'82010',
                    'postcode'=>6.1833,
                    'latitude'=>81.1389,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>641,
                    'name_en'=>'Tangalla',
                    'name_si'=>8,
                    'district_id'=>'82200',
                    'postcode'=>6.0231,
                    'latitude'=>80.7889,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>642,
                    'name_en'=>'Tissamaharama',
                    'name_si'=>8,
                    'district_id'=>'82600',
                    'postcode'=>6.370333,
                    'latitude'=>81.328087,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>643,
                    'name_en'=>'Uda Gomadiya',
                    'name_si'=>8,
                    'district_id'=>'82504',
                    'postcode'=>6.2667,
                    'latitude'=>80.6972,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>644,
                    'name_en'=>'Udamattala',
                    'name_si'=>8,
                    'district_id'=>'82638',
                    'postcode'=>6.3333,
                    'latitude'=>81.1333,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>645,
                    'name_en'=>'Uswewa',
                    'name_si'=>8,
                    'district_id'=>'82278',
                    'postcode'=>6.246247,
                    'latitude'=>80.862175,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>646,
                    'name_en'=>'Vitharandeniya',
                    'name_si'=>8,
                    'district_id'=>'82232',
                    'postcode'=>6.1824,
                    'latitude'=>80.806,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>647,
                    'name_en'=>'Walasmulla',
                    'name_si'=>8,
                    'district_id'=>'82450',
                    'postcode'=>6.15,
                    'latitude'=>80.7,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>648,
                    'name_en'=>'Weeraketiya',
                    'name_si'=>8,
                    'district_id'=>'82240',
                    'postcode'=>6.135,
                    'latitude'=>80.7865,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>649,
                    'name_en'=>'Weerawila',
                    'name_si'=>8,
                    'district_id'=>'82632',
                    'postcode'=>6.3417,
                    'latitude'=>81.15,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>650,
                    'name_en'=>'Weerawila NewTown',
                    'name_si'=>8,
                    'district_id'=>'82615',
                    'postcode'=>6.2556,
                    'latitude'=>81.2944,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>651,
                    'name_en'=>'Wekandawela',
                    'name_si'=>8,
                    'district_id'=>'82246',
                    'postcode'=>6.135,
                    'latitude'=>80.7865,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>652,
                    'name_en'=>'Weligatta',
                    'name_si'=>8,
                    'district_id'=>'82004',
                    'postcode'=>6.205897,
                    'latitude'=>81.196032,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>653,
                    'name_en'=>'Yatigala',
                    'name_si'=>8,
                    'district_id'=>'82418',
                    'postcode'=>6.1,
                    'latitude'=>80.6833,
                    'longitude'=>80.83047
                    ] );
                                
                    City::create( [
                    'id'=>654,
                    'name_en'=>'Jaffna',
                    'name_si'=>9,
                    'district_id'=>'40000',
                    'postcode'=>9.660668,
                    'longitude'=>80.83047,
                    'latitude'=>80.022706
                    ] );
                                
                    City::create( [
                    'id'=>655,
                    'name_en'=>'Agalawatta',
                    'name_si'=>'අගලවත්ත',
                    'district_id'=>10,
                    'postcode'=>'12200',
                    'latitude'=>6.541499,
                    'longitude'=>80.155785
                    ] );
                                
                    City::create( [
                    'id'=>656,
                    'name_en'=>'Alubomulla',
                    'name_si'=>'අලුබෝමුල්ල',
                    'district_id'=>10,
                    'postcode'=>'12524',
                    'latitude'=>6.711977,
                    'longitude'=>79.965857
                    ] );
                                
                    City::create( [
                    'id'=>657,
                    'name_en'=>'Anguruwatota',
                    'name_si'=>'අංගුරුවතොට',
                    'district_id'=>10,
                    'postcode'=>'12320',
                    'latitude'=>6.6383,
                    'longitude'=>80.0861
                    ] );
                                
                    City::create( [
                    'id'=>658,
                    'name_en'=>'Atale',
                    'name_si'=>'අටලේ',
                    'district_id'=>10,
                    'postcode'=>'71363',
                    'latitude'=>6.45,
                    'longitude'=>80.2667
                    ] );
                                
                    City::create( [
                    'id'=>659,
                    'name_en'=>'Baduraliya',
                    'name_si'=>'බදුරලීය',
                    'district_id'=>10,
                    'postcode'=>'12230',
                    'latitude'=>6.523102,
                    'longitude'=>80.232371
                    ] );
                                
                    City::create( [
                    'id'=>660,
                    'name_en'=>'Bandaragama',
                    'name_si'=>'බණ්ඩාරගම',
                    'district_id'=>10,
                    'postcode'=>'12530',
                    'latitude'=>6.710264,
                    'longitude'=>79.986087
                    ] );
                                
                    City::create( [
                    'id'=>661,
                    'name_en'=>'Batugampola',
                    'name_si'=>'බටුගම්පොල',
                    'district_id'=>10,
                    'postcode'=>'10526',
                    'latitude'=>6.769068,
                    'longitude'=>80.142775
                    ] );
                                
                    City::create( [
                    'id'=>662,
                    'name_en'=>'Bellana',
                    'name_si'=>'බෙල්ලන',
                    'district_id'=>10,
                    'postcode'=>'12224',
                    'latitude'=>6.518936,
                    'longitude'=>80.183117
                    ] );
                                
                    City::create( [
                    'id'=>663,
                    'name_en'=>'Beruwala',
                    'name_si'=>'බේරුවල',
                    'district_id'=>10,
                    'postcode'=>'12070',
                    'latitude'=>6.4739,
                    'longitude'=>79.9842
                    ] );
                                
                    City::create( [
                    'id'=>664,
                    'name_en'=>'Bolossagama',
                    'name_si'=>'බොලොස්සගම',
                    'district_id'=>10,
                    'postcode'=>'12008',
                    'latitude'=>6.62099,
                    'longitude'=>80.015288
                    ] );
                                
                    City::create( [
                    'id'=>665,
                    'name_en'=>'Bombuwala',
                    'name_si'=>'බොඹුවල',
                    'district_id'=>10,
                    'postcode'=>'12024',
                    'latitude'=>6.5833,
                    'longitude'=>80.0167
                    ] );
                                
                    City::create( [
                    'id'=>666,
                    'name_en'=>'Boralugoda',
                    'name_si'=>'බොරළුගොඩ',
                    'district_id'=>10,
                    'postcode'=>'12142',
                    'latitude'=>6.438709,
                    'longitude'=>80.278799
                    ] );
                                
                    City::create( [
                    'id'=>667,
                    'name_en'=>'Bulathsinhala',
                    'name_si'=>'බුලත්සිංහල',
                    'district_id'=>10,
                    'postcode'=>'12300',
                    'latitude'=>6.666199,
                    'longitude'=>80.164896
                    ] );
                                
                    City::create( [
                    'id'=>668,
                    'name_en'=>'Danawala Thiniyawala',
                    'name_si'=>'දනවල තිනියවල',
                    'district_id'=>10,
                    'postcode'=>'12148',
                    'latitude'=>6.4333,
                    'longitude'=>80.2667
                    ] );
                                
                    City::create( [
                    'id'=>669,
                    'name_en'=>'Delmella',
                    'name_si'=>'දෙල්මෙල්ල',
                    'district_id'=>10,
                    'postcode'=>'12304',
                    'latitude'=>6.67833,
                    'longitude'=>80.210488
                    ] );
                                
                    City::create( [
                    'id'=>670,
                    'name_en'=>'Dharga Town',
                    'name_si'=>'දර්ගා නගරය',
                    'district_id'=>10,
                    'postcode'=>'12090',
                    'latitude'=>6.648,
                    'longitude'=>80.0089
                    ] );
                                
                    City::create( [
                    'id'=>671,
                    'name_en'=>'Diwalakada',
                    'name_si'=>'දිවාලකද',
                    'district_id'=>10,
                    'postcode'=>'12308',
                    'latitude'=>6.696767,
                    'longitude'=>80.146983
                    ] );
                                
                    City::create( [
                    'id'=>672,
                    'name_en'=>'Dodangoda',
                    'name_si'=>'දොඩන්ගොඩ',
                    'district_id'=>10,
                    'postcode'=>'12020',
                    'latitude'=>6.555952,
                    'longitude'=>80.006847
                    ] );
                                
                    City::create( [
                    'id'=>673,
                    'name_en'=>'Dombagoda',
                    'name_si'=>'දොඹගොඩ',
                    'district_id'=>10,
                    'postcode'=>'12416',
                    'latitude'=>6.661797,
                    'longitude'=>80.053343
                    ] );
                                
                    City::create( [
                    'id'=>674,
                    'name_en'=>'Ethkandura',
                    'name_si'=>'ඇත්කඳුර',
                    'district_id'=>10,
                    'postcode'=>'80458',
                    'latitude'=>6.4415,
                    'longitude'=>80.1807
                    ] );
                                
                    City::create( [
                    'id'=>675,
                    'name_en'=>'Galpatha',
                    'name_si'=>'ගල්පාත',
                    'district_id'=>10,
                    'postcode'=>'12005',
                    'latitude'=>6.5983,
                    'longitude'=>80.0015
                    ] );
                                
                    City::create( [
                    'id'=>676,
                    'name_en'=>'Gamagoda',
                    'name_si'=>'ගමගොඩ',
                    'district_id'=>10,
                    'postcode'=>'12016',
                    'latitude'=>6.597103,
                    'longitude'=>80.005539
                    ] );
                                
                    City::create( [
                    'id'=>677,
                    'name_en'=>'Gonagalpura',
                    'name_si'=>'ගොනාගල්පුර',
                    'district_id'=>10,
                    'postcode'=>'80502',
                    'latitude'=>6.6307,
                    'longitude'=>80.0169
                    ] );
                                
                    City::create( [
                    'id'=>678,
                    'name_en'=>'Gonapola Junction',
                    'name_si'=>'ගෝනපොල හංදිය',
                    'district_id'=>10,
                    'postcode'=>'12410',
                    'latitude'=>6.6944,
                    'longitude'=>80.0333
                    ] );
                                
                    City::create( [
                    'id'=>679,
                    'name_en'=>'Govinna',
                    'name_si'=>'ගෝවින්න',
                    'district_id'=>10,
                    'postcode'=>'12310',
                    'latitude'=>6.663337,
                    'longitude'=>80.116274
                    ] );
                                
                    City::create( [
                    'id'=>680,
                    'name_en'=>'Gurulubadda',
                    'name_si'=>'ගුරුලුබැද්ද',
                    'district_id'=>10,
                    'postcode'=>'12236',
                    'latitude'=>6.5333,
                    'longitude'=>80.2667
                    ] );
                                
                    City::create( [
                    'id'=>681,
                    'name_en'=>'Halkandawila',
                    'name_si'=>'හල්කන්දවිල',
                    'district_id'=>10,
                    'postcode'=>'12055',
                    'latitude'=>6.5167,
                    'longitude'=>80.0167
                    ] );
                                
                    City::create( [
                    'id'=>682,
                    'name_en'=>'Haltota',
                    'name_si'=>'හල්තොට',
                    'district_id'=>10,
                    'postcode'=>'12538',
                    'latitude'=>6.69554,
                    'longitude'=>80.02127
                    ] );
                                
                    City::create( [
                    'id'=>683,
                    'name_en'=>'Halvitigala Colony',
                    'name_si'=>'හල්විටගල ජනපදය',
                    'district_id'=>10,
                    'postcode'=>'80146',
                    'latitude'=>6.5791,
                    'longitude'=>80.2233
                    ] );
                                
                    City::create( [
                    'id'=>684,
                    'name_en'=>'Halwala',
                    'name_si'=>'හල්වල',
                    'district_id'=>10,
                    'postcode'=>'12118',
                    'latitude'=>6.416524,
                    'longitude'=>80.106562
                    ] );
                                
                    City::create( [
                    'id'=>685,
                    'name_en'=>'Halwatura',
                    'name_si'=>'හල්වතුර',
                    'district_id'=>10,
                    'postcode'=>'12306',
                    'latitude'=>6.7,
                    'longitude'=>80.2
                    ] );
                                
                    City::create( [
                    'id'=>686,
                    'name_en'=>'Handapangoda',
                    'name_si'=>'හඳපාන්ගොඩ',
                    'district_id'=>10,
                    'postcode'=>'10524',
                    'latitude'=>6.789746,
                    'longitude'=>80.140774
                    ] );

                  
                                    
                        City::create( [
                        'id'=>754,
                        'name_en'=>'Aludeniya',
                        'name_si'=>'අලුදෙණිය',
                        'district_id'=>11,
                        'postcode'=>'20062',
                        'latitude'=>7.370491,
                        'longitude'=>80.46648
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>755,
                        'name_en'=>'Ambagahapelessa',
                        'name_si'=>'අඹගහපැලැස්ස',
                        'district_id'=>11,
                        'postcode'=>'20986',
                        'latitude'=>7.243803,
                        'longitude'=>81.00264
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>756,
                        'name_en'=>'Ambagamuwa Udabulathgama',
                        'name_si'=>'අඹගමුව උඩබුලත්ගම',
                        'district_id'=>11,
                        'postcode'=>'20678',
                        'latitude'=>7.0333,
                        'longitude'=>80.5
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>757,
                        'name_en'=>'Ambatenna',
                        'name_si'=>'අඹතැන්න',
                        'district_id'=>11,
                        'postcode'=>'20136',
                        'latitude'=>7.3472,
                        'longitude'=>80.6192
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>758,
                        'name_en'=>'Ampitiya',
                        'name_si'=>'අම්පිටිය',
                        'district_id'=>11,
                        'postcode'=>'20160',
                        'latitude'=>7.2667,
                        'longitude'=>80.65
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>759,
                        'name_en'=>'Ankumbura',
                        'name_si'=>'අංකුඹුර',
                        'district_id'=>11,
                        'postcode'=>'20150',
                        'latitude'=>7.434149,
                        'longitude'=>80.568704
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>760,
                        'name_en'=>'Atabage',
                        'name_si'=>'අටබාගෙ',
                        'district_id'=>11,
                        'postcode'=>'20574',
                        'latitude'=>7.1333,
                        'longitude'=>80.6
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>761,
                        'name_en'=>'Balana',
                        'name_si'=>'බලන',
                        'district_id'=>11,
                        'postcode'=>'20308',
                        'latitude'=>7.269032,
                        'longitude'=>80.485503
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>762,
                        'name_en'=>'Bambaragahaela',
                        'name_si'=>'බඹරගහඇල',
                        'district_id'=>11,
                        'postcode'=>'20644',
                        'latitude'=>7.0523,
                        'longitude'=>80.5023
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>763,
                        'name_en'=>'Batagolladeniya',
                        'name_si'=>'බටගොල්ලදෙණිය',
                        'district_id'=>11,
                        'postcode'=>'20154',
                        'latitude'=>7.41596,
                        'longitude'=>80.576688
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>764,
                        'name_en'=>'Batugoda',
                        'name_si'=>'බටුගොඩ',
                        'district_id'=>11,
                        'postcode'=>'20132',
                        'latitude'=>7.366275,
                        'longitude'=>80.59604
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>765,
                        'name_en'=>'Batumulla',
                        'name_si'=>'බටුමුල්ල',
                        'district_id'=>11,
                        'postcode'=>'20966',
                        'latitude'=>7.256086,
                        'longitude'=>80.978905
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>766,
                        'name_en'=>'Bawlana',
                        'name_si'=>'බව්ලන',
                        'district_id'=>11,
                        'postcode'=>'20218',
                        'latitude'=>7.211388,
                        'longitude'=>80.718828
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>767,
                        'name_en'=>'Bopana',
                        'name_si'=>'බෝපන',
                        'district_id'=>11,
                        'postcode'=>'20932',
                        'latitude'=>7.3,
                        'longitude'=>80.9
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>768,
                        'name_en'=>'Danture',
                        'name_si'=>'දංතුරේ',
                        'district_id'=>11,
                        'postcode'=>'20465',
                        'latitude'=>7.2833,
                        'longitude'=>80.5333
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>769,
                        'name_en'=>'Dedunupitiya',
                        'name_si'=>'දේදුනුපිටිය',
                        'district_id'=>11,
                        'postcode'=>'20068',
                        'latitude'=>7.3333,
                        'longitude'=>80.4333
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>770,
                        'name_en'=>'Dekinda',
                        'name_si'=>'දෙකිඳ',
                        'district_id'=>11,
                        'postcode'=>'20658',
                        'latitude'=>7.014688,
                        'longitude'=>80.509932
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>771,
                        'name_en'=>'Deltota',
                        'name_si'=>'දෙල්තොට',
                        'district_id'=>11,
                        'postcode'=>'20430',
                        'latitude'=>7.2,
                        'longitude'=>80.6667
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>772,
                        'name_en'=>'Divulankadawala',
                        'name_si'=>'දිවුලන්කදවල',
                        'district_id'=>11,
                        'postcode'=>'51428',
                        'latitude'=>7.175,
                        'longitude'=>80.55
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>773,
                        'name_en'=>'Dolapihilla',
                        'name_si'=>'දොලපිහිල්ල',
                        'district_id'=>11,
                        'postcode'=>'20126',
                        'latitude'=>7.393576,
                        'longitude'=>80.584659
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>774,
                        'name_en'=>'Dolosbage',
                        'name_si'=>'දොලොස්බාගෙ',
                        'district_id'=>11,
                        'postcode'=>'20510',
                        'latitude'=>7.0806,
                        'longitude'=>80.4731
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>775,
                        'name_en'=>'Dunuwila',
                        'name_si'=>'දුනුවිල',
                        'district_id'=>11,
                        'postcode'=>'20824',
                        'latitude'=>7.3833,
                        'longitude'=>80.6333
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>776,
                        'name_en'=>'Etulgama',
                        'name_si'=>'ඇතුල්ගම',
                        'district_id'=>11,
                        'postcode'=>'20202',
                        'latitude'=>7.2333,
                        'longitude'=>80.65
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>777,
                        'name_en'=>'Galaboda',
                        'name_si'=>'ගලබොඩ',
                        'district_id'=>11,
                        'postcode'=>'20664',
                        'latitude'=>6.9875,
                        'longitude'=>80.5319
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>778,
                        'name_en'=>'Galagedara',
                        'name_si'=>'ගලගෙදර',
                        'district_id'=>11,
                        'postcode'=>'20100',
                        'latitude'=>7.369716,
                        'longitude'=>80.520308
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>779,
                        'name_en'=>'Galaha',
                        'name_si'=>'ගලහ',
                        'district_id'=>11,
                        'postcode'=>'20420',
                        'latitude'=>7.195764,
                        'longitude'=>80.668659
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>780,
                        'name_en'=>'Galhinna',
                        'name_si'=>'ගල්හින්න',
                        'district_id'=>11,
                        'postcode'=>'20152',
                        'latitude'=>7.418361,
                        'longitude'=>80.560015
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>781,
                        'name_en'=>'Gampola',
                        'name_si'=>'ගම්පොල',
                        'district_id'=>11,
                        'postcode'=>'20500',
                        'latitude'=>7.1647,
                        'longitude'=>80.5767
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>782,
                        'name_en'=>'Gelioya',
                        'name_si'=>'ගෙලිඔය',
                        'district_id'=>11,
                        'postcode'=>'20620',
                        'latitude'=>7.2136,
                        'longitude'=>80.6017
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>783,
                        'name_en'=>'Godamunna',
                        'name_si'=>'ගොඩමුන්න',
                        'district_id'=>11,
                        'postcode'=>'20214',
                        'latitude'=>7.227313,
                        'longitude'=>80.697447
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>784,
                        'name_en'=>'Gomagoda',
                        'name_si'=>'ගොමගොඩ',
                        'district_id'=>11,
                        'postcode'=>'20184',
                        'latitude'=>7.3167,
                        'longitude'=>80.7333
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>785,
                        'name_en'=>'Gonagantenna',
                        'name_si'=>'ගොනාගන්තැන්න',
                        'district_id'=>11,
                        'postcode'=>'20712',
                        'latitude'=>7.1517,
                        'longitude'=>80.7118
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>786,
                        'name_en'=>'Gonawalapatana',
                        'name_si'=>'ගෝනවලපතන',
                        'district_id'=>11,
                        'postcode'=>'20656',
                        'latitude'=>7.0358,
                        'longitude'=>80.5262
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>787,
                        'name_en'=>'Gunnepana',
                        'name_si'=>'ගුන්නෙපන',
                        'district_id'=>11,
                        'postcode'=>'20270',
                        'latitude'=>7.2696,
                        'longitude'=>80.6537
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>788,
                        'name_en'=>'Gurudeniya',
                        'name_si'=>'ගුරුදෙණිය',
                        'district_id'=>11,
                        'postcode'=>'20189',
                        'latitude'=>7.265953,
                        'longitude'=>80.702921
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>789,
                        'name_en'=>'Hakmana',
                        'name_si'=>'හක්මන',
                        'district_id'=>11,
                        'postcode'=>'81300',
                        'latitude'=>7.334701,
                        'longitude'=>80.82402
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>790,
                        'name_en'=>'Handaganawa',
                        'name_si'=>'හඳගනාව',
                        'district_id'=>11,
                        'postcode'=>'20984',
                        'latitude'=>7.277451,
                        'longitude'=>80.989485
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>791,
                        'name_en'=>'Handawalapitiya',
                        'name_si'=>'හඳවලපිටිය',
                        'district_id'=>11,
                        'postcode'=>'20438',
                        'latitude'=>7.2,
                        'longitude'=>80.6667
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>792,
                        'name_en'=>'Handessa',
                        'name_si'=>'හඳැස්ස',
                        'district_id'=>11,
                        'postcode'=>'20480',
                        'latitude'=>7.230048,
                        'longitude'=>80.580831
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>793,
                        'name_en'=>'Hanguranketha',
                        'name_si'=>11,
                        'district_id'=>'20710',
                        'postcode'=>7.1517,
                        'latitude'=>80.7118,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>794,
                        'name_en'=>'Harangalagama',
                        'name_si'=>11,
                        'district_id'=>'20669',
                        'postcode'=>7.0271,
                        'latitude'=>80.5493,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>795,
                        'name_en'=>'Hataraliyadda',
                        'name_si'=>11,
                        'district_id'=>'20060',
                        'postcode'=>7.3333,
                        'latitude'=>80.4667,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>796,
                        'name_en'=>'Hindagala',
                        'name_si'=>11,
                        'district_id'=>'20414',
                        'postcode'=>7.231512,
                        'latitude'=>80.600815,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>797,
                        'name_en'=>'Hondiyadeniya',
                        'name_si'=>11,
                        'district_id'=>'20524',
                        'postcode'=>7.1364,
                        'latitude'=>80.5766,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>798,
                        'name_en'=>'Hunnasgiriya',
                        'name_si'=>11,
                        'district_id'=>'20948',
                        'postcode'=>7.298756,
                        'latitude'=>80.849834,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>799,
                        'name_en'=>'Inguruwatta',
                        'name_si'=>11,
                        'district_id'=>'60064',
                        'postcode'=>7.175038,
                        'latitude'=>80.599767,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>800,
                        'name_en'=>'Jambugahapitiya',
                        'name_si'=>11,
                        'district_id'=>'20822',
                        'postcode'=>7.3833,
                        'latitude'=>80.6333,
                        'longitude'=>79.958057,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>801,
                        'name_en'=>'Kadugannawa',
                        'name_si'=>11,
                        'district_id'=>'20300',
                        'postcode'=>7.2536,
                        'latitude'=>80.5275,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>802,
                        'name_en'=>'Kahataliyadda',
                        'name_si'=>11,
                        'district_id'=>'20924',
                        'postcode'=>7.376,
                        'latitude'=>80.8213,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>803,
                        'name_en'=>'Kalugala',
                        'name_si'=>11,
                        'district_id'=>'20926',
                        'postcode'=>7.390136,
                        'latitude'=>80.883008,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>804,
                        'name_en'=>'Kandy',
                        'name_si'=>11,
                        'district_id'=>'20000',
                        'postcode'=>7.2964,
                        'latitude'=>80.635,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>805,
                        'name_en'=>'Kapuliyadde',
                        'name_si'=>11,
                        'district_id'=>'20206',
                        'postcode'=>7.2401,
                        'latitude'=>80.6808,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>806,
                        'name_en'=>'Katugastota',
                        'name_si'=>11,
                        'district_id'=>'20800',
                        'postcode'=>7.3161,
                        'latitude'=>80.6211,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>807,
                        'name_en'=>'Katukitula',
                        'name_si'=>11,
                        'district_id'=>'20588',
                        'postcode'=>7.1089,
                        'latitude'=>80.6339,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>808,
                        'name_en'=>'Kelanigama',
                        'name_si'=>11,
                        'district_id'=>'20688',
                        'postcode'=>7.0049,
                        'latitude'=>80.5182,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>809,
                        'name_en'=>'Kengalla',
                        'name_si'=>11,
                        'district_id'=>'20186',
                        'postcode'=>7.296461,
                        'latitude'=>80.711767,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>810,
                        'name_en'=>'Ketaboola',
                        'name_si'=>11,
                        'district_id'=>'20660',
                        'postcode'=>7.0271,
                        'latitude'=>80.5493,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>811,
                        'name_en'=>'Ketakumbura',
                        'name_si'=>11,
                        'district_id'=>'20306',
                        'postcode'=>7.210532,
                        'latitude'=>80.571678,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>812,
                        'name_en'=>'Kobonila',
                        'name_si'=>11,
                        'district_id'=>'20928',
                        'postcode'=>7.376,
                        'latitude'=>80.8213,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>813,
                        'name_en'=>'Kolabissa',
                        'name_si'=>11,
                        'district_id'=>'20212',
                        'postcode'=>7.225,
                        'latitude'=>80.7167,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>814,
                        'name_en'=>'Kolongoda',
                        'name_si'=>11,
                        'district_id'=>'20971',
                        'postcode'=>7.3552,
                        'latitude'=>80.8375,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>815,
                        'name_en'=>'Kulugammana',
                        'name_si'=>11,
                        'district_id'=>'20048',
                        'postcode'=>7.315193,
                        'latitude'=>80.590268,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>816,
                        'name_en'=>'Kumbukkandura',
                        'name_si'=>11,
                        'district_id'=>'20902',
                        'postcode'=>7.2969,
                        'latitude'=>80.7686,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>817,
                        'name_en'=>'Kumburegama',
                        'name_si'=>11,
                        'district_id'=>'20086',
                        'postcode'=>7.357279,
                        'latitude'=>80.551316,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>818,
                        'name_en'=>'Kundasale',
                        'name_si'=>11,
                        'district_id'=>'20168',
                        'postcode'=>7.2667,
                        'latitude'=>80.6833,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>819,
                        'name_en'=>'Leemagahakotuwa',
                        'name_si'=>11,
                        'district_id'=>'20482',
                        'postcode'=>7.2333,
                        'latitude'=>80.5833,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>820,
                        'name_en'=>'lhala Kobbekaduwa',
                        'name_si'=>11,
                        'district_id'=>'20042',
                        'postcode'=>7.3167,
                        'latitude'=>80.5833,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>821,
                        'name_en'=>'Lunugama',
                        'name_si'=>11,
                        'district_id'=>'11062',
                        'postcode'=>7.198402,
                        'latitude'=>80.578244,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>822,
                        'name_en'=>'Lunuketiya Maditta',
                        'name_si'=>11,
                        'district_id'=>'20172',
                        'postcode'=>7.3292,
                        'latitude'=>80.716,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>823,
                        'name_en'=>'Madawala Bazaar',
                        'name_si'=>11,
                        'district_id'=>'20260',
                        'postcode'=>7.2696,
                        'latitude'=>80.6537,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>824,
                        'name_en'=>'Madawalalanda',
                        'name_si'=>11,
                        'district_id'=>'32016',
                        'postcode'=>7.3792,
                        'latitude'=>80.4982,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>825,
                        'name_en'=>'Madugalla',
                        'name_si'=>11,
                        'district_id'=>'20938',
                        'postcode'=>7.265802,
                        'latitude'=>80.882139,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>826,
                        'name_en'=>'Madulkele',
                        'name_si'=>11,
                        'district_id'=>'20840',
                        'postcode'=>7.400281,
                        'latitude'=>80.728874,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>827,
                        'name_en'=>'Mahadoraliyadda',
                        'name_si'=>11,
                        'district_id'=>'20945',
                        'postcode'=>7.3,
                        'latitude'=>80.85,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>828,
                        'name_en'=>'Mahamedagama',
                        'name_si'=>11,
                        'district_id'=>'20216',
                        'postcode'=>7.225,
                        'latitude'=>80.7167,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>829,
                        'name_en'=>'Mahanagapura',
                        'name_si'=>11,
                        'district_id'=>'32018',
                        'postcode'=>7.3792,
                        'latitude'=>80.4982,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>830,
                        'name_en'=>'Mailapitiya',
                        'name_si'=>11,
                        'district_id'=>'20702',
                        'postcode'=>7.1517,
                        'latitude'=>80.7118,
                        'longitude'=>79.958057,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>831,
                        'name_en'=>'Makkanigama',
                        'name_si'=>11,
                        'district_id'=>'20828',
                        'postcode'=>7.3833,
                        'latitude'=>80.6333,
                        'longitude'=>79.958057,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>832,
                        'name_en'=>'Makuldeniya',
                        'name_si'=>11,
                        'district_id'=>'20921',
                        'postcode'=>7.341706,
                        'latitude'=>80.777466,
                        'longitude'=>79.958057,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>833,
                        'name_en'=>'Mangalagama',
                        'name_si'=>11,
                        'district_id'=>'32069',
                        'postcode'=>7.285856,
                        'latitude'=>80.563656,
                        'longitude'=>79.958057,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>834,
                        'name_en'=>'Mapakanda',
                        'name_si'=>11,
                        'district_id'=>'20662',
                        'postcode'=>7.007889,
                        'latitude'=>80.531101,
                        'longitude'=>79.958057,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>835,
                        'name_en'=>'Marassana',
                        'name_si'=>11,
                        'district_id'=>'20210',
                        'postcode'=>7.221663,
                        'latitude'=>80.732336,
                        'longitude'=>79.958057,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>836,
                        'name_en'=>'Marymount Colony',
                        'name_si'=>11,
                        'district_id'=>'20714',
                        'postcode'=>7.1517,
                        'latitude'=>80.7118,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>837,
                        'name_en'=>'Mawatura',
                        'name_si'=>11,
                        'district_id'=>'20564',
                        'postcode'=>7.1,
                        'latitude'=>80.5667,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>838,
                        'name_en'=>'Medamahanuwara',
                        'name_si'=>11,
                        'district_id'=>'20940',
                        'postcode'=>7.3,
                        'latitude'=>80.85,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>839,
                        'name_en'=>'Medawala Harispattuwa',
                        'name_si'=>11,
                        'district_id'=>'20120',
                        'postcode'=>7.3417,
                        'latitude'=>80.6833,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>840,
                        'name_en'=>'Meetalawa',
                        'name_si'=>11,
                        'district_id'=>'20512',
                        'postcode'=>7.0986,
                        'latitude'=>80.4699,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>841,
                        'name_en'=>'Megoda Kalugamuwa',
                        'name_si'=>11,
                        'district_id'=>'20409',
                        'postcode'=>7.2631,
                        'latitude'=>80.6028,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>842,
                        'name_en'=>'Menikdiwela',
                        'name_si'=>11,
                        'district_id'=>'20470',
                        'postcode'=>7.288455,
                        'latitude'=>80.501662,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>843,
                        'name_en'=>'Menikhinna',
                        'name_si'=>11,
                        'district_id'=>'20170',
                        'postcode'=>7.3167,
                        'latitude'=>80.7,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>844,
                        'name_en'=>'Mimure',
                        'name_si'=>11,
                        'district_id'=>'20923',
                        'postcode'=>7.4333,
                        'latitude'=>80.8333,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>845,
                        'name_en'=>'Minigamuwa',
                        'name_si'=>11,
                        'district_id'=>'20109',
                        'postcode'=>7.3333,
                        'latitude'=>80.5167,
                        'longitude'=>79.958057
                        ] );
                        
                        
                                    
                        City::create( [
                        'id'=>846,
                        'name_en'=>'Minipe',
                        'name_si'=>11,
                        'district_id'=>'20983',
                        'postcode'=>7.223556,
                        'latitude'=>80.990971,
                        'longitude'=>79.958057
                        ] );
                        
                        
                
                        City::create( [
                            'id'=>848,
                            'name_en'=>'Murutalawa',
                            'name_si'=>11,
                            'district_id'=>'20232',
                            'postcode'=>7.3,
                            'latitude'=>80.5667,
                        'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>849,
                            'name_en'=>'Muruthagahamulla',
                            'name_si'=>11,
                            'district_id'=>'20526',
                            'postcode'=>7.1364,
                            'latitude'=>80.5766,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>850,
                            'name_en'=>'Nanuoya',
                            'name_si'=>11,
                            'district_id'=>'22150',
                            'postcode'=>7.1171,
                            'latitude'=>80.6387,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>851,
                            'name_en'=>'Naranpanawa',
                            'name_si'=>11,
                            'district_id'=>'20176',
                            'postcode'=>7.339733,
                            'latitude'=>80.729831,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>852,
                            'name_en'=>'Narawelpita',
                            'name_si'=>11,
                            'district_id'=>'81302',
                            'postcode'=>7.3167,
                            'latitude'=>80.8,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>853,
                            'name_en'=>'Nawalapitiya',
                            'name_si'=>11,
                            'district_id'=>'20650',
                            'postcode'=>7.05048,
                            'latitude'=>80.530631,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>854,
                            'name_en'=>'Nawathispane',
                            'name_si'=>11,
                            'district_id'=>'20670',
                            'postcode'=>7.0333,
                            'latitude'=>80.5,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>855,
                            'name_en'=>'Nillambe',
                            'name_si'=>11,
                            'district_id'=>'20418',
                            'postcode'=>7.15,
                            'latitude'=>80.6333,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>856,
                            'name_en'=>'Nugaliyadda',
                            'name_si'=>11,
                            'district_id'=>'20204',
                            'postcode'=>7.2333,
                            'latitude'=>80.7,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>857,
                            'name_en'=>'Ovilikanda',
                            'name_si'=>11,
                            'district_id'=>'21020',
                            'postcode'=>7.45,
                            'latitude'=>80.5667,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>858,
                            'name_en'=>'Pallekotuwa',
                            'name_si'=>11,
                            'district_id'=>'20084',
                            'postcode'=>7.3333,
                            'latitude'=>80.5667,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>859,
                            'name_en'=>'Panwilatenna',
                            'name_si'=>11,
                            'district_id'=>'20544',
                            'postcode'=>7.1556,
                            'latitude'=>80.6314,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>860,
                            'name_en'=>'Paradeka',
                            'name_si'=>11,
                            'district_id'=>'20578',
                            'postcode'=>7.12293,
                            'latitude'=>80.618959,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>861,
                            'name_en'=>'Pasbage',
                            'name_si'=>11,
                            'district_id'=>'20654',
                            'postcode'=>7.0358,
                            'latitude'=>80.5262,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>862,
                            'name_en'=>'Pattitalawa',
                            'name_si'=>11,
                            'district_id'=>'20511',
                            'postcode'=>7.1167,
                            'latitude'=>80.4667,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>863,
                            'name_en'=>'Peradeniya',
                            'name_si'=>11,
                            'district_id'=>'20400',
                            'postcode'=>7.2631,
                            'latitude'=>80.6028,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>864,
                            'name_en'=>'Pilimatalawa',
                            'name_si'=>11,
                            'district_id'=>'20450',
                            'postcode'=>7.2333,
                            'latitude'=>80.5333,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>865,
                            'name_en'=>'Poholiyadda',
                            'name_si'=>11,
                            'district_id'=>'20106',
                            'postcode'=>7.343274,
                            'latitude'=>80.520186,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>866,
                            'name_en'=>'Pubbiliya',
                            'name_si'=>11,
                            'district_id'=>'21502',
                            'postcode'=>7.385927,
                            'latitude'=>80.481336,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>867,
                            'name_en'=>'Pupuressa',
                            'name_si'=>11,
                            'district_id'=>'20546',
                            'postcode'=>7.115632,
                            'latitude'=>80.677455,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>868,
                            'name_en'=>'Pussellawa',
                            'name_si'=>11,
                            'district_id'=>'20580',
                            'postcode'=>7.112565,
                            'latitude'=>80.644101,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>869,
                            'name_en'=>'Putuhapuwa',
                            'name_si'=>11,
                            'district_id'=>'20906',
                            'postcode'=>7.334198,
                            'latitude'=>80.759353,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>870,
                            'name_en'=>'Rajawella',
                            'name_si'=>11,
                            'district_id'=>'20180',
                            'postcode'=>7.280519,
                            'latitude'=>80.748217,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>871,
                            'name_en'=>'Rambukpitiya',
                            'name_si'=>11,
                            'district_id'=>'20676',
                            'postcode'=>7.0333,
                            'latitude'=>80.5,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>872,
                            'name_en'=>'Rambukwella',
                            'name_si'=>11,
                            'district_id'=>'20128',
                            'postcode'=>7.294759,
                            'latitude'=>80.777664,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>873,
                            'name_en'=>'Rangala',
                            'name_si'=>11,
                            'district_id'=>'20922',
                            'postcode'=>7.344486,
                            'latitude'=>80.795047,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>874,
                            'name_en'=>'Rantembe',
                            'name_si'=>11,
                            'district_id'=>'20990',
                            'postcode'=>7.3552,
                            'latitude'=>80.8375,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>875,
                            'name_en'=>'Sangarajapura',
                            'name_si'=>11,
                            'district_id'=>'20044',
                            'postcode'=>7.3167,
                            'latitude'=>80.5833,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>876,
                            'name_en'=>'Senarathwela',
                            'name_si'=>11,
                            'district_id'=>'20904',
                            'postcode'=>7.280125,
                            'latitude'=>80.761602,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>877,
                            'name_en'=>'Talatuoya',
                            'name_si'=>11,
                            'district_id'=>'20200',
                            'postcode'=>7.2536,
                            'latitude'=>80.6925,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>878,
                            'name_en'=>'Teldeniya',
                            'name_si'=>11,
                            'district_id'=>'20900',
                            'postcode'=>7.2969,
                            'latitude'=>80.7686,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>879,
                            'name_en'=>'Tennekumbura',
                            'name_si'=>11,
                            'district_id'=>'20166',
                            'postcode'=>7.2833,
                            'latitude'=>80.6667,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>880,
                            'name_en'=>'Uda Peradeniya',
                            'name_si'=>11,
                            'district_id'=>'20404',
                            'postcode'=>7.249001,
                            'latitude'=>80.614072,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>881,
                            'name_en'=>'Udahentenna',
                            'name_si'=>11,
                            'district_id'=>'20506',
                            'postcode'=>7.0889,
                            'latitude'=>80.5189,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>882,
                            'name_en'=>'Udatalawinna',
                            'name_si'=>11,
                            'district_id'=>'20802',
                            'postcode'=>7.3161,
                            'latitude'=>80.6211,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>883,
                            'name_en'=>'Udispattuwa',
                            'name_si'=>11,
                            'district_id'=>'20916',
                            'postcode'=>7.3552,
                            'latitude'=>80.8375,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>884,
                            'name_en'=>'Ududumbara',
                            'name_si'=>11,
                            'district_id'=>'20950',
                            'postcode'=>7.3552,
                            'latitude'=>80.8375,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>885,
                            'name_en'=>'Uduwahinna',
                            'name_si'=>11,
                            'district_id'=>'20934',
                            'postcode'=>7.2833,
                            'latitude'=>80.8917,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>886,
                            'name_en'=>'Uduwela',
                            'name_si'=>11,
                            'district_id'=>'20164',
                            'postcode'=>7.2722,
                            'latitude'=>80.6667,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>887,
                            'name_en'=>'Ulapane',
                            'name_si'=>11,
                            'district_id'=>'20562',
                            'postcode'=>7.114072,
                            'latitude'=>80.552445,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>888,
                            'name_en'=>'Unuwinna',
                            'name_si'=>11,
                            'district_id'=>'20708',
                            'postcode'=>7.1517,
                            'latitude'=>80.7118,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>889,
                            'name_en'=>'Velamboda',
                            'name_si'=>11,
                            'district_id'=>'20640',
                            'postcode'=>7.0523,
                            'latitude'=>80.5023,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>890,
                            'name_en'=>'Watagoda',
                            'name_si'=>11,
                            'district_id'=>'22110',
                            'postcode'=>7.39731,
                            'latitude'=>80.588304,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>891,
                            'name_en'=>'Watagoda Harispattuwa',
                            'name_si'=>11,
                            'district_id'=>'20134',
                            'postcode'=>7.3569,
                            'latitude'=>80.6012,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>892,
                            'name_en'=>'Wattappola',
                            'name_si'=>11,
                            'district_id'=>'20454',
                            'postcode'=>7.234802,
                            'latitude'=>80.543661,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>893,
                            'name_en'=>'Weligampola',
                            'name_si'=>11,
                            'district_id'=>'20666',
                            'postcode'=>7.0271,
                            'latitude'=>80.5493,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>894,
                            'name_en'=>'Wendaruwa',
                            'name_si'=>11,
                            'district_id'=>'20914',
                            'postcode'=>7.3552,
                            'latitude'=>80.8375,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>895,
                            'name_en'=>'Weragantota',
                            'name_si'=>11,
                            'district_id'=>'20982',
                            'postcode'=>7.3167,
                            'latitude'=>80.9833,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>896,
                            'name_en'=>'Werapitya',
                            'name_si'=>11,
                            'district_id'=>'20908',
                            'postcode'=>7.2969,
                            'latitude'=>80.7686,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>897,
                            'name_en'=>'Werellagama',
                            'name_si'=>11,
                            'district_id'=>'20080',
                            'postcode'=>7.3167,
                            'latitude'=>80.5833,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>898,
                            'name_en'=>'Wettawa',
                            'name_si'=>11,
                            'district_id'=>'20108',
                            'postcode'=>7.3508,
                            'latitude'=>80.5221,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>899,
                            'name_en'=>'Yahalatenna',
                            'name_si'=>11,
                            'district_id'=>'20234',
                            'postcode'=>7.3,
                            'latitude'=>80.5667,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>900,
                            'name_en'=>'Yatihalagala',
                            'name_si'=>11,
                            'district_id'=>'20034',
                            'postcode'=>7.3,
                            'latitude'=>80.6,
                            'longitude'=>79.958057
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>901,
                            'name_en'=>'Alawala',
                            'name_si'=>'අලවල',
                            'district_id'=>12,
                            'postcode'=>'11122',
                            'latitude'=>7.197379,
                            'longitude'=>80.282779
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>902,
                            'name_en'=>'Alawatura',
                            'name_si'=>'අලවතුර',
                            'district_id'=>12,
                            'postcode'=>'71204',
                            'latitude'=>7.1333,
                            'longitude'=>80.3333
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>903,
                            'name_en'=>'Alawwa',
                            'name_si'=>'අලව්ව',
                            'district_id'=>12,
                            'postcode'=>'60280',
                            'latitude'=>7.2875,
                            'longitude'=>80.2536
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>904,
                            'name_en'=>'Algama',
                            'name_si'=>'අල්ගම',
                            'district_id'=>12,
                            'postcode'=>'71607',
                            'latitude'=>7.158338,
                            'longitude'=>80.162939
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>905,
                            'name_en'=>'Alutnuwara',
                            'name_si'=>'අළුත්නුවර',
                            'district_id'=>12,
                            'postcode'=>'71508',
                            'latitude'=>7.2333,
                            'longitude'=>80.4667
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>906,
                            'name_en'=>'Ambalakanda',
                            'name_si'=>'අම්බලකන්ද',
                            'district_id'=>12,
                            'postcode'=>'71546',
                            'latitude'=>7.134049,
                            'longitude'=>80.446804
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>907,
                            'name_en'=>'Ambulugala',
                            'name_si'=>'අම්බුළුගල',
                            'district_id'=>12,
                            'postcode'=>'71503',
                            'latitude'=>7.239127,
                            'longitude'=>80.409623
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>908,
                            'name_en'=>'Amitirigala',
                            'name_si'=>'අමිතිරිගල',
                            'district_id'=>12,
                            'postcode'=>'71320',
                            'latitude'=>7.0306,
                            'longitude'=>80.1839
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>909,
                            'name_en'=>'Ampagala',
                            'name_si'=>'අම්පාගල',
                            'district_id'=>12,
                            'postcode'=>'71232',
                            'latitude'=>7.080239,
                            'longitude'=>80.289037
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>910,
                            'name_en'=>'Anhandiya',
                            'name_si'=>'අංහන්දිය',
                            'district_id'=>12,
                            'postcode'=>'60074',
                            'latitude'=>7.2667,
                            'longitude'=>80.2667
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>911,
                            'name_en'=>'Anhettigama',
                            'name_si'=>'අංහෙට්ටිගම',
                            'district_id'=>12,
                            'postcode'=>'71403',
                            'latitude'=>6.922121,
                            'longitude'=>80.371876
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>912,
                            'name_en'=>'Aranayaka',
                            'name_si'=>'අරනායක',
                            'district_id'=>12,
                            'postcode'=>'71540',
                            'latitude'=>7.144705,
                            'longitude'=>80.461358
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>913,
                            'name_en'=>'Aruggammana',
                            'name_si'=>'අරුග්ගම්මන',
                            'district_id'=>12,
                            'postcode'=>'71041',
                            'latitude'=>7.117733,
                            'longitude'=>80.306712
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>914,
                            'name_en'=>'Batuwita',
                            'name_si'=>'බටුවිට',
                            'district_id'=>12,
                            'postcode'=>'71321',
                            'latitude'=>7.044339,
                            'longitude'=>80.179129
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>915,
                            'name_en'=>'Beligala(Sab)',
                            'name_si'=>'බෙලිගල',
                            'district_id'=>12,
                            'postcode'=>'71044',
                            'latitude'=>7.2167,
                            'longitude'=>80.2917
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>916,
                            'name_en'=>'Belihuloya',
                            'name_si'=>'බෙලිහුල්ඔය',
                            'district_id'=>12,
                            'postcode'=>'70140',
                            'latitude'=>7.2667,
                            'longitude'=>80.2167
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>917,
                            'name_en'=>'Berannawa',
                            'name_si'=>'බෙරන්නව',
                            'district_id'=>12,
                            'postcode'=>'71706',
                            'latitude'=>7.064482,
                            'longitude'=>80.405526
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>918,
                            'name_en'=>'Bopitiya',
                            'name_si'=>'බෝපිටිය',
                            'district_id'=>12,
                            'postcode'=>'60155',
                            'latitude'=>7.179761,
                            'longitude'=>80.205221
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>919,
                            'name_en'=>'Bopitiya (SAB)',
                            'name_si'=>'බෝපිටිය (සබර)',
                            'district_id'=>12,
                            'postcode'=>'71612',
                            'latitude'=>7.2583,
                            'longitude'=>80.2167
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>920,
                            'name_en'=>'Boralankada',
                            'name_si'=>'බොරලන්කද',
                            'district_id'=>12,
                            'postcode'=>'71418',
                            'latitude'=>6.979656,
                            'longitude'=>80.330338
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>921,
                            'name_en'=>'Bossella',
                            'name_si'=>'බොස්සැල්ල',
                            'district_id'=>12,
                            'postcode'=>'71208',
                            'latitude'=>7.1333,
                            'longitude'=>80.4
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>922,
                            'name_en'=>'Bulathkohupitiya',
                            'name_si'=>'බුලත්කොහුපිටිය',
                            'district_id'=>12,
                            'postcode'=>'71230',
                            'latitude'=>7.105994,
                            'longitude'=>80.338761
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>923,
                            'name_en'=>'Damunupola',
                            'name_si'=>'දමුනුපොල',
                            'district_id'=>12,
                            'postcode'=>'71034',
                            'latitude'=>7.187968,
                            'longitude'=>80.334456
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>924,
                            'name_en'=>'Debathgama',
                            'name_si'=>'දෙබත්ගම',
                            'district_id'=>12,
                            'postcode'=>'71037',
                            'latitude'=>7.1833,
                            'longitude'=>80.3583
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>925,
                            'name_en'=>'Dedugala',
                            'name_si'=>'දේදුගල',
                            'district_id'=>12,
                            'postcode'=>'71237',
                            'latitude'=>7.093849,
                            'longitude'=>80.418959
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>926,
                            'name_en'=>'Deewala Pallegama',
                            'name_si'=>'දීවල පල්ලෙගම',
                            'district_id'=>12,
                            'postcode'=>'71022',
                            'latitude'=>7.2333,
                            'longitude'=>80.2667
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>927,
                            'name_en'=>'Dehiowita',
                            'name_si'=>'දෙහිඕවිට',
                            'district_id'=>12,
                            'postcode'=>'71400',
                            'latitude'=>6.9706,
                            'longitude'=>80.2675
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>928,
                            'name_en'=>'Deldeniya',
                            'name_si'=>'දෙල්දෙණිය',
                            'district_id'=>12,
                            'postcode'=>'71009',
                            'latitude'=>7.280914,
                            'longitude'=>80.35876
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>929,
                            'name_en'=>'Deloluwa',
                            'name_si'=>'දෙලෝලුව',
                            'district_id'=>12,
                            'postcode'=>'71401',
                            'latitude'=>6.9653,
                            'longitude'=>80.3181
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>930,
                            'name_en'=>'Deraniyagala',
                            'name_si'=>'දැරණියගල',
                            'district_id'=>12,
                            'postcode'=>'71430',
                            'latitude'=>6.932387,
                            'longitude'=>80.335039
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>931,
                            'name_en'=>'Dewalegama',
                            'name_si'=>'දේවාලේගම',
                            'district_id'=>12,
                            'postcode'=>'71050',
                            'latitude'=>7.278928,
                            'longitude'=>80.319135
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>932,
                            'name_en'=>'Dewanagala',
                            'name_si'=>'දෙවනගල',
                            'district_id'=>12,
                            'postcode'=>'71527',
                            'latitude'=>7.2167,
                            'longitude'=>80.4667
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>933,
                            'name_en'=>'Dombemada',
                            'name_si'=>'දොඹේමද',
                            'district_id'=>12,
                            'postcode'=>'71115',
                            'latitude'=>7.37974,
                            'longitude'=>80.348761
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>934,
                            'name_en'=>'Dorawaka',
                            'name_si'=>'දොරවක',
                            'district_id'=>12,
                            'postcode'=>'71601',
                            'latitude'=>7.1833,
                            'longitude'=>80.2167
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>935,
                            'name_en'=>'Dunumala',
                            'name_si'=>'දුනුමල',
                            'district_id'=>12,
                            'postcode'=>'71605',
                            'latitude'=>7.1738,
                            'longitude'=>80.2074
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>936,
                            'name_en'=>'Galapitamada',
                            'name_si'=>'ගලපිටමඩ',
                            'district_id'=>12,
                            'postcode'=>'71603',
                            'latitude'=>7.14,
                            'longitude'=>80.2364
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>937,
                            'name_en'=>'Galatara',
                            'name_si'=>'ගලතර',
                            'district_id'=>12,
                            'postcode'=>'71505',
                            'latitude'=>7.2167,
                            'longitude'=>80.4167
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>938,
                            'name_en'=>'Galigamuwa Town',
                            'name_si'=>'ගලිගමුව නගරය',
                            'district_id'=>12,
                            'postcode'=>'71350',
                            'latitude'=>7.2,
                            'longitude'=>80.3
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>939,
                            'name_en'=>'Gallella',
                            'name_si'=>'ගල්ලෑල්ල',
                            'district_id'=>12,
                            'postcode'=>'70062',
                            'latitude'=>6.85,
                            'longitude'=>80.35
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>940,
                            'name_en'=>'Galpatha(Sab)',
                            'name_si'=>'ගල්පාත (සබරගමුව)',
                            'district_id'=>12,
                            'postcode'=>'71312',
                            'latitude'=>7.05,
                            'longitude'=>80.2333
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>941,
                            'name_en'=>'Gantuna',
                            'name_si'=>'ගන්තුන',
                            'district_id'=>12,
                            'postcode'=>'71222',
                            'latitude'=>7.1667,
                            'longitude'=>80.3667
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>942,
                            'name_en'=>'Getahetta',
                            'name_si'=>'ගැටහැත්ත',
                            'district_id'=>12,
                            'postcode'=>'70620',
                            'latitude'=>6.9128,
                            'longitude'=>80.2358
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>943,
                            'name_en'=>'Godagampola',
                            'name_si'=>'ගොඩගම්පොල',
                            'district_id'=>12,
                            'postcode'=>'70556',
                            'latitude'=>6.885959,
                            'longitude'=>80.313855
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>944,
                            'name_en'=>'Gonagala',
                            'name_si'=>'ගෝනාගල',
                            'district_id'=>12,
                            'postcode'=>'71318',
                            'latitude'=>7.035326,
                            'longitude'=>80.207373
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>945,
                            'name_en'=>'Hakahinna',
                            'name_si'=>'හකහින්න',
                            'district_id'=>12,
                            'postcode'=>'71352',
                            'latitude'=>7.2,
                            'longitude'=>80.3
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>946,
                            'name_en'=>'Hakbellawaka',
                            'name_si'=>'හක්බෙල්ලවක',
                            'district_id'=>12,
                            'postcode'=>'71715',
                            'latitude'=>7.003952,
                            'longitude'=>80.328796
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>947,
                            'name_en'=>'Halloluwa',
                            'name_si'=>'හල්ලෝලුව',
                            'district_id'=>12,
                            'postcode'=>'20032',
                            'latitude'=>7.2,
                            'longitude'=>80.35
                            ] );
                            
                            
                        
                            
                                        
                            City::create( [
                            'id'=>1002,
                            'name_en'=>'Colombo 2',
                            'name_si'=>'කොළඹ 2',
                            'district_id'=>5,
                            'postcode'=>'200',
                            'latitude'=>6.926944,
                            'longitude'=>79.848611
                            ] );
                            
                            
                                        
                         
                            
                            
                                        
                            City::create( [
                            'id'=>1033,
                            'name_en'=>'Alahengama',
                            'name_si'=>'අලහෙන්ගම',
                            'district_id'=>14,
                            'postcode'=>'60416',
                            'latitude'=>7.6779,
                            'longitude'=>80.1151
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1034,
                            'name_en'=>'Alahitiyawa',
                            'name_si'=>'අලහිටියාව',
                            'district_id'=>14,
                            'postcode'=>'60182',
                            'latitude'=>7.473913,
                            'longitude'=>80.171211
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1035,
                            'name_en'=>'Ambakote',
                            'name_si'=>'අඹකොටේ',
                            'district_id'=>14,
                            'postcode'=>'60036',
                            'latitude'=>7.492063,
                            'longitude'=>80.452844
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1036,
                            'name_en'=>'Ambanpola',
                            'name_si'=>'අඹන්පොල',
                            'district_id'=>14,
                            'postcode'=>'60650',
                            'latitude'=>7.915973,
                            'longitude'=>80.237512
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1037,
                            'name_en'=>'Andiyagala',
                            'name_si'=>'ආඬියාගල',
                            'district_id'=>14,
                            'postcode'=>'50112',
                            'latitude'=>7.4667,
                            'longitude'=>80.1333
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1038,
                            'name_en'=>'Anukkane',
                            'name_si'=>'අනුක්කනේ',
                            'district_id'=>14,
                            'postcode'=>'60214',
                            'latitude'=>7.501814,
                            'longitude'=>80.120028
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1039,
                            'name_en'=>'Aragoda',
                            'name_si'=>'අරංගොඩ',
                            'district_id'=>14,
                            'postcode'=>'60308',
                            'latitude'=>7.366116,
                            'longitude'=>80.344207
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1040,
                            'name_en'=>'Ataragalla',
                            'name_si'=>'අටරගල්ල',
                            'district_id'=>14,
                            'postcode'=>'60706',
                            'latitude'=>7.9696,
                            'longitude'=>80.2768
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1041,
                            'name_en'=>'Awulegama',
                            'name_si'=>'අවුලේගම',
                            'district_id'=>14,
                            'postcode'=>'60462',
                            'latitude'=>7.6569,
                            'longitude'=>80.2203
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1042,
                            'name_en'=>'Balalla',
                            'name_si'=>'බලල්ල',
                            'district_id'=>14,
                            'postcode'=>'60604',
                            'latitude'=>7.791025,
                            'longitude'=>80.250762
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1043,
                            'name_en'=>'Bamunukotuwa',
                            'name_si'=>'බමුණකොටුව',
                            'district_id'=>14,
                            'postcode'=>'60347',
                            'latitude'=>7.8667,
                            'longitude'=>80.2167
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1044,
                            'name_en'=>'Bandara Koswatta',
                            'name_si'=>'බන්ඩාර කොස්වත්ත',
                            'district_id'=>14,
                            'postcode'=>'60424',
                            'latitude'=>7.603296,
                            'longitude'=>80.17257
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1045,
                            'name_en'=>'Bingiriya',
                            'name_si'=>'බින්ගිරිය',
                            'district_id'=>14,
                            'postcode'=>'60450',
                            'latitude'=>7.605177,
                            'longitude'=>79.921996
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1046,
                            'name_en'=>'Bogamulla',
                            'name_si'=>'බෝගමුල්ල',
                            'district_id'=>14,
                            'postcode'=>'60107',
                            'latitude'=>7.4589,
                            'longitude'=>80.2107
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1047,
                            'name_en'=>'Boraluwewa',
                            'name_si'=>'බොරළුවැව',
                            'district_id'=>14,
                            'postcode'=>'60437',
                            'latitude'=>7.682578,
                            'longitude'=>80.034757
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1048,
                            'name_en'=>'Boyagane',
                            'name_si'=>'බෝයගානෙ',
                            'district_id'=>14,
                            'postcode'=>'60027',
                            'latitude'=>7.452272,
                            'longitude'=>80.341672
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1049,
                            'name_en'=>'Bujjomuwa',
                            'name_si'=>'බුජ්ජෝමුව',
                            'district_id'=>14,
                            'postcode'=>'60291',
                            'latitude'=>7.4581,
                            'longitude'=>80.0603
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1050,
                            'name_en'=>'Buluwala',
                            'name_si'=>'බුලුවල',
                            'district_id'=>14,
                            'postcode'=>'60076',
                            'latitude'=>7.484201,
                            'longitude'=>80.473535
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1051,
                            'name_en'=>'Dadayamtalawa',
                            'name_si'=>'දඩයම්තලාව',
                            'district_id'=>14,
                            'postcode'=>'32046',
                            'latitude'=>7.65,
                            'longitude'=>79.9667
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1052,
                            'name_en'=>'Dambadeniya',
                            'name_si'=>'දඹදෙණිය',
                            'district_id'=>14,
                            'postcode'=>'60130',
                            'latitude'=>7.370527,
                            'longitude'=>80.146193
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1053,
                            'name_en'=>'Daraluwa',
                            'name_si'=>'දරලුව',
                            'district_id'=>14,
                            'postcode'=>'60174',
                            'latitude'=>7.359407,
                            'longitude'=>79.978233
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1054,
                            'name_en'=>'Deegalla',
                            'name_si'=>'දීගල්ල',
                            'district_id'=>14,
                            'postcode'=>'60228',
                            'latitude'=>7.510205,
                            'longitude'=>80.029797
                            ] );
                            
                            
                                        
                            City::create( [
                            'id'=>1055,
                            'name_en'=>'Demataluwa',
                            'name_si'=>'දෙමටලුව',
                            'district_id'=>14,
                            'postcode'=>'60024',
                            'latitude'=>7.513976,
                            'longitude'=>80.258741
                            ] );
                            
                            City::create( [
                                'id'=>1056,
                                'name_en'=>'Demuwatha',
                                'name_si'=>'දෙමුවත',
                                'district_id'=>14,
                                'postcode'=>'70332',
                                'latitude'=>7.35,
                                'longitude'=>80.1667
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1057,
                                'name_en'=>'Diddeniya',
                                'name_si'=>'දෙණියාය',
                                'district_id'=>14,
                                'postcode'=>'60544',
                                'latitude'=>7.685279,
                                'longitude'=>80.47286
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1058,
                                'name_en'=>'Digannewa',
                                'name_si'=>'දිගන්නෑව',
                                'district_id'=>14,
                                'postcode'=>'60485',
                                'latitude'=>7.897218,
                                'longitude'=>80.101328
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1059,
                                'name_en'=>'Divullegoda',
                                'name_si'=>'දිවුලේගොඩ',
                                'district_id'=>14,
                                'postcode'=>'60472',
                                'latitude'=>7.75,
                                'longitude'=>80.2
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1060,
                                'name_en'=>'Diyasenpura',
                                'name_si'=>'දියසෙන්පුර',
                                'district_id'=>14,
                                'postcode'=>'51504',
                                'latitude'=>7.8167,
                                'longitude'=>80.1833
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1061,
                                'name_en'=>'Dodangaslanda',
                                'name_si'=>'දොඩන්ගස්ලන්ද',
                                'district_id'=>14,
                                'postcode'=>'60530',
                                'latitude'=>7.5667,
                                'longitude'=>80.5333
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1062,
                                'name_en'=>'Doluwa',
                                'name_si'=>'දොළුව',
                                'district_id'=>14,
                                'postcode'=>'20532',
                                'latitude'=>7.621516,
                                'longitude'=>80.418833
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1063,
                                'name_en'=>'Doragamuwa',
                                'name_si'=>'දොරගමුව',
                                'district_id'=>14,
                                'postcode'=>'20816',
                                'latitude'=>7.5833,
                                'longitude'=>79.9333
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1064,
                                'name_en'=>'Doratiyawa',
                                'name_si'=>'දොරටියාව',
                                'district_id'=>14,
                                'postcode'=>'60013',
                                'latitude'=>7.450628,
                                'longitude'=>80.380562
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1065,
                                'name_en'=>'Dunumadalawa',
                                'name_si'=>'දුනුමඩවල',
                                'district_id'=>14,
                                'postcode'=>'50214',
                                'latitude'=>7.8,
                                'longitude'=>80.0833
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1066,
                                'name_en'=>'Dunuwilapitiya',
                                'name_si'=>'දුනුවිලපිටිය',
                                'district_id'=>14,
                                'postcode'=>'21538',
                                'latitude'=>7.3667,
                                'longitude'=>80.2
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1067,
                                'name_en'=>'Ehetuwewa',
                                'name_si'=>'ඇහැටුවැව',
                                'district_id'=>14,
                                'postcode'=>'60716',
                                'latitude'=>7.927568,
                                'longitude'=>80.332035
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1068,
                                'name_en'=>'Elibichchiya',
                                'name_si'=>'ඇලිබිච්චිය',
                                'district_id'=>14,
                                'postcode'=>'60156',
                                'latitude'=>7.313179,
                                'longitude'=>80.056935
                                ] );
                                
                                
                                            
                            
                                
                                            
                                City::create( [
                                'id'=>1070,
                                'name_en'=>'Etungahakotuwa',
                                'name_si'=>'ඇතුන්ගහකොටුව',
                                'district_id'=>14,
                                'postcode'=>'60266',
                                'latitude'=>7.5167,
                                'longitude'=>79.9667
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1071,
                                'name_en'=>'Galadivulwewa',
                                'name_si'=>'ගලදිවුල්වැව',
                                'district_id'=>14,
                                'postcode'=>'50210',
                                'latitude'=>7.8,
                                'longitude'=>80.0833
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1072,
                                'name_en'=>'Galgamuwa',
                                'name_si'=>'ගල්ගමුව',
                                'district_id'=>14,
                                'postcode'=>'60700',
                                'latitude'=>7.995468,
                                'longitude'=>80.267527
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1073,
                                'name_en'=>'Gallellagama',
                                'name_si'=>'ගල්ලෑල්ලගම',
                                'district_id'=>14,
                                'postcode'=>'20095',
                                'latitude'=>7.3,
                                'longitude'=>80.15
                                ] );
                                
                                
                 
                                
                                
                                            
                                City::create( [
                                'id'=>1075,
                                'name_en'=>'Ganegoda',
                                'name_si'=>'ගණේගොඩ',
                                'district_id'=>14,
                                'postcode'=>'80440',
                                'latitude'=>7.5833,
                                'longitude'=>80
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1076,
                                'name_en'=>'Girathalana',
                                'name_si'=>'ගිරාතලන',
                                'district_id'=>14,
                                'postcode'=>'60752',
                                'latitude'=>7.9833,
                                'longitude'=>80.3833
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1077,
                                'name_en'=>'Gokaralla',
                                'name_si'=>'ගොකරුල්ල',
                                'district_id'=>14,
                                'postcode'=>'60522',
                                'latitude'=>7.6301,
                                'longitude'=>80.3775
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1078,
                                'name_en'=>'Gonawila',
                                'name_si'=>'ගොනාවිල',
                                'district_id'=>14,
                                'postcode'=>'60170',
                                'latitude'=>7.3167,
                                'longitude'=>80
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1079,
                                'name_en'=>'Halmillawewa',
                                'name_si'=>'හල්මිල්ලවැව',
                                'district_id'=>14,
                                'postcode'=>'60441',
                                'latitude'=>7.5953,
                                'longitude'=>79.9972
                                ] );
                                
                          
                                
                                            
                                City::create( [
                                'id'=>1820,
                                'name_en'=>'Nilaveli',
                                'name_si'=>'නිලාවැලි',
                                'district_id'=>24,
                                'postcode'=>'31010',
                                'latitude'=>8.658756,
                                'longitude'=>81.148516
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1821,
                                'name_en'=>'Pankulam',
                                'name_si'=>24,
                                'district_id'=>'31034',
                                'postcode'=>8.6333,
                                'latitude'=>81.0167,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1822,
                                'name_en'=>'Pulmoddai',
                                'name_si'=>'පුල්මුඩේ',
                                'district_id'=>24,
                                'postcode'=>'50567',
                                'latitude'=>8.9333,
                                'longitude'=>80.9833
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1823,
                                'name_en'=>'Rottawewa',
                                'name_si'=>24,
                                'district_id'=>'31038',
                                'postcode'=>8.6333,
                                'latitude'=>81.0167,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1824,
                                'name_en'=>'Sampaltivu',
                                'name_si'=>24,
                                'district_id'=>'31006',
                                'postcode'=>8.6167,
                                'latitude'=>81.2,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1825,
                                'name_en'=>'Sampoor',
                                'name_si'=>'සාම්පූර්',
                                'district_id'=>24,
                                'postcode'=>'31216',
                                'latitude'=>8.493354,
                                'longitude'=>81.284828
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1826,
                                'name_en'=>'Serunuwara',
                                'name_si'=>'සේනුවර',
                                'district_id'=>24,
                                'postcode'=>'31232',
                                'latitude'=>8.4458,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1827,
                                'name_en'=>'Seruwila',
                                'name_si'=>'සේරුවිල',
                                'district_id'=>24,
                                'postcode'=>'31260',
                                'latitude'=>8.4458,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1828,
                                'name_en'=>'Sirajnagar',
                                'name_si'=>24,
                                'district_id'=>'31314',
                                'postcode'=>8.3683,
                                'latitude'=>81.0281,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1829,
                                'name_en'=>'Somapura',
                                'name_si'=>'සෝමපුර',
                                'district_id'=>24,
                                'postcode'=>'31222',
                                'latitude'=>8.4458,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1830,
                                'name_en'=>'Tampalakamam',
                                'name_si'=>24,
                                'district_id'=>'31046',
                                'postcode'=>8.4925,
                                'latitude'=>81.0964,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1831,
                                'name_en'=>'Thuraineelavanai',
                                'name_si'=>24,
                                'district_id'=>'30254',
                                'postcode'=>8.2833,
                                'latitude'=>81.2667,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1832,
                                'name_en'=>'Tiriyayi',
                                'name_si'=>24,
                                'district_id'=>'31016',
                                'postcode'=>8.7444,
                                'latitude'=>81.15,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1833,
                                'name_en'=>'Toppur',
                                'name_si'=>24,
                                'district_id'=>'31250',
                                'postcode'=>8.4,
                                'latitude'=>81.3167,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1834,
                                'name_en'=>'Trincomalee',
                                'name_si'=>'තිරිකුණාමලය',
                                'district_id'=>24,
                                'postcode'=>'31000',
                                'latitude'=>8.5667,
                                'longitude'=>81.2333,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1835,
                                'name_en'=>'Wanela',
                                'name_si'=>24,
                                'district_id'=>'31308',
                                'postcode'=>8.3683,
                                'latitude'=>81.0281,
                                'longitude'=>81.2875
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1836,
                                'name_en'=>'Vavuniya',
                                'name_si'=>'වව්නියාව',
                                'district_id'=>25,
                                'postcode'=>'43000',
                                'latitude'=>8.758818,
                                'longitude'=>80.493461
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1837,
                                'name_en'=>'Colombo 1',
                                'name_si'=>'කොළඹ 1',
                                'district_id'=>5,
                                'postcode'=>'100',
                                'latitude'=>6.925833,
                                'longitude'=>79.841667
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1838,
                                'name_en'=>'Colombo 3',
                                'name_si'=>'කොළඹ 3',
                                'district_id'=>5,
                                'postcode'=>'300',
                                'latitude'=>6.900556,
                                'longitude'=>79.853333
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1839,
                                'name_en'=>'Colombo 4',
                                'name_si'=>'කොළඹ 4',
                                'district_id'=>5,
                                'postcode'=>'400',
                                'latitude'=>6.888889,
                                'longitude'=>79.856667
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1840,
                                'name_en'=>'Colombo 5',
                                'name_si'=>'කොළඹ 5',
                                'district_id'=>5,
                                'postcode'=>'500',
                                'latitude'=>6.879444,
                                'longitude'=>79.865278
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1841,
                                'name_en'=>'Colombo 7',
                                'name_si'=>'කොළඹ 7',
                                'district_id'=>5,
                                'postcode'=>'700',
                                'latitude'=>6.906667,
                                'longitude'=>79.863333
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1842,
                                'name_en'=>'Colombo 9',
                                'name_si'=>'කොළඹ 9',
                                'district_id'=>5,
                                'postcode'=>'900',
                                'latitude'=>6.93,
                                'longitude'=>79.877778
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1843,
                                'name_en'=>'Colombo 10',
                                'name_si'=>'කොළඹ 10',
                                'district_id'=>5,
                                'postcode'=>'1000',
                                'latitude'=>6.928333,
                                'longitude'=>79.864167
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1844,
                                'name_en'=>'Colombo 11',
                                'name_si'=>'කොළඹ 11',
                                'district_id'=>5,
                                'postcode'=>'Pettah',
                                'latitude'=>'1100',
                                'longitude'=>6.936667,
                                'longitude'=>79.849722
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1845,
                                'name_en'=>'Colombo 12',
                                'name_si'=>'කොළඹ 12',
                                'district_id'=>5,
                                'postcode'=>'1200',
                                'latitude'=>6.9425,
                                'longitude'=>79.858333
                                ] );
                                
                                
                                            
                                City::create( [
                                'id'=>1846,
                                'name_en'=>'Colombo 14',
                                'name_si'=>'කොළඹ 14',
                                'district_id'=>5,
                                'postcode'=>'1400',
                                'latitude'=>6.9475,
                                'longitude'=>79.874722
                                ] );
    }
}
