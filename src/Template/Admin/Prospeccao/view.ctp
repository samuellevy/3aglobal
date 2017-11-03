<ul class="timeline">
  <?php
  foreach($prospeccao->mensagem as $item):
    //echo($item->created);
    //print_r($item);
    echo $this->TimelineItem->putItem($item->id, $item->action, $item->created, $item->user->id, $item->user->name, $item->body);
  endforeach;
  ?>
</ul>

<div class="margin">
  <button type="button" class="btn btn-info btn-fill NewEventBtn" data-action="enviou_proposta">Proposta</button>
  <button type="button" class="btn btn-info btn-fill NewEventBtn" data-action="adicionou_comentario">Mensagem</button>
  <button type="button" class="btn btn-info btn-fill NewEventBtn" data-action="cliente_respondeu">Reposta do cliente</button>
  <button type="button" class="btn btn-info btn-fill NewEventBtn" data-action="cliente_aceitou_proposta">Converter</button>
  <button type="button" class="btn btn-info btn-fill NewEventBtn" data-action="cliente_cancelou">Cancelar</button>
</div>

<?php echo $this->element("Nokengo.Prospeccao/response_box");?>
