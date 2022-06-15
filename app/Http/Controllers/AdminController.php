<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\AdminNavbar;
use App\Models\AdminHome;
use App\Models\AdminAbout;
use App\Models\AdminClietnsSection;
use App\Models\AdminServis;
use App\Models\AdminTeam;
use App\Models\AdminContact;
use App\Models\Gallery;
use App\Models\Pricing;
use App\Models\Faq;
use App\Models\PointGallery;
use App\Models\AdminTeamIcons;
use App\Models\portfoliodetails;






class AdminController extends Controller
{

    public function home() {


// Navbar start 
        if(AdminNavbar::count() == 0) {
            $navbar = new AdminNavbar;
            $navbar->home = 'главная';
            $navbar->about ='о нас';
            $navbar->servis = 'сервис';
            $navbar->portfolio = 'портфолио';
            $navbar->team = 'команда';
            $navbar->Contact = 'контакты';
            $navbar->Get_Started = 'ознакомиться';
            $navbar->save();
        }
// navbar end 

// home start 
        if(AdminHome::count() == 0) {
            $home = new AdminHome;
            $home->title = 'Hotel';
            $home->img = '238501325.jpg';
            $home->slogan = 'Добро пожаловать в наш отель!';
            $home->button = 'О НАС';
            $home->save();
        }
// home end

// About start 
        if(AdminAbout::count() == 0) {
            $about = new AdminAbout();
            $about->title = 'https://www.youtube.com/watch?v=r5Ez4gFF0mw';
            // $about->slogan = 'Описание над пунктами';
            // $about->descriptionUp = 'Описание верхнее';
            // $about->point1 = 'Описание пункт первый';
            // $about->point2 = 'Описание пункт второй';
            // $about->point3 = 'Описание пункт третий';
            // $about->descriptionDown = 'Описание нижние';
            $about->save();
        }
// About End 

        if(Pricing::count() == 0) {
// первая карта 
            $pricing = new Pricing();
            $pricing->title = 'Одноместный номер';
            $pricing->cost = ' 2500 p';
            $pricing->time = 'сутки';
            $pricing->service1 = 'Односпальная кровать';
            $pricing->service2 = 'Завтрак';
            $pricing->service3 = 'Принадлежности';
            $pricing->service4 = 'Прачечная';
            $pricing->service5 = 'Связь с администратором 24/7';
            $pricing->button = 'Забронировать';
            $pricing->save();

            // вторая карта 
            $pricing = new Pricing();
            $pricing->title = 'Двухместный номер';
            $pricing->cost = ' 3500 p';
            $pricing->time = 'сутки';
            $pricing->service1 = 'Двухместная кровать';
            $pricing->service2 = 'Завтрак';
            $pricing->service3 = 'Принадлежности';
            $pricing->service4 = 'Прачечная';
            $pricing->service5 = 'Связь с администратором 24/7';
            $pricing->button = 'Забронировать';
            $pricing->save();

            // третья карта 
            $pricing = new Pricing();
            $pricing->title = 'трехместный номер';
            $pricing->cost = ' 4500 p';
            $pricing->time = 'сутки';
            $pricing->service1 = 'Двухместная кровать';
            $pricing->service2 = 'Завтрак';
            $pricing->service3 = 'Принадлежности';
            $pricing->service4 = 'Прачечная';
            $pricing->service5 = 'Связь с администратором 24/7';
            $pricing->button = 'Забронировать';
            $pricing->save();

            // четвертая карта 
            $pricing = new Pricing();
            $pricing->title = 'Одноместный номер';
            $pricing->cost = ' 2500 p';
            $pricing->time = 'сутки';
            $pricing->service1 = 'Односпальная кровать';
            $pricing->service2 = 'Завтрак';
            $pricing->service3 = 'Принадлежности';
            $pricing->service4 = 'Прачечная';
            $pricing->service5 = 'Связь с администратором 24/7';
            $pricing->button = 'Забронировать';
            $pricing->save();
        }



// Clients Section Start
        if(AdminClietnsSection::count() == 0) {

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-1.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-2.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-3.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-4.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-5.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-6.png';
            $clietns->save();
            
            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-5.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-6.png';
            $clietns->save();
        }
// Clients Section End


// portfolio card start 

if(Gallery::count() == 0) {
    $add_gallery = new Gallery();
    $add_gallery->image = 'default1.jpg';
    $add_gallery->name = 'Двухместный номер';
    $add_gallery->teg = 'app';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default2.jpg';
    $add_gallery->name = 'Чиркейская гэс';
    $add_gallery->teg = 'web';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default3.jpg';
    $add_gallery->name = 'Двухместный номер';
    $add_gallery->teg = 'app';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default4.jpg';
    $add_gallery->name = 'Сулак';
    $add_gallery->teg = 'card';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default5.jpg';
    $add_gallery->name = 'Чиркейская гэс';
    $add_gallery->teg = 'web';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default6.jpg';
    $add_gallery->name = 'Дербент';
    $add_gallery->teg = 'app';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default7.jpg';
    $add_gallery->name = 'Сулак';
    $add_gallery->teg = 'card';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default8.jpg';
    $add_gallery->name = 'Сулак';
    $add_gallery->teg = 'card';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default9.jpg';
    $add_gallery->name = 'Чиркейская гэс';
    $add_gallery->teg = 'web';
    $add_gallery->save();
}
// porfolio card end 



// Admin Servis Start 
        if(AdminServis::count() == 0) {
// первый блок
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// второй блок
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// третий блок
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// четвертый блок 
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();

// пятый блок 
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();

// шестой блок 
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();

        }

      
        if(AdminTeam::count() == 0) {
// первый блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-1.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// второй блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-2.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// третий сблок 
            $team = new AdminTeam();
            $team->img = 'testimonials-3.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// четвертый блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-5.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
     }
        if(AdminContact::count() == 0) {
            $contact = new AdminContact();
            $contact->address = 'Aдрес';
            $contact->email = 'Введите почту';
            $contact->tel = 'Введите номер телефона';
            $contact->save();
        }



        if(Faq::count() == 0) {

            $faq = new Faq();
            $faq->question = 'Есть прачечная?';
            $faq->answer = 'Здравствуйте, конечно у нас имеется своя прачечная';
            $faq->save();

              
            $faq = new Faq();
            $faq->question = 'Есть сушинальная?';
            $faq->answer = 'Здравствуйте, конечно у нас имеется своя сушильная комната';
            $faq->save();

              
            $faq = new Faq();
            $faq->question = 'Есть фен в номере?';
            $faq->answer = 'Здравствуйте, конечно в каждом номере есть фен';
            $faq->save();

              
            $faq = new Faq();
            $faq->question = 'Есть принадлежность (зубная паста, щетка, халат)?';
            $faq->answer = 'Здравствуйте, конечно у нас имеется все принадлежности';
            $faq->save();

              
            $faq = new Faq();
            $faq->question = 'Есть автостоянка?';
            $faq->answer = 'Здравствуйте, конечно у нас имеется своя автостоянка';
            $faq->save();

              
            $faq = new Faq();
            $faq->question = 'Есть ресторан?';
            $faq->answer = 'Здравствуйте, конечно у нас имеется свой ресторан';
            $faq->save();
        }
        return view('admin.cp_home');
    }
    
//about start ------------------------
   public function admin_navbar(){
    $navbar = new AdminNavbar();
    return view ('admin.admin_navbar' , ['navbar' => $navbar->all()]);
}

