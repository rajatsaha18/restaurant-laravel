<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralContact;
use App\Models\GeneralWebsite;
use Illuminate\Http\Request;
use Session;

class GeneralSettingsController extends Controller
{
    private $contact;
    private $website;
    private $imageName;
    private $directory;
    private $imageUrl;
    public function index()
    {
        $this->contact = GeneralContact::first();
        $this->website = GeneralWebsite::first();
        return view('admin.generalSettings.index',[
            'contact' => $this->contact,
            'website' => $this->website,
        ]);
    }
    public function generalContact(Request $request)
    {
        $this->contact = GeneralContact::first();
        if($this->contact){
            $this->contact->email       = $request->email;
            $this->contact->address     = $request->address;
            $this->contact->mobile      = $request->mobile;
            $this->contact->facebook    = $request->facebook;
            $this->contact->linkedin    = $request->linkedin;
            $this->contact->youtube     = $request->youtube;
            $this->contact->google_map  = $request->google_map;
            if($this->contact->update()){

                return redirect()->back()->with('message', 'Contact Update Successfully');
            }
            else{

                return redirect()->back()->with('message', 'Something wrong');
            }
        }
        else{
            $this->contact = new GeneralContact();
            $this->contact->email       = $request->email;
            $this->contact->address     = $request->address;
            $this->contact->mobile      = $request->mobile;
            $this->contact->facebook    = $request->facebook;
            $this->contact->linkedin    = $request->linkedin;
            $this->contact->youtube     = $request->youtube;
            $this->contact->google_map  = $request->google_map;

            if($this->contact->save()){

                return redirect()->back()->with('message', 'Contact Update Successfully');
            }
            else{

                return redirect()->back()->with('message', 'Something wrong');
            }
        }


    }
    public function generalWebsite(Request $request)
    {
        $this->website = GeneralWebsite::first();
        if($this->website){
            $this->website->title       = $request->title;

            $logo_image                 = $request->file('logo');
            if($logo_image)
            {
                $this->imageName    = $logo_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $logo_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->logo = $this->imageUrl;
                }

            }
            $favicon_image              = $request->file('favicon');
            if($favicon_image)
            {
                $this->imageName    = $favicon_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $favicon_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->favicon = $this->imageUrl;
                }

            }
            $footer_logo_image          = $request->file('footer_logo');
            if($footer_logo_image)
            {
                $this->imageName    = $footer_logo_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $footer_logo_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->footer_logo = $this->imageUrl;
                }

            }
            $footer_back_img_image = $request->file('footer_back_img');
            if($footer_back_img_image)
            {
                $this->imageName    = $footer_back_img_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $footer_back_img_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->footer_back_img = $this->imageUrl;
                }

            }
            $this->website->copyright = $request->copyright;
            if($this->website->update()){

                return redirect()->back()->with('message', 'Website Update Successfully');
            }
            else{

                return redirect()->back()->with('message', 'Something wrong');
            }
        }
        else{
            $this->website = new GeneralWebsite();
            $this->website->title       = $request->title;
            $this->website->copyright   = $request->copyright;
            $logo_image                 = $request->file('logo');
            if($logo_image)
            {
                $this->imageName    = $logo_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $logo_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->logo = $this->imageUrl;
                }

            }
            $favicon_image              = $request->file('favicon');
            if($favicon_image)
            {
                $this->imageName    = $favicon_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $favicon_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->favicon = $this->imageUrl;
                }

            }
            $footer_logo_image          = $request->file('footer_logo');
            if($footer_logo_image)
            {
                $this->imageName    = $footer_logo_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $footer_logo_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->footer_logo = $this->imageUrl;
                }

            }
            $footer_back_img_image = $request->file('footer_back_img');
            if($footer_back_img_image)
            {
                $this->imageName    = $footer_back_img_image->getClientOriginalName();
                $this->directory    = 'general-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $footer_back_img_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->website->footer_back_img = $this->imageUrl;
                }

            }

            if($this->website->save()){

                return redirect()->back()->with('message', 'website Update Successfully');
            }
            else{

                return redirect()->back()->with('message', 'Something wrong');
            }
        }


    }
}
