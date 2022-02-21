<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_d5aa178b6077c0ecab5255eeedaebc118d1d142295197aaf1b90c3e3ccbdf0ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script' => [$this, 'block_script'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\"><head>
<title>";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" type=\"text/css\">

<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>   
   <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/code.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
   ";
        // line 8
        $this->displayBlock('script', $context, $blocks);
        // line 9
        echo "   <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fav.ico"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
   <script src=\"https://code.jquery.com/ui/1.13.1/jquery-ui.js\"></script>  
</head>
<body>
<div id=\"wrap\">
  <div id=\"header\">
    <div  id=\"header-content\">
    <img class=\"logo\" id=\"pollo\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pollo.png"), "html", null, true);
        echo "\" width=\"85px\">
      <h1 class=\"logo\" id=\"logo\">Super<span class=\"gray\">pollo</span></h1>
      
      <ul>
        <li><a href=\"/\" id=\"current\">Home</a></li>
        <li><a href=\"/productos\">Productos</a></li>
        <li><a href=\"#\">Lugares</a></li>
        <li><a href=\"#\">Contacto</a></li>
        <li><a href=\"#\">Ayuda</a></li>
      </ul>
    </div>
  </div>

";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
  <div id=\"footer\">
    <div id=\"footer-content\">
      <div class=\"col float-left\">
        <h3>Site Partners</h3>
        <ul>
          <li><a href=\"#\"><strong>Dreamhost</strong> - Reliable Webhosting at \$7.95/mo</a></li>
          <li><a href=\"#\"><strong>4templates</strong> - Low Cost Hi-Quality Templates</a></li>
          <li><a href=\"#\"><strong>TemplateMonster</strong> - Best templates on the net!</a></li>
          <li><a href=\"#\"><strong>Fotolia</strong> - Free stock images or from \$1</a></li>
          <li><a href=\"#\"><strong>Text Link Ads</strong> - Easiest. Money. Ever.</a></li>
        </ul>
      </div>
      <div class=\"col float-left\">
        <h3>Links</h3>
        <ul>
          <li><a href=\"#\"><strong>openwebdesign.org</strong></a></li>
          <li><a href=\"#\"><strong>OSWD.org</strong></a></li>
          <li><a href=\"#\"><strong>zeroweb.org</strong></a></li>
          <li><a href=\"#\"><strong>Alistapart</strong></a></li>
          <li><a href=\"#\"><strong>CSS Remix</strong></a></li>
        </ul>
      </div>
      <div class=\"col2 float-right\">
        <p> © copyright 2006 <strong>Your Company Name</strong><br>
          Design by: <a href=\"http://www.styleshout.com\"><strong>styleshout</strong></a> &nbsp; &nbsp; Valid <a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><strong>CSS</strong></a> | <a href=\"http://validator.w3.org/check/referer\"><strong>XHTML</strong></a> </p>
        <ul>
          <li><a href=\"#\"><strong>Home</strong></a></li>
          <li><a href=\"#\"><strong>Sitemap</strong></a></li>
          <li><a href=\"#\"><strong>RSS Feed</strong></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


</body></html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  183 => 31,  165 => 8,  147 => 2,  100 => 32,  98 => 31,  82 => 18,  69 => 9,  67 => 8,  63 => 7,  59 => 6,  54 => 4,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\"><head>
<title>{% block title %}{% endblock %}</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<link rel=\"stylesheet\" href=\"{{ asset('css/estilos.css') }}\" type=\"text/css\">

<script src=\"{{ asset('scripts/jquery.js') }}\" type=\"text/javascript\"></script>   
   <script src=\"{{ asset('scripts/code.js') }}\" type=\"text/javascript\"></script>
   {% block script %}{% endblock %}
   <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/fav.ico') }}\">
   <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
   <script src=\"https://code.jquery.com/ui/1.13.1/jquery-ui.js\"></script>  
</head>
<body>
<div id=\"wrap\">
  <div id=\"header\">
    <div  id=\"header-content\">
    <img class=\"logo\" id=\"pollo\" src=\"{{ asset('img/pollo.png') }}\" width=\"85px\">
      <h1 class=\"logo\" id=\"logo\">Super<span class=\"gray\">pollo</span></h1>
      
      <ul>
        <li><a href=\"/\" id=\"current\">Home</a></li>
        <li><a href=\"/productos\">Productos</a></li>
        <li><a href=\"#\">Lugares</a></li>
        <li><a href=\"#\">Contacto</a></li>
        <li><a href=\"#\">Ayuda</a></li>
      </ul>
    </div>
  </div>

{% block body %}{% endblock %}

  <div id=\"footer\">
    <div id=\"footer-content\">
      <div class=\"col float-left\">
        <h3>Site Partners</h3>
        <ul>
          <li><a href=\"#\"><strong>Dreamhost</strong> - Reliable Webhosting at \$7.95/mo</a></li>
          <li><a href=\"#\"><strong>4templates</strong> - Low Cost Hi-Quality Templates</a></li>
          <li><a href=\"#\"><strong>TemplateMonster</strong> - Best templates on the net!</a></li>
          <li><a href=\"#\"><strong>Fotolia</strong> - Free stock images or from \$1</a></li>
          <li><a href=\"#\"><strong>Text Link Ads</strong> - Easiest. Money. Ever.</a></li>
        </ul>
      </div>
      <div class=\"col float-left\">
        <h3>Links</h3>
        <ul>
          <li><a href=\"#\"><strong>openwebdesign.org</strong></a></li>
          <li><a href=\"#\"><strong>OSWD.org</strong></a></li>
          <li><a href=\"#\"><strong>zeroweb.org</strong></a></li>
          <li><a href=\"#\"><strong>Alistapart</strong></a></li>
          <li><a href=\"#\"><strong>CSS Remix</strong></a></li>
        </ul>
      </div>
      <div class=\"col2 float-right\">
        <p> © copyright 2006 <strong>Your Company Name</strong><br>
          Design by: <a href=\"http://www.styleshout.com\"><strong>styleshout</strong></a> &nbsp; &nbsp; Valid <a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><strong>CSS</strong></a> | <a href=\"http://validator.w3.org/check/referer\"><strong>XHTML</strong></a> </p>
        <ul>
          <li><a href=\"#\"><strong>Home</strong></a></li>
          <li><a href=\"#\"><strong>Sitemap</strong></a></li>
          <li><a href=\"#\"><strong>RSS Feed</strong></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


</body></html>", "base.html.twig", "/home/alumno/Documentos/Proyecto/templates/base.html.twig");
    }
}
