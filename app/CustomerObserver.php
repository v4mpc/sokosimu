<?php

namespace App\Observers;

use App\Customer;

class CustomerObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User  $customer
     * @return void
     */
    public function creating(Customer $customer)
    {
        //
        $customer->api_token=bin2hex(openssl_random_pseudo_bytes(30));
    }

 
}