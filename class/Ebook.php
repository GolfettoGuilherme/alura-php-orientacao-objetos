<?php 

	class Ebook extends Livro{
		private $waterMark;


		public function getWaterMark(){
			return $this->waterMark;
		}

		public function setWaterMark($valor){
			$this->waterMark = $valor;
		}

		public function atualizaBaseadoEm($params){
			$this->setIsbn($params['isbn']);
			$this->setWaterMark($params['waterMark']);			
		}
			
	}
?>