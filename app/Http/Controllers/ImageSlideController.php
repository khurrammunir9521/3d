<?php

namespace App\Http\Controllers;

use App\Models\ImageSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagess = ImageSlider::all();
        return view('pages.admin.dashboard.ImageSlide.index', compact('imagess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.ImageSlide.create');
        return view('pages.admin.dashboard.ImageSlide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'speed' => 'required',
            'number' => 'required',
            'heading' => 'required',
            'heading2' => 'required',
            'heading3' => 'required',
            'heading4' => 'required',
            'sub_heading' => 'required',
            'sub_heading2' => 'required',

            'sub_heading3' => 'required',

            'sub_heading4' => 'required',

            'body_text' => 'required',
            'body_text2' => 'required',

            'body_text3' => 'required',

            'body_text4' => 'required',

            'images' => 'required',

            'images2' => 'required',
            'images3' => 'required',
            'images4' => 'required',
        ]);

        if (isset($request->images) && !empty($request->images)) {
            $image = Storage::disk('public')->put('upload/', $request->images);
        } else {
            $image = null;
        }
        if (isset($request->images2) && !empty($request->images2)) {
            $image1 = Storage::disk('public')->put('upload/', $request->images2);
        } else {
            $image1 = null;
        }
        if (isset($request->images3) && !empty($request->images3)) {
            $image2 = Storage::disk('public')->put('upload/', $request->images3);
        } else {
            $image2 = null;
        }
        if (isset($request->images4) && !empty($request->images4)) {
            $image3 = Storage::disk('public')->put('upload/', $request->images4);
        } else {
            $image3 = null;
        }
        ImageSlider::create([
            'speed' => $request->speed,
            'number' => $request->number,
            'heading' => $request->heading,
            'heading2' => $request->heading2,
            'heading3' => $request->heading3,
            'heading4' => $request->heading4,
            'sub_heading' => $request->sub_heading,
            'sub_heading2' => $request->sub_heading2,
            'sub_heading3' => $request->sub_heading3,
            'sub_heading4' => $request->sub_heading4,
            'body_text' => $request->body_text,
            'body_text2' => $request->body_text2,
            'body_text3' => $request->body_text3,
            'body_text4' => $request->body_text4,
            'images' => $image,
            'images2' => $image1,
            'images3' => $image2,
            'images4' => $image3,

        ]);
        return redirect()->route('image.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = ImageSlider::find($id);
        return view('pages.admin.dashboard.ImageSlide.edit', compact('images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $request->validate([
            'speed' => 'required',
            'number' => 'required',
            'heading' => 'required',
            'sub_heading' => 'required',
            'body_text' => 'required',
            // 'images' => 'required',
            // 'images2' => 'required',
            // 'images3' => 'required',
            // 'images4' => 'required',
        ]);
        // if (isset($request->images) && !empty($request->images)) {
        //     $image = Storage::disk('public')->put('upload/', $request->images);
        // } else {
        //     $images = null;
        // }
        // if (isset($request->images2) && !empty($request->images2)) {
        //     $image1 = Storage::disk('public')->put('upload/', $request->images2);
        // } else {
        //     $images2 = null;
        // }
        // if (isset($request->images3) && !empty($request->images3)) {
        //     $image2 = Storage::disk('public')->put('upload/', $request->images3);
        // } else {
        //     $images3 = null;
        // }
        // if (isset($request->images4) && !empty($request->images4)) {
        //     $image3 = Storage::disk('public')->put('upload/', $request->images4);
        // } else {
        //     $images4 = null;
        // }
        ImageSlider::find($id)->update([
            'speed' => $request->speed,
            'number' => $request->number,
            'heading' => $request->heading,
            'sub_heading' => $request->sub_heading,
            'body_text' => $request->body_text,
            // 'images'=>$image,
            // 'images2'=>$image1,
            // 'images3'=>$image2,
            // 'images4'=>$image3,
        ]);
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageSlider::find($id)->delete();
        return redirect()->route('image.index');
    }
    public function view($id)
    {
        $image= ImageSlider::find($id);
        return view('pages.admin.dashboard.ImageSlide.view',compact('image'));
    }
}
