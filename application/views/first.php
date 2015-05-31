<b>First</b>

<? echo Form::open('Welcome/first', array('method' => 'post')); ?>
<? echo Form::label('tituloname', 'Nome Titulo'); ?>
<input type="hidden" name="step" value="2"/>
<? echo Form::input('titulo1', $titulo1); ?>
<? echo form::submit('submit', 'Next'); ?>
<? echo Form::close(); ?>