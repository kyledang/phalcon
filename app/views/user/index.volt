{% extends "layouts/index.volt" %}
{% block content %}
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <ul class="list-group">

        {% for user in all  %}
            <li class="list-group-item">
                {{ user.id }}
                {{ user.email }}
            </li>
        {% endfor %}

    </ul>
</div>
{% endblock %}