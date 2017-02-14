<?php

/* FrontRealBundle::layout.html.twig */
class __TwigTemplate_6bc848cc65eeafd92b386780590cdb051516655c29284b8c4b974c0c9d75ecf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'css' => array($this, 'block_css'),
            'container' => array($this, 'block_container'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>

<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<title>Real Estate Agency - ";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>


";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 10
        echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/css/reset.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/css/base.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/css/base_sizes_px_B10_F12_L20.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/css/grid.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/template.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/template-colors.css"), "html", null, true);
        echo "\" />

</head>
<body>

<div class=\"doc full-w full-h\" id=\"doc\">

  <!-- Header -->

  <div class=\"doc-hd\" id=\"doc-hd-upper\">
    <div class=\"b12\">
      <div class=\"u12\">

        <div class=\"mod mod-clean\" id=\"second-top-nav\">
          <div class=\"inner\">
            <ul class=\"small r-align hr-nav-1\">
              <!--<li class=\"first\"><a href=\"#\">Get RSS feed</a> <a href=\"#\" class=\"icon\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/RSS_16_16.png"), "html", null, true);
        echo "\" alt=\"\" /></a> </li>-->
              <li class=\"last\"><a href=\"#\">Follow us on Facebook</a> <a href=\"#\" class=\"icon\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/facebook-16.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div><!-- / #doc-hd-upper -->

  <div class=\"doc-hd \" id=\"doc-hd-lower\">
    <div class=\"b12\">
      <div class=\"u6\">
        <div class=\"mod\" id=\"branding\">
          <div class=\"inner\">
            <h1 class=\"no-margin-b\"><a href=\"index.html\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/logo.png"), "html", null, true);
        echo "\" alt=\"SquareMile Business Site Template\" /></a></h1>
          </div>
        </div>
      </div>
      <div class=\"u6\">
        <div class=\"mod\" id=\"search\">
          <div class=\"inner\">
              <form id=\"search-form\" action=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("front_real_search");
        echo "\" method=\"post\">
                <div><input style=\"height: 29px;\" name=\"mot\" maxlength=\"35\" type=\"text\" id=\"search-field\" value=\"Recherche < mot cle >\" class=\"text\" onclick=\"value=''\" /></div>
              <div><input class=\"submit\" type=\"submit\" value=\"search\" id=\"search-btn\" /></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class=\"b12\">
      <div class=\"u12\">

        <div class=\"mod mod-clean main-nav main-nav-root\" id=\"main-nav\">
          <div class=\"inner\">
            <ul class=\"root\">
              <li class=\"root-item root-item-first current\"><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("front_real_homepage");
        echo "\" class=\"root\">Accueil</a></li>
              
              <!-- <li class=\"root-item\"><a href=\"portfolio-overview.html\" class=\"root\">Portfolio</a>
                <ul class=\"sub sub-lev-1\">
                  <li class=\"sub-item sub-lev-1-item first\"><a href=\"portfolio.html\">Portfolio</a></li>
                  <li class=\"sub-item sub-lev-1-item\"><a href=\"portfolio-gallery.html\">Portfolio gallery</a></li>
                  <li class=\"sub-item sub-lev-1-item last\"><a href=\"portfolio-single.html\">Portfolio single</a></li>
                </ul>
              </li>-->
              
              <li class=\"root-item\"><a href=\"qsdqs.html\" class=\"root\">Offre</a>
                <ul class=\"sub sub-lev-1\">
                  <li class=\"sub-item sub-lev-1-item first\"><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("front_real_liste", array("type" => "appartement"));
        echo "\">Appartement</a></li>
                  <li class=\"sub-item sub-lev-1-item\"><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("front_real_liste", array("type" => "villa"));
        echo "\">Villa</a></li>
                   <li class=\"sub-item sub-lev-1-item\"><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("front_real_liste", array("type" => "terrain"));
        echo "\">Terrain</a></li>
                   <li class=\"sub-item sub-lev-1-item last\"><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("front_real_liste", array("type" => "immeuble"));
        echo "\">Immeuble</a></li>
                </ul>
              </li>
              
             <li class=\"root-item root-item-last\"><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("front_real_nous");
        echo "\" class=\"root\">Qui Sommes Nous ?</a></li>
              <li class=\"root-item root-item-last\"><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("front_real_contact");
        echo "\" class=\"root\">Contact</a></li>
            </ul>
          </div>
        </div>

      </div>

    </div>
  </div><!-- / #doc-hd-lower -->
  
  ";
        // line 97
        $this->displayBlock('container', $context, $blocks);
        // line 98
        echo "
  <!-- Footer -->

  <!--<div class=\"doc-ft\" id=\"doc-ft-upper\">
    <div class=\"b16\">
      <div class=\"u6\">

        <div class=\"mod mod-bevel hd-bar twitter-box\">
          <div class=\"inner\">
            <div class=\"hd\">
              <h3>Recent tweets</h3>
              <a href=\"http://twitter.com/studiomw\" class=\"jbtn jbtn-small-neutral jbtn-margin-small jfollow-btn\">Follow us</a>
            </div>
            <div class=\"bd\">
              <ul class=\"u-line small no-margin-b\">
                <li class=\"first\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, vitae sit amet metus. <a href=\"#\">Pellentesque habitant</a> morbi tristique senectus et netus.</li>
                <li>Etiam sapien ante, porttitor sit amet eleifend nec, scelerisque eu metus. <a href=\"#\">Etiam sed mi ligula</a></li>
                <li class=\"last\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac egestas.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
      <div class=\"u3\">

        <div class=\"mod\">
          <div class=\"inner\">
            <h4 class=\"asym-u-line\">Navigation</h4>
            <ul class=\"u-line arrow-list-links\">
              <li class=\"first\"><a href=\"index.html\">Home</a></li>
              <li><a href=\"portfolio.html\">Portfolio</a></li>
              <li><a href=\"blog.html\">Blog</a></li>
              <li><a href=\"templates.html\">Templates</a></li>
              <li><a href=\"framework.html\">Framework</a></li>
              <li class=\"last\"><a href=\"contact.html\">Contact</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div class=\"u3\">

        <div class=\"mod\">
          <div class=\"inner\">
            <h4 class=\"asym-u-line\">Templates</h4>
            <ul class=\"u-line\">
              <li class=\"first\"><a href=\"index.html\">Home</a></li>
              <li><a href=\"portfolio.html\">Portfolio</a></li>
              <li><a href=\"blog.html\">Blog</a></li>
              <li><a href=\"templates.html\">Templates</a></li>
              <li><a href=\"framework.html\">Framework</a></li>
              <li class=\"last\"><a href=\"contact.html\">Contact</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div class=\"u4\">

        <div class=\"mod\">
          <div class=\"inner align-center\">
            <a href=\"index.html\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/logo-footer.png"), "html", null, true);
        echo "\" alt=\"\" style=\"margin-bottom:5px\" /></a>
            <p>Created by <a href=\"http://studiomw.co.uk/\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content/studiomw-logo.png"), "html", null, true);
        echo "\" alt=\"\" style=\"vertical-align:-25%\" /></a></p>
            <a href=\"#\" class=\"jbtn jbtn-large-neutral jbtn-margin-small jbtn-fullwidth\"><span style=\"display:block;margin-top:-5px\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/themeforest_32_32.png"), "html", null, true);
        echo "\" alt=\"\" style=\"vertical-align:middle\" /> Buy now<br/>on ThemeForest</span></a>
          </div>
        </div>

      </div>
    </div>
  </div><!-- / #doc-ft-upper -->

  <div class=\"doc-ft\" id=\"doc-ft-lower\">
    <div class=\"b12\">
      <div class=\"u6\">

        <div class=\"mod mod-clean\">
          <div class=\"inner\">
            <p class=\"small\">Copyright &copy; Esprit 2015, All Rights Reserved</p>
          </div>
        </div>

      </div>
      <div class=\"u6\">

        <div class=\"mod mod-clean\">
          <div class=\"inner\">
            <p class=\"small r-align\">Real Estate Agency</p>
          </div>
        </div>

      </div>
    </div>
  </div><!-- / #doc-ft-lower -->

