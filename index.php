<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 800px;
            margin: 100px auto;
            border: 2px solid #ddd;
            border-radius:5px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
    $quotes = [
        [
            'quote_details' => 'যত্তক্ষণ চিরকাল না প্রেমে বন্ধুত্ব আছে, তত্তক্ষণ জীবন আছে।',
            'writer' => 'রবীন্দ্রনাথ ঠাকুর'
        ],
        [
            'quote_details' => 'আমার মায়ের মতো কেউ নেই, কারণ মা তো একটি অদ্ভুত প্রাণী।',
            'writer' => 'Humayun Ahmed'
        ],
        [
            'quote_details' => 'বপ্ন দেখা হলে তার পেছনে পৌঁছাতে হয়, সফলতা হলে তার পেছনে চলতে হয়।',
            'writer' => 'রবীন্দ্রনাথ ঠাকুর'
        ],
        [
            'quote_details' => 'আমাদের অজানা ভুলগুলি বড় হতে দেওয়ার জন্য আমাদের অজানা দৃষ্টান্তগুলি ছাড়া প্রয়োজন।',
            'writer' => 'সত্যজিৎ রয়'
        ],
        [
            'quote_details' => 'যদি আপনি ভুল হয়ে থাকেন তবে আপনি একটি পুনঃপ্রয়াস নেওয়ার প্রতি একটি সুযোগ পান।',
            'writer' => 'আব্দুল কালাম'
        ],
        [
            'quote_details' => 'জীবন একটি রহস্য, আপনি তার সমাধান করতে থাকতে পারেন, কিন্তু এটি একটি রহস্য থাকতে থাকতে হয়।',
            'writer' => 'রবীন্দ্রনাথ ঠাকুর'
        ],
        [
            'quote_details' => 'আপনি যদি একটি চোখ বন্ধ করে রাখতে চান তবে একটি পুরো জীবন যেন একটি প্রয়াসের মত।',
            'writer' => 'সত্যজিৎ রয়'
        ],
        [
            'quote_details' => 'আপনি যদি কখনো ভুল হোন, তাদের কাছে আপনার ছোট হওয়া ভুলের মাধ্যমে একটি বড় শিখ প্রাপ্ত হয়।',
            'writer' => 'রবীন্দ্রনাথ ঠাকুর'
        ],
        [
            'quote_details' => 'মানুষের মধ্যে অজানা জগতের জন্য একটি আগ্রহ অবশ্যই থাকতে হবে।',
            'writer' => 'রবীন্দ্রনাথ ঠাকুর'
        ],
        [
            'quote_details' => 'বড় হওয়ার জন্য মনে রাখুন, স্বপ্ন দেখতে হয় বড়া হওয়ার আগে।',
            'writer' => 'আব্দুল কালাম'
        ],
        [
            'quote_details' => 'প্রতিটি সময়ে আপনি নতুন একটি শুরু করতে পারেন।',
            'writer' => 'বুদ্ধদেব বসু'
        ],
        [
            'quote_details' => 'সফলতা প্রাপ্ত করতে হলে মনে রাখতে হবে, প্রতিটি প্রয়াস একটি শিক্ষা।',
            'writer' => 'সত্যজিৎ রয়'
        ],
        [
            'quote_details' => 'ভালোবাসা হলো জীবনের সবচেয়ে সুন্দর রহস্য।',
            'writer' => 'সুকুমার রায়'
        ]
    ];

    function getRandomQuote($quotes){
       $len = count($quotes)-1;
       $random = rand(0,$len);
       echo '<h2>“'.$quotes[$random]["quote_details"].'”</h2>';
       echo '<h5>-'.$quotes[$random]["writer"].'</h5>';
    }
    ?>
    <div class="container">
        <?php
            getRandomQuote($quotes);
        ?>
    </div>
</body>
</html>