Route::get('/Blog',[BlogPostController::class,'index'])->name('BlogPost.index');
Route::get('/Blog/create',[BlogPostController::class,'create'])->name('BlogPost.create');
Route::get('/Blog/edit/{id}',[BlogPostController::class,'edit'])->name('BlogPost.edit');
Route::get('/Blog/destroy/{id}',[BlogPostController::class,'destroy'])->name('BlogPost.destroy');
Route::post('/Blog/update/{id}',[BlogPostController::class,'storeUpdate'])->name('BlogPost.update');
Route::get('/Blog/emptyPhoto/{id}', [BlogPostController::class,'emptyPhoto'])->name('BlogPost.emptyPhoto');
Route::get('/Blog/Config',[BlogPostController::class,'config'])->name('BlogPost.Config');

Route::get('/Blog/SoftDelete/',[BlogPostController::class,'SoftDeletes'])->name('BlogPost.SoftDelete');
Route::get('/Blog/restore/{id}',[BlogPostController::class,'restored'])->name('BlogPost.restore');
Route::get('/Blog/force/{id}',[BlogPostController::class,'ForceDeletes'])->name('BlogPost.force');

Route::get('/Blog/photos/{id}',[BlogPostController::class,'ListMorePhoto'])->name('BlogPost.More_Photos');
Route::post('/Blog/saveSort', [BlogPostController::class,'sortPhotoSave'])->name('BlogPost.sortPhotoSave');
Route::post('/Blog/AddMore',[BlogPostController::class,'AddMorePhotos'])->name('BlogPost.More_PhotosAdd');
Route::get('/Blog/PhotoDel/{id}',[BlogPostController::class,'More_PhotosDestroy'])->name('BlogPost.More_PhotosDestroy');