<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [
        'headings' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Gravida dictum fusce ut placerat orci nulla pellentesque. Pretium nibh ipsum consequat nisl vel. Ultrices dui sapien eget mi proin sed libero enim sed. Et malesuada fames ac turpis egestas integer. Senectus et netus et malesuada fames ac turpis. Sit amet purus gravida quis. Lectus mauris ultrices eros in cursus. Urna id volutpat lacus laoreet non curabitur gravida arcu ac. Massa sed elementum tempus egestas sed. Risus in hendrerit gravida rutrum quisque non tellus orci. At tempor commodo ullamcorper a lacus vestibulum sed. Convallis aenean et tortor at risus viverra adipiscing at. Dictumst quisque sagittis purus sit amet volutpat consequat mauris. Feugiat scelerisque varius morbi enim nunc faucibus. Id diam maecenas ultricies mi eget mauris pharetra. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Sagittis id consectetur purus ut faucibus. Id aliquet lectus proin nibh nisl.',
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Pellentesque id nibh tortor id aliquet lectus proin nibh. Malesuada fames ac turpis egestas maecenas pharetra. Vel orci porta non pulvinar. Venenatis cras sed felis eget. Aliquam eleifend mi in nulla posuere. Sit amet purus gravida quis blandit. Nisi est sit amet facilisis magna etiam tempor orci eu. Iaculis urna id volutpat lacus laoreet non. Eget velit aliquet sagittis id consectetur purus ut faucibus. Tellus id interdum velit laoreet. Ipsum dolor sit amet consectetur adipiscing elit. At volutpat diam ut venenatis tellus in metus vulputate. Nibh tortor id aliquet lectus proin. Faucibus interdum posuere lorem ipsum dolor sit amet consectetur. Imperdiet proin fermentum leo vel orci. Dictumst vestibulum rhoncus est pellentesque elit. Mauris pharetra et ultrices neque ornare aenean. Orci phasellus egestas tellus rutrum. Dui faucibus in ornare quam viverra orci sagittis eu volutpat. Aliquet sagittis id consectetur purus ut faucibus pulvinar.',
            ],
        ],
    ]);
});
