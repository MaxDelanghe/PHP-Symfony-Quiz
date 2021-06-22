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

/* quiz/creat.html.twig */
class __TwigTemplate_2e97dbe792b59c2048c9aeb90f5563286126febce24c00ad662590495a697aed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/creat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/creat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/creat.html.twig", 1);
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

        echo "Cree Quiz";
        
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
        echo "<div class=\"container\">
    <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_verif");
        echo "\"  method=\"POST\">
        <p>Regle pour cree un quiz:</p>
        <p>Minimum 5 questions</p>
        <p>Le champ №1 de chaques question sera la reponse correcte (les reponses seront afficher plus tard de mainiere aleatoire)</p>
        <p>Il doit toujour avoir 3 reponses pour une question</p>
        <div class=\"form-group\">
            <label for=\"categorie-select\">Choisisez une categorie:</label>
                <select name=\"categorie\" id=\"pet-select\" >
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 16
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </select>
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Choisisez un nom pour votre quiz</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Choisisez une image (sous forme url) pour votre quiz</label>
            <input type=\"text\" class=\"form-control\" id=\"image\" name=\"image\" required>
        </div>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "        ";
            if ((0 === twig_compare($context["i"], 6))) {
                // line 30
                echo "        <p>Question minimale atteint vous pouvez l'envoyer maintenant si vous le souhaiter ou bien continuer</p>
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
        ";
            }
            // line 33
            echo "        ";
            if ((0 === twig_compare($context["i"], 11))) {
                // line 34
                echo "        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
        ";
            }
            // line 36
            echo "        ";
            if ((0 === twig_compare($context["i"], 16))) {
                // line 37
                echo "        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
        ";
            }
            // line 39
            echo "        <div class=\"form-group\" style=\"border: 1px dashed #000000; margin:1em; padding:1em;\">
            ";
            // line 40
            if ((0 >= twig_compare($context["i"], 1))) {
                // line 41
                echo "                <label for=\"Question №";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">Question №";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                <input style=\" box-shadow: 0 0 3px #301eda;\" required type=\"text\" placeholder=\"Question №";
                // line 42
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"form-control\" id=\"Q";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" name=\"Q";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" >
                <div style=\"padding:1.5em;\">
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 45
                    echo "                    ";
                    if ((0 === twig_compare($context["a"], 1))) {
                        // line 46
                        echo "                    <label for=\"Reponse №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " for Question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">Reponse №";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " pour la question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</label>
                    <input style=\" box-shadow: 0 0 3px #63cc00;\"required type=\"text\" placeholder=\"la reponse correct\"  class=\"form-control\" id=\"R";
                        // line 47
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" name=\"R";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" >
                    ";
                    } else {
                        // line 49
                        echo "                    <label for=\"Reponse №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " for Question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">Reponse №";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " pour la question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</label>
                    <input style=\" box-shadow: 0 0 3px #cc2900;\" required placeholder=\"reponse fausse\" type=\"text\" class=\"form-control\" id=\"R";
                        // line 50
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" name=\"R";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">
                    ";
                    }
                    // line 52
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                </div>
            ";
            } else {
                // line 55
                echo "                <label for=\"Question №";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">Question №";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                <input style=\" box-shadow: 0 0 3px #301eda;\" type=\"text\" placeholder=\"Question №";
                // line 56
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"form-control\" id=\"Q";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" name=\"Q";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
                ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 58
                    echo "                <div style=\"padding:1.5em;\">
                    ";
                    // line 59
                    if ((0 === twig_compare($context["a"], 1))) {
                        // line 60
                        echo "                    <label for=\"Reponse №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " for Question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">Reponse №";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " pour la question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</label>
                    <input style=\" box-shadow: 0 0 3px #63cc00;\" type=\"text\" placeholder=\"la reponse correct\"  class=\"form-control\" id=\"R";
                        // line 61
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" name=\"R";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" >
                    ";
                    } else {
                        // line 63
                        echo "                    <label for=\"Reponse №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " for Question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">Reponse №";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " pour la question №";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</label>
                    <input style=\" box-shadow: 0 0 3px #cc2900;\" placeholder=\"reponse fausse\" type=\"text\" class=\"form-control\" id=\"R";
                        // line 64
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" name=\"R";
                        echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                        echo " Q";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">
                    ";
                    }
                    // line 66
                    echo "                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "
            ";
            }
            // line 70
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/creat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 72,  316 => 70,  312 => 68,  305 => 66,  294 => 64,  283 => 63,  272 => 61,  261 => 60,  259 => 59,  256 => 58,  252 => 57,  244 => 56,  237 => 55,  233 => 53,  227 => 52,  216 => 50,  205 => 49,  194 => 47,  183 => 46,  180 => 45,  176 => 44,  167 => 42,  160 => 41,  158 => 40,  155 => 39,  151 => 37,  148 => 36,  144 => 34,  141 => 33,  136 => 30,  133 => 29,  129 => 28,  117 => 18,  106 => 16,  102 => 15,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cree Quiz{% endblock %}

