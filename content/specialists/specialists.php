<div class="row flex-row">
<?php
	$specialists_name = array(
		'David D.',
		'Bill K.',
		'Samantha M.',
		'Katrina T.',
		'Laura C.',
		'Don L.',
		'Ivan R.',
		'Jenna E.',
		'Alyssa N.',
		'Nandita B.',
		'Sierra S.',
		'Lizzie S.',
		'Alison K.',
		'Ashley H.',
		'Anna D.',
		'Alison T.',
		'Paula S.',
		'Claire G.',
		'Evan O.',
		'Meghan M.',
		'Louise D',
		'Kayleigh S',
		'Michael M',
		'Julie B',
		);
	$specialists_type = array(
		'Math',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy and Math',
		'Writing',
		'Writing',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		'Literacy',
		);
	$specialists_school = array(
		'Hunter College​',
		'NYU',
		'NYU',
		'NYU',
		'University of Alabama',
		'Western Connecticut U.',
		'NYU',
		"St. Joseph's",
		'NYU',
		'Williams College',
		'Columbia University',
		'Northeastern University',
		'Bloomsburg University',
		'Columbia University',
		'Hunter College',
		'Brooklyn College',
		'NYU',
		'Manhattan College',
		'Louisiana State University',
		'SUNY College of Old Westbury',
		'Columbia University',
		'NYU',
		'Pace University',
		'George Washington University',
		);
	$specialists_photo = array(
		'david-b',
		'bill-k',
		'samantha-m',
		'katrina-t',
		'laura-c',
		'don-l',
		'ivan-r',
		'jenna-e',
		'alyssa-n',
		'nandita-b',
		'sierra-s',
		'lizzie-s',
		'alison-k',
		'ashley-h',
		'anna-d',
		'alison-t',
		'paula-s',
		'claire-g',
		'evan-o',
		'meghan-m',
		'louise-d',
		'kayleigh-s',
		'michael-m',
		'julie-b',
		);
	for ($i=0; $i < 24 ; $i++):
?>

	<div class="specialist-avatar matchHeight">
		<img src="images/specialists/<?php echo $specialists_photo[$i];?>.png">
		<h5><?php echo $specialists_name[$i];?></h5>
		<h6><?php echo $specialists_type[$i];?> Specialist</h6>
		<h6 class="university">Graduate of <?php echo $specialists_school[$i];?></h6>
	</div>

<?php endfor; ?>

</div>