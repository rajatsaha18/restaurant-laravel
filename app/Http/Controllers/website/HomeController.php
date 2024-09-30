<?php

namespace App\Http\Controllers\website;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use App\Models\BlogAdmin;
use App\Models\AboutAdmin;
use App\Models\MenuList;
use App\Models\SliderAdmin;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\DiscountBanner;
use App\Models\GeneralWebsite;
use App\Models\DeliciousBanner;
use Livewire\Attributes\Validate;
use App\Models\FoodDeliveryBanner;
use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use App\Models\Team;
use App\Models\TeamMember;

class HomeController extends Controller
{
    private $about;
    private $categories;
    private $subCategories;
    private $category;
    private $sliders;
    private $deliciousBanner;
    private $products;
    private $discountBanner;
    private $foodDelivery;
    private $blogs;
    private $blog;
    private $teamMembers;
    private $website;
    public function index()
    {
        $this->about            = AboutAdmin::first();
        $this->sliders          = SliderAdmin::where('status',1)->get();
        $this->deliciousBanner  = DeliciousBanner::first();
        $this->products         = Product::where('product_value','popular')->get();
        $this->categories       = Category::where('status', 1)->get();
        $this->discountBanner   = DiscountBanner::first();
        $this->foodDelivery     = FoodDeliveryBanner::first();
        $this->blogs            = BlogAdmin::where('status',1)->get();


        return view('website.home.home',[
            'about'                     => $this->about,
            'sliders'                   => $this->sliders,
            'deliciousBanner'           => $this->deliciousBanner,
            'products'                  => $this->products,
            'categories'                => $this->categories,
            'discountBanner'            => $this->discountBanner,
            'foodDelivery'              => $this->foodDelivery,
            'foodDelivery'              => $this->foodDelivery,
            'blogs'                     => $this->blogs,


        ]);
    }
    public function about()
    {
        $this->about = AboutAdmin::first();
        return view('website.about.about',[
            'about' => $this->about,
            ]);
    }
    public function teamMember()
    {
        $this->teamMembers = TeamMember::where('status',1)->get();
        return view('website.home.team-member',[
            'teamMembers' => $this->teamMembers,
        ]);
    }
    public function foodMenu($id)
    {
        $this->category = Category::find($id);
        $this->subCategories = SubCategory::where('category_id',$id)->get();
        $this->products = product::where('category_id',$id)->get();
        return view('website.foodmenu.food-menu',[
            'categoryItem'      => $this->category,
            'subCategories'     => $this->subCategories,
            'products'          => $this->products,
        ]);
    }
    public function contact()
    {
        return view('website.contact.contact');
    }

    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('website.home.products-details',compact('product'));
    }

    public function gallery(){
        $galleries = Gallery::where('status',1)->get();
        return view('website.gallery.gallery', compact('galleries'));
    }

    public function blogDetail($id)
    {
        $this->blog     = BlogAdmin::find($id);
        $this->blogs    = BlogAdmin::where('status',1)->get();
        return view('website.home.blog',[
            'blog'  => $this->blog,
            'items' => $this->blogs,

        ]);
    }

    public function subscribe(Request $request)
    {
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();
        return redirect()->back()->with('message', 'Data Save Successfully');
    }
    
    public function menuList()
    {
        $menuList = MenuList::where('status',1)->get();
        return view('website.home.menu-list',compact('menuList'));
    }
    public function menuItemList()
    {
        $this->products = Product::where('status',1)->get();
        return view('website.home.menus-itemlist',[
            'products' => $this->products,
        ]);
    }

}
