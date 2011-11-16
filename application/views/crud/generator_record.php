<?php
	echo '<div id="generator_field"><a href="#" id="options" name="'.$column_name.'" rel="add">[opcje] </a>pole ('.$type	.'): '.$column_name.
			'<div id="'.$column_name.'_options" style="display: none;"><br>'.
			Form::label('label_set', 'Widoczny: ').
			Form::checkbox($column_name.'_set', 'yes', TRUE).'<br>'.			
			Form::label('label_text', 'Kontrolka: input').
			Form::radio($column_name.'_control', 'input').'<br>'.
			Form::label('label_textarea', 'Kontrolka: textarea').
			Form::radio($column_name.'_control', 'textarea').'<br>'.
			'<div id="'.$column_name.'_extra"></div><br>'.
		'</div></div>';	
?>
