
<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\JobOpeningsComponent;
use App\Http\Livewire\TestimonialsComponent;
use App\Http\Livewire\ClientsComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\PrivacyPolicyComponent;
use App\Http\Livewire\JobDetailsComponent;
use App\Http\Livewire\AllPostedJobsComponent;
use App\Http\Livewire\AllApplicantsComponent;
use App\Http\Livewire\EmployerProfileComponent;
use App\Http\Livewire\EmployerSingleMessageComponent;
use App\Http\Livewire\EmployerAllMessagesComponent;
use App\Http\Livewire\EmployerChangePasswordComponent;
use App\Http\Livewire\UserAppliedJobsComponent;
use App\Http\Livewire\UserJobDetailsComponent;
use App\Http\Livewire\UserProfileComponent;
use App\Http\Livewire\UserAllMessagesComponent;
use App\Http\Livewire\UserSingleMessageComponent;
use App\Http\Livewire\UserChangePasswordComponent;
use App\Http\Livewire\UserResumeComponent;
use App\Http\Livewire\AdminAllEmployersComponent;
use App\Http\Livewire\AdminAllApplicantsComponent;
use App\Http\Livewire\AdminAllMessagesComponent;
use App\Http\Livewire\AdminAllServicesComponent;
use App\Http\Livewire\AdminAllSettingsComponent;
use App\Http\Livewire\AdminAllFaqsComponent;
use App\Http\Livewire\AdminAboutSectionComponent;
use App\Http\Livewire\AdminChangePasswordComponent;
use App\Http\Livewire\AdminEmployeDetailsComponent;
use App\Http\Livewire\AdminSingleMessageComponent;
use App\Http\Livewire\AdminApplicantDetailsComponent;
use App\Http\Livewire\EmployerEditProfileComponent;
use App\Http\Livewire\PostedJobsComponent;
use App\Http\Livewire\AdminJobDetailsComponent;
use App\Http\Livewire\AdminJobPostUpdateComponent;
use App\Http\Livewire\EditProfileComponent;
use App\Http\Livewire\AllUsersComponent;
use App\Http\Livewire\AdminSingleUserDetailsComponent;
use App\Http\Livewire\MessageEditorComponent;
use App\Http\Livewire\CreateFaqComponent;
use App\Http\Livewire\UpdateFaqComponent;
use App\Http\Livewire\SettingsComponent;
use App\Http\Livewire\AdminTestimonialComponent;
use App\Http\Livewire\AdminCreateTestimonialComponent;
use App\Http\Livewire\AddServiceComponent;
use App\Http\Livewire\UpdateServiceComponet;
use App\Http\Livewire\UpdateAboutComponent;
use App\Http\Livewire\HomepageBannerComponent;
use App\Http\Livewire\AllClientsComponent;
use App\Http\Livewire\AdminSingleEmployerDetailsComponent;
use App\Http\Livewire\AddClientComponent;
use App\Http\Livewire\SingleApplicantsComponent;
use App\Http\Livewire\EmployerViewApplicantDetailsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Employer\EmployerDashboardComponent;
use App\Http\Livewire\JobPostComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

Route::get('/', HomeComponent::class )->name('home');
Route::get('/about', AboutComponent::class )->name('about');
Route::get('/job-openings', JobOpeningsComponent::class )->name('job-openings');
Route::get('/testimonials', TestimonialsComponent::class )->name('testimonials');
Route::get('/clients', ClientsComponent::class )->name('clients');
Route::get('/contact', ContactComponent::class )->name('contact');
Route::get('/faq', FaqComponent::class )->name('faq');
Route::get('/privacy-policy', PrivacyPolicyComponent::class )->name('privacy-policy');
Route::get('/job-details/{job_id}', JobDetailsComponent::class )->name('job-details');

// For Normal User
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/applied-jobs',UserAppliedJobsComponent::class)->name('user.applied-jobs');
    Route::get('/user/job-details',UserJobDetailsComponent::class)->name('user.job-details');
    Route::get('/user/profile',UserProfileComponent::class)->name('user.profile');
    Route::get('/user/all-messages',UserAllMessagesComponent::class)->name('user.all-messages');
    Route::get('/user/single-message',UserSingleMessageComponent::class)->name('user.single-message');
    Route::get('/user/change-password',UserChangePasswordComponent::class)->name('user.change-password');
    Route::get('/user/resume',UserResumeComponent::class)->name('user.resume');
    Route::get('/user/edit-profile',EditProfileComponent::class)->name('user.edit-profile');
});

