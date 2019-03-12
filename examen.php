<! DOCTYPE html>
<html>
    <head>
        <title> Adresse client </title>
        <META charset = "utf-8">
    </head>
    <style type="text/css">
        input[type=text]{
            padding-right: 20%;
            padding: 7px;

        }
        fieldset{
            background-color: #fffdd9;
            border-radius: 20px;
            width: 20%;
            height: 45%;
        }
        label{
        
         text-align: left;
         
        }
        
        input{
            border-radius: 5px 5px 5px 5px;
            padding: 10px;
        }    	}

    </style>
    <body>
    	<center>
	        <h1> Vos informations</h1>
	        <form method = "POST" action = "traitement.php" >
	            <fieldset>
	                <legend><h2>renseignez-vous</h2></legend>
	                <table >
	                	<p>
	                		<tr>
	                			<th>
	                				<label>NOM</label>
	                			</th>
	                			<th>
	                				<input type="text" id="nom" name="nom" required="*" >
	                			</th>
	                		</tr>
	                	</p>

                        <p>
                            <tr>
                                <th>
                                    <label>PRENOM</label>
                                </th>
                                <th>
                                    <input type="text" id="prenom" name="prenom" required="*" >
                                </th>
                            </tr>
                        </p>

                        <p>
                            <tr>
                                <th>
                                    <label>ADRESSE</label>
                                </th>
                                <th>
                                    <input type="text" id="Adresse" name="Adresse" required="*" >
                                </th>
                            </tr>
                          </p>

                      <p>
                            <tr>
                                <th>
                                    <label>PROFESSION</label>
                                </th>
                                <th>
                                    <input type="text" id="profession" name="profession" required="*" >
                                </th>
                            </tr>
                        </p>

	                </table> 
	            </fieldset>
	          <p><input type = "submit" value = "ENVOYER" id = "save" name="save" /></p>
	        </form>
        </center>
    </body>
</html>

