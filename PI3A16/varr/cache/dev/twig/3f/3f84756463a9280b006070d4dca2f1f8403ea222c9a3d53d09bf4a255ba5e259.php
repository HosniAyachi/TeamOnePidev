<?php

/* base.html.twig */
class __TwigTemplate_9b557e696a914e5c5c23d03541acaaf3b8b58279e92b429eee42be46bc81267c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>The Conference</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Conference project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\" ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/styles/main_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/styles/responsive.css"), "html", null, true);
        echo "\">
</head>
<body>

<div class=\"super_container\">

    <!-- Menu -->

    <div class=\"menu trans_500\">
        <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
            <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
            <div class=\"logo menu_logo\">
                <a href=\"#\">
                    <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                        <div class=\"logo_image\"><div><img src=\"/web/images/logo.png\" alt=\"\"></div></div>
                        <div class=\"logo_content\">
                            <div class=\"logo_text logo_text_not_ie\">The Conference</div>
                            <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                        </div>
                    </div>
                </a>
            </div>
            <ul>
                <li class=\"menu_item\"><a href=\"index.html\">Home</a></li>
                <li class=\"menu_item\"><a href=\"#\">About us</a></li>
                <li class=\"menu_item\"><a href=\"#\">Speakers</a></li>
                <li class=\"menu_item\"><a href=\"#\">Tickets</a></li>
                <li class=\"menu_item\"><a href=\"news.html\">News</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
        <div class=\"menu_social\">
            <div class=\"menu_social_title\">Follow uf on Social Media</div>
            <ul>
                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class=\"home\">
        <!-- <div class=\"home_background\" style=\"background-image: url(/web/images/index.jpg)\"></div> -->
        <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"/web/images/index.jpg\" data-speed=\"0.8\"></div>

        <!-- Header -->

        <header class=\"header\" id=\"header\">
            <div>
                <div class=\"header_top\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"header_top_content d-flex flex-row align-items-center justify-content-start\">
                                    <div>
                                        <a href=\"#\">
                                            <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                                <div class=\"logo_image\"><div><img src=\"/web/images/logo.png\" alt=\"\"></div></div>
                                                <div class=\"logo_content\">
                                                    <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                                    <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"header_social ml-auto\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"hamburger ml-auto\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"header_nav\" id=\"header_nav_pin\">
                    <div class=\"header_nav_inner\">
                        <div class=\"header_nav_container\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"header_nav_content d-flex flex-row align-items-center justify-content-start\">
                                            <nav class=\"main_nav\">
                                                <ul>
                                                    <li class=\"active\"><a href=\"index.html\">Home</a></li>
                                                    <li><a href=\"#\">About Us</a></li>
                                                    <li><a href=\"speakers.html\">Speakers</a></li>
                                                    <li><a href=\"events.html\">Events</a></li>
                                                    <li><a href=\"news.html\">News</a></li>
                                                    <li><a href=\"contact.html\">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <div class=\"header_extra ml-auto\">
                                                <div class=\"header_search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
                                                <div class=\"button header_button\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"search_container\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"search_content d-flex flex-row align-items-center justify-content-end\">
                                            <form action=\"#\" id=\"search_container_form\" class=\"search_container_form\">
                                                <input type=\"text\" class=\"search_container_input\" placeholder=\"Search\" required=\"required\">
                                                <button class=\"search_container_button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class=\"home_content_container\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"home_content\">
                            <div class=\"home_date\">August 25, 2018</div>
                            <div class=\"home_title\">2018 Public Policy Conference</div>
                            <div class=\"home_location\">Miami Marina Bay, FL</div>
                            <div class=\"home_text\">Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
                            <div class=\"home_buttons\">
                                <div class=\"button home_button\"><a href=\"#\">Buy Tickets Now!</a></div>
                                <div class=\"button home_button\"><a href=\"#\">Find out more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class=\"intro\">
        <div class=\"intro_content d-flex flex-row flex-wrap align-items-start justify-content-between\">

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_1.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Conference Program</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_2.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Supersessions</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_3.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">The Speakers</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_4.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Explore Sessions</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_5.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Directory</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_6.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Speakers Schedule</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

        </div>
    </div>

    <!-- Pricing -->

    <div class=\"pricing\">
        <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"/web/images/pricing.jpg\" data-speed=\"0.8\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <div class=\"pricing_section_title\">Choose a plan</div>
                </div>
            </div>
            <div class=\"row pricing_row\">

                <!-- Pricing Item -->
                <div class=\"col-lg-4 pricing_col\">
                    <div class=\"pricing_item\">
                        <div class=\"pricing_item_content\">
                            <div class=\"pricing_level\">Beginner</div>
                            <div class=\"pricing_price\">Free</div>
                            <ul class=\"pricing_list\">
                                <li>3 Conference Tickets</li>
                                <li>Vip Table</li>
                                <li>Drinks</li>
                                <li>Special PASS</li>
                                <li>VIP Dinner</li>
                            </ul>
                            <div class=\"pricing_info\">
                                <a href=\"#\">i</a>
                            </div>
                            <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item -->
                <div class=\"col-lg-4 pricing_col\">
                    <div class=\"pricing_item pricing_item_mid\">
                        <div class=\"pricing_item_content\">
                            <div class=\"pricing_level\">recommended</div>
                            <div class=\"pricing_price\">\$29<span>90</span></div>
                            <ul class=\"pricing_list\">
                                <li>3 Conference Tickets</li>
                                <li>Vip Table</li>
                                <li>Drinks</li>
                                <li>Special PASS</li>
                                <li>VIP Dinner</li>
                            </ul>
                            <div class=\"pricing_info\">
                                <a href=\"#\">i</a>
                            </div>
                            <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item -->
                <div class=\"col-lg-4 pricing_col\">
                    <div class=\"pricing_item\">
                        <div class=\"pricing_item_content\">
                            <div class=\"pricing_level\">Professional</div>
                            <div class=\"pricing_price\">\$59<span>90</span></div>
                            <ul class=\"pricing_list\">
                                <li>3 Conference Tickets</li>
                                <li>Vip Table</li>
                                <li>Drinks</li>
                                <li>Special PASS</li>
                                <li>VIP Dinner</li>
                            </ul>
                            <div class=\"pricing_info\">
                                <a href=\"#\">i</a>
                            </div>
                            <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->

    <div class=\"calendar\">
        <div class=\"container reset_container\">
            <div class=\"row\">
                <div class=\"col-xl-6 calendar_col\">
                    <div class=\"calendar_container\">
                        <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_icon\"><img src=\"/web/images/calendar.svg\" alt=\"\"></div></div>
                            <div class=\"calendar_title\">22 april events calendar</div>
                        </div>
                        <div class=\"calendar_items\">

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_1.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>14:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Business 101</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_2.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>15:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>About technology</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_3.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>17:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Conference calls</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_4.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>20:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Drinks and dinner</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"col-xl-6 calendar_col\">
                    <div class=\"calendar_container\">
                        <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_icon\"><img src=\"/web/images/calendar.svg\" alt=\"\"></div></div>
                            <div class=\"calendar_title\">23 april events calendar</div>
                        </div>
                        <div class=\"calendar_items\">

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_5.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>14:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Business 101</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_6.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>15:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>About technology</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_7.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>17:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Conference calls</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_8.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>20:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Drinks and dinner</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Call to action -->

    <div class=\"cta\">
        <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"/web/images/cta_1.jpg\" data-speed=\"0.8\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"cta_content text-center\">
                        <div class=\"cta_title\">Get your tickets now!</div>
                        <div class=\"button cta_button\"><a href=\"#\">Find out more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class=\"footer\">
        <div class=\"footer_content\">
            <div class=\"container\">
                <div class=\"row\">

                    <!-- Footer Column -->
                    <div class=\"col-lg-4 footer_col\">
                        <div class=\"footer_about\">
                            <div>
                                <a href=\"#\">
                                    <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                        <div class=\"logo_image\"><div><img src=\"/web/images/logo.png\" alt=\"\"></div></div>
                                        <div class=\"logo_content\">
                                            <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                            <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"footer_about_text\">
                                <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class=\"col-lg-3 footer_col\">
                        <div class=\"footer_links\">
                            <ul>
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Speakers</a></li>
                                <li><a href=\"#\">Event Dates</a></li>
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Calendar</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class=\"col-lg-3 footer_col\">
                        <div class=\"footer_links\">
                            <ul>
                                <li><a href=\"#\">Logistics</a></li>
                                <li><a href=\"#\">Our Partners</a></li>
                                <li><a href=\"#\">Testimonials</a></li>
                                <li><a href=\"#\">Price Plans</a></li>
                                <li><a href=\"#\">News</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class=\"col-lg-2 footer_col\">
                        <div class=\"footer_links\">
                            <ul>
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Speakers</a></li>
                                <li><a href=\"#\">Event Dates</a></li>
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Calendar</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"footer_extra\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center\">
                            <div class=\"footer_social\">
                                <div class=\"footer_social_title\">Follow us on Social Media</div>
                                <ul class=\"footer_social_list\">
                                    <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"footer_extra_right ml-lg-auto text-lg-right\">
                                <div class=\"footer_extra_links\">
                                    <ul>
                                        <li><a href=\"contact.html\">Contact us</a></li>
                                        <li><a href=\"#\">Sitemap</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                    </ul>
                                </div>
                                <div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/js/custom.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 582,  643 => 581,  639 => 580,  635 => 579,  631 => 578,  627 => 577,  623 => 576,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>The Conference</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Conference project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/web/styles/bootstrap4/bootstrap.min.css') }}\">
    <link href=\" {{ asset('/web/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/web/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/web/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/web/plugins/OwlCarousel2-2.2.1/animate.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/web/styles/main_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/web/styles/responsive.css') }}\">
