<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

$menus = collect([
    (object) [
        'url' => '/',
        'name' => 'Home',
        'children' => collect([])
    ],
    (object) [
        'url' => '/our-services',
        'name' => 'Our services',
        'children' => collect([])
    ],
    (object) [
        'url' => '/portfolio',
        'name' => 'Portfolio',
        'children' => collect([])
    ],
    (object) [
        'url' => '/news',
        'name' => 'News',
        'children' => collect([])
    ],
    (object) [
        'url' => '/about-us',
        'name' => 'About us',
        'children' => collect([])
    ],
    (object) [
        'url' => '/contact-us',
        'name' => 'Contact us',
        'children' => collect([])
    ],
]);

$generalSlides = collect([
    (object) [
        'image_src' => '/images/static/temp/slides/slide-2.jpg',
        'description' => 'Slide 02'
    ],
    (object) [
        'image_src' => '/images/static/temp/slides/slide-3.jpg',
        'description' => 'Slide 03'
    ],
]);

Route::get('/', function () use ($menus) {
    $slides = collect([
        (object) [
            'image_src' => '/images/static/temp/slides/slide-3.jpg',
            'description' => 'Slide 01'
        ],
        (object) [
            'image_src' => '/images/static/temp/slides/slide-2.jpg',
            'description' => 'Slide 02'
        ],
    ]);

    $testimonials = collect([
        (object) [
            'avatar' => '/images/static/members/member-01.jpg',
            'first_name' => 'Mr.',
            'last_name' => 'Kevin',
            'company' => 'Facebook Inc',
            'message' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
        ],
        (object) [
            'avatar' => '/images/static/members/member-02.jpg',
            'first_name' => 'Ms.',
            'last_name' => 'Anna',
            'company' => 'Google Solutions',
            'message' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
        ],
        (object) [
            'avatar' => '/images/static/members/member-03.jpg',
            'first_name' => 'Mr.',
            'last_name' => 'Messi',
            'company' => 'KingSports',
            'message' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
        ],
    ]);

    // $products = [
    //     'category' => [
    //         'slug' => 'slug-name'
    //     ],
    //     'image_src' => '',
    //     'image_title' => '',
    //     'name' => 'Product name',
    //     'intro' => 'Product intro',
    //     'price' => 'Product price'
    // ];

    return view('frontend.home.index', [
        '__menus' => $menus->all(),
        'slides' => $slides->all(),
        'testimonials' => $testimonials->all()
    ]);
});

Route::get('/news', function () use ($menus) {
    $posts = collect([
        (object) [
            'image_src' => 'https://via.placeholder.com/600x350',
            'image_title' => 'Post title 01',
            'name' => 'Post title 01',
            'ceo_description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
        ],
        (object) [
            'image_src' => 'https://via.placeholder.com/600x350',
            'image_title' => 'Post title 02',
            'name' => 'Post title 02',
            'ceo_description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
        ],
        (object) [
            'image_src' => 'https://via.placeholder.com/600x350',
            'image_title' => 'Post title 03',
            'name' => 'Post title 03',
            'ceo_description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
        ],
        (object) [
            'image_src' => 'https://via.placeholder.com/600x350',
            'image_title' => 'Post title 04',
            'name' => 'Post title 04',
            'ceo_description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
        ],
        (object) [
            'image_src' => 'https://via.placeholder.com/600x350',
            'image_title' => 'Post title 05',
            'name' => 'Post title 05',
            'ceo_description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
        ],
        (object) [
            'image_src' => 'https://via.placeholder.com/600x350',
            'image_title' => 'Post title 06',
            'name' => 'Post title 06',
            'ceo_description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'
        ],
    ]);

    return view('frontend.blog.index', [
        '__menus' => $menus->all(),
        'posts' => $posts->all()
    ]);
});

Route::get('/news/detail', function () use ($menus) {
    $post = (object) [
        'image_src' => 'https://via.placeholder.com/600x350',
        'image_title' => 'Post title 01',
        'name' => 'Post title 01',
        'description' => '<p>Taking quality photos is a difficult skill and can be even harder when you put real estate into the mix. Often with real estate photography, you have to work with unfavorable conditions and time constraints, which can mean you photos don’t always turn out quite as expected.</p>
        <p>Most professional real estate photographers will provide the home occupants and the agent with a <a href="#">checklist</a> of things they need to do to get the property ready for photography. Often, a listing may not be ready for photos, so you’ll just have to work with it, hope for the best and edit the images later. Most professional photographers edit their photos in the post producing process which is time-consuming and technical, this is where outsourcing the editing process is beneficial for both the photographer and the real estate agent.</p>
        <p><img alt="" src="images/post1.jpg"></p>
        <p>With the advances in photo editing software items within a photo can now be easily and quickly removed, as if it was never there. Using item removal on your listing photos benefits both Real Estate Agents and Property Managers, here are just some of the benefits:</p>
        <p>Taking quality photos is a difficult skill and can be even harder when you put real estate into the mix. Often with real estate photography, you have to work with unfavorable conditions and time constraints, which can mean you photos don’t always turn out quite as expected.</p>
        <p>Most professional real estate photographers will provide the home occupants and the agent with a <a href="#">checklist</a> of things they need to do to get the property ready for photography. Often, a listing may not be ready for photos, so you’ll just have to work with it, hope for the best and edit the images later. Most professional photographers edit their photos in the post producing process which is time-consuming and technical, this is where outsourcing the editing process is beneficial for both the photographer and the real estate agent.</p>
        <p><img alt="" src="images/post1.jpg"></p>
        <p>With the advances in photo editing software items within a photo can now be easily and quickly removed, as if it was never there. Using item removal on your listing photos benefits both Real Estate Agents and Property Managers, here are just some of the benefits:</p>
        <p>Taking quality photos is a difficult skill and can be even harder when you put real estate into the mix. Often with real estate photography, you have to work with unfavorable conditions and time constraints, which can mean you photos don’t always turn out quite as expected.</p>
        <p>Most professional real estate photographers will provide the home occupants and the agent with a <a href="#">checklist</a> of things they need to do to get the property ready for photography. Often, a listing may not be ready for photos, so you’ll just have to work with it, hope for the best and edit the images later. Most professional photographers edit their photos in the post producing process which is time-consuming and technical, this is where outsourcing the editing process is beneficial for both the photographer and the real estate agent.</p>
        <p><img alt="" src="images/post1.jpg"></p>
        <p>With the advances in photo editing software items within a photo can now be easily and quickly removed, as if it was never there. Using item removal on your listing photos benefits both Real Estate Agents and Property Managers, here are just some of the benefits:</p>'
    ];
    return view('frontend.blog.show', [
        '__menus' => $menus->all(),
        'post' => $post
    ]);
});

Route::get('/our-services', function () use ($menus) {
    return view('frontend.page.services', [
        '__menus' => $menus->all(),
    ]);
});

Route::get('/portfolio', function () use ($menus) {
    return view('frontend.page.portfolio', [
        '__menus' => $menus->all(),
    ]);
});

Route::get('/about-us', function () use ($menus, $generalSlides) {
    return view('frontend.page.about', [
        '__menus' => $menus->all(),
        'slides' => $generalSlides->all(),
    ]);
});

Route::get('/contact-us', function () use ($menus) {
    return view('frontend.page.contact', [
        '__menus' => $menus->all(),
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
