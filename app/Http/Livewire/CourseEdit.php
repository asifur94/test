<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CourseEdit extends Component
{
    public $course_id;
    public $name;
    public $image;
    public $description;
    public $price;




    protected $rules = [
        'name' => 'required',
        'image' => 'required',
        'description' => 'required',
        'price' => 'required',
    ];

    public function mount()
    {
        $course = Course::where('id', $this->course_id)->first();

        $this->name = $course->name;
        $this->image = $course->image;
        $this->description = $course->description;
        $this->price = $course->price;

    }

    public function render()
    {
        return view('livewire.course-edit');
    }

    public function courseUpdate()
    {

        $this->validate();

        $course = Course::where('id', $this->course_id)->first();


        if (auth()->user()->user_type === 1 && auth()->user()->user_type === 2){
            $course->update([
                'name' => $this->name,
                'image' => $this->image,
                'description' => $this->description,
                'price' => $this->price,
                'user_id' => auth()->user()->id
            ]);



            flash()->addSuccess('Course updated successfully');

            return redirect()->route('course.index');
        }else{
            flash()->addWarning('You can not access to edit course!');
        }
    }
}
