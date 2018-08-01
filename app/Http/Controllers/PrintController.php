<?php

namespace App\Http\Controllers;

//require __DIR__ . '/../../autoload.php';
use App\Http\Controllers\Auth\LoginController;
use App\Order;
use Illuminate\Support\Facades\Log;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view(menu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        //
        $data = $request->get('orderRequest');
        $table_num = $request->get('table_num');
        $comments = $request->get('comments');

        $items = explode(",", $data);

        $order = new Order(array(
            'table_num' => $table_num,
            'order' => $data,
            'comments' => $comments
        ));

        $order -> save();
//        ---------*-*-**-*-*-*-*-*-*-***--*-*--*-**-*-*-*-*-*-*******************---------------------------

        /**
         * Install the printer using USB printing support, and the "Generic / Text Only" driver,
         * then share it (you can use a firewall so that it can only be seen locally).
         *
         * Use a WindowsPrintConnector with the share name to print.
         *
         * Troubleshooting: Fire up a command prompt, and ensure that (if your printer is shared as
         * "Receipt Printer), the following commands work:
         *
         *  echo "Hello World" > testfile
         *  copy testfile "\\%COMPUTERNAME%\Receipt Printer"
         *  del testfile
         */
        try {
            // Enter the share name for your USB printer here
            //$connector = null;
           // $connector = new FilePrintConnector("KONICA");
            $connector = new WindowsPrintConnector("hookah");

            /* Print a "Hello world" receipt" */
            $printer = new Printer($connector);

            date_default_timezone_set('US/Eastern');
            $date = date('l jS \of F Y h:i:s A');

            $printer = new Printer($connector);

            $item_str='';
            foreach ($items as $item){
                $item_str = $item_str."\n".$item;
            }



            $printer ->text("\n\n\nHookah Haven\nOrder no: \n$date\n\n$item_str\n\n\n----End of Order---");

            /* Name of shop */
            $printer -> selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
            $printer -> text("ExampleMart Ltd.\n");
            $printer -> selectPrintMode();
            $printer -> text("Shop No. 42.\n");
            $printer -> feed();

            /* Title of receipt */
            $printer -> setEmphasis(true);
            $printer -> text("SALES INVOICE\n");
            $printer -> setEmphasis(false);

            /* Items */
            $printer -> setJustification(Printer::JUSTIFY_LEFT);
            $printer -> setEmphasis(true);
            //$printer -> text(new item('', '$'));
            $printer -> setEmphasis(false);
            //foreach ($items as $item) {
                $printer -> text($items[1]);
           // }
            $printer -> setEmphasis(true);
            $printer -> text($table_num);
            $printer -> setEmphasis(false);
            $printer -> feed();

            /* Tax and total */
            //$printer -> text($tax);
            $printer -> selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
            //$printer -> text($total);
            $printer -> selectPrintMode();

            /* Footer */
            $printer -> feed(2);
            $printer -> setJustification(Printer::JUSTIFY_CENTER);
            $printer -> text("Thank you for shopping at ExampleMart\n");
            $printer -> text("For trading hours, please visit example.com\n");
            $printer -> feed(2);
            $printer -> text($date . "\n");
            $printer ->feed(5);
            $printer -> cut();

            /* Close printer */
            $printer -> close();



            return redirect('home');
       } catch (Exception $e) {
           echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
       }



//        ---------*-*-**-*-*-*-*-*-*-***--*-*--*-**-*-*-*-*-*-*******************---------------------------
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
