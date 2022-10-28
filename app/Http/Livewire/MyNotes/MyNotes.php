<?php

namespace App\Http\Livewire\MyNote;

use App\Models\MyNote;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class MyNote extends Component
{
    public $myNotes;
    public $publicNotes;
    public $isOpen = 0;

    /**
     *
     */
    public function __construct(private MyNote $myNotes)
    {
    }
    /**
     * @return View
     */
    public function render(): View
    {
        $publicNotes = MyNote::where('is_public_note', 1)->get();
        return view('livewire.my-notes.public-notes', ['publicNotes' => $publicNotes]);
    }

    /**
     *
     */
    public function store()
    {
        MyNote::updateOrCreate(['id' => $this->myNotes])

        session()->flash('message', $this->myNotes->id ? 'Note updated successfully : Note created successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     *
     */
    public function delete($id)
    {
        MyNote::find($id)->delete();
        session()->flash('message', 'Note deleted successfully');
    }

    /**
     *
     */
    public function edit($id)
    {
        $this->myNotes->id = $id;
        $this->openModal();
    }

    /**
     *
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     *
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     *
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     *
     */
    public function resetInputFields()
    {
        $this->title = '';
        $this->content = '';
    }
}
