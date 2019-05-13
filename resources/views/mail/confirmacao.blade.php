<h1>Confirmação de agendamento</h1>

<p>Olá {{$agendamento->cliente}}! </p>

<p>sua {{$agendamento->servicos->nome}} foi agendado para o dia {{$agendamento->dataHora->format("d/m/Y H:i")}}. </p>

<p>Chegue com 15min de antecedência.</p>