<?php 

	require('model/model.php');
	
	//controlleur de la page liste X
	function listC(){
		$songs = listLoad();
		require('view/frontend/listView.php');
	}
	//controlleur de la page fiche
	function chartC($id){
		$chart = chartLoad($id);
		$content=formatChart($chart);
		$title='title';
		require('view/frontend/chartView.php');
	}

	function formatChart ($chart){
	
		$formatedChart = '<table class="mdl-data-table">';
		foreach($chart["sections"] as $key => $content){
			if ($key%2 == 0){
				$formatedChart.='<thead><tr><th colspan=8 class="mdl-data-table__cell--non-numeric mdl-typography--text-uppercase">'.$content.'</th></tr></thead><tbody>';
			}
			else {
				$compTab = 0;
				foreach($content as $chord){
					if ($compTab==0){
						$formatedChart.='<tr>';
					}
					if($chord != "-" && strpos($chord, "||") == false && strpos($chord, ")") == false){
						$tmpchord = explode("-", $chord);
					}
					if(isset($tmpchord) && count($tmpchord) > 1){
						$formatedChart.='<td colspan=1 class="mdl-data-table__cell--non-numeric">'.$tmpchord[0].'</td>';
						$formatedChart.='<td colspan=1 class="mdl-data-table__cell--non-numeric">'.$tmpchord[1].'</td>';
					}
					else{
						$formatedChart.='<td colspan=2 class="mdl-data-table__cell--non-numeric">'.$chord.'</td>';
					}
					unset($tmpchord);
					$compTab++;
					if ($compTab>=4){
						$formatedChart.='</tr>';
						$compTab=0;
					}
				}
				$formatedChart.='</tbody>';
				
			}
		}
		$formatedChart.='</table>';
		return $formatedChart;
	}

	

?>