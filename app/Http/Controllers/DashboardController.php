<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\User;
use App\Product;
use App\Customer;
use App\Category;

class DashboardController extends Controller
{
    public function index()
    {

        // $chart = Charts::multi('bar', 'material')
        //     // Setup the chart settings
        //     ->title("My Cool Chart")
        //     // A dimension of 0 means it will take 100% of the space
        //     ->dimensions(0, 400) // Width x Height
        //     // This defines a preset of colors already done:)
        //     ->template("material")
        //     // You could always set them manually
        //     // ->colors(['#2196F3', '#F44336', '#FFC107'])
        //     // Setup the diferent datasets (this is a multi chart)
        //     ->dataset('Element 1', [5,20,100])
        //     ->dataset('Element 2', [15,30,80])
        //     ->dataset('Element 3', [25,10,40])
        //     // Setup what the values mean
        //     ->labels(['One', 'Two', 'Three']);
        $ProductCount=array();
        $CustomerCount=array();
        $productCount=count(Product::all());
        $customerCount=count(Customer::all());
        $categoryCount=count(Category::all());
        for($month=1; $month<=12; $month++){
            $ProductCount[]=count(Product::whereYear('created_at','2018')
            ->whereMonth('created_at', '=', $month)
            ->get());

            $CustomerCount[]=count(Customer::whereYear('created_at','2018')
            ->whereMonth('created_at', '=', $month)
            ->get());
        }


        $chart=Charts::multi('line', 'highcharts')
        ->title('Products Orders and Android User Per Month')
        ->elementLabel('Total')
        ->colors(['#ff66ff', '#00ccff','#33cc33'])
        ->labels(['January', 'February', 'March', 'April', 'May','June', 'July','August','September','October','November','December'])
        ->dataset('Products', $ProductCount)
        ->dataset('Orders',  [1, 3, 4, 3, 3, 5, 4,  4, 3, 3, 5, 4])   
        ->dataset('Android Users', $CustomerCount);
       
    

//dd($productCount);
        
        return view('dashboard')->with('chart',$chart)->with('productCount',$productCount)->with('customerCount',$customerCount)->with('categoryCount',$categoryCount);
        
    }
}
