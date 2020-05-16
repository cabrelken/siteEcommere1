<?php
use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'Mangue / passion',
            'slug' => 'mangue-passion',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
            'price' => 6,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.', 
            'category_id' => Category::all()->random()->id    
             ]);

        
         Product::create([
                'name'=> 'Mangue / citron',
                'slug' => 'mangue-citron',
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
                'price' => 6,
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.',      
                'category_id' => Category::all()->random()->id                      
                 ]); 
                 
                 
        Product::create([
            'name'=> 'Mangue / papaye',
            'slug' => 'mangue-papaye',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
            'price' => 6,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.',      
            'category_id' => Category::all()->random()->id  
             ]);

             
        Product::create([
            'name'=> 'Mangue / ananas',
            'slug' => 'mangue-ananas',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
            'price' => 6,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.',      
            'category_id' => Category::all()->random()->id  
             ]);

             
        Product::create([
            'name'=> 'Mangue / orange',
            'slug' => 'mangue-orange',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
            'price' => 6,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.',      
            'category_id' => Category::all()->random()->id  
             ]);

             
        Product::create([
            'name'=> 'Mangue / mandarine',
            'slug' => 'mangue-mandarine',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
            'price' => 6,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.',      
            'category_id' => Category::all()->random()->id  
             ]);

             
        Product::create([
            'name'=> 'Mangue / pasteque',
            'slug' => 'mangue-pasteque',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
            'price' => 6,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.',      
            'category_id' => Category::all()->random()->id  
             ]);

             
        Product::create([
            'name'=> 'Mangue / pamplemousse',
            'slug' => 'mangue-pamplemousse',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla.',
            'price' => 6,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies ut lacus nec volutpat. Duis nibh sem, egestas nec sollicitudin at, tempor rhoncus nulla. Fusce vestibulum sapien at purus pharetra volutpat. Proin non massa velit. Duis et velit sit amet ante finibus posuere a id ante. Integer eget scelerisque diam. Donec tristique vel sapien quis consectetur.',      
            'category_id' => Category::all()->random()->id  
             ]);
    }
}
