<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Product;
use App\Models\EditPage;
use App\Models\PSGCProvince;
use App\Models\PSGCTowns;
use App\Models\PSGCBarangays;

class DesignerController extends Controller
{
    //
    public function index(Request $request)
    {   
        $background = Background::all();
        $exclusive = Product::where('product_type', 'Exclusive')->get();
        $normal = Product::where('product_type', 'Special')->limit(10)->get();

        
        $province = PSGCProvince::all();

        //DESIGNER QUERY
        $menu_logo = EditPage::where('section_sub_part', 'menu_logo')->first();
        $login_logo = EditPage::where('section_sub_part', 'login_logo')->first();
        $banner_sub_title = EditPage::where('section_sub_part', 'banner_sub_title')->first();
        $banner_title = EditPage::where('section_sub_part', 'banner_title')->first();
        $banner_body = EditPage::where('section_sub_part', 'banner_body')->first();
        $banner_image = EditPage::where('section_sub_part', 'banner_image')->first();
        $banner_image_overlay = EditPage::where('section_sub_part', 'banner_image_overlay')->first();
        $exclusive_item_title = EditPage::where('section_sub_part', 'exclusive_item_title')->first();
        $exclusive_item_sub_title = EditPage::where('section_sub_part', 'exclusive_item_sub_title')->first();
        $about_title = EditPage::where('section_sub_part', 'about_title')->first();
        $about_sub_title = EditPage::where('section_sub_part', 'about_sub_title')->first();
        $about_body = EditPage::where('section_sub_part', 'about_body')->first();
        $about_logo = EditPage::where('section_sub_part', 'about_logo')->first();
        $history_title = EditPage::where('section_sub_part', 'history_title')->first();
        $history_sub_title = EditPage::where('section_sub_part', 'history_sub_title')->first();
        $history_sub_h_title = EditPage::where('section_sub_part', 'history_sub_h_title')->first();
        $history_body = EditPage::where('section_sub_part', 'history_body')->first();
        $history_logo = EditPage::where('section_sub_part', 'history_logo')->first();
        $food_title = EditPage::where('section_sub_part', 'food_title')->first();
        $food_logo = EditPage::where('section_sub_part', 'food_logo')->first();
        $food_menu_part_title = EditPage::where('section_sub_part', 'food_menu_part_title')->first();
        $food_menu_part_sub_title = EditPage::where('section_sub_part', 'food_menu_part_sub_title')->first();
        $menu_title = EditPage::where('section_sub_part', 'menu_title')->first();
        $contact_us_title = EditPage::where('section_sub_part', 'contact_us_title')->first();
        $contact_us_address = EditPage::where('section_sub_part', 'contact_us_address')->first();
        $contact_us_phone_no = EditPage::where('section_sub_part', 'contact_us_phone_no')->first();
        $contact_us_email = EditPage::where('section_sub_part', 'contact_us_email')->first();
        $newsletter_title = EditPage::where('section_sub_part', 'newsletter_title')->first();
        $newsletter_psalm = EditPage::where('section_sub_part', 'newsletter_psalm')->first();
        $newsletter_psalm_body = EditPage::where('section_sub_part', 'newsletter_psalm_body')->first();
        $sidebar_logo_1 = EditPage::where('section_sub_part', 'sidebar_logo_1')->first();
        $sidebar_logo_2 = EditPage::where('section_sub_part', 'sidebar_logo_2')->first();
        $video_part = EditPage::where('section_sub_part', 'video_part')->first();
        $blog_title = EditPage::where('section_sub_part', 'blog_title')->first();
        $blog_sub_title = EditPage::where('section_sub_part', 'blog_sub_title')->first();

        $array = array(
            'menu_logo'=> $menu_logo,
            'login_logo'=> $login_logo,
            'banner_title'=> $banner_title,
            'banner_sub_title'=> $banner_sub_title,
            'banner_body'=> $banner_body,
            'banner_image'=> $banner_image,
            'banner_image_overlay'=> $banner_image_overlay,
            'exclusive_item_title'=> $exclusive_item_title,
            'exclusive_item_sub_title'=> $exclusive_item_sub_title,
            'about_title'=> $about_title,
            'about_sub_title'=> $about_sub_title,
            'about_body'=> $about_body,
            'about_logo'=> $about_logo,
            'history_title'=> $history_title,
            'history_sub_title'=> $history_sub_title,
            'history_sub_h_title'=> $history_sub_h_title,
            'history_body'=> $history_body,
            'history_logo'=> $history_logo,
            'food_title'=> $food_title,
            'food_logo'=> $food_logo,
            'food_menu_part_title'=> $food_menu_part_title,
            'food_menu_part_sub_title'=> $food_menu_part_sub_title,
            'menu_title'=> $menu_title,
            'contact_us_title'=> $contact_us_title,
            'contact_us_address'=> $contact_us_address,
            'contact_us_phone_no'=> $contact_us_phone_no,
            'contact_us_email'=> $contact_us_email,
            'newsletter_title'=> $newsletter_title,
            'newsletter_psalm'=> $newsletter_psalm,
            'newsletter_psalm_body'=> $newsletter_psalm_body,
            'sidebar_logo_1'=> $sidebar_logo_1,
            'sidebar_logo_2'=> $sidebar_logo_1,
            'video_part'=> $video_part,
            'blog_title'=> $blog_title,
            'blog_sub_title'=> $blog_sub_title,
        );

        // return$array['sidebar_logo_1']->section_image;
        return view('designer.index',compact('exclusive','normal','background','array','province'));
    }

    public function update($id,$type,Request $request)
    {  
        if($type == "image"){
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img/'), $imageName);
         
            } else {
                return back()->withErrors('No image uploaded.');
            }

            EditPage::where('section_sub_part', $id)
            ->where('section_type', $type)
            ->update([
                'section_image' => $imageName,
            ]);
            
            return 'Success';
        } 
        elseif($type == "video"){
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $videoName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img/'), $videoName);
         
            } else {
                return back()->withErrors('No image uploaded.');
            }

            EditPage::where('section_sub_part', $id)
            ->where('section_type', $type)
            ->update([
                'section_video' => $videoName,
            ]);
            
            return 'Success';
        }  
        else{
            EditPage::where('section_sub_part', $id)
            ->where('section_type', $type)
            ->update([
                'section_text' => $request->text,
            ]);
            
            return 'Success1';
        }
  
    }


}
