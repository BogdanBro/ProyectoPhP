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

/* page/index.html.twig */
class __TwigTemplate_fca3a63ce7f2647b8c0a0d142d55ab9def2a31dc81ee3c2b952df07c3aa57be4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SuperPollo - Inicio ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"headerphoto\"></div>
  <div id=\"content-wrap\">
    <div id=\"content\">
      <div id=\"sidebar\">
        <div id=\"accordion\">

        <a href=\"\">
        <div class=\"titul\">
          <h3>Short About</h3>
          <div class=\"dentro\">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
        </div>
        </div>
        </a>

        <a href=\"\">
        <div class=\"titul\">
          <h3 class=\"clear\">Sidebar Menu</h3>
          <div class=\"dentro\">
          <ul class=\"sidemenu\">
            <li>Home</li>
            <li>Template Info</li>
            <li>Sample Tags</li>
            <li>More Templates...</li>
            <li>Premium Templates</li>
          </ul>
        </div>
        </div>
        </a>

        <a href=\"\">
        <div class=\"titul\">
          <h3>Sponsors</h3>
          <div class=\"dentro\">
          <ul class=\"sidemenu\">
            <li>Dreamhost</li>
            <li>4templates</li>
            <li>TemplateMonster</li>
            <li>Fotolia.com</li>
            <li>Text Link Ads</li>
          </ul>
        </div>
        </div>
</a>

  <a href=\"\">
        <div class=\"titul\">
          <h3>Wise Words</h3>
          <div class=\"dentro\">
          <p>\"No man can live happily who regards himself alone; who turns everything to his own advantage. You must live for others if you wish to live for yourself.\"</p>
          <p class=\"align-right\">- Seneca</p>
        </div>
        </div>
</a>

<a href=\"\">
        <div class=\"titul\">
          <h3>Support Styleshout</h3>
          <div class=\"dentro\">
          <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation through the donate link on my website - it will be a great help and will surely be appreciated.</p>
        </div>
        </div>
        </div>
        </a>
       

      </div>
      <div id=\"main\">

        
        
         
  <h2>Nuevos Productos!!</h2>  
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <a href=\"/productos/alitas/1\">
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pollo1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" style=\"width:100%;\">
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pollo2.jpg"), "html", null, true);
        echo "\" alt=\"Chicago\" style=\"width:100%;\">
      </div>
    
      <div class=\"item\">
        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pollo3.jpg"), "html", null, true);
        echo "\" alt=\"New york\" style=\"width:100%;\">
      </div>
    </div>
    </a>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
         

        
        </br>
        </br>
        </br>
          
        <h1>Bienvenido!</h1>

        

        <h3>Introduccion</h3>
        <p>En esta pagina podras consultar mucha informacion sobre todo lo relacionado con el pollo, ya sea frito , en tiras y puede que en el futuro haya mas, mientras tanto te puedes pasar por nuestra increible pagina de <a href=\"/productos\"> productos</a>!.</p>

      <h3>Una receta para hacer pollo frito!!!</h3>

   <ul class=\"lista\"><li id=\"wprm-recipe-10633-step-0-0\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Es recomendable comenzar a preparar este pollo con una marinada, para que la carne tome m??s sabor. Para prepararla, solo hay que meter las piezas en un recipiente con el jugo del lim??n exprimido, pimienta, sal y ajo en polvo.</div></li><li id=\"wprm-recipe-10633-step-0-1\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que prestar atenci??n a que las piezas queden impregnadas de la marinada, de forma m??s o menos uniforme, para que todas tomen sabor.</div></li><li id=\"wprm-recipe-10633-step-0-2\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">El recipiente con el pollo en marinada ir?? al refrigerador por dos horas, idealmente, o en casos con menos tiempo, m??nimo 45 minutos.</div></li><li id=\"wprm-recipe-10633-step-0-3\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Podemos aprovechar para ir alistando los dem??s ingredientes. En un plato o recipiente ancho, vamos a mezclar el pan y la harina con un toque de sal y pimienta. As??, vamos a dejar el polvo listo para cubrir las piezas de pollo antes de fre??rlas.</div></li><li id=\"wprm-recipe-10633-step-0-4\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">En otro bol, vamos a hacer una mezcla con el huevo y la leche. Por aqu?? pasaremos el pollo antes de meterlo en el polvo de harina y pan.</div></li><li id=\"wprm-recipe-10633-step-0-5\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Una vez pasado el tiempo de la marinada, lo siguiente ser?? fre??r el pollo. Para esto, vamos a utilizar un sart??n para calentar el aceite. Para esta receta, la cantidad de aceite debe ser abundante, de manera que el pollo y la cubierta se cocinen bien. En este caso no aplica la idea de \"ponerse light\" controlando la cantidad de aceite. Vamos a calentar el aceite a fuego alto.</div></li><li id=\"wprm-recipe-10633-step-0-6\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Los pedazos de pollo solo deben introducirse en el aceite una vez que este est?? caliente. Antes de meterlos a fre??r, vamos a pasar cada pieza por la mezcla de huevo y leche, de manera que toda su superficie quede bien impregnada, y luego por el plato con la mezcla de harina, para que esta se pegue a la superficie mojada del pollo.</div></li><li id=\"wprm-recipe-10633-step-0-7\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que rotar o voltear bien la pieza al momento de pasarla por la harina, de manera que esta se adhiera por todas partes.</div></li><li id=\"wprm-recipe-10633-step-0-8\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Ahora s??, a sumergir en el aceite caliente a cada pieza que haya pasado por el proceso anterior. Como la idea tampoco es quemarse, si el aceite empieza a saltar, podemos bajar el fuego ligeramente, pero no tanto como para que el aceite deje de estar caliente.</div></li><li id=\"wprm-recipe-10633-step-0-9\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que prestar atenci??n a que las piezas no se peguen entre ellas mientras se fr??en. Lo mejor es dejar un espacio para que se cocinen bien. Tambi??n est?? bien no meter demasiadas piezas en el sart??n al mismo tiempo, ya que esto disminuir??a la temperatura del aceite.</div></li><li id=\"wprm-recipe-10633-step-0-10\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que vigilar las piezas e irlas rotando para que todas sus caras se cocinen. De hecho, en principio, si verdaderamente tienes una buena cantidad de aceite en el sart??n, casi ni tendr??s que mover cada pedazo de pollo, porque el aceite caliente lo cubrir?? por todas partes.</div></li><li id=\"wprm-recipe-10633-step-0-11\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Una vez que cada pieza de pollo est?? bien dorada y cocida por toda la superficie, qu?? hay que sacarla y escurrirla. Yo acostumbro pasarlas a un plato cubierto con papel absorbente, para retirar el exceso de grasa antes de servirlas.</div></li><li id=\"wprm-recipe-10633-step-0-12\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que seguir el proceso mencionado con cada pieza, hasta que est??n todas cocidas. Si hiciera falta, hay que verter m??s aceite en el sart??n.</div></li></ul>

   <p> Para mas informacion puedes consultar esta <a href=\"https://www.comedera.com/receta-pollo-frito/\"> pagina</a></p>

        <h3>Lista de locales</h3>
      
        <ul>
          <li><span>Pollo frito de KFC</span></li>
          
          <br />
          Es un pollo de buena calidad pero precio bastante alto, si eres una persona hambrienta puedes gastar entorno a 10??? , una locura.<br />
          <br />
          <li><span>Pollo de Popeyes  </span></li>
          
          <br />
          Este pollo es la combinacion entre precio y calidad , desgrarciadamente no hay locales en Espa??a pero no hay ningun problema.<br />
          <br />
          <li><span>Pollo de Pollo Feliz</span></li>
          
          <br />
          La especialidad de este local es hacer un pollo con un saber bastante distinto y a un precio decente y asequible , como el anterior de la lista tampoco se encuentra en Espa??a<br />
          <br />
        </ul>

           <video width=\"620\" height=\"440\" controls>
  <source src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/alitas.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
  <source src=\"movie.ogg\" type=\"video/ogg\">
Your browser does not support the video tag.
</video> 


          
        


        <h3>Cita</h3>
        <blockquote>
          <p>\"Comer pollo sin felicidad , es solamente alimentarse. Ser feliz sin comer pollo, es perderse una delicia\" </br> -Bogdan</p>
        </blockquote>


        
        <h3>Formulario de contacto</h3>

        <form action=\"#\">
          <p>Escribe tus datos aqui si quieres recibir noticias de nuevos productos de pollo frito!</br>
        </br>
            <label>Nombre</label>
            <input name=\"dname\" value=\"Tu nombre\" type=\"text\" size=\"30\">
            </br>
            <label>Email</label>
            <input name=\"demail\" value=\"Tu Email\" type=\"text\" size=\"30\">
            
            <br>
            <input class=\"button\" type=\"submit\" value=\"Enviar\">
          </p>
        </form>
        <br>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48913.06422521368!2d-0.04176989249409569!3d39.98461889349264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60012ebd80f6df%3A0x1ef204f04ee884f2!2sRestaurante%20KFC!5e0!3m2!1ses!2ses!4v1645357795390!5m2!1ses!2ses\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
      </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 155,  189 => 99,  182 => 95,  175 => 91,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title%}SuperPollo - Inicio {% endblock %}

{% block body %}
<div class=\"headerphoto\"></div>
  <div id=\"content-wrap\">
    <div id=\"content\">
      <div id=\"sidebar\">
        <div id=\"accordion\">

        <a href=\"\">
        <div class=\"titul\">
          <h3>Short About</h3>
          <div class=\"dentro\">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
        </div>
        </div>
        </a>

        <a href=\"\">
        <div class=\"titul\">
          <h3 class=\"clear\">Sidebar Menu</h3>
          <div class=\"dentro\">
          <ul class=\"sidemenu\">
            <li>Home</li>
            <li>Template Info</li>
            <li>Sample Tags</li>
            <li>More Templates...</li>
            <li>Premium Templates</li>
          </ul>
        </div>
        </div>
        </a>

        <a href=\"\">
        <div class=\"titul\">
          <h3>Sponsors</h3>
          <div class=\"dentro\">
          <ul class=\"sidemenu\">
            <li>Dreamhost</li>
            <li>4templates</li>
            <li>TemplateMonster</li>
            <li>Fotolia.com</li>
            <li>Text Link Ads</li>
          </ul>
        </div>
        </div>
</a>

  <a href=\"\">
        <div class=\"titul\">
          <h3>Wise Words</h3>
          <div class=\"dentro\">
          <p>\"No man can live happily who regards himself alone; who turns everything to his own advantage. You must live for others if you wish to live for yourself.\"</p>
          <p class=\"align-right\">- Seneca</p>
        </div>
        </div>
</a>

