
<!DOCTYPE html> 
<html>
 <head>
     <meta charset="utf-8">
	  <title>{{ title }}</title>
	  <link rel="stylesheet" href="assets/css/bootstrap.min.css">	 
	  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
	  <link rel="stylesheet" href="assets/css/bootstrap.css">
	  <link rel="stylesheet"  href="assets/css/style.css">
	{% block head %}
	{% endblock %}
</head>
<body>
	 {% block content %}{% endblock %}

	 
	 <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript" charset="urf-8"></script>
	 <script type="text/javascript" src="assets/js/script.js"></script>	
</body>
</html>