<ul class="nav">
  <?php if($user_role_id == 1):?>
    <li>
        <a href="<?= $this->Url->build(["controller" => "Pages","action" => "home"]);?>">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="<?= $this->Url->build(["controller" => "Users","action" => "index"]);?>">
            <i class="pe-7s-user"></i>
            <p>Usuários</p>
        </a>
    </li>
    <li>
        <a href="<?= $this->Url->build(["controller" => "affiliates","action" => "index"]);?>">
            <i class="pe-7s-world"></i>
            <p>Affiliates</p>
        </a>
    </li>
    <li>
        <a href="<?= $this->Url->build(["controller" => "clients","action" => "index"]);?>">
            <i class="pe-7s-users"></i>
            <p>Clients</p>
        </a>
    </li>
  <?php endif;?>
  <li>
      <a href="<?= $this->Url->build(["controller" => "messages","action" => "index"]);?>">
          <i class="pe-7s-users"></i>
          <p>Messages</p>
      </a>
  </li>
<?php /*
    <li>
        <a href="<?= $this->Url->build(["controller" => "Produtos","action" => "index"]);?>">
            <i class="pe-7s-server"></i>
            <p>Produtos</p>
        </a>
    </li>

    <li>
        <a href="<?= $this->Url->build(["controller" => "Prospeccao","action" => "index"]);?>">
            <i class="pe-7s-calculator"></i>
            <p>Prospecções</p>
        </a>
    </li>
    */?>
</ul>
