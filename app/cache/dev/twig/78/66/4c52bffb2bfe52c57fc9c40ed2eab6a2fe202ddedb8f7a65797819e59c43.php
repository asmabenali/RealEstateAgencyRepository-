<?php

/* FrontRealBundle:Default:contact.html.twig */
class __TwigTemplate_78664c52bffb2bfe52c57fc9c40ed2eab6a2fe202ddedb8f7a65797819e59c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontRealBundle::layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontRealBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo " Contact ";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"doc-bd\" id=\"doc-bd\">

        <div class=\"b12\" id=\"content\">
            <div class=\"u7\" id=\"main-content-block\">

                <div class=\"mod mod-bevel mod-bevel-med breadcrumb\" id=\"breadcrumb\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <ul class=\"font-narrow\">
                                <li class=\"first\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("front_real_homepage");
        echo "\">Accueil</a></li>
                                <li class=\"last\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("front_real_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- / #breadcrumb -->

                <div class=\"mod mod-bevel mod-bevel-light\" id=\"page\">
                    <div class=\"inner\">
                        <div class=\"bd\">

                            <h1>Contact us</h1>
                            <p>We always look forward to hearing from you. Use the form below to send us a message, we will come back to you as soon as we can.</p>
                            <form id=\"contact-form\" action=\"contact.php\" method=\"post\">
                                <div class=\"formel\">
                                    <label for=\"name_field\"><span>*</span> Your name</label>
                                    <div><input name=\"name\" type=\"text\" id=\"name_field\" class=\"text required\" size=\"50\" value=\"\" style=\"width:400px\" /></div>
                                </div>
                                <div class=\"formel\">
                                    <label for=\"email_field\"><span>*</span> Your email</label>
                                    <div><input name=\"email\" title=\"email\" type=\"text\" id=\"email_field\" class=\"text required email\" size=\"50\" value=\"\" style=\"width:400px\" /></div>
                                </div>
                                <div class=\"formel\">
                                    <label for=\"subject_field\"><span>*</span> Message subject</label>
                                    <div><input name=\"subject\" type=\"text\" id=\"subject_field\" class=\"text required\" size=\"50\" value=\"\" style=\"width:400px\" /></div>
                                </div>
                                <div class=\"formel\">
                                    <label for=\"message_field\"><span>*</span> Your message</label>
                                    <div><textarea name=\"message\" class=\"required\" cols=\"40\" rows=\"7\" id=\"message_field\" style=\"width:400px\"></textarea></div>
                                </div>
                                <div><input id=\"formbutton\" class=\"submit\" type=\"submit\" value=\"Send Message\" /></div>
                            </form>
                            <div id=\"form-info\"></div>
                        </div><!-- / .bd -->
                    </div><!-- / .inner -->
                </div><!-- / #page -->

            </div><!-- / #main-content-block -->
            <!-- <div class=\"u5\" id=\"sidebar\">

                <div class=\"mod mod-bevel mod-bevel-med\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <h3>Where we are?</h3>
                            <p>The Gherkin, 30 St Mary Axe<br/>London EC3A 8EP</p>
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.6384364142323!2d10.188595999999997!3d36.898996999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x683b3ab5565cd357!2sESPRIT!5e0!3m2!1sen!2stn!4v1428036235637\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\">

                            </iframe>
                        </div>
                    </div>
                </div>

            </div>--> <!-- / #sidebar -->
        </div><!-- / #content -->

    </div><!-- / #doc-bd -->




";
    }

    public function getTemplateName()
    {
        return "FrontRealBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  50 => 16,  38 => 6,  35 => 5,  29 => 3,);
    }
}
