<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OD22 𝓥𝓮𝓡𝓸𝓷 𝓝𝓲𝓬𝓪 🌸</title>
  <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style>
    .tooltip {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 140px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 150%;
      left: 50%;
      margin-left: -75px;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }
  </style>

</head>

<body class="antialiased font-primary">
  <div class="bg-home px-8 w-full">
    <div class="
                    py-12
                    flex flex-col
                    justify-between
                    min-h-screen
                    md:max-w-2xl
                    lg:max-w-3xl
                    mx-auto
                ">
      <div>
        <div class="mt-12 text-white text-center">
          <form method="POST" action="index.php">
            <input type="submit" name="send" value="Home" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                " />
          </form>

        </div>
        <form action="mail_handler.php" method="post" class="mt-8 md:flex md:max-w-lg md:mx-auto">
          <div class="relative">
            <input required id="cname" type="text" name="customer_name" placeholder="Customer Name" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " />
            <label for="fname" class="
                                    absolute
                                    text-gray-700
                                    left-8
                                    top-2
                                    font-bold
                                    text-xs
                                    peer-placeholder-shown:top-4
                                    peer-placeholder-shown:font-normal
                                    peer-placeholder-shown:text-base
                                    peer-focus:top-2
                                    peer-focus:font-bold
                                    peer-focus:text-xs
                                    cursor-text
                                    transition-all
                                ">Cx Name</label>
          </div>

          <div class="relative">
            <input required id="tatdate" type="text" name="tat_date" placeholder="TAT Date" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " />
            <label for="tdate" class="
                                    absolute
                                    text-gray-700
                                    left-8
                                    top-2
                                    font-bold
                                    text-xs
                                    peer-placeholder-shown:top-4
                                    peer-placeholder-shown:font-normal
                                    peer-placeholder-shown:text-base
                                    peer-focus:top-2
                                    peer-focus:font-bold
                                    peer-focus:text-xs
                                    cursor-text
                                    transition-all
                                ">DD MMM YY</label>

          </div>
        </form>
      </div>
      <div class="mt-12 text-white text-center">
        <p>Click the "Generate" button to fetch data.</p>
      </div>
      <div class="mt-12 text-white text-center">
        <button onclick="myFunction()" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">
          Generate</button><br>
        <br>

      </div>

      <div>
        <br>
        <hr>



        <br>


        <br>
        <h1>
          <div class="text-center"><b>Current Date and Time: </b></div><br>
          <div class="text-white text-center" id="time"></div>
          <br>
          <div class="text-center"><b>RNR Schedule: + 4 Hours</b></div><br>
          <div class="text-white text-center">
            <div id="4time"></div>
          </div>
          <br>
          <div class="text-center"><b>RNR Schedule: 24 Hours</b></div><br>
          <div class="text-white text-center">
            <div id="24time"></div>
          </div>
          <br>
          <br><br>
          <div class="text-center">
            <button onClick="window.location.href='vhindi.php'" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">Hindi Script</button>
            <button onClick="window.location.href='venglish.php'" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">English Script</button>
            <button onClick="window.location.href='vnotes.php'" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">𝓥 🌸 Notes</button> <br><br>
            <div>
              <button onClick="window.location.href='mw.php'" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">MW Guide</button>
              <button onClick="window.location.href='test.php'" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">Test</button>
              <button onClick="window.location.href='test.php'" class="
                                    mt-4
									bg-pink-800
									text-white
									uppercase
									font-bold
									text-sm text-center
									w-full
									px-8
									h-14
									rounded-full
									md:mt-0 md:rounded-l-none md:w-48
                                ">Test</button> <br> <br>
            </div>
          </div>
      </div>

      <br>
      </h1>

      <br>






      <div class=" text-white text-center">
        <p>Click the <b>"Copy"</b> button to copy respective <b>Notes</b></p>
      </div>
      <br>
      <hr>

      <br>

      <div class=" text-white text-center">
        <p>If the CPD is not breached. Informed the cx to wait till CPD. mark waiting internal mark waiting. 10am.</p>
      </div>
      <br><br>
      <div>
        <p><b>OD: Informed the cx CPD. mark waiting done. cx agreed.</b></p><br>
        <p><b>OD: Informed the cx to wait till CPD. mark waiting done. cx agreed.</b></p><br>
        <p>If the repromise date is not breached. Informed the cx to wait till repromise date. mark waiting internal. 10am timing.</p><br>
        <p><b>OD: Informed the cx to wait till repromise date. mark waiting done. cx agreed.</b></p><br>
        <p><b>OD: informed the cx to wait till the given TAT. mark waiting done. cx agreed.</b></p><br>
      </div>
      <br>
      <hr>
      <br>
      <div>
        <div class=" text-white text-center">
          <p>RNR _1 -------> Customer Waiting</p>
        </div><br>

        <p><b>OD: RNR 1 . call back after 4 hours. mark waiting done.</b></p><br>
        <p><b>OD: RNR 1 . call back after 4 hours. email N/A. mark waiting done.</b></p><br>
      </div>
      <br>

      ###########################################################################
      <div class="text-white text-center">
        <p>Email</p>
      </div>
      <div>
        <p>Update on the order ()</p>
        <br>
        <p>Hi,<br><br>We tried to get in touch with you to discuss the issue about your product with order ID () but couldn't reach you. We’ll try calling you again within 4hours. Meanwhile, please let us know if we can reach you on another number and a convenient time between 9 am and 9 pm by replying to this email.<br><br> We hope to hear from you soon.<br>
          <br>
          <div class="text-white text-center">
          <p><b>{After 5 PM}</b></p>
        </div>
        <p>Update on the order ()</p>
        <br>
        <p>Hi,<br><br>We tried to get in touch with you to discuss the issue about your product with order ID () but couldn't reach you. We’ll try calling you again the next day. Meanwhile, please let us know if we can reach you on another number and a convenient time between 9 am and 9 pm by replying to this email.<br><br> We hope to hear from you soon.<br>
          <br>
        <div class="text-white text-center">
          <p>SMS</p>
        </div><br><br>

        We tried reaching you to discuss your concern about product with order ID () Delay in delivery and have sent you an update to your registered email address. We'll call you again within the next 4hours.
        <br><br>
        <div class="text-white text-center">
          <p><b>{After 5 PM}</b></p>
        </div><br><br>

        We tried reaching you to discuss your concern about product with order ID () Delay in delivery and have sent you an update to your registered email address. We'll call you again the next day.
        <br><br>
        ###########################################################################<br><br>

        <p><b>OD: RNR 1, email and sms sent.</b></p><br>
        <p><b>OD: RNR 1, SMS SENT.</b></p><br>
      </div>
      <br>
      <hr>
      <br>
      <div>
        <div class="text-white text-center">
          <p>RNR _2 -------> Customer Waiting</p>
        </div><br>

        <p><b>OD: RNR 2. mark waiting done till the OTAT.</b></p><br>
        <p><b>OD: RNR 2. mark waiting done till the OTAT + 3 days.</b></p><br>
      </div>
      <br>

      ###########################################################################
      <div class="text-white text-center">
        <p>Email</p>
      </div>
      <div>
        <p>Update on the order ()</p>
        <br>
        <p>Hi,<br><br>We tried calling you on registered contact number but were unable to reach you.
          We are sorry to let you know that your order has been delayed due to some unexpected issues faced by the {seller/couriers}.<br>
          It will now be delivered to you {}.<br>
          To thank you for your patience, the seller/courier service provider will add shipping charges paid for this order as a Gift Card to your Flipkart account.<br><br> We hope to hear from you soon.<br>
          <br>
        <div class="text-white text-center">
          <p>{Large category customers}</p>
        </div>
        <p>
          To thank you for your patience, the seller/courier service provider will also add a Gift Card worth Rs. 500 to your Flipkart account within the next 48 hours.</p>
        <br>
        <div class="text-white text-center">
          <p>SMS</p>
        </div><br><br>

        We tried reaching you today to discuss your concern about your product. We are sorry to let you know that your order has been delayed due to some unexpected issues faced by the {seller/couriers}. It will now be delivered to you {} and also have sent you an update to your registered email address. <br>In case of any questions, please feel free to reach us here: https://www.flipkart.com/helpcentre

        <br><br>
        ###########################################################################<br><br>

        <p><b>OD: RNR 2, email and sms sent.</b></p><br>
        <p><b>OD: RNR 2, SMS SENT.</b></p><br>
      </div>
      <br>
      <hr>
      <br>
      <div>
        <div class="text-white text-center">
          <p>RNR _3 -------> CLOSE the Case</p>
        </div><br>
        <p><b>OD: RNR 3. couldn't solve the case as there wasn't any option available under the activity log.</b></p><br>
      </div>
      <br>

      ###########################################################################
      <div class="text-white text-center">
        <p>Email</p>
      </div>
      <div>
        <p>Update on the order ()</p>
        <br>
        <p>Hi,<br><br>We tried reaching you about your order for your product order ID () but were unable to get in touch with you.<br>
          We are sorry to let you know that the couriers have confirmed that there will be a further delay in the delivery of your order.<br>
          We understand if you do not want to wait, you can choose to cancel your order by clicking here: {My Orders page link}<br><br>

          Please note that you can choose to place a fresh order for this item within the next 7days and in case the price of the product has increased,
          we will reach out to you, for support. Since you waited for a long time to get this product, if the price of the product remains the same/has reduced,
          a Gift Card will be added to your Flipkart account by the seller/couriers within 72 hours of the order delivery.<br><br>


          Thanks for your understanding.<br><br>


          ###########################################################################<br><br>

        <p><b> OD: RNR 3. case solved. unable to send email.</b></p><br>

      </div>
      <br>
      <hr>
      <br>
      <div>
        <div class="text-white text-center">
          <p>RESOLUTION EMAIL : If the order is showing cancelled in SA if the cx doesn't picked up the call.</p>
        </div>
      </div>
      <br>

      ###########################################################################
      <div class="text-white text-center">
        <p>Email</p>
      </div>
      <div>
        <p>Update on the order ()</p>
        <br>
        <p>Hi,<br><br>We tried to get in touch with you on your registered contact number to discuss the issue about your produt with order ID {} but couldn't reach you.
          We are sorry to let you know that your order was cancelled by the seller due to a prolonged delay in the delivery of your order as they did not want to keep you waiting.<br><br>

          Please note that you can choose to place a fresh order for this item within the next 7 days and in case the price of the product has increased, we will reach out to you, for support. However, if the price of the product remains the same, a Gift Card of some amount will be added to your Flipkart account within 72 hours of the order delivery.<br><br>

          Thanks for your understanding. We hope to serve you soon.<br><br>

          <br>

      </div>
      <br>
      <hr>
      <br>
      <div>
        <div class="text-white text-center">
          <p>RESOLUTION EMAIL : If the order is showing Delivered is SA if the cx doesn't picked up the call.</p>
        </div>
      </div>
      <br>

      ###########################################################################
      <div class="text-white text-center">
        <p>Email</p>
      </div>
      <div>
        <p>Update on the order ()</p>
        <br>
        <p>Hi,<br><br>We tried getting in touch with you to talk about the delivery of your order () but were not able to reach you. While we were in touch with the courier service provider to ensure timely delivery of your order, they have confirmed that one of their delivery executives has delivered the product on (date).<br><br>
          We'd like to get confirmation from you about the delivery so that we can share the feedback with the couriers.<br>

          Thanks for your understanding.<br><br>

          ###########################################################################<br><br>


        <p><b> OD: As CPD is not yet breached, requested the cx to wait till the CPD,
            on or before 7pm the logestic team will try to deliver the product.
            Activity log inactive, hence couldn't solve the case and mentioned over the notes.
            Mark waiting done for 24 hours. Form fill up done.</b></p><br>
        <p><b> OD: As CPD is not yet breached, requested the cx to wait till the CPD,
            on or before 7pm the logestic team will try to deliver the product.
            Self serve pitched. using accops ekart console not working. case solved.</b></p><br>

      </div>
      <br>
      <hr>
      <br>


      -----------------------------------------------------THE END-------------------------------------------------







      <p id="myInput1"><b>OD: Inform cx to wait till OKT <var id="tt0"><var id="tdate0"> _OKT_DATE_</var>,</var>and set mark waiting till <var id="tt1"><var id="tdate1"> _OKT_DATE_</var>,</var></b></p>
      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput1')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br>
      <br>
      <hr>

      <br>
      <br>
      <label for="fname">Note 2</label>

      <br>
      <p id="myInput2"><b>OD: As per elk Console order status is showing NSS so inform cx to place afresh order (as previously there is no order in same address), cx agreed hence solve the incident.</b></p>
      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput2')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br>
      <br>
      <hr>

      <br>
      <br>
      <label for="fname">Note 3</label>

      <br>
      <p id="myInput3"><b>OD: As per elk Console order status is showing NSS so inform cx to wait till 48 hrs (as previously there is an order in same address) , cx agreed hence solve the incident.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput3')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br>
      <br>
      <hr>

      <br>
      <br>
      <label for="fname">Note 4</label>

      <br>
      <p id="myInput4"><b>OD: ask customer to wait till 7 pm as the product status is out for delivery mark waiting for next day 10:00 am. Self serve pitch.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput4')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br>
      <br>
      <hr>

      <br>
      <label for="fname">Note 5</label>

      <br>
      <p id="myInput5"><b>OD: cx confirm that order has already delivered, hence close the incident.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput5')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br>
      <br>
      <hr>

      <br>
      <label for="fname">Note 6</label>

      <br>
      <p id="myInput6"><b>OD: Order is already delivered/ cancelled, but there is no option available to solve hence set mark waiting for 4 hrs and form filled.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput6')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br>
      <br>
      <hr>

      <br>
      <label for="fname">Note 7</label>

      <br>
      <p id="myInput7"><b>OD: cx is unable to place a fresh order so inform cx about the TOA and form filled.</b></p>


      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput7')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 8</label>

      <br>
      <p id="myInput8"><b>OD: Order has already cancel so inform cx to place a fresh order and inform about TOA.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput8')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 9</label>

      <br>
      <p id="myInput9"><b>OD: call got dropped, so set mark waiting for 4 hrs/for next day 10:am.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput9')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 10</label>

      <br>
      <p id="myInput10"><b>OD: there is no responds from cx side so set mark waiting for 4 hrs/ next day 10 am.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput10')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 11</label>

      <br>
      <p id="myInput11"><b>OD: in EKL its showing same state misroute so inform cx to wait till 72 hrs and set mark waiting for 72 hrs.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput11')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 12</label>

      <br>
      <p id="myInput12"><b>OD: RNR1 hence set mark waiting for 4 hrs/ next day 10:am.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput12')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 13</label>

      <br>
      <p id="myInput13"><b>OD: cx want me to call back hence set mark waiting for 4 hrs.</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput13')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 14</label>

      <br>
      <p id="myInput14"><b>OD: RNR2 hence set mark waiting till OKT( OKT).</b></p>

      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput14')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br><br><br>
      <hr>

      <br>
      <label for="fname">Note 15</label>

      <br>
      <p id="myInput15"><b>OD: ORDER STATUS IS SHOWING AS OUT FOR DELIVERY SO INFORM CX TO WAIT TILL 7 PM AND SET AMRK WAITING FOR NEXT DAY 10 AM.</b></p>


      <div class="tooltip mt-12 text-white text-center">
        <button onclick="copyToClipboard('#myInput15')" onmouseout="outFunc()" class="
        mt-4
		bg-pink-800
		text-white
		uppercase
		font-bold
		text-sm text-center
		w-full
		px-8
		h-14
		rounded-full
		md:mt-0 md:rounded-l-none md:w-48
         ">
          <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
          Copy
        </button>
      </div><br>
      <br>
      <hr>

      <br>



      <br>

      </p>
    </div>


  </div>
  </div>
  <script>
    function myFunction() {
      var a = document.getElementById("mynam");
      a.style.color = "yellow";
      var c = document.getElementById("tt0");
      c.style.color = "yellow";
      var d = document.getElementById("tt1");
      d.style.color = "yellow";
      var x = document.getElementById("cname").value;
      document.getElementById("name").innerHTML = x;
      var z = document.getElementById("tatdate").value;
      document.getElementById("tdate0").innerHTML = z;
      var q = document.getElementById("tatdate").value;
      document.getElementById("tdate1").innerHTML = q;

    }
  </script>
  <script>
    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();
      var tooltip = document.getElementById("myTooltip");
      tooltip.innerHTML = "Copied: " + copyText.value;
    }

    function outFunc() {
      var tooltip = document.getElementById("myTooltip");
      tooltip.innerHTML = "Copy to clipboard";
    }
  </script>

  <script type="text/javascript">
    window.onload = startInterval;

    function startInterval() {
      setInterval("startTime();", 1000);
    }

    function startTime() {
      document.getElementById('time').innerHTML = Date();
      document.getElementById('4time').innerHTML = strftime('%Y-%m-%d %i:%M%q');
      document.getElementById('24time').innerHTML = strftime('%Y-%m-%D %I:%M%P');
    }

    function strftime(sFormat, date) {
      if (!(date instanceof Date)) date = new Date();
      var nDay = date.getDay(),
        nDate = date.getDate(),
        nMonth = date.getMonth(),
        nYear = date.getFullYear(),
        nHour = date.getHours(),
        fHour = (date.getHours() + 4),
        tDate = (date.getDate() + 1),
        aDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        aMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        aDayCount = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334],
        isLeapYear = function() {
          if (nYear & 3 !== 0) return false;
          return nYear % 100 !== 0 || year % 400 === 0;
        },
        getThursday = function() {
          var target = new Date(date);
          target.setDate(nDate - ((nDay + 6) % 7) + 3);
          return target;
        },
        zeroPad = function(nNum, nPad) {
          return ('' + (Math.pow(10, nPad) + nNum)).slice(1);
        };
      return sFormat.replace(/%[a-z]/gi, function(sMatch) {
        return {
          '%a': aDays[nDay].slice(0, 3),
          '%A': aDays[nDay],
          '%b': aMonths[nMonth].slice(0, 3),
          '%B': aMonths[nMonth],
          '%c': date.toUTCString(),
          '%C': Math.floor(nYear / 100),
          '%d': zeroPad(nDate, 2),
          '%D': zeroPad(tDate, 2),
          '%e': nDate,
          '%F': date.toISOString().slice(0, 10),
          '%G': getThursday().getFullYear(),
          '%g': ('' + getThursday().getFullYear()).slice(2),
          '%H': zeroPad(nHour, 2),
          '%i': zeroPad((fHour + 11) % 12 + 1, 2),
          '%I': zeroPad((nHour + 11) % 12 + 1, 2),
          '%j': zeroPad(aDayCount[nMonth] + nDate + ((nMonth > 1 && isLeapYear()) ? 1 : 0), 3),
          '%k': '' + nHour,
          '%l': (nHour + 11) % 12 + 1,
          '%m': zeroPad(nMonth + 1, 2),
          '%M': zeroPad(date.getMinutes(), 2),
          '%p': (nHour < 12) ? 'AM' : 'PM',
          '%P': (nHour < 12) ? 'am' : 'pm',
          '%q': (fHour < 12) ? 'am' : 'pm',
          '%s': Math.round(date.getTime() / 1000),
          '%S': zeroPad(date.getSeconds(), 2),
          '%u': nDay || 7,
          '%V': (function() {
            var target = getThursday(),
              n1stThu = target.valueOf();
            target.setMonth(0, 1);
            var nJan1 = target.getDay();
            if (nJan1 !== 4) target.setMonth(0, 1 + ((4 - nJan1) + 7) % 7);
            return zeroPad(1 + Math.ceil((n1stThu - target) / 604800000), 2);
          })(),
          '%w': '' + nDay,
          '%x': date.toLocaleDateString(),
          '%X': date.toLocaleTimeString(),
          '%y': ('' + nYear).slice(2),
          '%Y': nYear,
          '%z': date.toTimeString().replace(/.+GMT([+-]\d+).+/, '$1'),
          '%Z': date.toTimeString().replace(/.+\((.+?)\)$/, '$1')
        } [sMatch] || sMatch;
      });
    }
  </script>