{% block body %}
<div class=\"container\">
    <form action=\"{{ path('quiz_verif') }}\"  method=\"POST\">
        <p>Regle pour cree un quiz:</p>
        <p>Minimum 5 questions</p>
        <p>Le champ №1 de chaques question sera la reponse correcte (les reponses seront afficher plus tard de mainiere aleatoire)</p>
        <p>Il doit toujour avoir 3 reponses pour une question</p>
        <div class=\"form-group\">
            <label for=\"categorie-select\">Choisisez une categorie:</label>
                <select name=\"categorie\" id=\"pet-select\" >
                    {% for categorie in categories %}
                        <option value=\"{{categorie.id}}\">{{categorie.name}}</option>
                    {% endfor %}
                </select>
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Choisisez un nom pour votre quiz</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Choisisez une image (sous forme url) pour votre quiz</label>
            <input type=\"text\" class=\"form-control\" id=\"image\" name=\"image\" required>
        </div>
        {% for i in 1..20 %}
        {% if i == 6 %}
        <p>Question minimale atteint vous pouvez l'envoyer maintenant si vous le souhaiter ou bien continuer</p>
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
        {% endif %}
        {% if i == 11 %}
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
        {% endif %}
        {% if i == 16 %}
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
        {% endif %}
        <div class=\"form-group\" style=\"border: 1px dashed #000000; margin:1em; padding:1em;\">
            {% if i <= 1 %}
                <label for=\"Question №{{i}}\">Question №{{i}}</label>
                <input style=\" box-shadow: 0 0 3px #301eda;\" required type=\"text\" placeholder=\"Question №{{i}}\" class=\"form-control\" id=\"Q{{i}}\" name=\"Q{{i}}\" >
                <div style=\"padding:1.5em;\">
                {% for a in 1..3 %}
                    {% if a == 1 %}
                    <label for=\"Reponse №{{i}} for Question №{{i}}\">Reponse №{{a}} pour la question №{{i}}</label>
                    <input style=\" box-shadow: 0 0 3px #63cc00;\"required type=\"text\" placeholder=\"la reponse correct\"  class=\"form-control\" id=\"R{{a}} Q{{i}}\" name=\"R{{a}} Q{{i}}\" >
                    {% else %}
                    <label for=\"Reponse №{{i}} for Question №{{i}}\">Reponse №{{a}} pour la question №{{i}}</label>
                    <input style=\" box-shadow: 0 0 3px #cc2900;\" required placeholder=\"reponse fausse\" type=\"text\" class=\"form-control\" id=\"R{{a}} Q{{i}}\" name=\"R{{a}} Q{{i}}\">
                    {% endif %}
                {% endfor %}
                </div>
            {% else %}
                <label for=\"Question №{{i}}\">Question №{{i}}</label>
                <input style=\" box-shadow: 0 0 3px #301eda;\" type=\"text\" placeholder=\"Question №{{i}}\" class=\"form-control\" id=\"Q{{i}}\" name=\"Q{{i}}\">
                {% for a in 1..3 %}
                <div style=\"padding:1.5em;\">
                    {% if a == 1 %}
                    <label for=\"Reponse №{{i}} for Question №{{i}}\">Reponse №{{a}} pour la question №{{i}}</label>
                    <input style=\" box-shadow: 0 0 3px #63cc00;\" type=\"text\" placeholder=\"la reponse correct\"  class=\"form-control\" id=\"R{{a}} Q{{i}}\" name=\"R{{a}} Q{{i}}\" >
                    {% else %}
                    <label for=\"Reponse №{{i}} for Question №{{i}}\">Reponse №{{a}} pour la question №{{i}}</label>
                    <input style=\" box-shadow: 0 0 3px #cc2900;\" placeholder=\"reponse fausse\" type=\"text\" class=\"form-control\" id=\"R{{a}} Q{{i}}\" name=\"R{{a}} Q{{i}}\">
                    {% endif %}
                </div>
                {% endfor %}

            {% endif %}
        </div>
        {% endfor %}
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
    </form>
</div>
{% endblock %}

", "quiz/creat.html.twig", "/home/maxime/Documents/my_quiz (copy)/templates/quiz/creat.html.twig");
    }
}
