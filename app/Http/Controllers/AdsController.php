<?php

namespace App\Http\Controllers;

use App\Models\Ads;

use App\Http\Requests\StoreAdsRequest;
use App\Http\Requests\UpdateAdsRequest;
use App\Services\AdsService;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\SubCategoryService;
use App\Services\LocationServices;


class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
     * @param  \App\Http\Requests\StoreAdsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads, AdsService $adsService, ImageService $img ,$id)
    {
        $ad = $ads::findOrFail($id);

        $adsData = $adsService->getAds();;

        $image= $img->getGalleryImage($id);
        $featured= $img->getFeaturdyImage();

    $comment=$adsService->getComments($id);

        return view('front.ads.details', compact('ad', 'image', 'adsData','featured', 'comment'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdsRequest  $request
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdsRequest $request, Ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
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

    public function loadCategories(int $id, AdsService $ads, CategoryService $category, ImageService $image)
    {
        $categoryName =$category->categoryName($id);
        $text = 'single';       
        $categories=$category->categoryCount();
        $adsData=$ads->getSingleAd($id);
       
        $image = $image->getAdsImages();
        return view('front.ads-categories', compact('adsData', 'image', 'categories', 'text', 'categoryName'));
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

        // $this->validate($request, [
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        //     'price' => 'required',
        // ]);
        Auth::user()->id;


        $data = $request->all();
        $data['slug']=$ads->slugGenerator($data['name'], $data['sub_category_id'], $data['city_id']);
        $data = $ads->checkFeature($data);       
        $data['user_id']  = 1;
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

        return redirect()->route('ads.myads')->with('success', 'City Created Successfully');
    }

    public function myads(array $data) {
        
        $adsData = $this->loadMyAdList();
        $image=$this->loadImageList();

        return view('front.ads.myads', compact('adsData', 'image'));
    }

    public function addComment(Request $request){
        
    }
}
