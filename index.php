<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/styles.css" rel="stylesheet" type="text/css"/>
    <link href="./styles/banner.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <title>Document</title>
    <style type="text/css">
        table{
            margin-left: 8%;
	        margin-bottom: 0.8rem;
        }
        
        th,td{
            border: 1px solid black;
            border-collapse:collapse;
            padding:5px;
        }
    </style>


</head>
<body>
      
   <div>
    <main>
        <div class="contenedor">
            <div >
                    <h2 class="sty_Titulo" aling =left>Encapsulamiento</h2>
                    <h4 class="sty_label">Se tiene distintos atributos en privado y protegido en las diferentes clases</h4>
                    
                    <div class="sty_label"><?php require_once("./Clases_php/Usuario.php");
                        $obUsuario = new Usuario("Enna","Matamoros",39,"EnnaM@outlook.com");
                        echo "".$obUsuario->getDatos();
                        echo "<br";?>
                    </div>       
            </div>

            <div>
                <h2 class="sty_Titulo" aling=left>Abstracción</h2>
                <h4 class="sty_label">La clase Usuario extiende de una clase abstracta el cual contiene un método abstracto el cual muestra la información</h4>   
                    <div class="sty_label"><?php require_once("./Clases_php/Usuario.php");
                        $obUsuario = new Usuario("Iván","Ortiz",39,"ivnaot@gmail.com");
                        echo "".$obUsuario->getDatos();
                        echo "<br";?>
                    </div>  

            </div>
                 
            
            <div>
                    <h2 class="sty_Titulo" aling=left>Herencia</h2>
                    <h4 class="sty_label">La clase Cliente y Empleado hereda atributos y métodos de la clase Usuario.</h4>   
                    <h4 class="sty_label">Y la clase Jefe hereda de la clase Empleado, en este caso esta el método calcular el sueldo que esta en Empleado pero lo podemos usar con la clase Jefe.</h4>   
                        
                    <table>
                    <tr class="sty_label">
                    <th >Empleado</th>
                    <th >Cliente</th>
                    <th >Jefe</th>
                    </tr>
                    <tr class="sty_label">
                        <td>
                        <?php require_once("./Clases_php/Empleado.php");
                        $obEmpleado = new Empleado("Juan","Ruíz",38,"juanru@gmail.com","Jefe",8970);
                        echo "Número de plaza ".$obEmpleado->getNum_plaza()."<br>";                            
                        echo "".$obEmpleado->getDatos();
                        echo "<br> Sueldo: ".$obEmpleado->calsueldo(8,80);   
                        echo "<br";?>
                        
                        </td>
                        <td><?php require_once("./Clases_php/Cliente.php");
                            $obCliente = new Cliente("Socorro","Medina",28,"Somedina@hotmail.com",15789);
                            echo "".$obCliente->getDatos();                            
                            echo "<br";?>
                        </td>
                        <td><?php require_once("./Clases_php/Jefe.php");
                            $obJefe = new Jefe("Rubicela","Hernandez",30,"rubich@hotmail.com","Jefe",9284,"Estadistica");
                            echo "".$obJefe->getDatos();   
                            echo "<br> Sueldo: ".$obJefe->calsueldo(8,120);                       
                            echo "<br";?>
                        </td>
                    </tr>

                    </table>               

            </div>

            
            
            <div>
                <h2 class="sty_Titulo" aling=left>Polimorfismo</h2>
                <h4 class="sty_label">El metodo de getDatos que esta en las clases de Empleado, Cliente y Jefe se hereda de la Clase Usuario,</h4>  
                <h4 class="sty_label">La cual es modificada en cada una de las clases para mostrar nuevos datos.</h4>  
                
                <br> 
                <table>
                    <tr class="sty_label">
                    <th>Empleado</th>
                    <th>Cliente</th>
                    <th>Jefe Departamento</th>
                    </tr>
                    
                    <tr class="sty_label">
                        <td>
                        <?php require_once("./Clases_php/Empleado.php");
                        $obEmpleado = new Empleado("Pedro","López",50,"pedroLop@gmail.com","Secretario",8070);
                        echo "Número de plaza ".$obEmpleado->getNum_plaza()."<br>";                            
                        echo "".$obEmpleado->getDatos();
                        echo "<br> Sueldo: ".$obEmpleado->calsueldo(8,80);   
                        echo "<br";?>
                        
                        </td>
                        <td><?php require_once("./Clases_php/Cliente.php");
                            $obCliente = new Cliente("Alejandra","Lorenzana",25,"alexlore@hotmail.com",54475);
                            echo "".$obCliente->getDatos();                            
                            echo "<br";?>
                        </td>
                        <td><?php require_once("./Clases_php/Jefe.php");
                            $obJefe = new Jefe("Maria","Rincon",40,"mariarincon@hotmail.com","Jefe",9284,"Informatica");
                            echo "".$obJefe->getDatos();   
                            echo "<br> Sueldo: ".$obJefe->calsueldo(8,120);                       
                            echo "<br";?>
                        </td>
                    </tr>

                </table> 
            </div>
                        
        </div>
            

    </main>

   </div>     
    
</body>
</html>