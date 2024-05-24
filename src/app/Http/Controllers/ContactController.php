<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;       

class ContactController extends Controller
{
    // お問い合わせ画面
   public function index()
   {
     return view('index');
   }

    //確認画面
   public function confirm(ContactRequest $request)
    {
    $contact = $request->only(['firstname','lastname','gender', 'email', 'tel','address','building-name', 'select','content']);
    return view('confirm', ['contact' => $contact]);
    }
    
    //完了画面
    public function store(ContactRequest $request)
    {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
    return view('thanks');
    }

 
    }

