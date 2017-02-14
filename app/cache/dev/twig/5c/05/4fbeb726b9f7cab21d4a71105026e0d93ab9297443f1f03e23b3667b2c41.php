<?php

/* FrontRealBundle:Default:search.html.twig */
class __TwigTemplate_5c054fbeb726b9f7cab21d4a71105026e0d93ab9297443f1f03e23b3667b2c41 extends Twig_Template
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
        echo " Recherche ";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"doc-bd\" id=\"doc-bd\">

        <div class=\"b12\">
            <div class=\"u12\">
                <div class=\"mod mod-bevel mod-bevel-med breadcrumb\" id=\"breadcrumb\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <ul class=\"font-narrow\">
                                <li class=\"first\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("front_real_homepage");
        echo "\">Accueil</a></li>
                                <li class=\"last\">Recherche : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["mot"]) ? $context["mot"] : $this->getContext($context, "mot")), "html", null, true);
        echo "</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- / #breadcrumb -->
            </div>
        </div>


        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <div class=\"b12\">

                <div class=\"u6\">

                    <div class=\"mod mod-bevel mod-bevel-light\">
                        <div class=\"inner portfolio-item\">
                            <div class=\"bd\">
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute($context["entity"], "idOffre", array()))), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/offre/" . $this->getAttribute($context["entity"], "url", array())) . "")), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100%; height: 194px;\" />
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"u6\">

                    <div class=\"mod mod-clean\">
                        <div class=\"inner\">
                            <div class=\"bd\">
                                <h3>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nature", array()), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "ville", array()), "ville", array()), "html", null, true);
            echo " </h3>
                                <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "description", array()), 50, true), "html", null, true);
            echo "</p>
                                <ul class=\"arrow-list\">
                                    <li><b>Date : </b>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datepublication", array()), "d/m/y"), "html", null, true);
            echo "</li>
                                    <li><b>Prix : </b>";
            // line 50
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), 2, ".", ","), "html", null, true);
            echo "</li>
                                    
                                    
                                </ul>
                                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute($context["entity"], "idOffre", array()))), "html", null, true);
            echo "\" class=\"jbtn jbtn-small-normal jbtn-margin-small\">Plus de détails</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "FrontRealBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 63,  119 => 54,  112 => 50,  108 => 49,  103 => 47,  97 => 46,  82 => 34,  78 => 33,  69 => 26,  65 => 25,  53 => 16,  49 => 15,  38 => 6,  35 => 5,  29 => 3,);
    }
}
