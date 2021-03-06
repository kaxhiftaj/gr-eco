<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>GR-ECO</title>

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}" />                            <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ secure_asset('css/vendor/font-awesom/css/font-awesome.min.css') }}" />  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ secure_asset('css/vendor/mmenu/jquery.mmenu.all.css') }}" />          <!-- Menu Responsive -->
    <link rel="stylesheet" href="{{ secure_asset('css/vendor/animate-wow/animate.css') }}" />               <!-- Animation WOW -->

    <link rel="stylesheet" href="{{ secure_asset('css/vendor/labelauty/labelauty.css') }}">               <!-- Checkbox form Style -->
    <link rel="stylesheet" href="{{ secure_asset('css/vendor/nouislider/nouislider.min.css') }}" />         <!-- Slider Price -->
    <link rel="stylesheet" href="{{ secure_asset('css/vendor/easydropdown/easydropdown.css') }}" />         <!-- Select form Style -->
    <link rel="stylesheet" href="{{ secure_asset('css/ui-spinner.css') }}">                               <!-- Spinner -->

    <link rel="stylesheet" href="{{ secure_asset('css/menu.css') }}">                                     <!-- Include Menu stylesheet -->
    <link rel="stylesheet" href="{{ secure_asset('css/custom.css') }}">                                   <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ secure_asset('css/media-query.css') }}">                              <!-- Media Query -->

    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ secure_asset('images/favicon/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ secure_asset('images/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ secure_asset('images/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ secure_asset('images/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ secure_asset('images/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ secure_asset('images/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ secure_asset('images/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ secure_asset('images/favicon/apple-touch-icon-152x152.png') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{ secure_asset('script/modernizr.min.js') }}"></script> <!-- Modernizr -->

    @yield('stylesheets')
</head>
<body class="fixed-header">
<div id="page-container">
    {{-- Navbar --}}
    @include('public.components.navbar')

    @yield('content')

    {{-- Footer --}}
    @include('public.components.footer')

    <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            <div class="login-button-container">
                <a href="#" data-section="login"><i class="fa fa-user"></i></a>
                <a href="#" data-section="sign-in"><i class="fa fa-pencil-square-o"></i></a>
                <a href="#" data-section="recovery"><i class="fa fa-lock"></i></a>
                <a href="#" data-section="setting"><i class="fa fa-cog"></i></a>
            </div><!-- ./login-button-container -->
            <div class="form-container">
                <form method="post" action="#">
                    <div id="login" class="box">
                        <h2 class="title">Login in to your account</h2>
                        <h3 class="sub-title">It is a breach of our terms and conditions to provide username and password details to unauthorised third parties. Unauthorised use may lead to suspension or termination.</h3>
                        <div class="field">
                            <input id="user-log" name="user-log" class="form-control" type="text" placeholder="Username or email">
                            <i class="fa fa-user user"></i>
                        </div>
                        <div class="field">
                            <input id="password-log" name="password-log" class="form-control" type="password" placeholder="Password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <span class="remember"><input class="labelauty" type="checkbox" data-labelauty="Keep me signed in" checked /></span>
                            <button type="button" class="btn btn-reverse button-form">Reset</button>
                            <button type="button" class="btn btn-default button-form">Login</button>
                        </div>
                    </div> <!-- ./login -->
                    <div id="sign-in" class="box">
                        <h2 class="title">Sign In</h2>
                        <h3 class="sub-title">Create a Free account and discover how you can centralize all communication around a transaction, connect with clients, market your listings, and more. </h3>
                        <div class="form-inline">
                            <div class="form-group">
                                <input id="user-sign" name="user-sign" class="form-control input-inline margin-right" type="text" placeholder="Username">
                                <i class="fa fa-user user"></i>
                            </div>
                            <div class="form-group">
                                <input id="email-sign" class="form-control input-inline" type="text" name="email-sign" placeholder="Email">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="field">
                            <input id="password-sign" class="form-control" type="password" name="password-sign" placeholder="Password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field">
                            <input id="re-password-sign" class="form-control" type="password" name="re-password-sign" placeholder="Repeat password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <span class="remember"><input class="labelauty" type="checkbox" data-labelauty="I have read the privacy policy." checked /></span>
                            <button type="button" class="btn btn-default button-form">Sign in</button>
                        </div>
                    </div><!-- ./sign-in -->
                    <div id="setting" class="box">
                        <h2 class="title">Setting profile</h2>
                        <h3 class="sub-title">Please note: You won't be able to change your name within the next 60 days. Make sure that you don't add any unusual capitalisation, punctuation, characters or random words. <a href="#">Learn more</a>.</h3>
                        <div class="field">
                            <input id="username-block" class="form-control" type="text" name="username-block" value="John Doe" disabled>
                            <i class="fa fa-user user"></i>
                        </div>
                        <div class="field">
                            <input id="email-setting" class="form-control" type="text" name="email-setting" value="administrator@prohome.com">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="field">
                            <input id="update-pass" class="form-control" type="password" name="update-pass" placeholder="New password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field">
                            <input id="update-repass" class="form-control" type="password" name="update-repass" placeholder="Repeat password">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <button type="button" class="btn btn-reverse button-form">Cancel</button>
                            <button type="button" class="btn btn-default button-form">Update</button>
                        </div>
                    </div><!-- ./recovery -->
                    <div id="recovery" class="box">
                        <h2 class="title">Need a new password?</h2>
                        <h3 class="sub-title">Enter your email address, and we’ll email you instructions to reset your password.</h3>
                        <div class="field">
                            <input id="recovery-email" class="form-control" type="text" name="recovery-email" placeholder="Your email">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <button type="button" class="btn btn-default button-form">Recovery</button>
                        </div>
                    </div><!-- ./recovery -->
                </form><!-- ./form-container -->
            </div><!-- ./login-button-container -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

            <div class="form-container full-fixed">
                <form method="post" action="#">
                    <div id="form-modal-contact" class="box active modal-contact">
                        <h2 class="title">How can we help?</h2>
                        <h3 class="sub-title">Please send us your thoughts by filling out the below form. Comments are solely for internal use. Your address will not be shared with outside parties or used for any other purpose than to respond to your comments.</h3>
                        <ul class="object-contact">
                            <li><a href="#"><i class="fa fa-code"></i>Suggestion</a></li>
                            <li><a href="#"><i class="fa fa-question"></i>Question</a></li>
                            <li><a href="#" class="active"><i class="fa fa-bug"></i>Problems</a></li>
                            <li><a href="#"><i class="fa fa-comment-o"></i>Feedback</a></li>
                        </ul>
                        <div class="field">
                            <textarea class="form-control" name="message" id="message" placeholder="Your message"></textarea>
                        </div>
                        <div class="field">
                            <input id="short-summary" class="form-control" type="text" name="short-summary" placeholder="Short summary">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="field">
                            <input id="email-help" class="form-control" type="text" name="email-help" placeholder="Your email">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="field footer-form text-right">
                            <button type="button" class="btn btn-reverse button-form">Cancel</button>
                            <button type="button" class="btn btn-default button-form">Send</button>
                        </div>

                    </div>
                </form>
            </div>


        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /#page-container -->

<script	src="{{ secure_asset('script/jquery.min.js') }}"></script>		<!-- jQuery	(necessary for Bootstrap's JavaScript plugins) -->
<script	src="{{ secure_asset('script/jquery-ui.min.js') }}"></script>		<!-- jQuery	UI is a	curated	set	of user	interface interactions,	effects, widgets, and themes -->
<script	src="{{ secure_asset('script/bootstrap.min.js') }}"></script>		<!-- Include all compiled plugins (below), or include individual files as needed -->

<script	src="{{ secure_asset('script/vendor/mmenu/mmenu.min.all.js') }}"></script>					<!-- Menu Responsive -->
<script	src="{{ secure_asset('script/vendor/animation-wow/wow.min.js') }}"></script>					<!-- Animate Script	-->
<script src="{{ secure_asset('script/vendor/labelauty/labelauty.min.js') }}"></script>					<!-- Checkbox Script -->
<script	src="{{ secure_asset('script/vendor/parallax/parallax.min.js') }}"></script>						<!-- Parallax Script -->
<script	src="{{ secure_asset('script/vendor/images-fill/imagesloaded.min.js') }}"></script>			<!-- Loaded	image with ImageFill -->
<script src="{{ secure_asset('script/vendor/images-fill/imagefill.min.js') }}"></script>					<!-- ImageFill Script -->
<script	src="{{ secure_asset('script/vendor/easydropdown/jquery.easydropdown.min.js') }}"></script>	<!-- Select	list Script	-->
<script	src="{{ secure_asset('script/vendor/noui-slider/nouislider.all.min.js') }}"></script>				<!-- Range Slider -->
<script	src="{{ secure_asset('script/vendor/carousel/responsiveCarousel.min.js') }}"></script>		<!-- Carousel Script -->

<script	src="http://maps.google.com/maps/api/js?key=AIzaSyDSW_4FbBdZg0cziJiniKZki4uF9bA8khU"></script>			<!-- Google Map -->
<script	src="{{ secure_asset('script/vendor/maps/infobox.js') }}"></script>							<!-- InfoBox extends the Google Maps JavaScript API V3 -->
<script	src="{{ secure_asset('script/vendor/maps/home-maps.js') }}"></script>							<!-- Custtom Map Color / Box Property -->
<script	src="{{ secure_asset('script/vendor/maps/markerclusterer.js') }}"></script>					<!-- The library creates and manages per-zoom-level clusters for large amounts of markers -->

<script	src="{{ secure_asset('script/custom.js') }}"></script>		<!-- Custom	Script -->
<script>
    /* CLOSE SEARCH BOX */
    setTimeout(function(){$('.botton-options').click()}, 4000);
</script>

</body>
</html>