<?php ob_start() ; ?>
<div class="col-md-12">
	<form action="/index.php/damier" method="post">
		
		<h3>Taille du damier</h3>

		<input type="number" value="0" min="0" max="50" name="damier_nb">

			<br>
			<br>

		<input type="submit" value="Générer" class="btn btn-default">
	</form>
</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>