<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="se">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="project.css" type="text/css" />
    <title>
      Projekt
    </title>
  </head>
  <body>
  	<div id = "wrap">
    	<div id="header">
      		<div id="header-content">
                <h1 id="logo"><a href="index.html" title="">jord<span class="gray">elit</span></a></h1>
                <h2 id="slogan">We believe in pleety grass!</h2>
                <!-- Menu Tabs -->
                <!-- <ul>
                    <li>
                        <a href="index.html">Hem</a>
                    </li>
                    <li>
                        <a href="index.html" id="active">Program</a>
                    </li>
                    <li>
                        <a href="index.html">Bildbank</a>
                    </li>
                    <li>
                        <a href="index.html">Analys</a>
                    </li>
                    <li>
                        <a href="index.html">Forum</a>
                    </li>
                </ul> -->
            </div>
			
			<div id = "under_header">
				<ul>
                    <li>
                        <a href="project.html" id="active">Project 1</a>
                    </li>
                    <li>
                        <a href="project.html">Project 2</a>
                    </li>
                    <li>
                        <a href="index.html">Project 3</a>
                    </li>
                    <li>
                        <a href="index.html">Project 4</a>
                    </li>
                    <li>
                        <a href="index.html">Project 5</a>
                    </li>
					<li>
                        <a href="index.html">Project 6</a>
                    </li>
                </ul>
			</div>
    </div> <!-- slut på header -->
	
	
	<div id="content-wrap">
        <form action="" method="post">
            <!--
            Plan table
            -->
            <table id="plan_table">
				<colgroup span="1">
                	<col class="week" />
                </colgroup>
                <colgroup span="2">
                	<col class="red" />
                	<col class="red" />
                </colgroup>
                <colgroup span="2">
                	<col class="green" />
                	<col class="green" />
                </colgroup>
                <colgroup span="2">
                	<col class="blue" />
                	<col class="blue" />
                </colgroup>
                <colgroup span="2">
                	<col class="orange" />
                	<col class="orange" />
                </colgroup>
                <colgroup span="2">
                	<col class="yellow" />
                	<col class="yellow"  />
                </colgroup>
				<?php
					// table header with the product names
					echo "<thead>";
					echo "<tr>\n";
					echo "<th>Vecka</th>\n";
					for ($nr_of_prod = 0; $nr_of_prod < 10; $nr_of_prod++) {
						echo "<th>ProdName" . ($nr_of_prod+1) . "</th>\n";
					}
					echo "</tr>\n";
					echo "</thead>\n";
					
					// Two loops for the body of the table.  
					echo "<tbody>";
					for ($week = 11; $week <= 42; $week++) {
						// The first column is the weeknumber
						echo "<tr>\n";
						echo "<td>" . $week . "</td>\n";

						// All of the selected products
						for ($nr_of_prod = 0; $nr_of_prod < 10; $nr_of_prod++) {
							echo "<td><input type='text' /></td>\n"; // size='3' ? 						}
						}
						echo "</tr>\n";
					}
				?> 
				</tbody>
            </table><!--
            Plan table end
            -->
            <!--
            Prices table
            -->
            <table id="prices_table" >
                <colgroup span="1" class="week">
                </colgroup>
                <colgroup span="2" class = "red">
                </colgroup>
                <colgroup class="green" span="2">
                </colgroup>
                <colgroup class="blue" span="2">
                </colgroup>
                <colgroup class="orange" span="2">
                </colgroup>
                <colgroup class="yellow" span="2">
                </colgroup>
				
				<?php
					// 	
					$row_text['prices_table'] = Array('Antal förp / yta','Totalt liter/Ha','Liter eller kg','Pris / prod.');
				
					echo "<thead>";
					echo "<tr>\n";
					echo "<th></th>\n";
					// table header with the product names
					for ($nr_of_prod = 0; $nr_of_prod < 10; $nr_of_prod++) {
						echo "<th>ProdName" . ($nr_of_prod+1) . "</th>\n";
					}
					echo "</tr>\n";
					echo "</thead>\n";
			
					// Two loops for the body of the table.  
					echo "<tbody>\n";
					for ($i = 0; $i < 4; $i++) {
						// The first column tells which derived price the row refers to.
						echo "<tr>\n";
						echo "<td>" . $row_text['prices_table'][$i] . "</td>\n";
						// All of the selected products
						for ($nr_of_prod = 0; $nr_of_prod < 10; $nr_of_prod++) {
							echo "<td></td>\n";
						}						
						echo "</tr>\n";
					}
				?>
				</tbody>
            </table>
                <!--
            Prices table end
            -->
            <!--
            Product table
            -->
            <table id="product_table">
                <colgroup class="week" span="1">
                	<col width="150" />
                </colgroup>
                <colgroup class="red" span="2">
                </colgroup>
                <colgroup class="green" span="2">
                </colgroup>
                <colgroup class="blue" span="2">
                </colgroup>
                <colgroup class="orange" span="2">
                </colgroup>
                <colgroup class="yellow" span="2">
                </colgroup>
				<?php
					// 	
					$row_text['product_table'] = Array('Org:','N','P','K','Fe','Mg','Mn','Ca','Zn','Cu','B','Mo','S','Seaweed ','Aminosyror','Humic acid','Förpackningsstorlek','Densitet ','Pris / förpackning');
				
					echo "<thead>";
					echo "<tr>\n";
					echo "<th>Ämnen</th>\n";
					// table header with the product names
					for ($nr_of_prod = 0; $nr_of_prod < 10; $nr_of_prod++) {
						echo "<th>ProdName" . ($nr_of_prod+1) . "</th>\n";
					}
					echo "</tr>\n";
					echo "</thead>\n";
					
					// Two loops for the body of the table.  
					echo "</tbody>\n";
					for ($row = 0; $row < 19; $row++) {
						// The first column tells which substances and other things a product can have.
						echo "<tr>\n";
						echo "<td>" . $row_text['product_table'][$row] . "</td>\n";
						// All of the selected products
						for ($nr_of_prod = 0; $nr_of_prod < 10; $nr_of_prod++) {
							echo "<td></td>\n";
						}
						echo "</tr>\n";
					}
				?>
				</tbody>
            </table>
                <!--
            Product table end
            --><input type="submit" class = "button" value="Spara Projekt" />
        </form>
		</div> <!--slut på content-wrap-->
		</div> <!-- slut på "wrap" -->
		<div id="footer">
                <p>
                            &copy; copyright 2010 <strong>Jordelit</strong> | Design av: <a href="index.html"><strong>Team FISA</strong></a>
                            Valid <a href="http://jigsaw.w3.org/css-validator/check/referer"><strong>CSS</strong></a>
                            / <a href="http://validator.w3.org/check/referer"><strong>XHTML</strong></a>
                </p>
        </div>
            <!-- footer ends here -->
    </body>
</html>