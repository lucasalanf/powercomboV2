<?php




if(!@($conexao=pg_connect ("host=pg_parceiro.postgresql.dbaas.com.br dbname=pg_parceiro port=5432 user=pg_parceiro password=m2@674"))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
} 


?>
nome, email, telefone1, cep, nro, origem;
  

<form name="form2" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td width="10%" class="tabela" style = "max-width:10px;"><div align="left"><span class="label">ID</span></div></td>
      <td width="10%" class="tabela"><div align="left"><span class="label">DATA</span></div></td>
      <td width="20%" class="tabela"><div align="left"><span class="label">NOME</span></div></td>
      <td width="20%" class="tabela"><div align="left"><span class="label">EMAIL</span></div></td>
      <td width="10%" class="tabela"><div align="left"><span class="label">TELEFONE</span></div></td>
      <td width="10%" class="tabela"><div align="left"><span class="label">CEP</span></div></td>
      <td width="10%" class="tabela"><div align="left"><span class="label">NUMERO</span></div></td>
      <td width="10%" class="tabela"><div align="left"><span class="label">ORIGEM</span></div></td>
    </tr>
<?php
if(!@($conexao=pg_connect ("host=pg_parceiro.postgresql.dbaas.com.br dbname=pg_parceiro port=5432 user=pg_parceiro password=m2@674"))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
   $sql = ("select * from public.".'"'."TB_LEADS".'"'); 
   $result = pg_exec($conexao, $sql); 
   /* Escreve resultados até que não haja mais linhas na tabela */ 
	while($consulta = pg_fetch_array($result)) { 
		echo '<tr>';
		echo '<td width="10%" class="tabela"><div align="left"><span class="label">'.$consulta['ID'].'</span></div></td>';
		echo '<td width="10%" class="tabela"><div align="left"><span class="label">'.$consulta['DT_CADASTRO'].'</span></div></td>';
		echo '<td width="20%" class="tabela"><div align="left"><span class="label">'.$consulta['NOME'].'</span></div></td>';	
    echo '<td width="20%" class="tabela"><div align="left"><span class="label">'.$consulta['EMAIL'].'</span></div></td>'; 
    echo '<td width="10%" class="tabela"><div align="left"><span class="label">'.$consulta['TELEFONE1'].'</span></div></td>';
    echo '<td width="10%" class="tabela"><div align="left"><span class="label">'.$consulta['CEP'].'</span></div></td>';
    echo '<td width="10%" class="tabela"><div align="left"><span class="label">'.$consulta['NRO'].'</span></div></td>';  
    echo '<td width="10%" class="tabela"><div align="left"><span class="label">'.$consulta['ORIGEM'].'</span></div></td>';   
		echo '</tr>';}
		
   pg_close($conexao); 
}

?>
</table> 
  
  </form>
