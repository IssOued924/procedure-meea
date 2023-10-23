<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $file;

    public function render()
    {
        return view('livewire.file-upload');
    }

    public function save(){
        $this->validate([
            'file' => 'mimes:pdf,docx,jpeg,png,jpg|max:1024',
        ]);
        
        //$fileName =rand(0, 100000000) + $this->file->getClientOriginalName();
        $this->file->storeAs("files", $this->file, 'public');
        return $fileName;
    }
}
