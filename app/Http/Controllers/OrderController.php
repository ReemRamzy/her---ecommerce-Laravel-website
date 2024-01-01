<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Order;
use App\OrderItem;
use App\Item;
Use App\User;


class OrderController extends Controller
{
    public function show(Order $orderid) {

       // $id=DB::table('orders')->find($id);
        $userid = Auth::id();
       $orderid = DB::table('orders')->where('user_id' , $userid)->value('id');

        $data = DB::table('order_items')
        ->where('order_items.order_id' , $orderid )
        ->join('items' , 'order_items.item_id' , '=' , 'items.id' )
        ->get(['order_items.quantity' , 'order_items.id' , 'items.title' , 'items.price' , 'items.image']);


        $subtotal = array(); ;
        foreach($data as $d) {
           $subtotal[] = $d->price  * $d->quantity;
        }

        $st = array_sum($subtotal);

            return view('cart',compact('orderid', 'userid','data','st'));

        }

        public function storeOrder(Request $request) {

            $order = new Order;

            $order->user_id = Auth::id();

            $order->save();



            $item_id = $request->input('item_id');
            $item_qty = $request->input('item_qty');


            $cart = new OrderItem;

            $cart->quantity = $item_qty;

            $orderid = DB::table('orders')->where('user_id' , Auth::id())->value('id');

            $cart->order_id = $orderid ;

           // $item = Item::find($id);

            $cart->item_id = $item_id;

            $cart->save();


            return response()->json(['status' =>"added to cart"]);
        }

        public function destroy($id) {
            DB::table('order_items')->where('id', $id)->delete();

            return redirect()->back();
        }


        public function cartcount() {

            $userid = Auth::id();
            $orderid = DB::table('orders')->where('user_id' , $userid)->value('id');
            $cartcount = OrderItem::where('order_id', $orderid)->count();

            return response()->json(['count'=>$cartcount]);


        }
    }


       // $orderItems = OrderItem::all();


        //$array = get_object_vars($orderitemsid->item_id);



   //$orderitemsid = DB::select('select * from order_items where order_id = ?',  [$orderid]);
      // $qty = DB::table('order_items')->where('order_id' , $orderid)->value('quantity');

       // $idsasint = array();
       // $qty = array();





          //  $idvalues =  array_values($idsasint);
          //  $qtyvalues = array_values($qty);



            //$qty  = DB::select('select quantity from order_items where item_id = ?',  [$idvalues]);
           // dump($qty);


          // $models = Item::findMany($idvalues);


           // $models += array( 'quantity' => $qtyvalues) ;


         //  unset($models);
         //   dump($itemsofid);
          // dd(var_dump( $itemsofid));




        //////////*******************/////////////
      //$itemid = DB::table('order_items')->where('order_id', $orderid )->value('item_id');


     // $itemid = DB::table('order_items')->where('order_id', $orderid )->value('item_id');


    // $allorderitems = DB::table('order_items')->where('order_id', $orderid )->get();

     // $orderitems = DB::table('order_items')->where('order_id', $orderid )->value('item_id');

     //$orderitems = DB::table('order_items')->where('order_id', $orderid )->value('item_id');

  // $allorderitems = OrderItem::value('item_id');



 //  $orderitemsidsecond = array (
   // "alltheitems" => DB::select('select item_id from order_items where order_id = ?',  [$orderid])

   //);

//$itemsids = array_values($orderitemsid);


//$data=Array(); //associative array

      //simple array

     // foreach($orderitemsid as $id)
    //  {
      //  $simple_array = array();

       //     $simple_array[]=$id['item_id'];
     //       dd($simple_array);
    //  }

 //$items = Item::findMany( $ids );



 //  foreach ($orderitemsid as $orderitem) {

  //  $itemsid= array_values(
     //   $orderitem
//);

  // $test = DB::select('select * from items where id = ?',  [$orderitem->item_id]);



 //  }






   //$titles = DB::select('SELECT title FROM `items` WHERE id=? ' , [$orderitemsid]);





   //dd($orderitemsid);

     // $itemid = [];
  // ->groupBy('id')->get();


  // $itemid[] =  $allorderitems->attributes ;













