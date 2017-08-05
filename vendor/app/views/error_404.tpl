{% extends 'home/layouts/main.tpl' %}
{% block title %}404 PAGE NOT FOUND{% endblock %}


{% block content %}
<section class="section">
    <div class="container-fluid" style="background: gray; padding: 100px; text-align: center;">
    <i class="fa fa-warning fa-5x" style="color:yellow"></i>
    <h1 class="title is-1" style="color: white;text-shadow: 1px 1px 1px #000;">
        404
    </h1>
    <br>
        <span class="subtitle is-4" style="color: whitesmoke;text-shadow: 1px 1px 1px #000;">
            Oops.. Sorry <font size="7">THE PAGE</font> <font color="red">NOT FOUND</font>
        </span>
    </br>
</div>
</section>
{% endblock %}
