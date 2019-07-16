<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Samsung Galaxy S10+',
           'description' => 'The powerhouse. A totally reimagined interface and heightened intelligence. More immersion, more sophistication and more endurance make Samsung Galaxy S10+ the superpower of choice for the unstoppable.',
           'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS7snamTAFOK1F9m1o1D2zKes2Ke0-9k84H_x7nsmjAJ6-BL7-UFeM&usqp=CAc',
           'price' => 699.99
        ]);
 
        DB::table('products')->insert([
            'name' => 'Huawei P30 Pro',
            'description' => 'Huawei P30 Pro comes with a 6.47-inch touchscreen display with a resolution of 1080x2340 pixels and an aspect ratio of 19.5:9. Huawei P30 Pro is powered by a 2.6GHz octa-core HiSilicon Kirin 980 processor that features 2 cores clocked at 2.6GHz, 2 cores clocked at 1.92GHz and 4 cores clocked at 1.8GHz. It comes with 8GB of RAM. The Huawei P30 Pro runs Android 9 and is powered by a 4,200mAh battery. The Huawei P30 Pro supports wireless charging, as well as proprietary fast charging.',
            'photo' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRhTDPV5fDFPRm5mPuQXymrSdBJfk8QTR59FuYdg2qHVdpDQC2ouEk&usqp=CAc',
            'price' => 830.00
        ]);
		
         DB::table('products')->insert([
            'name' => 'Samsung Galaxy Note9',
            'description' => 'Galaxy Note has always put powerful technology in the hands of those who demand more. Now, the Galaxy Note9 surpasses even these high expectations, focusing on what matters most in todays always-on, mobile world.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRH8SPTLu7QVTQ1jgabx_oxnNnQBD3MeP_T9GNctSSwTxjY4URLTA&usqp=CAc',
            'price' => 699.99
        ]);
		
        DB::table('products')->insert([
            'name' => 'Google Pixel 3 XL',
            'description' => 'Meet the Google Pixel 3 XL. Capture the perfect shot every time, get things done with the Google Assistant, enjoy an all-day battery, and more.',
            'photo' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQcm-k-Ql3gdf95I1ySpC-y0jOUVaCdWqsZ9q6jksgFNYMz_pxrTQ&usqp=CAc',
            'price' => 699.00
        ]);
 
        DB::table('products')->insert([
            'name' => 'OnePlus 6T',
            'description' => 'Unlock your OnePlus 6T with a fast in-display fingerprint sensor. Experience a big Optic AMOLED display for true immersion through a wide screen-to-body ratio, beautifully slim cut-out, and more. Nail every detail night or day with Optical Image Stabilization (OIS) and Nightscape feature. Photos look more dramatic thanks to Studio Lighting and an industry-leading camera sensor for better pictures. Hardware and software work together for an experience that is consistently fast and smooth.',
            'photo' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSyBNUTQTYDOaNhDFVtjzKyw_V4CveBfXEKcwv-2AnZvqUvJ9WlRQ&usqp=CAc',
            'price' => 579.00
        ]);
    }
}
