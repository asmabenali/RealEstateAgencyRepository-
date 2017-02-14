<?php

/* FrontRealBundle:Default:index.html.twig */
class __TwigTemplate_4ed5e7fbb05cd39ce8d44d5ccb94f035304b71033c5b36943d3c1f4c4cf1d12c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontRealBundle::layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'css' => array($this, 'block_css'),
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
        echo " Accueil ";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "
    <!-- Main document body -->

    <div class=\"doc-bd\" id=\"doc-bd\">

        <div class=\"b12\" id=\"main-slider-block\"><!-- slider -->
            <div class=\"u12\">

                <div class=\"mod slider\" id=\"slider-main\">
                    <b class=\"top\"></b>
                    <div class=\"inner slider-inner\">
                        <div class=\"slides\">
                            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                                ";
            if (($this->getAttribute($context["loop"], "index", array()) <= 6)) {
                // line 20
                echo "                                    <div class=\"slide\" id=\"slide-1\">

                                        <div class=\"mod mod-cols-clean\">
                                            <div class=\"inner\">
                                                <div class=\"bd cols-2\">
                                                    <div class=\"col col-1\"><div class=\"col-inner\">
                                                            <div class=\"mod\">
                                                                <div class=\"inner\">
                                                                    <div class=\"hd\">
                                                                        <h3 class=\"no-margin-b\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nature", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeimmob", array()), "html", null, true);
                echo "</h3>
                                                                        <h4> à ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "ville", array()), "ville", array()), "html", null, true);
                echo "</h4></div>
                                                                    <div class=\"bd cols-2\">
                                                                        <div class=\"col\">
                                                                            <div class=\"col-inner\">
                                                                                <ul>
                                                                                    <li><b>Prix : </b>";
                // line 35
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), 2, ".", ","), "html", null, true);
                echo "</li>
                                                                                    ";
                // line 36
                if (($this->getAttribute($context["entity"], "nbrpiece", array()) != null)) {
                    echo " <li><b>Appartement </b>S+";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrpiece", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etage", array()), "html", null, true);
                    echo "</li> ";
                }
                // line 37
                echo "                                                                                    ";
                if (($this->getAttribute($context["entity"], "surfaceCouverte", array()) != null)) {
                    echo " <li><b>Surface : </b>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "surfaceCouverte", array()), "html", null, true);
                    echo "</li> ";
                }
                // line 38
                echo "
                                                                                    ";
                // line 39
                if (($this->getAttribute($context["entity"], "superficie", array()) != null)) {
                    echo " <li><b>Superficie : </b>S+";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "superficie", array()), "html", null, true);
                    echo "</li> ";
                }
                // line 40
                echo "                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col\"><div class=\"col-inner\">
                                                                                <ul>
                                                                                    ";
                // line 45
                if (($this->getAttribute($context["entity"], "gazdeville", array()) != null)) {
                    echo " <li><b>Gaz de Ville</b></li> ";
                }
                // line 46
                echo "                                                                                    ";
                if (($this->getAttribute($context["entity"], "jardin", array()) != null)) {
                    echo " <li><b>Jardin</b></li> ";
                }
                // line 47
                echo "                                                                                    ";
                if (($this->getAttribute($context["entity"], "chauffage", array()) != null)) {
                    echo " <li><b>Chauffage</b></li> ";
                }
                // line 48
                echo "                                                                                    ";
                if (($this->getAttribute($context["entity"], "meuble", array()) != null)) {
                    echo " <li><b>Meuble</b></li> ";
                }
                // line 49
                echo "                                                                                    ";
                if (($this->getAttribute($context["entity"], "climatisation", array()) != null)) {
                    echo " <li><b>Climatisé</b></li> ";
                }
                // line 50
                echo "
                                                                                </ul>
                                                                            </div></div>

                                                                    </div>
                                                                    <div class=\"ft\">
                                                                        <p><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute($context["entity"], "idOffre", array()))), "html", null, true);
                echo "\" class=\"jbtn jbtn-medium-normal jbtn-inset\">Plus de détails</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div></div>
                                                    <div class=\"col col-2\"><div class=\"col-inner\">
                                                            <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/offre/" . $this->getAttribute($context["entity"], "url", array())) . "")), "html", null, true);
                echo "\" alt=\"\" class=\"block\" width=\"540\" height=\"290\" />
                                                        </div></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- /#slide-1 -->
                                ";
            }
            // line 70
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </div>
                    </div>
                    <b class=\"bottom\"></b>
                </div>

            </div>
        </div><!-- / slider -->




        <div class=\"b12\"><div class=\"u12\"><b class=\"block-separator\"></b></div></div>


        <div class=\"b12\"><!-- 2 columns - bevel -->
            <div class=\"u4\">

                <div class=\"mod mod-bevel mod-bevel-light talk\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <p class=\"small\">La recherche d’un bien immobilier demande beaucoup d’énergie et de temps. Internet permet d’opérer une sélection en amont, n’hésitez pas à vous rapprocher de notre agence immobiliére pour compléter les informations.</p>
                        </div>
                        <div class=\"ft\"><p class=\"author small\">conseils pour bien sélectionner son agent immobilier</p></div>
                    </div>
                </div>

                <div class=\"mod mod-bevel mod-bevel-light talk\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <p class=\"small\"> Le succès de l’opération repose en grande partie sur l’état du marché mais pas seulement. La qualité de la relation que vous établissez avec votre conseiller est très utile pour avoir des propositions en avant-première. </p>
                        </div>
                        <div class=\"ft\"><p class=\"author small\">Établissez un lien de confiance</p></div>
                    </div>
                </div>

            </div>
            <div class=\"u8\">
                <form method=\"post\" action=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("front_real_avance");
        echo "\" >
                    <div class=\"mod mod-bevel mod-bevel-light\">
                        <div class=\"inner\">
                            <div class=\"bd\">
                                <h2 style=\"color : #2a4878;\">Recherche Avancée</h2>

                                <label ><input  type=\"radio\" value=\"louer\" name=\"nature\" class=\"radio\" checked=\"checked\" >A Louer </label>
                                <label ><input  type=\"radio\" value=\"vendre\" name=\"nature\" class=\"radio\" >A Vendre </label>

                                <div style=\"margin-top: 10px\">
                                    <b style=\"font-size: 12px\">Type d'immeuble : </b>
                                    <div style=\"margin-top: 10px\">
                                        <label><input type=\"checkbox\" name=\"type1\" value=\"appartement\" class=\"checkbox\"> Appartement</label>
                                        <label><input type=\"checkbox\" name=\"type2\" value=\"immeuble\" class=\"checkbox\"> Immeuble</label>
                                        <label><input type=\"checkbox\" name=\"type3\" value=\"terrain\" class=\"checkbox\"> Terrain</label>
                                        <label><input type=\"checkbox\" name=\"type4\" value=\"villa\" class=\"checkbox\"> Villa</label>
                                    </div>
                                    <div style=\"margin-top: 10px\">
                                        <label><input type=\"checkbox\" name=\"s1\" value=\"1\" class=\"checkbox\"> S+1</label>
                                        <label><input type=\"checkbox\" name=\"s2\" value=\"2\" class=\"checkbox\"> S+2</label>
                                        <label><input type=\"checkbox\" name=\"s3\" value=\"3\" class=\"checkbox\"> S+3</label>
                                        <label><input type=\"checkbox\" name=\"s4\" value=\"4\" class=\"checkbox\"> S+4</label>
                                    </div>
                                </div>
                                <div style=\"margin-top: 10px\">
                                    <b style=\"font-size: 12px\">Ville : </b>

                                    <select style=\"padding: 2px !important; width: 150px;\" name=\"ville\" >
                                        ";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 137
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                                    </select>

                                </div>
                                <div style=\"margin-top: 10px\">
                                    <p>
                                        <label for=\"amount\">Prix :</label>
                                        <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:#000; background-color: #efefef;\">
                                        <input type=\"hidden\" id=\"prix1\" name=\"prix1\"/>
                                        <input type=\"hidden\" id=\"prix2\" name=\"prix2\"/>
                                    </p>

                                    <div id=\"slider-range\"></div>

                                </div>

                                <div style=\"margin-top: 10px; float: right\">

                                    <input type=\"submit\" class=\"jbtn jbtn-small-normal jbtn-margin\" value=\"Rechercher\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- / 2 columns - bevel -->

        <div class=\"b12\"><div class=\"u12\"><b class=\"block-separator\"></b></div></div>

        <div class=\"b12\"><!-- 3 columns - clean -->
            ";
        // line 168
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 169
            echo "                ";
            if (($this->getAttribute($context["loop"], "index", array()) <= 6)) {
                // line 170
                echo "                    <div class=\"u4\">

                        <div class=\"mod mod-clean\">
                            <div class=\"inner\">
                                <div class=\"bd\">
                                    <h3><a href=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute($context["entity"], "idOffre", array()))), "html", null, true);
                echo "\" style=\"color: #000;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nature", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeimmob", array()), "html", null, true);
                echo "</a></h3>
                                    <a href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute($context["entity"], "idOffre", array()))), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/offre/" . $this->getAttribute($context["entity"], "url", array())) . "")), "html", null, true);
                echo "\" alt=\"\" class=\"aligncenter pad-border pad-light\" width=\"280\" style=\"  height: 177px;\" />
                                    </a>
                                    <!--<p>";
                // line 179
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "description", array()), 50, true), "html", null, true);
                echo "</p>-->
                                    <ul class=\"arrow-list\">
                                        <li><b>Date : </b>";
                // line 181
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datepublication", array()), "d/m/y"), "html", null, true);
                echo "</li>
                                        <li><b>Prix : </b>";
                // line 182
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), 2, ".", ","), "html", null, true);
                echo "</li>


                                    </ul>
                                    <a href=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_real_detail", array("id" => $this->getAttribute($context["entity"], "idOffre", array()))), "html", null, true);
                echo "\" class=\"jbtn jbtn-small-normal jbtn-margin-small\">Plus de détails</a>
                                </div>
                            </div>
                        </div>

                    </div>
                ";
            }
            // line 193
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "
        </div><!-- / 3 columns -->


    </div><!-- / #doc-bd -->

