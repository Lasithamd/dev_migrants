<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\SubCategoryService;
use App\Services\LocationServices;
use App\Services\AdsService;
use App\Services\CategoryService;
use App\Models\Ads;
use Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        print_r('dddd'); die();
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function register(CategoryService $categories, SubCategoryService $subcategories, LocationServices $location)
    {
       
        $categories = $categories->getCategory();;
        $subcategories = $subcategories->getOrderSubCat();
        $districts = $location->getDistric();
        return view('front.register.index', compact('categories', 'subcategories', 'districts'));
    }

    public function registerNext(Request $request, CategoryService $categories, LocationServices $location, SubCategoryService $subcategories)
    {
        $data = $request->all();
        
        $location=$location->getDistricDetails($data['city']); 
        $subcategories =$subcategories->findSubCat($data['sub_category_id']);
        $categories = $categories->findCategory($subcategories['category_id']);
        return view('front.register.second', compact('categories', 'subcategories', 'location'));
    }
    public function resgisterThird(Request $request, AdsService $ads,CategoryService $categories, LocationServices $location, SubCategoryService $subcategories)
    {

        $data = $request->all();

        // print_r($data); die();
        $data['slug']=$ads->slugGenerator($data['name'], $data['sub_category_id'], $data['city_id']);
        $data = $ads->checkFeature($data);       
        $data['user_id']  = Auth::user()->id;
        $ads = Ads::create($data);
        $location=$location->getDistricDetails($data['city_id']);
        $subcategories =$subcategories->findSubCat($data['sub_category_id']);
        $categories = $categories->findCategory($subcategories['category_id']);
        return view('front.register.third', compact('categories', 'subcategories', 'location', 'ads'));
    }
    public function finalStep(Request $request, ImageService $images)
    {
        $data = $request->all();

        for ($i = 0; $i <= 4; $i++) {
            $fieldName = 'image' . ($i);

            // Assuming your file input names are image1, image2, etc.
            if ($request->hasFile($fieldName)) {

                $image = $request->file($fieldName);

                $imageNames = time() . $i . '.' . $image->getClientOriginalExtension();

                // Save the image path or perform any additional logic
                if ($i == 0) {
                    $image->move(public_path('uploads/featurd'), $imageNames);
                    $images->saveImagesProfile($data['id'],$imageNames);
                } else {
                    $image->move(public_path('uploads/gallery'), $imageNames);
                    $images->saveImagesGallery($data['id'],$imageNames);
                }
                // You may want to continue the loop instead of returning immediately
            }
        }

        return redirect()->route('ads.myads')->with('success', 'Ads Created Successfully');
    }

    public function myads(AdsService $adsService,  ImageService $image)
    {
        
        $adsData=$adsService->getAdsByUser(Auth::user()->id);
        $image = $image->getAdsImages();

        return view('front.ads.myads',compact('adsData','image'));
    }
}
