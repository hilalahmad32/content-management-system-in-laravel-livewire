    <?php

    use App\Http\Livewire\Admin\Category as AdminCategory;
    use App\Http\Livewire\Admin\Dashboard;
    use App\Http\Livewire\Admin\Login;
    use App\Http\Livewire\Author;
    use App\Http\Livewire\Category;
    use App\Http\Livewire\Home;
    use App\Http\Livewire\User\Auth\Login as AuthLogin;
    use App\Http\Livewire\User\Auth\Register;
    use App\Http\Livewire\User\Post;
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

    Route::get('/', Home::class)->name('home');
    Route::get('/category', Category::class)->name('category');
    Route::get('/authors', Author::class)->name('author');
    Route::get('/login', AuthLogin::class)->name('users.login');
    Route::get('/register', Register::class)->name('users.register');

    // user routes
    Route::get('/users/my-posts', Post::class)->name('users.my-posts');

    // admin routes
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/admin', Login::class)->name('admin.login');
    });
    Route::middleware(['auth:admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
            Route::get('/category', AdminCategory::class)->name('admin.category');
            Route::get('/admin', \App\Http\Livewire\Admin\Admin::class)->name('admin.admin');
        });
    });
