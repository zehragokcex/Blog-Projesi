<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\InvoiceController;
use App\Models\Models\Article;
use App\Models\Models\Category;
use App\Models\Models\Page;
use App\Models\Models\Contact;
use App\Models\Models\Category as ModelsCategory;



class Homepage extends Controller
{
    public function __construct(){
        view()->share('pages',Page::orderBy('order','ASC')->get());
        //her fonksiyonda ayrı page kodu yazmadan page sayfasını getirmemizi sağlıyor
        // tüm view ler bu datayı paylaşıyor
        view()->share('categories',Category::inRandomOrder()->get());
    }
    
    public function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->paginate(1);
        //$data['categories']=Category::inRandomOrder()->get();
        //$data['pages']=Page::orderBy('order','ASC')->get();
        return view('front.homepage',$data);
        // return view('front.homepage',$data);
    }
    
    public function single($category,$slug){
        $category=Category::whereSlug($category)->first() ?? abort(403,'Böyle bir kategori bulunamadı.');
        $data['article']=Article::where('slug','=',$slug)->first() ?? abort(403,'Böyle bir yazı bulunamadı.');
        //$data['categories']=Category::inRandomOrder()->get();
        return view('front.single',$data);
        # code...
    }

    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı.');
        $data['category']=$category;
        $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(1);
        //$data['categories']=Category::inRandomOrder()->get();
        return view('front.category',$data);
    }

    public function page($slug){
        $page=Page::whereSlug($slug)->first() ?? abort(403,'Böyle bir sayfa bulunamadı.');
        $data['page']=$page;
        //$data['pages']=Page::orderBy('order','ASC')->get();
        return view('front.page',$data);

    }

    public function contact(){
        return view('front.contact');
    }

    public function contactpost(Request $request){
        $rules=[
            'name'=>'required|min:5',
            'email'=>'required|email',
            'topic'=>'required',
            'message'=>'required|min:10'
        ];
        $validate=Validator::make($request->post(),$rules);
        
        if($validate->errors()){
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }
        $contact= new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->topic=$request->topic;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->route('contact')->with('success','Mesajınız iletildi. En kısa sürede geri dönüş sağlanacaktır. Teşekkür ederiz');
    }
}
