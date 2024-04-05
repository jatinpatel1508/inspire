<?php
namespace Atpl\Inspire\Controllers;

use Illuminate\Http\Request;
use Atpl\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        //return $quote;
        return view('inspire::index', compact('quote'));
    }
}
