<i class="fa fa-area-chart "></i> Área Territorial : {{number_format($m->dados->area_territorial?? '',0,'.','.')}} Km²<br>
<i class="fa fa-globe"></i> Densidade Demográfica: {{$m->dados->densidade_demografica?? ''}} hab/Km²<br>
<i class="fa fa-globe"></i> Latitude Decimal: {{$m->dados->latitude_decimal?? ''}}<br>
<i class="fa fa-globe"></i> Longitude Decimal: {{$m->dados->longitude_decimal?? ''}}<br>
<i class="fa fa-group"></i> População Estimada: {{number_format($m->detalhe->populacao_estimada??'',0,'.','.')}}<br>