</body>
<var id="mynam"><var id="name"> _CX Name_</var></var>

</html>


OD: OKT not breached so, requested the cx to wait till OKT. Cx agreed to wait so, Internal mark waiting done till OKT 27 Aug.

OD: Cx disconnected the call before providing any resolution. Mark waiting done for 4 hours.

OD: Language barrier call. Cx wanted to speak in TAMIL. Requested the cx to wait for 24 hours for further updates of the order. Mark waiting done for 24 hours and form filled.

OD: Cx disconnected the call before providing any resolution. Mark waiting done for 4 hours.

OD requested cx to wait till CPD 26 aug, hence mark waiting done till CPD

OD: RNR2 hence set mark waiting till OKT

OD; MW done till OKT.

OD cx confirmed the delivery, no option to solve, hence mark waiting done and filled the form perform task- check update / yes/issue resolved/ notes update to solve any delivered case

OD: As per elk Console order status is showing NSS so inform cx to place afresh order (as previously there is no order in same address), cx agreed hence solve the incident.


===============


OD: As per cs notes order status is showing NSS so inform cx to place afresh order and informed about TOA offer (as previous order is not delivered in the same pincode. Cx agreed to place a fresh order no option to solve the incident, Hence Mark waiting done till next day.

==================


OD: As CPD is not yet breached, requested the cx to wait till the CPD. case solved.

OD: As CPD is not yet breached, requested the cx to wait till the CPD, mark waiting done. Form fill up done.

OD: informed the cx to wait till the given TAT. mark waiting done. cx agreed.

OUT FOR DELIVERY -
OD: Informed Cx to wait till 7 PM as the product is OFD and mark waiting done 10am tomorrow.

OD: As per VOC Cx already received the order, hence closing the incident as per process. case solved.
OD: As per VOC Cx already received the order,
Activity log inactive, hence couldn't solve the case and mentioned over the notes.
using accops ekart console not working. Mark waiting done for 24 hours. Form fill up done.

18002029898

OD: Language barrier, informed the cx to wait for 24 hours. cx agreed. Form fill up done.