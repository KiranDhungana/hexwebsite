<?php

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\competation;
use App\Models\event;
use App\Models\File;
use App\Models\gallary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Mail;
use PhpParser\Node\Expr\AssignOp\Concat;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     *
     */
    public function index()
    {
        $image = gallary::all();
        $data = competation::all();
        $club = club::all();

        return view('welcome')->with(['img' => $image, "data" => $data, 'clubdata' => $club]);


    }
    public function viewclub($id)
    {
        $data = club::find($id);
        // dd($data);


        return view('viewclub')->with('info', $data);


    }
    public function viewc($id)
    {
        $data = competation::find($id);
        // dd($data);


        return view('viewcomp')->with('info', $data);


    }
    public function customRegistration(Request $req)
    {
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $compe = competation::all();

            return view('admin/adminhome')->with('compdata', $compe);
        }
        return response()->json("Email and Password did not match");
    }


    public function addevent()
    {
        return view('admin/addevents');
    }
    public function adminpage()
    {
        $compe = competation::all();
        return view('admin/adminhome')->with('compdata', $compe);
    }
    public function signOut()
    {
        // \Symfony\Component\HttpFoundation\Session\Session::flush();
        Auth::logout();

        return Redirect('/');
    }
    public function addgallary()
    {
        return view('admin/addgallary');
    }
    public function editcompet()
    {
        return view('admin/editeventpage');
    }
    public function addimage(Request $req)
    {
        $gallary = new gallary;
        // dd($req);
        $img = $req->file('image')->getClientOriginalName();
        $imgname = rand(11111, 99999) . $img;
        $req->file('image')->storeAs('public/gallaryimages/', $imgname);
        $gallary->path = $imgname;
        $gallary->save();
        return Redirect::to('/addgallary')->with('imgmsg', 'Image added successfully');


    }

    public function addeventpost(Request $req)
    {
        if ($req['select_opt'] == 'held') {
            $selectoption = 'Already Held';
        } else {
            $selectoption = 'Not Held Yet';

        }

        $competion = new competation;
        $eventtitle = $req['title'];

        $desc = $req['description'];
        $prize = $req['prize'];
        $time = $req['time'];
        $location = $req['venue'];
        $link = $req['link'];
        // dd($req);
        $img = $req->file('image')->getClientOriginalName();
        $imgname = rand(11111, 99999) . $img;
        $req->file('image')->storeAs('public/otherimages/', $imgname);

        $competion->title = $eventtitle;
        $competion->path = $imgname;
        $competion->description = $desc;
        $competion->prize = $prize;
        $competion->time = $time;
        $competion->Venue = $location;
        $competion->status = $selectoption;
        $competion->link = $link;

        $competion->save();
        $compe = competation::all();
        return view('admin/adminhome')->with(['compdata' => $compe, 'eventmsg' => 'Event added successfully']);

    }

    public function sendmail(Request $req)
    {

        $fromemail = $req['email'];
        $fname = $req['fname'];
        $lname = $req['lname'];
        $subj = $req['subject'];
        $message = $req['message'];
        $toname = 'Hex';
        $to_email = 'kirandhungana570@gmail.com';
        // $data = array('name' => "Cloudways (sender_name)", "body" => 'A test mail');
        $data = [
            'fname' => $fname,
            'lname' => $lname,
            'email' => $fromemail,
            'msg' => $message,
            'subj' => $subj,

        ];



        // $user['to'] = 'barefootmartialarts@gmail.com';
        // $user['sub'] = $subj;
        // $user['from'] = $email;
        \Illuminate\Support\Facades\Mail::send('mail', $data, function ($message) use ($to_email, $toname, $fromemail, $fname, $subj) {

            $message->from($fromemail, $fname);
            $message->to($to_email, $toname);
            $message->subject($subj);
        });
        // Mail::send('contactus', $data, function ($mail) use ($user) {
        //     $mail->from($user['from']);
        //     $mail->subject($user['sub']);
        //     $mail->to($user['to']);
        // });
        dd("Sent mail");
        ;
    }

}