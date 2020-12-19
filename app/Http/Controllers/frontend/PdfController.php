<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
class PdfController extends Controller
{
    public function makeInvoicePdf($id){
        //return $id;
        $order = Order::where('id', $id)->where('customer_id', Auth::guard('customer')->user()->id)->first();
        if ($order) {
            $this->data['cus_menu'] = 'Order';

            //  $this->data['orders'] = Order_Details::with('product')->where('order_id', $id)->latest()->get();
            $this->data['order'] = Order::with('customerOrders','shippingDetails')->find($id);

            /*$this->data['order_id'] = [
                ''
            ];*/
           // return view('frontend.pdf.invoice',$this->data);
            $customPaper = array(0,0,720,1440);
            PDF::setOptions(['dpi' => 200, 'defaultFont' => 'sans-serif']);
            $pdf = PDF::loadView('frontend.pdf.invoice',$this->data)->setPaper($customPaper,'portrait');
            return $pdf->download('my-invoice.pdf');
        } else {
            return redirect()->back()->with('toast_info', Auth::guard('customer')->user()->name . ". Don't try to be over smart.");
        }
    }
}
