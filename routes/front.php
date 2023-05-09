<?php

Route::get('/front', 'FrontController@index')->name('front.home');
Route::get('/about', 'FrontController@about')->name('front.about');
Route::get('/goodbye', 'FrontController@goodbye')->name('front.goodbye');
//Route::get('/terms-of-service', 'FrontController@tos')->name('tos');
Route::get('/privacy-policy', 'FrontController@privacy')->name('front.privacy');
Route::get('/terms-and-conditions', 'FrontController@terms')->name('front.terms');
Route::get('/features', 'FrontController@features')->name('front.features');
Route::get('/gm-features', 'FrontController@gmFeatures')->name('front.gm-features');
Route::get('/worldbuilding-features', 'FrontController@wbFeatures')->name('front.worldbuilder-features');
Route::get('/roadmap', 'FrontController@roadmap')->name('front.roadmap');
Route::get('/public-campaigns', 'FrontController@campaigns')->name('front.public_campaigns');
Route::get('/contact', 'FrontController@contact')->name('front.contact');
Route::get('/pricing', 'FrontController@pricing')->name('front.pricing');
Route::get('/partners', 'FrontController@partners')->name('front.partners');
Route::get('/newsletter', 'Front\NewsletterController@index')->name('front.newsletter');

Route::get('/boosters', [\App\Http\Controllers\FrontController::class, 'boosters'])->name('front.boosters');
Route::get('/press-kit', [\App\Http\Controllers\FrontController::class, 'pressKit'])->name('front.press-kit');
Route::get('/security', [\App\Http\Controllers\FrontController::class, 'security'])->name('front.security');
Route::get('/premium', [\App\Http\Controllers\FrontController::class, 'premium'])->name('front.premium');

Route::get('/kb', 'Front\FaqController@index')->name('front.faqs.index');
Route::get('/kb/{faq}-{slug?}', 'Front\FaqController@show')->name('front.faqs.show');

Route::get('/features/calendars', 'Front\FeatureController@calendars')->name('front.features.calendars');
Route::get('/features/timelines', 'Front\FeatureController@timelines')->name('front.features.timelines');
Route::get('/features/secrets', 'Front\FeatureController@secrets')->name('front.features.secrets');
Route::get('/features/maps', 'Front\FeatureController@maps')->name('front.features.maps');
Route::get('/features/permissions', 'Front\FeatureController@permissions')->name('front.features.permissions');
Route::get('/features/boosters', 'Front\FeatureController@boosters')->name('front.features.boosters');
Route::get('/features/inventories-abilities', 'Front\FeatureController@inventoriesAbilities')->name('front.features.inventories-abilities');
Route::get('/features/dashboards', 'Front\FeatureController@dashboards')->name('front.features.dashboards');
Route::get('/features/relations', 'Front\FeatureController@relations')->name('front.features.relations');
//Route::get('/features/rich-text', 'Front\FeatureController@richText')->name('front.features.rich-text');

Route::get('/hall-of-fame', [\App\Http\Controllers\Front\HallOfFameController::class, 'index'])->name('front.hall-of-fame');

Route::post('/community-votes/{community_vote}/vote', 'CommunityVoteController@vote')->name('community-votes.vote');
Route::resources([
    'community-votes' => 'CommunityVoteController',
    'community-events' => 'Front\CommunityEventController',
    'community-events.community-event-entries' => 'Front\CommunityEventEntryController',
]);

Route::group(['prefix' => 'helper'], function () {
    Route::get('/api-filters', [\App\Http\Controllers\HelperController::class, 'apiFilters'])
        ->name('helpers.api-filters');
});


// Documentation catch all
Route::get('/documentation', 'FrontController@documentation')->name('documentation');
Route::get('/docs', 'FrontController@documentation');
Route::get('/api', 'FrontController@api');
Route::get('/docs/1.0/{sub}', 'FrontController@api');

