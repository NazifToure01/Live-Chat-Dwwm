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

/* chat/index.html.twig */
class __TwigTemplate_f39868e991afdcb9a1c34726df47498e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Live chat</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">

</head>
<body>

<div class=\"container-sm mt-4\" >
    <div >

        <div class=\"card text-left\">
    <div class=\"card-header\" style=\"background-color: black\">
        <h1 style=\"width: 100%; text-align: center; color: #FFFFFF\">Live message by DWWM</h1>
        ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 20
            echo "            <div style=\"margin-left: 80%\">
                <button type=\"button\" class=\"btn btn-primary mb-1\" style=\"font-size: 12px;\" >
                    <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: #FFFFFF\">Se deconnecter</a></button>
                <button type=\"button\" class=\"btn btn-info mb-1\" style=\" font-size: 12px;\" >
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" style=\"color: #FFFFFF\">Edit profile</a></button>

            </div>
        ";
        } else {
            // line 28
            echo "                <button type=\"button\" class=\"btn btn-primary \" style=\"margin-left: 80%\"  ><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: #FFFFFF\">Se connecter</a></button>
                <button type=\"button\" class=\"btn btn-secondary\"  ><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
            echo "\" style=\"color: #FFFFFF\">S'inscrire</a></button>

        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 34
            echo "        <div class=\"me-2 position-relative d-flex justify-content-start align-items-end mt-n5\">
            <img src=\"/profilpics/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "profilpic", [], "any", false, false, false, 35), "html", null, true);
            echo "\" alt=\"avatar\" height=\"90px\" width=\"90px\" class=\"avatar-xl rounded-circle border border-4 border-primary position-relative\">
            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"position-absolute ml-4\">
                <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/checked-mark.svg"), "html", null, true);
            echo "\" alt=\"virifé\" height=\"30px\" width=\"30px\">
            </a> <span style=\"font-size: 25px; color: #FFFFFF\">@";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "pseudo", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 42
            echo "            <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", [0 => "alert"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 46
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>

    <div class=\"card-body\" id=\"overflowTest\" style=\"background-color: #FFFFFF\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "            <h6 class=\"card-title \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "getAuthor", [], "method", false, false, false, 52), "pseudo", [], "any", false, false, false, 52), "html", null, true);
            echo "</h6>
            <p class=\"card-text\" style=\"background-color: #DDDDDD; border-radius: 20px; padding: 15px; margin: 0;\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "corpsMessge", [], "any", false, false, false, 53), "html", null, true);
            echo " </p>
            <div style=\"margin-left: 80%; font-size: 10px\"> ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createAt", [], "any", false, false, false, 54), "H:i"), "html", null, true);
            echo "</div>
            <p>
                <span style=\" background-color: #5eb5e0; border: #999999; padding: 5px; border-radius: 5px\"><a style=\"color: #FFFFFF\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Edit</a></span> | <span style=\" background-color:#FF5733 ; border: #999999; padding: 5px; border-radius: 5px\"><a style=\"color: #FFFFFF\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">delete</a></span>
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div>
</div>
</div>

    ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 64
            echo "        <div class=\"w-100\">
            ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start');
            echo "
            <div class=\"mb-3 m-3\">
                ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "corps_messge", [], "any", false, false, false, 67), 'row');
            echo "
            </div>
            <div class=\"mb-3 m-3 \">
                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "send", [], "any", false, false, false, 70), 'row');
            echo "
            </div>
            ";
            // line 72
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
            echo "

        </div>
        ";
        } else {
            // line 76
            echo "        <div>
            <p style=\"text-align: center; color: #B0413E; font-size: 20px\"  class=\"mt3\">
                Veuillez vous connectez ou créér un compte si vous n'en avez pas encore !
            </p>
        </div>

    ";
        }
        // line 83
        echo "

</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "chat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 83,  219 => 76,  212 => 72,  207 => 70,  201 => 67,  196 => 65,  193 => 64,  191 => 63,  185 => 59,  174 => 56,  169 => 54,  165 => 53,  160 => 52,  156 => 51,  151 => 48,  142 => 46,  138 => 45,  135 => 44,  126 => 42,  121 => 41,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  100 => 34,  98 => 33,  95 => 32,  89 => 29,  84 => 28,  77 => 24,  72 => 22,  68 => 20,  66 => 19,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Live chat</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/style.css\") }}\">

