<?php

use function Livewire\Volt\{state};

state([
    'events' => collect([
        [
            'date' => 'April 1, 2016',
            'title' => 'After 4 years together, Christy and I get married!',
        ],
        [
            'date' => 'April 28, 2016',
            'title' => 'Child #1 on the way!',
        ],
        [
            'date' => 'May 14, 2016',
            'title' => '
                Left Apple
                - Started Freelancing as a Web Designer / Graphic Designer / Video Editor
            ',
        ],
        [
            'date' => 'January 14, 2017',
            'title' => 'Ian is born! We spend 3 Days in the NICU...',
        ],
        [
            'date' => 'September 2017',
            'title' => '
                My wife and I decide to drop all services except for Web Design / Development.
                Starts learning PHP.
            ',
        ],
        [
            'date' => 'December 2017',
            'title' => 'Thomas (my mentor) tells me to learn to code. Starts larning PHP.',
        ],
        [
            'date' => 'Febuary 2018',
            'title' => 'Laravel 5.6 is released. I start learning Laravel!',
        ],
        [
            'date' => 'May 2018',
            'title' => 'Child #2 on the way! I start learning Vue.js!',
        ],
        [
            'date' => 'January 17, 2019',
            'title' => '
                Raine is born! Ian is now 2 years old.
                I am still freelancing and learning everything I can.
            ',
        ],
        [
            'date' => 'December 2019',
            'title' => '
                We start suspecting Ian has Autism.
                We start the process of getting him diagnosed.
            ',
        ],
        [
            'date' => 'Febuary 2020',
            'title' => '
                Christy and I decide to close the buisness.
                I start at Tomotechi.
            ',
        ],
        [
            'date' => 'July 2020',
            'title' => '
                Ian gets diagnosed with Autism.
                I leave Tomotechi and start at a new job @ Pearson Education.
            ',
        ],
        [
            'date' => 'August 2020',
            'title' => 'Ian starts thearpy. We start looking for a new home.',
        ],
        [
            'date' => 'November 2020',
            'title' => 'Leaves Pearson Education...',
        ],
        [
            'date' => 'Febuary 2021',
            'title' => 'Accepts new role at Fox World Travel.',
        ],
        [
            'date' => 'March 29, 2021',
            'title' => 'My first day at Fox World Travel!',
        ],
        [
            'date' => 'May 7, 2021',
            'title' => 'We close on our new home!',
        ],
        [
            'date' => 'August 2021',
            'title' => '
                Ian starts school!
                3 Weeks later he is transferred to a new school, due to his Autism.
            ',
        ],
        [
            'date' => 'December 2021',
            'title' => "
                Raine is diagnosed with Autism, but can't start school until she is 3.
            ",
        ],
        [
            'date' => 'January 2022',
            'title' => "
                Raine turns 3, Ian turns 5! Raine starts school!
            ",
        ],
        [
            'date' => 'November 2022',
            'title' => "
                Fox World Travel sends me to Longhorn PHP in Austin, TX!
            ",
        ],
        [
            'date' => 'August 2024',
            'title' => "
                Fox World Travel sends me to my first Laracon, in Dallas, TX!
            ",
        ],
        [
            'date' => 'September 2024',
            'title' => "
                Ryan, Trevor, Nick, and I start 'Houston Laravel Meetup'!
            ",
        ],
        [
            'date' => 'October 2024',
            'title' => "
                Started 'Voices of the Code' podcast with Steven Fox!
            ",
        ],
        [
            'date' => 'October 16, 2024',
            'title' => "Left Fox World Travel",
        ],
        [
            'date' => 'October 21, 2024',
            'title' => "Started at LuminFire",
        ],
    ]),
]);
?>

<div class="flex flex-col gap-6 px-2">
    <flux:heading size="xl">
        Timeline
    </flux:heading>

    <ul class="px-4 space-y-2 list-disc list-inside">
        @foreach ($events as $event)
            <li>
                {{ $event['date'] }} - {{ $event['title'] }}
            </li>
        @endforeach
    </ul>
</div>
