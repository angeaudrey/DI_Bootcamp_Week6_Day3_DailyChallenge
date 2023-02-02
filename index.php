 <?php

  function facture($unite)
            {
                if ($unite <=50) 
		{
                    $resultat = $unite * 3.50;
                }
 elseif ($unite > 50 && $unite <= 100)
                {
                    $resultat = $unite * 4.00;
                }
                elseif ($unite > 100)
                {
                    $resultat = $unite * 5.20;
                } elseif ($unite > 250)
                {
                    $resultat = $unite * 6.50;
               }
                return $resultat;
            }
echo facture(164);        
        ?>
