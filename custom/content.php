<?php
// Brand
$GLOBALS['brand'] = [
    'icon' => [
        'url' => $GLOBALS['icons_path'] . 'logo-plantar.svg',
        'alt' => 'Logo Plantar'
    ]
];


// CTA Button
$GLOBALS['cta_button'] = [
    'link' => [
        'url' => 'https://wa.me/5599999999999',
        'title' => 'Whatsapp',
    ],
    'text' => 'Comece Agora',
    'icon' => [
        'url' => $GLOBALS['icons_path'] . 'icon-arrow-right-white.svg',
        'alt' => 'Icone Seta Direita'
    ],
];


// Home Button
$GLOBALS['home_button'] = [
    'link' => [
        'url' => '/',
        'title' => 'Homepage'
    ],
];


// Nav Menu
$GLOBALS['nav_menu'] = [
    [
        'link' => [
            'url' => '#como-funciona',
            'title' => 'Como Funciona',
        ],
        'text' => 'Como Funciona'
    ],
    [
        'link' => [
            'url' => '#beneficios',
            'title' => 'Benefícios',
        ],
        'text' => 'Benefícios'
    ],
    [
        'link' => [
            'url' => '#depoimentos',
            'title' => 'Depoimentos',
        ],
        'text' => 'Depoimentos'
    ],
];


// Social Medias
$GLOBALS['social_medias'] = [
    [
        'link' => [
            'url' => 'https://wa.me/5599999999999',
            'title' => 'Whatsapp',
        ],
        'icon' => [
            'url' => $GLOBALS['icons_path'] . 'icon-whatsapp.svg',
            'alt' => 'Icone Seta Direita'
        ],
    ],
    [
        'link' => [
            'url' => 'https://www.youtube.com/@Plantar-z2i/videos',
            'title' => 'Youtube',
        ],
        'icon' => [
            'url' => $GLOBALS['icons_path'] . 'icon-youtube.svg',
            'alt' => 'Icone Seta Direita'
        ],
    ]
];



// Hero
$GLOBALS['hero'] = [
    'style' => [
        'background_image' => $GLOBALS['images_path'] . 'hero-bg.webp'
    ],
    'title' => [
        'heading' => 'h1',
        'title' => 'Transforme Seu Cultivo com Ciência e Tecnologia! 🌱'
    ],
    'subtitle' => [
        'heading' => 'span',
        'title' => 'Cultive com Inteligência e Eficiência'
    ],
];


// About
$GLOBALS['about'] = [
    'active' => true,
    'video' => [
        'url' => 'https://www.youtube.com/embed/EAwjcwU0H6I?si=jR4P98NkTDXuyCNv',
    ],
];


// How it Works
$GLOBALS['how_it_works'] = [
    'active' => true,
    'title' => [
        'heading' => 'h2',
        'title' => 'Como Funciona?'
    ],
    'subtitle' => [
        'heading' => 'span',
        'title' => 'Tudo o que você precisa para cultivar com confiança.'
    ],
    'cards' => [
        [
            [
                'title' => 'Dicas Personalizadas',
                'content' => 'Converse com o ChatGPT e receba dicas de cultivo personalizadas.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
            [
                'title' => 'Artigos Científicos',
                'content' => 'Acesse artigos científicos atualizados sobre agricultura.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
            [
                'title' => 'Tutoriais Práticos',
                'content' => 'Aprenda com tutoriais práticos e visuais que guiam você passo a passo.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
        ],
        [
            [
                'title' => 'Comunidade Ativa',
                'content' => 'Participe de uma comunidade ativa de entusiastas do cultivo.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
            [
                'title' => 'Cursos Exclusivos',
                'content' => 'Tenha acesso a cursos exclusivos com conteúdos baseados em ciência..',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
        ]
    ]
];


// Benefits
$GLOBALS['benefits'] = [
    'active' => true,
    'title' => [
        'heading' => 'h2',
        'title' => 'Por que escolher nosso método?'
    ],
    'subtitle' => [
        'heading' => 'span',
        'title' => 'Veja os benefícios de nosso método.'
    ],
    'image' => [
        'url' => $GLOBALS['images_path'] . 'benefits.webp',
        'alt' => 'Imagem Planta Dinheiro'
    ],
    'cards' => [
        'left' => [
            [
                'title' => 'Inovação',
                'content' => 'Combine IA com ciência para aprender de forma personalizada.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
            [
                'title' => 'Acesso ao conhecimento',
                'content' => 'Informações confiáveis para garantir seu sucesso no cultivo.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
        ],
        'right' => [
            [
                'title' => 'Experiência completa',
                'content' => 'Suporte da teoria à prática para transformar seu espaço.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
            [
                'title' => 'Resultados Rápidos',
                'content' => 'Métodos testados que garantem eficiência no cultivo.',
                'icon' => [
                    'url' => $GLOBALS['icons_path'] . 'icon-plant.svg',
                    'alt' => 'Icone Planta'
                ]
            ],
        ]
    ]
];


// Testimonials
$GLOBALS['testimonials'] = [
    'active' => true,
    'title' => [
        'heading' => 'h2',
        'title' => 'Depoimentos'
    ],
    'subtitle' => [
        'heading' => 'span',
        'title' => 'Depoimentos de quem já usou nosso método.'
    ],
    'quotes' => [
        'url' => $GLOBALS['icons_path'] . 'icon-quote.svg',
        'alt' => 'Icone Aspas'
    ],
    'reviews' => [
        [
            'author' => '— Lucas R.',
            'content' => 'Participe de uma comunidade ativa de entusiastas do cultivo.',
            'profile' => [
                'url' => $GLOBALS['images_path'] . 'profile-01.png',
            ]
        ],
        [
            'author' => '— Lucas R.',
            'content' => 'Os tutoriais são claros e muito úteis. Estou aprendendo muito!',
            'profile' => [
                'url' => $GLOBALS['images_path'] . 'profile-01.png',
            ]
        ],
        [
            'author' => '— Lucas R.',
            'content' => 'O acesso a artigos científicos faz toda a diferença.',
            'profile' => [
                'url' => $GLOBALS['images_path'] . 'profile-01.png',
            ]
        ],
    ]
];


// CTA
$GLOBALS['cta'] = [
    'active' => true,
    'title' => [
        'heading' => 'h2',
        'title' => 'Pronto para Começar?'
    ],
    'subtitle' => [
        'heading' => 'span',
        'title' => 'Transforme seu espaço em um jardim produtivo!'
    ],
];



// Footer
$GLOBALS['footer'] = [
    'copyright' => '© 2024 Plantar. Todos os direitos reservados.',
    'powered_by' => [
        'prefix' => 'Desenvolvido por:',
        'title' => 'fernandaorms',
        'link' => [
            'url' => 'https://github.com/fernandaorms',
            'title' => 'Github fernandaorms'
        ]
    ]
];