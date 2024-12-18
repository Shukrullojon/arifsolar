<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Comment;
use App\Models\Consultation;
use App\Models\Header;
use App\Models\Job;
use App\Models\News;
use App\Models\Partner;
use App\Models\Question;
use App\Models\Review;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Revolution\Google\Sheets\Facades\Sheets;

class HomeController extends Controller
{
    public function new(Request $request)
    {
        dd($request);
        $locale = $request->session()->get('locale');
        $locale = $locale ?: "uz";
        $about = About::select("video","image","title_$locale as title", "description_$locale as description")->where('status',1)->latest()->first();
        $works = Work::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $reviews = Review::select("video","name")->where('status',1)->latest()->get();
        $comments = Comment::select("comment_$locale as comment", "fio", "company")->where('status',1)->latest()->get();
        $news = News::select("image","title_$locale as title", "description_$locale as description","created_at")->where('status',1)->latest()->get();
        $partners = Partner::select("link")->where('status',1)->latest()->get();
        $questions = Question::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $jobs = Job::select("image","title_$locale as title", "description_$locale as description", "address_$locale as address","width","height","status")->where('status',1)->latest()->get();
        $consultations = Consultation::select("title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $img = $locale == "uz" ? "lang_icon_uz.svg" : "lang-icon.svg";
        return view('new',[
            'about' => $about,
            'works' => $works,
            'reviews' => $reviews,
            'comments' => $comments,
            'news' => $news,
            'partners' => $partners,
            'questions' => $questions,
            'jobs' => $jobs,
            'consultations' => $consultations,
            'locale' => $locale,
            'img' => $img,
        ]);
    }

    public function index(Request $request)
    {
        $locale = $request->session()->get('locale');
        $locale = $locale ?: "uz";
        $header = Header::select("id","styles","title_$locale as title", "button_title_$locale as button_title", "section_id")->where('status',1)->latest()->first();
        $about = About::select("id","video","image","title_$locale as title", "description_$locale as description")->where('status',1)->latest()->first();
        $works = Work::select("id","hover_image","image","title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $reviews = Review::select("id","video","name")->where('status',1)->latest()->get();
        $comments = Comment::select("id","comment_$locale as comment", "fio", "company")->where('status',1)->latest()->get();
        $news = News::select("id","img_alt_$locale as img_alt","created_at","image","title_$locale as title", "description_$locale as description","created_at")->where('status',1)->latest()->get();
        $partners = Partner::select("id","image")->where('status',1)->latest()->get();
        $questions = Question::select("id","title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        $jobs = Job::select("id", "img_alt_$locale as img_alt","image","image_logo","title_$locale as title", "description_$locale as description", "address_$locale as address","width","height","status")->where('status',1)->latest()->take(3)->get();
        $consultations = Consultation::select("id","title_$locale as title", "description_$locale as description")->where('status',1)->latest()->get();
        return view('home',[
            'header' => $header,
            'about' => $about,
            'works' => $works,
            'reviews' => $reviews,
            'comments' => $comments,
            'news' => $news,
            'partners' => $partners,
            'questions' => $questions,
            'jobs' => $jobs,
            'consultations' => $consultations,
        ]);
    }

    public function jobAdd(Request $request)
    {
        $locale = $request->session()->get('locale');
        $locale = $locale ?: 'uz';
        $offset = $request->input('input_hidden', 0);
        $offset = ($offset + 1)*3;
        $jobs = Job::with('files')->select(
            "id",
            "img_alt_$locale as img_alt",
            "image",
            "image_logo",
            "title_$locale as title",
            "description_$locale as description",
            "address_$locale as address",
            "width",
            "height",
            "status"
        )
            ->where('status', 1) // Only active jobs
            ->latest() // Sort by latest jobs
            ->offset($offset) // Apply the offset for pagination
            ->take(3) // Take 3 jobs at a time
            ->get();

        // Return the jobs data as JSON
        return response()->json([
            'status' => true,
            'jobs' => $jobs,
        ]);
    }

    public function notification(Request $request)
    {
        $token = "7018480396:AAEWyViLNtIsr_R5ZQQiPGWTFDhSLZLCKZg";
        $text = "FIO: ".$request->name."\n";
        $text .= "PHONE: ".$request->phone."\n";
        Http::post("https://api.telegram.org/bot$token/sendMessage",[
            'chat_id' => -1002237430774,
            'text' => $text,
        ]);
        return redirect()->back()->with("success","hello");
    }

    public function main()
    {
        return view('home.index');
    }

    public function profile()
    {
        return view('profile');
    }
}