// For Employer
Route::middleware(['auth:sanctum', 'verified', 'employer'])->group(function(){
    Route::get('/employer/dashboard',EmployerDashboardComponent::class)->name('employer.dashboard');
    Route::get('/employer/all-applicants',AllApplicantsComponent::class)->name('employer.all-applicants');
    Route::get('/employer/all-messages',EmployerAllMessagesComponent::class)->name('employer.all-messages');
    Route::get('/employer/single-message',EmployerSingleMessageComponent::class)->name('employer.single-message');
    Route::get('/employer/profile',EmployerProfileComponent::class)->name('employer.profile');
    Route::get('/employer/edit-profile',EmployerEditProfileComponent::class)->name('employer.edit-profile');
    Route::get('/employer/change-password',EmployerChangePasswordComponent::class)->name('employer.change-password');
    Route::get('/employer/view_applicant_details/{applicant_id}',EmployerViewApplicantDetailsComponent::class)->name('employer.view-applicant-details');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/all-employers',AdminAllEmployersComponent::class)->name('admin.all-employers');
    Route::get('/admin/all-applicants',AdminAllApplicantsComponent::class)->name('admin.all-applicants');
    Route::get('/admin/all-messages',AdminAllMessagesComponent::class)->name('admin.all-messages');
    Route::get('/admin/all-services',AdminAllServicesComponent::class)->name('admin.all-services');
    Route::get('/admin/all-settings',AdminAllSettingsComponent::class)->name('admin.all-settings');
    Route::get('/admin/all-faqs',AdminAllFaqsComponent::class)->name('admin.all-faqs');
    Route::get('/admin/about-section',AdminAboutSectionComponent::class)->name('admin.about-section');
    Route::get('/admin/change-password',AdminChangePasswordComponent::class)->name('admin.change-password');
    Route::get('/admin/single-message/{user_id}',AdminSingleMessageComponent::class)->name('admin.single-message');
    Route::get('/admin/employe-details',AdminEmployeDetailsComponent::class)->name('admin.employe-details');
    Route::get('/admin/applicant-details',AdminApplicantDetailsComponent::class)->name('admin.applicant-details');
    Route::get('/admin/job-post',JobPostComponent::class)->name('admin.job-post');
    Route::get('/admin/posted-jobs',PostedJobsComponent::class)->name('admin.posted-jobs');
    Route::get('/admin/job-post-update/{post_id}',AdminJobPostUpdateComponent::class)->name('admin.job-post-update');
    Route::get('/admin/admin-job-details/{post_id}',AdminJobDetailsComponent::class)->name('admin.admin-job-details');
    Route::get('/admin/all-users',AllUsersComponent::class)->name('admin.all-users');
    Route::get('/admin/single-user-details/{user_id}',AdminSingleUserDetailsComponent::class)->name('admin.single-user-details');
    Route::get('/admin/message-editor/{user_id}',MessageEditorComponent::class)->name('admin.message-editor');
    Route::get('/admin/create-faq',CreateFaqComponent::class)->name('admin.create-faq');
    Route::get('/admin/update-faq/{faq_id}',UpdateFaqComponent::class)->name('admin.update-faq');
    Route::get('/admin/settings',SettingsComponent::class)->name('admin.settings');
    Route::get('/admin/testimonials',AdminTestimonialComponent::class)->name('admin.all-testimonials');
    Route::get('/admin/create-testimonial',AdminCreateTestimonialComponent::class)->name('admin.create-testimonial');
    Route::get('/admin/add-service',AddServiceComponent::class)->name('admin.add-service');
    Route::get('/admin/update-service/{service_id}',UpdateServiceComponet::class)->name('admin.update-service');
    Route::get('/admin/update-about',UpdateAboutComponent::class)->name('admin.update-about');
    Route::get('/admin/homepage-banner',HomepageBannerComponent::class)->name('admin.homepage-banner');
    Route::get('/admin/single-employer-details/{user_id}',AdminSingleEmployerDetailsComponent::class)->name('admin.single-employer-details');
    Route::get('/admin/all-clients',AllClientsComponent::class)->name('admin.all-clients');
    Route::get('/admin/add-client',AddClientComponent::class)->name('admin.add-client');
    Route::get('/admin/single-applicant/{applicant_id}',SingleApplicantsComponent::class)->name('admin.single-applicants');

});
