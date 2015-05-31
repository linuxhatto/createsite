<b>Second</b>

<? echo Form::open('Welcome/second', array('method' => 'post')); ?>
<? echo Form::label('tituloname', 'Nome Titulo'); ?>
<input type="hidden" name="step" value="2"/>
<? echo Form::input('titulo', $titulo); ?>
<? echo form::submit('submit2', 'Next'); ?>
<? echo Form::close(); ?>