<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CourseCreate extends Component
{
    public $name;
    public $image;
    public $description;
    public $price;


    protected $rules = [
        'name' => 'required|unique:courses,name',
        'image' => 'required',
        'description' => 'required',
        'price' => 'required',

    ];

    public function render()
    {
        return view('livewire.course-create');
    }

    public function formSubmit()
    {
        if (auth()->user()->user_type === 1){
            $this->validate();
            $course = Course::create([
                'name' => $this->name,
                'image' => $this->image,
                'description' => $this->description,
                'price' => $this->price,

            ]);


            flash()->addSuccess('Course created successfully');

            return redirect()->route('course.index');
        }else{
            flash()->addWarning('You can not access to create Course!');
        }
    }
}
