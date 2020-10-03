<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:png,jpeg',

        ]);

        $image = $request->file('image')->store('public/slider');

        Slider::create([
            'image' => $image
        ]);

        notify()->success('Image is uploaded successfully!!');
        return redirect()->route('slider.index');
    }
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $filename = $slider->image;
        $slider->delete();
        \Storage::delete($filename);
        notify()->success('image deleted successfully!!');
        return redirect()->route('slider.index');
    }
}