    public function edit_navbar(Request $data){
        $valid = $data->validate([
            'home' => ['required'],
            'about' => ['required'],
            'servis' => ['required'],
            'portfolio' => ['required'],
            'team' => ['required'],
            'Contact' => ['required'],
            'Get_Started' => ['required']
        ]); 
        
    
        $navbar = AdminNavbar::first();
        $navbar->home = $data->input('home');
        $navbar->about = $data->input('about');
        $navbar->servis = $data->input('servis');
        $navbar->portfolio = $data->input('portfolio');
        $navbar->team = $data->input('team');
        $navbar->Contact = $data->input('Contact');
        $navbar->Get_Started = $data->input('Get_Started');
        $navbar->save();
        return redirect()->route('admin_navbar');
    }  
    public function delete_navbar(){
        AdminNavbar::first()->delete();
        return redirect()->route('admin_navbar');
    }
// about end -----------------------



// HOME START
public function admin_home(){   
    $home = new AdminHome();
    return view ('admin.admin_home' , ['home' => $home->all()]);
}  

public function add_home(Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'title' => ['required'],
        'slogan' => ['required'],
        'button' => ['required'],
        
    ]); 

    $file = $data->file('img');
    $upload_folder = 'public/AdminHome/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 

    $home = new AdminHome();
    $home->img = $filename;
    $home->title = $data->input('title');
    $home->slogan = $data->input('slogan');
    $home->button = $data->input('button');
    $home->save();
    return redirect()->route('admin_home');
}

