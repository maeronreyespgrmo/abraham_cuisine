<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tbl_edit_pages')->insert([
            //HEADER PART
            [
                'section_part' => 'header',
                'section_sub_part' => 'menu_logo',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'logo.png',
                'section_video' => 'logo.png',
            ],
            [
                'section_part' => 'header',
                'section_sub_part' => 'login_logo',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'login.png',
                'section_video' => 'logo.png',
            ],
            //BANNER PART
            [
                'section_part' => 'banner_part',
                'section_sub_part' => 'banner_title',
                'section_type' => 'text',
                'section_text' => 'Crafted with love, served with pride',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'banner_part',
                'section_sub_part' => 'banner_sub_title',
                'section_type' => 'text',
                'section_text' => 'ENJOY DELICIOUS FOOD IN YOUR HEALTHY LIFE.',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'banner_part',
                'section_sub_part' => 'banner_body',
                'section_type' => 'text',
                'section_text' => 'Taste the essence of Filipino heritage with every bite at Abrahams Cuisine, where love and tradition are always on the menu.Abrahams Cuisine: A celebration of Filipino culinary culture, crafted with passion and served with warmth.',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'banner_part',
                'section_sub_part' => 'banner_image',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'banner_bg.png',
                'section_video' => '',
            ],
            [
                'section_part' => 'banner_part',
                'section_sub_part' => 'banner_image_overlay',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'banner_overlay.png',
                'section_video' => '',
            ],
            //BLOG PART
            [
                'section_part' => 'blog_part',
                'section_sub_part' => 'blog_title',
                'section_type' => 'text',
                'section_text' => 'Popular Dishes',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'blog_part',
                'section_sub_part' => 'blog_sub_title',
                'section_type' => 'text',
                'section_text' => 'Our Exclusive Items',
                'section_image' => '',
                'section_video' => '',
            ],
            //EXCLUSIVE PART
            [
                'section_part' => 'exclusive_item_part',
                'section_sub_part' => 'exclusive_item_title',
                'section_type' => 'text',
                'section_text' => 'Taste the essence of Filipino heritage with every bite at Abrahams Cuisine, where love and tradition are always on the menu.Abrahams Cuisine: A celebration of Filipino culinary culture, crafted with passion and served with warmth.',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'exclusive_item_part',
                'section_sub_part' => 'exclusive_item_sub_title',
                'section_type' => 'text',
                'section_text' => 'Taste the essence of Filipino heritage with every bite at Abrahams Cuisine, where love and tradition are always on the menu.Abrahams Cuisine: A celebration of Filipino culinary culture, crafted with passion and served with warmth.',
                'section_image' => '',
                'section_video' => '',
            ],
            //ABOUT PART
            [
                'section_part' => 'about_part',
                'section_sub_part' => 'about_title',
                'section_type' => 'text',
                'section_text' => 'Party Trays',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'about_part',
                'section_sub_part' => 'about_sub_title',
                'section_type' => 'text',
                'section_text' => 'Feed the crowd effortlessly with party trays that make any occasion special.',
                'section_image' => '',
                'section_video' => '',
            ],                 
            [
                'section_part' => 'about_part',
                'section_sub_part' => 'about_body',
                'section_type' => 'text',
                'section_text' => 'Ano pang hinihintay n’yo? TARA NA at Patuloy na Tikman ang Sarap ng Pagkaing Abrahams Cuisine! SWAK PANG MASA, SWAK PAMPAMILYA!🤤 ✅Pagkaing Swak sa buong pamilyat barkada ✅Swak sa budget ✅Group Diners ✅Spacious Facilities',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'about_part',
                'section_sub_part' => 'about_logo',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'about 1.png',
                'section_video' => '',
            ],                
            //HISTORY PART
            [
                'section_part' => 'history_part',
                'section_sub_part' => 'history_title',
                'section_type' => 'text',
                'section_text' => 'Our History',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'history_part',
                'section_sub_part' => 'history_sub_title',
                'section_type' => 'text',
                'section_text' => 'One table, many hands, endless memories.',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'history_part',
                'section_sub_part' => 'history_sub_h_title',
                'section_type' => 'text',
                'section_text' => 'Satisfying people hunger for simple pleasures',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'history_part',
                'section_sub_part' => 'history_body',
                'section_type' => 'text',
                'section_text' => 'Our story began with a love for Filipino cuisine and the desire to share our heritage through the unique experience of boodle fights. Inspired by the traditional Filipino communal feast, we created a space where friends and families come together, dining side-by-side, and sharing meals served on banana leaves.',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'history_part',
                'section_sub_part' => 'history_logo',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'about.png',
                'section_video' => '',
            ],
            //FOOD MENU
            [
                'section_part' => 'food_menu',
                'section_sub_part' => 'food_title',
                'section_type' => 'text',
                'section_text' => 'Food Menu',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'food_menu',
                'section_sub_part' => 'food_logo',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'logo.png',
                'section_video' => '',
            ],
            //FOOD MENU PART
            [
                'section_part' => 'food_menu_part',
                'section_sub_part' => 'food_menu_part_title',
                'section_type' => 'text',
                'section_text' => 'Popular Menu',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'food_menu_part',
                'section_sub_part' => 'food_menu_part_sub_title',
                'section_type' => 'text',
                'section_text' => 'Delicious Food Menu',
                'section_image' => '',
                'section_video' => '',
            ],
            //MENU PART
            // [
            //     'section_part' => 'menu_part',
            //     'section_sub_part' => 'menu_logo',
            //     'section_type' => 'image',
            //     'section_text' => '',
            //     'section_image' => 'logo.png',
            //     'section_video' => '',
            // ],
            //VIDEO PART
            [
                'section_part' => 'video_part',
                'section_sub_part' => 'video_part',
                'section_type' => 'video',
                'section_text' => '',
                'section_image' => '',
                'section_video' => 'open.mp4',
            ],
            //CONTACT US PART
            [
                'section_part' => 'contact_us_part',
                'section_sub_part' => 'contact_us_title',
                'section_type' => 'text',
                'section_text' => 'Contact us',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'contact_us_part',
                'section_sub_part' => 'contact_us_address',
                'section_type' => 'text',
                'section_text' => ' Address :National Highway Road Brgy. Sampaloc, Pagsanjan, Laguna',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'contact_us_part',
                'section_sub_part' => 'contact_us_phone_no',
                'section_type' => 'text',
                'section_text' => 'Phone :+63 923-513-8732',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'contact_us_part',
                'section_sub_part' => 'contact_us_email',
                'section_type' => 'text',
                'section_text' => 'Email : abramscuisine01@gmail.com',
                'section_image' => '',
                'section_video' => '',
            ],
            //NEWSLETTER PART
            [
                'section_part' => 'newsletter_part',
                'section_sub_part' => 'newsletter_title',
                'section_type' => 'text',
                'section_text' => 'Newsletter',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'newsletter_part',
                'section_sub_part' => 'newsletter_psalm',
                'section_type' => 'text',
                'section_text' => ' Address :National Highway Road Brgy. Sampaloc, Pagsanjan, Laguna',
                'section_image' => '',
                'section_video' => '',
            ],
            [
                'section_part' => 'newsletter_part',
                'section_sub_part' => 'newsletter_psalm_body',
                'section_type' => 'text',
                'section_text' => 'Psalm 34:8 "Taste and see that the LORD is good; blessed is the one who takes refuge in him".',
                'section_image' => '',
                'section_video' => '',
            ],
            //SIDE BACKGROUND
            [
                'section_part' => 'sidebar_part',
                'section_sub_part' => 'sidebar_logo_1',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'about_overlay.png',
                'section_video' => '',
            ],
            [
                'section_part' => 'sidebar_part',
                'section_sub_part' => 'sidebar_logo_2',
                'section_type' => 'image',
                'section_text' => '',
                'section_image' => 'logo.png',
                'section_video' => '',
            ],
        ]);
    }
}
