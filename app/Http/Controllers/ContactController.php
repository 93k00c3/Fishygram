<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactController extends Controller
{
    public function createForm(){
        return view('contact');
    }
    public function ContactUsForm(Request $request){
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|digits:10|numeric',
        'subject' => 'required',
        'msg' => 'required',
        ]);
        $input = $request->all();
        Contact::create($input);
        Mail::send('mail', array(
        'name' => $input['name'],
        'email' => $input['email'],
        'phone' => $input['phone'],
        'subject' => $input['subject'],
        'msg' => $input['msg'],
        ), function($msg) use ($request){
        $msg->from($request->email);
        $msg->to('admin@admin.com', 'Admin')->subject($request->get('subject'));
        });
        return redirect()->back()->with(['success' => 'Dziękujemy za kontakt.']);
        }
}