public function edit_home($id, Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'slogan' => ['required'],
        'button' => ['required'],
    ]); 
    
    $home = AdminHome::find($id);
    if(!empty($data->img)) {
        $upload_folder = 'public/AdminHome'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $home->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $home->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    }
    
    $home->title = $data->input('title');
    $home->slogan = $data->input('slogan');
    $home->button = $data->input('button');
    $home->save();

    return redirect()->route('admin_home');
}

public function delete_home($id){
    AdminHome::find($id)->delete();
    return redirect()->route('admin_home');
}
// Home END


// about start 

public function admin_about(){
    $about = new AdminAbout();
    return view ('admin.admin_about' , ['about' => $about->all()]);
}  


public function edit_about(Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        // 'slogan' => ['required'],
        // 'descriptionUp' => ['required'],
        // 'point1' => ['required'],
        // 'point2' => ['required'],
        // 'point3' => ['required'],
        // 'descriptionDown' => ['required']
    ]); 
    
    $about = AdminAbout::first();    
    $about->title = $data->input('title');
    // $about->slogan = $data->input('slogan');
    // $about->descriptionUp = $data->input('descriptionUp');
    // $about->point1 = $data->input('point1');
    // $about->point2 = $data->input('point2');
    // $about->point3 = $data->input('point3');
    // $about->descriptionDown = $data->input('descriptionDown');
    $about->save();

    return redirect()->route('admin_about');
}  

// about end 


// Section pricing START 


// HOME START
public function admin_pricing(){   
    $pricing = new Pricing();
    return view ('admin.admin_pricing' , ['pricing' => $pricing->all()]);
}  


public function add_pricing(Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'cost' => ['required'],
        'time' => ['required'],
        'service1' => ['required'],
        'service2' => ['required'],
        'service3' => ['required'],
        'service4' => ['required'],
        'service5' => ['required'],
        'button' => ['required']
    ]); 
    
    $pricing = new Pricing;
    $pricing->title = $data->input('title');
    $pricing->cost = $data->input('cost');
    $pricing->time = $data->input('time');
    $pricing->service1 = $data->input('service1');
    $pricing->service2 = $data->input('service2');
    $pricing->service3 = $data->input('service3');
    $pricing->service4 = $data->input('service4');
    $pricing->service5 = $data->input('service5');
    $pricing->button = $data->input('button');
    $pricing->save();
    return redirect()->route('admin_pricing');
}

public function edit_pricing($id, Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'cost' => ['required'],
        'time' => ['required'],
        'service1' => ['required'],
        'service2' => ['required'],
        'service3' => ['required'],
        'service4' => ['required'],
        'service5' => ['required'],
        'button' => ['required']
    ]); 
    
    $pricing = Pricing::find($id);
    $pricing->title = $data->input('title');
    $pricing->cost = $data->input('cost');
    $pricing->time = $data->input('time');
    $pricing->service1 = $data->input('service1');
    $pricing->service2 = $data->input('service2');
    $pricing->service3 = $data->input('service3');
    $pricing->service4 = $data->input('service4');
    $pricing->service5 = $data->input('service5');
    $pricing->button = $data->input('button');
    $pricing->save();
    return redirect()->route('admin_pricing');
}

public function delete_pricing($id){
    Pricing::find($id)->delete();
    return redirect()->route('admin_pricing');
}
// Home END

// Section Pricing End 




// <!-- ======= Admin Clients Section Start======= -->


public function admin_clients_section(){
    $clietns = new AdminClietnsSection();
    return view ('admin.admin_clients_section' , ['clietns' => $clietns->all()]);
}  

public function edit_clients_section($id, Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp']
    ]);  
    
    $clietns = AdminClietnsSection::find($id);
    if($data->file('img') != '') {
        $upload_folder = 'public/AdminClietnsSection/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $clietns->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $clietns->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $clietns->img = $clietns->img;
    }
    $clietns->save();

    return redirect()->route('admin_clients_section');

}  

public function delete_clients_section($id){
    AdminClietnsSection::find($id)->delete();
    return redirect()->route('admin_clients_section');
}
// <!-- ======= Admin Clients Section End ======= -->



