@extends('frontend.layouts.main')

@section('content')
    <!-- Page content -->
    <div class="w3-content" style="max-width:2000px;margin-top:46px">

        <!-- Automatic Slideshow Images -->
        <div class="mySlides w3-display-container w3-center">
            <img src="image/FCC5.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>Los Angeles</h3>
                <p><b>We had the best time playing at Venice Beach!</b></p>
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="image/FCC1.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>New York</h3>
                <p><b>The atmosphere in New York is lorem ipsum.</b></p>
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="image/FCC2.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>Chicago</h3>
                <p><b>Thank you, Chicago - A night we won't forget.</b></p>
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="image/FCC3.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>New York</h3>
                <p><b>The atmosphere in New York is lorem ipsum.</b></p>
            </div>
        </div>

        <!-- The Club Section -->

        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band"
            background="#FFD700">
            <h2 class="w3-wide">THE TEAM</h2>
            <p class="w3-opacity"><i>We Dont Like Cricket, We Love It!</i></p>
            <p class="w3-justify">We have created a fictional Cricket Club website. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="w3-row w3-padding-32">
                <div class="w3-third">
                    <p>Co-ordinator</p>
                    <img src="image/MRDenton.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                </div>
                <div class="w3-third">
                    <p>Captain </p>
                    <img src="image/MRDenton.jpg" class="w3-round w3-margin-bottom" alt="Random Name"
                        style="width:60%">
                </div>
                <div class="w3-third">
                    <p>Vice-Captain</p>
                    <img src="image/MRDenton.jpg" class="w3-round" alt="Random Name" style="width:60%">
                </div>
            </div>


        </div>

        <!-- The Team Section -->
        <div class="w3-food-wine" id="team">
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                <h2 class="w3-wide w3-center">THE TEAM</h2>
                <p class="w3-opacity w3-center"><i>The Great Wine and Gold!</i></p><br>

                <!--<ul class="w3-ul w3-border w3-white w3-text-grey">
                        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
                    </ul>

                    <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                        <div class="w3-third w3-margin-bottom">
                        <img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>New York</b></p>
                            <p class="w3-opacity">Fri 27 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
                        </div>
                        </div>
                        <div class="w3-third w3-margin-bottom">
                        <img src="/w3images/paris.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>Paris</b></p>
                            <p class="w3-opacity">Sat 28 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
                        </div>
                        </div>
                        <div class="w3-third w3-margin-bottom">
                        <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>San Francisco</b></p>
                            <p class="w3-opacity">Sun 29 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
                        </div>
                </div>-->
                <div class="w3-row w3-padding-32">
                    <div class="w3-third">
                        <p>Co-ordinator</p>
                        <img src="image/MRDenton.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                    </div>
                    <div class="w3-third">
                        <p>Captain </p>
                        <img src="image/MRDenton.jpg" class="w3-round w3-margin-bottom" alt="Random Name"
                            style="width:60%">
                    </div>
                    <div class="w3-third">
                        <p>Vice-Captain</p>
                        <img src="image/MRDenton.jpg" class="w3-round" alt="Random Name" style="width:60%">
                    </div>

                </div>

            </div>
        </div>

        <!-- Ticket Modal -->
        <!--<div id="ticketModal" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
                <span onclick="document.getElementById('ticketModal').style.display='none'"
            class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
                <input class="w3-input w3-border" type="text" placeholder="How many?">
                <p><label><i class="fa fa-user"></i> Send To</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Enter email">
                <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
                <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
                <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
            </div>
            </div>
        </div> -->
        @include('frontend.partials._contact')

    </div>
@endsection
