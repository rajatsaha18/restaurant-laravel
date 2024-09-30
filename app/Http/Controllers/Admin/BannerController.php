<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliciousBanner;
use App\Models\DiscountBanner;
use App\Models\FoodDeliveryBanner;
use App\Models\FoodsMenuBanner;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Session;

class BannerController extends Controller
{
    private $banner;
    private $imageName;
    private $directory;
    private $imageUrl;
    public function homeBanner()
    {
        $bannerImage        = HomeBanner::first();
        $deliciousBanner    = DeliciousBanner::first();
        $discountBanner     = DiscountBanner::first();
        $foodDelivery       = FoodDeliveryBanner::first();
        $foodMenu           = FoodsMenuBanner::first();
        return view('admin.banner.home-banner',compact('bannerImage','foodMenu','foodDelivery','deliciousBanner','discountBanner'));
    }

    public function createHomeBanner(Request $request)
    {
        $this->banner = HomeBanner::first();
        if($this->banner)
        {
            $about_image            = $request->file('about');
            if($about_image)
            {
                $this->imageName    = $about_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $about_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->about = $this->imageUrl;
                }

            }
            $gallery_image          = $request->file('gallery');
            if($gallery_image)
            {
                $this->imageName    = $gallery_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $gallery_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->gallery = $this->imageUrl;
                }

            }
            $blog_image             = $request->file('blog');
            if($blog_image)
            {
                $this->imageName    = $blog_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $blog_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->blog = $this->imageUrl;
                }

            }
            $team_image              = $request->file('team');
            if($team_image)
            {
                $this->imageName    = $team_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $team_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->team = $this->imageUrl;
                }

            }
            $contact_image           = $request->file('contact');
            if($contact_image)
            {
                $this->imageName    = $contact_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $contact_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->contact = $this->imageUrl;
                }

            }
            $product_image           = $request->file('product');
            if($product_image)
            {
                $this->imageName    = $product_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $product_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->product = $this->imageUrl;
                }

            }
            $product_detail_image    = $request->file('product_detail');
            if($product_detail_image)
            {
                $this->imageName    = $product_detail_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $product_detail_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->product_detail = $this->imageUrl;
                }

            }
            if($this->banner->update())
            {
                return redirect()->back()->with('message', 'Data Update Successfully');
            }
            else
            {
                return redirect()->back()->with('message', 'something error');
            }

        }
        else
        {
            $this->banner = new HomeBanner();
            if($this->banner)

            $about_image            = $request->file('about');
            if($about_image)
            {
                $this->imageName    = $about_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $about_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->about = $this->imageUrl;
                }

            }
            $gallery_image          = $request->file('gallery');
            if($gallery_image)
            {
                $this->imageName    = $gallery_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $gallery_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->gallery = $this->imageUrl;
                }

            }
            $blog_image             = $request->file('blog');
            if($blog_image)
            {
                $this->imageName    = $blog_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $blog_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->blog = $this->imageUrl;
                }

            }
            $team_image             = $request->file('team');
            if($team_image)
            {
                $this->imageName    = $team_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $team_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->team = $this->imageUrl;
                }

            }
            $contact_image          = $request->file('contact');
            if($contact_image)
            {
                $this->imageName    = $contact_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $contact_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->contact = $this->imageUrl;
                }

            }
            $product_image          = $request->file('product');
            if($product_image)
            {
                $this->imageName    = $product_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $product_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->product = $this->imageUrl;
                }

            }
            $product_detail_image   = $request->file('product_detail');
            if($product_detail_image)
            {
                $this->imageName    = $product_detail_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $product_detail_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->banner->product_detail = $this->imageUrl;
                }

            }


            if($this->banner->save())
            {
                dd($this->banner->save());
                return redirect()->back()->with('message', 'Data save Successfully');
            }
            else
            {
                return redirect()->back()->with('message', 'something error');
            }
        }

    }

    public function createDeliousBanner(Request $request)
    {
        $delicious = DeliciousBanner::first();
        if($delicious)
        {
            $delicious->name = $request->name;
            $image_one_image            = $request->file('image_one');
            if($image_one_image)
            {
                $this->imageName    = $image_one_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_one_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $delicious->image_one = $this->imageUrl;
                }

            }
            $image_two_image            = $request->file('image_two');
            if($image_two_image)
            {
                $this->imageName    = $image_two_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_two_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $delicious->image_two = $this->imageUrl;
                }

            }
            if($delicious->update())
            {
                return redirect()->back()->with('message','Data Update Successfully');
            }

        }
        else
        {
            $delicious = new DeliciousBanner();
            $delicious->name = $request->name;
            $image_one_image            = $request->file('image_one');
            if($image_one_image)
            {
                $this->imageName    = $image_one_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_one_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $delicious->image_one = $this->imageUrl;
                }

            }
            $image_two_image            = $request->file('image_two');
            if($image_two_image)
            {
                $this->imageName    = $image_two_image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_two_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $delicious->image_two = $this->imageUrl;
                }

            }
            if($delicious->save())
            {
                return redirect()->back()->with('message','Data Save Successfully');
            }
        }
    }
    public function createDiscountBanner(Request $request)
    {
        $discount = DiscountBanner::first();
        if($discount)
        {
            $discount->name     = $request->name;
            $data               = $request->file('image');
            if($data)
            {
                $this->imageName    = $data->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $data->move($this->directory,$this->imageName);
                if($success)
                {
                    $discount->image = $this->imageUrl;
                }

            }

            if($discount->update())
            {
                return redirect()->back()->with('message','Data Update Successfully');
            }

        }
        else
        {
            $discount = new DiscountBanner();
            $discount->name     = $request->name;
            $data               = $request->file('image');
            if($data)
            {
                $this->imageName    = $data->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $data->move($this->directory,$this->imageName);
                if($success)
                {
                    $discount->image = $this->imageUrl;
                }

            }
            if($discount->save())
            {
                return redirect()->back()->with('message','Data Save Successfully');
            }
        }
    }

    public function createFoodDeliveryBanner(Request $request)
    {
        $foodDelivery = FoodDeliveryBanner::first();
        if($foodDelivery)
        {
            $foodDelivery->name             = $request->name;
            $foodDelivery->description      = $request->description;
            $image                          = $request->file('image');
            if($image)
            {
                $this->imageName    = $image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodDelivery->image = $this->imageUrl;
                }

            }
            if($foodDelivery->update())
            {
                return redirect()->back()->with('message','Data Update Successfully');
            }
        }
        else
        {
            $foodDelivery = new FoodDeliveryBanner();
            $foodDelivery->name             = $request->name;
            $foodDelivery->description      = $request->description;
            $image                          = $request->file('image');
            if($image)
            {
                $this->imageName    = $image->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodDelivery->image = $this->imageUrl;
                }

            }
            if($foodDelivery->save())
            {
                return redirect()->back()->with('message','Data Save Successfully');
            }
        }

    }
    public function createFoodMenu(Request $request)
    {
        $foodMenu = FoodsMenuBanner::first();
        if($foodMenu)
        {
            $foodMenu->item_one_name                = $request->item_one_name;
            $foodMenu->item_two_name                = $request->item_two_name;
            $foodMenu->item_three_name              = $request->item_three_name;
            $foodMenu->item_one_description         = $request->item_one_description;
            $foodMenu->item_two_description         = $request->item_two_description;
            $foodMenu->item_three_description       = $request->item_three_description;

            $image_one              = $request->file('item_one_image');
            if($image_one)
            {
                $this->imageName    = $image_one->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_one->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodMenu->item_one_image = $this->imageUrl;
                }

            }
            $image_two              = $request->file('item_two_image');
            if($image_two)
            {
                $this->imageName    = $image_two->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_two->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodMenu->item_two_image = $this->imageUrl;
                }

            }
            $image_three            = $request->file('item_three_image');
            if($image_three)
            {
                $this->imageName    = $image_three->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_three->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodMenu->item_three_image = $this->imageUrl;
                }

            }


            if($foodMenu->update())
            {
                return redirect()->back()->with('message','Data Update Successfully');
            }
        }
        else
        {
            $foodMenu = new FoodsMenuBanner();
            $foodMenu->item_one_name                = $request->item_one_name;
            $foodMenu->item_two_name                = $request->item_two_name;
            $foodMenu->item_three_name              = $request->item_three_name;
            $foodMenu->item_one_description         = $request->item_one_description;
            $foodMenu->item_two_description         = $request->item_two_description;
            $foodMenu->item_three_description       = $request->item_three_description;

            $image_one              = $request->file('item_one_image');
            if($image_one)
            {
                $this->imageName    = $image_one->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_one->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodMenu->item_one_image = $this->imageUrl;
                }

            }
            $image_two              = $request->file('item_two_image');
            if($image_two)
            {
                $this->imageName    = $image_two->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_two->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodMenu->item_two_image = $this->imageUrl;
                }

            }
            $image_three            = $request->file('item_three_image');
            if($image_three)
            {
                $this->imageName    = $image_three->getClientOriginalName();
                $this->directory    = 'banner-images/';
                $this->imageUrl     = $this->directory.$this->imageName;
                $success            = $image_three->move($this->directory,$this->imageName);
                if($success)
                {
                    $foodMenu->item_three_image = $this->imageUrl;
                }

            }
            if($foodMenu->save())
            {
                return redirect()->back()->with('message','Data Save Successfully');
            }
        }

    }

}
