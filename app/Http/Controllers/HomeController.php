<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\DemoMail;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Response;

class HomeController extends Controller
{

    public function index()
    {
        $data['title'] = 'Home';
        $data['page'] = 'home';
        $data['podcast'] = DB::table('podcast')->orderBy('position', 'ASC')->limit(3)->get();
        $data['episode'] = DB::table('episode')->orderBy('position', 'ASC')->limit(3)->get();
        $data['blog'] = DB::table('blog')->orderBy('blogId', 'DESC')->limit(3)->get();
        $data['company'] = DB::table('company')->orderBy('companyId', 'ASC')->get();
        $data['home'] = DB::table('home')->first();
        $data['banners'] = DB::table('banners')->first();
        return view('home', compact('data'));
    }

    public function about()
    {
        $data['title'] = 'About Us';
        $data['page'] = 'about';
        $data['about'] = DB::table('about')->first();
        return view('frontend.about', compact('data'));
    }

    public function searchpodcast(Request $request)
    {

        $data['title'] = 'Podcast';
        if (!empty($request['search'])) {
            $data['podcast'] = DB::table('podcast')->where('title', 'LIKE', "%{$request['search']}%")->orderBy('position', 'ASC')->get();
        } else {
            $data['podcast'] = DB::table('podcast')->orderBy('position', 'ASC')->get();
        }
        return view('frontend.podcast', compact('data'));
    }

    public function podcast()
    {
        $data['title'] = 'Podcast';
        $data['podcast'] = DB::table('podcast')->orderBy('position', 'ASC')->get();

        return view('frontend.podcast', compact('data'));
    }
    public function podcastdetail($slug_url)
    {
        $data['title'] = 'Podcast Detail';
        $data['podcastdetail'] = DB::table('podcast')->where('slug_url', $slug_url)->first();
        $data['podcastlist'] = DB::table('podcast')->orderBy('position', 'ASC')->limit(5)->get();
        $data['company'] = DB::table('company')->orderBy('companyId', 'ASC')->get();
        return view('frontend.podcastdetail', compact('data'));
    }

    public function episode($slug_url)
    {
        $data['title'] = 'Episode';
        $data['podcast'] = DB::table('podcast')->where('slug_url', $slug_url)->first();
        $data['episode'] = DB::table('episode')->where('podcastId', @$data['podcast']->podcastId)->orderBy('position', 'ASC')->get();
        $data['podcastlist'] = DB::table('podcast')->where('podcastId', '!=', $data['podcast']->podcastId)->orderBy('position', 'ASC')->limit(10)->get();

        return view('frontend.episode', compact('data'));
    }

    public function episodedetail($slug_url)
    {
        $data['title'] = 'Episode Detail';
        $data['episodelist'] = DB::table('episode')->where('slug_url', '!=', $slug_url)->orderBy('position', 'ASC')->limit(3)->get();
        $data['episodedetail'] = DB::table('episode')->where('slug_url', $slug_url)->first();
        $data['podcastname='] = DB::table('podcast')->where('podcastId', @$data['episodedetail']->podcastId)->first();
        $data['podcastlist'] = DB::table('podcast')->where('podcastId', '!=', @$data['episodedetail']->podcastId)->orderBy('position', 'ASC')->limit(3)->get();
        return view('frontend.episodedetail', compact('data'));
    }