";
    }

    // line 202
    public function block_js($context, array $blocks = array())
    {
        // line 203
        echo "    
        <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    <script>
       \$(function () {
          
            \$(\"#slider-range\").slider({
                range: true,
                min: 0,
                max: 9999,
                values: [0, 1000],
                slide: function (event, ui) {
                    \$(\"#amount\").val(ui.values[ 0 ] + \" Dt - \" + ui.values[ 1 ]+\" Dt\");
                    \$(\"#prix1\").val(ui.values[ 0 ]);
                    \$(\"#prix2\").val(ui.values[ 1 ]);
                }
            });
             alert('asma');
            \$(\"#amount\").val(\"0 Dt - 1000 Dt\");
            
            \$(\"#prix1\").val(\$(\"#slider-range\").slider(\"values\", 0));
            \$(\"#prix2\").val(\$(\"#slider-range\").slider(\"values\", 1));
           
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontRealBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 203,  416 => 202,  406 => 194,  392 => 193,  382 => 186,  375 => 182,  371 => 181,  366 => 179,  361 => 177,  357 => 176,  349 => 175,  342 => 170,  339 => 169,  322 => 168,  291 => 139,  280 => 137,  276 => 136,  245 => 108,  206 => 71,  192 => 70,  181 => 62,  172 => 56,  164 => 50,  159 => 49,  154 => 48,  149 => 47,  144 => 46,  140 => 45,  133 => 40,  127 => 39,  124 => 38,  117 => 37,  109 => 36,  105 => 35,  97 => 30,  91 => 29,  80 => 20,  77 => 19,  60 => 18,  46 => 6,  43 => 5,  37 => 4,  31 => 3,);
    }
}
