
<?php
		echo  Form::open('/admin/member/'.$action, array('class'=>'uniForm', 'id' => 'validationForm')).
		
		Form::hidden('record',isset($hidden_id) ? $hidden_id : '').
		'<fieldset class="inlineLabels">'.
				
					'<div class="ctrlHolder">'.
						Form::label('name', __('name').':').
						Form::input('name',$name,array('class'=>'textInput required')).'<br />'.
					'</div>'.
				
					'<div class="ctrlHolder">'.
						Form::label('data', __('data').':').
						Form::input('data',$data,array('class'=>'textInput required')).'<br />'.
					'</div>'.
				
					'<div class="ctrlHolder">'.
						Form::label('age', __('age').':').
						Form::textarea('age',$age,array('class'=>'textInput required')).'<br />'.
					'</div>'.
				
			'<div class="buttonHolder">'.
				Form::button('submit', __('Zapisz'),array('class'=>'primaryAction')).
				Form::close().
			'</div>'.

		'</fieldset>';
?>	
		