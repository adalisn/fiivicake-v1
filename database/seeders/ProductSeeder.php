<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

        // $product = new Product();
        // $product->category_id = 1;
        // $product->name = 'Kastengel';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        // $product = new Product();
        // $product->category_id = 1;
        // $product->name = 'kue bulan salju';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        // $product = new Product();
        // $product->category_id = 1;
        // $product->name = 'kukis';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        $product = new Product();
        $product->category_id = 2;
        $product->name = 'kue soes';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        // $product = new Product();
        // $product->category_id = 2;
        // $product->name = 'pie susu';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // // $product->image = $product->slug.'.jpg';
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        $product = new Product();
        $product->category_id = 2;
        $product->name = 'pie coklat';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        $product = new Product();
        $product->category_id = 2;
        $product->name = 'Lemper';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        // $product = new Product();
        // $product->category_id = 2;
        // $product->name = 'lapis legit';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        // $product = new Product();
        // $product->category_id = 2;
        // $product->name = 'kue lapis';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        $product = new Product();
        $product->category_id = 2;
        $product->name = 'kue lumpur';
        $product->slug = Str::slug($product->name);
        $product->price = 3500;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        // $product = new Product();
        // $product->category_id = 3;
        // $product->name = 'martabak telor';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        // $product = new Product();
        // $product->category_id = 3;
        // $product->name = 'martabak tahu';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        // $product = new Product();
        // $product->category_id = 3;
        // $product->name = 'tahu isi';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        $product = new Product();
        $product->category_id = 3;
        $product->name = 'Pastel';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        $product = new Product();
        $product->category_id = 3;
        $product->name = 'Pastel kerucut';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        $product = new Product();
        $product->category_id = 3;
        $product->name = 'risol mayones';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        $product = new Product();
        $product->category_id = 3;
        $product->name = 'Kroket';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        $product = new Product();
        $product->category_id = 3;
        $product->name = 'sosis solo';
        $product->slug = Str::slug($product->name);
        $product->price = 4000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        $product = new Product();
        $product->category_id = 4;
        $product->name = 'Korean Garlic Bread';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';;
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();
        
        // $product = new Product();
        // $product->category_id = 4;
        // $product->name = 'roti keju';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();
        
        // $product = new Product();
        // $product->category_id = 4;
        // $product->name = 'roti sosis';
        // $product->slug = Str::slug($product->name);
        // $product->price = 3000;
        // $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        // $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        // $product->save();

        $product = new Product();
        $product->category_id = 4;
        $product->name = 'Roti coklat';
        $product->slug = Str::slug($product->name);
        $product->price = 3000;
        $product->image = $product->slug.'.jpg';
        $product->body = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint asperiores autem voluptatum quae aut facere nemo esse aperiam, aliquid cum reprehenderit? Sit mollitia neque quidem saepe ipsum dolore porro, sapiente officia perferendis unde dicta iure. Eius, non?</p><p> Cum dolorum reprehenderit quas eum voluptatem consequuntur adipisci ratione, asperiores accusamus consequatur vel sit repellendus alias optio commodi voluptatibus aliquam quam doloribus tenetur eos, cupiditate odio. Cumque minima maiores tenetur quasi deserunt, distinctio illo eligendi autem doloribus fugit,</p><p> fuga vitae dolore sit iste optio mollitia quaerat aliquid officiis omnis? Praesentium, velit nemo possimus ea sequi, cupiditate quisquam, consequatur rerum voluptates cum excepturi.</p>';
        $product->excerpt = Str::of(strip_tags($product->body))->limit(20);
        $product->save();

    }
}