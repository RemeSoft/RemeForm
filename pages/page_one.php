<?php
$html = 
'
<html>
<head>
    <style>

        .title {
            font-family: nikosh;
            font-size: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border: .5px solid black;
            border-collapse: collapse;
        }
        th,
        td {
            font-family: nikosh;
            border: 1px solid black;
            border-collapse: collapse;
            padding: 0 6px;
        }

        th{
            height: 30px;
            font-size: 15px;
        }
        
        .first__column{
            width: 130px;
        }
        
        .second__column{
            width: 210px;
        }
        
        .third__column{
            width: 150px;
        }
        .mark{
            font-family: freeserif;
        }
        .fourth__column{
            width: 100px;
        }
        .bangla__field{
            font-family: nikosh;
            font-width: 300;
        }
        
        .english__field{
            font-family: nikosh;
            font-size: 12px;
        }
        
        .number__field{
            font-family: sarifanumber;
        }
        footer{
            text-align: center;
            font-family: nikosh;
            margin-top: 10px;
        }

    </style>
</head>

<body>
    <main>

        <h1 class="title">
            কারিগরি শিক্ষা অধিদপ্তর এর স্টাইপেন্ড এমআইএস সফটওয়্যারে<br> উপবৃত্তির জন্য শিক্ষার্থী
            আবেদন ফরম (SAF)
        </h1>

        <table>

            <!-- TABLE HEADING START  -->
            <tr>
                <th colspan="5">ব্যক্তিগত তথ্য</th>
            </tr>
            <tr>
                <td class="first__column">শিক্ষার্থীর নাম (বাংলা)</td>
                <td colspan="4">: <span class="bangla__field">'.$name_bangla.'</span></td>
            </tr>
            <tr>
                <td>শিক্ষার্থীর নাম (ইংরেজি)</td>
                <td colspan="4"> : <span class="english__field">'.$name_english.'</span></td>
            </tr>
            <tr>
                <td>জন্ম সনদের নাম্বার</td>
                <td colspan="4">: <span class="number__field">'.$birth_certificate_no.'</span></td>
            </tr>
            <tr>
                <td>জন্ম তারিখ</td>
                <td colspan="4">: <span class="number__field">'.$birth_date.'</span></td>
            </tr>
            <tr>
                <td>লিঙ্গ</td>
                <td class="second__column">:'.$sex__options.'</td>
                <td class="third__column">বৈবাহিক অবস্থা</td>
                <td colspan="2">: '.$marital__options.'</td>
            </tr>
            <tr>
                <td>পিতার নাম (বাংলা)</td>
                <td >: <span class="bangla__field">'.$father_name_bangla.'</span></td>
                <td>মাতার নাম (বাংলা )</td>
                <td colspan="2">: <span class="bangla__field">'.$mohter_name_bangla.'</span></td>
            </tr>
            <tr>
                <td>পিতার নাম (ইংরেজি)</td>
                <td>: <span class="english__field" >'.$father_name_english.'</span></td>
                <td>মাতার নাম (ইংরেজি)</td>
                <td colspan="2">: <span class="english__field" >'.$mohter_name_english.'</span></td>
            </tr>
            <tr>
                <td>পিতার এন আই ডি</td>
                <td>: <span class="number__field">'.$father_nid.'</span></td>
                <td>মাতার এন আই ডি</td>
                <td colspan="2">: <span class="number__field">'.$mother_nid.'</span></td>
            </tr>
            <tr>
                <td>পিতার জন্ম তারিখ</td>
                <td>: <span class="number__field">'.$father_birth_date.'</span></td>
                <td>মাতার জন্ম তারিখ</td>
                <td colspan="2">: <span class="number__field">'.$mother_birth_date.'</span></td>
            </tr>
            <tr>
                <td>পিতার মোবাইল নম্বর</td>
                <td class="bangla__field">: <span class="number__field">'.$father_mobile_number.'</span></td>
                <td>মাতার মোবাইল নম্বর</td>
                <td colspan="2" >: <span class="number__field">'.$mother_mobile_number.'</span></td>
            </tr>

            <!-- TBALE HEADING START  -->
            <tr>
                <th colspan="2">স্থায়ী ঠিকানা</th>
                <th colspan="3">বর্তমান ঠিকানা</th>
            </tr>
            <tr>
                <td>বিভাগ</td>
                <td>: <span class="bangla__field">'.$permanent_division.'</span></td>
                <td>বিভাগ</td>
                <td colspan="2">: <span class="bangla__field">'.$present_division.'</span></td>
            </tr>
            <tr>
                <td>জেলা</td>
                <td>: <span class="bangla__field">'.$permanent_district.'</span></td>
                <td>জেলা</td>
                <td colspan="2">: <span class="bangla__field">'.$present_district.'</span></td>
            </tr>
            <tr>
                <td>উপজেলা</td>
                <td >: <span class="bangla__field">'.$permanent_upazila.'</span></td>
                <td>উপজেলা</td>
                <td colspan="2">: <span class="bangla__field">'.$present_upazila.'</span></td>
            </tr>
            <tr>
                <td>পৌরসভা/ইউনিয়ন/সিটি কর্পোরেশন</td>
                <td>: <span class="bangla__field">'.$permanent_union.'</span></td>
                <td>পৌরসভা/ইউনিয়ন/সিটি কর্পোরেশন</td>
                <td colspan="2">: <span class="bangla__field">'.$present_union.'</span></td>
            </tr>
            <tr>
                <td>পোস্ট কোড</td>
                <td>: <span class="number__field">'.$permanent_postcode.'</span></td>
                <td>পোস্ট কোড</td>
                <td colspan="2">: <span class="number__field">'.$present_postcode.'</span></td>
            </tr>
            <tr>
                <td>ঠিকানা / গ্রাম</td>
                <td>: <span class="bangla__field">'.$permanent_location.'</span></td>
                <td>ঠিকানা / গ্রাম</td>
                <td colspan="2">: <span class="bangla__field">'.$present_location.'</span></td>
            </tr>
            <!-- TABLE HEADING START  -->
            <tr>
                <th colspan="2">পূর্ববর্তী শিক্ষা তথ্য</th>
                <th colspan="3">বর্তমান শিক্ষা তথ্য</th>
            </tr>
            <tr>
                <td>বিভাগ</td>
                <td>: <span class="bangla__field">'.$previous_edu_division.'</span></td>
                <td>বিভাগ</td>
                <td colspan="2">: <span class="bangla__field">'.$present_edu_division.'</span></td>
            </tr>
            <tr>
                <td>জেলা</td>
                <td>: <span class="bangla__field">'.$previous_edu_district.'</span></td>
                <td>জেলা</td>
                <td colspan="2">: <span class="bangla__field">'.$present_edu_district.'</span></td>
            </tr>
            <tr>
                <td>উপজেলা</td>
                <td >: <span class="bangla__field">'.$previous_edu_upazila.'</span></td>
                <td>উপজেলা</td>
                <td colspan="2">: <span class="bangla__field">'.$present_edu_upazila.'</span></td>
            </tr>
            <tr>
                <td>প্রতিষ্ঠানের নাম</td>
                <td>: <span class="bangla__field">'.$previous_edu_school.'</span></td>
                <td>প্রতিষ্ঠানের নাম</td>
                <td colspan="2">: <span class="bangla__field">'.$present_edu_school.'</span></td>
            </tr>
            <tr>
                <td>উত্তীন হওয়ার বছর</td>
                <td>: <span class="number__field">'.$previous_edu_passyear.'</span></td>
                <td>শ্রেনী</td>
                <td colspan="2">: <span class="bangla__field">'.$present_edu_semester.'</span></td>
            </tr>
            <tr>
                <td>বোর্ড</td>
                <td>: <span class="bangla__field">'.$previous_edu_board.'</span></td>
                <td>টেকনোলজি/ট্রেড</td>
                <td colspan="2">: <span class="bangla__field">'.$present_edu_technology.'</span></td>
            </tr>
            <tr>
                <td>টেকনোলজি/ট্রেড</td>
                <td>: <span class="bangla__field">'.$previous_edu_technology.'</span></td>
                <td>শিফট এবং গ্রুপ</td>
                <td colspan="2">: <span class="bangla__field">'.$present_edu_group.'</span></td>
            </tr>
            <tr>
                <td>পূর্ববর্তী পরীক্ষার নাম</td>
                <td>: <span class="bangla__field">'.$previous_edu_exam.'</span></td>
                <td>বোর্ড রোল</td>
                <td colspan="2">: <span class="number__field">'.$current_edu_roll.'</span></td>
            </tr>
            <tr>
                <td>বোর্ড রোল</td>
                <td>: <span class="number__field">'.$previous_edu_roll.'</span></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>বোর্ড রেজিস্ট্রেশন</td>
                <td>: <span class="number__field">'.$previous_edu_reg.'</span></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>ফলাফল (জিপিএ)</td>
                <td>: <span class="number__field">'.$previous_edu_gpa.'</span></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>উপস্থিতির হার (প্রতিষ্ঠান কর্তৃক পূরণীয়)</td>
                <td><b>------%</b> </td>
                <td></td>
                <td colspan="2"></td>
            </tr>

            <!-- TBALE HEADING START  -->
            <tr>
                <th colspan="2">অভিভাবকের তথ্য</th>
                <th colspan="3">যোগ্যতার শর্ত এবং সংযুক্তি</th>
            </tr>
            <tr>
                <td class="exceptional__row">সম্পর্ক নির্বাচন করুন</td>
                <td >: '.$guardian__options.'</td>
                <td colspan="2">পড়াশুনা খরচ বহন করবে কে?</td>
                <td class="fourth__column">: '.$cost__options.'</td>
            </tr>
            <tr>
                <td>নাম (বাংলা)</td>
                <td>: <span class="bangla__field">'.$guardian_name_bangla.'</span></td>
                <td colspan="2" >আবেদনকারী কি বাংলাদেশের কোনও ক্ষুদ্র নৃ-গোষ্ঠিীর অন্তুর্ভুক্ত?</td>
                <td >: '.$minorities__options.'</td>
            </tr>
            <tr>
                <td>নাম (ইংরেজি)</td>
                <td>: <span class="english__field">'.$guardian_name_english.'</span></td>
                <td colspan="2">আবেদনকারী কি মুক্তিযোদ্ধা পরিবারের সন্তান (মুক্তিযোদ্ধা প্রজন্ম)?</td>
                <td>: '.$fighter__options.'</td>
            </tr>
            <tr>
                <td>অভিভাবকের এনআইডি</td>
                <td>: <span class="number__field">'.$guardian_nid.'</span></td>
                <td colspan="2">আবেদনকারী কি অন্য কোন উৎস হতে বৃত্তি/উপবৃত্তি পান?</td>
                <td>: '.$stipand__options.'</td>
            </tr>
            <tr>
                <td>জন্ম তারিখ</td>
                <td>: <span class="number__field">'.$guardian_birth.'</span></td>
                <td colspan="2">আবেদনকারীর কি কোন শারীরিক প্রতিবন্ধকতা আছে?</td>
                <td>: '.$disability__options.'</td>
            </tr>
            <tr>
                <td>মোবাইল নম্বর</td>
                <td>: <span class="number__field">'.$guardian_mobile.'</span></td>
                <td colspan="2">প্রযোজ্য ক্ষেত্রে সংশ্লিষ্ট সনদ বা প্রয়োজনীয় সনদ সংযুক্ত করুন</td>
                <td>: </td>
            </tr>
        </table>
    </main>
    <footer class="done">১</footer>

</body>
</html>
'
?>