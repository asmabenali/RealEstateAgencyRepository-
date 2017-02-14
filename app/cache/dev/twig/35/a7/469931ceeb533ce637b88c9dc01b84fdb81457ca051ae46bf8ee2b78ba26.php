<?php

/* FrontRealBundle:Default:detail.html.twig */
class __TwigTemplate_35a7469931ceeb533ce637b88c9dc01b84fdb81457ca051ae46bf8ee2b78ba26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontRealBundle::layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'container' => array($this, 'block_container'),
            'js' => array($this, 'block_js'),
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeimmob", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idOffre", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"doc-bd\" id=\"doc-bd\">

        <div class=\"b12\" id=\"content\">
            <div class=\"u8\" id=\"post-block\">

                <div class=\"mod mod-bevel mod-bevel-med breadcrumb\" id=\"breadcrumb\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <ul class=\"font-narrow\">
                                <li class=\"first\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("front_real_homepage");
        echo "\">Accueil</a></li>
                                <li class=\"first\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_liste", array("type" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeimmob", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeimmob", array()), "html", null, true);
        echo "</a></li>
                                <li class=\"last\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idOffre", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeimmob", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idOffre", array()), "html", null, true);
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- / #breadcrumb -->

                <div class=\"mod mod-bevel mod-bevel-light\" id=\"post\">
                    <div class=\"inner\">
                        <div class=\"bd h-asym\">

                            <h1>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nature", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "ville", array()), "html", null, true);
        echo "</h1>

                            <div class=\"post-meta\">
                                <b class=\"content-separator\"></b>
                                <ul class=\"hr-nav-1 small\">
                                    <li class=\"first date\"><a href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datepublication", array()), "d/m/y"), "html", null, true);
        echo "</a></li>
                                    <li class=\"author\">Membre : <a href=\"#\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUser", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUser", array()), "prenom", array()), "html", null, true);
        echo "</a></li>
                                    <li class=\"category\">Categorie : <a href=\"#\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeimmob", array()), "html", null, true);
        echo "</a></li>
                                    <li class=\"comments last\"><fb:comments-count href=\"http://localhost/";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idOffre", array()))), "html", null, true);
        echo "\"/></fb:comments-count> Commentaires
                                    </li>
                                </ul>
                                <b class=\"content-separator\"></b>
                            </div>

                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/offre/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array())) . "")), "html", null, true);
        echo "\" alt=\"\" class=\"alignleft pad-border\" width=\"580\" height=\"200\" />
                            <div class=\"fb-like\" data-href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idOffre", array()))), "html", null, true);
        echo "\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
                            <h3>Description:</h3>
                            <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</p>
                            <h3>Détails:</h3>

                            <ul class=\"arrow-list\">
                                <li><b>Prix : </b>";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), 2, ".", ","), "html", null, true);
        echo "</li>
                                ";
        // line 49
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrpiece", array()) != null)) {
            echo " <li><b>Appartment </b>S+";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrpiece", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etage", array()), "html", null, true);
            echo "</li> ";
        }
        // line 50
        echo "                                ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "surfaceCouverte", array()) != null)) {
            echo " <li><b>Surface : </b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "surfaceCouverte", array()), "html", null, true);
            echo "</li> ";
        }
        // line 51
        echo "                                
                                ";
        // line 52
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "superficie", array()) != null)) {
            echo " <li><b>Superficie : </b>S+";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "superficie", array()), "html", null, true);
            echo "</li> ";
        }
        // line 53
        echo "                                ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gazdeville", array()) != null)) {
            echo " <li><b>Gaz de Ville</b></li> ";
        }
        // line 54
        echo "                                ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jardin", array()) != null)) {
            echo " <li><b>Jardin</b></li> ";
        }
        // line 55
        echo "                                ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chauffage", array()) != null)) {
            echo " <li><b>Chauffage</b></li> ";
        }
        // line 56
        echo "                                ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "meuble", array()) != null)) {
            echo " <li><b>Meuble</b></li> ";
        }
        // line 57
        echo "                                ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "climatisation", array()) != null)) {
            echo " <li><b>Climatisé</b></li> ";
        }
        // line 58
        echo "                                
                            </ul>


                            <div class=\"mod mod-bevel mod-bevel-med2 mod-fullwidth author-box\" id=\"author\">
                                <div class=\"inner\">
                                    <div class=\"content\">
                                        <h4>Publié par ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUser", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUser", array()), "prenom", array()), "html", null, true);
        echo "</h4>
                                        <ul>
                                            <li><b>Email : </b>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUser", array()), "mail", array()), "html", null, true);
        echo "</li>
                                            <li><b>Téléphone : </b>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUser", array()), "tel", array()), "html", null, true);
        echo "</li>
                                        </ul>
                                    </div>
                                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/author.png"), "html", null, true);
        echo "\" alt=\"\" class=\"author-photo alignleft pad-border-rev\" />
                                </div>
                            </div><!-- / #author -->
                            <div class=\"fb-comments\" data-href=\"http://localhost/";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idOffre", array()))), "html", null, true);
        echo "\" data-numposts=\"5\" data-colorscheme=\"dark\" data-width=\"100%\"></div>
                        </div><!-- / .bd -->
                    </div><!-- / .inner -->
                </div><!-- / #post -->

            </div><!-- / #post-block -->


            <div class=\"u4\" id=\"sidebar\">

                <div class=\"mod mod-bevel mod-bevel-dark\">
                    <div class=\"inner align-center\">
                        <div class=\"bd\">
                            <p>This is a live demo of <br/> the <strong>SquareMile</strong> HTML template <br/>created by <a href=\"http://studiomw.co.uk/\"><img src=\"img/content/studiomw-logo.png\" alt=\"\" style=\"vertical-align:-25%\" /></a></p>
                            <a href=\"#\" class=\"jbtn jbtn-medium-normal jbtn-inset jbtn-margin-small\">Buy now on ThemeForest</a>
                        </div>
                    </div>
                </div>

                <div class=\"mod mod-bevel mod-bevel-med\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <h4 class=\"u-line\">Advertisment</h4>
                            <ul class=\"advertising\">
                                <li><a href=\"#\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/ad_125x125_v2.gif"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/gr_125x125_v1.gif"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/tf_125x125_v1.gif"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/vh_125x125_3.gif"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <div class=\"mod mod-bevel mod-bevel-med\">
                    <div class=\"inner\">
                        <div class=\"bd\">

                            <div class=\"mod mod-bevel mod-bevel-med2 mod-fullwidth\">
                                <div class=\"inner\">
                                    <div class=\"bd\">
                                        <h3 class=\"u-line\">Recent blog posts</h3>
                                        <ul class=\"u-line arrow-list-links\">
                                            <li class=\"first\"><a href=\"#\">In hac habitasse platea dictumst.</a></li>
                                            <li><a href=\"#\">Sed id sem eget ante vulputate.</a></li>
                                            <li><a href=\"#\">Amet nibh massa, eget porta nibh.</a></li>
                                            <li><a href=\"#\">Morbi a nibh neque.</a></li>
                                            <li><a href=\"#\">Duis magna ante, sagittis aliquet.</a></li>
                                            <li class=\"last\"><a href=\"#\">Posuere nec nunc.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=\"mod mod-bevel mod-bevel-med2 mod-fullwidth\">
                                <div class=\"inner\">
                                    <div class=\"bd\">
                                        <h3 class=\"u-line\">Popular posts</h3>
                                        <ul class=\"u-line arrow-list-links\">
                                            <li class=\"first\"><a href=\"#\">In hac habitasse platea dictumst.</a></li>
                                            <li><a href=\"#\">Sed id sem eget ante tincidunt vulputate.</a></li>
                                            <li><a href=\"#\">Amet nibh massa. In platea dictumst.</a></li>
                                            <li><a href=\"#\">Morbi a nibh neque.</a></li>
                                            <li><a href=\"#\">Duis magna ante, sagittis aliquet pulvinar sed.</a></li>
                                            <li class=\"last\"><a href=\"#\">Posuere nec nunc.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=\"mod mod-bevel mod-bevel-med2 hd-bar mod-fullwidth\">
                                <div class=\"inner\">
                                    <div class=\"hd\">
                                        <h3>Our friends</h3>
                                    </div>
                                    <div class=\"bd\">
                                        <ul class=\"u-line arrow-list-links\">
                                            <li class=\"first\"><a href=\"#\">Platea dictumst</a></li>
                                            <li><a href=\"#\">Tincidunt vulputate</a></li>
                                            <li><a href=\"#\">Habitasse</a></li>
                                            <li><a href=\"#\">Morbi neque.</a></li>
                                            <li><a href=\"#\">Duis magna ante</a></li>
                                            <li class=\"last\"><a href=\"#\">Posuere</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> 

            </div><!-- / #sidebar -->
        </div><!-- / #content -->

    </div><!-- / #doc-bd --> 

";
    }

    // line 172
    public function block_js($context, array $blocks = array())
    {
        // line 173
        echo "
    <script type=\"text/javascript\">

        \$(document).ready(function () {


        });


    </script>

";
    }

    public function getTemplateName()
    {
        return "FrontRealBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 173,  328 => 172,  254 => 101,  250 => 100,  246 => 99,  242 => 98,  215 => 74,  209 => 71,  203 => 68,  199 => 67,  192 => 65,  183 => 58,  178 => 57,  173 => 56,  168 => 55,  163 => 54,  158 => 53,  152 => 52,  149 => 51,  142 => 50,  134 => 49,  130 => 48,  123 => 44,  118 => 42,  114 => 41,  105 => 35,  101 => 34,  95 => 33,  91 => 32,  81 => 27,  64 => 17,  58 => 16,  54 => 15,  43 => 6,  40 => 5,  30 => 3,);
    }
}
