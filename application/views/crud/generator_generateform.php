<?php
	echo  	Form::open('/crud/generate', array('class'=>'generate_form', 'id' => 'generate_form')).
				$data.'<br>'.
			Form::hidden('table_name',$table_name).
			'<div id="generator_relation"><a href="#" id="relation" rel="add">dodaj relację</a></div>'.
			Form::button('submit', __('generuj'),array('class'=>'primaryAction')).
			Form::close();
?>
