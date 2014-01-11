<?php 

### For Bootstrap Text Field
if (!function_exists('text_field'))
	{
		function text_field($name, $label, $value)
		{
			$ui = '<div class="form-group">';

			$ui .= '<div class="form-group">';
			$ui .= Form::label($name, $label, array('class' => 'col-lg-2 control-label'));
			$ui .= '<div class="col-lg-10">';
			$ui .= Form::text($name, $value, array('class' => 'form-control'));
			$ui .= '</div>';
			$ui .= '</div>';

			return $ui;
		}
	}

### For Bootstrap Textarea Field
if (!function_exists('textarea_field'))
{
	function textarea_field($name, $label, $value)
	{
		$ui = '<div class="form-group">';

		$ui .= '<div class="form-group">';
		$ui .= Form::label($name, $label, array('class' => 'col-lg-2 control-label'));
		$ui .= '<div class="col-lg-10">';
		$ui .= Form::textarea($name, $value, array('class' => 'form-control'));
		$ui .= '</div>';
		$ui .= '</div>';

		return $ui;
	}
}

### For Bootstrap REQUEST METHOD
if (!function_exists('is_post'))
{
	function is_post()
	{
		return Input::server('REQUEST_METHOD') == 'POST';
	}
}

### For Bootstrap Password Field
if (!function_exists('password_field'))
{
	function password_field($name, $label)
	{
		$ui = '<div class="form-group">';

		$ui .= '<div class="form-group">';
		$ui .= Form::label($name, $label, array('class' => 'col-lg-2 control-label'));
		$ui .= '<div class="col-lg-10">';
		$ui .= Form::password($name, array('class' => 'form-control'));
		$ui .= '</dvi>';
		$ui .= '</div>';

		return $ui;
	}
}