public function add_point_gallery(Request $data){
    $valid = $data->validate([
        'title' => ['required'],
    ]); 

        $point = new PointGallery();
        $point->title = $data->input('title');
        $point->save();
        return redirect()->route('gallery');
}

public function edit_point_gallery($id, Request $data){
    $valid = $data->validate([
        'title' => ['required'],
    ]); 

        $point = PointGallery::find($id);
        $point->title = $data->input('title');
        $point->save();

    return redirect()->route('gallery');
}  

public function delete_point_gallery($id){
    PointGallery::find($id)->delete();
    return redirect()->route('gallery');
}



// portfolio card start 


public function gallery() {
    $gallery = Gallery::all();
    $point = PointGallery::all();

    return view('admin.gallery', ['gallery' => $gallery,'point' => $point->all() ]);
}

public function add_cart_gallery(Request $data) {
    $valid = $data->validate([
        'teg' => ['required'],
        'name' => ['required'],
        'image' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
    ]); 

    $cart = new Gallery();
    $cart->name = $data->input('name');
    $cart->teg = $data->input('teg');

    $file = $data->file('image');
    $upload_folder = 'public/gallery/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    $cart->image = $filename;
    Storage::putFileAs($upload_folder, $file, $filename); 


    $cart->save();
    return redirect()->route('gallery');
}

public function edit_gallery($id, Request $data) {
    $gallery = Gallery::find($id);

    if(!empty($data->image)) {
        $file = $data->file('image');
        $upload_folder = 'public/gallery';
        $filename = rand().'_'.$file->getClientOriginalName();
        if($gallery->image != 'default1.jpg' && $gallery->image != 'default2.jpg' && $gallery->image != 'default3.jpg' && $gallery->image != 'default4.jpg' && $gallery->image != 'default5.jpg' && $gallery->image != 'default6.jpg' && $gallery->image != 'default7.jpg' && $gallery->image != 'default8.jpg' && $gallery->image != 'default9.jpg'){
            Storage::delete($upload_folder . '/' . $gallery->image);
        }
        $gallery->image = $filename;
        Storage::putFileAs($upload_folder, $file, $filename);
    }

    if($data->input('name') != '') {
        $gallery->name = $data->input('name');
    }

    $gallery->save();

    return redirect()->route('gallery');
}
public function delete_gallery($id){
    Gallery::find($id)->delete();
    return redirect()->route('gallery');
}

// portfolio card end 





// <!-- ======= Admin Servis Start======= -->

public function admin_servis(){
    $servis = new AdminServis();
    return view ('admin.admin_servis' , ['servis' => $servis->all()]);
}  

public function add_servis(Request $data){
    $valid = $data->validate([
        'icon' => ['required'],
        'title' => ['required'],
        'descripteon' => ['required']
    ]); 
    
    $servis = new AdminServis();
    $servis->icon = $data->input('icon');
    $servis->title = $data->input('title');
    $servis->descripteon = $data->input('descripteon');
    $servis->save();
    return redirect()->route('admin_servis');
}  

public function edit_servis($id, Request $data){
    $valid = $data->validate([
        'icon' => ['required'],
        'title' => ['required'],
        'descripteon' => ['required']
    ]); 
    
    $servis = AdminServis::find($id);
    $servis->icon = $data->input('icon');
    $servis->title = $data->input('title');
    $servis->descripteon = $data->input('descripteon');
    $servis->save();
    return redirect()->route('admin_servis');
}  

public function delete_servis($id){
    AdminServis::find($id)->delete();
    return redirect()->route('admin_servis');
}
// <!-- ======= Admin Servis End ======= -->



// <!-- ======= Admin Team Section Start======= -->


public function admin_team(){
    $team = new AdminTeam();
    return view ('admin.admin_team' , ['team' => $team->all()]);
}  
public function add_team(Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'name' => ['required'],
        'slogan' => ['required'],
        'work' => ['required'],
    ]); 

    $file = $data->file('img');
    $upload_folder = 'public/AdminTeam/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 

    $team = new AdminTeam();
    $team->img = $filename;
    $team->name = $data->input('name');
    $team->slogan = $data->input('slogan');
    $team->work = $data->input('work');
    $team->save();
    return redirect()->route('admin_team');
}

