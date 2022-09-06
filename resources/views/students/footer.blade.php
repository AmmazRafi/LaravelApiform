<!-- FOOTER START -->
<footer class="bg-blue">
    <div class="container px-md-0">
        <div class="row">
            <div class="col-3 p-4"> <img src="{{ asset('assets/flogo.png') }}" class="w-75 mt-5 px-3"> </div>
            <div class="col-3 p-4">
                <ul class="list-group">
                    <li class="list-group-item h3 fw-bold borderless mb-4">Rankings
                        <div class="decorative-spacer mt-2"> </div>
                    </li>
                    <li class="list-group-item borderless">Top World Universities</li>
                    <li class="list-group-item borderless">Top North America Universities</li>
                    <li class="list-group-item">Top Latin America Universities</li>
                    <li class="list-group-item borderless">Top Europe America Universities</li>
                    <li class="list-group-item">Top Asia America Universities</li>
                    <li class="list-group-item borderless">Top Africa America Universities</li>
                    <li class="list-group-item">Top Arab America Universities</li>
                    <li class="list-group-item">Top Oceania America Universities</li>
                </ul>
            </div>
            <div class="col-3 p-4">
                <ul class="list-group">
                    <li class="list-group-item h3 fw-bold borderless mb-4">Stay in touch
                        <div class="decorative-spacer mt-2"> </div>
                    </li>
                    <li class="list-group-item borderless">Contact Us</li>
                    <li class="list-group-item borderless">Report an Issue</li>
                    <li class="list-group-item">Send us Feedback</li>
                    <li class="list-group-item borderless">Ranking Committee</li>
                    <li class="list-group-item">Claim University Profile</li>
                    <li class="list-group-item borderless">Register a University</li>
                </ul>
            </div>
            <div class="col-3 p-4">
                <ul class="list-group">
                    <li class="list-group-item h3 fw-bold borderless mb-4">Follow Us
                        <div class="decorative-spacer mt-2"> </div>
                    </li>
                </ul>
                <ul class="list-group list-group-horizontal list-group-horizontal2">
                    <li class="list-group-item">
                        <a href="#"> <i class="fa-brands fa-square-facebook ic_style3"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a class="px-2" href="#"> <i class="fa fa-twitter ic_style3"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"> <i class="fa fa-instagram ic_style3"></i></a>
                    </li>
                </ul>
                </ul>
            </div>
            <div class="normal-spacer mt-2 mx-auto"> </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="px-5 p-4">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item border-right">FAQ</li>
                        <li class="list-group-item border-right">Partners</li>
                        <li class="list-group-item border-right">Contact</li>
                        <li class="list-group-item border-right">Privacy</li>
                        <li class="list-group-item border-right">Cookies</li>
                        <li class="list-group-item border-right">Terms</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-5 p-4 mx-auto text-center">
                    <p class="text-light">2022 &copy; UNIBANKS All Right Reserved</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-5 p-4">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item border-right border-left">Jordan</li>
                        <li class="list-group-item border-right">English</li>
                        <li class="list-group-item border-right">العربي</li>
                        <li class="list-group-item px-3">
                            <div class="btn-group">
                                <button class="btn btn-primary bg-danger dropdown-toggle custombtn" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false"> English </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER CLOSED -->
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
window.addEventListener('scroll', function() {
    if(window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
    } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
        // remove padding top from body
        document.body.style.paddingTop = '0';
    }
});
});

function changeProgress(progressBarId, progressValue, animDurPerStep = 15) {
var progressBar = document.getElementById(progressBarId);
var oldProgressValue = -parseInt(window.getComputedStyle(progressBar).getPropertyValue("background-position"));
if(progressValue > 100) progressValue = 100;
else if(progressValue < 0) progressValue = 0;
else progressValue = Math.round(progressValue / 10) * 10;
var steps = Math.abs(oldProgressValue - progressValue) / 10;
var totalAnimDur = animDurPerStep * steps;
progressBar.style.transition = totalAnimDur + "ms steps(" + steps + ")";
progressBar.style.backgroundPosition = -10 + "%";
}
</script>
<script>
function openTabb(evt, cityName) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for(i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablinks");
for(i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" activee", "");
}
document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " activee";
}


</script>

<script src="js/intlTelInput.js"></script>
<script>
var input = document.querySelector("#phone");
window.intlTelInput(input, {
// allowDropdown: false,
// autoHideDialCode: false,
// autoPlaceholder: "off",
// dropdownContainer: document.body,
// excludeCountries: ["us"],
// formatOnDisplay: false,
// geoIpLookup: function(callback) {
//   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
//     var countryCode = (resp && resp.country) ? resp.country : "";
//     callback(countryCode);
//   });
// },
// hiddenInput: "full_number",
// initialCountry: "auto",
// localizedCountries: { 'de': 'Deutschland' },
// nationalMode: false,
// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
// placeholderNumberType: "MOBILE",
// preferredCountries: ['cn', 'jp'],
// separateDialCode: true,
utilsScript: "js/utils.js",
});
</script>
</html>