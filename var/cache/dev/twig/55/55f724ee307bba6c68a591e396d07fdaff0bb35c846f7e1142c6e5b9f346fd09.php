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

/* main/index.html.twig */
class __TwigTemplate_9526b4488e305db9f13280d446f20a8673a2d9fadb6c29838dfb8e98ad0ed80f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        // line 21
        echo "

";
        // line 37
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    ";
        // line 44
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css\">
    <title>Recipes</title>
</head>
<body>

";
        // line 49
        $this->loadTemplate("header.html.twig", "main/index.html.twig", 49)->display($context);
        // line 50
        echo "
<div class=\"container mt-5\">
    <h3 class=\"mb-5\">Posts</h3>

    <div class=\"columns is-flex-wrap-wrap\" style=\"padding: 2rem\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 56
            echo "        <div class=\"column is-3 mt-3\">
            <div class=\"card\">
";
            // line 64
            echo "                <div class=\"card-content\">
                    <div class=\"media\">
                        <div class=\"media-content\">
                            <p class=\"title is-4\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
                            <p class=\"subtitle is-6\">Name of user</p>
                        </div>
                    </div>

                    <div class=\"content\">
                        ";
            // line 73
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 73), 0, 60) . "..."), "html", null, true);
            echo "


                    </div>
                    <button type=\"button\" class=\"button is-info is-fullwidth btn-block is-light\">Details</button>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </div>
</div>

";
        // line 85
        $this->loadTemplate("footer.html.twig", "main/index.html.twig", 85)->display($context);
        // line 86
        echo "

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 86,  113 => 85,  108 => 82,  93 => 73,  84 => 67,  79 => 64,  75 => 56,  71 => 55,  64 => 50,  62 => 49,  55 => 44,  47 => 37,  43 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/Applications/MAMP/htdocs/recipes_symfony/src/Controller/MainController.php'|file_link(0) }}\">src/Controller/MainController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/Applications/MAMP/htdocs/recipes_symfony/templates/main/index.html.twig'|file_link(0) }}\">templates/main/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %} #}


{#
{% extends 'base.html.twig' %}

{% block body %}

{% for page in pages %}
    <div>
        <h3>{{ page.title }}</h3>
        <p>{{ page.content }}</p>
    </div>

{% endfor %}

{% endblock %} #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    {# <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\"> #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css\">
    <title>Recipes</title>
</head>
<body>

{% include 'header.html.twig' %}

<div class=\"container mt-5\">
    <h3 class=\"mb-5\">Posts</h3>

    <div class=\"columns is-flex-wrap-wrap\" style=\"padding: 2rem\">
        {% for post in posts %}
        <div class=\"column is-3 mt-3\">
            <div class=\"card\">
{#                <div class=\"card-image\">
                    <figure class=\"image is-2by1\">
                        <img src=\"https://images.pexels.com/photos/167635/pexels-photo-167635.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940\"
                             alt=\"Placeholder image\">
                    </figure>
                </div>#}
                <div class=\"card-content\">
                    <div class=\"media\">
                        <div class=\"media-content\">
                            <p class=\"title is-4\">{{ post.title }}</p>
                            <p class=\"subtitle is-6\">Name of user</p>
                        </div>
                    </div>

                    <div class=\"content\">
                        {{ post.content[:60] ~ '...'  }}


                    </div>
                    <button type=\"button\" class=\"button is-info is-fullwidth btn-block is-light\">Details</button>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

{% include 'footer.html.twig' %}


</body>
</html>", "main/index.html.twig", "/Applications/MAMP/htdocs/recipes_symfony/templates/main/index.html.twig");
    }
}
