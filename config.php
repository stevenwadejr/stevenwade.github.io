<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => function ($page) {
                $published = substr($page->getFilename(), 0, 10);
                $slug = str_slug(substr($page->getFilename(), 11));

                return str_replace('-', '/', $published) . '/' . $slug;
            }
            // 'path' => '{date|Y/m/d}/{filename}' 
        ]
    ],

    'gravatar_email' => 'stevenwadejr@gmail.com',

    'social' => [
        [
            'icon' => 'twitter',
            'title' => 'Twitter',
            'link' => 'https://twitter.com/stevenwadejr'
        ],
        [
            'icon' => 'github3',
            'title' => 'GitHub',
            'link' => 'https://github.com/stevenwadejr'
        ],
        [
            'icon' => 'linkedin2',
            'title' => 'LinkedIn',
            'link' => 'https://www.linkedin.com/in/stevenwadejr/'
        ],
        [
            'icon' => 'mic',
            'title' => 'CodeTalk Podcast',
            'link' => 'https://codetalk.simplecast.fm/'
        ]
    ],

    'include_svg' => function(string $icon) {
        global $container;
        $svgPath = $container->get('buildPath')['source'] . '/_partials/svgs/' . $icon . '.svg';
        include $svgPath;
    },

    'excerpt' => function ($page, string $text, string $moreUrl = null, int $limit = 55) {
        $text = strip_tags($text);

        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = rtrim(substr($text, 0, $pos[$limit])) . '...';

            if (!is_null($moreUrl)) {
                $text .= sprintf(
                    ' <a href="%s">more &raquo;</a>',
                    $moreUrl
                );
            }
        }
        
        return '<p>' . $text . '</p>';
    }
];
