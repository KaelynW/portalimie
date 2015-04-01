<?php

/* NelmioApiDocBundle::layout.html.twig */
class __TwigTemplate_111625fcf11d65a69b29badcffda99275e8fd67006e205d4c48e48be029236ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["apiName"]) ? $context["apiName"] : $this->getContext($context, "apiName")), "html", null, true);
        echo "</title>
        <style type=\"text/css\">
            ";
        // line 9
        echo (isset($context["css"]) ? $context["css"] : $this->getContext($context, "css"));
        echo "
        </style>
        <script type=\"text/javascript\">
            ";
        // line 12
        echo (isset($context["js"]) ? $context["js"] : $this->getContext($context, "js"));
        echo "
        </script>
    </head>
    <body>
        <div id=\"header\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("nelmio_api_doc_index");
        echo "\"><h1>";
        echo twig_escape_filter($this->env, (isset($context["apiName"]) ? $context["apiName"] : $this->getContext($context, "apiName")), "html", null, true);
        echo "</h1></a>
            ";
        // line 18
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 19
            echo "                <div id=\"sandbox_configuration\">
                    body format:
                    <select id=\"body_format\">
                        <option value=\"x-www-form-urlencoded\"";
            // line 22
            echo ((((isset($context["bodyFormat"]) ? $context["bodyFormat"] : $this->getContext($context, "bodyFormat")) == "form")) ? (" selected") : (""));
            echo ">Form Data</option>
                        <option value=\"json\"";
            // line 23
            echo ((((isset($context["bodyFormat"]) ? $context["bodyFormat"] : $this->getContext($context, "bodyFormat")) == "json")) ? (" selected") : (""));
            echo ">JSON</option>
                    </select>
                    request format:
                    <select id=\"request_format\">
                        <option value=\"json\"";
            // line 27
            echo ((((isset($context["defaultRequestFormat"]) ? $context["defaultRequestFormat"] : $this->getContext($context, "defaultRequestFormat")) == "json")) ? (" selected") : (""));
            echo ">JSON</option>
                        <option value=\"xml\"";
            // line 28
            echo ((((isset($context["defaultRequestFormat"]) ? $context["defaultRequestFormat"] : $this->getContext($context, "defaultRequestFormat")) == "xml")) ? (" selected") : (""));
            echo ">XML</option>
                    </select>
                    ";
            // line 30
            if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && twig_in_filter($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()), array(0 => "query", 1 => "http_basic", 2 => "header")))) {
                // line 31
                echo "                        api key: <input type=\"text\" id=\"api_key\" value=\"\"/>
                    ";
            }
            // line 33
            echo "                    ";
            if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && twig_in_filter($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()), array(0 => "http_basic")))) {
                // line 34
                echo "                        api pass: <input type=\"text\" id=\"api_pass\" value=\"\"/>
                    ";
            }
            // line 36
            echo "                    ";
            if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "custom_endpoint", array()))) {
                // line 37
                echo "                        api endpoint: <input type=\"text\" id=\"api_endpoint\" value=\"\"/>
                    ";
            }
            // line 39
            echo "                </div>
            ";
        }
        // line 41
        echo "            <br style=\"clear: both;\" />
        </div>
        ";
        // line 43
        $this->env->resolveTemplate((isset($context["motdTemplate"]) ? $context["motdTemplate"] : $this->getContext($context, "motdTemplate")))->display($context);
        // line 44
        echo "        <div class=\"container\" id=\"resources_container\">
            <ul id=\"resources\">
                ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "            </ul>
        </div>
        <p id=\"colophon\">
            Documentation auto-generated on ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "
        </p>
        <script type=\"text/javascript\">

            \$(window).load(function() {
                var id = (window.location.hash || '').substr(1).replace( /([:\\.\\[\\]\\{\\}])/g, \"\\\\\$1\");
                var elem = \$('#' + id);
                if (elem.length) {
                    setTimeout(function() {
                        \$('body,html').scrollTop(elem.position().top);
                    });
                    elem.find('a.toggler').click();
                }
            });

            \$('.toggler').click(function() {
                \$(this).next().slideToggle('fast');
            });

            ";
        // line 69
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 70
            echo "                var toggleButtonText = function (\$btn) {
                    if (\$btn.text() === 'Default') {
                        \$btn.text('Raw');
                    } else {
                        \$btn.text('Default');
                    }
                };

                var renderRawBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-raw');

                    \$container.addClass('prettyprinted');
                    \$container.html(\$('<div/>').text(rawData).html());

                    \$btn.removeClass('to-raw');
                    \$btn.addClass('to-prettify');

                    toggleButtonText(\$btn);
                };

                var renderPrettifiedBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-prettify');

                    \$container.removeClass('prettyprinted');
                    \$container.html(prettifyResponse(rawData));
                    prettyPrint && prettyPrint();

                    \$btn.removeClass('to-prettify');
                    \$btn.addClass('to-raw');

                    toggleButtonText(\$btn);
                };

                var unflattenDict = function (body) {
                    var found = true;
                    while(found) {
                        found = false;

                        for (var key in body) {
                            var okey;
                            var value = body[key];
                            var dictMatch = key.match(/^(.+)\\[([^\\]]+)\\]\$/);

                            if(dictMatch) {
                                found = true;
                                okey = dictMatch[1];
                                var subkey = dictMatch[2];
                                body[okey] = body[okey] || {};
                                body[okey][subkey] = value;
                                delete body[key];
                            } else {
                                body[key] = value;
                            }
                        }
                    }
                    return body;
                }

                \$('.tabs li').click(function() {
                    var contentGroup = \$(this).parents('.content');

                    \$('.pane.selected', contentGroup).removeClass('selected');
                    \$('.pane.' + \$(this).data('pane'), contentGroup).addClass('selected');

                    \$('li', \$(this).parent()).removeClass('selected');
                    \$(this).addClass('selected');
                });

                var prettifyResponse = function(text) {
                    try {
                        var data = typeof text === 'string' ? JSON.parse(text) : text;
                        text = JSON.stringify(data, undefined, '  ');
                    } catch (err) {
                    }

                    // HTML encode the result
                    return \$('<div>').text(text).html();
                };

                var displayFinalUrl = function(xhr, method, url, container) {
                    container.text(method + ' ' + url);
                };

                var displayResponseData = function(xhr, container) {
                    var data = xhr.responseText;

                    container.data('raw-response', data);

                    renderPrettifiedBody(container);

                    container.parents('.pane').find('.to-prettify').text('Raw');
                    container.parents('.pane').find('.to-raw').text('Raw');
                };

                var displayResponseHeaders = function(xhr, container) {
                    var text = xhr.status + ' ' + xhr.statusText + \"\\n\\n\";
                    text += xhr.getAllResponseHeaders();

                    container.text(text);
                };

                var displayResponse = function(xhr, method, url, result_container) {
                    displayFinalUrl(xhr, method, url, \$('.url', result_container));
                    displayResponseData(xhr, \$('.response', result_container));
                    displayResponseHeaders(xhr, \$('.headers', result_container));

                    result_container.show();
                };

                \$('.pane.sandbox form').submit(function() {
                    var url = \$(this).attr('action'),
                        method = \$(this).attr('method'),
                        self = this,
                        params = {},
                        headers = {},
                        content = \$(this).find('textarea.content').val(),
                        result_container = \$('.result', \$(this).parent());

                    if (method === 'ANY') {
                        method = 'POST';
                    } else if (method.indexOf('|') !== -1) {
                        method = method.split('|').sort().pop();
                    }

                    // set default requestFormat
                    var requestFormat = \$('#request_format').val();
                    var requestFormatMethod = '";
            // line 202
            echo twig_escape_filter($this->env, (isset($context["requestFormatMethod"]) ? $context["requestFormatMethod"] : $this->getContext($context, "requestFormatMethod")), "html", null, true);
            echo "';
                    if (requestFormatMethod == 'format_param') {
                        params['_format'] = requestFormat;
                    } else if (requestFormatMethod == 'accept_header') {
                        headers['Accept'] = 'application/' + requestFormat;
                    }

                    // set default bodyFormat
                    var bodyFormat = \$('#body_format').val();

                    if(!('Content-type' in headers)) {
                        headers['Content-type'] = 'application/'+bodyFormat;
                    }

                    // retrieve all the parameters to send
                    \$('.parameters .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            params[key] = value;
                        }
                    });

                    // retrieve the additional headers to send
                    \$('.headers .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            headers[key] = value;
                        }

                    });

                    // fix parameters in URL
                    for (var key in \$.extend({}, params)) {
                        if (url.indexOf('{' + key + '}') !== -1) {
                            url = url.replace('{' + key + '}', params[key]);
                            delete params[key];
                        }
                    };

                    // disable all the fiels and buttons
                    \$('input, button', \$(this)).attr('disabled', 'disabled');

                    // append the query authentication
                    if (authentication_delivery == 'query') {
                        url += url.indexOf('?') > 0 ? '&' : '?';
                        url += api_key_parameter + '=' + \$('#api_key').val();
                    }

                    // prepare the api enpoint
                    ";
            // line 259
            if (((((isset($context["endpoint"]) ? $context["endpoint"] : $this->getContext($context, "endpoint")) == "") &&  !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()))) {
                // line 260
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseUrl", array(), "method"), "html", null, true);
                echo "';
                    ";
            } else {
                // line 262
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, (isset($context["endpoint"]) ? $context["endpoint"] : $this->getContext($context, "endpoint")), "html", null, true);
                echo "';
                    ";
            }
            // line 264
            echo "if (\$('#api_endpoint') && \$('#api_endpoint').val() != null) {
                        endpoint = \$('#api_endpoint').val();
                    }

                    // prepare final parameters
                    var body = {};
                    if(bodyFormat == 'json' && method != 'GET') {
                        body = unflattenDict(params);
                        body = JSON.stringify(body);
                    } else {
                        body = params;
                    }
                    var data = content.length ? content : body;

                    // and trigger the API call
                    \$.ajax({
                        url: endpoint + url,
                        type: method,
                        data: data,
                        headers: headers,
                        crossDomain: true,
                        beforeSend: function (xhr) {
                            if (authentication_delivery == 'http_basic') {
                                xhr.setRequestHeader('Authorization', 'Basic ' + btoa(\$('#api_key').val() + ':' + \$('#api_pass').val()));
                            }else if(authentication_delivery == 'header') {
                                xhr.setRequestHeader(api_key_parameter, \$('#api_key').val());
                            }
                        },
                        complete: function(xhr) {
                            displayResponse(xhr, method, url, result_container);

                            // and enable them back
                            \$('input:not(.content-type), button', \$(self)).removeAttr('disabled');
                        }
                    });

                    return false;
                });

                \$('.operations').on('click', '.operation > a', function(e) {
                    if (history.pushState) {
                        history.pushState(null, null, \$(this).attr('href'));
                        e.preventDefault();
                    }
                });

                \$('.pane.sandbox').on('click', '.to-raw', function(e) {
                    renderRawBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-prettify', function(e) {
                    renderPrettifiedBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-expand, .to-shrink', function(e) {
                    var \$headers = \$(this).parents('.result').find('.headers');
                    var \$label = \$(this).parents('.result').find('a.to-expand');

                    if (\$headers.hasClass('to-expand')) {
                        \$headers.removeClass('to-expand');
                        \$headers.addClass('to-shrink');
                        \$label.text('Shrink');
                    } else {
                        \$headers.removeClass('to-shrink');
                        \$headers.addClass('to-expand');
                        \$label.text('Expand');
                    }

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.add', function() {
                    var html = \$(this).parents('.pane').find('.tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.remove', function() {
                    \$(this).parent().remove();
                });

                \$('.pane.sandbox').on('click', '.set-content-type', function(e) {
                    var html;
                    var \$element;
                    var \$headers = \$(this).parents('form').find('.headers');
                    var content_type = \$(this).prev('input.value').val();

                    e.preventDefault();

                    if (content_type.length === 0) {
                        return;
                    }

                    \$headers.find('input.key').each(function() {
                        if (\$.trim(\$(this).val().toLowerCase()) === 'content-type') {
                            \$element = \$(this).parents('p');
                            return false;
                        }
                    });

                    if (typeof \$element === 'undefined') {
                        html = \$(this).parents('.pane').find('.tuple_template').html();

                        \$element = \$headers.find('legend').after(html).next('p');
                    }

                    \$element.find('input.key').val('Content-Type');
                    \$element.find('input.value').val(content_type);

                });

                ";
            // line 381
            if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && ($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()) == "http_basic"))) {
                // line 382
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()), "html", null, true);
                echo "';
                ";
            } elseif ((            // line 383
(isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && ($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()) == "query"))) {
                // line 384
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 385
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "name", array()), "html", null, true);
                echo "';
                var search = window.location.search;
                var api_key_start = search.indexOf(api_key_parameter) + api_key_parameter.length + 1;

                if (api_key_start > 0 ) {
                    var api_key_end = search.indexOf('&', api_key_start);

                    var api_key = -1 == api_key_end
                        ? search.substr(api_key_start)
                        : search.substring(api_key_start, api_key_end);

                    \$('#api_key').val(api_key);
                }
                ";
            } elseif ((            // line 398
(isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && ($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()) == "header"))) {
                // line 399
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery", array()), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 400
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "name", array()), "html", null, true);
                echo "';
                ";
            } else {
                // line 402
                echo "                var authentication_delivery = false;
                ";
            }
            // line 404
            echo "            ";
        }
        // line 405
        echo "        </script>
    </body>
</html>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 46,  521 => 405,  518 => 404,  514 => 402,  509 => 400,  504 => 399,  502 => 398,  486 => 385,  481 => 384,  479 => 383,  474 => 382,  472 => 381,  353 => 264,  347 => 262,  341 => 260,  339 => 259,  279 => 202,  145 => 70,  143 => 69,  121 => 50,  116 => 47,  114 => 46,  110 => 44,  108 => 43,  104 => 41,  100 => 39,  96 => 37,  93 => 36,  89 => 34,  86 => 33,  82 => 31,  80 => 30,  75 => 28,  71 => 27,  64 => 23,  60 => 22,  55 => 19,  53 => 18,  47 => 17,  39 => 12,  33 => 9,  28 => 7,  20 => 1,);
    }
}
