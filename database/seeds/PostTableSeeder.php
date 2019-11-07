<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {   
            $catergory1 = Category::create([
                'name'=>'Barbers'
            ]);
            $catergory2 = Category::create([
                'name'=>'Meat Shops'
            ]);
            $catergory3 = Category::create([
                'name'=>'Events'
            ]);

        $post1 = Post::create([
                'title'=> 'Platinum Barbers',
                'description'=>'Lake Mary Blvd',
                'Content'=>'Address: 6002, 3005 W Lake Mary Blvd # 118, Lake Mary, FL 32746',
                'category_id'=> $catergory1->id,
                'image'=>'posts/1.jpg'
        ]);
        $post2 = Post::create([
                'title'=> 'Casselberry Meat & produce',
                'description'=>'US Hwy 17 92',
                'Content'=>'Address: 2655 S US Hwy 17 92, Casselberry, FL 32707',
                'category_id'=> $catergory2->id,
                'image'=>'posts/2.png'
        ]);
        $post3 = Post::create([
                'title'=> 'Platinum Barbers',
                'description'=>'Back To School Event',
                'Content'=>'Free haircuts to the 1st 50 students....',
                'category_id'=> $catergory3->id,
                'image'=>'posts/3.jpg'
        ]);

        $tag1 = Tag::create([
            'name'=>'Clean'
        ]);
        $tag2 = Tag::create([
            'name'=>'Professional'
        ]);
        $tag3 = Tag::create([
            'name'=>'Good Prices'
        ]);
        $post1->tags()->attach([$tag2->id,$tag3->id]);
        $post2->tags()->attach([$tag1->id,$tag3->id]);
        $post3->tags()->attach([$tag3->id,$tag1->id]);
    }
}