</div><!-- / #doc -->
<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>


<script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/js/jquery-plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/js/cufon-yui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/js/fonts/M_Plus_2c_bold_700.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pragma/js/fonts/M_Plus_2c_medium_500.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/global.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("color-rotator/jquery.meerkat.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("color-rotator/selectcolor.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contact-form.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

// Main slider
\$('#slider-main').pragmaSlider({
  sliderHeight: 'fixed',    // Set the slider hight to a fixed size
  sliderHeightFixed: 290,   // the sider height in pixels, useful only if sliderHeight is set to 'fixed'
  autoSlide: true,          // Set auto-slide to active
  autoSlideSpeed: 3500,     // time interval between 2 slides when using auto-slide
  slideSpeed: 1000          // the time of the slide change animation in miliseconds
});

</script>

";
        // line 219
        $this->displayBlock('js', $context, $blocks);
        // line 220
        echo "<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



</body>
</html>";
    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
    }

    // line 97
    public function block_container($context, array $blocks = array())
    {
        echo " ";
    }

    // line 219
    public function block_js($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "FrontRealBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 219,  363 => 97,  358 => 9,  352 => 6,  337 => 220,  335 => 219,  317 => 204,  313 => 203,  309 => 202,  305 => 201,  301 => 200,  297 => 199,  293 => 198,  289 => 197,  251 => 162,  247 => 161,  243 => 160,  179 => 98,  177 => 97,  164 => 87,  160 => 86,  153 => 82,  149 => 81,  145 => 80,  141 => 79,  126 => 67,  109 => 53,  99 => 46,  82 => 32,  78 => 31,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  38 => 10,  36 => 9,  30 => 6,  23 => 1,);
    }
}
