<?php

namespace App\Http\Livewire;
use App\Models\Chat;
use Livewire\Component;
use App\Models\User;
class Chats extends Component
{
	public $message;
	public $allmessages;
	public $sender;
    public function render()
    {
    	$users=User::all();
    	$sender=$this->sender;
    	$this->allmessages;
        
        return view('livewire.chats',compact('users','sender'));
    }
    public function mountdata()
    {
        if(isset($this->sender->id))
        {
              $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$this->sender->id)->orWhere('user_id',$this->sender->id)->where('reciever_id',auth()->id())->orderBy('id','desc')->get();

               $not_seen= Chat::where('user_id',$this->sender->id)->where('reciever_id',auth()->id());
               $not_seen->update(['is_seen'=> true]);
        }

    }
    public function resetForm()
    {
    	$this->message='';
    }

    public function SendMessage()
    {
    	$data=new Chat;
    	$msg = 'link=&msg='.$this->message;
        $data->message=$msg;

    	$data->user_id=auth()->id();
    	$data->reciever_id=$this->sender->id;
    	$data->save();

    	$this->resetForm();


    }
    public function getUser($userId)
    {
       $user=User::find($userId);
       $this->sender=$user;
       $this->allmessages=Chat::where('user_id',auth()->id())->where('reciever_id',$userId)->orWhere('user_id',$userId)->where('reciever_id',auth()->id())->orderBy('id','desc')->get();
    }

}
