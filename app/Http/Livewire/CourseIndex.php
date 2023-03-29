<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CourseIndex extends Component
{
    public function render()
    {
        $course = Course::paginate(10);

        return view('livewire.course-index', [
            'courses' => $course,
        ]);
    }

    public function courseDelete($id)
    {
        if (auth()->user()->user_type === 1){
            $course = Course::findOrFail($id);
            $course->delete();

            flash()->addSuccess('Course deleted successfully!');
        }else{
            flash()->addWarning('You can not access this Courses!');
        }
    }
}
