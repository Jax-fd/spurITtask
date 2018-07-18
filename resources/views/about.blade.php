@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">О САЙТЕ</div>

                <div class="panel-body pan_about">
                    <p>Наш сайт поможет вам в изучении 1000 популярных английских слов. </p>
					<p>При изучении слов мы часто сталкиваемся с тем, что без практики через большой промежуток времени мы их начинаем забывать. 
					   Наша система позволит повторять слова поэтапно через разные промежутки времени, начиная с 1-4 и заканчивая 20-30 днями. 
					   Однако, если вы на любом этапе ответите неправильно, он обнулиться до первого. Текущий этап и дату повторений каждого слова вы можете 
					   увидеть в своем словаре. Если он еще пустой, то выможете пополнить его. Если вы пропустили этап повторения в назначенный день,
					   то вы сможете повторить его в любой из следующих.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection