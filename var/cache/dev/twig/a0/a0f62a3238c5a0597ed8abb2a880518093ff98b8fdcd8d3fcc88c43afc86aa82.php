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

/* admin/basead.html.twig */
class __TwigTemplate_2a1d887e62d299a18aea6d2a98f562d160ade6f0903f339dcbc9188c680b5f45 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/basead.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/basead.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark static-top\">
        <div class=\"container\">
          <a class=\"navbar-brand\" href=\"#\">
                <img height=\"75\" width=\"100\" src=\"https://www.indexel.com/wp-content/uploads/2021/02/hero-quiz-marketing.jpg\" alt=\"\">
          </a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_list");
        echo "\">Quizs</a>
              </li>
              ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creat_quiz");
            echo "\">Cree un Quiz</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Profil</a>
              </li>
              ";
        } else {
            // line 47
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">inscription</a>
              </li>
              ";
        }
        // line 54
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link text-white\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_secret");
            echo "\">Administration</a>
              </li>
              ";
        }
        // line 59
        echo "
            </ul>
          </div>
        </div>
      </nav>
      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "      <div class=\"alert alert-success\">
          ";
            // line 66
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "      <div class=\"alert alert-danger\">
          ";
            // line 71
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "    </body>
    <footer class=\"mainfooter\" role=\"contentinfo\">
      <div class=\"footer-middle\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6\">
            <!--Column1-->
            <div class=\"footer-pad\">
              <h4>About Us</h4>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\">FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <!--Column1-->
            <div class=\"footer-pad\">
              <h4>Information</h4>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\">Accessibility</a></li>
                <li><a href=\"#\">Disclaimer</a></li>
                <li><a href=\"#\">Privacy Policy</a></li>
                <li><a href=\"#\">Webmaster</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <!--Column1-->
            <div class=\"footer-pad\">
              <h4>Contact</h4>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\">Via Rossini 10, 10136 Turin Italy</a></li>
                <li><a href=\"#\">Email: hello@domain.com</a></li>
                <li><a href=\"#\">Skype: you_online</a></li>
                <li>
                  <a href=\"#\"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3\">
            <h4>Follow Us</h4>
                <ul class=\"social-network social-circle\">
                 <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                 <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                 <li><a href=\"#\" class=\"icoYoutube\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>
                 <li><a href=\"#\" class=\"icoInstagram\" title=\"Instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                </ul>\t\t\t\t
        </div>
        </div>
      <div class=\"row\">
        <div class=\"col-md-12 copy\">
          <p class=\"text-center\">&copy; Copyright 2018 - Company Name.  All rights reserved.</p>
        </div>
      </div>
    
    
      </div>
      </div>
    </footer>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" >
        
        <link rel=\"stylesheet\" href=\"css/default.css\">
        
            ";
        // line 16
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            ";
        // line 20
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
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
        return "admin/basead.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 74,  305 => 20,  303 => 19,  293 => 18,  283 => 16,  276 => 10,  266 => 9,  247 => 5,  176 => 75,  173 => 74,  164 => 71,  161 => 70,  156 => 69,  147 => 66,  144 => 65,  140 => 64,  133 => 59,  127 => 56,  124 => 55,  121 => 54,  115 => 51,  109 => 48,  106 => 47,  100 => 44,  94 => 41,  91 => 40,  89 => 39,  84 => 37,  66 => 21,  64 => 18,  61 => 17,  58 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>

        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" >
        
        <link rel=\"stylesheet\" href=\"css/default.css\">
        
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark static-top\">
        <div class=\"container\">
          <a class=\"navbar-brand\" href=\"#\">
                <img height=\"75\" width=\"100\" src=\"https://www.indexel.com/wp-content/uploads/2021/02/hero-quiz-marketing.jpg\" alt=\"\">
          </a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('categorie_list') }}\">Quizs</a>
              </li>
              {% if is_granted('IS_AUTHENTICATED_FULLY') %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('creat_quiz') }}\">Cree un Quiz</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('profil') }}\">Profil</a>
              </li>
              {% else %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_register') }}\">inscription</a>
              </li>
              {% endif %}
              {% if is_granted('ROLE_ADMIN') %}
              <li class=\"nav-item\">
                <a class=\"nav-link text-white\" href=\"{{ path('admin_secret') }}\">Administration</a>
              </li>
              {% endif %}

            </ul>
          </div>
        </div>
      </nav>
      {% for message in app.flashes('success') %}
      <div class=\"alert alert-success\">
          {{ message }}
      </div>
      {% endfor %}
      {% for message in app.flashes('error') %}
      <div class=\"alert alert-danger\">
          {{ message }}
      </div>
      {% endfor %}
        {% block body %}{% endblock %}
    </body>
    <footer class=\"mainfooter\" role=\"contentinfo\">
      <div class=\"footer-middle\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6\">
            <!--Column1-->
            <div class=\"footer-pad\">
              <h4>About Us</h4>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\">FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <!--Column1-->
            <div class=\"footer-pad\">
              <h4>Information</h4>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\">Accessibility</a></li>
                <li><a href=\"#\">Disclaimer</a></li>
                <li><a href=\"#\">Privacy Policy</a></li>
                <li><a href=\"#\">Webmaster</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <!--Column1-->
            <div class=\"footer-pad\">
              <h4>Contact</h4>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\">Via Rossini 10, 10136 Turin Italy</a></li>
                <li><a href=\"#\">Email: hello@domain.com</a></li>
                <li><a href=\"#\">Skype: you_online</a></li>
                <li>
                  <a href=\"#\"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-3\">
            <h4>Follow Us</h4>
                <ul class=\"social-network social-circle\">
                 <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                 <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                 <li><a href=\"#\" class=\"icoYoutube\" title=\"Youtube\"><i class=\"fa fa-youtube\"></i></a></li>
                 <li><a href=\"#\" class=\"icoInstagram\" title=\"Instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                </ul>\t\t\t\t
        </div>
        </div>
      <div class=\"row\">
        <div class=\"col-md-12 copy\">
          <p class=\"text-center\">&copy; Copyright 2018 - Company Name.  All rights reserved.</p>
        </div>
      </div>
    
    
      </div>
      </div>
    </footer>
</html>
", "admin/basead.html.twig", "/home/maxime/Documents/my_quiz (copy)/templates/admin/basead.html.twig");
    }
}
