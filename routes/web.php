<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ReceptionistController;

use App\Http\Controllers\ElpController;

use App\Http\Controllers\DoctorController;

use App\Http\Controllers\LabtechController;

use App\Http\Controllers\PharmacistController;

use App\Http\Controllers\CashierController;

use App\Http\Controllers\MessagesController;

use App\Http\Controllers\DarajaController;

use App\Http\Livewire\Chat\CreateChat;

use App\Http\Livewire\Chat\Main;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//livewire routes

Route::get('/messages', CreateChat::class)->name('messages');

Route::get('/chat{id?}', Main::class)->name('chat');

Route::get('/messagesindex',[MessagesController::class,'messagesindex']);

Route::get('/show',[MessagesController::class,'show']);


Route::get('/daraja',[DarajaController::class, 'DarajaController@index']);
Route::post('/daraja/callback',[DarajaController::class, 'DarajaController@callback']);



Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myhistory',[HomeController::class,'myhistory']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/medicalhistory/{id}',[HomeController::class,'medicalhistory']);

Route::get('/patientbill/{id}',[HomeController::class,'patientbill']);

Route::post('/contactus',[HomeController::class,'contactus']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/initiatepayment',[HomeController::class,'initiatepayment']);

Route::get('/insurance',[HomeController::class,'insurance']);

Route::get('/diagnose',[HomeController::class,'diagnose']);



Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/admindashboard',[AdminController::class,'admindashboard']);

Route::get('/hospitals',[AdminController::class,'hospitals']);

Route::get('/services',[AdminController::class,'services']);

Route::get('/posts_news_and_articles',[AdminController::class,'posts_news_and_articles']);

Route::get('/admindoctors',[AdminController::class,'admindoctors']);

Route::get('/patients',[AdminController::class,'patients']);

// Route::get('/users',[AdminController::class,'users']);

Route::get('/invoices',[AdminController::class,'invoices']);

Route::get('/individualpost/{id}',[AdminController::class,'individualpost']);

Route::post('/upload_post',[AdminController::class,'uploadpost']);

Route::get('/add_post',[AdminController::class,'addpost']);

Route::get('/publish/{id}',[AdminController::class,'publish']);

Route::get('/decline/{id}',[AdminController::class,'decline']);

Route::get('/deletepost/{id}',[AdminController::class,'deletepost']);

Route::get('/latest',[HomeController::class,'latest']);

Route::get('/hospitals',[AdminController::class,'hospitals']);

Route::get('/add_hospital',[AdminController::class,'addhospital']);

Route::post('/uploadhospital',[AdminController::class,'uploadhospital']);

Route::get('/deletehospital/{id}',[AdminController::class,'deletehospital']);

Route::get('/careers',[AdminController::class,'careers']);

Route::post('/upload_career',[AdminController::class,'uploadcareer']);

Route::get('/add_career',[AdminController::class,'addcareer']);

Route::get('/closecareer/{id}',[AdminController::class,'closecareer']);

Route::get('/opencareer/{id}',[AdminController::class,'opencareer']);

Route::get('/deletecareer/{id}',[AdminController::class,'deletecareer']);

Route::get('/update_career/{id}',[AdminController::class,'updatecareer']);

Route::post('/editcareer/{id}',[AdminController::class,'editcareer']);

Route::get('/receptionistdashboard',[ReceptionistController::class,'receptionistdashboard']);

Route::get('/addpatient',[ReceptionistController::class,'addpatient']);

Route::post('/upload_patient',[ReceptionistController::class,'upload_patient']);

Route::get('/bookappointment',[ReceptionistController::class,'bookappointment']);

Route::get('/addvisit',[ReceptionistController::class,'addvisit']);

Route::post('/uploadvisit',[ReceptionistController::class,'uploadvisit']);


Route::get('/posts',[HomeController::class,'posts']);

Route::get('/postdetails/{id}',[HomeController::class,'postdetails']);

Route::get('/homepage',[HomeController::class,'homepage']);

Route::get('/doctors',[HomeController::class,'doctors']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/contact',[HomeController::class,'contact']);


Route::get('/addpost',[ElpController::class,'addpost']);

Route::get('/elpdashboard',[ElpController::class,'elpdashboard']);

Route::get('/viewcareer',[ElpController::class,'viewcareer']);

Route::get('/viewposts',[ElpController::class,'viewposts']);


Route::get('/doctorhome',[DoctorController::class,'doctorhome']);

Route::get('/mypatients',[DoctorController::class,'mypatients']);

Route::get('/individualpatient/{id}',[DoctorController::class,'individualpatient']);

Route::get('/tests/{id}',[DoctorController::class,'tests']);

Route::get('/results',[DoctorController::class,'results']);

Route::get('/referrals',[DoctorController::class,'referrals']);

Route::get('/visits/{id}',[DoctorController::class,'visits']);

Route::get('/patienthistory/{id}',[DoctorController::class,'patienthistory']);

Route::get('/alltests',[DoctorController::class,'alltests']);

Route::get('/patienttests/{id}',[DoctorController::class,'patienttests']);

Route::get('/patientrecords/{id}',[DoctorController::class,'patientrecords']);

Route::get('/individualresults/{id}',[DoctorController::class,'individualresults']);

Route::get('/doctorappointments',[DoctorController::class,'doctorappointments']);

Route::get('/addtest',[DoctorController::class,'addtest']);

Route::get('/addsymptoms',[DoctorController::class,'addsymptoms']);

Route::post('/uploadtest',[DoctorController::class,'uploadtest']);

Route::post('/uploadsymptom',[DoctorController::class,'uploadsymptom']);




Route::get('/labtechhome',[LabtechController::class,'labtechhome']);

Route::get('/labtechpatients',[LabtechController::class,'labtechpatients']);

Route::get('/labtechtests',[LabtechController::class,'labtechtests']);

Route::get('/labtechresults',[LabtechController::class,'labtechresults']);


Route::get('/pharmacisthome',[PharmacistController::class,'pharmacisthome']);

Route::get('/pharmacistpatients',[PharmacistController::class,'pharmacistpatients']);

Route::get('/pharmacistmedicine',[PharmacistController::class,'pharmacistmedicine']);

Route::get('/givemedicine/{id}',[PharmacistController::class,'givemedicine']);


Route::get('/superadminhome',[PharmacistController::class,'superadminhome']);


Route::get('/cashierhome',[CashierController::class,'cashierhome']);

Route::get('/cashierpatients',[CashierController::class,'cashierpatients']);

Route::get('/cashierpayments',[CashierController::class,'cashierpayments']);

Route::get('/cashierreceipts',[CashierController::class,'cashierreceipts']);

Route::get('/cashpatientbill/{id}',[CashierController::class,'cashpatientbill']);


