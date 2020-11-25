<?php

namespace App\Observers;

use App\Shop;
use App\Mail\ShopActivatedEmail;
use Illuminate\Support\Facades\Mail;

class ShopObserver
{
    /**
     * Handle the shop "created" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "updated" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function updated(Shop $shop)
    {
        // check if active column is chenged from previous state
        if($shop->getOriginal('is_active') == false && $shop->is_active == true){
            //send mail to seller
            Mail::to($shop->owner)->send(new ShopActivatedEmail($shop));
            //change the role of seller from customer to seller
            $shop->owner->setRole('seller');
        }else{
            // dd('shop change to inactive');
        }

    }

    /**
     * Handle the shop "deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "restored" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "force deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
