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
        $insert=[[
            'name' => "Именное предложение",
            'title' => "Именное предложение",
            'code' => "imennoe-predlozhenie",
            'meta_keywords' => "Именное предложение",
            'meta_description' => "Именное предложение",
            'grammar_text' => "Предложения, которые начинаются с подлежащего, в арабском языке относят к именным предложениям. Такой тип предложения широко распространен в арабском языке.
Правила для простого именного предложения:
1. Подлежащее ставится перед сказуемым.
2. Подлежащее ставится в определенном состоянии. При этом именами в определенном состоянии считаются: 
а) имена с артиклями,  
б) указательные и личные местоимения, 
в) собственные имена: личные, географические и т.п.
3. Сказуемое, выраженное существительным, прилагательным или причастием, ставится в неопределенном   состоянии.   
4. Сказуемое согласуется с подлежащим в роде и числе.
5. Подлежащее и сказуемое в арабском языке ставится в Именительном падеже.
Примечания: 
1. К словам во множественном числе, не обозначающим лиц, в арабском языке относятся как к словам единственного числа женского рода.
2. При слитном чтении двух слов, первое из которых оканчивается долгим гласным, а следующее начинается с артикля долгий гласный читается кратко, например: هذَا الرَّجُلُ.",
            'arabic_text' => "
الـنَّـافِـذَةُ مُـغْـلَـقَـةٌ. الْـفُـصُـولُ وَاسِـعَـةٌ. الأَبْـوَابُ مَـفْـتُـوحَـةٌ. الـنِّـسَـاءُ ضَـعِـيـفَـاتٌ. الْـمِـسْـطَـرَةُ طَـوِيـلَـةٌ. الْـقَـلَـمُ قَـصِـيـرٌ. الْـكِـتَـابُ مَـفْـتُـوحٌ. الـرِّجَـالُ أَقْـوِيَـاءُ. عَـلِيٌّ تَـاجِـرٌ. أَحْـمَـدُ طَـالِـبٌ. مَـرْيَـمُ طَـبِـيـبَـةٌ. هِىَ فَـاسِـقَـةٌ. هُـمْ صَـالِـحُـونَ. هـذَا الـرَّجُـلُ عَـادِلٌ. هـذِهِ الْـمَـرْأَةُ صَـالِـحَـةٌ. هـؤُلاَءِ الأَغْـنِـيَـاءُ فَـاسِـقُـونَ. ذلِـكَ الْـوَلَـدُ طَـوِيـلٌ. تِـلْـكَ الـتِّـلْـمِـيـذَةُ ضَـعِـيـفَـةٌ. هـؤُلاَءِ الْـمُـعَـلِّـمَـاتُ غَـنِـيَّـاتٌ. هـذِهِ الْـمَـسَـاطِـرُ قَـصِـيـرَةٌ. هـذَا الْـفَـصْـلُ ضَـيِّـقٌ. أُوْلـئِـكَ الـنِّـسَـاءُ صَـالِـحَـاتٌ.هـذِهِ الْـمَـدْرَسَـةُ كَـبِـيـرَةٌ.هـذَا الْـبَـابُ مُـغْـلَقٌ.هـؤُلاَءِ الأََوْلاَدُ صِـغَـارٌ"
        ],
            [
                'name' => "Личные местоимения",
                'title' => "Личные местоимения",
                'code' => "lichnye-mestoimeniya",
                'meta_keywords' => "Личные местоимения",
                'meta_description' => "Личные местоимения",
                'grammar_text' => " Личные местоимения, приведённые в таблице, являются раздельными, т.е. в предложениях выступают в качестве отдельных слов. Эти местоимения не изменяются по падежам и употребляются исключительно в значении именительного падежа в качестве подлежащих либо сказуемых именного предложения. Личные местоимения в арабском языке имеют отдельные слова для выражения мужского и женского рода во 2-м лице ед. числа, 2-м лице мн. числа, 3-м лице ед. числа, 3-м лице мн. числа.",
                'arabic_text' => "
أَنْتِ غَنِيَّةٌ. أَنَا تِلْمِيذٌ. أَنْتَ كَبِيرٌ. هُوَ جَاهِلٌ. نَحْنُ أَقْوِِيَاءُ. أَنْــتُــنَّ   عَالِـمَاتٌ. هُنَّ مُسْلِمَاتٌ. نَحْنُ طَالِبَاتٌ. هِىَ ضَعِيفَةٌ. أَنَا قَوِيَّةٌ. أَنْتُمْ طُلاَّبٌ. هِىَ مُعَلِّمَةٌ. هُوَ إِمَامٌ. أَنْتُمْ ضُعَفَاءُ. أَنْتِ عَادِلَةٌ. أَنْــتُــنَّ   غَنِيَّاتٌ. هُمْ ظَالِـمُونَ. أَنْتَ صَغِيرٌ. أَنَا مُؤَذِّنٌ. هُمْ عُلَمَاءُ. هُنَّ جَاهِلاَتٌ.   
"

            ]];
        DB::table('grammar')->insert($insert);
    }
}
