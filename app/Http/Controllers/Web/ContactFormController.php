<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Requests\Web\ContactRequest;
use App\Models\Ticket;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    public function submit(ContactRequest $request) {
        
        /* inserting data ticket data to database*/
        Ticket::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => now()
        ]);

        return response()->json(null, 200);
    }

    /**
     * function to send an email to admin user.
     *
     * @return void
     */
    private function sendEmail($request, $bu){
            try {
                Mail::to($request->input('email'))->send(new TicketEmail($bu->company_name) );
            } catch (\Exception $e) {
                /* return exception at dev or local env */
                if ( app()->environment('development') || app()->environment('local') )
                    return $e;
            }
        }
}