</head>
<body>

<div class=\"container-sm mt-4\" >
    <div >

        <div class=\"card text-left\">
    <div class=\"card-header\" style=\"background-color: black\">
        <h1 style=\"width: 100%; text-align: center; color: #FFFFFF\">Live message by DWWM</h1>
        {% if is_granted('ROLE_USER') %}
            <div style=\"margin-left: 80%\">
                <button type=\"button\" class=\"btn btn-primary mb-1\" style=\"font-size: 12px;\" >
                    <a href=\"{{ path('app_logout') }}\" style=\"color: #FFFFFF\">Se deconnecter</a></button>
                <button type=\"button\" class=\"btn btn-info mb-1\" style=\" font-size: 12px;\" >
                    <a href=\"{{ path('app_edit_profil', {id:app.user.id}) }}\" style=\"color: #FFFFFF\">Edit profile</a></button>

            </div>
        {% else %}
                <button type=\"button\" class=\"btn btn-primary \" style=\"margin-left: 80%\"  ><a href=\"{{ path('app_login') }}\" style=\"color: #FFFFFF\">Se connecter</a></button>
                <button type=\"button\" class=\"btn btn-secondary\"  ><a href=\"{{ path('app_inscription') }}\" style=\"color: #FFFFFF\">S'inscrire</a></button>

        {% endif %}

        {% if is_granted('ROLE_USER') %}
        <div class=\"me-2 position-relative d-flex justify-content-start align-items-end mt-n5\">
            <img src=\"/profilpics/{{ app.user.profilpic }}\" alt=\"avatar\" height=\"90px\" width=\"90px\" class=\"avatar-xl rounded-circle border border-4 border-primary position-relative\">
            <a href=\"{{ path('app_edit_profil', {id:app.user.id}) }}\" class=\"position-absolute ml-4\">
                <img src=\"{{ asset('images/checked-mark.svg')}}\" alt=\"virifé\" height=\"30px\" width=\"30px\">
            </a> <span style=\"font-size: 25px; color: #FFFFFF\">@{{ app.user.pseudo }}</span>
        </div>
        {% endif %}
        {% for notification in app.flashes('notice') %}
            <div class=\"alert alert-info\">{{ notification }}</div>
        {% endfor %}

        {% for notification in app.flashes('alert') %}
            <div class=\"alert alert-danger\">{{ notification }}</div>
        {% endfor %}
    </div>

    <div class=\"card-body\" id=\"overflowTest\" style=\"background-color: #FFFFFF\">
        {% for message in messages %}
            <h6 class=\"card-title \">{{message.getAuthor().pseudo }}</h6>
            <p class=\"card-text\" style=\"background-color: #DDDDDD; border-radius: 20px; padding: 15px; margin: 0;\">{{ message.corpsMessge }} </p>
            <div style=\"margin-left: 80%; font-size: 10px\"> {{ message.createAt|date(\"H:i\") }}</div>
            <p>
                <span style=\" background-color: #5eb5e0; border: #999999; padding: 5px; border-radius: 5px\"><a style=\"color: #FFFFFF\" href=\"{{ path('app_edit_message', {id:message.id}) }}\">Edit</a></span> | <span style=\" background-color:#FF5733 ; border: #999999; padding: 5px; border-radius: 5px\"><a style=\"color: #FFFFFF\" href=\"{{ path('app_delete_message', {id:message.id}) }}\">delete</a></span>
            </p>
        {% endfor %}
    </div>
</div>
</div>

    {% if is_granted('ROLE_USER') %}
        <div class=\"w-100\">
            {{ form_start(form) }}
            <div class=\"mb-3 m-3\">
                {{ form_row(form.corps_messge) }}
            </div>
            <div class=\"mb-3 m-3 \">
                {{ form_row(form.send) }}
            </div>
            {{ form_end(form) }}

        </div>
        {% else %}
        <div>
            <p style=\"text-align: center; color: #B0413E; font-size: 20px\"  class=\"mt3\">
                Veuillez vous connectez ou créér un compte si vous n'en avez pas encore !
            </p>
        </div>

    {% endif %}


</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>
</body>
</html>", "chat/index.html.twig", "/Users/zif/Documents/Projets Symfony/livechat/templates/chat/index.html.twig");
    }
}
