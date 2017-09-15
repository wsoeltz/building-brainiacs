<!DOCTYPE html>
<html>
<head>
	<title>Building Brainiacs</title>
    <meta name="description" content="">
    <?php include 'includes/head.php'; ?>
</head>
<body>
	<header class="header">
	    <?php include 'includes/header.php'; ?>
	</header>
	<article class="body services">
		<section class="services-cover-photo">
		    <?php include 'content/services/services-header.php'; ?>
		</section>
		<section class="services-content">
			<div class="row">
				<div class="card matchHeight">
				    <?php include 'content/services/diagnostic-literacy-evaluations.php'; ?>
			    </div>
				<div class="card matchHeight">
				    <?php include 'content/services/tutoring.php'; ?>
			    </div>
		    </div>
		</section>
		<section class="services-rates">
		    <?php include 'content/services/rates.php'; ?>
		</section>
	</article>
	<footer class="footer">
	    <?php include 'includes/footer.php'; ?>
	</footer>
</body>
</html>