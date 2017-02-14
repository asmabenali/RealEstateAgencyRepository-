<?php

/* FrontRealBundle:Default:nous.html.twig */
class __TwigTemplate_1a8dbd8fee7c22d64f1858f703852228ad92330d2491794c130f9eb2dac96c54 extends Twig_Template
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        echo " Qui Sommes Nous ? ";
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "


    <!-- Main document body -->

    <div class=\"doc-bd\" id=\"doc-bd\">

        <div class=\"b12\" id=\"content\">
            <div class=\"u12\" id=\"main-content-block\">

                <div class=\"mod mod-bevel mod-bevel-med breadcrumb\" id=\"breadcrumb\">
                    <div class=\"inner\">
                        <div class=\"bd\">
                            <ul class=\"font-narrow\">
                                <li class=\"first\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("front_real_homepage");
        echo "\">Qui Sommes Nous ?</a></li>
                                <li class=\"last\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("front_real_contact");
        echo "\">Real Estate Agency</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- / #breadcrumb -->

                <div class=\"mod mod-bevel mod-bevel-light\" id=\"page\">
                    <div class=\"inner\">
                        <div class=\"bd h-asym\">

                            <h1>Real Estate Agency</h1>
                            <p><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/gallery/agence.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"alignleft pad-border-rev\" />L'agence Real Estate Agency vous 
                                accompagne dans la vente et l'achat de votre propriété, de votre maison ou de votre appartement. Nous vous aidons dans 
                                toutes vos démarches administratives ou juridiques concernant la mise en vente de votre propriété, nous vous
                                conseillons pour fixer un prix en rapport avec le marché immobilier actuel, nous prenons à notre charge tous 
                                les frais de commercialisation. Nous touchons une très large clientèle grâce aux moyens publicitaires mis en 
                                oeuvre, notamment à l'étranger, et également grâce à notre activité importante de prospection pour des clients 
                                qui recherchent à acheter. Cette activité constitue pour vous l'opportunité d'un portefeuille de clients
                                acquéreurs ciblés, immédiats et qui se renouvelle en permanence.L'agence Real Estate Agency vous accompagne 
                                également dans votre recherche et votre acquisition. Si vous n'avez pas de temps à perdre, si vous voulez être 
                                informé justement et clairement sur le marché immobilier de la région et si vous désirez être assisté dans 
                                toutes vos démarches pour acheter une propriété en Provence, nous proposons un service complet et sur mesure.</p>

                            <blockquote>
                                <p>Notre couverture géographique:</p>
                            </blockquote>

                            <p>Notre agence Real Estate Agency est situé sur l'artère principale de la ville, le fameux Cours Mirabeau à Aix en Provence, mais son champs d'action s'étend sur tout le territoire tunisiens.</p>
                            <h2>NOS REPRÉSENTANTS</h2>
                            <p>Directrice de l'agence, elle est issue d'une famille aixoise depuis 5 générations, ce qui lui vaut une parfaite connaissance de la région. Fondatrice et directrice de l'agence depuis le mois d'avril 2005, elle s'est auparavant spécialisée dans le droit immobilier. Titulaire d'une licence de droit administratif, d'une maîtrise en droit des affaires, d'un Diplôme d'Etudes Supérieures Spécialisées (DESS) en droit de l'urbanisme de la construction et de l'aménagement et d'un Diplôme d'Etudes Approfondies (DEA) en Droit immobilier, tous obtenus à l'université de droit d'Aix en Provence. Egalement titulaire d'un diplôme de promotion immobilière à l'ICH aux Arts et Métiers d'Aix en Provence.</p>
                            <h2>NOS PARTENAIRES</h2>
                            <!--<div class=\"alignright pad-border\" style=\"width:250px\">
                            <!--<h4 class=\"asym-u-line\">List heading example</h4>
                            <ul class=\"u-line\">
                                <li class=\"first\">List item 1</li>
                                <li>List item 2</li>
                                <li>List item 3</li>
                                <li>List item 4</li>
                                <li class=\"last\">List item 5</li>
                            </ul>
                        </div>-->
                            <p>L'agence REAL ESTATE AGENCY a établi de nombreux partenariats avec des professionnels de l'immobilier. D'abord des partenaires dans notre région puis dans d'autres départements (départements 06, 83, 84, 75, 04 ...) et pour finir des accords avec des partenaires étrangers, en Angleterre, en Russie, en Suisse, aux Etats-Unis ... Un réseau en constante évolution.</p>
                            <p>REAL ESTATE AGENCY travaille avec de nombreuses agences immobilières locales basées à Aix en Provence, mais aussi dans les villes ou villages de Saint Tropez, Gordes, St Rémy de Provence, Eygalières, Lourmarin, Bonnieux, Cannes, Monaco ...</p>
                            <h2>PLAN D'ACCÈS À L'AGENCE</h2>
                            <div class=\"u5\" id=\"sidebar\">

                                <div class=\"mod mod-bevel mod-bevel-med\" style=\" width: 800px;\">
                                    <div class=\"inner\">
                                        <div class=\"bd\">
                                            <h3>Où Sommes Nous ?</h3>
                                            <p>Z.I. Chotrana II - B.P. 160 - 2083 Pôle Technologique - <br/>El Ghazala</p>
                                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.6384364142323!2d10.188595999999997!3d36.898996999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x683b3ab5565cd357!2sESPRIT!5e0!3m2!1sen!2stn!4v1428036235637\"  height=\"300\" frameborder=\"0\" style=\"border:0; width: 770px;  \">

                                            </iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- / .bd -->
                    </div><!-- / .inner -->
                </div><!-- / #page -->

            </div><!-- / #main-content-block -->

        </div><!-- / #content -->

    </div><!-- / #doc-bd -->

";
    }

    public function getTemplateName()
    {
        return "FrontRealBundle:Default:nous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  58 => 20,  54 => 19,  38 => 5,  35 => 4,  29 => 2,);
    }
}
