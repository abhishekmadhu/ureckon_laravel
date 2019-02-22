<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureckon | Events</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('scss/3-Modules/hover.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/Asset 14.png')}}" type="image/x-icon">
</head>
<body>

        <nav class="top-right open navbar__links">
                <a href="/about" class="disc l1">
                  <div>About Us</div>
                </a>
                <a href="/talks" class="disc l2">
                  <div>Talks</div>
                </a>
                <a href="/workshops" class="disc l3">
                  <div>Workshop</div>
                </a>
                <a href="/events" class="disc l4">
                  <div>Events</div>
                </a>
                <a class="disc l5 toggle">
                  Menu
                </a>
        </nav>




    <div class="bg-container-contact100">
	<div  class="background__image-events"></div>
	<div data-tilt class="hero">
		<h2 class="hero__title ">Events Information Page!</h2>
		<p class="hero__subtitle lead">Discover the astonishing events of Ureckon.</p>
        <a data-scroll href="#events-page">
            <i class="hero__arrow fas fa-angle-down"></i>
        </a>
        <div class="hero__events">
                <a data-scroll href="#events-page__robotics">
                    <i class="fas fa-robot"></i>
                    <span class="tooltiptext">Robotics</span>
                </a>

                <a data-scroll href="#events-page__coding">
                        <i class="fas fa-code"></i>
                        <span class="tooltiptext">Coding</span>
                    </a>

                <a data-scroll href="#events-page__gaming">
                    <i class="fas fa-gamepad"></i>
                    <span class="tooltiptext">Gaming</span>
                </a>

                <a data-scroll href="#events-page__mechanics">
                    <i class="fas fa-drafting-compass"></i>
                    <span class="tooltiptext">Mechanics</span>
                </a>

                <a data-scroll href="#events-page__flagship">
                    <i class="fab fa-free-code-camp"></i>
                    <span class="tooltiptext">Flagship</span>
                </a>

                <a data-scroll href="#events-page__business">
                    <i class="fas fa-briefcase"></i>
                    <span class="tooltiptext">Business</span>
                </a>

                <a data-scroll href="#events-page__miscellaneous">
                    <i class="fas fa-microchip"></i>
                    <span class="tooltiptext">Brain Games</span>
                </a>

                <a data-scroll href="#events-page__initiatives">
                    <i class="fa fa-bolt"></i>
                    <span class="tooltiptext">Initiatives</span>
                </a>

        </div>
    </div>

     <div class="container">
        <div id="events-page" class="events-page">
            <section id="events-page__robotics" class="events-page__robotics">
                <h3 class="events-page__robotics-title display-4">
                    <center>Mark 42 se Chitti Tak!</center>
                </h3>
                <div class="events-page__robotics-cards">
                    <div class="card">
                            <img src="{{ asset('images/events/NFT.jpg')}}" class="card-img-top events-page__robotics-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Need For Torque - NFT<div  class="float-right events-page__robotics-badge badge badge-secondary">Robotics</div></h4>
                                <p class="card-text lead">Need for Torque is all about grabbing the first position with maximum acceleration. Drift through the turnings and sprint along the straight track.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Debarup Sadhukan <a href="tel:7278816589"><i class="fa fa-phone" aria-hidden="true"></i> +91 7278816589</a>
                                <br>Hemant Kumar Pandit <a href="tel:8820206593"><i class="fa fa-phone" aria-hidden="true"></i> +91 8820206593</a></p>
                                <a href="https://drive.google.com/open?id=1aqH--8z92g4nzAE9u0NKZO2zw6O5kca0" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="" class="btn btn-primary float-right hvr-buzz btn-show-contact100">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__robotics-button" id="roborace">
                                    Register
                                </button>
                                @endauth
                                @guest
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button">
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/robodangal.jpg')}}" class="card-img-top events-page__robotics-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Robo Dangal<div  class="float-right events-page__robotics-badge badge badge-secondary">Robotics</div></h4>
                                <p class="card-text lead">Bring on your ready to battle robots where the aim is to immobilize your opponent's bot and stand victorious. At the end it is all about Power and Torque.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Souradeep Ganguli <a href="tel:9903891285"><i class="fa fa-phone" aria-hidden="true"></i> +91 9903891285</a>
                                <br>Gourav Chakraborty <a href="tel:8777084295"><i class="fa fa-phone" aria-hidden="true"></i> +91 8777084295</a>
                                <br>Saamir Haque Molla <a href="tel:9903133041"><i class="fa fa-phone" aria-hidden="true"></i> +91 9903133041</a>
                                <br>Anurag Singh <a href="tel:836558038"><i class="fa fa-phone" aria-hidden="true"></i> +91 836558038</a></p>
                                <a href="https://drive.google.com/open?id=1V0je9pKkiIA9YXSklQPTQRBjpEdnWRLH" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__robotics-button" id="robowar">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                Body
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>

                    <div class="card">
                            <img src="{{ asset('images/events/dirrecion.jpg')}}" class="card-img-top events-page__robotics-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Dirrecion<div  class="float-right events-page__robotics-badge badge badge-secondary">Robotics</div></h4>
                                <p class="card-text lead">Obedient bot? Follows the line only? Never jumps out of track ? Then your bot is perfect to win this event. Bring your bot and make sure it follows the line till the end.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Jiten Sinha <a href="tel:9874585329"><i class="fa fa-phone" aria-hidden="true"></i> +91 9874585329</a>
                                <br>Adarsh Kumar Singh <a href="tel:504414052"><i class="fa fa-phone" aria-hidden="true"></i> +91 504414052</a>
                                <br>Tathagata Bannerjee <a href="tel:9477583958"><i class="fa fa-phone" aria-hidden="true"></i> +91 9477583958</a></p>
                                <a href="https://drive.google.com/open?id=1oUaGOZ2JEMMMeZFIqDPxF3QcOaOQvn2Y" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__robotics-button" id="linefollower">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/events/roboleague.jpg')}}" class="card-img-top events-page__robotics-cards-image" alt="events pictures">
                        <div class="card-body">
                            <h4 class="card-title">Robo League<div  class="float-right events-page__robotics-badge badge badge-secondary">Robotics</div></h4>
                            <p class="card-text lead">The knack of fusing technology with sports seems to be an inherent quality among us, and to celebrate this very spirit, we hail this event known as RoboSoccer.</p>
                            <h5 class="mt-3">Event Co-ordinators</h5>
                            <p>Subhadeep Kundu <a href="tel:7278707250"><i class="fa fa-phone" aria-hidden="true"></i> +91 7278707250</a>
                            <br>Sunip Bhattacharya <a href="tel:8240225976"><i class="fa fa-phone" aria-hidden="true"></i> +91 8240225976</a></p>
                            <a href="https://drive.google.com/open?id=1bu-pBGHKWcXci0W8BkCeQ2MubtgmGnc2" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                            <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                            @auth
                            <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__robotics-button" id="robosoccer">
                                Register
                            </button>
                            @endauth
                            @guest
                        <!-- Button trigger modal -->
                            <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" >
                                Login to Register
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                 aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                        </div>
                                        <div class="modal-body">
                                            <a name="" id=""
                                               class="btn btn-outline-warning btn-block"
                                               href="/signin" role="button">Login</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endguest
                        </div>
                </div>
                <div class="card">
                    <img src="{{ asset('images/events/roborumble.jpg')}}" class="card-img-top events-page__robotics-cards-image" alt="events pictures">
                    <div class="card-body">
                        <h4 class="card-title">Robo Rumble<div class="float-right events-page__robotics-badge badge badge-secondary">Robotics</div>
                        </h4>
                        <p class="card-text lead">Charge up the batteries and grease the fittings. Get ready to showcase your instinct and control over your creation in this nail biting event where Bots representing various institutes battle against one-another to survive till the end. Push your opponent off the ring or get knocked out. The ultimate survivor standing in the Rumble arena wins the battle.</p>
                            <h5 class="mt-3">Event Co-ordinators</h5>
                            <p>Pritaam Dutta <a href="tel:9804291109"><i class="fa fa-phone" aria-hidden="true"></i> +91 9804291109</a>
                                <br>Shivangam Mookherjee <a href="tel:8697704316"><i class="fa fa-phone" aria-hidden="true"></i> +91 8697704316</a></p>
                            <a href="https://drive.google.com/open?id=1TfeL3sZs2uALIspWWpu6IDFXVhe9STjQ" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                        <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                        @auth
                        <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__robotics-button" id="roborumble">
                            Register
                        </button>
                        @endauth
                        @guest
                    <!-- Button trigger modal -->
                        <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button">
                            Login to Register
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                             aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                    </div>
                                    <div class="modal-body">
                                        <a name="" id=""
                                           class="btn btn-outline-warning btn-block"
                                           href="/signin" role="button">Login</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endguest
                    </div>
                </div>

                </div>
                <hr class="line-break">
            </section>



            <section id="events-page__coding" class="events-page__coding">
                <h3 class="events-page__coding-title display-4">
                    <center>Semicolon ya No Semicolon!</center>
                </h3>
                <div class="events-page__coding-cards">
                    <div class="card">
                            <img src="{{ asset('images/events/code_ranch.jpg')}}" class="card-img-top events-page__coding-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Code Ranch<div  class="float-right events-page__coding-badge badge badge-secondary">Coding</div></h4>
                                <p class="card-text lead">Programming is what you always think of, so do you have what it takes to be a mastermind coder ?</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Shobhan Das <a href="tel:9836856937"><i class="fa fa-phone" aria-hidden="true"></i> +91 9836856937</a>
                                <br>Sagnik Sengupta <a href="tel:9733197523"><i class="fa fa-phone" aria-hidden="true"></i> +91 9733197523</a></p>
                                <a href="https://drive.google.com/open?id=1XAuS30BOPGNF96Rv43XfCfOxYNa-F1h8" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__coding-button" id="coderanch">
                                    Register
                                </button>
                                 @endauth
                                 @guest
                            <!-- Button trigger modal -->
                                <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/code_golf1.jpg')}}" class="card-img-top events-page__coding-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Code Golf<div  class="float-right events-page__coding-badge badge badge-secondary">Coding</div></h4>
                                <p class="card-text lead">How Low Can You Go?
                                    Code Golf is more than just logic; the shorter the code, the bigger the prizes.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Abhishek Madhu <a href="tel:9051789940"><i class="fa fa-phone" aria-hidden="true"></i> +91 9051789940</a>
                                <br>Rajdeep Karmaker <a href="tel:8420703558"><i class="fa fa-phone" aria-hidden="true"></i> +91 8420703558</a></p>
                                <a href="https://drive.google.com/open?id=1nPVmTKQoeE7z91M5tAwKR43GAB9nsVTI" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__coding-button" id="codegolf">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                            <!-- Changing this to google-forms link for people who are not logged in and are unclear 
                                about the registration process. People already logged in (experts) can still register 
                                for events from the database -->
                                <a href="https://goo.gl/forms/jlytxo1AEF7EoKbI3" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Register Here
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/web_designing.png')}}" class="card-img-top events-page__coding-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Spyder<div  class="float-right events-page__coding-badge badge badge-secondary">Coding</div></h4>
                                <p class="card-text lead">Weave Your Web.
                                    Calling all front-end designers; put forth your best designs and build the internet you would like to see.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Shalini Guha <a href="tel:9874646078"><i class="fa fa-phone" aria-hidden="true"></i> +91 9874646078</a></p>
                                <a href="https://drive.google.com/open?id=1ddiTAoVcEiloVgR4kugxWlTCcJuNu6eV" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__coding-button" id="spyder">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/debugger.jpg')}}" class="card-img-top events-page__coding-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Debugger<div  class="float-right events-page__coding-badge badge badge-secondary">Coding</div></h4>
                                <p class="card-text lead">One code to kill them all
                                    Put your skills to the test by finding and fixing bugs in code in a battle against time.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Sagnik Bhattacharya <a href="tel:9804044741"><i class="fa fa-phone" aria-hidden="true"></i> +91 9804044741</a>
                                <br>Pratik Goel <a href="tel:9051481667"><i class="fa fa-phone" aria-hidden="true"></i> +91 9051481667</a></p>
                                <a href="https://drive.google.com/open?id=1Xme_AtIQIH13jUwqmz6V9uyGdKBbv5u7" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__coding-button" id="debugging">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                Body
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>



            <section id="events-page__gaming" class="events-page__gaming">
                <h3 class="events-page__gaming-title display-4">
                    <center>Do you game bruh!?</center>
                </h3>
                <div class="events-page__gaming-cards">
                    <div class="card">
                            <img src="{{ asset('images/events/counter_strike.jpg')}}" class="card-img-top events-page__gaming-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Counter Strike: GO/1.6<div  class="float-right events-page__gaming-badge badge badge-secondary">Gaming    </div></h4>
                                <p class="card-text lead">Come prove you're the best counterstrike player in kolkata at one of the biggest techno management fest hosted by University of engineering and management. Come fight in a 2 vs 2 format and prove that your aim is the best that there is.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Pushpak Chakraborty <a href="tel:9038686250"><i class="fa fa-phone" aria-hidden="true"></i> +91 9038686250</a>
                                <br>Rohit Chakraborty <a href="tel:8240253578"><i class="fa fa-phone" aria-hidden="true"></i> +91 8240253578</a>
                                <br>Soham Halder <a href="tel:8013308508"><i class="fa fa-phone" aria-hidden="true"></i> +91 8013308508</a></p>
                                <a href="https://drive.google.com/open?id=1oT7QMkJOtelo3Gwy9I2dwGMiipCHQV2h" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" id="csgo">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/fifa.jpg')}}" class="card-img-top events-page__gaming-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">FIFA<div  class="float-right events-page__gaming-badge badge badge-secondary">Gaming</div></h4>
                                <p class="card-text lead">Drop down at UEM and show your skillset in the virtual world of Football.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <br>Richik Gangopadhyay <a href="tel:9674377482"><i class="fa fa-phone" aria-hidden="true"></i> +91 9674377482</a>
                                <br>Debarghya Roy  <a href="tel:9083536633"><i class="fa fa-phone" aria-hidden="true"></i> +91 9083536633</a></p>
                                <a href="https://drive.google.com/open?id=1Ed27WMis-4NusQHgygh4uW7eByOHJfOe" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" id="fifa">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/nfs.jpg')}}" class="card-img-top events-page__gaming-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">NFS: Most Wanted<div  class="float-right events-page__gaming-badge badge badge-secondary">Gaming</div></h4>
                                <p class="card-text lead">In an open world with no menus or lobbies, you’ll be able to instantly challenge your friends and prove your driving skill in a variety of seamless multiplayer events. Your rivals will do everything they can to stop you from getting to the top. In this world, there can only be one Most Wanted.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Subhrodip Mohanto<a href="tel:9007400495"><i class="fa fa-phone" aria-hidden="true"></i> +91 9007400495</a>
                                <br>Saswata Dutta<a href="tel:9609561544"><i class="fa fa-phone" aria-hidden="true"></i> +91 9609561544</a></p>
                                <a href="#" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" id="nfs" >
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>

                    <div class="card">
                            <img src="{{ asset('images/events/pubg.jpg')}}" class="card-img-top events-page__gaming-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">PUBG Mobile<div  class="float-right events-page__gaming-badge badge badge-secondary">Gaming</div></h4>
                                <p class="card-text lead">What’s gotten you hooked lately?
                                        Is it PUBG
                                        If yes, then hold your breath for the ultimate PUBG Mobile tournament that awaits you at URECKON 2019, at the heart of Kolkata!!
                                        With prizes worth INR 10,000 at stake, it only gets better
                                        Come then, your “Winner Winner Chicken Dinner” call awaits!</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Rounak Adhikari <a href="tel:8017414711"><i class="fa fa-phone" aria-hidden="true"></i> +91 8017414711</a>
                                <br>Abhinaba Bannerjee <a href="tel:8240287218"><i class="fa fa-phone" aria-hidden="true"></i> +91 8240287218</a>
                                <br>Soumyadeep Saha <a href="tel:8420175067"><i class="fa fa-phone" aria-hidden="true"></i> +91 8420175067</a>
                                <br>Radhika Mirani <a href="tel:8100044545"><i class="fa fa-phone" aria-hidden="true"></i> +91 8100044545</a></p>
                                <a href="https://drive.google.com/open?id=1NJWg36t8DplyARG8PuPArVyIh02wtCTR" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" id="pubg">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>

                    <div class="card">
                            <img src="{{ asset('images/events/pubg.jpg')}}" class="card-img-top events-page__gaming-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">PUBG Emulator<div  class="float-right events-page__gaming-badge badge badge-secondary">Gaming</div></h4>
                                <p class="card-text lead">What’s gotten you hooked lately?
                                        Is it PUBG
                                        If yes, then hold your breath for the ultimate PUBG Mobile tournament that awaits you at URECKON 2019, at the heart of Kolkata!!
                                        With prizes worth INR 10,000 at stake, it only gets better
                                        Come then, your “Winner Winner Chicken Dinner” call awaits!</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Rounak Adhikari <a href="tel:8017414711"><i class="fa fa-phone" aria-hidden="true"></i> +91 8017414711</a>
                                <br>Abhinaba Bannerjee <a href="tel:8240287218"><i class="fa fa-phone" aria-hidden="true"></i> +91 8240287218</a>
                                <br>Soumyadeep Saha <a href="tel:8420175067"><i class="fa fa-phone" aria-hidden="true"></i> +91 8420175067</a>
                                <br>Radhika Mirani <a href="tel:8100044545"><i class="fa fa-phone" aria-hidden="true"></i> +91 8100044545</a></p>
                                <a href="https://drive.google.com/open?id=1NJWg36t8DplyARG8PuPArVyIh02wtCTR" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" id="pubgem">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>

                    <div class="card">
                            <img src="{{ asset('images/events/vr.png')}}" class="card-img-top events-page__gaming-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">VR Exhibition<div  class="float-right events-page__gaming-badge badge badge-secondary">Gaming</div></h4>
                                <p class="card-text lead"></p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Antara Ghosh <a href="tel:8697577604"><i class="fa fa-phone" aria-hidden="true"></i> +91 8697577604</a>
                            </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>



            <section id="events-page__mechanics" class="events-page__mechanics">
                <h3 class="events-page__mechanics-title display-4">
                    <center>Wrench and Bolts!</center>
                </h3>
                <div class="events-page__mechanics-cards">
                    <div class="card">
                            <img src="{{ asset('images/events/bridge-o-nics.jpg')}}" class="card-img-top events-page__mechanics-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Bridge-O-Nics<div  class="float-right events-page__mechanics-badge badge badge-secondary">Mechanics</div></h4>
                                <p class="card-text lead">By being limited to only Popsicle sticks and glue, you will need to use creativity, ingenuity and resourcefulness in order to maximize the strength of your bridge.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Sovan Polley <a href="tel:9051232873"><i class="fa fa-phone" aria-hidden="true"></i> +91 9051232873</a>
                                <br>Sambit Chakraborty <a href="tel:8902290887"><i class="fa fa-phone" aria-hidden="true"></i> +91 8902290887</a></p>
                                <a href="https://drive.google.com/open?id=1-aT2Qr2fGd9xCfgjb3GvmYwcIY7ygZ9u" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__mechanics-button" id="bridgemaking">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/robotic_arm.jpg')}}" class="card-img-top events-page__mechanics-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Arm of Hercules<div  class="float-right events-page__mechanics-badge badge badge-secondary">Mechanics</div></h4>
                                <p class="card-text lead">A Hydraulic system uses pressurized hydraulic fluid to power hydraulic machinery. You’ll feel the pressure to do some heavy lifting.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Bipasha Roy <a href="tel:8013017428"><i class="fa fa-phone" aria-hidden="true"></i> +91 8013017428</a>
                                <br>Somipom Mondal <a href="tel:8918053544"><i class="fa fa-phone" aria-hidden="true"></i> +91 8918053544</a></p>
                                <a href="https://drive.google.com/open?id=17fuG-oZjeoL1FL6m1AuYddJirzCVN1JV" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__mechanics-button" id="armofhercules">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/rc_plane.PNG')}}" class="card-img-top events-page__mechanics-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">AeroStorm<div  class="float-right events-page__mechanics-badge badge badge-secondary">Mechanics</div></h4>
                                <p class="card-text lead">Innovative to create airplanes and gliders to see surfing through air? Face the friction of air and overcome it to win the gold.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Riddhiman <a href="tel:8337008899"><i class="fa fa-phone" aria-hidden="true"></i> +91 8337008899</a>
                                <br>Anushree Roy <a href="tel:9674878086"><i class="fa fa-phone" aria-hidden="true"></i> +91 9674878086</a></p>
                                <a href="https://drive.google.com/open?id=1-5h97dfIsm2Z2OyJxsOH_kEJzBr2t8zf" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__mechanics-button" id="aerostorm">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>



            <section id="events-page__flagship" class="events-page__flagship">
                <h3 class="events-page__flagship-title display-4">
                    <center>Bade Bade Naam!</center>
                </h3>
                <div class="events-page__flagship-cards">
                    <div class="card">
                            <img src="{{ asset('images/events/UIC.jpg')}}" class="card-img-top events-page__flagship-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Ureckon Inovation Challenge - UIC<div  class="float-right events-page__flagship-badge badge badge-secondary">Flagship</div></h4>
                                <p class="card-text lead">Nothing is more important than your imaginations and creativity. This is the biggest platform to implement your ideas, thoughts and imaginations into reality. You make one prototype model to showcase and present your idea in front of the tech-world.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Arpan Chatterjee <a href="tel:7044196266"><i class="fa fa-phone" aria-hidden="true"></i> +91 7044196266</a>
                                <br>Pritam Dutta <a href="tel:9674038036"><i class="fa fa-phone" aria-hidden="true"></i> +91 9674038036</a></p>
                                <a href="https://drive.google.com/open?id=1sX8esgAboTuLoUN_E9zCO4kBkfRid5Bk" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__flagship-button" id="uic">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/hackathon.jpg')}}" class="card-img-top events-page__flagship-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Ureck-A-Thon<div  class="float-right events-page__flagship-badge badge badge-secondary">Flagship</div></h4>
                                <p class="card-text lead">Challenge your innerself to bring out the best in you!</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Sourav Nandy <a href="tel:8336986162"><i class="fa fa-phone" aria-hidden="true"></i> +91 8336986162</a>
                                <br>Hrithik Naha <a href="tel:7044098818"><i class="fa fa-phone" aria-hidden="true"></i> +91 7044098818</a></p>
                                <a href="https://drive.google.com/file/d/1b84q_Gi0PxGoScBipAKkVO97Ked5Zhzv/view?usp=drivesdk" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__flagship-button" id="urecathon">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>



            <section id="events-page__business" class="events-page__business">
                <h3 class="events-page__business-title display-4">
                    <center>Let's talk about dhan!</center>
                </h3>
                <div class="events-page__business-cards">
                    <div class="card">
                            <img src="{{ asset('images/events/get_set_sell.jpg')}}" class="card-img-top events-page__business-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Get Set Sell<div  class="float-right events-page__business-badge badge badge-secondary">Business</div></h4>
                                <p class="card-text lead">This event is all about making business strategies and how well can one manipulate others with his/her convincing powers.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Satwik Das <a href="tel:8910230982"><i class="fa fa-phone" aria-hidden="true"></i> +91 8910230982</a>
                                <br>Deboleena Das <a href="tel:9123355282"><i class="fa fa-phone" aria-hidden="true"></i> +91 9123355282</a></p>
                                <a href="https://drive.google.com/file/d/11K6Z61LYh-Cr2xuMiDx8CbwmU1tU3FwR/view" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__business-button" id="getsetsell">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/ad_making.jpg')}}" class="card-img-top events-page__business-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">Ad Mad<div  class="float-right events-page__business-badge badge badge-secondary">Business</div></h4>
                                <p class="card-text lead">Are you confident enough to create the best ad with most convincing dialogs and motion? Then this event is meant for you.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Rudrangshu Dutta <a href="tel:8240238298"><i class="fa fa-phone" aria-hidden="true"></i> +91 8240238298</a>
                                <br>Koyel Dey <a href="tel:8777252629"><i class="fa fa-phone" aria-hidden="true"></i> +91 8777252629</a></p>
                                <a href="https://drive.google.com/open?id=1u3WWX-6cLF3R_stiPvKJD5cyl_ycr0yi" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__business-button" id="admaking">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>



            <section id="events-page__miscellaneous" class="events-page__miscellaneous">
                <h3 class="events-page__miscellaneous-title display-4">
                   <center> Dimaag ka Khel!</center>
                </h3>
                <div class="events-page__miscellaneous-cards">
                    <div class="card">
                            <img src="{{ asset('images/events/thinkq.jpg')}}" class="card-img-top events-page__miscellaneous-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">ClueX<div class="float-right events-page__miscellaneous-badge badge badge-secondary">Brain Game</div></h4>
                                <p class="card-text lead">The seacrh is on. Test your brain with puzzles, riddles, and a treasure hunt that puts the best and brightest to shame.</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Ronit Ray <a href="tel:7278250969"><i class="fa fa-phone" aria-hidden="true"></i> +91 7278250969</a></p>
                                <br>Sapatarshi De <a href="tel:9674658868"><i class="fa fa-phone" aria-hidden="true"></i> +91 9674658868</a>
                                <a href="https://drive.google.com/open?id=1gxkr___SEc7a8WuSWG7eARK_8Sx70E_x" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                 <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__miscellaneous-button" id="cluex">
                                    Register
                                </button>
                                @endauth
                                @guest
                                <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/events/thinkq.jpg')}}" class="card-img-top events-page__miscellaneous-cards-image" alt="events pictures">
                            <div class="card-body">
                                <h4 class="card-title">ThinkTech<div  class="float-right events-page__miscellaneous-badge badge badge-secondary">Brain Game</div></h4>
                                <p class="card-text lead">Kolkata's biggest Inter-college Tech quiz is back with a bang. Are you ready?</p>
                                <h5 class="mt-3">Event Co-ordinators</h5>
                                <p>Bhaskarjyaa Chatterjee <a href="tel:8336927075"><i class="fa fa-phone" aria-hidden="true"></i> +91 8336927075</a>
                                <br>Sabyasachi Ganguly <a href="tel:9874287348"><i class="fa fa-phone" aria-hidden="true"></i> +91 9874287348</a></p>
                                <a href="#" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                                <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                                @auth
                                <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__miscellaneous-button" id="techquiz">
                                    Register
                                </button>
                                @endauth
                                @guest
                            <!-- Button trigger modal -->
                                <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button"  >
                                    Login to Register
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a name="" id=""
                                                   class="btn btn-outline-warning btn-block"
                                                   href="/signin" role="button">Login</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                            </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>

            <section id="events-page__initiatives" class="events-page__initiatives">
                <h3 class="events-page__initiatives-title display-4">
                    Humara Initiatives
                </h3>
                <div class="events-page__initiatives-cards">
                    <div class="card">
                        <img src="{{ asset('images/events/arduino.jpeg')}}" class="card-img-top events-page__initiatives-cards-image" alt="events pictures">
                        <div class="card-body">
                            <h4 class="card-title">Ard-U-Know<div class="float-right events-page__initiatives-badge badge badge-secondary">Initiatives</div>
                            </h4>
                            <p class="card-text lead">Assemble makers and innovators to the most awaited platform to showcase your skills.

                                Gear up and pull up your socks to showcase your skills as the platform gets lit with celebrations.

                                SKUBOTICS in association with URECKON brings to the city its flagship event ARD-U-KNOW?, a hardware hackathon where you will be given a problem statement and an Arduino based hardware kit and you'll have to make the solution to the problem statement come to life.</p>
                            <h5 class="mt-3">Event Co-ordinators</h5>
                            <p>Tridib Halder <a href="tel:7908481880"><i class="fa fa-phone" aria-hidden="true"></i> +91 7908481880</a>
                                <br>Tunir Saha <a href="tel:8981423820"><i class="fa fa-phone" aria-hidden="true"></i> +91 8981423820</a></p>
                            <a href="#" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                             <a href="https://www.skubotics.in/hackathon/2019_register.php" class="btn btn-primary float-right hvr-buzz">Register</a>
                            <!--<button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__initiatives-button" id="solvero">
                                Register
                            </button>-->
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/events/biotex.jpg')}}" class="card-img-top events-page__initiatives-cards-image" alt="events pictures">
                        <div class="card-body">
                            <h4 class="card-title">BioteXpression<div class="float-right events-page__initiatives-badge badge badge-secondary">Initiatives</div>
                            </h4>
                            <p class="card-text lead">"BIOTEXPRESSION ! " is an event where teams can showcase their working models with a connection to BIOTECHNOLOGY and show how it's useful in the real world</p>
                            <h5 class="mt-3">Event Co-ordinators</h5>
                            <p>Abarna Chatterjee <a href="tel:9051184627"><i class="fa fa-phone" aria-hidden="true"></i> +91 9051184627</a>
                            <br>Deboleena Das <a href="tel:9123355282"><i class="fa fa-phone" aria-hidden="true"></i> +91 9123355282</a></p>
                            <a href="https://drive.google.com/open?id=1l5IYNbJN8_BTZ_mfB5jnnn-6mcRM9pdI" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                            <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                            @auth
                            <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__initiatives-button" id="biotex">
                                Register
                            </button>
                            @endauth
                            @guest
                        <!-- Button trigger modal -->
                            <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" >
                                Login to Register
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                 aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                        </div>
                                        <div class="modal-body">
                                            <a name="" id=""
                                               class="btn btn-outline-warning btn-block"
                                               href="/signin" role="button">Login</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/events/healthy.jpg')}}" class="card-img-top events-page__initiatives-cards-image" alt="events pictures">
                        <div class="card-body">
                            <h4 class="card-title">Healthy Bites<div class="float-right events-page__initiatives-badge badge badge-secondary">Initiatives</div>
                            </h4>
                            <p class="card-text lead">"HEALTHY BITES ! " is an event where teams have to cook food keeping in mind the healthy factor. After all, no one will mind having a plate of delicacies that are healthy</h5>
                            <p>Abarna Chatterjee <a href="tel:9051184627"><i class="fa fa-phone" aria-hidden="true"></i> +91 9051184627</a>
                            <br>Deboleena Das <a href="tel:9123355282"><i class="fa fa-phone" aria-hidden="true"></i> +91 9123355282</a></p>
                            <a href="https://drive.google.com/open?id=1jefoSrI6U4FLIY5wfrYPdb65RUA8--GJ" class="btn btn-light hvr-wobble-vertical"><i class="fas fa-arrow-down"></i> Download</a>
                            <!-- <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a> -->
                            @auth
                            <button class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__initiatives-button" id="healthybites">
                                Register
                            </button>
                            @endauth
                            @guest
                        <!-- Button trigger modal -->
                            <a href="/signin" class="btn btn-primary float-right hvr-buzz btn-show-contact100 events-page__gaming-button" >
                                Login to Register
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                 aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="modelTitleId">Not Signed In !</h4>
                                        </div>
                                        <div class="modal-body">
                                            <a name="" id=""
                                               class="btn btn-outline-warning btn-block"
                                               href="/signin" role="button">Login</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>


        </div>
    </div>
    </div>

    <div class="container-contact100" id="output">
        @guest
        <div class="wrap-contact100" id="notSigned">
            <button class="btn-hide-contact100 mt-2" >
                <i class="far fa-times-circle"></i>
            </button>
            <div class="contact100-form-title" style="background: #eeeeee">
                <span style="text-align:center;">It seems like you are not signed up. Sign Up here:</span>
            </div>
            <div class="container-contact100-form-btn">
                <a href="/signup"><button class="contact100-form-btn">
                        Sign Up
                    </button></a>
            </div>
        </div>
        @endguest
        @auth
            <div class="wrap-contact100" id="signed">
                <button class="btn-hide-contact100">
                    <i class="far fa-times-circle"></i>
                </button>

                <div class="contact100-form-title" style="background: #eeeeee">
                    <span>Register</span>
                </div>

                <form class="contact100-form" method="POST" id="registrationform" action="/user/registerEvent">
                    @csrf
                    <input type="hidden" name="event" id="eventnameinput">
                    <div class="wrap-input100 validate-input">
                        <input id="name" class="input100" type="text" name="team" placeholder="Team Name" autocomplete="off" required>
                        <span class="focus-input100"></span>
                        <label class="label-input100" for="name">
                            <span class="fa fa-users"></span>
                        </label>
                    </div>

                    <div id="member1" class="members">
                        <div class="wrap-input100 validate-input" id="the-basics">
                            <input id="email" class="input100 typeahead" type="text" name="user" value="{{ Auth::user()->username }}" readonly="true" required="true">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="email">
                                <span class="fa fa-user"></span>
                            </label>
                        </div>
                    </div>
                    <div id="member2" class="members" style="display: none">
                        <div class="wrap-input100 validate-input" id="the-basics">
                            <input id="email" class="input100 typeahead" type="text" name="username2" placeholder="Enter Member 2 Username ">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="email">
                                <span class="fa fa-user"></span>
                            </label>
                        </div>
                    </div>
                    <div id="member3" class="members" style="display: none">
                        <div class="wrap-input100 validate-input" id="the-basics">
                            <input id="email" class="input100 typeahead" type="text" name="username3" placeholder="Enter Member  3 Username ">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="email">
                                <span class="fa fa-user"></span>
                            </label>
                        </div>
                    </div>
                    <div id="member4" class="members" style="display: none">
                        <div class="wrap-input100 validate-input" id="the-basics">
                            <input id="email" class="input100 typeahead" type="text" name="username4" placeholder="Enter Member  4 Username ">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="email">
                                <span class="fa fa-user"></span>
                            </label>
                        </div>
                    </div>
                    <div id="member5" class="members" style="display: none">
                        <div class="wrap-input100 validate-input" id="the-basics">
                            <input id="email" class="input100 typeahead" type="text" name="username5" placeholder="Enter Member 5 Username ">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="email">
                                <span class="fa fa-user"></span>
                            </label>
                        </div>
                    </div>
                    <button id="addmember" class="btn btn-success btn-sm" type="button">+</button>
                    <button id="delmember" class="btn btn-danger btn-sm" type="button">-</button>

                    <div class="container-contact100-form-btn">
                        <input type="submit" class="btn btn-info btn-sm btn-block font-weight-bold" value="Submit" onclick="checkform()">
                        <script>
                            function checkform()
                            {
                                var event = document.getElementById('eventnameinput');
                                console.log(event);
                                // event.value = 'Coding';
                                document.getElementById("registrationform").submit();
                                // var event = $('.contact100-form-title')[0].innerText;
                                // console.log(event);
                                // alert(event);

                            }

                        </script>
                    </div>
                </form>
            </div>
        @endauth
        </div>

        <footer class="footer footer__events">
        <div class="container">
            <div class="footer__events-links">
                <div>
                  <h6 >
                    <a href="/about">About</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="/partners">Partners</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="/team">Team</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="/web">Dev</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="http://uosc.ureckon.org/">UOSC</a>
                  </h6>
                </div>
              </div>
          <hr class="footer__web-line">
          <div>
          <div class="footer__web-text">
              <p style="line-height: 1.7rem">Ureckon-The Annual TechnoManagement Festival of University of Engineering & Management, Kolkata.</p>
            </div>
          </div>
            <div >
              <div class="footer__events-socials">
                <!-- Facebook -->
                <a href="https://facebook.com/ureckon.uemk" class="fb-ic">
                  <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/Ureckon_Uemk" class="tw-ic">
                  <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a href="https://linkedin.com/company/ureckon" class="li-ic">
                  <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a href="https://instagram.com/ureckon.uemk" class="ins-ic">
                  <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                </a>
                <!--Youtube-->
                <a href="https://youtube.com/c/UreckonUEMKolkata" class="you-ic">
                  <i class="fab fa-youtube fa-lg white-text"> </i>
                </a>
              </div>
            </div>
           </div>
        </div>
        <div class="footer__events-copyright">© 2019 Copyright:
          <a href="http://ureckon.org">Ureckon.org</a>
        </div>
      </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.js" charset="utf-8"></script>
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="{{ asset('js/Modules/smooth-scroll.js')}}"></script>

    <script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{ asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <script src="{{ asset('vendor/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{ asset('js/events.js')}}"></script>

    <script src="{{ asset('js/register.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('js/Modules/header.js')}}"></script>

    <script>
        var members = {{ json_encode($usernames) }}
        // typeahead:
        var substringMatcher = function (strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function (i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
            });

            cb(matches);
        };
        };

        $('#the-basics .typeahead').typeahead({
        hint: false,
        highlight: true,
        minLength: 1
        },
        {
            name: 'states',
            source: substringMatcher(members)
        }
        );


    </script>

</body>
</html>
