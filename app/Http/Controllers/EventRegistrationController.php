<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventRegistration;
use App\Mail\SendMail;
use Mail;
use Illuminate\Support\Facades\Validator;

class EventRegistrationController extends Controller
{

	public function eventRegistration()
    {
        return view('register');
    }

    public function saveEventRegistration(Request $request)
    {
    	try {
    	$validator = Validator::make($request->all(), [
	        'name' => 'required|string|max:255',
	        'designation' => 'required|string|max:255',
	        'personal_email' => 'required|email|max:255|unique:event_registrations,personal_email',
	        'office_email' => 'required|email|max:255|unique:event_registrations,office_email',
	        'mobile_number' => 'required|digits_between:10,15',
	        'gender' => 'required|in:male,female',
	        'food_choice' => 'required|in:vegetarian,non-vegetarian',
	        'beverages_choice' => 'required|in:alcoholic,non-alcoholic',
	        'apparel_size' => 'required|in:M,L,XL',
	        'organisation_name' => 'required|string|max:255',
	        'organisation_type' => 'required|in:Central Government,State Government,PSU/Corporation',
	        'home_address' => 'nullable|string|max:255',
	        'office_address' => 'nullable|string|max:255',
	    ]);

	    // Check if validation fails
	    if ($validator->fails()) {
	        return back()->withErrors($validator)->withInput();
	    }

	        $secure_id = bin2hex(random_bytes(16));

	    	$events = EventRegistration::create([
	    		'secure_id' => $secure_id,
	    		'name' => $request->name,
	    		'designation' => $request->designation,
	    		'personal_email' => $request->personal_email,
	    		'office_email' => $request->office_email,
	    		'mobile_number' => $request->mobile_number,
	    		'gender' => $request->gender,
	    		'food_choice' => $request->food_choice,
	    		'beverages_choice' => $request->beverages_choice,
	    		'apparel_size' => $request->apparel_size,
	    		'organisation_name' => $request->organisation_name,
	    		'organisation_type' => $request->organisation_type,
	    		'created_at' => now()
	    	]);

	    	if($events){
    	// dd($events);
	    		 $mailData = [
			            'title' => 'This is Test Mail'
			            // 'files' => [
			            //     public_path('attachments/test_image.jpeg'),
			            //     public_path('attachments/test_pdf.pdf'),
			            // ];
			        ];
           
		        // Mail::to('kaushalvaishali1994@gmail.com')->send(new SendMail($mailData));
			        // dd("here");
	    		return back()->with('success', 'Event registered successfully!');
	    	}
    		
    	} catch (Exception $e) {
    		dd($e);
    		return back()->with('error', 'An error occurred while registering the event.');

    	}
    }
}
