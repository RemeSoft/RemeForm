<?php

use Shuchkin\SimpleXLSXGen;
use Shuchkin\SimpleXLSX;

if(isset($_POST['download'])){

    // PERSONAL INFORMATION
    $name_bangla = $_POST['name_bangla'];
    $name_english = $_POST['name_english'];
    $birth_certificate_no = $_POST['birth_certificate_no'];
    $birth_date =  date("d-m-Y", strtotime($_POST['birth_date']));
    $sex = $_POST['sex'];
    $father_name_bangla = $_POST['father_name_bangla'];
    $father_name_english = $_POST['father_name_english'];
    $father_nid = $_POST['father_nid'];
    $father_birth_date = date("d-m-Y", strtotime($_POST['father_birth_date']));
    $father_mobile_number = $_POST['father_mobile_number'];
    $marital_status = $_POST['marital_status'];
    $mohter_name_bangla = $_POST['mohter_name_bangla'];
    $mohter_name_english = $_POST['mohter_name_english'];
    $mother_nid = $_POST['mother_nid'];
    $mother_birth_date = date("d-m-Y", strtotime($_POST['mother_birth_date']));
    $mother_mobile_number = $_POST['mother_mobile_number'];

    // PERMANENT ADDRESS
    $permanent_division = $_POST['permanent_division'];
    $permanent_district = $_POST['permanent_district'];
    $permanent_upazila = $_POST['permanent_upazila'];
    $permanent_union = $_POST['permanent_union'];
    $permanent_postcode = $_POST['permanent_postcode'];
    $permanent_location = $_POST['permanent_location'];

    // PRESENT ADDRESS
    $present_division = $_POST['present_division'];
    $present_district = $_POST['present_district'];
    $present_upazila = $_POST['present_upazila'];
    $present_union = $_POST['present_union'];
    $present_postcode = $_POST['present_postcode'];
    $present_location = $_POST['present_location'];

    // PREVIOUS EDUCATION
    $previous_edu_division = $_POST['previous_edu_division'];
    $previous_edu_district = $_POST['previous_edu_district'];
    $previous_edu_upazila = $_POST['previous_edu_upazila'];
    $previous_edu_school = $_POST['previous_edu_school'];
    $previous_edu_passyear = $_POST['previous_edu_passyear'];
    $previous_edu_board = $_POST['previous_edu_board'];
    $previous_edu_technology = $_POST['previous_edu_technology'];
    $previous_edu_exam = $_POST['previous_edu_exam'];
    $previous_edu_roll = $_POST['previous_edu_roll'];
    $previous_edu_reg = $_POST['previous_edu_reg'];
    $previous_edu_gpa = $_POST['previous_edu_gpa'];

    // PRESENT EDUCATION
    $present_edu_division = $_POST['present_edu_division'];
    $present_edu_district = $_POST['present_edu_district'];
    $present_edu_upazila = $_POST['present_edu_upazila'];
    $present_edu_school = $_POST['present_edu_school'];
    $present_edu_semester = $_POST['present_edu_semester'];
    $present_edu_technology = $_POST['present_edu_technology'];
    $present_edu_group = $_POST['present_edu_group'];
    $current_edu_roll = $_POST['current_edu_roll'];

    // GUARDIAN INFORMATION
    $guardian = $_POST['guardian'];
    $guardian_name_bangla = $_POST['guardian_name_bangla'];
    $guardian_name_english = $_POST['guardian_name_english'];
    $guardian_nid = $_POST['guardian_nid'];
    $guardian_birth = date("d-m-Y", strtotime($_POST['guardian_birth']));
    $guardian_mobile = $_POST['guardian_mobile'];

    // ATTACHMMENT
    $attachment_edu_cost = $_POST['attachment_edu_cost'];
    $attachment_minorities = $_POST['attachment_minorities'];
    $attachment_freedom_fighter = $_POST['attachment_freedom_fighter'];
    $attachment_stipand_source = $_POST['attachment_stipand_source'];
    $attachment_physical_disability = $_POST['attachment_physical_disability'];

    // PAYMENT 
    $payment_method = $_POST['payment_method'];
    $mobile_company = $_POST['mobile_company'];
    $mobile_nid = $_POST['mobile_nid'];
    $mobile_number = $_POST['mobile_number'];


    // OPTIONS ARRAY
    $optionsArray = array(
        $sex,
        $marital_status,
        $guardian,
        $attachment_edu_cost,
        $attachment_minorities,
        $attachment_freedom_fighter,
        $attachment_stipand_source,
        $attachment_physical_disability,
        $payment_method
    );

    // OPTIONS VARIABLES
    $sex__options = 'পুরুষ / মহিলা / অন্যান্য';
    $marital__options = 'বিবাহিত / অবিবাহিত';
    $guardian__options = 'পিতা/মাতা/ভাই/বোন/অন্যান্য';
    $cost__options = 'পিতা/মাতা/অভিভাবক';
    $minorities__options = "হ্যাঁ/না";
    $fighter__options = "হ্যাঁ/না";
    $stipand__options = "হ্যাঁ/না";
    $disability__options = "হ্যাঁ/না";
    $payment__options = "ব্যাংকিং / মোবাইল ব্যাংকিং";

    

    // OPTIONS MARKER
    foreach ($optionsArray as $key => $value) {
        $replacement = $value . '<span class="mark">&#10003;</span>';
        switch($key){
            case 0:
                $GLOBALS['sex__options'] = str_replace($value, $replacement, $sex__options);
                break;
            case 1:
                switch ($value){
                    case 'বিবাহিত':
                        $GLOBALS['marital__options'] = 'বিবাহিত <span class="mark">&#10003;</span> / অবিবাহিত ';
                        break;
                    case 'অবিবাহিত':
                        $GLOBALS['marital__options'] = 'বিবাহিত / অবিবাহিত <span class="mark">&#10003;</span>';
                        break;
                }
                break;
            case 2:
                $GLOBALS['guardian__options'] = str_replace($value, $replacement, $guardian__options);
                break;
            case 3:
                switch($value){
                    case 'পিতা':
                        $GLOBALS['cost__options'] = 'পিতা<span class="mark">&#10003;</span> /মাতা/অভিভাবক';
                        break;
                    case 'মাতা':
                        $GLOBALS['cost__options'] = 'পিতা/মাতা<span class="mark">&#10003;</span> /অভিভাবক';
                        break;
                    case 'অভিভাবক':
                        $GLOBALS['cost__options'] = 'পিতা/মাতা/<br>অভিভাবক <span class="mark">&#10003;</span>';
                        break;
                } 
                break;
            case 4:
                $GLOBALS['minorities__options'] = str_replace($value, $replacement, $minorities__options);
                break;
            case 5:
                $GLOBALS['fighter__options'] = str_replace($value, $replacement, $fighter__options);
                break;
            case 6:
                $GLOBALS['stipand__options'] = str_replace($value, $replacement, $stipand__options);
                break;
            case 7:
                $GLOBALS['disability__options'] = str_replace($value, $replacement, $disability__options);
                break;
            case 8:
                echo $value;
                $GLOBALS['payment__options'] = str_replace($value, $replacement, $payment__options);
                break;
        }
    }

    $headings = [
        [
        // PERSONAL INFORMATION
        'শিক্ষার্থীর নাম (বাংলা)',
        'শিক্ষার্থীর নাম (ইংরেজি)', 
        'জন্ম সনদের নাম্বার', 
        'জন্ম তারিখ',
        'লিঙ্গ',
        'বৈবাহিক অবস্থা',
        'পিতার নাম (বাংলা)',
        'পিতার নাম (ইংরেজি)',
        'পিতার এন আই ডি',
        'পিতার জন্ম তারিখ',
        'পিতার মোবাইল নম্বর',
        'মাতার নাম (বাংলা )',
        'মাতার নাম (ইংরেজি)',
        'মাতার এন আই ডি',
        'মাতার জন্ম তারিখ',
        'মাতার মোবাইল নম্বর',
        "<b>PERSONAL INFORMATION END</b>",

        // PERMANENT ADDRESS
        'বিভাগ',
        'জেলা',
        'উপজেলা',
        'পৌরসভা/ইউনিয়ন/সিটি কর্পোরেশন',
        'পোস্ট কোড',
        'ঠিকানা / গ্রাম',
        "<b>PERMANENT ADDRESS END</b>",

        // PRESENT ADDRESS ADDRESS
        'বিভাগ',
        'জেলা',
        'উপজেলা',
        'পৌরসভা/ইউনিয়ন/সিটি কর্পোরেশন',
        'পোস্ট কোড',
        'ঠিকানা / গ্রাম',
        "<b>PRESENT ADDRESS END</b>",

        // PREVIOUS EDUCATION
        'বিভাগ',
        'জেলা',
        'উপজেলা',
        'প্রতিষ্ঠানের নাম',
        'উত্তীন হওয়ার বছর',
        'বোর্ড',
        'টেকনোলজি/ট্রেড',
        'পূর্ববর্তী পরীক্ষার নাম',
        'রোল',
        'ফলাফল (জিপিএ)',
        "<b>PREVIOUS EDUCATION END</b>",

        // PRESENT EDUCATION
        'বিভাগ',
        'জেলা',
        'উপজেলা',
        'প্রতিষ্ঠানের নাম',
        'শ্রেনী',
        'টেকনোলজি/ট্রেড',
        'শিফট এবং গ্রুপ',
        'রোল',
        "<b>PRESENT EDUCATION END</b>",

        // GUARDIAN INFORMATION
        'সম্পর্ক নির্বাচন করুন',
        'নাম (বাংলা)',
        'নাম (ইংরেজি)',
        'অভিভাবকের এনআইডি',
        'জন্ম তারিখ',
        'মোবাইল নম্বর',
        "<b>GUARDIAN INFORMATION END</b>",
  
        'পেমেন্ট মেথড নির্বাচন করুন',
        'মোবাইল ব্যাংকিং সেবাদাকারী প্রতিষ্টান',
        'অ্যাকাউন্টধারীর এনআইডি নম্বর',
        'অ্যাকাউন্ট নম্বর',
        "<b>PAYMENT END</b>",

        ],
    ];

    $fieldsArray = array(

        // 
        $name_bangla,
        $name_english,
        $birth_certificate_no,
        $birth_date,
        $sex,
        $marital_status,
        $father_name_bangla,
        $father_name_english,
        $father_nid,
        $father_birth_date,
        $father_mobile_number,
        $mohter_name_bangla,
        $mohter_name_english,
        $mother_nid,
        $mother_birth_date,
        $mother_mobile_number,
        "<b>PERSONAL INFORMATION END</b>",

        // PERMANENT ADDRESS
        $permanent_division,
        $permanent_district,
        $permanent_upazila,
        $permanent_union,
        $permanent_postcode,
        $permanent_location,
        "<b>PERMANENT ADDRESS END</b>",

        // PRESENT ADDRESS
        $present_division,
        $present_district,
        $present_upazila,
        $present_union,
        $present_postcode,
        $present_location,
        "<b>PRESENT ADDRESS END</b>",

        // PREVIOUS EDUCATION
        $previous_edu_division,
        $previous_edu_district,
        $previous_edu_upazila,
        $previous_edu_school,
        $previous_edu_passyear,
        $previous_edu_board,
        $previous_edu_technology,
        $previous_edu_exam,
        $previous_edu_roll,
        $previous_edu_gpa,
        "<b>PREVIOUS EDUCATION END</b>",

        // PRESENT EDUCATION
        $present_edu_division,
        $present_edu_district,
        $present_edu_upazila,
        $present_edu_school,
        $present_edu_semester,
        $present_edu_technology,
        $present_edu_group,
        $current_edu_roll,
        "<b>PRESENT EDUCATION END</b>",

        // GUARDIAN INFORMATION
        $guardian,
        $guardian_name_bangla,
        $guardian_name_english,
        $guardian_nid,
        $guardian_birth,
        $guardian_mobile,
        "<b>GUARDIAN INFORMATION END</b>",

        // PAYMENT 
        $payment_method,
        $mobile_company,
        $mobile_nid,
        $mobile_number,
        "<b>PAYMENT END</b>",
    );


    // GENERATEING PDF and GENERATE XLS FILE
    require_once __DIR__ . '/vendor/autoload.php';

    //GENERATE PHP
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-p']);
    require('./pages/page_one.php');
    $mpdf->WriteHTML($html);
    $mpdf->AddPage();
    require('./pages/page_two.php');
    $mpdf->WriteHTML($html);
    $mpdf->Output('Remeform.pdf', 'D');

    // // GENERATE XLS
    // if($reader = SimpleXLSX::parse('headway.xlsx')){
    //     $prevData = $reader->rows();
    //     array_push($prevData , $fieldsArray);
    //     $xlsx = Shuchkin\SimpleXLSXGen::fromArray( $prevData );
    //     $xlsx->saveAs('headway.xlsx');
    // }else{
    //     array_push($headings , $fieldsArray);
    //     $xlsx = Shuchkin\SimpleXLSXGen::fromArray($headings);
    //     $xlsx->saveAs('headway.xlsx');
    // }
}
?>