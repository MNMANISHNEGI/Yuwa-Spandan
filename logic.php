<?php
// logic.php

function determine_severity($score, $category) {
    if ($category == 'depression') {
        if ($score <= 9) {
            return 'Normal';
        } elseif ($score <= 13) {
            return 'Mild';
        } elseif ($score <= 20) {
            return 'Moderate';
        } elseif ($score <= 27) {
            return 'Severe';
        } else {
            return 'Extremely Severe';
        }
    } elseif ($category == 'anxiety') {
        if ($score <= 7) {
            return 'Normal';
        } elseif ($score <= 9) {
            return 'Mild';
        } elseif ($score <= 14) {
            return 'Moderate';
        } elseif ($score <= 19) {
            return 'Severe';
        } else {
            return 'Extremely Severe';
        }
    } elseif ($category == 'stress') {
        if ($score <= 14) {
            return 'Normal';
        } elseif ($score <= 18) {
            return 'Mild';
        } elseif ($score <= 25) {
            return 'Moderate';
        } elseif ($score <= 33) {
            return 'Severe';
        } else {
            return 'Extremely Severe';
        }
    }

    // Default return value in case of an unexpected category
    return 'Unknown';
}

// Recommendations array (example content, replace with actual recommendations)
$recommendations = [
    'depression' => [
        'Normal' => ['https://www.youtube.com/embed/8R2FfRl6V8U?si=zN5ll2JVd44tFR7h', 'https://psychcentral.com/depression/how-to-beat-depression#rewarding-goals'],
        'Mild' => ['https://www.youtube.com/embed/7DoQMnmo0v8?si=EV05J_rxLyGUpeEx', 'https://psychcentral.com/depression/daily-routine-for-depression'],
        'Moderate' => ['https://www.youtube.com/embed/Sxddnugwu-8?si=Uigr7pwPLos8QPcm', 'https://www.healthline.com/health/depression/how-to-fight-depression'],
        'Severe' => ['https://www.youtube.com/embed/sFtP0HWvu0k?si=--AB05vw_MD23sC9', 'https://mantracare.org/therapy/depression/overcoming-depression'],
        'Extremely Severe' => ['https://www.youtube.com/embed/iKRVHQHyvwc?si=FAYhlumbNnB8N-8K', 'https://www.healthline.com/health/depression/how-to-fight-depression'],
    ],
    'anxiety' => [
        'Normal' => ['https://www.youtube.com/embed/bJJWArRfKa0?si=u43ApsRn2GMhJ0vv', 'https://www.healthline.com/health/mental-health/how-to-cope-with-anxiety#8-long-term-strategies'],
        'Mild' => ['https://www.youtube.com/embed/7cqzSNgNo1M?si=M93QsMEVTyzGqHgW', 'https://www.healthline.com/health/how-to-calm-anxiety#write-it-out'],
        'Moderate' => ['https://www.youtube.com/embed/rRxqYGj0_60?si=2vhDdXLZozuYKjYL', 'https://www.verywellmind.com/breaking-the-anxiety-cycle-1392987'],
        'Severe' => ['https://www.youtube.com/embed/3AIYBmjKjac?si=fRFeRwRmK6uqMkdj', 'https://www.healthline.com/health/how-to-calm-anxiety#write-it-out'],
        'Extremely Severe' => ['https://www.youtube.com/embed/kKXWMA0v010?si=72Lx7J8Cv4hvxHAt', 'https://www.verywellhealth.com/how-to-deal-with-anxiety-8384822'],
    ],
    'stress' => [
        'Normal' => ['https://www.youtube.com/embed/8TuRYV71Rgo?si=ZdipP__GHHGqrgxQ', 'https://www.healthline.com/nutrition/16-ways-relieve-stress-anxiety'],
        'Mild' => ['https://www.youtube.com/embed/RaPp5jr--xo?si=rfBkJcg24k-Ba3TF', 'https://mantracare.org/therapy/stress/how-to-overcome-stress/'],
        'Moderate' => ['https://www.youtube.com/embed/9MazN_6wdqI?si=tGjsfyxYJPbq6_qf', 'https://www.who.int/news-room/questions-and-answers/item/stress'],
        'Severe' => ['https://www.youtube.com/embed/mHfwwFRiiBI?si=V-LomdZo4jjGsdM_', 'https://health.clevelandclinic.org/how-to-relieve-stress'],
        'Extremely Severe' => ['https://www.youtube.com/embed/TGdNZTl86Qs?si=h6v-MU-etLhXERnf', 'https://www.healthline.com/health/mental-health/stress-coping-eliminate#TOC_TITLE_HDR_1'],
    ],
];

?>
