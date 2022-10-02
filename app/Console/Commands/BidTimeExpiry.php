<?php

namespace App\Console\Commands;

use App\Mail\BidSuccessAdminNotify;
use App\Mail\BidSuccessCarOwner;
use App\Mail\BidSuccessCustomer;
use App\Models\Car;
use App\Models\CarBid;
use App\Models\CarPayment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class BidTimeExpiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bids:expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $cars = Car::where('bidding_time_expiry', '<', Carbon::now())->where('status', 'published')->get();
        $timenows = time();
        $checknums = "1234567898746351937463790";
        $checkstrings = "QWERTYUIOPLKJHGFDSAZXCVBNMmanskqpwolesurte191827273jkskalqKNJAHSGETWIOWKSNXJNEUDNEKDKSMKIDNUENDNXKSKEJNEJHCBRFGEWVJHBKWJEBFRNKWJENFECKWLERKJFNRKEHBJWEiwjWSIWMSWISWQOQOAWSAMJENEJEEDEWSSRFRFTHUJOKMNZBXVCX";
        $checktimelengths = 6;
        $checksnumlengths = 6;
        $checkstringlength = 90;
        $randnums = substr(str_shuffle($timenows), 0, $checktimelengths);
        $randstrings = substr(str_shuffle($checknums), 0, $checksnumlengths);
        $randcheckstrings = substr(str_shuffle($checkstrings), 0, $checkstringlength);
        $totalstrings = str_shuffle($randcheckstrings . "" . $randnums . "" . $randstrings);
        if ($cars->count() > 0) {
            foreach ($cars as $car) {
                $maxbid = CarBid::where('car_id', $car->id)->orderBy('bidding_price', 'DESC')->first();
                if ($maxbid) {
                    $maxbid->award_status = "1";
                    $maxbid->save();
                    $new = new CarPayment;
                    $new->car_id = $car->id;
                    $new->bid_user_id = $maxbid->bid_user_id;
                    $new->car_owner_id = $car->car_owner_id;
                    $new->bid_id = $maxbid->id;
                    $new->total_price = $maxbid->bidding_price;
                    $new->admin_amount = ceil(($maxbid->bidding_price) * 0.1);
                    $new->owner_amount = ceil(($maxbid->bidding_price) * 0.9);
                    $new->payment_status = "pending";
                    $new->slug = $totalstrings;
                    $new->save();


                    $car->status = "awarded";
                    $car->user_awarded_id =$maxbid->bid_user_id;
                    $car->save();

                    $messageone = "Congratulations, Your bid has been selected for the car ". $car->car_name. " registration_number " .$car->reg_number." You are required to pay KES: " .$maxbid->bidding_price. " and submit the details for your payment via the dashboard. Log In for more details";
                    $receiverone = $maxbid->carbidcustomer->email;
                    $senderone="smartmarcars@gmail.com";

                    $messagetwo = "Car has been allocated tot he highest bidder. Hello and welcome, this is to notify you that your car ". $car->car_name. " registration_number" .$car->reg_number." has been allocatde to  KES:" .$maxbid->bidding_price. "who is required to pay this amount and submit the details to you for approval via the dashboard. Please note that this 10% of the payments done will be withheld as charges fee";
                    $receivertwo = $car->carowner->email;
                    $sendertwo ="smartmarcars@gmail.com";

                    $messagethree = "Please note that ". $car->car_name. " registration_number" .$car->reg_number." has been allocated to ".$maxbid->carbidcustomer->name. " Phone Number " .$maxbid->carbidcustomer->phone_number. " at KES:" .$maxbid->bidding_price. " You will be notified once payments have been done for approval.";
                    $receiverthree = "endlesscript@gmail.com";
                    $senderthree="smartmarcars@gmail.com";

                    Mail::to($receiverone)->send(new BidSuccessCustomer($messageone, $receiverone, $senderone));
                    Mail::to($receivertwo)->send(new BidSuccessCarOwner($messagetwo, $receivertwo, $sendertwo));
                    Mail::to($receiverthree)->send(new BidSuccessAdminNotify($messagethree, $receiverthree, $senderthree));

                }
            }
            info("car has been awareded to user " .$maxbid->carbidcustomer->name. " Phone Number ".$maxbid->carbidcustomer->phone_number. " at KES:" .$maxbid->bidding_price);
        }else{
            info("no new car available for now as at " . Carbon::now());
        }
    }
}


// lore
