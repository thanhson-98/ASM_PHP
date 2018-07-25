<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        DB::table('product')->insert([
            [
                'id'=>1,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ],
            [
                'id'=>2,
                'name'=>'cơm tấm',
                'description'=>'cơm tấm ngon quá trời',
                'price'=>50000,
                'image'=>'https://images.foody.vn/res/g18/171230/prof/s576x330/foody-mobile-cach-uop-suong-nuong-338-635790517139650245.jpg'
            ],
            [
                'id'=>3,
                'name'=>'bánh đúc',
                'description'=>'bánh đúc ngon quá trời',
                'price'=>50000,
                'image'=>'https://dwbxi9io9o7ce.cloudfront.net/images/20170925_071822_830240_banhduc3_qaaf.max-800x800.jpg'
            ],
            [
                'id'=>4,
                'name'=>'bánh chocolate',
                'description'=>'bánh chocolate ngon quá trời',
                'price'=>50000,
                'image'=>'http://7monngonmoingay.info/wp-content/uploads/2015/05/cach-lam-banh-brownie-chocolate-dua-bang-lo-nuong.jpg'
            ],
            [
                'id'=>5,
                'name'=>'bánh kitkat',
                'description'=>'bánh kitkat ngon quá trời',
                'price'=>30000,
                'image'=>'http://cdn.monnhatban.com/system/images/W1siZiIsIjIwMTUvMDgvMTkvMTMvMDkvMTgvNjM3L2tpdGthdCAzLmpwZyJdLFsicCIsInRodW1iIiwiNzAweDQ2Nlx1MDAzZSJdXQ/kitkat%203.jpg?sha=dde13d99bda6046e'
            ],
            [
                'id'=>6,
                'name'=>'kẹo cudo',
                'description'=>'kẹo cudo ngon quá trời',
                'price'=>20000,
                'image'=>'http://static.ekipvn.com/Thumbnail.ashx?img=/sites/16418/data/images/2017/11/1706159800gr2.jpeg&width=300&height=300'
            ],
            [
                'id'=>7,
                'name'=>'kẹo cá sấu',
                'description'=>'kẹo cá sấu ngon quá trời',
                'price'=>27000,
                'image'=>'http://antamshop.com/data/Product/Haribo_Croco_Pik_300g_02_1372740042.jpg'
            ],
            [
                'id'=>8,
                'name'=>'bánh gato',
                'description'=>'bánh gato ngon quá trời',
                'price'=>99000,
                'image'=>'https://thucthan.com/media/2018/02/cach-lam-banh-gato/cach-lam-banh-gato.jpg'
            ],
            [
                'id'=>9,
                'name'=>'bánh gato 2',
                'description'=>'bánh gato2 ngon quá trời',
                'price'=>70000,
                'image'=>'https://images.foody.vn/res/g8/71861/prof/s576x330/foody-mobile-banh-gato-vinh-quang-ha-noi-140508100212.jpg'
            ],
            [
                'id'=>10,
                'name'=>'bánh cáy',
                'description'=>'bánh cáy ngon quá trời',
                'price'=>50000,
                'image'=>'http://sohanews.sohacdn.com/2016/photo-1-1479007195827.jpg'
            ],
            [
                'id'=>11,
                'name'=>'bánh hamburger',
                'description'=>'bánh hamburger ngon quá trời',
                'price'=>50000,
                'image'=>'http://www.monngon.tv/uploads/images/2017/06/26/7210c4294d10ad2375fccf9e305f86fa-lam-banh-hamburger-sl.jpg'
            ],
            [
                'id'=>12,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ],
            [
                'id'=>13,
                'name'=>'bánh cuốn',
                'description'=>'bánh cuốn ngon quá trời',
                'price'=>10000,
                'image'=>'http://lambanh365.com/wp-content/uploads/2015/04/C%C3%A1ch-l%C3%A0m-b%C3%A1nh-cu%E1%BB%91n-b%E1%BA%B1ng-n%E1%BB%93i-h%C6%A1i-th%C6%A1m-ngon-11.jpg'
            ],
            [
                'id'=>14,
                'name'=>'bún chả',
                'description'=>'bún chả ngon quá trời',
                'price'=>10000,
                'image'=>'https://images.foody.vn/res/g25/245415/prof/s576x330/foody-mobile-bc-hg-jpg-699-636245617106542261.jpg'
            ],
            [
                'id'=>15,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ],
            [
                'id'=>16,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ],
            [
                'id'=>17,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ],
            [
                'id'=>18,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ],
            [
                'id'=>19,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ],
            [
                'id'=>20,
                'name'=>'bánh canh cua',
                'description'=>'bánh canh cua ngon quá trời',
                'price'=>50000,
                'image'=>'http://nhahanghuongsen.cdn.vccloud.vn/wp-content/uploads/2015/08/banh-canh-cua-dong.jpg'
            ]
        ]);
    }
}
