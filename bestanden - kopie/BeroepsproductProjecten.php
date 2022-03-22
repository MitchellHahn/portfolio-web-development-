<div class="row">
	<div class="col">
		<h1>Projecten</h1>
		
		<table class="table table-dark table-hovered">
		<thead>
			<th width="350">Projectnaam</th>
			<th width="180">Begin datum</th>
			<th width="180">Eind datum</th>
			<th width="250">Aantal deelnemers</th>
			<th width="160">Locatie</th>
			<th>Beschrijving</th>
		</thead>
		<tbody>
		<?php
		$projecten = new Projecten();
		
		foreach($projecten->alleprojecten() as $project) {
			echo "
				<tr>
					<td valign='top'>".$project->projectnaam."</td>
					<td valign='top'>".$project->start_datum."</td>
					<td valign='top'>".$project->datum_inlevering."</td>
					<td valign='top'>".$project->deelnemers."</td>
					<td valign='top'>".$project->locatie."</td>
					<td valign='top'>".$project->beschrijving."</td>
				</tr>
			";
		}
		?>
		</tbody>
		</table>
	</div>
</div>