    public function feed()
    {
        // Fetch all podcasts with their associated episodes
        $podcasts = DB::table('podcast')->orderBY('position', 'asc')->get();


        // Create the base XML structure
        $xml = new \SimpleXMLElement('<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom"/>');
        $channel = $xml->addChild('channel');
        $channel->addChild('title', 'Emulate Christ Podcasts XML Feeds');
        $channel->addChild('link', url('/podcast-feeds'));
        $channel->addChild('description', 'A feed of all podcasts and their episodes.');
        $channel->addChild('language', 'en-us');


        // Add each podcast and its episodes to the feed
        foreach ($podcasts as $podcast) {
            $episodes = DB::table('episode')->where('episode.podcastId', $podcast->podcastId)->orderBy('position', 'asc')->get();

            $pubDateXr = \Carbon\Carbon::parse($podcast->created_at);

            $podcastItem = $channel->addChild('item');
            $podcastItem->addChild('id', $podcast->podcastId);
            $podcastItem->addChild('title', $podcast->title);
            $podcastItem->addChild('image', 'https://emulate-christ-object-store.s3.us-west-1.amazonaws.com/podcasts/' . $podcast->image);
            $podcastItem->addChild('slug', $podcast->slug_url);
            $podcastItem->addChild('description', strip_tags(html_entity_decode($podcast->description)));
            $podcastItem->addChild('created_at', $pubDateXr->toRssString());

            // Add episodes for this podcast
            foreach ($episodes as $episode) {

                // Convert the date string to Carbon manually
                $pubDateCr = \Carbon\Carbon::parse($episode->created_at);

                $episodeItem = $podcastItem->addChild('item');
                $episodeItem->addChild('episodeId', $episode->episodeId);
                $episodeItem->addChild('title', $episode->title);
                $episodeItem->addChild('image', 'https://emulate-christ-object-store.s3.us-west-1.amazonaws.com/episodes/' . $episode->image);
                $episodeItem->addChild('slug', $episode->slug_url);
                $episodeItem->addChild('description', strip_tags(html_entity_decode($episode->description)));
                $episodeItem->addChild('guid', 'https://emulate-christ-object-store.s3.us-west-1.amazonaws.com/episodes/' . $episode->attachment);
                $episodeItem->addChild('created_at', $pubDateCr->toRssString());
            }
        }

        // Return the XML as a response with appropriate headers
        $response = new Response($xml->asXML(), 200);
        $response->header('Content-Type', 'application/rss+xml');

        return $response;
    }

    public function blog()
    {
        $data['title'] = 'Blog';
        $data['blog'] = DB::table('blog')->where('status', '1')->get();
        $data['bloglist'] = DB::table('blog')->orderBy('blogId', 'DESC')->limit(3)->get();
        $data['category'] = DB::table('category')->orderBy('categoryId', 'ASC')->limit(6)->get();
        return view('frontend.blog', compact('data'));
    }
    public function blogdetail($slug_url)
    {
        $data['title'] = 'Blog Detail';
        $data['bloglist'] = DB::table('blog')->where('status', '1')->limit(3)->get();
        $data['category'] = DB::table('category')->orderBy('categoryId', 'ASC')->limit(6)->get();
        $data['blogdetail'] = DB::table('blog')->where('slug_url', $slug_url)->first();
        $data['blogcategory'] = DB::table('category')->where('categoryId', $data['blogdetail']->categoryId)->first();
        return view('frontend.blogdetail', compact('data'));
    }

    public function contact()
    {
        $data['title'] = 'Contact';
        $data['page'] = 'contact';
        $data['setting'] = DB::table('settings')->first();
        return view('frontend.contact', compact('data'));
    }
    public function subscribe()
    {
        $data['title'] = 'Subscribe';
        $data['page'] = 'Subscribe';
        $data['company'] = DB::table('company')->orderBy('companyId', 'ASC')->get();
        return view('frontend.subscribe', compact('data'));
    }

    public function privacypolicy()
    {
        $data['title'] = 'Privacy Policy';
        $data['cms'] = DB::table('cms')->where('page', 'privacypolicy')->first();
        return view('frontend.privacypolicy', compact('data'));
    }
    public function termandconditions()
    {
        $data['title'] = 'Privacy Policy';
        $data['cms'] = DB::table('cms')->where('page', 'terms')->first();
        return view('frontend.term_and_conditions', compact('data'));
    }

    public function gratuity()
    {
        $data['title'] = 'Gratuity';
        $data['page'] = 'Gratuity';
        return view('frontend.gratuity', compact('data'));
    }
    function savecontact(Request $request)
    {
        if ($request['privacy'] != 1) {
            $privacy = 0;
        } else {
            $privacy = 1;
        }
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
            'privacy' => $privacy,
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('contact')->insert($data);

        $mailData = [
            'name' => $request['touchname'],
            'email' => $request['touchemail'],
            'message' => $request['touchmessage'],
        ];

        Mail::to('support@emulatechrist.com')->send(new TestEmail($mailData));

        $type = "msg";
        $msg = '["Send Enquiry Successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);

        return redirect('contact');
    }

