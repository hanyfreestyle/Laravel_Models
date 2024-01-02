
Route::get('/Banner/Config',[BannerCategoryController::class,'config'])->name('Banners.Config');
Route::get('/Banner/Category',[BannerCategoryController::class,'index'])->name('Banners.BannerCat.index');
Route::get('/Banner/Category/create',[BannerCategoryController::class,'create'])->name('Banners.BannerCat.create');
Route::get('/Banner/Category/edit/{id}',[BannerCategoryController::class,'edit'])->name('Banners.BannerCat.edit');
Route::get('/Banner/Category/destroy/{id}',[BannerCategoryController::class,'destroy'])->name('Banners.BannerCat.destroy');
Route::post('/Banner/Category/update/{id}',[BannerCategoryController::class,'storeUpdate'])->name('Banners.BannerCat.update');
Route::get('/Banner/Category/SoftDelete/',[BannerCategoryController::class,'SoftDeletes'])->name('Banners.BannerCat.SoftDelete');
Route::get('/Banner/Category/restore/{id}',[BannerCategoryController::class,'restored'])->name('Banners.BannerCat.restore');
Route::get('/Banner/Category/force/{id}',[BannerCategoryController::class,'ForceDeletes'])->name('Banners.BannerCat.force');

Route::get('/Banner',[BannerController::class,'index'])->name('Banners.Banner.index');
Route::get('/Banner/ListCategory/{Categoryid}',[BannerController::class,'ListCategory'])->name('Banners.Banner.ListCategory');
Route::get('/Banner/create',[BannerController::class,'create'])->name('Banners.Banner.create');
Route::get('/Banner/edit/{id}',[BannerController::class,'edit'])->name('Banners.Banner.edit');
Route::get('/Banner/destroy/{id}',[BannerController::class,'destroy'])->name('Banners.Banner.destroy');
Route::post('/Banner/update/{id}',[BannerController::class,'storeUpdate'])->name('Banners.Banner.update');
Route::get('/Banner/Sort/{Categoryid}',[BannerController::class,'Sort'])->name('Banners.Banner.Sort');
Route::post('/Banner/SaveSort', [BannerController::class,'SaveSort'])->name('Banners.Banner.SaveSort');
