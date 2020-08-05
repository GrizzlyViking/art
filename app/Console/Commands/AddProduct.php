<?php

namespace App\Console\Commands;

use App\Model\Price;
use App\Model\Product;
use Illuminate\Console\Command;

class AddProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:add {title} {amount} {--currency=DKK} {--image=} {--description=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a product';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $price = Price::create([
            'currency_code' => $this->option('currency'),
            'amount' => $this->argument('amount')
        ]);

        /** @var Product $product */
        $product = Product::updateOrCreate(
            [
                'title' => $this->argument('title'),
            ],
            [
                'title' => $this->argument('title'),
                'description' => $this->option('description'),
                'price_id' => $price->id
            ]
        );

        if ($this->hasOption('image')) {
            $product
                ->addMedia($this->option('image'))
                ->toMediaCollection('painting');
        }

        return 0;
    }
}
