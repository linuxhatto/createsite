<b>Third</b>
<? echo Form::open('Welcome/third', array('method' => 'post')); ?>
<? echo Form::label('tituloname', 'Nome Titulo'); ?>
<input type="hidden" name="step" value="2"/>
<? echo Form::input('titulo', $titulo); ?>
<? echo form::submit('submit3', 'Next'); ?>
<? echo Form::close(); ?>