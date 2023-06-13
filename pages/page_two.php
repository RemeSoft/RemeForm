<?php
$html = 
'
<html>
<head>
    <style>

        .sign,
        .sign__text{
            border: 0;
        }
        
        .sign{
            margin: 80px 10px;
        }
                    
        .sign__text{
            padding-left: 0px;
        }
        
        .sign__first{
            width: 180px;
            text-align: left;
        }
        .instruction__title{
            text-decoration: underline;
        }
        .column__three{
            width: 200px;
        }
        .column__four{
            width: 150px;
        }
        .instruction{
            margin: 0 10px;
            margin-right: 50px;
        }
        p,b{
            font-family: nikosh;
            font-size: 15px;
        }
        footer{
            margin-top: 260px;
        }
    </style>
</head>

<body>
    <main>
        <table>

            <!-- TABLE HEADING START  -->
            <tr>
                <th class="heading__top" colspan="4">পেমেন্ট বিবরণ</th>
            </tr>
            <tr>
                <td colspan="2" class="first__column">পেমেন্ট মোড নির্বাচন করুন:</td>
                <td colspan="2" class="second__column">'.$payment__options.'</td>
            </tr>

            <!-- TBALE HEADING START  -->
            <tr>
                <th colspan="2">ব্যাংকিং</th>
                <th colspan="2">মোবাইল ব্যাংকিং</th>
            </tr>
            <tr>
                <td class="first__column">ব্যাংক নির্বাচন করুন</td>
                <td></td>
                <td class="column__three">মোবাইল ব্যাংকিং সেবাদানকারী প্রতিষ্ঠান</td>
                <td class="bangla__field column__four"> '.$mobile_company.'</td>
            </tr>
            <tr>
                <td>শাখা নির্বাচন করুন</td>
                <td></td>
                <td>অ্যাকাউন্টধারীর এনআইডি নম্বর</td>
                <td class="number__field"> '.$mobile_nid.'</td>
            </tr>
            <tr>
                <td>রাউটিং নম্বর</td>
                <td></td>
                <td>অ্যাকাউন্ট নম্বর</td>
                <td class="number__field"> '.$mobile_number.'</td>
            </tr>
            <tr>
                <td>অ্যাকাউন্টের ধরন</td>
                <td>সঞ্চয়ী হিসাব / চলতি হিসাব</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>অ্যাকাউন্টধারীর নাম</td>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td>অ্যাকাউন্টধারীর এনআইডি নম্বর</td>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td>অ্যাকাউন্ট নম্বর</td>
                <td colspan="2"></td>
                <td></td>
            </tr>
        </table>
      
        <table class="sign">
            <tr>
                <th class="sign__text sign__first">আবেদনকারীর স্বাক্ষর</th>
                <th class="sign__text sign__second">গ্রহণকারীর স্বাক্ষর</th>
                <th class="sign__text sign__third">প্রতিষ্ঠান প্রধানের স্বাক্ষর ও সীল</th>
            </tr>
        </table>

        <div class="instruction">
            <b class="instruction__title">আবেদন ফর্ম পূরণের নির্দেশাবলীঃ</b>
            <p>১। এ আবেদন ফর্ম ‘কারিগরি ও মাদ্রাসা শিক্ষা বিভাগের অধীন কারিগরি শিক্ষা প্রতিষ্ঠানের শিক্ষার্থীদের উপবৃত্তি বিতরণ ও শিক্ষা উপকরণ ক্রয় সহায়তা নীতিমালা -২০২০\' এবং ‘উপবৃত্তি কার্যক্রম ম্যানুয়েল\' অনুসরণে নির্মিত MIS সফটওয়ারে প্রয়োজনীয় তথ্য এন্ট্রি প্রদানের জন্য তৈরি করা হয়েছে।</p>
            <p>২। আবেদনকারী শিক্ষার্থী অত্যন্ত সতর্কতার সাথে তথ্যের সঠিকতা নিশ্চিত হয়ে ফর্ম পূরণ করবেন;</p>
            <p>৩। প্রতিষ্ঠান প্রধান তাঁর পূরণীয় অংশ পুরণ এবং সকল তথ্যের যাচাই করবেন;</p>
            <p>৪। নীতিমালা অনুযায়ী প্রতিষ্ঠান প্রধান উপবৃত্তির জন্য শিক্ষার্থী নির্বাচনের ব্যবস্থা করবেন;</p>
            <p>৫। উপবৃত্তি কার্যক্রম ম্যানুয়েল এবং MIS সফটওয়ারের ইউজার ম্যানুয়াল অনুযায়ী প্রতিষ্ঠান প্রধান তথ্য এন্ট্রি প্রদানের ব্যবস্থা করবেন;</p>
            <p>৬। MIS সফটওয়ারের মাধ্যমে পেমেন্ট সম্পন্ন হবে বিধায় সকল ক্ষেত্রে তথ্য এন্ট্রি নির্ভুল হওয়া বাঞ্চনীয়।</p>
        </div>
    </main>
    <footer class="done">২</footer>
</body>

</html>
';
?>