<?php
namespace App\Http\Controllers;

use App\Helpers\Helper\Helper;
use App\Models\Configuration;
use App\Models\Content;
use App\Models\Page;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontendController extends Controller
{

    public function index()
    {
        $data['page'] = Page::where('name', 'home')->first();

        $data['title'] = $data['page']->name;

        return view(Helper::theme() . 'home')->with($data);
    }

    public function page(Request $request)
    {
        $data['page'] = Page::where('slug', $request->pages)->first();

        if (!$data['page']) {
            abort(404);
        }

        $data['title'] = "{$data['page']->name}";

        return view(Helper::theme() . 'pages')->with($data);
    }

    public function changeLanguage(Request $request)
    {
        App::setLocale($request->lang);

        session()->put('locale', $request->lang);

        return redirect()->back()->with('success', __('Successfully Changed Language'));
    }

    public function blogDetails($id)
    {
        $theme = Configuration::first()->theme;

        $data['title'] = "Recent Blog";
        $data['blog'] = Content::where('theme', $theme)->where('name', 'blog')->where('id', $id)->first();

        $data['recentblog'] = Content::where('theme', $theme)->where('name', 'blog')->where('type', 'iteratable')->latest()->limit(6)->paginate(Helper::pagination());

        $data['shareComponent'] = \Share::page(
            url()->current(),
            'Share',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view(Helper::theme() . 'pages.blog_details')->with($data);
    }

    public function contactSend(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Helper::commonMail($data);

        return back()->with('success', 'Contact With us successfully');
    }

    public function subscribe(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);

        Subscriber::create([
            'email' => $request->email
        ]);

        return response()->json(['success' => true]);
    }

    public function linksDetails($id)
    {
        $details = Content::findOrFail($id);

        $data['title'] = $details->content->page_title;
        $data['details'] = $details;

        return view(Helper::theme(). 'link_details')->with($data);
    }

    public function aboutPage(){
        $data['title'] = "About Us";
        return view(Helper::theme() . 'about')->with($data);
    }

    public function superRobotPage(){
        $data['title'] = "Super Robot";
        return view(Helper::theme() . 'super-robot')->with($data);
    }
    
    public function certificatePage(){
        $data['title'] = "Certificates";
        return view(Helper::theme() . 'certificates')->with($data);
    }

    public function businessTermsPage(){
        $data['title'] = "General Business Terms";
        return view(Helper::theme() . 'business-terms')->with($data);
    }

    public function privacyPolicyPage(){
        $data['title'] = "Privacy Policy";
        return view(Helper::theme() . 'privacy-policy')->with($data);
    }

    public function riskWarningPage(){
        $data['title'] = "Risk Warning";
        return view(Helper::theme() . 'risk-warning')->with($data);
    }

    public function termsConditionsPage(){
        $data['title'] = "Terms & Conditions";
        return view(Helper::theme() . 'terms-and-conditions')->with($data);
    }

    public function economicCalendarPage(){
        $data['title'] = "Economic Calendar";
        return view(Helper::theme() . 'economic-calendar')->with($data);
    }

    public function technicalAnalysisPage(){
        $data['title'] = "Technical Analysis";
        return view(Helper::theme() . 'technical-analysis')->with($data);
    }

    public function marketDataPage(){
        $data['title'] = "Market Data";
        return view(Helper::theme() . 'market-data')->with($data);
    }

    public function forexCrossPage(){
        $data['title'] = "Forex Cross";
        return view(Helper::theme() . 'forex-cross')->with($data);
    }

    public function stockFollowerPage(){
        $data['title'] = "Stock Follower";
        return view(Helper::theme() . 'stock-follower')->with($data);
    }

    public function depositWithdrawalPage(){
        $data['title'] = "Deposit Withdrawal";
        return view(Helper::theme() . 'deposit-withdrawal')->with($data);
    }

    public function trainingPage(){
        $data['title'] = "Training";
        return view(Helper::theme() . 'training')->with($data);
    }

    public function forexDatabasePage(){
        $data['title'] = "Forex Database";
        return view(Helper::theme() . 'forex-database')->with($data);
    }

    public function cryptoDatabasePage(){
        $data['title'] = "Crypto Database";
        return view(Helper::theme() . 'crypto-database')->with($data);
    }

    public function contactPage(){
        $data['page'] = Page::where('name', 'contact')->first();

        $data['title'] = $data['page']->name;

        return view(Helper::theme() . 'contact')->with($data);
    }

    public function partnerPage(){
        $data['title'] = "Partners";
        return view(Helper::theme() . 'user.partner.index')->with($data);
    }
}
