<?php
	echo  	Form::open('/crud/check', array('class'=>'check_form', 'id' => 'check_form')).
			Form::select('table_name', $tables).
			Form::button('submit', __('Sprawdź'),array('class'=>'primaryAction')).
			'<div id="generator_desc">'.$table_name.'</div>'.
			Form::close();
?>
