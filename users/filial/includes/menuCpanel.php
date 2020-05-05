<header>
	<nav class="container-fluid">
		<img id="nav-avatar" src='<?=DIRIMG."avatar.jpeg";?>' class="rounded-circle" alt="avatar">
		<!-- <span id="nav-user"><?=$arrayUser["nome"]; ?></span> -->
		<span id="nav-user">Balcão #4599</span>
		<button class="navbar-toggler" type="button">
			<i class="fa fa-th-list" style=""></i>
		</button>
		<ul class="nav-right">
			<li><a href='<?=DIRPAGE."logout";?>'><i class="fa fa-sign-out-alt" ></i> Sair</a></li>
			<!-- <li><a href="#"><i class="fa fa-bell"></i> Notificações</a></li> -->
		</ul>
	</nav>
</header>
<nav id="menu-vertical">
	<ul>
		<li>
			<a href='<?=DIRPAGE."painel/filial";?>'>
				<i class="fa fa-tachometer-alt"></i>
				<span>Painel de Controle</span>
			</a>
		</li>
		<li class="open-dropdown">
			<a>
				<span><i class="fa fa-user"></i></span>
				<span>Meus Dados
					<i class="fa fa-caret-right"></i>
				</span>
			</a>
			<ul class="dropdown">
				<li><a href="dados-pessoais">Alterar</a></li>
			</ul>
		</li>
		<li class="open-dropdown">
			<a>
				<span><i class='fas fa-cogs'></i></span>
				<span>Solitações
					<i class="fa fa-caret-right"></i>
				</span>
			</a>
			<ul class="dropdown">
				<li><a href="exibir-solicitacoes">Exibir</a></li>
			</ul>
		</li>
		<div id="nav-right-max-1000px"></div>
	</ul>
</nav>