<a href=\"\">
        <div class=\"titul\">
          <h3>Support Styleshout</h3>
          <div class=\"dentro\">
          <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation through the donate link on my website - it will be a great help and will surely be appreciated.</p>
        </div>
        </div>
        </div>
        </a>
       

      </div>
      <div id=\"main\">

        
        
         
  <h2>Nuevos Productos!!</h2>  
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <a href=\"/productos/alitas/1\">
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <img src=\"{{ asset('img/pollo1.jpg') }}\" alt=\"Los Angeles\" style=\"width:100%;\">
      </div>

      <div class=\"item\">
        <img src=\"{{ asset('img/pollo2.jpg') }}\" alt=\"Chicago\" style=\"width:100%;\">
      </div>
    
      <div class=\"item\">
        <img src=\"{{ asset('img/pollo3.jpg') }}\" alt=\"New york\" style=\"width:100%;\">
      </div>
    </div>
    </a>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
         

        
        </br>
        </br>
        </br>
          
        <h1>Bienvenido!</h1>

        

        <h3>Introduccion</h3>
        <p>En esta pagina podras consultar mucha informacion sobre todo lo relacionado con el pollo, ya sea frito , en tiras y puede que en el futuro haya mas, mientras tanto te puedes pasar por nuestra increible pagina de <a href=\"/productos\"> productos</a>!.</p>

      <h3>Una receta para hacer pollo frito!!!</h3>

   <ul class=\"lista\"><li id=\"wprm-recipe-10633-step-0-0\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Es recomendable comenzar a preparar este pollo con una marinada, para que la carne tome m??s sabor. Para prepararla, solo hay que meter las piezas en un recipiente con el jugo del lim??n exprimido, pimienta, sal y ajo en polvo.</div></li><li id=\"wprm-recipe-10633-step-0-1\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que prestar atenci??n a que las piezas queden impregnadas de la marinada, de forma m??s o menos uniforme, para que todas tomen sabor.</div></li><li id=\"wprm-recipe-10633-step-0-2\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">El recipiente con el pollo en marinada ir?? al refrigerador por dos horas, idealmente, o en casos con menos tiempo, m??nimo 45 minutos.</div></li><li id=\"wprm-recipe-10633-step-0-3\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Podemos aprovechar para ir alistando los dem??s ingredientes. En un plato o recipiente ancho, vamos a mezclar el pan y la harina con un toque de sal y pimienta. As??, vamos a dejar el polvo listo para cubrir las piezas de pollo antes de fre??rlas.</div></li><li id=\"wprm-recipe-10633-step-0-4\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">En otro bol, vamos a hacer una mezcla con el huevo y la leche. Por aqu?? pasaremos el pollo antes de meterlo en el polvo de harina y pan.</div></li><li id=\"wprm-recipe-10633-step-0-5\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Una vez pasado el tiempo de la marinada, lo siguiente ser?? fre??r el pollo. Para esto, vamos a utilizar un sart??n para calentar el aceite. Para esta receta, la cantidad de aceite debe ser abundante, de manera que el pollo y la cubierta se cocinen bien. En este caso no aplica la idea de \"ponerse light\" controlando la cantidad de aceite. Vamos a calentar el aceite a fuego alto.</div></li><li id=\"wprm-recipe-10633-step-0-6\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Los pedazos de pollo solo deben introducirse en el aceite una vez que este est?? caliente. Antes de meterlos a fre??r, vamos a pasar cada pieza por la mezcla de huevo y leche, de manera que toda su superficie quede bien impregnada, y luego por el plato con la mezcla de harina, para que esta se pegue a la superficie mojada del pollo.</div></li><li id=\"wprm-recipe-10633-step-0-7\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que rotar o voltear bien la pieza al momento de pasarla por la harina, de manera que esta se adhiera por todas partes.</div></li><li id=\"wprm-recipe-10633-step-0-8\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Ahora s??, a sumergir en el aceite caliente a cada pieza que haya pasado por el proceso anterior. Como la idea tampoco es quemarse, si el aceite empieza a saltar, podemos bajar el fuego ligeramente, pero no tanto como para que el aceite deje de estar caliente.</div></li><li id=\"wprm-recipe-10633-step-0-9\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que prestar atenci??n a que las piezas no se peguen entre ellas mientras se fr??en. Lo mejor es dejar un espacio para que se cocinen bien. Tambi??n est?? bien no meter demasiadas piezas en el sart??n al mismo tiempo, ya que esto disminuir??a la temperatura del aceite.</div></li><li id=\"wprm-recipe-10633-step-0-10\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que vigilar las piezas e irlas rotando para que todas sus caras se cocinen. De hecho, en principio, si verdaderamente tienes una buena cantidad de aceite en el sart??n, casi ni tendr??s que mover cada pedazo de pollo, porque el aceite caliente lo cubrir?? por todas partes.</div></li><li id=\"wprm-recipe-10633-step-0-11\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Una vez que cada pieza de pollo est?? bien dorada y cocida por toda la superficie, qu?? hay que sacarla y escurrirla. Yo acostumbro pasarlas a un plato cubierto con papel absorbente, para retirar el exceso de grasa antes de servirlas.</div></li><li id=\"wprm-recipe-10633-step-0-12\" class=\"wprm-recipe-instruction\" style=\"list-style-type: decimal;\"><div class=\"wprm-recipe-instruction-text\" style=\"margin-bottom: 5px\" ;=\"\">Hay que seguir el proceso mencionado con cada pieza, hasta que est??n todas cocidas. Si hiciera falta, hay que verter m??s aceite en el sart??n.</div></li></ul>

   <p> Para mas informacion puedes consultar esta <a href=\"https://www.comedera.com/receta-pollo-frito/\"> pagina</a></p>

        <h3>Lista de locales</h3>
      
        <ul>
          <li><span>Pollo frito de KFC</span></li>
          
          <br />
          Es un pollo de buena calidad pero precio bastante alto, si eres una persona hambrienta puedes gastar entorno a 10??? , una locura.<br />
          <br />
          <li><span>Pollo de Popeyes  </span></li>
          
          <br />
          Este pollo es la combinacion entre precio y calidad , desgrarciadamente no hay locales en Espa??a pero no hay ningun problema.<br />
          <br />
          <li><span>Pollo de Pollo Feliz</span></li>
          
          <br />
          La especialidad de este local es hacer un pollo con un saber bastante distinto y a un precio decente y asequible , como el anterior de la lista tampoco se encuentra en Espa??a<br />
          <br />
        </ul>

           <video width=\"620\" height=\"440\" controls>
  <source src=\"{{ asset('img/alitas.mp4') }}\" type=\"video/mp4\">
  <source src=\"movie.ogg\" type=\"video/ogg\">
Your browser does not support the video tag.
</video> 


          
        


        <h3>Cita</h3>
        <blockquote>
          <p>\"Comer pollo sin felicidad , es solamente alimentarse. Ser feliz sin comer pollo, es perderse una delicia\" </br> -Bogdan</p>
        </blockquote>


        
        <h3>Formulario de contacto</h3>

        <form action=\"#\">
          <p>Escribe tus datos aqui si quieres recibir noticias de nuevos productos de pollo frito!</br>
        </br>
            <label>Nombre</label>
            <input name=\"dname\" value=\"Tu nombre\" type=\"text\" size=\"30\">
            </br>
            <label>Email</label>
            <input name=\"demail\" value=\"Tu Email\" type=\"text\" size=\"30\">
            
            <br>
            <input class=\"button\" type=\"submit\" value=\"Enviar\">
          </p>
        </form>
        <br>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48913.06422521368!2d-0.04176989249409569!3d39.98461889349264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60012ebd80f6df%3A0x1ef204f04ee884f2!2sRestaurante%20KFC!5e0!3m2!1ses!2ses!4v1645357795390!5m2!1ses!2ses\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
      </div>
      </div>
    </div>
  </div>
{% endblock %}
", "page/index.html.twig", "/home/alumno/Documentos/Proyecto/templates/page/index.html.twig");
    }
}
