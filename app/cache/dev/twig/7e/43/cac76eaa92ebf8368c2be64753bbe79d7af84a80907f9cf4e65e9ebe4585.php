<?php

/* FrontRealBundle:Default:liste.html.twig */
class __TwigTemplate_7e43cac76eaa92ebf8368c2be64753bbe79d7af84a80907f9cf4e65e9ebe4585 extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " ";
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
        // line 17
        echo $this->env->getExtension('routing')->getPath("front_real_homepage");
        echo "\">Accueil</a></li>
                                <li class=\"last\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_liste", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- / #breadcrumb -->
            </div>
        </div>


        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <div class=\"b12\">

                <div class=\"u6\">

                    <div class=\"mod mod-bevel mod-bevel-light\">
                        <div class=\"inner portfolio-item\">
                            <div class=\"bd\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute($context["entity"], "idOffre", array()))), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 36
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
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nature", array()), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "ville", array()), "ville", array()), "html", null, true);
            echo " </h3>
                                <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "description", array()), 50, true), "html", null, true);
            echo "</p>
                                <ul class=\"arrow-list\">
                                    <li><b>Date : </b>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datepublication", array()), "d/m/y"), "html", null, true);
            echo "</li>
                                    <li><b>Prix : </b>";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), 2, ".", ","), "html", null, true);
            echo "</li>
                                    
                                    
                                </ul>
                                <a href=\"";
            // line 56
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
        // line 65
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "FrontRealBundle:Default:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 65,  125 => 56,  118 => 52,  114 => 51,  109 => 49,  103 => 48,  88 => 36,  84 => 35,  75 => 28,  71 => 27,  57 => 18,  53 => 17,  40 => 6,  37 => 5,  29 => 3,);
    }
}
