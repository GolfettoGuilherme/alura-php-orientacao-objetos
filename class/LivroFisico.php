<?php  


	class LivroFisico extends Livro{
		
		private $taxaImpressao;
		
		public function getTaxaImpressao(){
			return $this->taxaImpressao;
		}

		public function setTaxaImpressao($valor){
			$this->taxaImpressao = $valor;
		}

		public function atualizaBaseadoEm($params){
			$this->setIsbn($params['isbn']);
			$this->setTaxaImpressao($params['taxaImpressao']);
		}
	}


?>