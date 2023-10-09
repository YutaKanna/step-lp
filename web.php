Route::get('/step/{step}', function ($step) {
    return view('step', ['step' => $step]);
})->where('step', '[1-5]');
