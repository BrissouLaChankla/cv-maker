<?php

namespace App\Http\Livewire;
use App\Models\Job;

use Livewire\Component;

class AboutAdmin extends Component
{

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
    
    public function render()
    {
        $lastJob = Job::orderBy('start_date', 'DESC')->first();

        return view('livewire.about-admin', [
            'lastJob' => $lastJob,
        ]);
    }
}
