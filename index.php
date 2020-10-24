<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora Javascript - Projeto 2</title>
        <script src="js/calcula.js" language="javascript"></script>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <form name="calculadora">
            <table align="center" border="2">
                <tr align="center">
                    <th colspan="3"><input type="text" name="visor" id="visor" readonly="readonly"></th>
					<th><button type="button" value="AC" onclick="reinicio()" class="operacao">AC</button></th>
                </tr>
                <tr align="center">
                    <td><button type="button" value="0" onclick="botao(value)">0</button></td>
                    <td><button type="button" value="." onclick="botao(value)">,</button></td>
                    <td><button type="button" value="=" onclick="resultado()" id="calcular">=</button></td>
                    <td><button type="button" value="+" onclick="botao(value)" class="operacao">+</button></td>
                </tr>
				<tr align="center">
                    <td><button type="button" value="1" onclick="botao(value)">1</button></td>
                    <td><button type="button" value="2" onclick="botao(value)">2</button></td>
                    <td><button type="button" value="3" onclick="botao(value)">3</button></td>
                    <td><button type="button" value="-" onclick="botao(value)" class="operacao">-</button></td>
                </tr>
				<tr align="center">
                    <td><button type="button" value="4" onclick="botao(value)">4</button></td>
                    <td><button type="button" value="5" onclick="botao(value)">5</button></td>
                    <td><button type="button" value="6" onclick="botao(value)">6</button></td>
                    <td><button type="button" value="*" onclick="botao(value)" class="operacao">x</button></td>
                </tr>
				<tr align="center">
                    <td><button type="button" value="7" onclick="botao(value)">7</button></td>
                    <td><button type="button" value="8" onclick="botao(value)">8</button></td>
                    <td><button type="button" value="9" onclick="botao(value)">9</button></td>
                    <td><button type="button" value="/" onclick="botao(value)" class="operacao">÷</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>