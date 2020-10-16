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
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
    <title>Recipes</title>
</head>
<body>


<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\">Recipes blog</h5>
    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"/recipes/index.php\">Main</a>
        <a class=\"p-2 text-dark\" href=\"#\">Add post</a>
        <a class=\"p-2 text-dark\" href=\"contact/contact.php\">Contact us</a>
    </nav>

    <a class=\"btn btn-outline-primary\" href=\"../recipes/login.php\">Sign in</a>

    <a class=\"btn btn-outline-primary\" href=\"\"><? echo (\$name)?></a>
    <a class=\"\" href=\"/?action=out\">Sign out</a>

</div>


<div class=\"container mt-5\">
    <h3 class=\"mb-5\">Posts</h3>


    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 70
            echo "    <div class=\"d-flex flex-wrap\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h2 class=\"my-0 font-weight-normal\">Title of Post</h2>
                <h4>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "username", [], "any", false, false, false, 74), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"card-body\">
                <img src=\"\" class=\"img-thumbnail\">
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <div>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 79), "html", null, true);
            echo "</div>
                    <div>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 80), "html", null, true);
            echo "</div>
                    <form>dfsfg</form>
                </ul>
                <button type=\"button\" class=\"btn btn-lg btn-block btn-outline-primary\">Details</button>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
    </div>
</div>

    <footer class=\"container pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <small class=\"d-block mb-3 text-muted\">© 2017-2020</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

<div id=\"sidebar\">
    ";
        // line 129
        $this->displayBlock('sidebar', $context, $blocks);
        // line 135
        echo "</div>

<div id=\"content\">
    ";
        // line 138
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "</div>



</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 130
        echo "        <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/blog\">Blog</a></li>
        </ul>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
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
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 138,  196 => 130,  186 => 129,  171 => 139,  169 => 138,  164 => 135,  162 => 129,  118 => 87,  105 => 80,  101 => 79,  93 => 74,  87 => 70,  83 => 69,  49 => 37,  45 => 21,);
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
    <title>Recipes</title>
</head>
<body>


<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\">Recipes blog</h5>
    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"/recipes/index.php\">Main</a>
        <a class=\"p-2 text-dark\" href=\"#\">Add post</a>
        <a class=\"p-2 text-dark\" href=\"contact/contact.php\">Contact us</a>
    </nav>

    <a class=\"btn btn-outline-primary\" href=\"../recipes/login.php\">Sign in</a>

    <a class=\"btn btn-outline-primary\" href=\"\"><? echo (\$name)?></a>
    <a class=\"\" href=\"/?action=out\">Sign out</a>

</div>


<div class=\"container mt-5\">
    <h3 class=\"mb-5\">Posts</h3>


    {% for post in posts %}
    <div class=\"d-flex flex-wrap\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h2 class=\"my-0 font-weight-normal\">Title of Post</h2>
                <h4>{{ user.username }}</h4>
            </div>
            <div class=\"card-body\">
                <img src=\"\" class=\"img-thumbnail\">
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <div>{{ post.title }}</div>
                    <div>{{ post.content }}</div>
                    <form>dfsfg</form>
                </ul>
                <button type=\"button\" class=\"btn btn-lg btn-block btn-outline-primary\">Details</button>
            </div>
        </div>
        {% endfor %}

    </div>
</div>

    <footer class=\"container pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <small class=\"d-block mb-3 text-muted\">© 2017-2020</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                    <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

<div id=\"sidebar\">
    {% block sidebar %}
        <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/blog\">Blog</a></li>
        </ul>
    {% endblock %}
</div>

<div id=\"content\">
    {% block body %}{% endblock %}
</div>



</body>
</html>", "main/index.html.twig", "/Applications/MAMP/htdocs/recipes_symfony/templates/main/index.html.twig");
    }
}
