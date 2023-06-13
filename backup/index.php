<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stipand Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/vandor/slick.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <main class="area">
        <div class="area__left">
            <a class="company" href="https://github.com/RemeSoft">Remesoft</a>
            <div>
                <h1 class="left__title">উপবৃত্তির ফরম <br> পূরণ করুন অনলাইনে ।</h1>
                <p class="left__desc">এখন খুব সহজেই আপনি আপনার উপবৃত্তির ফরমটি পূরণ করে ডাউনলোড করে নিতে পারেন।</p>
                <button class="left__btn"><i class="fa-solid fa-file-lines"></i> ফরম সংগ্রহ করুন</button>
            </div>
            <div class="testimonial">
                <div class="your-class">
                    <div>
                        <div class="testimonial__box">
                            <p class="testimonial:message">এই প্রজেক্টটি আমি তাকে ক্লাস প্রজেক্ট হিসেবে দিয়েছিলাম সে খুব
                                ভালো
                                করে সেটি তৈরী করেছে। </p>
                            <div class="testimonial:owner">
                                <div class="owner__img">
                                    <img src="./img/teachers/kamran__sir.jpg" alt="">
                                </div>
                                <div class="owner__reference">
                                    <h3 class="reference__name">Kamran Ahamed</h3>
                                    <p class="reference__prof">Dept. Computer Technology</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial__box">
                            <p class="testimonial:message">এই প্রজেক্টটি আমি তাকে ক্লাস প্রজেক্ট হিসেবে দিয়েছিলাম সে খুব
                                ভালো
                                করে সেটি তৈরী করেছে। </p>
                            <div class="testimonial:owner">
                                <div class="owner__img">
                                    <img src="./img/teachers/kamran__sir.jpg" alt="">
                                </div>
                                <div class="owner__reference">
                                    <h3 class="reference__name">Kamran Ahamed</h3>
                                    <p class="reference__prof">Dept. Computer Technology</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial__box">
                            <p class="testimonial:message">এই প্রজেক্টটি আমি তাকে ক্লাস প্রজেক্ট হিসেবে দিয়েছিলাম সে খুব
                                ভালো
                                করে সেটি তৈরী করেছে। </p>
                            <div class="testimonial:owner">
                                <div class="owner__img">
                                    <img src="./img/teachers/kamran__sir.jpg" alt="">
                                </div>
                                <div class="owner__reference">
                                    <h3 class="reference__name">Kamran Ahamed</h3>
                                    <p class="reference__prof">Dept. Computer Technology</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="area__right">
            <div class="right__content">
                <form class="form" action="generator.php" method="post">
                    <div class="form__content">
                        <div class="header">
                            <h3 class="header__title">ব্যক্তিগত তথ্য</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label">শিক্ষার্থীর নাম (বাংলা)</label>
                                <input class="item__input" name="name_bangla" type="text" spellcheck="false" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">শিক্ষার্থীর নাম (ইংরেজি)</label>
                                <input class="item__input" name="name_english" type="text" spellcheck="false" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">জন্ম সনদের নাম্বার</label>
                                <input class="item__input" name="birth_certificate_no" type="text" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">জন্ম তারিখ</label>
                                <input class="item__input" name="birth_date" type="date" spellcheck="false" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">লিঙ্গ</label>
                                <select class="item__input" name="sex" required>
                                    <option value="পুরুষ">পুরুষ</option>
                                    <option value="মহিলা">মহিলা</option>
                                    <option value="অন্যান্য">অন্যান্য</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">পিতার নাম (বাংলা)</label>
                                <input class="item__input" name="father_name_bangla" type="text" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">পিতার নাম (ইংরেজি)</label>
                                <input class="item__input" name="father_name_english" type="text" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">পিতার এন আই ডি</label>
                                <input class="item__input" name="father_nid" type="text" spellcheck="false" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">পিতার জন্ম তারিখ</label>
                                <input class="item__input" name="father_birth_date" type="date" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">পিতার মোবাইল নম্বর</label>
                                <input class="item__input" name="father_mobile_number" type="text" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">বৈবাহিক অবস্থা</label>
                                <select class="item__input" name="marital_status" required>
                                    <option value="বিবাহিত">বিবাহিত</option>
                                    <option value="অবিবাহিত">অবিবাহিত</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">মাতার নাম (বাংলা )</label>
                                <input class="item__input" name="mohter_name_bangla" type="text" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">মাতার নাম (ইংরেজি)</label>
                                <input class="item__input" name="mohter_name_english" type="text" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">মাতার এন আই ডি</label>
                                <input class="item__input" name="mother_nid" type="text" spellcheck="false" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">মাতার জন্ম তারিখ</label>
                                <input class="item__input" name="mother_birth_date" type="date" spellcheck="false"
                                    required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label">মাতার মোবাইল নম্বর</label>
                                <input class="item__input" name="mother_mobile_number" type="text" spellcheck="false"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">স্থায়ী ঠিকানা</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label" for="name">বিভাগ</label>
                                <input class="item__input" type="text" name="permanent_division" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">জেলা</label>
                                <input class="item__input" type="text" name="permanent_district" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">উপজেলা</label>
                                <input class="item__input" type="text" name="permanent_upazila" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">পৌরসভা/ইউনিয়ন/সিটি কর্পোরেশন</label>
                                <input class="item__input" type="text" name="permanent_union" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">পোস্ট কোড</label>
                                <input class="item__input" type="text" name="permanent_postcode" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">ঠিকানা / গ্রাম</label>
                                <input class="item__input" type="text" name="permanent_location" required>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">বর্তমান ঠিকানা</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label" for="name">বিভাগ</label>
                                <input class="item__input" type="text" name="present_division" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">জেলা</label>
                                <input class="item__input" type="text" name="present_district" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">উপজেলা</label>
                                <input class="item__input" type="text" name="present_upazila" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">পৌরসভা/ইউনিয়ন/সিটি কর্পোরেশন</label>
                                <input class="item__input" type="text" name="present_union" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">পোস্ট কোড</label>
                                <input class="item__input" type="text" name="present_postcode" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">ঠিকানা / গ্রাম</label>
                                <input class="item__input" type="text" name="present_location" required>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">পূর্ববর্তী শিক্ষা তথ্য</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label" for="name">বিভাগ</label>
                                <input class="item__input" type="text" name="previous_edu_division" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">জেলা</label>
                                <input class="item__input" type="text" name="previous_edu_district" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">উপজেলা</label>
                                <input class="item__input" type="text" name="previous_edu_upazila" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">প্রতিষ্ঠানের নাম</label>
                                <input class="item__input" type="text" name="previous_edu_school" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">উত্তীন হওয়ার বছর</label>
                                <input class="item__input" type="text" name="previous_edu_passyear" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">বোর্ড</label>
                                <select class="item__input" name="previous_edu_board" required>
                                    <option value="সিলেট">সিলেট</option>
                                    <option value="ঢাকা">ঢাকা</option>
                                    <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                    <option value="রাজশাহী">রাজশাহী</option>
                                    <option value="যশোর">যশোর</option>
                                    <option value="কুমিল্লা">কুমিল্লা</option>
                                    <option value="বরিশাল">বরিশাল</option>
                                    <option value="দিনাজপুর">দিনাজপুর</option>
                                    <option value="দিনাজপুর">দিনাজপুর</option>
                                    <option value="দিনাজপুর">বাংলাদেশ কারিগরি শিক্ষা বোর্ড</option>
                                    <option value="দিনাজপুর">বাংলাদেশ মাদ্রাসা শিক্ষা বোর্ড</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">টেকনোলজি/ট্রেড</label>
                                <select class="item__input" name="previous_edu_technology">
                                    <option value="">NULL</option>
                                    <option value="কম্পিউটার টেকনোলজি">কম্পিউটার টেকনোলজি</option>
                                    <option value="সিভিল টেকনোলজি">সিভিল টেকনোলজি</option>
                                    <option value="ইলেকট্রনিক্স টেকনোলজি">ইলেকট্রনিক্স টেকনোলজি</option>
                                    <option value="আর্কিটেকচার টেকনোলজি">আর্কিটেকচার টেকনোলজি</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">পূর্ববর্তী পরীক্ষার নাম</label>
                                <select class="item__input" name="previous_edu_exam" required>
                                    <option value="সিলেট">এস.এস.সি</option>
                                    <option value="ঢাকা">এইচ.এস.সি</option>
                                </select>

                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">বোর্ড রোল</label>
                                <input class="item__input" type="text" name="previous_edu_roll" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">বোর্ড রেজিস্ট্রেশন</label>
                                <input class="item__input" type="text" name="previous_edu_reg" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">ফলাফল (জিপিএ)</label>
                                <input class="item__input" type="text" name="previous_edu_gpa" required>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">বর্তমান শিক্ষা তথ্য</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label" for="name">বিভাগ</label>
                                <input class="item__input" type="text" name="present_edu_division" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">জেলা</label>
                                <input class="item__input" type="text" name="present_edu_district" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">উপজেলা</label>
                                <input class="item__input" type="text" name="present_edu_upazila" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">প্রতিষ্ঠানের নাম</label>
                                <input class="item__input" type="text" name="present_edu_school"
                                    value="হেডওয়ে ইঞ্জিনিয়ারিং ইনস্টিটিউট ।" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">শ্রেনী</label>
                                <select class="item__input" name="present_edu_semester" required>
                                    <option value="প্রথম সেমিস্টার">প্রথম সেমিস্টার</option>
                                    <option value="দ্বিতীয় সেমিস্টার">দ্বিতীয় সেমিস্টার</option>
                                    <option value="তৃতীয় সেমিস্টার">তৃতীয় সেমিস্টার</option>
                                    <option value="চতুর্থ সেমিস্টার">চতুর্থ সেমিস্টার</option>
                                    <option value="পঞ্চম সেমিস্টার">পঞ্চম সেমিস্টার</option>
                                    <option value="ষষ্ঠ সেমিস্টার">ষষ্ঠ সেমিস্টার</option>
                                    <option value="সপ্তম সেমিস্টার">সপ্তম সেমিস্টার</option>
                                    <option value="অষ্টম সেমিস্টার">অষ্টম সেমিস্টার</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">টেকনোলজি/ট্রেড</label>
                                <select class="item__input" name="present_edu_technology" required>
                                    <option value="কম্পিউটার টেকনোলজি">কম্পিউটার টেকনোলজি</option>
                                    <option value="সিভিল টেকনোলজি">সিভিল টেকনোলজি</option>
                                    <option value="ইলেকট্রনিক্স টেকনোলজি">ইলেকট্রনিক্স টেকনোলজি</option>
                                    <option value="আর্কিটেকচার টেকনোলজি">আর্কিটেকচার টেকনোলজি</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">শিফট এবং গ্রুপ</label>
                                <input class="item__input" type="text" name="present_edu_group">
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">রোল</label>
                                <input class="item__input" type="text" name="current_edu_roll" required>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">অভিভাবকের তথ্য</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label" for="name">সম্পর্ক নির্বাচন করুন</label>
                                <select class="item__input" name="guardian" required>
                                    <option value="পিতা">পিতা</option>
                                    <option value="মাতা">মাতা</option>
                                    <option value="ভাই">ভাই</option>
                                    <option value="বোন">বোন</option>
                                    <option value="অন্যান্য">অন্যান্য</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">নাম (বাংলা)</label>
                                <input class="item__input" type="text" name="guardian_name_bangla" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">নাম (ইংরেজি)</label>
                                <input class="item__input" type="text" name="guardian_name_english" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">অভিভাবকের এনআইডি</label>
                                <input class="item__input" type="text" name="guardian_nid" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">জন্ম তারিখ</label>
                                <input class="item__input" type="date" name="guardian_birth" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">মোবাইল নম্বর</label>
                                <input class="item__input" type="text" name="guardian_mobile" required>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">যোগ্যতার শর্ত এবং সংযুক্তি</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label" for="name">পড়াশুনা খরচ বহন করবে কে?</label>
                                <select class="item__input" name="attachment_edu_cost" required>
                                    <option value="পিতা">পিতা</option>
                                    <option value="মাতা">মাতা</option>
                                    <option value="অভিভাবক">অভিভাবক</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">
                                    আবেদনকারীর কি কোন শারীরিক প্রতিবন্ধকতা আছে?
                                </label>
                                <select class="item__input" name="attachment_physical_disability" required>
                                    <option value="হ্যাঁ">হ্যাঁ</option>
                                    <option value="না">না</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">
                                    আবেদনকারী কি বাংলাদেশের কোনও ক্ষুদ্র নৃ-গোষ্ঠীর অন্তুর্ভুক্ত?
                                </label>
                                <select class="item__input" name="attachment_minorities" required>
                                    <option value="হ্যাঁ">হ্যাঁ</option>
                                    <option value="না">না</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">
                                    আবেদনকারী কি মুক্তিযোদ্ধা পরিবারের সন্তান (মুক্তিযোদ্ধা প্রজন্ম)?
                                </label>
                                <select class="item__input" name="attachment_freedom_fighter" required>
                                    <option value="হ্যাঁ">হ্যাঁ</option>
                                    <option value="না">না</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">
                                    আবেদনকারী কি অন্য কোন উৎস হতে বৃত্তি/উপবৃত্তি পান?
                                </label>
                                <select class="item__input" name="attachment_stipand_source" required>
                                    <option value="হ্যাঁ">হ্যাঁ</option>
                                    <option value="না">না</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">পেমেন্ট বিবরণ</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">

                            <div class="inputs__item">
                                <label class="item__label" for="name">পেমেন্ট মেথড নির্বাচন করুন</label>
                                <select class="item__input" name="payment_method" required>
                                    <option value="মোবাইল ব্যাংকিং">মোবাইল ব্যাংকিং</option>
                                    <!-- <option value="ব্যাংকিং">ব্যাংকিং</option> -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form__content from__right">
                        <div class="header">
                            <h3 class="header__title">মোবাইল ব্যাংকিং</h3>
                            <p class="header__desc">ফরমে চাওয়া প্রতিটি তথ্য দিয়ে পরবর্তী ধাপে যান। </p>
                            <div class="progressbar"></div>
                        </div>
                        <div class="inputs">
                            <div class="inputs__item">
                                <label class="item__label" for="name">মোবাইল ব্যাংকিং সেবাদাকারী প্রতিষ্টান</label>
                                <select class="item__input" name="mobile_company" required>
                                    <option value="বিকাশ">বিকাশ</option>
                                    <option value="নগদ">নগদ</option>
                                </select>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">অ্যাকাউন্টধারীর এনআইডি নম্বর</label>
                                <input class="item__input" type="text" name="mobile_nid" required>
                            </div>
                            <div class="inputs__item">
                                <label class="item__label" for="name">অ্যাকাউন্ট নম্বর</label>
                                <input class="item__input" type="text" name="mobile_number" required>
                            </div>
                        </div>
                    </div>
                    <div class="form__buttons">
                        <button class="buttons__item" id="btn__previous" type="button">পূর্ববর্তী ধাপ</button>
                        <button class="buttons__item" id="btn__next" type="button">পরবর্তী ধাপ
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <button class="buttons__item" id="btn__download" type="submit" name="download">ডাউনলোড
                            <i class="fa-solid fa-file-arrow-down"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="js/vandor/slick.js"></script>
    <script src="./js/script.js"></script>
    <script>
    $(document).ready(function() {
        $('.your-class').slick({
            autoplay: true,
            arrows: false,
        })
    });
    </script>
</body>

</html>