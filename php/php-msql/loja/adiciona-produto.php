<?php

	$nome  = $_GET[ "nome" ];
	$preco = $_GET[ "preco" ];

	include ( 'head.php' ); 
?>

	<?php if ( $nome && $preco  ): ?>
		
		<h1>
			Produto <?php echo $nome; ?>, R$ <?php echo $preco; ?> adicionado com sucesso.
		</h1>

	<?php endif ?>
	
	
<?php 

	include ( 'footer.php' ); 
?>