<?php

use App\Http\Livewire\CheckoutPage;
use App\Http\Livewire\CheckoutSuccessPage;
use App\Http\Livewire\CollectionPage;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductPage;
use App\Http\Livewire\SearchPage;
use App\Http\Livewire\ContactPage;
use App\Http\Livewire\InfoPage;
use App\Http\Livewire\InstalacionVallaPage;
use App\Http\Livewire\PedirVallaPage;
use App\Http\Livewire\VallasPage;
use App\Http\Livewire\AllModelsPage;
use App\Http\Livewire\ComponentGardPage;
use App\Http\Livewire\PilaresPage;
use App\Http\Livewire\GaleriePage;
use App\Http\Livewire\PuertasPage;
use App\Http\Livewire\PromoPage;
use App\Http\Livewire\CalculadoraVallados;
use App\Http\Livewire\AvisoLegalPage;
use App\Http\Livewire\PoliticaEnvioPage;
use App\Http\Livewire\CondicionesGeneralPage;
use App\Http\Livewire\TerminosCondicionPage;
use App\Http\Livewire\PoliticaCookiesPage;
use App\Http\Livewire\PoliticaPrivacidadPage;
use App\Http\Livewire\DecorationJardinPage;
use App\Http\Livewire\TransportePage;
use App\Http\Livewire\LoginPage;
use App\Http\Livewire\RegisterPage;
use App\Http\Livewire\LogoutPage;
use App\Http\Livewire\AboutUsPage;
use App\Http\Livewire\MisFavoritosPage;
use App\Http\Livewire\Admin\GalerieAdminPage;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;


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


Route::group(['middleware'=>'guest'], function(){
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class)->name('register');
});

Route::group(['middleware'=>'auth'], function(){
    // Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('mis-favoritos', MisFavoritosPage::class)->name('mis_favoritos.view');

});

Route::get('/', Home::class);




Route::get('/calculadora-vallados', CalculadoraVallados::class)->name('collection.calculadora');

Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');

Route::get('/products/{slug}', ProductPage::class)->name('product.view');

Route::get('search', SearchPage::class)->name('search.view');

Route::get('checkout', CheckoutPage::class)->name('checkout.view');

Route::get('contact', ContactPage::class)->name('contact.view');

Route::get('info', InfoPage::class)->name('info.view');

Route::get('instalacion-de-valla', InstalacionVallaPage::class)->name('instalacion.view');

Route::get('pedir-valla', PedirVallaPage::class)->name('pedir.view');

Route::get('vallas/{slug}', VallasPage::class)->name('vallas.view');

Route::get('all-models', AllModelsPage::class)->name('all_models.view');


Route::get('promo', PromoPage::class)->name('promo.view');

Route::get('aviso-legal', AvisoLegalPage::class)->name('aviso_legal.view');

Route::get('politica-de-envio-y-devoluciones', PoliticaEnvioPage::class)->name('politica_envio.view');

Route::get('terminos-condiciones', TerminosCondicionPage::class)->name('terminos_condicion.view');

Route::get('politica-de-cookies', PoliticaCookiesPage::class)->name('politica_de_cookies.view');

Route::get('politica-de-privacidad', PoliticaPrivacidadPage::class)->name('politica_de_cookies.view');

Route::get('condiciones-contrato', CondicionesGeneralPage::class)->name('condiciones_general.view');

Route::get('decoration-jardin', DecorationJardinPage::class)->name('decoration_jardin.view');

Route::get('component-gard', ComponentGardPage::class)->name('component_gard.view');

Route::get('pilares', PilaresPage::class)->name('pilares.view');

Route::get('puertas', PuertasPage::class)->name('puertas.view');

Route::get('transporte', TransportePage::class)->name('transporte.view');



Route::get('about-us', AboutUsPage::class)->name('aboutus.view');

Route::get('galerie', GaleriePage::class)->name('galerie.view');

Route::get('checkout/success', CheckoutSuccessPage::class)->name('checkout-success.view');

