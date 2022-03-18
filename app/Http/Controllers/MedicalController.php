<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medical;
use Illuminate\Http\Request;
use App\Models\PublicService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Notifications\MedicalNotification;
use Symfony\Component\Console\Question\Question;

class MedicalController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('myfile')) {
            $myfile  = Storage::disk('public')->put('upload/', $request->myfile);
        } else {
            $myfile  = null;
        }
        $med = Medical::create([
            'user_id' => Auth::id(),
            'myfile' => $myfile,
            'procedure' => $request->procedure,
            'parts' => $request->parts,
            'discription' => $request->discription,
            'pa_age' => $request->pa_age,
            'pa_id' => $request->pa_id,
            'pa_name' => $request->pa_name,
            'hospital' => $request->hospital,
            'dr_phone' => $request->dr_phone,
            'dr_email' => $request->dr_email,
            'dr_spec' => $request->dr_spec,
            'dr_name' => $request->dr_name,
            'status' => 1,
        ]);
        $users = User::find(Auth::id());
        $users->update([
            'order_id' => $med->id,
        ]);
        $users->notify(new MedicalNotification($users));
        return redirect()->route('home')->with('error_code', 5);
    }

    public function payment()
    {
        return redirect()->route('home')->with('error_code', 4);
    }
    public function index()
    {
        $medical = Medical::all();
        return view('pages.admin.dashboard.Medical.index', compact('medical'));
    }
    public function show($id)
    {
        $order = Medical::find($id);
        $user = User::find($order->user_id);
        return view('pages.admin.dashboard.Medical.show', compact('order','user'));
    }

    public function updated(Request $request)
    {
        $order = Medical::find($request->id);
        $user = User::find($order->user_id);
        if ($request->has('checkbox1')) {
            $order->status = 2;
            $order->save();
        }
        if ($request->has('checkbox2')) {
            $order->status = 3;
            $order->save();
        }
        if ($request->has('checkbox3')) {
            $order->status = 4;
            $order->save();
        }
        if ($request->has('checkbox4')) {
            $order->status = 5;
            $order->save();
        }
        if ($request->has('checkbox5')) {
            $order->status = 6;
            $order->save();
        }
        if ($request->has('checkbox6')) {
            $order->status = 7;
            $order->save();
        }
        if ($request->has('checkbox7')) {
            $order->status = 8;
            $order->save();
        }

        $details = [
            'title' =>  $user->name,
            'body' => $order->status,
        ];

        \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        return redirect()->route('home');
    }
    public function updatedpublic(Request $request)
    {
        $order = PublicService::find($request->id);
        $user = User::find($order->user_id);
        if ($request->has('checkbox2')) {
            $order->status = 4;
            $order->save();
        }
        $details = [
            'title' =>  $user->name,
            'body' => $order->status,
        ];

        \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        return redirect()->route('home');
    }
    public function askQuestion(Request $request)
    {
        $details = [
            'title' => 'FeedBack',
            'body' => $request->question
        ];

        \Mail::to('arsalanamir.aa@gmail.com')->send(new \App\Mail\Question($details));
    }

    public function feedback(Request $request)
    {
        return view('pages.admin.dashboard.Medical.feedback');
    }

    public function feedbackStore(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $feedbacks = Feedback::create([
            'user_id' => $user->id,
            'message' => $request->question
        ]);
        if ($feedbacks) {
            return redirect()->route('home');
        } else {
            return back();
        }
    }
}
