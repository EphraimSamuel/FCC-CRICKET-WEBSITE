<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-food-wine w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)"
            onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="{{ route('home') }}" class="w3-bar-item w3-button"></a>
        <a href="{{ route('home') }}" class="w3-bar-item button w3-padding-large">HOME</a>
        <a href="{{ route('history') }}" class="w3-bar-item button w3-padding-large w3-hide-small">HISTORY</a>
        <a href="/ages" class="w3-bar-item button w3-padding-large w3-hide-small">FCC THROUGH THE AGES</a>
        <a href="/log" class="w3-bar-item button w3-padding-large w3-hide-small">LOG</a>
        <a href="/hof" class="w3-bar-item button w3-padding-large w3-hide-small">HALL OF FAME</a>
        <a href="/gallery" class="w3-bar-item button w3-padding-large w3-hide-small">GALLERY</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-bar-item button  w3-padding-large w3-food-wine" title="More">MORE <i
                    class="fa fa-caret-down"></i></button>
            <p></p>
            <p></p>
            <p></p>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-bar-item button">Merchandise</a>
                <a href="#" class="w3-bar-item button">Extras</a>
            </div>
        </div>
        <div class="w3-padding-large w3-hover-red w3-hide-small w3-right">Foundation Cricket Club</div>
        <a href="index.html"></a>
    </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>