    function getintouch(Request $request)
    {
        if ($request['privacy'] != 1) {
            $terms = 0;
        } else {
            $terms = 1;
        }
        $data = array(
            'name' => $request['touchname'],
            'email' => $request['touchemail'],
            'message' => $request['touchmessage'],
            'terms' => $terms,
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('getintouch')->insert($data);

        $mailData = [
            'name' => $request['touchname'],
            'email' => $request['touchemail'],
            'message' => $request['touchmessage'],
        ];

        Mail::to('support@emulatechrist.com')->send(new TestEmail($mailData));

        $type = "msg";
        $msg = '["Added form successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('');
    }

    function downloadebook(Request $request)
    {
        $setting = DB::table('settings')->first();
        $data = array(
            'name' => $request->ebookname,
            'email' => $request->ebookemail,
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('ebook')->insert($data);
        $mailData = [
            "ebook" => @$setting->ebook,
        ];

        Mail::to($request->ebookemail)->send(new DemoMail($mailData));
        $type = "msg";
        $msg = '["Please check email", "success", "#A5DC86"]';
        Session::flash($type, $msg);

        // if(!empty($setting->ebook))
        // {

        //    $fileUrl = s3_asset(@$setting->ebook);
        //    return response()->download($fileUrl);
        // }
        return redirect('');
    }

    function ajaxpodcastlist(Request $request)
    {

        if (!empty($request['search'])) {

            $podcast = DB::table('podcast')->where('title', 'LIKE', "%{$request['search']}%")->orderBy('position', 'ASC')->get();
        } elseif (!empty($request['create_date'])) {
            $date_cond = "LEFT(created_at,10)='" . $request['create_date'] . "'";
            $podcast = DB::table('podcast')->whereRaw($date_cond)->orderBy('position', 'ASC')->get();

        } elseif (!empty($request['search']) && !empty($request['create_date'])) {
            $date_cond = "LEFT(created_at,10)='" . $request['create_date'] . "'";
            $podcast = DB::table('podcast')->whereRaw($date_cond)->where('title', 'LIKE', "%{$request['search']}%")->orderBy('position', 'ASC')->get();
        } else {
            $podcast = DB::table('podcast')->orderBy('position', 'ASC')->get();

        }
        $html = '';
        if (!$podcast->isEmpty()) {
            foreach ($podcast as $key) {
                if (!empty($key->image)) {

                    $img = '<img src="' .asset('uploads/podcast/'.$key->image) . '" alt="portfolio">';

                } else {

                    $img = '<img src="' . asset('assets/img/pod1.jpg') . '" alt="portfolio">';

                }
                $html .= '<div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3">
                                            <div class="portfolio-thumb">

                                                <a href="' . $key->podcast_url . '">

                                                   ' . $img . '
                                                </a>

                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="portfolio-wrap img-custom-anim-left">
                                                <h3 class="portfolio-title mb-4 mt-3 mt-lg-0 h4"><a class=" text-dark" href="'.$key->podcast_url.'">'.substr($key->title, 0, 60).'</a></h3>
                                                <a class="btn style2 wow img-custom-anim-left" href="' .$key->podcast_url.'">

                                                    <span class="link-effect text-uppercase">

                                                        <span class="effect-1">View Details</span>

                                                        <span class="effect-1">View Details</span>

                                                    </span>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>';

            }
        } else {
            $html .= '<div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-center">No Data Found</h3>
                                </div>
                            </div>
                        </div>';
        }

        echo $html;
    }

    function ajaxepisodelist(Request $request)
    {

        if (!empty($request['search'])) {

            $episode = DB::table('episode')->where('title', 'LIKE', "%{$request['search']}%")->orderBy('position', 'ASC')->get();
        } elseif (!empty($request['create_date'])) {
            $date_cond = "LEFT(created_at,10)='" . $request['create_date'] . "'";
            $episode = DB::table('episode')->whereRaw($date_cond)->orderBy('position', 'ASC')->get();

        } elseif (!empty($request['search']) && !empty($request['create_date'])) {
            $date_cond = "LEFT(created_at,10)='" . $request['create_date'] . "'";
            $episode = DB::table('episode')->whereRaw($date_cond)->where('title', 'LIKE', "%{$request['search']}%")->orderBy('position', 'ASC')->get();
        } else {
            $episode = DB::table('episode')->orderBy('position', 'ASC')->get();

        }
        $html = '';
        if (!$episode->isEmpty()) {
            foreach ($episode as $key) {
                if (!empty($key->image)) {

                    $img = '<img src="' . s3_asset($key->image) . '" alt="portfolio">';

                } else {

                    $img = '<img src="' . asset('assets/img/pod1.jpg') . '" alt="portfolio">';

                }
                $html .= '<div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3">
                                            <div class="portfolio-thumb">

                                                <a href="' . url('episodedetail/' . $key->slug_url) . '">

                                                   ' . $img . '
                                                </a>

                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="portfolio-wrap img-custom-anim-left">
                                                <h3 class="portfolio-title mb-4 mt-3 mt-lg-0 h4"><a class=" text-dark" href="' . url('episodedetail/' . $key->slug_url) . '">' . substr($key->title, 0, 60) . '</a></h3>
                                                 <p>' . substr(@$key->description, 0, 80) . '</p>
                                                <a class="btn style2 wow img-custom-anim-left" href="' . url('episodedetail/' . $key->slug_url) . '">

                                                    <span class="link-effect text-uppercase">

                                                        <span class="effect-1">View</span>

                                                        <span class="effect-1">View</span>

                                                    </span>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>';

            }
        } else {
            $html .= '<div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-center">No Data Found</h3>
                                </div>
                            </div>
                        </div>';
        }

        echo $html;
    }

    function ajaxbloglist(Request $request)
    {

        if (!empty($request['search'])) {

            $blog = DB::table('blog')->where('title', 'LIKE', "%{$request['search']}%")->get();
        } elseif (!empty($request['create_date'])) {
            $date_cond = "LEFT(created_at,10)='" . $request['create_date'] . "'";
            $blog = DB::table('blog')->whereRaw($date_cond)->get();

        } elseif (!empty($request['categoryId'])) {

            $blog = DB::table('blog')->where('categoryId', $request['categoryId'])->get();

        } elseif (!empty($request['search']) && !empty($request['create_date']) && !empty($request['categoryId'])) {
            $date_cond = "LEFT(created_at,10)='" . $request['create_date'] . "'";
            $blog = DB::table('blog')->whereRaw($date_cond)->where('title', 'LIKE', "%{$request['search']}%")->where('categoryId', $request['categoryId'])->get();
        } else {
            $blog = DB::table('blog')->get();

        }
        $html = '';
        if (!$blog->isEmpty()) {
            foreach ($blog as $key) {
                if (!empty($key->image)) {

                    $img = '<img src="' . s3_asset($key->image) . '" alt="portfolio">';

                } else {

                    $img = '<img src="' . asset('assets/img/pod1.jpg') . '" alt="portfolio">';

                }
                $html .= ' <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="portfolio-wrap img-custom-anim-left">
                                <div class="portfolio-thumb">
                                    <a href="' . url('blogdetail/' . $key->slug_url) . '">

                                       ' . $img . '
                                    </a>
                                </div>
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title mb-3 h5"><a href="' . url('blogdetail/' . $key->slug_url) . '">' . substr($key->title, 0, 40) . '</a></h3>
                                    <p> ' . substr($key->description, 0, 100) . '...' . '</p>
                                    <a class="btn style2 wow img-custom-anim-left" href="' . url('blogdetail/' . $key->slug_url) . '">
                                        <span class="link-effect text-uppercase">
                                            <span class="effect-1">Read More</span>
                                            <span class="effect-1">Read More</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>';

            }
        } else {
            $html .= ' <div class="col-xl-6 col-lg-6 col-md-6">

                                <div class="card">
                                <div class="card-body">
                                <h3 class="text-center">Non Data Found</h3>
                            </div>
                        </div>

                        </div>';
        }

        echo $html;
    }


}