public function edit_team($id, Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'name' => ['required'],
        'work' => ['required'],
        'slogan' => ['required']
    ]); 
    
    $team = AdminTeam::find($id);
    if($data->file('img') != '') {
        $upload_folder = 'public/AdminTeam/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $team->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $team->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $team->img = $team->img;
    }
    
    $team->name = $data->input('name');
    $team->work = $data->input('work');
    $team->slogan = $data->input('slogan');
    $team->save();

    return redirect()->route('admin_team');
}  

public function delete_team($id){
    AdminTeam::find($id)->delete();
    return redirect()->route('admin_team');
}
// <!-- ======= Admin Team Section End ======= -->



public function admin_portfoliodetails(){
    $portfoliodetails = new portfoliodetails();
    return view ('admin.admin_portfoliodetails' , ['portfoliodetails' => $portfoliodetails->all()]);
}  
public function add_portfoliodetails(Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'slogan' => ['required'],
    ]); 

    $file = $data->file('img');
    $upload_folder = 'public/portfoliodetails/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 

    $portfoliodetails = new portfoliodetails();
    $portfoliodetails->img = $filename;
    $portfoliodetails->slogan = $data->input('slogan');
    $portfoliodetails->save();
    return redirect()->route('admin_portfoliodetails');
}

public function edit_portfoliodetails($id, Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'slogan' => ['required']
    ]); 
    
    $portfoliodetails = portfoliodetails::find($id);
    if($data->file('img') != '') {
        $upload_folder = 'public/portfoliodetails/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $team->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $team->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $portfoliodetails->img = $portfoliodetails->img;
    }
    
    $portfoliodetails->slogan = $data->input('slogan');
    $portfoliodetails->save();

    return redirect()->route('admin_portfoliodetails');
}  

public function delete_portfoliodetails($id){
    portfoliodetails::find($id)->delete();
    return redirect()->route('admin_portfoliodetails');
}
// <!-- ======= Admin Team Section End ======= -->


// contact start 
public function admin_contact(){
    $contact = new AdminContact();
    return view ('admin.admin_contact' , ['contact' => $contact->first()]);
}  

public function edit_contact(Request $data){
    $valid = $data->validate([
        'address' => [''],
        'email' => [''],
        'tel' => [''],
    ]); 
    
    $contact = AdminContact::first();
    $contact->address = $data->input('address');
    $contact->email = $data->input('email');
    $contact->tel = $data->input('tel');
    $contact->save();

    return redirect()->route('admin_contact');
}  

public function delete_contact($id){
    AdminContact::find($id)->delete();
    return redirect()->route('admin_contact');
}
// contact end 




// Faq START
public function admin_faq(){   
    $faq = new Faq();
    return view ('admin.admin_faq' , ['faq' => $faq->all()]);
}  

public function add_faq(Request $data){
    $valid = $data->validate([
        'question' => ['required'],
        'answer' => ['required']
        
    ]); 

  
    $faq = new Faq();
    $faq->question = $data->input('question');
    $faq->answer = $data->input('answer');
    $faq->save();
    return redirect()->route('admin_faq');
}

public function edit_faq($id, Request $data){
    $valid = $data->validate([
        'question' => [''],
        'answer' => ['']
    ]); 
    
    $faq = Faq::find($id);
    $faq->question = $data->input('question');
    $faq->answer = $data->input('answer');
    $faq->save();

    return redirect()->route('admin_faq');
}

public function delete_faq($id){
    Faq::find($id)->delete();
    return redirect()->route('admin_faq');
}
// Faq END

public function admin_team_icons(){
    $team = new AdminTeam();
    $icons = New AdminTeamIcons();
    return view ('admin.admin_team_icons', ['team' => $team->all(), 'icons' => $icons->all()]);
}

public function add_team_icon(Request $data, $id){
    $valid = $data->validate([
        'icon' => ['required'],
        'description' => ['required'],
    ]);

    $team_icons = new AdminTeamIcons();
    $team_icons->tab = $id;
    $team_icons->icon = $data->input('icon');
    $team_icons->description = $data->input('description');
    $team_icons->save();

    return redirect()->route('admin_team_icons');
}

public function edit_team_icon(Request $data, $id){
    $valid = $data->validate([
        'icon' => ['required'],
        'description' => ['required'],
    ]);

    $team_icons = AdminTeamIcons::find($id);
    $team_icons->icon = $data->input('icon');
    $team_icons->description = $data->input('description');
    $team_icons->save();

    return redirect()->route('admin_team_icons');
}

public function delete_team_icon($id){
    AdminTeamIcons::find($id)->delete();
    return redirect()->route('admin_team_icons');
}
}
