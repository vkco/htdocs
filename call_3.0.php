<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Taschenrechner</title>
        <link href="Stylesheets/Stylesheets.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['zahl'])){
    $zahl1 = $_POST['zahl'];
}else{
    $zahl1 = 0;
}
?>

<form name="rechner" action="rechner.php" method="post">
    <input id="feld1" type="hidden" name="zahl1" value="">
    <input id="feld2" type="hidden" name="opera" value="">
    <input id="feld3" type="hidden" name="zahl2" value="">
    <input id="feld4" type="hidden" name="zwischerg" value=>
    <table align="center" style="width:300px; height:450px; border:solid thick black;">
        <tr>
            <td align="center">
                <input id="display" type="text" name="bildschirm" readonly="readonly" style="text-align: center; height: 50px; width: 216px;" value=<?php echo $zahl1; $op; $zahl2 ?>>
            </td>
        </tr>
        <tr>
            <td>
                <table align="center">
                    <tr>
                        <td>
                            <input class="button" type="button" name="zahl" value="1">

                        </td>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="2">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="3">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="operator" value="+">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="4">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="5">
                        </td>
                        <td >
                            <input class="taste" type="submit" name="zahl" value="6">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="operator" value="-">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="7">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="8">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="9">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="operator" value="*">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="taste" type="submit" name="clear" value="C">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="zahl" value="0">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="zahl" value=".">
                        </td>
                        <td>
                            <input class="taste" type="submit" name="operator" value="/">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <input type="submit" name="gleich" value="=" style=" width: 215px; height: 50px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
          <a href="/teest.php">Exit</a><br>
    </table>
</form>
</body>
</html>
