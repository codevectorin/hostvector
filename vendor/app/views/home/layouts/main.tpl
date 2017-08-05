<!DOCTYPE html>
<html>
    <head>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
            <title>
                {% block title %}{% endblock %} - HostVector
            </title>
            {% block css %}
            <link href="https://fonts.googleapis.com/css?family=Dosis|Montserrat|Open+Sans|Raleway" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css" rel="stylesheet" type="text/css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="./assets/css/custom.css" rel="stylesheet" type="text/css">
            <link href="./assets/css/animate.css" rel="stylesheet" type="text/css">
            {% endblock %}
            <noscript>
                <style>.invisible { opacity: 1; }</style>
            </noscript> 
            <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
            <link rel="manifest" href="assets/img/favicon/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">
    </head>
    <body>

        <section class="hero is-light{% if block('fullscreenHeroBody') is defined %} is-fullheight{% endif %} {{ block('heroClass')|raw }}" id="frontMatter">

            <div class="hero-head">
              {% include 'home/layouts/includes/nav.tpl' %}
            </div>

            {% if block('fullscreenHeroBody') is defined %}
              <div class="hero-body">
                {{ block('fullscreenHeroBody')|raw }}
              </div>
            {% endif %}
            
        </section>

        {% block content %}{% endblock %}

           <footer class="footer invisible" data-animate data-animation-classes="animated fadeIn" data-animation-delay="15">
        <div class="container">
            <div class="content">
                <div class="columns">
                    <div class="column">
                        <h5>
                                HostVector
                            </h5>
                        <a href="/index.html" title="Home">Home</a>
                        <a href="/plans.html" title="Plans">Plans</a>
                        <a href="/features.html" title="Features">Features</a>
                    </div>
                    <div class="column">
                        <h5>
                                Company
                            </h5>
                        <a href="/about.html" title="About Us">
                                About Us
                            </a>
                        <a href="/contact.html" title="Contact Us">
                                Contact Us
                            </a>
                        <a href="tos.html" title="Terms of Service">Terms of Service</a>
                        <a href="privacy.html" title="Privacy Policy">Privacy Policy</a>
                    </div>
                    <div class="column">
                        <h5>
                                Help
                            </h5>
                        <a href="/clients/submitticket.php?step=2&deptid=1" title="Support">
                                Support
                            </a>
                        <a href="/faq.html" title="FAQ">
                                FAQ
                            </a>
                    </div>
                    <div class="column">
                        <h5>
                                Connect
                            </h5>
                        <a href="//facebook.com/hostvector.in" target="__blank">
                            <span class="icon is-small"><i class="fa fa-facebook">
                                </i></span> Facebook
                        </a>
                        <a href="//twitter.com/@hostvectorin" target="__blank">
                            <span class="icon is-small"><i class="fa fa-twitter">
                                </i></span> Twitter
                        </a>
                    </div>
                    <div class="column is-one-third">
                        <a class="twitter-timeline" data-dnt="true" data-height="200" data-link-color="3273dc" href="https://twitter.com/hostvectorin">Tweets by HostVectorIn</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomPart">
            <div class="container">&copy; HostVector. All Rights Reserved! 2017</div></div>
    </footer>

        {% block js %}
        <script async="" src="https://embed.tawk.to/58d50c1ef97dd14875f59ebf/default" charset="UTF-8" crossorigin="*"></script>
        <script src="assets/js/bulma.js"></script>
        <script src="assets/js/animate.js"></script>
        <script>
        var animate = new Animate({
            target: '[data-animate]',
            animatedClass: 'visible',
            offset: [0.20, 0.5],
            delay: 0,
            remove: false,
            reverse: false,
            scrolled: false,
            debug: false,
            onLoad: true,
            onScroll: true,
            onResize: false,
            callbackOnInit: function() {
                console.log('Initialised');
            },
            callbackOnAnimate: function(element) {
                console.log(element);
            }
        });
        animate.init();
    </script>
    {% endblock %} 

    </body>
</html>
