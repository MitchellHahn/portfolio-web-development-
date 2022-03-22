<!-- Portfolio Titel -->

<h2>Portfolio</h2>

<!-- Werkervaring Titel (css) -->

<?php
$portfolio = new PortfolioClass();
?>
<!-- Werkervaring Tabel -->

<div class="row">
	<div class="col col-s12">
		<div class="center">
		  <p><h3>Werkervaring</h3></p>
		</div>
		<table class="table table-dark">
			<thead>
				<th width="200">Website</th>
				<th width="400">Bedrijf</th>
				<th>Functie</th>
				<th>Omschrijving</th>
				<th>jaar</th>
			</thead>
			<tbody>
			<!-- Werkervaring van Database(portfolio_onderwijs) -->
				<?php
				foreach($portfolio->Werkervaring() as $werkervaring) {
				?>
				<tr>
					<td><a href="<?php echo $werkervaring->website ?>" target="_blank"><img src="https://portfolio.adainforma.tk/mitchell/<?php echo $werkervaring->afbeelding ?>" width="110" /></a></td>
					<td><?php echo $werkervaring->functie; ?></td>
					<td><?php echo $werkervaring->functie ?></td>
					<td><?php echo $werkervaring->omschrijving ?></td>
					<td><?php echo $werkervaring->jaar ?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<!-- Onderwijs -->
<div class="row">
	<div class="col col-s12">
		<div class="center">
		  <p><h3>Onderwijs</h3></p>
		</div>
		
		<table class="table table-dark">
			<thead>
				<th width="200">Website</th>
				<th width="300">School</th>
				<th>Opleiding</th>
				<th>Niveau</th>
				<th>jaar</th>
			</thead>
			<tbody>
			<!-- Onderwijs van database(portfolio_onderwijs) -->
				<?php
				foreach($portfolio->Onderwijs() as $onderwijs) {
				?>
				<tr>
					<td><a href="<?php echo $onderwijs->website ?>" target="_blank"><img src="https://portfolio.adainforma.tk/mitchell/<?php echo $onderwijs->afbeelding ?>" width="110" /></a></td>
					<td><?php echo $onderwijs->school ?></td>
					<td><?php echo $onderwijs->opleiding ?></td>
					<td><?php echo $onderwijs->niveau ?></td>
					<td><?php echo $onderwijs->jaar ?></td>
				</tr>
				<?php
				}
				?>	
								
			</tbody>
		</table>
	</div>
</div>

<!-- Diploma's en certificaten -->

<div class="row">
	<div class="col col-s12">
		<div class="center">
		  <p><h3>Certificaten</h3></p>
		</div>
		
		<table class="table table-dark">
			<thead>
 			    <th width="200">Website</th>
				<th width="300">Onderwijs</th>
				<th>Certificaat</th>
				<th>Verval datum</th>
				<th>Behaald op</th>
			</thead>
			<tbody>
			<!-- Certificaten van database(portfolio_certificaten) -->
                <?php
				foreach($portfolio->Certificaten() as $certificaten) {
				?>
				<tr>
					<td><a href="<?php echo $certificaten->website ?>" target="_blank"><img src="https://portfolio.adainforma.tk/mitchell/<?php echo $certificaten->afbeelding ?>" width="110" /></a></td>
					<td><?php echo $certificaten->onderwijs ?></td>
					<td><?php echo $certificaten->certificaat ?></td>
					<td><?php echo $certificaten->verval_datum ?></td>
					<td><?php echo $certificaten->behaald_op ?></td>
				</tr>
				<?php
				}
				?>	
				
			</tbody>
		</table>
	</div>
</div>