</head>
<body>

<div class=\"super_container\">

    <!-- Menu -->

    <div class=\"menu trans_500\">
        <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
            <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
            <div class=\"logo menu_logo\">
                <a href=\"#\">
                    <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                        <div class=\"logo_image\"><div><img src=\"/web/images/logo.png\" alt=\"\"></div></div>
                        <div class=\"logo_content\">
                            <div class=\"logo_text logo_text_not_ie\">The Conference</div>
                            <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                        </div>
                    </div>
                </a>
            </div>
            <ul>
                <li class=\"menu_item\"><a href=\"index.html\">Home</a></li>
                <li class=\"menu_item\"><a href=\"#\">About us</a></li>
                <li class=\"menu_item\"><a href=\"#\">Speakers</a></li>
                <li class=\"menu_item\"><a href=\"#\">Tickets</a></li>
                <li class=\"menu_item\"><a href=\"news.html\">News</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
        <div class=\"menu_social\">
            <div class=\"menu_social_title\">Follow uf on Social Media</div>
            <ul>
                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class=\"home\">
        <!-- <div class=\"home_background\" style=\"background-image: url(/web/images/index.jpg)\"></div> -->
        <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"/web/images/index.jpg\" data-speed=\"0.8\"></div>

        <!-- Header -->

        <header class=\"header\" id=\"header\">
            <div>
                <div class=\"header_top\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"header_top_content d-flex flex-row align-items-center justify-content-start\">
                                    <div>
                                        <a href=\"#\">
                                            <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                                <div class=\"logo_image\"><div><img src=\"/web/images/logo.png\" alt=\"\"></div></div>
                                                <div class=\"logo_content\">
                                                    <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                                    <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"header_social ml-auto\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"hamburger ml-auto\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"header_nav\" id=\"header_nav_pin\">
                    <div class=\"header_nav_inner\">
                        <div class=\"header_nav_container\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"header_nav_content d-flex flex-row align-items-center justify-content-start\">
                                            <nav class=\"main_nav\">
                                                <ul>
                                                    <li class=\"active\"><a href=\"index.html\">Home</a></li>
                                                    <li><a href=\"#\">About Us</a></li>
                                                    <li><a href=\"speakers.html\">Speakers</a></li>
                                                    <li><a href=\"events.html\">Events</a></li>
                                                    <li><a href=\"news.html\">News</a></li>
                                                    <li><a href=\"contact.html\">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <div class=\"header_extra ml-auto\">
                                                <div class=\"header_search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
                                                <div class=\"button header_button\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"search_container\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"search_content d-flex flex-row align-items-center justify-content-end\">
                                            <form action=\"#\" id=\"search_container_form\" class=\"search_container_form\">
                                                <input type=\"text\" class=\"search_container_input\" placeholder=\"Search\" required=\"required\">
                                                <button class=\"search_container_button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class=\"home_content_container\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"home_content\">
                            <div class=\"home_date\">August 25, 2018</div>
                            <div class=\"home_title\">2018 Public Policy Conference</div>
                            <div class=\"home_location\">Miami Marina Bay, FL</div>
                            <div class=\"home_text\">Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
                            <div class=\"home_buttons\">
                                <div class=\"button home_button\"><a href=\"#\">Buy Tickets Now!</a></div>
                                <div class=\"button home_button\"><a href=\"#\">Find out more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class=\"intro\">
        <div class=\"intro_content d-flex flex-row flex-wrap align-items-start justify-content-between\">

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_1.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Conference Program</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_2.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Supersessions</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_3.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">The Speakers</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_4.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Explore Sessions</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_5.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Directory</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class=\"intro_item\">
                <div class=\"intro_image\"><img src=\"/web/images/intro_6.jpg\" alt=\"\"></div>
                <div class=\"intro_body\">
                    <div class=\"intro_title\"><a href=\"#\">Speakers Schedule</a></div>
                    <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

        </div>
    </div>

    <!-- Pricing -->

    <div class=\"pricing\">
        <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"/web/images/pricing.jpg\" data-speed=\"0.8\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <div class=\"pricing_section_title\">Choose a plan</div>
                </div>
            </div>
            <div class=\"row pricing_row\">

                <!-- Pricing Item -->
                <div class=\"col-lg-4 pricing_col\">
                    <div class=\"pricing_item\">
                        <div class=\"pricing_item_content\">
                            <div class=\"pricing_level\">Beginner</div>
                            <div class=\"pricing_price\">Free</div>
                            <ul class=\"pricing_list\">
                                <li>3 Conference Tickets</li>
                                <li>Vip Table</li>
                                <li>Drinks</li>
                                <li>Special PASS</li>
                                <li>VIP Dinner</li>
                            </ul>
                            <div class=\"pricing_info\">
                                <a href=\"#\">i</a>
                            </div>
                            <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item -->
                <div class=\"col-lg-4 pricing_col\">
                    <div class=\"pricing_item pricing_item_mid\">
                        <div class=\"pricing_item_content\">
                            <div class=\"pricing_level\">recommended</div>
                            <div class=\"pricing_price\">\$29<span>90</span></div>
                            <ul class=\"pricing_list\">
                                <li>3 Conference Tickets</li>
                                <li>Vip Table</li>
                                <li>Drinks</li>
                                <li>Special PASS</li>
                                <li>VIP Dinner</li>
                            </ul>
                            <div class=\"pricing_info\">
                                <a href=\"#\">i</a>
                            </div>
                            <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item -->
                <div class=\"col-lg-4 pricing_col\">
                    <div class=\"pricing_item\">
                        <div class=\"pricing_item_content\">
                            <div class=\"pricing_level\">Professional</div>
                            <div class=\"pricing_price\">\$59<span>90</span></div>
                            <ul class=\"pricing_list\">
                                <li>3 Conference Tickets</li>
                                <li>Vip Table</li>
                                <li>Drinks</li>
                                <li>Special PASS</li>
                                <li>VIP Dinner</li>
                            </ul>
                            <div class=\"pricing_info\">
                                <a href=\"#\">i</a>
                            </div>
                            <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->

    <div class=\"calendar\">
        <div class=\"container reset_container\">
            <div class=\"row\">
                <div class=\"col-xl-6 calendar_col\">
                    <div class=\"calendar_container\">
                        <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_icon\"><img src=\"/web/images/calendar.svg\" alt=\"\"></div></div>
                            <div class=\"calendar_title\">22 april events calendar</div>
                        </div>
                        <div class=\"calendar_items\">

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_1.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>14:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Business 101</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_2.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>15:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>About technology</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_3.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>17:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Conference calls</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_4.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>20:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Drinks and dinner</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"col-xl-6 calendar_col\">
                    <div class=\"calendar_container\">
                        <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_icon\"><img src=\"/web/images/calendar.svg\" alt=\"\"></div></div>
                            <div class=\"calendar_title\">23 april events calendar</div>
                        </div>
                        <div class=\"calendar_items\">

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_5.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>14:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Business 101</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_6.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>15:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>About technology</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_7.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>17:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Conference calls</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                            <!-- Calendar Item -->
                            <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                                <div><div class=\"calendar_item_image\"><img src=\"/web/images/event_8.jpg\" alt=\"\"></div></div>
                                <div class=\"calendar_item_time\">
                                    <div>20:00</div>
                                    <div>Auditorium</div>
                                </div>
                                <div class=\"calendar_item_text\">
                                    <div>Drinks and dinner</div>
                                    <div>08 AM - 04 PM</div>
                                    <div>Speaker: Daniel Hill</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Call to action -->

    <div class=\"cta\">
        <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"/web/images/cta_1.jpg\" data-speed=\"0.8\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"cta_content text-center\">
                        <div class=\"cta_title\">Get your tickets now!</div>
                        <div class=\"button cta_button\"><a href=\"#\">Find out more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class=\"footer\">
        <div class=\"footer_content\">
            <div class=\"container\">
                <div class=\"row\">

                    <!-- Footer Column -->
                    <div class=\"col-lg-4 footer_col\">
                        <div class=\"footer_about\">
                            <div>
                                <a href=\"#\">
                                    <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                        <div class=\"logo_image\"><div><img src=\"/web/images/logo.png\" alt=\"\"></div></div>
                                        <div class=\"logo_content\">
                                            <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                            <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"footer_about_text\">
                                <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class=\"col-lg-3 footer_col\">
                        <div class=\"footer_links\">
                            <ul>
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Speakers</a></li>
                                <li><a href=\"#\">Event Dates</a></li>
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Calendar</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class=\"col-lg-3 footer_col\">
                        <div class=\"footer_links\">
                            <ul>
                                <li><a href=\"#\">Logistics</a></li>
                                <li><a href=\"#\">Our Partners</a></li>
                                <li><a href=\"#\">Testimonials</a></li>
                                <li><a href=\"#\">Price Plans</a></li>
                                <li><a href=\"#\">News</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class=\"col-lg-2 footer_col\">
                        <div class=\"footer_links\">
                            <ul>
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Speakers</a></li>
                                <li><a href=\"#\">Event Dates</a></li>
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Calendar</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"footer_extra\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center\">
                            <div class=\"footer_social\">
                                <div class=\"footer_social_title\">Follow us on Social Media</div>
                                <ul class=\"footer_social_list\">
                                    <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"footer_extra_right ml-lg-auto text-lg-right\">
                                <div class=\"footer_extra_links\">
                                    <ul>
                                        <li><a href=\"contact.html\">Contact us</a></li>
                                        <li><a href=\"#\">Sitemap</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                    </ul>
                                </div>
                                <div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src=\"{{ asset('/web/js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('/web/styles/bootstrap4/popper.js') }}\"></script>
<script src=\"{{ asset('/web/styles/bootstrap4/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('/web/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('/web/plugins/easing/easing.js') }}\"></script>
<script src=\"{{ asset('/web/plugins/parallax-js-master/parallax.min.js') }}\"></script>
<script src=\"{{ asset('/web/js/custom.js') }}\"></script>
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\PI3A16\\app\\Resources\\views\\base.html.twig");
    }
}
